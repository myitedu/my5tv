<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to our class</title>
</head>
<?php
exit;
$class = 'noerror';
$email = $_GET['email']??null;
if ($email) {
    $result = explode("@", $email);

    if ($result[1] !== 'yahoo.com'){
        $class = "error";
        echo "Sorry, we only accept yahoo account";
    }else{
        $class = 'noerror';
        echo "GOOOD";
    }



    echo "<pre>";
    var_dump($result);
    echo "</pre>";
}
?>
<body class="<?=$class?>">
<div >
    <form action="september29.php">
        <p>
            Email: <input value="<?php echo $email;?>" name="email" placeholder="Please enter your email">
            <button type="submit">GO</button>
        </p>
    </form>
    <?php
    echo "<hr>Siz quydagi passwordni kiritidingiz: $email<hr>";
    ?>
</div>

<style>
    .error{
        background-color: #f1aeae;
    }
    .noerror{
        background-color: #8ff37d;
    }
</style>
</body>
</html>