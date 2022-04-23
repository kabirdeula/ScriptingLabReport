<!DOCTYPE html>
<html>

<?php

if(isset($_GET['calculate'])){
    $x = $_GET["num1"];
    $y = $_GET["num2"];
    $z = $_GET["num3"];

    $max = $x;

    if ($x >= $y){
        if ($x >= $z) $max = $x;
        else $max = $z;
    }else {
        if ($y >= $z) $max = $y;
        else $max = $z;
    }
}

?>

<head>
    <meta charset="utf-8">
    <title>Largest Number</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container shadow-lg p-5 my-5">
        <p class="text-center h3">Largest Number</p>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
            <div class="row">
                <div class="col-md-4 form-floating">
                    <input type="number" name="num1" id="num1" class="form-control" placeholder="Number 1">
                    <label>Number 1</label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="number" name="num2" id="num2" class="form-control" placeholder="Number 2">
                    <label>Number 2</label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="number" name="num3" id="num3" class="form-control" placeholder="Number 3">
                    <label>Number 3</label>
                </div>
            </div>
            <button class="btn btn-danger my-4" name="calculate">Calculate</button>
            <div class="form-floating">
                <input type="number" name="output" id="output" class="form-control" value="<?php echo $max ?>" disabled>
                <label>Largest Number</label></div>
        </form>
    </div>
</body>

</html>