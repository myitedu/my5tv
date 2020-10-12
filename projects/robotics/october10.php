<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jon's homework</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <div class="mytable">
        <h4>Jon's Game</h4>
        <table class="table table-bordered">
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>1</td>
                <td>6</td>
            </tr>
            <tr>
                <td>7</td>
                <td>2</td>
                <td>9</td>
            </tr>
        </table>
        <div class="mybuttons">
            <button class="btn btn-dark">Start Over</button>
            <button class="btn btn-success">Go</button>
        </div>
    </div>
</div>
<style>
    .mybuttons {
        text-align: center;
        margin-bottom: 10px;
    }

    td:hover {
        background-color: lightgrey;
        cursor: pointer;
    }

    table td {

        font-size: 3em;
        background-color: whitesmoke;
    }

    .mytable {
        width: 300px;
        height: auto;
        margin: 100px auto;
        border: 1px solid black;
        text-align: center;
    }
</style>
</body>
</html>