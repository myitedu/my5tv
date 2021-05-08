<?php
function yearsInOneHouse($age, $moves) {
    return $age / ($moves +1);
}


echo yearsInOneHouse(80, 0);