<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<?php
error_reporting(0);
$mysql = mysqli_connect("localhost","root","","myitedu");
if (!$mysql && !isset($mysql->connect_error)){
    exit("There is a DB connection error: DB connection is not established");
}
$sql = "SELECT * FROM students order by id desc limit 10;";
$results = $mysql->query($sql);
?>
<h4>Add a new student</h4>
<hr>
<form method="post" action="addstudents_post.php">
    <p>
        <label>
            Full Name: <input name="full_name" placeholder="Student Full Name">
        </label>
    </p>
    <p>
        <label>
            Company Name:
            <select name="company">
                <option value="IBM">IBM</option>
                <option value="Google">Google</option>
                <option value="Facebook">Facebook</option>
                <option value="Yahoo">Yahoo</option>
                <option value="Amazon">Amazon</option>
                <option value="Others">Others</option>
            </select>
        </label>
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>

</form>
<hr>
<table class="table table-bordered">
    <tr>
        <th>Full Name</th>
        <th>Company Name</th>
        <th>Image</th>
    </tr>
    <?php
    while ($jon=$results->fetch_assoc()){
    ?>
    <tr>
        <?php
        $results->fetch_assoc();
        ?>
        <td><?php echo $jon['full_name']?></td>
        <td><?php echo $jon['company']?></td>
        <td>Image</td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>