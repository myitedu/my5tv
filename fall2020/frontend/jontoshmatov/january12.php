<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>January 12, 2021</title>
    <link rel="stylesheet" href="../css/january12.css">
</head>
<body>
    <div id="myform">
    <form>
        <table class="form_table">
            <tr>
                <td class="form_title" colspan="2">Registration form</td>
            </tr>

            <tr>
                <td class="form_label">First Name</td>
                <td class="form_inputs">
                    <input type="text" placeholder="Your First Name">
                </td>
            </tr>

            <tr>
                <td class="form_label">Last Name</td>
                <td class="form_inputs">
                    <input type="text" name="last_name" placeholder="Your Last Name">
                </td>
            </tr>

            <tr>
                <td class="form_label">Nickname</td>
                <td class="form_inputs">
                    <input type="text" name="nickname" placeholder="Nickname">
                </td>
            </tr>

            <tr>
                <td class="form_label">Email</td>
                <td class="form_inputs">
                    <input type="email" name="email" placeholder="Your Email Address">
                </td>
            </tr>

            <tr>
                <td class="form_label">Password</td>
                <td class="form_inputs">
                    <input type="password" name="password" placeholder="Your Password">
                </td>
            </tr>

            <tr>
                <td class="form_label">Date of Birth</td>
                <td class="form_inputs">
                    <input type="date" name="dob" placeholder="Your DOB">
                </td>
            </tr>

            <tr>
                <td class="form_label">Gender</td>
                <td class="form_inputs form_inputs_gender">
                    <label><input class="my_radio_input" value="male" type="radio" name="gender"><span class="span_male">Male</span></label>
                    <label><input class="my_radio_input" value="female" type="radio" name="gender"><span class="span_female">Female</span></label>
                </td>
            </tr>



        </table>
    </form>
    </div>
</body>
</html>