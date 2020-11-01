<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ghost Api</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php include_once 'api.php'; ?>
<div class="container-fluid">
    <table class="table table-bordered">
        <tr><td class="searchform_td" colspan="2">
                <h3>Weather by zip code</h3>
                <hr>
                <form class="form-group">
                    <label>Search: </label>
                    <input value="<?php echo $zipcode; ?>" class="form-control" name="zipcode" placeholder="Zip Code" type="number">
                    <button class="btn btn-info" type="submit">GO</button>
                </form>
            </td></tr>
        <tr><td>City</td><td><?php echo $weather['City'] ?></td></tr>
        <tr><td>St11229ate</td><td><?php echo $weather['State'] ?></td></tr>
        <tr><td>TempF</td><td><?php echo $weather['TempF'] ?></td></tr>
        <tr><td>TempC</td><td><?php echo $weather['TempC'] ?></td></tr>
        <tr><td>Weather</td><td><?php echo $weather['Weather'] ?></td></tr>
        <tr><td>WindMPH</td><td><?php echo $weather['WindMPH'] ?></td></tr>
        <tr><td>WindDir</td><td><?php echo $weather['WindDir'] ?></td></tr>
        <tr><td>RelativeHumidity</td><td><?php echo $weather['RelativeHumidity'] ?></td></tr>
        <tr><td>VisibilityMiles</td><td><?php echo $weather['VisibilityMiles'] ?></td></tr>
    </table>
</div>


<style>
    .searchform_td{
        text-align: center;
        background-color: #fff !important;
    }
    td:first-child{
        background-color: #efefef94;
        font-weight: bolder;
        width: 200px;
    }
</style>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>