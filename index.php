<?php include 'class/MyBigNumber.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Sum</title>
</head>
<body>
    <form action="" method="post">
        <div class="mb-3">
            <label for="num1" class="form-label">Số thứ 1</label>
            <input type="number" class="form-control" name="num1" id="num1">
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Số thứ 2</label>
            <input type="number" class="form-control" name="num2" id="num2">
        </div>
        <button class="btn btn-primary" type="submit" id="btn">Submit</button>
    </form>
    
    <?php
        if(isset($_POST['num1']) && isset($_POST['num2'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $sum = new MyBigNumber($num1, $num2);
            echo $sum->MyBigNumber($num1, $num2);
        }
    ?>
</body>
</html>