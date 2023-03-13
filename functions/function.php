    <?php  
      $caracters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $mixcaracters= str_shuffle($caracters);
      $password = substr($mixcaracters,0,$password_length);
     ?>