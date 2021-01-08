<?php
error_reporting(E_ALL);
/*~ phpmailer-fe.php
.---------------------------------------------------------------------------.
|  Software: PHPMailer-FE (Form mailer Edition)                             |
|   Version: 4.11                                                           |
|   Contact: codeworxtech@users.sourceforge.net                             |
|      Info: http://phpmailer.sourceforge.net                               |
| ------------------------------------------------------------------------- |
|    Author: Andy Prevost andy.prevost@worxteam.com (admin)                 |
| Copyright (c) 2002-2015, Andy Prevost. All Rights Reserved.               |
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
Last updated: March 11 2015 00:25 EST

/**
 * PHPMailer-FE - PHP Form To Email
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
 * @copyright 2008-2015 Andy Prevost
 */

/* ****************************************************************
 * Setting up PHPMailer-FE - REQUIRED FOR OPTIONAL SETTINGS
 * below are variables not set by form fields or config files
 * ***************************************************************/

/**
 * NOTE: replacements for deprecated functions
 */
if(!function_exists('ereg_replace'))    { function ereg_replace($pattern, $replacement, $string) { return preg_replace('/'.$pattern.'/', $replacement, $string); } }
if(!function_exists('eregi_replace'))   { function eregi_replace($pattern, $replacement, $string) { return preg_replace('/'.$pattern.'/i', $replacement, $string); } }

/**
 * Defined Term, PHPMailer-FE Version number (for debugging mostly)
 * @var static string
 *
 * NOTE: Required here, do not change
 *
 */
define("VERSION", "4.11");

/**
 * Defined Term, PHPMailer-FE base path (works with Linux and Windows)
 * @var static string
 *
 * NOTE: Required here, do not change
 *
 */
define("FEPATH", getcwd() . substr($_SERVER['PHP_SELF'],0,1) );

/**
 * Ban List file name, fully qualified including directory
 * ie. /home/public_html/account/banlog.php
 * - can only be set in the script
 * @var string
 * NOTE: Required here, change only if filename altered
 */
$fileBanlist = FEPATH . 'banlog.php';

/**
 * Use Ban List, protect from URLs in fields containing "nourl" or "comments" in name
 * - can only be set in the script
 * @var boolean
 * NOTE: Required here, change as needed
 */
$useBanlist  = false;
if (is_writable($fileBanlist)) {
  $useBanlist  = true;
}

/**
 * Redirect URL if banned or hacked or failed Worx Turing test
 * - can only be set in the script
 * @var boolean
 */
$redirectOnBan  = "http://" . $_SERVER['HTTP_HOST'];

/**
 * REQUIRED: value determines if the javascript window close will be
 * used when the default messages display after processing the form
 * - useful for POPUP style forms
 * default is "false"
 * @var boolean
 * NOTE: Required here, change as needed
 */
$useWindowClose = false;

/**
 * Used as the charset for HTML emails
 * default is "iso-8859-1"
 * @var string
 * NOTE: Required here, change as needed
 */
$htmlCharset    = "iso-8859-1";

/**
 * Attempts to prevent page refresh on PHPMailer-FE script page
 * to stop duplicate emails sent for the same form submission
 * default is true;
 * @var bool
 * NOTE: Required here, change as needed
 */
$stopRefresh    = false; //true;

/**
 * Cleans user submitted data of all known hacker and SQL injection attempts
 * default is true;
 * @var bool
 * NOTE: Required here, change as needed
 */
$useSanitizer    = true; //false;

/* ****************************************************************
 * BLOCK ALL ATTEMPTS TO USE URL-BASED EMAIL HACKS (STOP SPAMMERS)
 * AND BLOCK ALL ATTEMPTS TO PRESS THE RELOAD AFTER EXECUTION
 * ***************************************************************/
if ($stopRefresh) {
  session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'GET' || isset($_SESSION['process_time'])) {
    echo "Sorry, nothing to display ...<br />";
    exit();
  } elseif (isset($_SESSION['referer'])) {
    if (getenv('HTTP_REFERER') != '' || isset($_POST['referer'])) {
      if (isset($_POST['referer'])) {
        if ($_SESSION['referer'] == $_POST["referer"]) {
          echo "Sorry, nothing to display ...<br />";
          exit();
        }
      } elseif ($_SESSION['referer'] == getenv('HTTP_REFERER')) {
        echo "Sorry, nothing to display ...<br />";
        exit();
      }
    }
  } else {
    $_SESSION['process_time'] = time();
    if (getenv('HTTP_REFERER') != '' || isset($_POST['referer'])) {
      if (isset($_POST['referer'])) {
        $_SESSION['referer'] = $_POST["referer"];
      } else {
        $_SESSION['referer'] = getenv('HTTP_REFERER');
      }
    }
  }
} else {
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Sorry, nothing to display ...<br />";
    exit();
  }
}

/**
 * Convert all $_POST arrays as individual $_POST inputs
 */
foreach ($_POST as $key => $value) {
  if (is_array($value)) {
    foreach ($_POST[$key] as $postkey => $postvalue) {
      $_POST[$key.'_'.$postkey]  = $postvalue;
    }
    unset($_POST[$key]);
  }
}

/**
 * Clean all user submitted data of hack and SQL injection attempts
 */
if ($useSanitizer) {
  $getSanitizePath = $_SERVER['DOCUMENT_ROOT'] . str_replace('//','/',dirname($_SERVER['PHP_SELF']) . '/inc.sanitize.php');
  if (file_exists($getSanitizePath)) {
    require_once($getSanitizePath);
    foreach ($_POST as $key => $value) {
      $_POST[$key] = _sanitize($value);
    }
  }
}

/**
 * 1. Convert all $_POST variables to a regular variable
 * 2. Checks all $_POSTs for URL type input
 *    - will exit and not proceed if URL type input is found
 * NOTE1: REQUIRED, PLEASE DO NOT CHANGE ... NEEDED TO SET VARIABLES PROPERLY
 * NOTE2: Processing here because many of the settings can be altered by the form
 * NOTE3: Processing here because External Config will also alter settings (after the form)
 */
foreach ($_POST as $key => $value) {
  $key    = strtolower($key);
  $value  = str_replace("\n","<br />",$value);
  $hacked = false;
  if (is_array($value)) {
    $$key  = $value;
  } else {
    $$key  = trim(utf8_urldecode($value));
  }
  if ($useBanlist && is_writable($fileBanlist)) {
    if (!stristr($key, 'url')) { // will only search if 'url' not found in $key
      $hacked = FALSE;
      $hacked = checkBannedInput($key,$value,$fileBanlist);
    }
  }
  if ($hacked === TRUE) {
    echo "Comments were not sent ...<br />";
    echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"10; URL=" . $redirectOnBan . "\">";
    if ($useWindowClose) {
      echo '<script language="javascript" type="text/javascript">' . "\n";
      echo 'setTimeout("self.close()", 5000 )' . "\n";
      echo '</script>' . "\n";
    }
    exit();
  }
}

/**
 * include external configuration files
 */
$loadDefault = FEPATH . 'default.config.php';
if (file_exists($loadDefault)) {
  include_once($loadDefault);
  foreach ($_POST as $key => $value) {
    $key   = strtolower($key);
    $value = str_replace("\n","<br />",$value);
    if (is_array($value)) {
      $$key  = $value;
    } else {
      $$key  = trim(utf8_urldecode($value));
    }
  }
}
if (getenv('HTTP_REFERER') != '' || isset($_POST['referer'])) {
  if (isset($_POST['referer'])) {
    $path_parts = pathinfo(trim($_POST["referer"]));
  } else {
    $path_parts = pathinfo(getenv('HTTP_REFERER'));
  }
  $filearr = explode('.',$path_parts["basename"]);
  if (count($filearr) > 1) {
    $loadFile = '';
    $tplDir   = '';
    for ($i=0;$i<count($filearr)-1;$i++) {
      $loadFile .= $filearr[$i] . '.';
      $tplDir   .= $filearr[$i];
    }
    $loadFile .= 'config.php';
    $tplDir   .= '/';
  }
  $loadFile = FEPATH . $tplDir . $loadFile;
  if (file_exists($loadFile)) {
    include_once($loadFile);
    foreach ($_POST as $key => $value) {
      if ($key!='fixedFromEmail' && $key!='fixedFromName') {
        $key   = strtolower($key);
      }
      $value = str_replace("\n","<br />",$value);
      $$key  = trim(utf8_urldecode($value));
    }
  }
}
$loadDefault = '';
$loadFile    = '';

$imgProcessing = '';
if (file_exists('_src/processing.gif')) {
  $imgProcessing = '<img id="feprocessing" border="0" src="_src/processing.gif" width="200" height="84"><br />';
}
//check connect through proxy or not
$proxydescription = "";
$remoteaddr       = $_SERVER['REMOTE_ADDR'];
$http_via         = getenv('HTTP_VIA');
$http_forwarded   = getenv('HTTP_X_FORWARDED_FOR');
$remoteport       = getenv('REMOTE_PORT');
//no proxy case or highly anonymous case
if($http_via == NULL && $http_forwarded == NULL) {
  $remote = $remoteaddr;
  $proxyip = $remoteaddr;
  $hostname = gethostbyaddr($remoteaddr);
  $proxyhostname = gethostbyaddr($remoteaddr);
  $proxydescription = "No Proxy or a High Anonymity Proxy";
} else if(strcmp($remote, $http_via) == 0 && strcmp($http_forwarded, $http_via) != 0) {
  //Transparent Proxy or Anonymous Proxy case
  $remote = $http_forwarded;
  $proxyip = $remoteaddr;
  $hostname = gethostbyaddr($http_forwarded);
  $proxyhostname = gethostbyaddr($remoteaddr);
  $proxydescription = "Transparent Proxy or Anonymous Proxy";
} else {
  //Highly Anonymous Proxy case
  $remote = $remoteaddr;
  $proxyip = $remoteaddr;
  $hostname = gethostbyaddr($remoteaddr);
  $proxyhostname = gethostbyaddr($remoteaddr);
  $proxydescription = "Highly Anonymous Proxy";
}
$_POST['IP']   = $proxyip;
$_POST['HOST'] = $proxyhostname;

/* ****************************************************************
 * Optional Form Configuration that can be set in script or in form
 * Note: can also be set in External Configuration file
 * ***************************************************************/

/**
 * Value determines if the script will update the CSV log file
 * default is "false"
 * @var boolean
 */
if ($_POST['addToCSV']===true) {
  $addToCSV = true;
} else {
  $addToCSV = false;
}

/**
 * Set if you wish the email to be from this email address instead of the
 * email address of the sender
 * @var string
 */
if (!isset($fixedFromEmail)) {
  $fixedFromEmail = ''; //'webmaster@thisdomain.com';
}
if (!isset($fixedFromName)) {
  $fixedFromName  = ''; //'Webmaster'
}

/**
 * 'Swap' out hack attempts
 * @var array
 */
if (!isset($email_bad_array)) {
  $email_bad_array = "\r|\n|to:|cc:|bcc:";
}

/**
 * Determines whether to use multi-mime (default) or text only
 * @var boolean
 */
if (!isset($text_only)) {
  $text_only = false;
}

/**
 * Email Address to send the form contents "To"
 * - can be set in the script or in the form as a form variable
 * - for security, use this instead of using the form
 * @var string
 */
if (!isset($recipient)) {
  $recipient = 'yourname@yourdomain.com';
} else {
  $recipient = eregi_replace($email_bad_array,'',$recipient);
  $recipient = str_replace(' ', '', $recipient);
}

/**
 * Email Address to "Cc" the form contents
 * separate multiple email addresses by comma
 * - for security, use this instead of using the form
 * ie: johndoe@yourdomain.com,janedoe@yourdomain.com
 * - can be set in the script or in the form as a form variable
 * @var string
 */
if (!isset($cc)) {
  $cc = "";
} else {
  $cc = eregi_replace($email_bad_array,'',$cc);
  $cc = str_replace(';', ' ', $cc);
  $cc = str_replace(' ', '', $cc);
}

/**
 * Email Address to "Bcc" the form contents
 * separate multiple email addresses by comma
 * - for security, use this instead of using the form
 * ie: johndoe@yourdomain.com,janedoe@yourdomain.com
 * - can be set in the script or in the form as a form variable
 * @var string
 */
if (!isset($bcc)) {
  $bcc = '';
} else {
  $bcc = eregi_replace($email_bad_array,'',$bcc);
  $bcc = str_replace(';', ' ', $bcc);
  $bcc = str_replace(' ', '', $bcc);
}

/**
 * Subject for email that is sent to "recipient"
 * - can be set in the script or in the form as a form variable
 * @var string
 */
if (!isset($subject)) {
  $subject = 'Form Submission' . ' from: ' . $_SERVER['HTTP_HOST'];
} else {
  $subject = eregi_replace($email_bad_array,'',$subject);
  $subject = stripslashes($subject);
}

/**
 * Option to include System Environment Variables with form content
 * - can be set in the script or in the form as a form variable
 * Note: comment out to disable
 * @var array
 */
if (!isset($env_report)) {
  //$env_report = array ();
  $env_report = array ('REMOTE_HOST','REMOTE_USER','REMOTE_ADDR','HTTP_USER_AGENT','HTTP_REFERER');
}

/**
 * Defines the file extensions of files that can be emailed as attachments to you
 * - can only be set in the script
 * @var array
 */
if (!isset($allowedFileTypes)) {
  $allowedFileTypes = "doc|docx|xls|xlsx|pdf|jpg|jpeg|png|gif|zip|rar|gz";
}

/**
 * Redirect URL on any failures
 * does not apply to banned or hacked or failed Worx Turing test
 * @var boolean
 * NOTE: will 'build' a page if this variable is missing
 */
if (!isset($redirectOnFail)) {
  $redirectOnFail  = '';
}

/**
 * Email template to send to form submitter on successful post
 * @var boolean
 * NOTE: email in html format only in same folder as PHPMailer-FE
 * NOTE: if variable is empty, no reply email will be sent
 */
if (!isset($replyEmailOnSuccess)) {
  $replyEmailOnSuccess  = '';
}

/**
 * Subject to use when $replyEmailOnSuccess is used
 *   default is 'Thank You'
 * @var string
 * NOTE: if $replyEmailOnSuccess variable is empty or false,
 *   no success email will be sent and this subject line will be ignored
 */
if (!isset($subjectEmailOnSuccess)) {
  $subjectEmailOnSuccess = 'Thank You';
}

/**
 * Email template to send to form submitter on failed post
 * does not apply to banned or hacked or failed Worx Turing test
 * @var boolean
 * NOTE: email in html format only in same folder as PHPMailer-FE
 * NOTE: if variable is empty, no reply email will be sent
 * NOTE: please keep in mind that if there is a failure, one of the
 *   possible (and highly likely) causes is that the email address
 *   is not valid.
 */
if (!isset($replyEmailOnFail)) {
  $replyEmailOnFail = '';
}

/**
 * Subject to use when $replyEmailOnFail is used
 *   default is 'Email Submission failed'
 * @var string
 * NOTE: if $replyEmailOnFail variable is empty or false,
 *   no fail email will be sent and this subject line will be ignored
 * NOTE: if $replyEmailOnFail is used and $subjectEmailOnFail is
 *   empty, the subject default will be the same one used for the form
 */
if (!isset($subjectEmailOnFail)) {
  $subjectEmailOnFail = 'Email Submission failed';
}

/**
 * Use as Auto-Responder and do not send emails to Recipient
 * default is false
 * @var boolean
 * NOTE: if set to false, this will behave normally and send emails
 * to recipient as expected. If set to true, this will only send
 * emails to submitter (none to recipient - unless you add
 * recipient as bcc or cc - a perfect auto-responder strategy).
 */
if (!isset($useAsAutoResponder)) {
  $useAsAutoResponder = false;
}

/* ****************************************************************
 * Setting up PHPMailer-FE (can only be set in script)
 * ***************************************************************/

/**
 * Value determines if the script will use the Worx Turing test
 * default is "false"
 * @var boolean
 */
$useWorxTuring = false;

/**
 * User PHPMailer as mail transport class
 * - can only be set in the script
 * change only if not in the same directory as phpmailer-fe.php
 * @var string
 */
$PHPMailerLocation = FEPATH . "class.phpmailer.php";

/**
 * User PHPMailer Lite as mail transport class
 * - can only be set in the script
 * change only if not in the same directory as phpmailer-fe.php
 * @var string
 */
$PHPMailerLiteLocation = FEPATH . "class.phpmailer-lite.php";

/**
 * REQUIRED: IP or domain name of domains allowed to use your script
 * defaults to $_SERVER['HTTP_HOST']
 * - can only be set in the script
 * @var array
 */
// $referers   = array ($_SERVER['HTTP_HOST']);
$referers   = array ();

/**
 * Use Environment Variables Report, that is email the details of the sender's browser
 * - can only be set in the script
 * @var boolean
 */
$useEnvRpt  = false;

/**
 * Email addresses that are banned from using the script
 * - can only be set in the script
 * @var array
 */
$bannedEmails    = NULL; //array ('*@anydomain.com', '*@otherdomain.com');

/**
 * Defined Term, Separator (field / value separator)
 * @var static string
 */
if (!isset($separator)) {
  $separator = ": ";
}
define("SEPARATOR", $separator);

/**
 * Defined Term, Newline (end of line)
 * @var static string
 */
if (!isset($newline)) {
  $newline = "\n";
}
define("NEWLINE", $newline);

/**
 * Defined Left Command delimiter
 * @var static string
 */
define("DELIMITERLEFT", "{");

/**
 * Defined Left Command delimiter
 * @var static string
 */
define("DELIMITERRIGHT", "}");

/**
 * Whether or not to display the processing image and IP address
 * default is false; (means display the processing image and IP address)
 * @var bool
 * NOTE: Required here, change as needed
 */
$supressIP       = true;

/* ------------ END SETTINGS - START PROCESSING -------------------- */

// DISPLAY THE 'PROCESSING' IMAGE AND IP ADDRESS
if ($supressIP !== false) {
  if (!isset($_POST['flash_sent'])) {
    echo $imgProcessing . "IP: " . $_POST['IP'] . " at " . $_POST['HOST'] . "<hr /><br />";
  }
}

// do the Worx Turing test
if ($useWorxTuring && isset($_POST["WorxTuringTest"])) {
  session_start();
  if (strtoupper($_POST["WorxTuringTest"]) != $_SESSION['WorxTuringTest']) {
    echo "Security test failed ...<br />";
    echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"4; URL=" . $redirectOnBan . "\">";
    if ($useWindowClose) {
      echo '<script language="javascript" type="text/javascript">' . "\n";
      echo 'setTimeout("self.close()", 5000 )' . "\n";
      echo '</script>' . "\n";
    }
    if ($supressIP === false) { echo '<script type="text/javascript">document.getElementById("feprocessing").src="_src/complete.gif";</script>'; }
    exit();
  }
  session_destroy();
}

/* uncomment to hard code banned IP addresses
if ($_POST['IP']   == "85.255.120.58" ||
    $_POST['IP']   == "216.255.183.194" ||
    substr_count($_POST['HOST'], "custblock.intercage.com") > 0 ||
    substr_count($_POST['HOST'], "inhoster.com") > 0
   ) {
  echo "Submissions from your IP address are not accepted<br />";
  echo "<meta http-equiv=\"Refresh\" content=\"3; URL=http://www.google.com/\">";
  if ($useWindowClose) {
    echo '<script language="javascript" type="text/javascript">' . "\n";
    echo 'setTimeout("self.close()", 5000 )' . "\n";
    echo '</script>' . "\n";
  }
  if ($supressIP === false) { echo '<script type="text/javascript">document.getElementById("feprocessing").src="_src/complete.gif";</script>'; }
  exit();
}
*/

/**
 * Checks that form is from an approved "referer"
 * - will exit and not proceed if referer is NOT found
 * @var array string
 */
if (isset($referers)) {
  check_referer($referers);
}

/**
 * Checks if "email" included in form is on banlist
 * - will exit and not proceed if email is on banlist
 */
if (isset($bannedEmails) && count($bannedEmails) > 0) {
  check_banlist($bannedEmails, $email);
}

/**
 * Sort the $_POST variables
 */
if (isset($sort) && $sort == "alphabetic") {
  uksort($_POST, "strnatcasecmp");
} elseif ((isset($sort) && isset($list)) && (ereg('^order:.*,.*', $sort)) && ($list = explode(',', ereg_replace('^order:', '', $sort)))) {
  $sort = $list;
}

/**
 * Checks if the browser's IP address or Remote Host is on ban list
 * - will exit and not proceed if either is found in ban list
 */
if ($useBanlist && is_writable($fileBanlist)) {
  $banned = checkBanlist($fileBanlist);
  if ($banned) {
    echo "Submissions not accepted from  ..." . $_POST['IP']  . " / " . $_POST['HOST'] . "<br />";
    echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"10; URL=" . $redirectOnBan . "\">";
    if ($useWindowClose) {
      echo '<script language="javascript" type="text/javascript">' . "\n";
      echo 'setTimeout("self.close()", 5000 )' . "\n";
      echo '</script>' . "\n";
    }
    if ($supressIP === false) { echo '<script type="text/javascript">document.getElementById("feprocessing").src="_src/complete.gif";</script>'; }
    exit();
  }
}

/**
 * Determines if $_POST fields that are blank are sent in email
 * - Default is false (blanks are not included)
 * - set in he form as a form variable
 * @var boolean
 */
if (!isset($print_blank_fields)) {
  $print_blank_fields = false;
  }

/**
 * Checks if "recipient" is valid email address
 * - will generate error if email is not valid
 */
$recipient_in = explode(',',$recipient);
for ($i=0;$i<count($recipient_in);$i++) {
  $recipient_to_test = trim($recipient_in[$i]);
  if (_validateEmail($recipient_to_test) === FALSE) {
    print_error("<li>your <b>email address</b> is invalid</li>");
  }
}

/**
 * Used to maintain compatibility with Formmail.pl and formmail.php
 */
if (isset($required)) {
  if (isset($require)) {
    $require .= $required;
  } else {
    $require = $required;
  }
}

/**
 * Process required fields
 */
if (isset($required)) {
  if (!is_array($_POST['required'])) {
    // split at commas
    $require = ereg_replace(" +", "", $require);
    $required = explode(",",$require);
  } else {
    $required = array_keys($_POST['required']);
  }
  for ($i=0;$i<count($required);$i++) {
    $string = trim(strtolower($required[$i]));
    // check if exists
    if( !(${$string}) && $_FILES[$string][tmp_name] == '' ) {
      // if the missing_fields_redirect option is on: redirect them
      if ($missing_fields_redirect) {
        echo "<meta http-equiv=\"refresh\" content=\"0;url=" . $missing_fields_redirect . '">';
        exit();
      }
      if (is_array($_POST['required'])) {
        $missing_field_list .= "<li><b>Missing: " . $_POST['required'][$required[$i]] . "</b></li>\n";
      } else {
        $missing_field_list .= "<li><b>Missing: " . $required[$i] . "</b></li>\n";
      }
    }
  }
  // send error to our error function
  if (isset($missing_field_list)) {
    print_error($missing_field_list,"missing");
  }
}

/**
 * Validate email fields
 */
if (isset($EMAIL) || isset($email)) {
  $email = trim($email);
  if (isset($EMAIL)) {
    $email = trim($EMAIL);
  }
  if (_validateEmail($email) === FALSE) {
    print_error("<li>your <b>email address</b>: $email - is invalid</li>");
  }
}
if (!isset($email)) {
  $email = $recipient;
}

/**
 * Validate Zipcode or Postal Code
 */
if (isset($ZIP_CODE) || isset($zip_code)) {
  $zip_code = trim($zip_code);
  if (isset($ZIP_CODE)) {
    $zip_code = trim($ZIP_CODE);
  }
  if (!ereg("(^[0-9]{5})-([0-9]{4}$)", trim($zip_code)) && (!ereg("^[a-zA-Z][0-9][a-zA-Z][[:space:]][0-9][a-zA-Z][0-9]$", trim($zip_code))) && (!ereg("(^[0-9]{5})", trim($zip_code)))) {
    print_error("<li>your <b>zip/postal code</b> is invalid</li>");
  }
}

/**
 * Validate Phone Number
 */
if (isset($PHONE_NO) || isset($phone_no)) {
  $phone_no = trim($phone_no);
  if (isset($PHONE_NO)) {
    $phone_no = trim($PHONE_NO);
  }
  if (!ereg("(^(.*)[0-9]{3})(.*)([0-9]{3})(.*)([0-9]{4}$)", $phone_no)) {
    print_error("<li>your <b>phone number</b> is invalid</li>");
  }
}

/**
 * Validate Fax Number
 */
if (isset($FAX_NO) || isset($fax_no)) {
  $fax_no = trim($fax_no);
  if (isset($FAX_NO)) {
    $fax_no = trim($FAX_NO);
  }
  if (!ereg("(^(.*)[0-9]{3})(.*)([0-9]{3})(.*)([0-9]{4}$)", $fax_no)) {
    print_error("<li>your <b>fax number</b> is invalid</li>");
  }
}

/**
 * Upload attachments if there are such (intended for recipient)
 * as of v3.2.6 can handle multiple files with no specific form field naming
 */
if (isset($_FILES)) {
  //set up variable that counts incoming files
  $no_files = 0;

  // extend execution time - note will not work if safe mode is enabled
  $safeMode = (@ini_get("safe_mode") == 'On' || @ini_get("safe_mode") == 1) ? TRUE : FALSE;
  if ($safeMode === FALSE) {
    set_time_limit(30 * count($_FILES)); // Sets maximum execution time to 30 seconds for each of the uploaded files
  }

  // loop through incoming $_FILES variable and create arrays for conversion to email attachment
  $file_error_message = '';
  $thiscount = 1;
  foreach($_FILES as $file) {
    if (trim($file['name']) != '') {
      switch($file['error']) {
        case 0: //no error so proceed
          $no_files++; //increment file count
          $v = fileUpload($file,$allowedFileTypes,$no_files);
          break;
        case ($file['error'] == 1 || $file['error'] == 2): // upload too large
          $file_error_message .= "File #" . $no_files . ' ' . $file['name'] . " exceeds the maximum file size. Error: " . $file['error'] . ".<br />";
          break;
        case ($file['error'] == 3); // incomplete upload
          $file_error_message .= "File #" . $no_files . ' ' . $file['name'] . " was only partially uploaded. Error: " . $file['error'] . ".<br />";
          break;
        case ($file['error'] == 4); // no file was uploaded
          $file_error_message .= "File #" . $no_files . ' ' . $file['name'] . " could not be uploaded ... internal error. Error: " . $file['error'] . ".<br />";
          break;
        case ($file['error'] == 6); // missing temporary folder
          $file_error_message .= "File #" . $no_files . ' ' . $file['name'] . " could not be uploaded. Missing a temporary folder. Error: " . $file['error'] . ".<br />";
          break;
        case ($file['error'] == 7): // failed to write to server hard drive
          $file_error_message .= "File #" . $no_files . ' ' . $file['name'] . " could not be uploaded. Failed to write file to disk. Error: " . $file['error'] . ".<br />";
          break;
        case 8: // file upload stopped by extension
          $file_error_message .= "File #" . $no_files . ' ' . $file['name'] . " was stopped from uploading by program. Error: " . $file['error'] . ".<br />";
          break;
      }
    }
  }
  if ($file_error_message != '') {
    $_POST['File_Upload_Error'] = $file_error_message;
  }
}

/**
 * Local attachment if there is one (intended for submitter)
 */
if (isset($_POST['attach_local_name']) && isset($_POST['attach_local_type'])) {
  // code for file on local server (and passed by config file)
  $local_name = basename($_POST['attach_local_name']);
  $local_type = $_POST['attach_local_type']; // The mime type of the file. An example would be "image/gif".
  $local_size = @filesize($_POST['attach_local_name']);
  $local_temp = $_POST['attach_local_name'];
  $local_ext  = explode('.', $local_name);
  $local_ext  = $local_ext[count($local_ext)-1];
  $content    .= "Attached File: ".$local_name."\n";
  $fp = fopen($local_temp,  "r");
  $local_chunk = fread($fp, filesize($local_temp));
  $local_chunk = base64_encode($local_chunk);
  $local_chunk = chunk_split($local_chunk);
  $local_local = true;
  fclose($fp);
}

/**
 * Prepare (parse) content
 */
$contentArray = array();
if ($supressIP === true) {
  unset($_POST['IP']);
  unset($_POST['HOST']);
}
if (isset($sort)) {
  $contentArray = parse_form($_POST, $sort);
} else {
  $contentArray = parse_form($_POST, '');
}

/**
 * If the "env_report" option is true, get environment variables
 */
$content['env'] = '';
if (isset($env_report) && $useEnvRpt) {
  $content['env'] = "\n------ environmental variables ------\n";

  $proxy="";
  $envIP = "";
  if (isSet($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $envIP = $_SERVER["HTTP_X_FORWARDED_FOR"];
    $proxy  = $_SERVER["REMOTE_ADDR"];
  } elseif (isSet($_SERVER["HTTP_CLIENT_IP"])) {
    $envIP = $_SERVER["HTTP_CLIENT_IP"];
  } else {
    $envIP = $_SERVER["REMOTE_ADDR"];
  }
  if (strstr($envIP, ',')) {
    $ips = explode(',', $envIP);
    $envIP = $ips[0];
  }
  $RemoteInfo["ip"]    = $envIP;
  $RemoteInfo["host"]  = @GetHostByAddr($envIP);
  $RemoteInfo["proxy"] = $proxy;

  for ($i=0;$i<count($env_report);$i++) {
    $string = trim($env_report[$i]);
    if ($string == "REMOTE_HOST" && isset($RemoteInfo["host"])) {
       $content['env'] = $content['env'] . str_pad("REMOTE HOST", 15, " ", STR_PAD_LEFT) . ": " . $RemoteInfo["host"] ."\n";
    }
    if ($string == "REMOTE_ADDR" && isset($RemoteInfo["ip"])) {
       $content['env'] .= $content['env'] . str_pad("REMOTE ADDR", 15, " ", STR_PAD_LEFT) . ": " .  $RemoteInfo["ip"] . "\n";
      if (isset($RemoteInfo["proxy"])) {
         $content['env'] = $content['env'] . str_pad("PROXY HOST", 15, " ", STR_PAD_LEFT) . ": " .  $RemoteInfo["proxy"] . "\n";
      }
    }
    if ($string == "REMOTE_USER" && isset($_SERVER['REMOTE_USER'])) {
       $content['env'] = $content['env'] . str_pad("REMOTE USER", 15, " ", STR_PAD_LEFT) . ": " . $_SERVER['REMOTE_USER'] ."\n";
    }
    if ($string == "HTTP_USER_AGENT" && isset($_SERVER['HTTP_USER_AGENT'])) {
       $content['env'] = $content['env'] . str_pad("BROWSER", 15, " ", STR_PAD_LEFT) . ": " . $_SERVER['HTTP_USER_AGENT'] . "\n";
    }
    if ($string == "HTTP_REFERER" && isset($_SERVER['HTTP_REFERER'])) {
       $content['env'] = $content['env'] . str_pad("REFERER", 15, " ", STR_PAD_LEFT) . ": " . $_SERVER['HTTP_REFERER'] . "\n";
    }
  }
}
/**
 * Send the $_POST variables
 */
if (!isset($realname) && isset($name)) {
  $realname = $name;
}
if (isset($realname) && isset($email_bad_array)) {
  $realname = eregi_replace($email_bad_array,'',$realname);
}

$content["text"] = stripslashes($contentArray["text"]) .  $content['env'];
$content["html"] = stripslashes($contentArray["html"]) .  $content['env'];
$content['csv']  = $contentArray['csv'] . ',' . str_replace("\n","\t",$contentArray['csv']);

// send email to the recipient
if (!isset($realname)) {
  $realname = '';
}

if ($useAsAutoResponder === false) { // if $useAsAutoResponder is true, an email to $recipient is not needed
  $OK = mail_it($content, $subject, $email, $realname, $recipient, true);
  if ($OK !== false && isset($_POST['flash_sent'])) {
    echo $_POST['flash_sent'];
  } elseif (isset($_POST['flash_sent'])) {
    echo 'sent=failed';
  }
}

// if you are using the "copy me" feature, a duplicate of the email will be send to the sender
if (isset($send_email_copy) && isset($email)) {
  mail_it($content, 'Copy: ' . $subject, $email, $realname, $email, true);
}

// code to send reply to recipient on success of form submission
/* note your email HTML form has to include the variables
 * $recipient (this will be used as the TO: address) (or put in external config file)
 * $fromemail (this will be used as the FROM: address - should be your email address)
 * $fromname  (this will be used as the FROM: name    - should be your name)
 * all other aspects of the reply email have to be set by you ... you can use
 * variables from your form in the format $field.
 * in your form, use the code format
 * <php echo $recipient; ?>
 */
if (isset($_POST['replyEmailOnSuccess'])) {
  $replyEmailOnSuccess = $_POST['replyEmailOnSuccess'];
  if ($replyEmailOnSuccess != '') {
    $_POST['thanksMessage'] = "We will be in touch with you shortly!";
    $msgSend = getTplFile($replyEmailOnSuccess);
    $replyEmail = array();
    $replyEmail["text"] = stripslashes(html_entity_decode(strip_tags($msgSend)));
    $replyEmail["html"] = stripslashes($msgSend);
    $ccOrg  = $cc; $cc = NULL;
    $bccOrg = $bcc; $bcc = NULL;
    if (trim($subjectEmailOnSuccess) != '') {
      $subject = $subjectEmailOnSuccess;
    }
    mail_it($replyEmail, $subject, $recipient, '', $email, false);
    $cc  = $ccOrg;
    $bcc = $bccOrg;
  }
}
// END code to send reply to sender on success of form submission

/**
 * Process Plugin
 */
$loadDefault = FEPATH . 'default.plugin.php';
if (file_exists($loadDefault)) {
  include_once($loadDefault);
}
$loadFile = '';
if (getenv('HTTP_REFERER') != '' || isset($_POST['referer'])) {
  if (isset($_POST['referer'])) {
    $path_parts = pathinfo(trim($_POST["referer"]));
  } else {
    $path_parts = pathinfo(getenv('HTTP_REFERER'));
  }
  $filearr = explode('.',$path_parts["basename"]);
  if (count($filearr) > 1) {
    $loadFile = '';
    for ($i=0;$i<count($filearr)-1;$i++) {
      $loadFile .= $filearr[$i] . ".";
    }
    $loadFile .= 'plugin.php';
  }
  $loadFile = FEPATH . $loadFile;
  if (file_exists($loadFile)) {
    include_once($loadFile);
  }
}
$loadDefault = '';
$loadFile    = '';

if (isset($_POST['flash_sent'])) {
  exit();
}

/**
 * Redirect (after sent) if redirect variable is set
 */
if (isset($redirect)) {
  echo "<meta http-equiv=\"Refresh\" content=\"0; URL=" . $redirect . "\">";
  exit();
} else {
  echo "Thank you for your submission\n";
  echo "<br /><br />\n";
  if (isset($return_link_url)) {
    echo "<a href=\"" . $return_link_url . "\">";
    if ($return_link_title) {
      echo $return_link_title;
    } else {
      echo $return_link_url;
    }
    echo "</a>";
    echo "<br /><br />\n";
  }
  echo "<small>Powered by <a href=\"http://phpmailer.sourceforge.net/\">PHPMailer-FE.php " . VERSION . "!</a></small>\n\n";
  echo '<script language="javascript" type="text/javascript">' . "\n";
  if ($useWindowClose) {
    echo 'setTimeout("self.close()", 5000 )' . "\n";
  }
  echo '</script>' . "\n";
  if ($supressIP === false) { echo '<script type="text/javascript">document.getElementById("feprocessing").src="_src/complete.gif";</script>'; }
  exit();
}

//echo '$post message: ' . $_POST['frmMessage'] . '<br />';

/* ****************** FUNCTIONS ******************** */

/**
 * Function to write the form data to a file in a CSV format
 * @param string $subject
 * @param string $line
 * @return mixed (string if error, boolean if successful)
 */
function _writeLine($subject,$line) {
  if (is_writable('_logs')) {
    $subjectArr = explode('from',$subject);
    $filename   = '_logs/log_' . str_replace(' ', "_", trim($subjectArr[0])) . '.csv';
    $line       = addslashes($line) . "\n";
    if (!$handle = fopen($filename, 'a')) {
      $error = "Cannot open file ($filename)";
      return $error;
    }
    if (fwrite($handle, $line) === FALSE) {
      $error = "Cannot write to file ($filename)";
      return $error;
    }
    fclose($handle);
    return true;
  } else {
    $error = "CSV log directory not writable";
    return false;
  }
}

/**
 * Function create arrays needed for file attachments
 *
 * Many thanks to "equimax" on the Forum for the core of the code
 *
 * @param string $file
 * @param array $allowedFileTypes
 * @param integer $no_files
 * @return boolean
 */
function fileUpload($file,$allowedFileTypes,$no_files) {
  global $attachment_name, $attachment_temp, $attachment_type, $attachment_chunk;

  $attachment_name[$no_files] = $file["name"];
  $attachment_size[$no_files] = $file["size"];
  $attachment_temp[$no_files] = $file["tmp_name"];
  $attachment_type[$no_files] = $file["type"];
  $attachment_ext = explode('.', $attachment_name[$no_files]);
  $attachment_ext = $attachment_ext[count($attachment_ext)-1];
  if (trim($attachment_temp[$no_files]) != '' && stristr($allowedFileTypes, $attachment_ext) !== false) {
    if ($attachment_name[$no_files]) {
      if ($attachment_size[$no_files] > 0) {
      if (!$attachment_type[$no_files]) {
        $attachment_type = "application/unknown";
      }
      $content .= "Attached File: ".$attachment_name[$no_files]."\n";
      $fp = fopen($attachment_temp[$no_files], "r");
      $attachment_chunk[$no_files] = fread($fp, filesize($attachment_temp[$no_files]));
      $attachment_chunk[$no_files] = base64_encode($attachment_chunk[$no_files]);
      $attachment_chunk[$no_files] = chunk_split($attachment_chunk[$no_files]);
      fclose($fp);
      }
    }
  }
  return true;
}

/**
 * Error processing function
 * @param string $reason
 * @param int $type
 * @return void
 */
function print_error($reason,$type = 0) {
  $redirectOnFail   = $_POST['redirectOnFail'];
  $replyEmailOnFail = $_POST['replyEmailOnFail'];
  if ($redirectOnFail == '') {
    build_body($title, $bgcolor, $text_color, $link_color, $vlink_color, $alink_color, $style_sheet);
    // for missing required data
    if ($type == "missing") {
      if ($missing_field_redirect) {
        header("Location: $missing_field_redirect?error=$reason");
        exit();
      } else {
        $failMessage  = 'The form was not submitted for the following reasons:<p>';
        $failMessage .= '<ul>' . $reason . "\n" . '</ul>';
        echo $failMessage;
        echo 'Please use your browser&#39;s back button to return to the form and try again.';
      }
    } else { // every other error
      $failMessage = 'The form was not submitted because of the following reasons:<p>';
      echo $failMessage;
    }
    echo "<br /><br />\n";
    echo "<small>This form is powered by <a href=\"http://phpmailer.sourceforge.net/\">PHPMailer-FE.php " . VERSION . "</a></small>\n\n";
  } else {
    $reason = str_replace('<li>','',$reason);
    $reason = str_replace('</li>','<br />',$reason);
    $failMessage = '';
    if ($type == "missing") {
      if ($missing_field_redirect) {
        $failMessage .= $reason;
      } else {
        $failMessage .= 'The form was not submitted for the following reasons:<br /><br />';
        $failMessage .= $reason;
      }
    } else { // every other error
      $failMessage .= ' The form was not submitted because of the following reasons:<br /><br />';
      $failMessage .= $reason;
    }
    $failMessage .= "<br />";
    $_POST['failMessage'] = $failMessage;
    $msgDisplay = getTplFile($redirectOnFail);
    echo $msgDisplay;
  }
  // code to send reply to sender on failure of form submission
  /* note your email HTML form has to include the variables
   * $recipient (this will be used as the TO: address)
   * $fromemail (this will be used as the FROM: address - should be your email address)
   * $fromname  (this will be used as the FROM: name    - should be your name)
   * all other aspects of the reply email have to be set by you ... you can use
   * variables from your form in the format $field.
   * in your form, use the code format
   * <php echo $recipient; ?>
   */
  if ($replyEmailOnFail != '') {
    $msgSend = getTplFile($replyEmailOnFail);
    $replyEmail = array();
    $replyEmail["text"] = stripslashes(html_entity_decode(strip_tags($msgSend)));
    $replyEmail["html"] = stripslashes($msgSend);
    $ccOrg  = $cc; $cc = NULL;
    $bccOrg = $bcc; $bcc = NULL;
    if (trim($subjectEmailOnFail) != '') {
      $subject = $subjectEmailOnFail;
    }
    mail_it($replyEmail, $subject, $recipient, '', $email, false);
    $cc  = $ccOrg;
    $bcc = $bccOrg;
  }
  // END code to send reply to sender on failure of form submission
  echo '<script type="text/javascript">document.getElementById("feprocessing").src="_src/complete.gif";</script>';
  exit(); // exit so that no other processing is done after a failure or error
}

/**
 * Function to check the banlist
 * calls error function if banned email is found
 * @param array $bannedEmails
 * @param string $email
 * @return void
 */
function check_banlist($bannedEmails, $email) {
  if (count($bannedEmails)) {
    $allow = true;
    foreach($bannedEmails as $banned) {
      $temp = explode("@", $banned);
      if ($temp[0] == "*") {
        $temp2 = explode("@", $email);
        if (trim(strtolower($temp2[1])) == trim(strtolower($temp[1]))) {
          $allow = false;
        }
      } else {
        if (trim(strtolower($email)) == trim(strtolower($banned))) {
          $allow = false;
        }
      }
    }
  }
  if (!$allow) {
    print_error("You are using a <b>banned email address.</b>");
  }
}

/**
 * Function to check referer (IP or Domain of submitted $_POST)
 * calls error function if referer is NOT found
 * @param array $referers
 * @return boolean
 */
function check_referer($referers) {
  if (count($referers)) {
    $found = false;

    $temp = explode("/",getenv("HTTP_REFERER"));
    $referer = $temp[2];

    if ($referer=="") {
      $referer = $_SERVER['HTTP_REFERER'];
      list($remove,$stuff)=explode('//',$referer,2);
      list($home,$stuff)=explode('/',$stuff,2);
      $referer = $home;
    }

    for ($x=0; $x < count($referers); $x++) {
       if (eregi ($referers[$x], $referer)) {
         $found = true;
       }
    }
    if ($referer == "") {
      $found = false;
    }
    if (!$found) {
      print_error("You are coming from an <b>unauthorized domain. ($referer)</b>");
      error_log("[PHPMailer-FE.php] Illegal Referer. (".getenv("HTTP_REFERER").")", 0);
    }
    return $found;
  } else {
    return true;
  }
}

/**
 * Function to: sort, exclude keys, and format content string
 * @param array $array
 * @param array $sort
 * @return string
 */
function parse_form($array, $sort = "") {
  // reserved keyword array
  $reserved_keys = array('alink_color','allowedFileTypes','bcc','bgcolor','cc','cs_config_country_field','cs_config_state_field','cs_config_country_default','cs_config_state_default','countryDefault','env_report','fixedFromEmail','fixedFromName','form_notice','Helo','Host','IP','link_color','Mailer','MAX_FILE_SIZE','missing_fields_redirect','path_to_file','Password','Port','print_blank_fields','recipient','redirect','redirectOnBan','redirectOnFail','referer','replyEmailOnFail','replyEmailOnSuccess','require','required','reserved_key_words','reset','reset_x','reset_y','return_link_url','return_link_title','send','SMTPKeepAlive','sort','stateDefault','style_sheet','subject','submit','submit_x','submit_y','text_color','Timeout','title','useAsAutoResponder','useEnvRpt','Username','vlink_color','WorxTuringTest');
  if (isset($_POST['reserved_key_words'])) {
    $reserved_key_words = $_POST['reserved_key_words'];
    $resarray = explode(',',$reserved_key_words);
    if (count($resarray) == 1) {
      $reserved_keys[] = $reserved_key_words;
    } else {
      for ($ra=0;$ra < count($resarray);$ra++) {
        $reserved_keys[] = $resarray[$ra];
      }
    }
  }
  $content         = array();
  $content["text"] = '';
  $content["html"] = '';
  $content['csv']  = '';
  if (count($array)) {
    if (is_array($sort)) {
      foreach ($sort as $field) {
        $reserved_violation = 0;
        for ($ri=0; $ri<count($reserved_keys); $ri++) {
          if ($array[$field] == $reserved_keys[$ri]) { $reserved_violation = 1; }
        }
        if ($reserved_violation != 1) {
          if (is_array($array[$field])) {
            for ($z=0;$z<count($array[$field]);$z++) {
              $content["text"] .= $field.SEPARATOR.str_replace("<br />","\n",$array[$field][$z]).NEWLINE;
              $content["html"] .= '<tr><td align="right" valign="top" style="border: 1px #E0E0E0 solid;">' . $field . '</td><td valign="top" style="border: 1px #E0E0E0 solid;">' . str_replace("\n","<br>",$array[$field][$z]) . '</td></tr>';
              $content['csv']  .= $array[$field][$z].',';
            }
          } else {
            $content["text"] .= $field.SEPARATOR.str_replace("<br />","\n",$array[$field]).NEWLINE;
            $content["html"] .= '<tr><td align="right" valign="top" style="border: 1px #E0E0E0 solid;">' . $field . '</td><td valign="top" style="border: 1px #E0E0E0 solid;">' . str_replace("\n","<br>",$array[$field]) . '</td></tr>';
            $content['csv']  .= $array[$field].',';
          }
        }
      }
    }
    foreach ($array as $key => $val) {
      $reserved_violation = 0;
      for ($ri=0; $ri<count($reserved_keys); $ri++) {
        if ($key == $reserved_keys[$ri]) {
          $reserved_violation = 1;
        }
      }
      if (is_array($sort)) {
        for ($ri=0; $ri<count($sort); $ri++) {
          if ($key == $sort[$ri]) {
            $reserved_violation = 1;
          }
        }
      }
      // prepare content
      if ($reserved_violation != 1) {
        if (is_array($val)) {
          for ($z=0;$z<count($val);$z++) {
            if ((strlen($val[$z]) > 0) || $print_blank_fields) {
              $content["text"] .= $key.SEPARATOR.str_replace("<br />","\n",$val[$z]).NEWLINE;
              $content["html"] .= '<tr><td align="right" valign="top" bgcolor="#ffffff" style="border: 1px #E0E0E0 solid;">' . $key . '</td><td valign="top" bgcolor="#ffffff" style="border: 1px #E0E0E0 solid;">' . str_replace("\n","<br>",$val[$z]) . '</td></tr>';
            }
            $content['csv']  .= $array[$field][$z].',';
          }
        } else {
          if (strlen($val) > 0) {
            $content["text"] .= $key.SEPARATOR.str_replace("<br />","\n",$val).NEWLINE;
            $content["html"] .= '<tr><td valign="top" align="right" bgcolor="#ffffff" style="border: 1px #E0E0E0 solid;">' . $key . '</td><td valign="top" bgcolor="#ffffff" style="border: 1px #E0E0E0 solid;">' . str_replace("\n","<br>",$val) . '</td></tr>';
          }
          $content['csv']  .= $val.',';
        }
      }
    }
  }

  /* code to send customized email - note, the customized email file name must be
   * identical to the first part of the form filename, with the extension .tpl
   * example: form is named "form.php"
   * custom email is named "form.tpl"
   */
  $adminEmailTpl = '';
  if (getenv('HTTP_REFERER') != '' || isset($_POST['referer'])) {
    if (isset($_POST['referer'])) {
      $path_parts = pathinfo(trim($_POST["referer"]));
    } else {
      $path_parts = pathinfo(getenv('HTTP_REFERER'));
    }
    if (isset($_POST["admin_tpl"])) {
      $adminEmailTpl = $_POST["admin_tpl"];
    } else {
      $filearr = explode('.',$path_parts["basename"]);
      if (count($filearr) > 1) {
        $adminEmailTpl = '';
        $tplDir   = '';
        for ($i=0;$i<count($filearr)-1;$i++) {
          $adminEmailTpl .= $filearr[$i] . ".";
          $tplDir   .= $filearr[$i];
        }
        $adminEmailTpl .= 'tpl';
        $tplDir   .= '/';
      }
      $adminEmailTpl = FEPATH . $tplDir . $adminEmailTpl;
    }
  }
  if (file_exists($adminEmailTpl)) {
    $adminEmailHTML = getContents('', $adminEmailTpl);
    $content["text"]    = stripslashes(html_entity_decode(strip_tags($adminEmailHTML)));
    $content["html"]    = $adminEmailHTML;
  } else {
    $content["html"]  = '<table border="0" cellpadding="2" cellspacing="0" style="border: 1px #E0E0E0 solid;"><tr><th bgcolor="#ffffd2" style="border: 1px #E0E0E0 solid;">Form Field</th><th bgcolor="#ffffd2" style="border: 1px #E0E0E0 solid;">User Input</th></tr>'.$content["html"].'</table>';
  }
  $content['csv']   = substr($content['csv'],0,-1);
  // END code to send customized email
  return $content;
}

/**
 * Function to mail the content
 * @param string $content
 * @param string $subject
 * @param string $email           (from email)
 * @param string $realname        (from name)
 * @param string/array $recipient (to)
 * @return void
 */
function mail_it($content, $subject, $email, $realname, $recipient, $inbound=true) {
  global $attachment_chunk, $attachment_name, $attachment_type, $attachment_temp;
  global $local_chunk, $local_name, $local_type, $local_temp;
  global $bcc, $cc;
  global $PHPMailerLocation, $PHPMailerLiteLocation;
  global $fixedFromEmail, $fixedFromName, $text_only, $htmlCharset;
  global $addToCSV;

  $valSent = false;

  if ($realname) {
    $sendTo = $realname . "<" . $email . ">";
  } else {
    $sendTo = $email;
  }
  $ob = "----=_OuterBoundary_000";
  $ib = "----=_InnerBoundery_001";

  $mail_headers  = "MIME-Version: 1.0\r\n";
  if ($fixedFromEmail != '') {
    $mail_headers .= "From: " . $fixedFromEmail . "\n";
  } else {
    $mail_headers .= "From: " . $sendTo . "\n";
  }
  $mail_headers .= "To: " . $recipient . "\n";
  $mail_headers .= "Reply-To: " . $sendTo . "\n";
  if ($cc)  { $mail_headers .= "Cc: ".$cc."\n"; }
  if ($bcc) { $mail_headers .= "Bcc: ".$bcc."\n"; }
  $mail_headers .= "X-Priority: 1\n";
  $mail_headers .= "X-Mailer: PHPMailer-FE v" . VERSION . " (software by worxware.com)\n";
  $mail_headers .= "Content-Type: multipart/mixed;\n\tboundary=\"" . $ob . "\"\n";
  $mail_message  = "This is a multi-part message in MIME format.\n";
  $mail_message .= "\n--".$ob."\n";
  $mail_message .= "Content-Type: multipart/alternative;\n\tboundary=\"" . $ib . "\"\n\n";
  $mail_message .= "\n--" . $ib . "\n";
  $mail_message .= "Content-Type: text/plain;\n\tcharset=\"" . $htmlCharset . "\"\n";
  $mail_message .= "Content-Transfer-Encoding: quoted-printable\n\n";
  $mail_message .= $content["text"] . "\n\n";
  $mail_message .= "\n--" . $ib . "--\n";

  if ($attachment_name && $inbound) {
    reset($attachment_name);
    reset($attachment_temp);
    //loop through the arrays to get the attached file names and attach each one.
    while ((list($key1, $val1) = each($attachment_name)) && (list($key2, $val2) = each($attachment_temp)) && (list($key3, $val3) = each($attachment_type)) && (list($key4, $val4) = each($attachment_chunk))) {
      $mail_message .= "\n--" . $ob . "\n";
      $mail_message .= "Content-Type: $val3;\n\tname=\"" . $val1 . "\"\n";
      $mail_message .= "Content-Transfer-Encoding: base64\n";
      $mail_message .= "Content-Disposition: attachment;\n\tfilename=\"" . $val1 . "\"\n\n";
      $mail_message .= $val4;
      $mail_message .= "\n\n";
    }
  } else if ($local_name && $inbound === false) {
    $mail_message .= "\n--" . $ob . "\n";
    $mail_message .= "Content-Type: $local_type;\n\tname=\"" . $local_name . "\"\n";
    $mail_message .= "Content-Transfer-Encoding: base64\n";
    $mail_message .= "Content-Disposition: attachment;\n\tfilename=\"" . $local_name . "\"\n\n";
    $mail_message .= $local_chunk;
    $mail_message .= "\n\n";
  }
  $mail_message .= "\n--" . $ob . "--\n";
  if ( ( class_exists('PHPMailerLite') || class_exists('PHPMailer') || file_exists($PHPMailerLocation) || file_exists($PHPMailerLiteLocation) ) && $_POST['text_only'] !== true ) {
    if (!class_exists('PHPMailerLite') && file_exists($PHPMailerLiteLocation)) {
      require_once($PHPMailerLiteLocation);
      $mail = new PHPMailerLite();
    } elseif (!class_exists('PHPMailer') && file_exists($PHPMailerLocation)) {
      require_once($PHPMailerLocation);
      $mail = new PHPMailer();
    }
    if (isset($_POST['Mailer']) && strtolower(trim($_POST['Mailer'])) == "smtp") {
      $mail->IsSMTP();
      if (isset($_POST['Host']) && trim($_POST['Host']) != "") {
        $mail->Host = trim($_POST['Host']);
      }
      if (isset($_POST['Port']) && trim($_POST['Port']) != "") {
        $mail->Port = trim($_POST['Port']);
      }
      if (isset($_POST['SMTPAuth']) && ($_POST['SMTPAuth'] === true || $_POST['SMTPAuth'] === false)) {
        $mail->SMTPAuth = $_POST['SMTPAuth'];
      }
      if (isset($_POST['Username']) && trim($_POST['Username']) != "") {
        $mail->Username = trim($_POST['Username']);
      }
      if (isset($_POST['Username']) && trim($_POST['Username']) != "") {
        $mail->Password = trim($_POST['Password']);
      }
      if (isset($_POST['Timeout']) && trim($_POST['Timeout']) != "") {
        $mail->Timeout = trim($_POST['Timeout']);
      }
    } elseif (isset($_POST['Mailer']) && strtolower(trim($_POST['Mailer'])) == "sendmail") {
      $mail->IsSendmail();
    } elseif (isset($_POST['Mailer']) && strtolower(trim($_POST['Mailer'])) == "qmail") {
      $mail->IsQmail();
    }
    if (isset($_POST['fixedFromEmail'])) {
      if (isset($_POST['fixedFromName']) && trim($_POST['fixedFromName']) == '') {
        $_POST['fixedFromName'] = $_POST['fixedFromEmail'];
      }
      if (stristr($mail->Version,'5.1')) {
        $mail->SetFrom($_POST['fixedFromEmail'],$_POST['fixedFromName']);
      } elseif (stristr($mail->Version,'5')) {
        $mail->SetFrom($_POST['fixedFromEmail'],$_POST['fixedFromName']);
        $mail->AddReplyTo($_POST['fixedFromEmail'],$_POST['fixedFromName']);
      } else {
        $mail->SetFrom($_POST['fixedFromEmail'],$_POST['fixedFromName']);
      }
    } else {
      if (!isset($realname) && trim($realname) == '') {
        $realname = $email;
      }
      if (stristr($mail->Version,'5.1')) {
        $mail->SetFrom($email,$realname);
      } elseif ($mail->Version >=5) {
        $mail->SetFrom($email,$realname);
        $mail->AddReplyTo($email,$realname);
      } else {
        $mail->From     = $email;
        $mail->FromName = $realname;
      }
    }
    $mail->Subject  = $subject;
    $mail->AddAddress($recipient);
    if ($bcc) {
      if (strpos($bcc, ",") || strpos($bcc, ";")) {
        $bcc_in = explode(',',$bcc);
        foreach ($bcc_in as $key => $value) {
          $mail->AddBcc($value);
        }
      } else {
        $mail->AddBcc($bcc);
      }
    }
    if ($cc) {
      if (strpos($cc, ",") || strpos($cc, ";")) {
        $cc_in = explode(',',$cc);
        foreach ($cc_in as $key => $value) {
          $mail->AddCc($value);
        }
      } else {
        $mail->AddCc($cc);
      }
    }
    $mail->MsgHTML($content["html"]);
    $mail->AltBody  = _html2txt($content['html']);
    if ($attachment_name && $inbound) {
      //Add attachment function is in phpmailer
      //reset the arrays to the top
      reset($attachment_name);
      reset($attachment_temp);
      //loop through the arrays to get the attached file names and attach each one.
      while ((list($key1, $val1) = each($attachment_name)) && (list($key2, $val2) = each($attachment_temp))) {
        $atchmnt = file_get_contents($val2);
        $mail->AddStringAttachment($atchmnt, $val1);
      }
    } else if ($local_name && $inbound === false) {
      $mail->AddAttachment($local_temp, $local_name);
    }

    if ($mail->Send()) {
      echo '<script type="text/javascript">document.getElementById("feprocessing").src="_src/complete.gif";</script>';
      $valSent = true;
    }
  } else {
    if (@mail($recipient, $subject, $mail_message, $mail_headers)) {
      echo '<script type="text/javascript">document.getElementById("feprocessing").src="_src/complete.gif";</script>';
      $valSent = true;
    }
  }
  if ($addToCSV) {
    $writeVal = _writeLine($subject,$content['csv']);
  }
  if ($valSent) {
    return true;
  }
}

/**
 * Function to build the redirect HTML page for redirect (if no redirect specified)
 * @param string $title
 * @param string $bgcolor
 * @param string $text_color
 * @param string $link_color
 * @param string $vlink_color
 * @param string $alink_color
 * @param string $style_sheet
 * @return void
 */
function build_body($title, $bgcolor, $text_color, $link_color, $vlink_color, $alink_color, $style_sheet) {
  if ($style_sheet) {
    echo "<link rel=\"stylesheet\" href=\"$style_sheet\" Type=\"text/css\">\n";
  }
  if ($title) {
    echo "<title>$title</title>\n";
  }
  if (!$bgcolor) {
    $bgcolor = "#FFFFFF";
  }
  if (!$text_color) {
    $text_color = "#000000";
  }
  if (!$link_color) {
    $link_color = "#0000FF";
  }
  if (!$vlink_color) {
    $vlink_color = "#FF0000";
  }
  if (!$alink_color) {
    $alink_color = "#000088";
  }
  if ($background) {
    $background = "background=\"$background\"";
  }
  echo "<body bgcolor=\"$bgcolor\" text=\"$text_color\" link=\"$link_color\" vlink=\"$vlink_color\" alink=\"$alink_color\" $background>\n\n";
}

/**
 * Function to decode URL including UTF8 elements
 * @param string $str
 * @return void
 */
function utf8_urldecode($str) {
  if (!is_array($str)) {
    $str = preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode($str));
    return html_entity_decode($str);
  } else {
    return $str;
  }
}

/**
 * Function to check the user's IP address or Remote Host is on the banlist
 * @param string $fileBanlist
 * @return boolean
 */
function checkBanlist($fileBanlist) {
  // if the option is set, read the ban list and refuse to process further if IP is found
  $file      = fopen($fileBanlist, 'r');
  $matchIP   = false;
  $matchHOST = false;
  $banned    = false;
  while (!feof($file)) {
    $line    = fgets($file);
    $lbits   = explode(',', $line);
    $banIP   = trim($lbits[0]);
    $banHOST = trim($lbits[1]);
    if ($_SERVER['REMOTE_ADDR'] == $banIP) {
      $matchIP = true;
      $banned  = true;
    }
    if (gethostbyaddr($_SERVER['REMOTE_ADDR']) == $banHOST) {
      $matchHOST = true;
      $banned    = true;
    }
  }
  fclose($file);
  if ($banned === true) {
    return true;
  } else {
    return false;
  }
}

/**
 * Function to check for banned input on fields that contain "nourl" or "comments" in field name
 * - will add IP / Remote Host to the ban list log if found and stop processing
 * @param string $key
 * @param string $value
 * @param string $fileBanlist
 * @return boolean
 */
function checkBannedInput($key,$value,$fileBanlist) {
  $hack = false;
  if (stristr($key, 'nourl') || stristr($key, 'comments')) {
    if (stristr($value, 'a href') ||
         stristr($value, 'http:') ||
         stristr($value, 'www')) {
      $hack = true;
      echo $value . " - " . $key . ": hyperlink not allowed<br />";
    }
  }
  if ($hack === true) {
    // ADD TO BAN LIST
    if (is_writable($fileBanlist)) {
      $handle = fopen($fileBanlist, 'a');
      fwrite($handle, $_SERVER['REMOTE_ADDR'] . "," . gethostbyaddr($_SERVER['REMOTE_ADDR']) . "\n");
      fclose($handle);
    }
  }
  return $hack;
}

/**
 * Function to do the DNS MX record check for Windows based servers
 * @param string $hostname
 * @param string $recType
 * @return boolean
 * (returns true if hostname MX record exists
 */
function checkworxdnsrr($hostName, $recType = 'MX') {
  exec("nslookup -type=$recType $hostName", $result);
  // if line starts with the hostname then function succeeded.
  foreach ($result as $line) {
    if(eregi("^$hostName",$line)) {
      return true;
    }
  }
  // otherwise there was no mail handler for the domain
  return false;
}

/**
 * Function to validate an email address (format and MX record)
 * @param string $email
 * @return boolean
 * (returns true if email address is properly formatted and MX record exists
 */
function _validateEmail($emailAddy) {
  $pattern = "/^[\w-]+(\.[\w-]+)*@";
  $pattern .= "([0-9a-z][0-9a-z-]*[0-9a-z]\.)+([a-z]{2,4})$/i";
  if (preg_match($pattern, $emailAddy)) { // valid email address
    $parts = explode("@", $emailAddy);
    if (function_exists('checkdnsrr')) {
      if (!checkdnsrr($parts[1], 'MX')) { // fails MX record check
        return false;
      }
    }
  } else { // fails pre_match test
    return false;
  }
  return true;
}

/* Process file or contents to strip out the <body tag (inclusive)
 * and the </body tag to the end
 *
 * Usage Example:
 * $page->getContents('', '/contents.htm');
 * or
 * $page->getContents('start of data .... end of data');
 *
 * @access public
 * @param string $contents Parameter contents
 * @param string $filename Parameter filename (fully qualified)
 * @desc strip out body tags and return only page data
 */
function getContents($contents, $filename="") {
  if ($contents == '' && $filename != '') {
    $handle = fopen($filename, "r");
    $contents = '';
    while (!feof($handle)) {
      $contents .= fread($handle, 8192);
    }
    fclose($handle);
  }
  if (preg_match_all('/'.DELIMITERLEFT.'([a-zA-Z0-9_. >]+)'.DELIMITERRIGHT.'/', $contents, $var)) {
    foreach ($var[1] as $fulltag) {
      $code = $_POST[$fulltag];
      //$code = str_replace("\n","<br />",$code);
      $contents  =  str_replace(DELIMITERLEFT.$fulltag.DELIMITERRIGHT, $code, $contents);
    }
    $contents = stripslashes($contents);
  }
  // START process any PHP code
  ob_start();
  eval("?>".$contents."<?php ");
  $contents = ob_get_contents();
  ob_end_clean();
  // END process any PHP code
  $lower_contents = strtolower($contents);
  // determine if a <body tag exists and process if necessary
  $bodytag_start = strpos($lower_contents, "<body");
  if ($bodytag_start !== false) {
    $bodytag_end    = strpos($lower_contents, ">", $bodytag_start) + 1;
    // get contents with <body tag removed
    $contents       = substr($contents, $bodytag_end);
    $lower_contents = strtolower($contents);
    // work on </body closing tag
    $end_start      = strpos($lower_contents, "</body");
    $end_end        = strpos($lower_contents, ">", $bodytag_start) + 1;
    // return stripped out <body and </body tags
    return substr($contents, 0, $end_start);
  } else {
    // body tags not found, so return data
    return $contents;
  }
}

/* Get template file (primarily for internal script use)
 * and process for any variable substitution
 *
 * Usage Example:
 * $page->getContents('', '/contents.htm');
 * or
 * $var = getTplFile('path/to/filename');
 *
 * @access public
 * @param string $filename Parameter filename (fully qualified)
 * @desc return file contents
 */
function getTplFile($filename) {
  $handle = fopen($filename, "r");
  $msgTPL = '';
  while (!feof($handle)) {
    $msgTPL .= fread($handle, 8192);
  }
  fclose($handle);
  if (preg_match_all('/'.DELIMITERLEFT.'([a-zA-Z0-9_. >]+)'.DELIMITERRIGHT.'/', $msgTPL, $var)) {
    foreach ($var[1] as $fulltag) {
      $code = $_POST[$fulltag];
      //$code = str_replace("\n","<br />",$code);
      $msgTPL  =  str_replace(DELIMITERLEFT.$fulltag.DELIMITERRIGHT, $code, $msgTPL);
    }
    $msgTPL = stripslashes($msgTPL);
  }
  // START process any PHP code
  ob_start();
  eval("?>".$msgTPL."<?php ");
  $msgDisplay = ob_get_contents();
  ob_end_clean();
  return $msgDisplay;
}

function htmlspecialcharsDecode4($text) {
  return strtr($text, array_flip(get_html_translation_table(HTML_SPECIALCHARS)));
}

function _html2txt($html) {
  if (trim($html)=='') { return $html; }
  $text = htmlspecialcharsDecode4($html);
  $text = str_replace("</table>", "</TABLE>", $text);
  do { if (strpos($text," </TABLE>")) { $text = str_replace(" </TABLE>", "</TABLE>", $text); } else { break; } } while (0);
  do { if (strpos($text,">\n\n")) { $text = str_replace(">\n\n", ">\n", $text); } else { break; } } while (0);
  $text = str_replace(">\n", ">", $text);
  $text = str_replace("</tr>", "</TR>", $text);
  $text = str_replace("</td>", "</TD>", $text);
  $text = str_replace("</th>", "</TH>", $text);
  $text = str_replace("</TD></TR>", "\n", $text);
  $text = str_replace("</TH></TR>", "\n", $text);
  $text = str_replace("</TD>", ": ", $text);
  $text = str_replace("</TH>", ": ", $text);
  $text = str_replace("</TR>", "\n", $text);
  $text = str_replace("<br", "<BR", $text);
  $text = str_replace("<BR>", "<BR />", $text);
  $text = str_replace("<BR />", "\n", $text);
  $text = strip_tags($text);
  return $text;
}

?>