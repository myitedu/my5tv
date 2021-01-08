PHPMailer-FE = PHPMailer Formmail Edition or Form-to-Email

****************************************************************************
BEFORE YOU CONTINUE READING:
- read the README_FIRST.txt file, it contains important information about
  documentation
- the phpmailer-fe.php is in the /_lib folder
- the /sample_forms/ folder contains three examples, each with external
  configuration file examples, and sample landing pages as well as sample
  reply emails.
****************************************************************************
 -- we now have a support forum for PHPMailer-FE and PHPMailer-ML at
    http://www.worxware.com/forum/
****************************************************************************

PHPMailer-FE is an HTML form to e-mail gateway that parses the results of
any form and sends them to the specified recipient(s). This script has many
formatting and operational options, most of which can be specified in each
form. You don't need programming knowledge or multiple scripts for
multiple forms. PHPMailer-FE also has security features to prevent users
from including URLs in fields containing "url" in the field name.
PHPMailer-FE was written to be compatible with Formmail.pl and Formmail.php
and has many of the features of the Perl script Soupermail.

PHPMailer-FE works with the leading Email Transport Class: PHPMailer. It
does not, however, require PHPMailer. PHPMailer-FE will use PHPMailer if
found. If not found, PHPMailer-FE will use the native PHP mail() function.
There is a distinct advantage to using PHPMailer - emails will be sent
in both text and HTML formats with PHPMailer and text-only with the native
PHP mail() function.

Please note that the samples that are included assume you will use PHPMailer.
If not, please modify the samples for text-only emails.

Features:

- support for using PHPMailer as the mail transport ( if not found, will use
  PHP mail() ). With PHPMailer, the email is constructed in multi-part with
  both HTML and text. Without PHPMailer, the email is constructed in text.

- support for ban list ... protects against URLs injected into any field
  that contains "comment" in the field name. There is nothing more annoying
  than putting up a contact us form and having it used by purveyors of porn
  and other junk. This feature will eliminate these emails. The first time
  a spammer uses your form with URLs, 1) their IP and Remote Host will be
  stored in your ban list log file, 2) they will be redirected back to your
  home page, and 3) their submission will be discarded. Future attempts to
  submit the form will result is a rejection message.

- support for redirect when a banned submission is detected. Custom create
  your own ban "landing" page.

- able to send multiple file attachments without storing the files in the
  server. As of version 4.0, there is no restriction on the form field naming.

- support for Reply emails on both successful form submission and in the event
  of a failed form submission - the reply emails can be completely customized
  on a form-by-form basis

- support for different landing pages on both successful form submission and
  in the event of a failed form submission - landing pages can be unique to
  each form

- support for External Configuration files to override form-passed variables
  and variables (or settings) in the main script. The External Configuration
  files can also pre-process form field math (additing fields, as an example)

- support for calculations in the configuration files.
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

  - calculations can be performed on derived data.

- $useAsAutoResponder is another new feature of PHPMailer-FE (default value is false)
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

Other features:

- minimal configuration needed. Essentially all you need to do is change one
  single variable ("recipient"), put the script on your server, and direct
  your form to the script in the form's action directive. The script handles
  everything else. Of course, there are many other optional settings and
  features. Take advantage of them all for a superb, safe and stable
  form mailer solution. In minimial configuration, no other file (config, etc.)
  is required - only the phpmailer-fe.php file.

- Simple licensing (LGPL) and we encourage you to use the script in your
  own applications, including commercial packages. There is NO requirement
  to display any messages for us, although that would be very much appreciated.

Three sample forms are included.

If you haven't done so yet, please download the latest version of PHPMailer or
PHPMailer Lite to use with PHPMailer-FE.

Enjoy!
Andy Prevost
codeworxtech@users.sourceforge.net

PS. Our company, Worx International Inc., handles outsourcing as well as custom
development projects. We consult and work on projects small and large making
the internet a safer place. Our passion is to engage the user in a compelling
internet experience AND reduce the time to live with simple and effective
software tools and components. Contact us today for any project.

We do offer a Remote Forms Processing service. This service offers additional
features:
  - data validation in real time (data validation can include Turing test)
  - CSV log of all submissions (can be sent daily, weekly, monthly)
    - in addition to the emails
  - forms and form processing are remote and on our highly secure servers
  - use your forms, or we design for you
  - forms hosted on our server also feature email address encoding (no email
    harvesters)
  - forms hosted on our server also will not be picked up by search engines
  - Turing test functionality at the client and the server side
