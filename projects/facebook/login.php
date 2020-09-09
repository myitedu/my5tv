<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secure Area Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid mywrapper">

    <form method="post" action="backend.php">
        <h4>Secure Area Login Form</h4>

        <?php
        if (isset($_GET['error']) && $_GET['error']==1)
            {
        ?>
            <div class="alert alert-danger"><?php echo $_GET['msg']??null?></div>
        <?php
            }
        ?>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="reset" class="btn btn-dark">Reste</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>


<style>
    .mywrapper{
        width: 700px;
        margin: 100px auto;
        background-color: #e5e5e5;
        border: 1px solid #000000;
        border-radius: 15px;
        padding: 5px;
    }
</style>

</body>
</html>
