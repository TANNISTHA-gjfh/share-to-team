<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard </title>
    <link rel="stylesheet" href="admin.css">

<?php
include 'admin_css.php';
?>

   

</head>
<body>



<?php
include 'admin_sidebar.php';
?>

<div class="contant">

      <h1>Admin dashboard</h1>
</div>

</body>
</html>