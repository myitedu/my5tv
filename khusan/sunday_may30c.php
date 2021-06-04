<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>May 30, 2021 (c)</title>
</head>
<body>

<div id="parent">
    <div id="child">A boy with his dog climbed on top of the hill</div>
</div>



<style>

  #parent:hover > div{
      color: red;
      cursor: help;
  }

    #child{
        width: 200px;
        background-color: #182c50;
        color: yellow;
        padding: 4px;
        position: relative;
        left: 151px;
        top: 254px;
        border-top-left-radius: 10px;
        border-left: 1px solid grey;
        border-top: 1px solid grey;

    }

    #parent{
        width: 350px;
        height: 290px;
        border: 25px double #182c50;
        color: yellow;
        padding: 10px;
        background-image: url("https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
</body>
</html>
