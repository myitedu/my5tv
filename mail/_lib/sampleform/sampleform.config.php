<?php

if ( !defined('VERSION') && !$_POST ) {
  // this code will eliminate anyone attempting to load this script from the
  // browser address bar ... allowing that would be a security threat
  echo "Sorry, cannot process ....<br />";
  exit();
}

/* PHPMailer-FE SETTINGS - these variables are in order of appearance in PHPMailer-FE, value is default */

/* to use these, uncomment the variable (the double slashes at the front) and add your own settings after the equal sign */

//$_POST['recipient']               = 'name@yourdomain.com';
$_POST['subject']                 = 'Form Submission' . ' from: ' . $_SERVER['HTTP_HOST'];
$_POST['text_only']               = false; //default is false, set to true to send Text only emails if using class.phpmailer.php
$_POST['supressIP']               = true; // true; (false = display the processing image and IP address
//$_POST['cc']                      = 'name1@yourdomain,name2@yourdomain.com';
//$_POST['bcc']                     = 'name3@yourdomain.com,name4@yourdomain.com';
//$_POST['email_bad_array']         = "\r|\n|to:|cc:|bcc:";
//$_POST['useWorxTuring']           = false;
//$_POST['PHPMailerLocation']       = 'class.phpmailer.php';
//$_POST['PHPMailerLiteLocation']   = 'class.phpmailer-lite.php';
//$_POST['bannedEmails']            = ''; //array ('*@anydomain.com', '*@otherdomain.com');
//$_POST['redirectOnBan']           = 'http://' . $_SERVER['HTTP_HOST'];
//$_POST['allowedFileTypes']        = 'doc|docx|xls|xlsx|pdf|jpg|jpeg|png|gif|zip|rar|gz';
//$_POST['replyEmailOnFail']        = 'replyemailfailed.html';
//$_POST['subjectEmailOnFail']      = 'Email Submission failed';
//$_POST['replyEmailOnSuccess']     = 'replyemailsuccess.html';
//$_POST['subjectEmailOnSuccess']   = 'Email Submission succeeded';
//$_POST['redirectOnFail']          = 'failed.html';
//$_POST['useAsAutoResponder']      = true; // default is false - true disables $recipient receiving form value email
//$_POST['attach_local_name']       = '/path/to/document.pdf';
//$_POST['attach_local_type']       = 'application/pdf';
//$_POST['reserved_key_words']      = 'keyword1,keyword2,keyword3';
$_POST['realname']                = $_POST['frmFirstname'] . ' ' . $_POST['frmLastname'];

/* Variables normally passed in the form - NO DEFAULTS ASSOCIATES WITH THESE, EXAMPLES ONLY */
$_POST['redirect']                = '_tpl/thankyou.html';
$_POST['required']                = array('frmFirstname' => 'First Name','frmLastname' => 'Last Name','email' => 'Email Address');
$_POST['addToCSV']                = true;
//$_POST['sort']                    = 'alphabetic';
//$_POST['print_blank_fields']      = '1'; // or true;
//$_POST['title']                   = 'Feedback Form Results';
//$_POST['return_link_url']         = 'http://yourdomain.com/main.html';
//$_POST['return_link_title']       = 'Back to Main Page';
//$_POST['missing_fields_redirect'] = 'http://yourdomain.com/error.html';
//$_POST['background']              = 'http://www.yourdomain.com/imgs/image.gif';
//$_POST['bgcolor']                 = '#FFFFFF';
//$_POST['text_color']              = '#000000';
//$_POST['link_color']              = '#FF0000';
//$_POST['vlink_color']             = '#0000FF';
//$_POST['alink_color']             = '#0000FF';
//$_POST['flash_sent']              = 'sent=OK'; // USED AS THE RETURN CODE FOR FLASH FORMS
//$_POST['fixedFromEmail']          = ''; //'webmaster@thisdomain.com';
//$_POST['fixedFromName']           = ''; //'Webmaster';

/* Notes

1. The settings above here will over-ride any $_POST variables with the same name
   in the form.

2. The settings above here will also over-ride any variables of the same name in the
   PHPMailer-FE script.

3. While you can put form field calculations in this external configuration file, we
   do not recommend it. This will be used by all your forms.

4. You are probably scratching your head trying to figure out why we are using the
   $_POST as variable names. Setting $_POST can be done outside of the form context,
   here we are setting these "form" variables in a settings file. That means that a
   virtually endless set of possibilities exists between the form and a PHP script.

   For example, you can also use this External Configuration capability to perform
   math on your form. Here's an example. Let's say that you have an form that generates
   pricing based on quantity. Your two form fields then would be "frmQty_1" and
   "frmUnitPrice_1" and "frmQty_2" and "frmUnitPrice_2". To derive the extended price,
   you could use this code:

   $_POST['extPrice_1'] = $_POST['frmQty_1'] * $_POST['frmUnitPrice_1'];
   $_POST['extPrice_2'] = $_POST['frmQty_2'] * $_POST['frmUnitPrice_2'];

   ... and then PHPMailer-FE will process those new "extPrice" form variables.

   Another example is concatenating. Here's an example:

   $_POST['subject'] = 'Share Your Story, by ' . $_POST['title'] . " " . $_POST['realname'];

5. The landing page locations are relative. In the example above, the landing pages
   are located in the same directory as phpmailer-fe.php ... if you use a different
   location, include the entire URi - and keep in mind that any images have to be
   properly referenced.

6. The reply email locations are relative. In the example above, the reply emails
   are located in the same directory as phpmailer-fe.php ... if you use a different
   location, include the entire URi - and keep in mind that any images have to be
   properly referenced.

7. $useAsAutoResponder is another new feature of PHPMailer-FE (default value is false)
   PHPMailer-FE is also a robust Auto-Responder that supports sending an attachment
   to your users. If you want to use it purely as an auto-responder and and not send
   the form results to $recipient, use the setting:
    $useAsAutoResponder = true;
    You can still use PHPMailer-FE as an Auto-Responder with the setting set to false,
    the only difference is that with a value of false, the $recipient will get the form
    contents. Also note that you can add any attachment in the form you display on your
    site to receive attachments from your users ... this AUTO-RESPONDER capability lets
    you store files on your server to send to your users. The way to use that is to put
    two fields in your "form".config.php file:<br />
    $_POST['attach_local_name'] = "/path/to/document.pdf";<br />
    $_POST['attach_local_type'] = "application/pdf";<br />
    (you can get a listing of mime types at http://www.webmaster-toolkit.com/mime-types.shtml).

8. Please note that the order of processing settings, variables and form field values
   is:
   * form
     - you can have PHPMailer-FE settings passed as fields - usually hidden - in the form
   * default external configuration file
     - can override anything in the form - form field values and can set PHPMailer-FE
     settings and variables
   * form-specific external configuration file
     - can override anything in the form - form field values and can set PHPMailer-FE
     settings and variables
     - can override anything passed by the external configuration file

   When PHPMailer-FE subsequently processes, it will accept the last passed form field
   values, settings (from the external configuration files) and ignore any of its
   identical settings inside the PHPMailer-FE script.

With PHPMailer-FE, your possibilities are endless.

*/

?>
