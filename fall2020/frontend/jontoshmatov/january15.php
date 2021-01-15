<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS positions</title>
</head>
<body>

<div id="parent">
    <div id="child1">Child 1</div>
    <div id="child2">Child 2</div>
    <div id="child3">Child 3</div>
</div>

<style>
    #parent{
        background-color: #5890ff;
        width: 500px;
        margin: auto;
    }
    #child1{
        background-color: green;
        width: 33%;
        display: inline-block;
        float: left;
        text-align: center;
    }
    #child2{
        background-color: purple;
        width: 34%;
        display: inline-block;
        float: left;
        text-align: center;
    }

    #child3{
        background-color: #ec9e6d;
        width: 33%;
        display: inline-block;
        text-align: center;
    }
</style>

</body>
</html>