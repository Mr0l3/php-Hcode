<?php

setcookie("cookie-name", json_encode(array('cookie_value'=>'test')), time() + 3600); // cookie expires in 1 hour

echo "Cookie succesfully created";
