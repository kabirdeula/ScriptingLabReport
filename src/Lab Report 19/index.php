<!DOCTYPE html>
<html>
<?php
    if(isset($_GET['calculate'])){
        $input = $_GET['input'];
        for ($x = 2; $x < $input - 1; $x++){
            if($input % $x == 0) $flag = 1;
        }
    }
?>
<head>
  <title>prime or not</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container shadow-lg p-5 my-5">
        <p class="text-bold my-2 text-center h3">Check Prime Number</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <div class="form-floating">
                <input type="number" name="input" id="input" class="form-control" placeholder="Input">
                <label>Input</label>
            </div>
            <button class="btn btn-danger my-3" name="calculate">Calculate</button>
        </form>
        <div class="form-floating">
            <input type="text" name="output" id="output" class="form-control" placeholder="Output" value="<?php if ($flag) echo $input." is not Prime";else echo $input. " is Prime";?>" disabled>
            <label>Output</label>
        </div>
    </div>
</body>
</html>
