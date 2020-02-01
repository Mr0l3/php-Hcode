<form method="post">
    <input type="text" placeholder="Mensagem" name="msg" required>
    <button type="submit">Submit</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $msg = htmlentities($_POST["msg"]);  // convert <> to &lt and &gt
    echo $msg;
}
