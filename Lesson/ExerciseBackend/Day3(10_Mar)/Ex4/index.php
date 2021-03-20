<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercise 4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="js/bootstrap.bundle.js"></script>
    </head>
    <body>
        <?php
            $lastNameErr = $firstNameErr = $genderErr = $addressErr = $magazinesErr = $durationErr = $paymentErr = "";
            $lastName = $firstName = $gender = $address = $magazines = $deration = "";
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
                //gender
                if(empty($_POST["gender"])){
                    $genderErr = " *Cannot be empty!"; 
                } else {
                    $gender = test_input($_POST["gender"]);
                }
                //address
                if(empty($_POST["address"])){
                    $addressErr = " *Cannot be empty!";
                } else {
                    $address = test_input($_POST["address"]);
                }
                //magazines
                // if(empty($_POST["magazines"])){
                //     $magazinesErr = " *Must choose at leasr 1 magazine!"; 
                // } else {
                //     $magazines = test_input($_POST["magazines"]);
                // }
                //duration
                if(empty($_POST["duration"])){
                    $durationErr = " *Cannot be empty!"; 
                } else {
                    $duration = test_input($_POST["duration"]);
                }
                //payment
                if(empty($_POST["gender"])){
                    $paymentErr = " *Cannot be empty!"; 
                } else {
                    $payment = test_input($_POST["payment"]);
                }
            }
            function test_input($data){
                $data = htmlspecialchars($data);   //Uncaught TypeError???
                $data = stripslashes($data);
                $data = trim($data);
                return $data;
            }
            //$magazinesArr = $_POST["magazines"];
            // foreach($magazinessArr as $magazines){
            //     if($magazines == 1){
            //         echo "TIME, ";
            //     } else if($magazines == 2) {
            //         echo "Newsweek ";
            //     } else if($magazines == 3) {
            //         echo "Sunday, ";
            //     } else if($magazines == 4) {
            //         echo "Vogue, ";
            //     } else {
            //         echo "People ";
            //     }
            // }
        ?>
        
        <!--???-->
        
        <div class="container py-3">
            <h2 class="text-center text-success my-3">Subcription Form</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <fieldset class="py-2">
                    <legend class="fw-bold">*Personal Informantion</legend>
                    <div class="col-6">
                        LastName:<span class="text-danger"><?php echo $lastNameErr; ?></span>
                        <input type="text" class="form-control col-12" placeholder="Ho Va" name="lastName"><br><br>
                        FirstName:<span class="text-danger"><?php echo $firstNameErr; ?></span>
                        <input type="text" class="form-control col-12" placeholder="Ten" name="firstName"><br><br>
                        Gender:<span class="text-danger"><?php echo $genderErr; ?></span>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="gender" value="male">
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="gender" value="female">
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                        <br>
                        Address:<span class="text-danger"><?php echo $addressErr; ?><br>
                        <textarea name="address" rows="3" class="form-control" value="Some where in Hanoi"></textarea>
                    </div>
                </fieldset>
                <fieldset class="py-2">
                    <legend class="fw-bold">*Magazinnes subcriptrion for</legend>
                    <span class="text-danger"><?php echo $magazinesErr; ?></span>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="magazines[]" id="time" value="1">
                        <label for="time" class="form-check-label">TIME</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="magazines[]" id="newsweek" class="form-check-input" value="2">
                        <label for="newsweek" class="form-check-label">Newsweek</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="magazines[]" id="sunday" class="form-check-input" value="3">
                        <label for="sunday" class="form-check-label">Sunday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="magazines[]" id="vogue" class="form-check-input" value="4">
                        <label for="vogue" class="form-check-label">Vogue</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="magazines[]" id="people" class="form-check-input" value="5">
                        <label for="people" class="form-check-label">People</label>
                    </div>
                </fieldset>
                <fieldset class="py-2">
                    <legend class="fw-bold">*Duration</legend>
                    <span class="text-danger"><?php echo $durationErr; ?></span>
                    <div class="form-check">
                        <input type="radio" name="duration" id="1year" class="form-check-input">
                        <label for="1year" class="form-check-label">1 Year</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="duration" id="3years" class="form-check-input">
                        <label for="3years" class="form-check-label">3 Years</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="duration" id="5years" class="form-check-input">
                        <label for="5years" class="form-check-label">5 Years</label>
                    </div>
                </fieldset>
                <fieldset class="py-2">
                    <legend class="fw-bold">*Payment options</legend>
                    <span class="text-danger"><?php echo $paymentErr; ?></span>
                    <div class="form-check">
                        <input type="radio" name="payment" id="demandDraft" class="form-check-input">
                        <label for="demandDraft" class="form-check-label">Demand Draft</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="payment" id="creditCard" class="form-check-input">
                        <label for="creditCard" class="form-check-label">Credit Card</label>
                    </div>
                </fieldset>
                <button class="btn btn-secondary" type="submit" name="save">Process</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </form>
        </div>
        <?php
            //php
        ?>
    </body>
</html>