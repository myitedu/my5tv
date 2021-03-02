<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/february27.css">
</head>
<body>
<?php include_once "backend.php";?>
<div class="container-fluid">
    <div><h4>Our Online Application</h4></div>
    <div class="myform2">
        <form>
            <?php if ($error):?>
                <div class="alert alert-danger">
                    <?php echo $error;?>
                </div>
            <?php endif;?>


            <p>SSN: <input value="<?=$ssn;?>" name="ssn" type="text" placeholder="123-45-6789"></p>
            <p>Phone: <input value="<?=$phone;?>" name="phone" type="text" placeholder="+1 (347) 576-4951"></p>
            <p>DOB: <input value="<?=$dob;?>" name="dob" type="text" placeholder="01/01/2000"></p>
            <p>
                <button type="reset">Start Over</button>
                <button type="submit">Submit</button>
            </p>
        </form>
    </div>
</div>
</body>
</html>