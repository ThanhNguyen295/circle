<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Thông Tin Nhân Viên</title>
     <style> 
     button { width: 100%;}

     body {
        background-color: lightblue;
    }
    h1{ letter-spacing: 10px;
        font-family:Cursive;
        color: blue;
        text-align: center;
        background-color:burlywood;}
       
     </style>  
</head>
<body>  
<?php 
    require_once('./layouts/header.php');
  
?>
    <div class="container">
        <h1>Danh sách Nhân Viên</h1>  
    </div>
    <div class="nav_header">
        <a href="show.php">
            <button class="btn btn-success">Thông Tin Nhân Viên</button>
        </a>
    </div>
    <?php 
    
    require_once('./layouts/footer.php');
?>
</body>
</html>