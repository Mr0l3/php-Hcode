<?php
$not3 = true;

while ($not3){
    $n = rand(0, 10);

    if ($n === 3){
        echo "Treeeeesss";
        $not3 = false;
    }else echo "$n ";
}