<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="js/bootstrap.bundle.js"></script>
        <title>Exercise 3</title>
    </head>
    <body>
        <?php 
            $nameErr = $emailErr = $phoneNumErr = $websiteErr = $messageErr = "";
            $name = $email = $phoneNum = $website = $message = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                //name
                if(empty($_POST["name"])){
                    $nameErr = "*Cannot be empty!";
                } else {
                    $name = test_input($_POST["name"]);
                }
                //email
                if(empty($_POST["email"])){
                    $emailErr = "*Cannot be empty!";
                } else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                    $emailErr = "*Email invalidate!";
                } else {
                    $email = test_input($_POST["email"]);
                }
                //phoneNumber
                if(empty($_POST["phoneNum"])){
                    $phoneNumErr = "*Cannot be empty!";
                } else if(!filter_var($_POST["phoneNum"], FILTER_VALIDATE_INT)){
                    $phoneNumErr = "Phone Number is invalid!";
                } else {
                    $phoneNum = test_input($_POST["phoneNum"]);
                }
                //website
                if(empty($_POST["website"])){
                    $websiteErr = "*Cannot be empty!";
                } else if (!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
                    $websiteErr = "Url is not in correct format!";
                } else {
                    $website = test_input($_POST["website"]);
                }
                //message
                if(empty($_POST["message"])){
                    $messageErr = "*Cannot be empty!";
                } else {
                    $message = test_input($_POST["message"]);
                } 
            }
            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <div class="container my-3 border rounded shadow bg-body ">
            <form class="my-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <span class="text-danger"><?php echo $nameErr ?></span>
                <input class="form-control" type="text" placeholder="Your name" name="name" id="name" value="">
                <br>
                <span class="text-danger"><?php echo $emailErr ?></span>
                <input class="form-control" type="text" placeholder="Your Email Address" name="email" id="email" value="">
                <br>
                <span class="text-danger"><?php echo $phoneNumErr ?></span>
                <input class="form-control" type="text" placeholder="Your Phone Number" name="phoneNum" id="phoneNum" value="" maxlenght="10">
                <br>
                <span class="text-danger"><?php echo $websiteErr ?></span>
                <input class="form-control" type="text" placeholder="Your Web Site starts with http://" id="website" value="" name="website">
                <br>
                <span class="text-danger"><?php echo $messageErr ?></span>
                <textarea class="form-control" rows="4" name="message" placeholder="Type your Message Here..." id="message" value=""></textarea>
                <br>
                <button class="btn btn-danger fs-3 fw-bold col-12">SUBMIT</button>
            </form>
        </div>
        <?php
            echo "<p>Your name: ".$name."</p>
            <p>Your email: ".$email."</p>
            <p>Your phone number: ".$phoneNum."</p>
            <p>Your Website: ".$website."</p>
            <p>Your message: ".$message."</p>";
        ?>
    </body>
</html>