<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baha's Car Dealers</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jonjs.js"></script>
</head>
<body>
<?php include "phpcode.php"; ?>
<div class="joncontainer">
<<<<<<< HEAD
    <?php include "jonheader.php"; ?>
    <?php include "jonmenu.php"; ?>
    <?php include "contactus_post.php"; ?>
    <div id="contactus">
        <h5>Contact Us</h5>
        <p class="mydivider"><img
                    src="https://orig00.deviantart.net/a7f3/f/2017/160/7/6/7638e9b882c89541a7813f20786a21ee-dbc3bkh.png">
        </p>
        <form method="post">
            <div class="form-group">
                <table class="table mytable">
                    <tr>
                        <td><label for="first_name">First Name: </label></td>
                        <td>
                            <div class="form-group">
                                <input name="first_name" required="required" placeholder="John" type="text" class="form-control"
                                       id="first_name" aria-describedby="first_name_help">
                                <small id="first_name_help" class="form-text text-muted">Our sale associate will call
                                    your name</small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="last_name">Last Name: </label></td>
                        <td>
                            <div class="form-group">
                                <input name="last_name"  required="required" placeholder="Doe" type="text" class="form-control"
                                       id="last_name" aria-describedby="last_name_help">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email Address: </label></td>
                        <td>
                            <div class="form-group">
                                <input name="email" placeholder="jondoe@gmail.com" type="text"
                                       class="form-control" id="email" aria-describedby="email_help">
                                <small id="email_help" class="form-text text-muted">We will not share your email with
                                    anyone</small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone Number: </label></td>
                        <td>
                            <div class="form-group">
                                <input name="phone_number"  required="required" placeholder="(347) 123-4567" type="tel" class="form-control"
                                       id="phone" aria-describedby="tel_help">
                                <small id="tel_help" class="form-text text-muted">We will send your a SMS update</small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="message">Message: </label></td>
                        <td>
                            <div class="form-group">
                                <textarea name="message"  required="required" placeholder="Your Message"
                                          class="form-control"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="buttons_td" colspan="2">
                            <small class="form-text text-muted required_text_label">* Required fields</small><br>
                            <button class="btn btn-dark" type="reset">Reset</button>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <?php include "jonmodal.php"; ?>
</div>
<?php include "jonfooter.php"; ?>
<style>

    th, td {
        border: none !important;
    }

    .required_text_label {
        color: red !important;
    }

    td label::after {
        content: "*";
        color: red;
    }

    .buttons_td {
        text-align: center !important;
    }

    td:last-child input {
        width: 100%;
    }

    td:last-child {
        width: 68%;
    }

    td:first-child {
        text-align: right;
        width: 32%;
    }

    .mytable {
        width: 100%;
        margin: auto;
    }

    .mydivider img {
        width: 50%;
    }

    .mydivider {
        text-align: center;
    }

    #contactus h5 {
        text-align: center;
    }

    #contactus {
        padding: 5px 5px 5px 10px;
        margin-top: 20px;
    }

    .navbar {
=======
    <?php include "jonheader.php";?>
    <?php include "jonmenu.php";?>

    <div id="contactus">
        <img src="https://www.carscoops.com/wp-content/uploads/2019/04/f0a676c9-2002-mercedes-g-class-kahn-tuning-0-1024x555.jpg">
    </div>

    <?php include "jonmodal.php";?>
</div>
    <?php include "jonfooter.php";?>
<style>
    .navbar{
>>>>>>> dd8690d95a59c87b72c5cca79ed0981633e092af
        background-color: <?php echo $navbar;?> !important;
    }
</style>
</body>
</html>
