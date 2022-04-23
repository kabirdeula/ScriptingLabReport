<!DOCTYPE html>
<html>
<?php  
if(isset($_GET["calculate"])){
    $num = $_GET['input'];  
    $factorial = 1;  
    for ($x=$num; $x>=1; $x--) $factorial *= $x;  
}
?>
<head>
  <title>factorial</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container shadow-lg p-5 my-5">
        <p class="h2 text-bold text-center m-1">Factorial</p>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            <div class="form-floating">
                    <input type="number" name="input" id="input" class="form-control" placeholder="Input">
                    <label>Input</label>
            </div>
            <button class="btn btn-danger my-4 px-3" name="calculate">Calculate</button>
        </form>
        <div class="form-floating">
            <input type="number" name="output" id="output" class="form-control" placeholder="Output" value="<?php echo $factorial;?>">
            <label>Factorial</label>
        </div>
    </div>
</body>
</html>
