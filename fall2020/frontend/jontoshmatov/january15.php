<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form - 2</title>
</head>
<body>
<div id="myform">
    <table class="mytable">
        <tr>
            <td class="first_col">Your E-mail: </td>
            <td><input name="email" type="email" placeholder="Enter your email here"></td>
        </tr>
        <tr>
            <td class="my_col">Your Photo: </td>
            <td><input name="your_photo" type="file" placeholder="Upload your photo"></td>
        </tr>
        <tr>
            <td class="my_col">Pick Your Country</td>
            <td>
                USA <input value="usa" type="radio" name="country"> |
                Canada <input value="canada" type="radio" name="country"> |
                Russia <input value="russia" type="radio" name="country"> |
                Uzbekistan <input value="uzbekistan" type="radio" name="country"> |
            </td>
        </tr>

        <tr>
            <td class="my_col">Pick your color</td>
            <td>
                Red <input value="red" type="checkbox" name="color"> |
                Green <input value="green" type="checkbox" name="color"> |
                Blue <input value="blue" type="checkbox" name="color"> |
                Yellow <input value="yellow" type="checkbox" name="color"> |
            </td>
        </tr>
    </table>
</div>

<style>
    .mytable{
        background-color: #f4f6f8;
        width: 500px;
        margin: 100px auto;
    }

    td{
        border: 1px solid darkgray;
    }

    .first_col{
        text-align: center;
        color: green;
    }
    .my_col{
        text-align: center;
        color: #0b2560;
    }

</style>


</body>
</html>