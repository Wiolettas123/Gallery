<!DOCTYPE html>
<html>
<head>
 <!-- name of the page that will be displayed when researched -->
  <title>Fashion Desire</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- link to the css -->
    <link href="stylesheet.css" rel="stylesheet" />
    <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    <!-- navigation bar with a automatic hover over when a user scrolls down to another section -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Fashion desire</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Women</a></li>
          <li><a href="#section2">Men</a></li>
          <li><a href="#section3">Accessories</a></li>
          
             
              
            </ul>
        
      </div>
    </div>
  </div>
</nav>    

    <!-- header  -->
    
   
    <div class="jumbotron text-center">
        <img src="images/tumblr_static_banner_1.jpg" alt="Paris" width="1280">
  <h1>Fashion Desire</h1> 
  <p>See more of our fashion & upload your own styles </p> 
  <form class="form-inline">
      </div>
  </form>

      <!-- header with a button allowing users to sign up -->
      <div class="row text-center">
           <div class="col-sm-12">
        <div class="thumbnail">
        <button class="btn" data-toggle="modal" data-target="#myModal">sign up</button>
        </div>
      </div>
    
      </div>
   

        
   
      <!-- Modal in other words the conent of the button in the header -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- content of the button when pressed allowing  people to enter their email and password to sign in and close the conent -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Sign up</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> password</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter password">
            </div>
              <button type="submit" class="btn btn-block">sign up
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          
        </div>
      </div>
    </div>
  </div>
</div>
    
<div id="section1" class="container-fluid">
  <h1> Womens Fashion</h1>
    <h4>Latest fashion trends from the girls</h4>    
 <!-- first php linking to onlinegal images_tbl with images and text for womens fashion (descrption and text consist of peoples instagram and descrption of the clothes/accessories they are wearing) -->
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onlinegal";

    // Creating connection with database
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
//selecting the table with images & text
    $sql = "SELECT * FROM images_tbl";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table class='table-hover mainTable' border='1'>";
     while($row = mysqli_fetch_assoc($result)) {
     echo "<th><img width='158' height='300' src=images/". $row["filename"]."
     <br>
     ".$row["description"] ."
     <br>
     ". $row["imagetitle"] ." </th>
       
        </th>";
         }
    //opening table if not giving result of 0//
        echo "</table>";             
    } else {
     "0 results";
    }      
$id=1;

if(isset($_GET["imageID"]))
{
   $id=$_GET["imageID"];

    $sql = "SELECT * FROM images_tbl where imageID=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
     while($row = mysqli_fetch_assoc($result)) {        
       
$id=1;



    if (mysqli_num_rows($result) > 0) {
        // output data of each row
     while($row = mysqli_fetch_assoc($result)) {        
         echo "
         <table class='tablePlayer'>
         <div>
        <tr>
            <td><img width='280' height='280'src=/images/". $row['filename'].">" .
            "</td>
        
            <td>  " . $row["description"] .   
            "
            </td>
        </tr>
        </div>";

         }
    echo "</table>";
    } 
}
         }
    
    } 





     
  ?> 
</div>
<div id="section2" class="container-fluid">
  <h1>Mens Fashion</h1>
    <h4>Latest fashion trends from the boys</h4>
     <!-- second php linked to online gal images_tbl1 which stores images and text for men fashion  -->
     <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onlinegal";

    // Creating connection with database
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
//selecting the table with images & text
    $sql = "SELECT * FROM images_tbl1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table class='table-hover mainTable' border='1'>";
     while($row = mysqli_fetch_assoc($result)) {
     echo "<th><img width='158' height='300' src=images/". $row["filename"]."
     <br>
     ".$row["description"] ."
     <br>
     ". $row["imagetitle"] ." </th>
       
        </th>";
         }
        //code allowing to display the content if not displaying "0" in other words nothing//
        echo "</table>";             
    } else {
     "0 results";
    }      
$id=1;

if(isset($_GET["imageID"]))
{
   $id=$_GET["imageID"];

    $sql = "SELECT * FROM images_tbl1 where imageID=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
     while($row = mysqli_fetch_assoc($result)) {        
       
$id=1;




    if (mysqli_num_rows($result) > 0) {
        // output data of each row
     while($row = mysqli_fetch_assoc($result)) {        
         echo "
         <table class='tablePlayer'>
         <div>
        <tr>
            <td><img width='280' height='280'src=/images/". $row['filename'].">" .
            "</td>
        
            <td>  " . $row["description"] .   
            "
            </td>
        </tr>
        </div>";

         }
    echo "</table>";
    } 
}
         }
    
    } 





     
  ?> 
</div>
<div id="section3" class="container-fluid">
  <h1>Accessories</h1>
    <h4>Latest accessories in fashion</h4>
     <!-- third php code connecting to onlinegal- 'images' which contains images and text for accessories -->
 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onlinegal";

    // Creating connection with database
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
//selecting the table with images & text
    $sql = "SELECT * FROM images";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table class='table-hover mainTable' border='1'>";
     while($row = mysqli_fetch_assoc($result)) {
     echo "<th><img width='158' height='300' src=images/". $row["filename"]."
     <br>
     
     ".$row["description"] ."
     <br>
     ". $row["imagetitle"] ." </th>
       
        </th>";
         }
        echo "</table>";             
    } else {
     "0 results";
    }      
$id=1;

if(isset($_GET["imageID"]))
{
   $id=$_GET["imageID"];

    $sql = "SELECT * FROM images where imageID=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
     while($row = mysqli_fetch_assoc($result)) {        
       
$id=1;




    if (mysqli_num_rows($result) > 0) {
        // output data of each row
     while($row = mysqli_fetch_assoc($result)) {        
         echo "
         <table class='tablePlayer'>
         <div>
        <tr>
            <td><img width='280' height='280'src=/images/". $row['filename'].">" .
            "</td>
        
            <td>  " . $row["description"] .   
            "
            </td>
        </tr>
        </div>";

         }
    echo "</table>";
    } 
}
         }
    
    } 





     
  ?> 



<script>
    
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // this code Adds smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // if statment Making sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // jQuery's which animates() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})

</script>
    <!-- Footer with a 'glyphicon which allows users to be taken up to the top of the page-->
<footer class="text-center">
  <a class="up-arrow" href="#section1" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>© 2016 GALERIA IMAGING AMERICAS CORPORATION
Privacy
</footer>
</body>
</html>
