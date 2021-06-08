<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
    <style>
        #marquee {
            background-color: #1c87c9;
            color: #fff;
            padding: 5px;
        }
        #marquee p {
            -moz-animation: marquee 10s linear infinite;
            -webkit-animation: marquee 10s linear infinite;
            animation: marquee 29s linear infinite;
        }
        @-moz-keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        @-webkit-keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        @keyframes marquee {
            0% {
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%)
            }
            100% {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
<div id="marquee">
    <p>This is a horizontally scrolling text without a marquee tag.      sfsdfsdfdfsdfs s dfs df sd f sdf</p>
</div>
</body>
</html>