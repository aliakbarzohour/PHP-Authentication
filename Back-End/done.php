<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully</title>
</head>
<style>
    body {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        background: linear-gradient(rgb(148 168 0), rgb(0 66 26));
        color: white;
        min-height: 100vh;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <h1>Successfully Login ✅</h1>
    <h3>
    <?php
    echo "Your Name : ".$_SESSION["admin_name"]. "<br />";
    echo "Your Name: ".$_SESSION["admin_email"];
    ?>
    </h3>
</body>

</html>