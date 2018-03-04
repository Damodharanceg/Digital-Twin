<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  
<style>

input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: grey;
}

input[type=button] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: grey;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

          #bgcolor {
	background: black;
}
	#uberbar {
		position: fixed;
		background: white;
		width: 100%;
		z-index: 99;
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
 

div.transbox {
  margin: 30px;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: white;
}
.image { 
   position: relative; 
   width: 100%; /* for IE 6 */
}

h2 { 
   position: absolute; 
   top: 100px; 
   left: 0; 
   width: 100%; 
   text-align: top;
}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
    color: white;
}

  </style>
  <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$toolcost=$_POST["toolcost"];
$wpcost=$_POST["wpcost"];
$cost_per_comp=$_POST["cost_per_component"];
$d=$_POST["depth"];
$f=$_POST["feed"];
$s=$_POST["speed"];
$volume=$_POST["volume"];
$time=$_POST["time"];
$mrr=$d*$f*$s;
 $mrr2=$mrr*16.387;
    $t = $volume / $mrr2;
    $left=$toolcost+$wpcost;
    $right=$t+$cost_per_comp;
    
?>

</head>
<body>
<div id="bgcolor">
    <br><br>
       	<div class = "container text-center" style = "background:white; color:white;border-radius:15px;padding-bottom:40px;">
<h3 style="font-size:250%;color:black"><b>DIGITAL TWIN OF DRY LATHE MACHINE</b></h3>
<hr>
</h3>
        </div>
    <br><br>
    	       	<div class = "container text-center" style = "background:white; color:white;border-radius:15px;padding-bottom:40px;">

 <h3 style="font-size:120%;color:black"><b>ESTIMATION OF ECONOMICS OF PROCESS<br></h3></b>
  <form NAME="mrr and tool life">
     <h3 style="font-style:oblique;font-size:100%;color:black;text-align:left;">
         <label for="mrr">RESULT</label>
 <pre><input type="text" name="mrr" value="<?php IF($left<$right){echo "The process is economical";}else{echo "The Process is Non-Economical";}?>"><br></pre>
 
 <center><input type="button" value="Go back!" onclick="history.back()"><br><br></form><form action="index.php"><input type="submit" value="Home"></form></center>
      </h3> </div>
 </html>
