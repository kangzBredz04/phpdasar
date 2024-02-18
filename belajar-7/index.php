<?php
// variable scope
$x = 10;
function show()
{
    global $x;
    echo $x;
}

show();