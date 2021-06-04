<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>May 30, 2021</title>
</head>
<body>
<hr>
<table>
    <tr>
        <td>Person</td>
        <td>Age</td>
    </tr>

    <tr>
        <td>Chris</td>
        <td>38</td>
    </tr>

    <tr>
        <td>Dennis</td>
        <td>45</td>
    </tr>

    <tr>
        <td>Sarah</td>
        <td>29</td>
    </tr>

    <tr>
        <td>Karen</td>
        <td>47</td>
    </tr>

</table>
<hr>

<form method="post">
    <p>First Name: <input placeholder="Your first name" name="first_name" type="text"></p>
    <p>Last Name: <input placeholder="Your last name" name="last_name" type="text"></p>
    <p>Age: <input placeholder="Your age" name="age" type="number"></p>
    <p>Gender:
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
    </p>
    <p>
        Phone:
        <select name="phone_area_code">
            <option value="347">347</option>
            <option value="800">800</option>
            <option value="888">888</option>
            <option value="917">917</option>
            <option value="315">315</option>
        </select>

        <input name="phone_number" type="text" placeholder="98480*****">
    </p>

    <p>
        Fruites:
        <input name="fruites" type="checkbox" value="apple">Apple
        <input name="fruites" type="checkbox" value="orange">Orange
        <input name="fruites" type="checkbox" value="banana">Banana
        <input name="fruites" type="checkbox" value="strawberry">Strawberry
    </p>

    <p>
        About You:
        <textarea name="about_you" placeholder="This is about you">

        </textarea>
    </p>

    <p>
        Password:
        <input type="password" name="password" placeholder="Your password">
    </p>

    <p>
        <button type="reset">Start Over</button>
        <button type="submit">Submit</button>
    </p>
</form>


</body>
</html>