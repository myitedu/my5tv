<?php
error_reporting(0); //error_reporting(E_ALL);
/*~ inc.sanitize.php
.---------------------------------------------------------------------------.
|  Software: PHPMailer-FE (Form mailer Edition), input sanitizer            |
|   Version: 4.0.5                                                          |
|   Contact: codeworxtech@users.sourceforge.net                             |
|      Info: http://phpmailer.worxware.com                                  |
| ------------------------------------------------------------------------- |
|    Author: Andy Prevost andy.prevost@worxteam.com (admin)                 |
| Copyright (c) 2002-2009, Andy Prevost. All Rights Reserved.               |
| NOTE:      Original Input Sanitizer was found in an internet search. As   |
|            much as I would like to attribute this to the original         |
|            author(s), the only line included is:                          |
|            // input sanitizer function - LDM 2008                         |
|            I have modified the file for use with PHPMailer-FE ... if      |
|            anyone knows the original author, please let me know.          |
| ------------------------------------------------------------------------- |
|   License: Distributed under the Lesser General Public License (LGPL)     |
|            http://www.gnu.org/copyleft/lesser.html                        |
| This program is distributed in the hope that it will be useful - WITHOUT  |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     |
| FITNESS FOR A PARTICULAR PURPOSE.                                         |
| ------------------------------------------------------------------------- |
| We offer a number of paid services:                                       |
| - Web Hosting on highly optimized fast and secure servers                 |
| - Technology Consulting                                                   |
| - Oursourcing (highly qualified programmers and graphic designers)        |
'---------------------------------------------------------------------------'
Last updated: October 17 2009 00:45 EST

/**
 * PHPMailer-FE - PHP Form To Email (Input Sanitizer)
 *
 * PHPMailer-FE is an HTML form to e-mail gateway that parses the results of
 * any form and sends them to the specified recipient(s). This script has many
 * formatting and operational options, most of which can be specified in each
 * form. You don't need programming knowledge or multiple scripts for
 * multiple forms. PHPMailer-FE also has security features to prevent users
 * from including URLs in fields containing "nourl" or "comments" in the field name.
 * PHPMailer-FE was written to be compatible with Formmail.pl and Formmail.php
 *
 * @package PHPMailer-FE
 * @author Andy Prevost
 * @copyright 2008-2009 Andy Prevost
 */

function _sanitize($data) {

  // special cleanups, hex
  $data = preg_replace("/x1a/",'', $data);
  $data = preg_replace("/x00/",'', $data);

  // the 2 tests above may not be needed due to this more complete test
  $data = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $data);

  $data = preg_replace("|\.\./|",'', $data);     // stop directory traversal
  $data = preg_replace("/--/",' - ', $data);     // stop mySQL comments
  $data = preg_replace("/%3A%2F%2F/",'', $data); // stop B64 encoded '://'

  // Remove Null Characters
  // This prevents sandwiching null characters
  // between ascii characters, like Java\0script.
  $data = preg_replace('/\0+/', '', $data);
  $data = preg_replace('/(\\\\0)+/', '', $data);

  // Validate standard character entities
  // Add a semicolon if missing.  We do this to enable
  // the conversion of entities to ASCII later.
  $data = preg_replace('#(&\#*\w+)[\x00-\x20]+;#u',"\\1;",$data);

  // Validate UTF16 two byte encoding (x00)
  // Just as above, adds a semicolon if missing.
  $data = preg_replace('#(&\#x*)([0-9A-F]+);*#iu',"\\1\\2;",$data);

  // URL Decode
  // Just in case stuff like this is submitted:
  // <a href="http://%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D">Google</a>
  // Note: Normally urldecode() would be easier but it removes plus signs
  //$data = preg_replace("/([a-z0-9]{3})/i", "&#x\\1;", $data);
  //$data = preg_replace("/%([a-z0-9]{2})/i", "&#x\\1;", $data);

  // Convert character entities to ASCII
  // This permits our tests below to work reliably.
  // We only convert entities that are within tags since
  // these are the ones that will pose security problems.
  if (preg_match_all("/<(.+?)>/si", $data, $matches)) {
    for ($i = 0; $i < count($matches['0']); $i++) {
      $data = str_replace($matches['1'][$i],
      html_entity_decode($matches['1'][$i], ENT_COMPAT, $charset), $data);
    }
  }

  // Convert all tabs to spaces
  // This prevents strings like this: ja    vascript
  // Note: we deal with spaces between characters later.
  $data = preg_replace("#\t+#", " ", $data);

  // Makes PHP tags safe
  // Note: XML tags are inadvertently replaced too:
  //    <?xml
  // But who cares, only terrorists use XML. :)
  $data = str_replace(array('<?php', '<?PHP', '<?', '?>'),  array('&lt;?php', '&lt;?PHP', '&lt;?', '?&gt;'), $data);

  // Compact any exploded words
  // This corrects words like:  j a v a s c r i p t
  // These words are compacted back to their correct state.
  $words = array('javascript', 'vbscript', 'script', 'applet', 'alert', 'document', 'write', 'cookie', 'window');
  foreach ($words as $word) {
    $temp = '';
    for ($i = 0; $i < strlen($word); $i++) {
      $temp .= substr($word, $i, 1)."\s*";
    }
    $temp = substr($temp, 0, -3);
    $data = preg_replace('#'.$temp.'#s', $word, $data);
    $data = preg_replace('#'.ucfirst($temp).'#s', ucfirst($word), $data);
  }

  // Remove disallowed Javascript in links or img tags
  $data = preg_replace("#<a.+?href=.*?(alert\(|alert&\#40;|javascript\:|window\.|document\.|\.cookie|<script|<xss).*?\>.*?</a>#si", "", $data);
  $data = preg_replace("#<img.+?src=.*?(alert\(|alert&\#40;|javascript\:|window\.|document\.|\.cookie|<script|<xss).*?\>#si","", $data);
  $data = preg_replace("#<(script|xss).*?\>#si", "", $data);

  // Remove JavaScript Event Handlers
  // Note: This code is a little blunt.  It removes
  // the event handler and anything up to the closing >,
  // but it's unlikely to be a problem.
  $data = preg_replace('#(<[^>]+.*?)(onabort|onactivate|onafterprint|onafterupdate|onbeforeactivate|onbeforecopy|onbeforecut|onbeforedeactivate|onbeforeeditfocus|onbeforepaste|onbeforeprint|onbeforeunload|onbeforeupdate|onblur|onbounce|oncellchange|onchange|onclick|oncontextmenu|oncontrolselect|oncopy|oncut|ondataavailable|ondatasetchanged|ondatasetcomplete|ondblclick|ondeactivate|ondrag|ondragend|ondragenter|ondragleave|ondragover|ondragstart|ondrop|onerror|onerrorupdate|onfilterchange|onfinish|onfocus|onfocusin|onfocusout|onhelp|onkeydown|onkeypress|onkeyup|onlayoutcomplete|onload|onlosecapture|onmousedown|onmouseenter|onmouseleave|onmousemove|onmouseout|onmouseover|onmouseup|onmousewheel|onmove|onmoveend|onmovestart|onpaste|onpropertychange|onreadystatechange|onreset|onresize|onresizeend|onresizestart|onrowenter|onrowexit|onrowsdelete|onrowsinserted|onscroll|onselect|onselectionchange|onselectstart|onstart|onstop|onsubmit|onunload)[^>]*>#iU',"\\1>",$data);

  // Sanitize naughty HTML elements
  // If a tag containing any of the words in the list
  // below is found, the tag gets converted to entities.
  // So this: <blink>
  // Becomes: &lt;blink&gt;
  $data = preg_replace('#<(/*\s*)(alert|vbscript|javascript|applet|basefont|base|behavior|bgsound|blink|body|embed|expression|form|frameset|frame|head|html|ilayer|iframe|input|layer|link|meta|object|plaintext|style|script|textarea|title|xml|xss|lowsrc)([^>]*)>#is', "&lt;\\1\\2\\3&gt;", $data);

  // Sanitize naughty scripting elements
  // Similar to above, only instead of looking for
  // tags it looks for PHP and JavaScript commands
  // that are disallowed.  Rather than removing the
  // code, it simply converts the parenthesis to entities
  // rendering the code un-executable.
  // For example:    eval('some code')
  // Becomes:        eval('some code')
  $data = preg_replace('#(alert|cmd|passthru|eval|exec|system|fopen|fsockopen|file|file_get_contents|readfile|unlink)(\s*)\((.*?)\)#si', "\\1\\2(\\3)", $data);

  // Final clean up
  // This adds a bit of extra precaution in case
  // something got through the above filters
  $bad = array(
    'document.cookie'    => '',
    'document.write'    => '',
    'window.location'    => '',
    "javascript\s*:"    => '',
    "Redirect\s+302"    => '',
    '<!--'            => '&lt;!--',
    '-->'            => '--&gt;'
  );

  foreach ($bad as $key => $val)    {
    $data = preg_replace("#".$key."#i", $val, $data);
  }

  return trim($data);
}
// END function _sanitize
?>

