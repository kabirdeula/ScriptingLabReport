<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>inheritance</title>
</head>
<body>
<?php  
    class demo  
    {  
        public function display()  
        {  
            echo "Example of Inheritance  ";  
        }     
    }  
    class demo1 extends demo  
    {  
        public function view()  
        {  
            echo "in php";  
        }     
    }  
    $obj= new demo1();  
    $obj->display();  
    $obj->view();  
?>  
</body>
</html>
