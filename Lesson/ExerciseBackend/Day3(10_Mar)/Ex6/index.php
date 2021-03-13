<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container my-3">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            Search String: <input type="text" name="string" class="my-2 form-control" placeholder="Nhập chuỗi để tim kiếm nguyên âm">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $str = $_POST["string"];
                $strLower = strtolower($str);
                $matches = preg_match_all('/[ueoai]/im',$strLower);
                echo "Số nguyên âm là: ".$matches;
            }
        ?>
    </div>
</body>
</html>