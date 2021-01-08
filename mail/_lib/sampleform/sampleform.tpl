<body>
<table width="600" cellpadding="3" style="border: 1px solid gray;border-collapse:collapse;">
  <tr>
    <th colspan="2" align="center" style="border: 1px solid gray;border-collapse:collapse;">FORM EXAMPLE</th>
  <tr>
  <tr>
    <th style="border: 1px solid gray;border-collapse:collapse;">Form Field</th>
    <th style="border: 1px solid gray;border-collapse:collapse;">Value</th>
  <tr>
  <tr>
    <td style="border: 1px solid gray;border-collapse:collapse;" align="right">Name:</td>
    <td style="border: 1px solid gray;border-collapse:collapse;">{frmFirstname} {frmLastname}</td>
  <tr>
  <tr>
    <td style="border: 1px solid gray;border-collapse:collapse;" align="right">Product 1:</td>
    <td style="border: 1px solid gray;border-collapse:collapse;">{frmQty_1} at {frmUnitPrice_1}</td>
  <tr>
  <tr>
    <td style="border: 1px solid gray;border-collapse:collapse;" align="right">Product 2:</td>
    <td style="border: 1px solid gray;border-collapse:collapse;">{frmQty_2} at {frmUnitPrice_2}</td>
  <tr>
  <tr>
    <td style="border: 1px solid gray;border-collapse:collapse;" align="right">Email:</td>
    <td style="border: 1px solid gray;border-collapse:collapse;">{email}</td>
  <tr>
  <tr>
    <td style="border: 1px solid gray;border-collapse:collapse;" align="right">Message:</td>
    <td style="border: 1px solid gray;border-collapse:collapse;">{frmMessage}</td>
  <tr>
  <tr>
    <td style="border: 1px solid gray;border-collapse:collapse;" align="right">File 1:</td>
    <td style="border: 1px solid gray;border-collapse:collapse;">{file1}</td>
  <tr>
  <tr>
    <td style="border: 1px solid gray;border-collapse:collapse;" align="right">File 2:</td>
    <td style="border: 1px solid gray;border-collapse:collapse;">{file2}</td>
  <tr>
</table>
</body>

Notes:

1. The <body> tag and everything above will be deleted (regardless of complexity.
2. The </body> tag and everything below will be deleted.
3. This is the entire email that will be sent to the site administrator (not the subscriber)
   you can include any and all information you want, everything else will be ignored.
4. This is an HTML email (not an HTML web page) ... do not include any Javascripts (or any
   other scripts), or Java - they won't work in the email body.
   It's questionable whether Flash will work on all email clients.
5. Keep the width to a maximum of between 550px and 650px. The ideal width is 600px. Reason
   for this is that most email client software has a left panel to display either a menu
   tree, menu panels, or other email client application tools. The panel to the right of the menu
   is a listing of received emails, and either the far right or below the listing panel is
   the preview pane for the email. The preview pane size is usually 650px or less (often much
   less).

PS. These notes will be deleted on processing of the file (it's below the </body> tag).
