<?php

session_start();


if(isset($_POST['submit']))
{
      $kullanci=$_POST['kullanci'];
      $sifre=$_POST['sifre'];
     if($kullanci=="g201210030@sakarya.edu.tr"  && $sifre=="g201210030")  
     {
       
       echo ("Hoşgeldiniz ``g201210030´´");
      echo"<br>"  ;
       echo '<a href="index.html"> Ana sayfaya geri dön </a>';
     }
       
      
       
    
     else
     {
       
       
      echo ("Lütfen tekrar deneyiniz");
      echo '<a href="giris.html">Giriş yap</a>';
     }


       



}

?>