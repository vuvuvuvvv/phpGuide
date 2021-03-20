<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-danger{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $AErr = $BErr = "";
        $A = $B = "";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["stringA"])){
                $AErr = "Cannot be empty!";
            } else {
                $A = test_input($_POST["stringA"]);
            }
            if(empty($_POST["stringB"])){
                $BErr = "Cannot be empty!";
            } else {
                $B = test_input($_POST["stringB"]);
            }
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        A: <input type="text" name="stringA" minlenght="30">
        <span class="text-danger"><?php echo $AErr; ?></span>
        <br><br>
        B: <input type="text" name="stringB" maxlenght="1">
        <span class="text-danger"><?php echo $BErr; ?></span>
        <br><br>
        <input type="submit" value="submit">
    </form>
    <?php //error
        // $matches;
        // if($_SERVER["REQUEST_METHOD"] == "POST"){
        //     $matches = preg_match_all("'/[".$B."]/im'", $A);
        // } else {
        //     $matches = "";
        // }
        // echo $matches;
    ?>
</body>
</html>