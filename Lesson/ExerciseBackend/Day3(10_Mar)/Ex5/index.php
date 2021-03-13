<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <?php 
        $firstNumErr = $lastNumErr = "";
        $firstNum = $lastNum = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["firstNum"])){
                $firstNumErr = "*Cannot be empty!";
            } else if(!filter_var($_POST["firstNum"], FILTER_VALIDATE_INT) || !filter_var($_POST["firstNum"], FILTER_VALIDATE_FLOAT)){
                $firstNumErr = "*Number is invalid!";
            } else {
                $firstNum = $_POST["firstNum"];
            }
            if(empty($_POST["lastNum"])){
                $lastNumErr = "*Cannot be empty!";
            } else if(!filter_var($_POST["lastNum"], FILTER_VALIDATE_INT) || !filter_var($_POST["lastNum"], FILTER_VALIDATE_FLOAT)){
                $lastNumErr = "*Number is invalid!";
            } else {
                $lastNum = $_POST["firstNum"];
            }
        }
    ?>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h2 class="bg-secondary text-center p-3">Thực hành toán tử</h2>
            Nhập số a:<span class="text-danger"><?php echo $firstNumErr ?></span>
            <input type="text" name="firstNum" class="form-control"><br>
            Nhập số b:<span class="text-danger"><?php echo $lastNumErr ?></span>
            <input type="text" name="lastNum"class="form-control"><br>
            <button type="submit" class="btn btn-success" name="sum">a + b</button>
            <button type="submit" class="btn btn-primary" name="sub">a - b</button>
            <button type="submit" class="btn btn-danger" name="mul">a * b</button>
            <button type="submit" class="btn btn-warning text-light" name="div">a / b</button>
        </form>
    </div>
    <?php 
        // $sum = (int)$firstNum + (int)$lastNum;
        // $sub = (int)$firstNum - (int)$lastNum;
        // $mul = (int)$firstNum * (int)$lastNum;
        // $div = (int)$firstNum / (int)$lastNum;
        if(isset($_POST["sum"])) {
            echo "a + b = ";
        } else if(isset($_POST["sub"])){
            echo "a - b = ";
        } else if(isset($_POST["mul"])){
            echo "a * b = ";
        } else {
            echo "a / b = ";
        }
        var_dump(empty(0));
    ?>
</body>
</html>