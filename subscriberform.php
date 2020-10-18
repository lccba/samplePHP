<?php


if($_POST["message"]) {


mail("lyleschu1359@gmail.com", "Sample Form Results",


$_POST["Form is here"]. "From: lyleandthecoop@gmail.com");


}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>(^.^)</title>
    </head>
    <body>
        <form method="post" action="subscriberform.php">
        <textarea name="message"></textarea>
        <input type="submit">
        </form>
    </body>
</html>
