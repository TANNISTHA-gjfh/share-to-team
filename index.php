<?php

 error_reporting(0);
 session_start();
 session_destroy();
 if($_SESSION['message'])
 {
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
 }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script>

</head>
<body>
    <nav>
        <lable class="logo">FIEM</lable>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>   

    <div class="section1">

        <img  src="./picture/hero.jpg" height="400px" width="100%">
    </div>

    <div class="container">
       <div class="row">
         
           <div class="col-md-6">
              <img class="Welcome_img"   src="./picture/welcome.jpg" >

            </div>
        
           <div class="col-md-6">
               <h1>Welcome to FIEM</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dicta, accusamus esse illum sit reprehenderit 
                fugiat molestias modi at doloresnobis aliquid reiciendis officiis tenetur,
                velit praesentium, ipsam dignissimos? Labore!
                </p>
            </div>

        </div>
    </div>
     

   <h1 align="center">Our Teacher</h1>        

   <div class="container">
      <div class="row">

        <div class="col-md-4  teacher">
          <img src="./picture/tech.jpg"  height="200px" width="100%">
          
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsa eaque blanditiis laborum, 
         illo explicabo earum dicta, sit sunt ametitaque quia officiis laudantium rem repellat 
         </p>
      
          
        </div>

        <div class="col-md-4">
            <img  src="./picture/techer4.jpg" height="200px" width="100%">
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsa eaque blanditiis laborum, 
         illo explicabo earum dicta, sit sunt ametitaque quia officiis laudantium rem repellat 
         </p>
      
        </div>

        <div class="col-md-4">
            <img src="./picture/techer2.jpg"  height="200px" width="100%">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ipsa eaque blanditiis laborum, 
         illo explicabo earum dicta, sit sunt ametitaque quia officiis laudantium rem repellat 
         </p>
      

        </div>

      </div>
   </div>

   <h1 align="center">Our Course</h1>        

<div class="container">
   <div class="row">

     <div class="col-md-4">
       <img  src="./picture/web.jpg"  height="200px" width="100%">
       <h3>Web development</h3>

       
     </div>

     <div class="col-md-4">
        <img src="./picture/graphic.png"  height="200px" width="100%">
        <h3>Graphics Designing</h3>

     </div>

     <div class="col-md-4">
         <img  src="./picture/th.jpeg" height="200px" width="100%">
        <h3>UI Designing</h3>
     </div>

   </div>
</div>

<br><br>

<center>
    <h1>Admision Form</h1>
</center>

<div align="center" class="admission_form">
<form action="data_check.php" method="POST">
    <div>
        <label class="label_text">Name</label>
        <input class="deg"  type="text" name="name">
    </div>
    <br>
    <div>
        <label  class="label_text">Email</label>
        <input class="deg" type="text" name="email">
    </div>
    <br>
     
    <div>
        <label class="label_text">Phone</label>
        <input  class="deg" type="text" name="phone"/>
    </div>
    <br>
    <br>
    <div>
        <label class="label_text">Massage</label>
        <textarea class="txt"name="message"></textarea>
    </div>
    <br>
    <div>
        <input  class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
    </div>
    

</form>
</div>
<br><br>
<footer>
    <h5 class="footer_text">All @copyright by FIEM</h5>
</footer>


</body>
</html>