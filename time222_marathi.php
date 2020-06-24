
<?php
$a=$_GET["volumet2"];
$b=$_GET["rvolumet2"];
$c=$_GET["constantt2"];
$d=$_GET["metalt2"];
$e=$_GET["densityt2"];
$f=$_GET["frictiont2"];


$wc=$a*$e;
$wr=$b*$e;
$w=$wc+$wr;
$r=$c*(($w)**0.5);
$ra=($r)/($d*$f);
$t=$w/$ra;


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    body{ background-color:black;
    }
    
    .container{ width:90%;
                text-align:center;
                padding:30px;
                margin-top:30px;
                background-color: #68b9bb;
    }
    
    .container1{ width:100%;
                text-align:center;
                margin-top:10px;
    }
    
     .container2{ width:90%;
                border:2px solid r;
                margin:auto;
                padding:5px;
                }
                
    .b1{width:30%;
        border:4px solid black;
        border-radius:10px;
        color:black;
        background-color:#a2e095;
    }
    
    .display-4 {
    font-size: 2.3rem;
    font-weight: 300;
    line-height: 1.2;
}



.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #bdcede;
    border-radius: 2.3rem;
    }

    </style>
    
   
  </head>
  <body>
  
<div>
 <div class="header">
 
 </div>
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><div>
 <a><img src="https://shivajilaware.files.wordpress.com/2020/05/picsart_05-29-10.48.32.png?w=750"width="50px"height="50px" alt="CSGO Howl" style="float:left";> </a>
 <a class="navbar-brand ml-2" href="homepagemarathi.html"><b> <b> HelpCasting</b> </b> </a></div>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
 <li class="nav-item active">
 <a class="nav-link" href="homepagemarathi.html">मुख्य पृष्ठ <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="about.html">आमच्या विषयी</a>
 </li>
 <li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 Casting Design
 </a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
 <a class="dropdown-item" href="riser_marathi.html">Riser(रासझर)</a>
 <a class="dropdown-item" href="ingate_marathi.html">Ingate(इनगेट)</a>
 <a class="dropdown-item" href="s1_marathi.html">Spure(स्पृ)</a>
 <a class="dropdown-item" href="time1_marathi.html">Pouring Time(ओतण्याचा वेळ)</a>
 <a class="dropdown-item" href="time2_marathi.html">Solidification Time(घन होण्यासाठी लागणारा वेळ)</a>
 
 
 
 </li>
 <li class="nav-item">
 <a class="nav-link " href="main_marathi.html" >Casting Videos</a>
 </li>
 </ul>
 
 </div>
 </nav>
 </div>

<div class="container2">
<div class="jumbotron">
  <h1 class="display-4">Pouring Time Calculation !</h1>
  <p class="lead">For Volume of Casting = <?php echo $a;?> (mm3), Riser Volume = <?php echo $b;?> (mm3), Coefficient of friction = <?php echo $f;?>, Metal fluidity (k) = <?php echo $d;?>, Density = <?php echo $e;?> (kg/m3) .</p>
  <hr class="my-4">
  <p>Pouring Time = <?php echo $t;?> Min</p>
  <a class="btn btn-primary btn-lg" href="time2_marathi.html" role="button">Calculate Again</a>
</div>
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>  
   