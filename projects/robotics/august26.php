<?php
function testMe(){
    return "Test me";
}

if (function_exists("testMe")){
    echo testMe();
}

if (function_exists("goToMovie")){
    echo goToMovie();
}