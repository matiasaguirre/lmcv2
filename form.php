<!doctype html>
<html lang="en" style="background-color:#060606">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="css/fontAwesome.css">
     <link rel="shortcut icon" href="images/no lie.ico"> 
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="images/no lie.ico"> 
      

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Logistica MC</title>
  </head>
  <body style="background-color:#060606">

<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div id="gtco-logo"><a href="index.html"><img src="images/truelogo.png" id="logo" alt=""></a></div>
        </div>

        
      </div>
      
    </div>
  </nav>



   
    
   
 
<div class="container" id="container_data">
  
    <p id="data">

  <?php 
  if($_POST['kilometro']==0)
  {echo "Ingresa un valor distinto de 0";}
  else{
 
    $kilometro=$_POST['kilometro']*90;
    $peso=$_POST['peso']*0.98;
    $mix=$kilometro+$peso;
   
  

if
  ($_POST['peso']>250) {
   echo "El costo aproximado del viaje es de ".round($mix)." ARS";
  }
  else{
    echo "El costo aproximado del viaje es de ".round($kilometro)." ARS";
   }


}


  ?>




</p>

<br>
<br>
<br>
<br>
<br>
<a href="index.html"><button type="button" class="btn btn-primary btn-lg">Volver</button></a>
<a href="contact.html"><button type="button" class="btn btn-secondary btn-lg">Contacto</button></a>
 
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>