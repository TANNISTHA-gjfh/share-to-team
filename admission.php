
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

$host="localhost";
$user="root";
$password="";
$db="internet_project";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * from admission";
$result=mysqli_query($data,$sql);


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
      <center>
      <h1>Apply For Admission</h1>

      <br><br>
      <table border="1px">
      <tr>
            <th style="padding: 20px; border: 1px solid black;">Name</th>
            <th style="padding: 20px; border: 1px solid black;">Email</th>
            <th style="padding: 20px; border: 1px solid black;">Phone</th>
            <th style="padding: 20px; border: 1px solid black;">Message</th>
        </tr>
        <?php
        while ($info = $result->fetch_assoc()) {
            ?>
            <tr>
                <td style="padding: 20px; border: 1px solid black;"><?php echo $info['name']; ?></td>
                <td style="padding: 20px; border: 1px solid black;"><?php echo $info['email']; ?></td>
                <td style="padding: 20px; border: 1px solid black;"><?php echo $info['phone']; ?></td>
                <td style="padding: 20px; border: 1px solid black;"><?php echo $info['message']; ?></td>
            </tr>
<?php


} 


?>


</table>





</table>
</center>
</div>

</body>
</html>