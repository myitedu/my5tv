<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather forecast for <?php echo date('Y-m-d');?> in Brooklyn, NY USA</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
$zipcode = $_GET['zipcode']??11229;
include_once "api.php";
?>
<div class="container-fluid">

    <div id="form">
    <form>
        <p>Search: <input value="<?php echo $zipcode;?>" name="zipcode" minlength="5" maxlength="5" type="number" placeholder="Your zip code">
        <button type="submit">Go</button>
        </p>
    </form>
    </div>

    <div id="weather">
        <table class="table table-bordered">
            <tr>
                <td>Location</td>
                <td><?php echo $weather['City'] ." ". $weather['State'];?></td>
            </tr>
            <tr>
                <td>Temperature (F)</td>
                <td><?php echo $weather['TempF'];?>  &#x2109;</td>
            </tr>

            <tr>
                <td>Temperature (C)</td>
                <td><?php echo $weather['TempC'];?>  &#x2103;</td>
            </tr>

            <tr>
                <td>Condition</td>
                <td><?php echo $weather['Weather'];?></td>
            </tr>
        </table>
    </div>

</div>

<pre>
"City":"San Francisco"
"State":"CA"
"TempF":"63.0  &#x2103"
"TempC":"17.2"
"Weather":"Mostly Cloudy and Breezy"
"WindMPH":"21.9"
"WindDir":"Northwest"
"RelativeHumidity":"58"
"VisibilityMiles":"10.00"
"AirQualityIndex":"70"
"AirQualityCode":"2"
"AirQuality":"Moderate"
"Sunrise":"06:01"
"Sunset":"20:10"
"DaylightHours":"14"
"DaylightMinutes":"9"
"Code":"Success"
"Credits":"499627311"
</pre>


<style>
    #form{
        width: 600px;
        height: auto;
        margin: auto;
        margin-top: 100px;
        background-color: #f4f4f4;
        text-align: center;
    }
    #weather{
        width: 600px;
        height: 300px;
        margin: 10px auto;
        background-color: lightgrey;
        border: 2px double darkred;
    }
    pre{
        color: yellow;
        display: none;
    }
    body{
        background-color: #493609;

    }
</style>
</body>
</html>