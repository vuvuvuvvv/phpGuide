<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="js/bootstrap.bundle.js"></script>
    </head>
    <body>
    <?php
        $firstNameErr = $lastNameErr = $emailErr = $genderErr = $stateErr = "";
        $firstName = $lastName = $email = $gender = $state = $hobbies = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //fName
            if(empty($_POST["firstName"])) {
                $firstNameErr = " *Cannot be empty!";
            } else {
                $firstName = test_input($_POST["firstName"]);
            }
            //lName
            if(empty($_POST["lastName"])){
                $lastNameErr = " *Cannot be empty!";
            } else {
                $lastName = test_input($_POST["lastName"]);
            }
            //email
            if(empty($_POST["email"])){
                $emailErr = " *Cannot be empty!";
            } else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $emailErr = "Email invalidate!";
            } else {
                $email = test_input($_POST["email"]);
            }
            //gender
            if(empty($_POST["gender"])){
                $genderErr = " *Cannot be empty!"; 
            } else {
                $gender = test_input($_POST["gender"]);
            }
            //state
            if(empty($_POST["state"])){
                $stateErr = "*Cannot be empty!"; 
            } else if($_POST["state"] == "Open this select menu"){
                $stateErr = "*Cannot be empty!";
            } else {
                $state = test_input($_POST["state"]);
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 my-3">
                <h2 class="p-2 text-center bg-secondary rounded">Login</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    First name:<small class="text-danger"><?php echo $firstNameErr; ?></small>
                    <input class="form-control" type="text" name="firstName" placeholder="Firstname">
                    <br>
                    Last name:<small class="text-danger"><?php echo $lastNameErr; ?></small>
                    <input class="form-control" type="text" name="lastName" placeholder="Lastname">
                    <br>
                    Email:<small class="text-danger"><?php echo $emailErr; ?></small>
                    <input class="form-control" type="text" name="email" placeholder="email">
                    <br>
                    <label>Gender:</label>
                    <small class="text-danger"><?php echo $genderErr; ?></small>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male"> Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female"  value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <br>
                    <label>State:</label>
                    <small class="text-danger"><?php echo $stateErr; ?></small>
                    <select class="form-select" aria-label="Default select example" name="state">
                        <option value="0"selected>Open this select menu</option>
                        <option value="1">Johor</option>
                        <option value="2">Massachusetts</option>
                        <option value="3">Washingtion</option>
                    </select>
                    <br>
                    <label class="mr-4">Hobbies:</label>
                    <div class="form-check mb-3 ms-2">
                        <input type="checkbox" class="form-check-input" name="hobbies[]" value="1" id="badminton">
                        <label class="form-check-label" for="badminton">Badminton</label>
                    </div>
                    <div class="form-check mb-3 ms-2">
                        <input type="checkbox" class="form-check-input" name="hobbies[]" value="2" id="football">
                        <label class="form-check-label" for="checkFootball">Football</label>
                    </div>
                    <div class="form-check mb-3 ms-2">
                        <input type="checkbox" class="form-check-input" name="hobbies[]" value="3" id="bicycle">
                        <label class="form-check-label" for="checkBicyle">Bicycle</label>
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Save record</button>
                    <button class="btn btn-dark" type="reset" name="reset">Reset</button>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 my-3">
                <h2 class="p-2 bg-secondary rounded">Featured</h2>
                <h2>Special title treatment</h2>
                <p>With supporting text below a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php
            echo "<h2>Your Information:</h2>";
            echo "Name: ".$firstName." ".$lastName."<br>";
            echo "Email: ".$email."<br>";
            echo "Gender: ".$gender."<br>";
            echo "State: ".$state."<br>";
            echo "Hobbies: ";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $hobbiesArr = $_POST["hobbies"];
                foreach($hobbiesArr as $hobbies){
                    if($hobbies == 1){
                        echo "badminton; ";
                    } else if($hobbies == 2) {
                        echo "football; ";
                    } else {
                        echo "bicycle ";
                    }
                }
            }
        ?>
    </body>
</html>