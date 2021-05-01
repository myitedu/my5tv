<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="classwork">

  <ul>
      <li class="bar">A
          <ul>
              <li class="child">A1</li>
              <li class="child">A2</li>
              <li class="child">A3</li>
              <li class="child">A4</li>
          </ul>
      </li>
      <li class="bar">B
          <ul>
              <li class="child">B1</li>
              <li class="child">B2</li>
              <li class="child">B3</li>
              <li class="child">B4</li>
          </ul>
      </li>
      <li class="bar">C
          <ul>
              <li class="child">C1</li>
              <li class="child">C2</li>
              <li class="child">C3
                  <ul>
                      <li class="gchild">C3a</li>
                      <li class="gchild">C3b</li>
                      <li class="gchild">C3c</li>
                      <li class="gchild">C3d</li>
                  </ul>
              </li>
              <li class="child">C4</li>
          </ul>
      </li>
      <li class="bar">D
          <ul>
              <li class="child">D1</li>
              <li class="child">D2</li>
              <li class="child">D3</li>
              <li class="child">D4</li>
          </ul>
      </li>
  </ul>






</div>



<style>

    .gchild{
        background-color: #35215a;
        list-style: none;
        position: relative;
        top: -35px;
        left: 121px;
        width: 161px;
        display: none !important;
    }


    .child:hover > ul li{
        display: block !important;
    }

    .bar:hover > ul li{
        display: block;
    }


    .child{
    display: none;
    }
    li:hover{
        background-color: #910000;
    }
    li{
        border-top: 1px dotted white;
        height: 35px;
    }
    .child{
        background-color: #35215a;
        list-style: none;
        position: relative;
        top: 32px;
        left: -45px;
        width: 161px;
    }
    .bar{
        width: 150px;
        height: 60px;
        margin: 20px auto;
        background-color: #402a6a;
        border: 1px solid darkgreen;
        padding: 5px;
        color: gold;
        font-size: 30px;
        cursor: pointer;
        list-style: none;
        display: inline-block;
        float: left;
    }
    .classwork{
        width: 1000px;
        height: auto;
        background-color: aliceblue;
        color: #900048;
        margin: 100px auto;
        border: 4px double darkblue;
    }
    body{
        background-color: black;
    }
</style>

</body>
</html>