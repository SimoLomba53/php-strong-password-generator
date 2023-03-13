<?php
 $password_length=rand(10,20);
 $_GET["password_length"]=$password_length;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
  
  <?php include_once __DIR__."./functions/function.php" ?>
  



 
 <form method="GET" action="./session/sessionstart.php" class="row g-3 d-flex align-items-center justify-content-center p-5">
  <div class="mb-5 text-center">
    <h5>La tua nuova password è:</h5>
   <label for="exampleFormControlTextarea1" class="form-label">
   </label>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
     <?php  
      session_start();
      $_SESSION["password"]=$password;
     ?>
    </textarea>
  </div>
   <div class="col-auto">
    <button @click="$password" type="submit" class="btn btn-primary mb-3">GENERATE PASSWORD</button>
  </div>
</form>
</body>
</html>