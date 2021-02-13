<?php

echo "New York time: ".  date('m/d/Y H:i:s A');

echo "<hr>";

ini_set('date.timezone','Asia/Tashkent');

echo "Chicago Time: ".date('m/d/Y H:i:s A');

echo "<hr>";

phpinfo();