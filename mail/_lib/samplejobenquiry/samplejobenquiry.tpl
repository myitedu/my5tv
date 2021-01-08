<body>
<style>
td { border: 1px solid gray;border-collapse:collapse; }
</style>
<table width="600" cellpadding="3" style="border: 1px solid gray;border-collapse:collapse;">
  <tr>
    <th colspan="2" align="center" style="border: 1px solid gray;border-collapse:collapse;">JOB ENQUIRY - PERSONAL INFORMATION</th>
  <tr>
  <tr>
    <td width="30%" style="border: 1px solid gray;border-collapse:collapse;" align="right">Candidate Name:</td>
    <td width="70%" style="border: 1px solid gray;border-collapse:collapse;">{frmCandidateName}&nbsp;</td>
  <tr>
  <tr>
    <td align="right">Address:</td>
    <td>{frmAddress}&nbsp;</td>
  <tr>
  <tr>
    <td align="right">City:</td>
    <td>{frmCity}&nbsp;</td>
  <tr>
  <tr>
    <td align="right">Email:</td>
    <td>{email}&nbsp;</td>
  <tr>
  <tr>
    <td align="right">Telephone:</td>
    <td>{frmTelephone}&nbsp;</td>
  <tr>
  <tr>
    <td align="right">Best Time To Reach:</td>
    <td>{frmBestTimeToReach}&nbsp;</td>
  <tr>
  <tr>
    <td align="right">Education:</td>
    <td>{frmEducation} at {frmNameInstitution} with {frmDiploma} <small>Diploma/Certificate/Degree</small></td>
  <tr>
  <tr>
    <td align="right">Computer Literacy:</td>
    <td>{frmComputerPlatform} at level {frmCompetenceLevel}&nbsp;</td>
  <tr>
  <tr>
    <td align="right">Message:</td>
    <td>{frmMessage}&nbsp;</td>
  <tr>
</table>
<br />
<table width="600" cellpadding="3" style="border: 1px solid gray;border-collapse:collapse;">
  <tr>
    <th colspan="2" align="center" style="border: 1px solid gray;border-collapse:collapse;">JOB ENQUIRY - EMPLOYMENT HISTORY</th>
  <tr>
  <tr>
    <td width="33%" align="center">Current or Most Recent Employer:</td>
    <td width="67%">
      <table border="0" cellspacing="0" cellpadding="2" width="100%">
        <tr>
          <td class="colone">Employer</td>
          <td class="colthree">{frmEmployer1}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">Location</td>
          <td class="colthree">{frmEmployer1_Loc}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">How Long</td>
          <td class="colthree">{frmEmployer1_Duration}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">Duties</td>
          <td class="colthree">{frmEmployer1_Duties}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">Annual Earnings</td>
          <td class="colthree">{frmEmployer1_Earnings}&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="33%" align="center">Next Most Recent<br />Employer:</td>
    <td width="67%">
      <table border="0" cellspacing="0" cellpadding="2" width="100%">
        <tr>
          <td class="colone">Employer</td>
          <td class="colthree">{frmEmployer2}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">Location</td>
          <td class="colthree">{frmEmployer2_Loc}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">How Long</td>
          <td class="colthree">{frmEmployer2_Duration}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">Duties</td>
          <td class="colthree">{frmEmployer2_Duties}&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="33%" align="center">Next Most Recent<br />Employer:</td>
    <td width="67%">
      <table border="0" cellspacing="0" cellpadding="2" width="100%">
        <tr>
          <td class="colone">Employer</td>
          <td class="colthree">{frmEmployer3}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">Location</td>
          <td class="colthree">{frmEmployer3_Loc}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">How Long</td>
          <td class="colthree">{frmEmployer3_Duration}&nbsp;</td>
        </tr>
        <tr>
          <td class="colone">Duties</td>
          <td class="colthree">{frmEmployer3_Duties}&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="center">Completed Any<br />Sales or Personal<br />Development Training?</td>
    <td>
      <table border="0" cellspacing="0" cellpadding="2" width="100%">
        <tr>
          <td colspan="2">{frmCourse_Yes} Yes &nbsp;&nbsp;&nbsp;{frmCourse_No} No</td>
        </tr>
        <tr>
          <td class="colone">Course:</td>
          <td class="colthree">{frmSalesMotivationExtras}&nbsp;</td>
        </tr>
      </table>
  </tr>
  <tr>
    <td align="center">Other Information:</td>
    <td>{frmOtherInfo}&nbsp;</td>
  </tr>
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
