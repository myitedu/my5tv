<?php
$tag = file_get_contents("homepage.html");
$p = "#<title>.*</title>#";
preg_match_all($p,$tag, $tags);

echo "<pre>";
foreach ($tags[0] as $tag){
    echo strip_tags($tag)."<hr>";
}

