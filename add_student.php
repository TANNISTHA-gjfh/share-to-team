<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "internet_project";
$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['add_student'])) {
    $username = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype = "student";

    // Prepared statement to prevent SQL injection
    $check = $data->prepare("SELECT * FROM user WHERE username=?");
    $check->bind_param("s", $username);
    $check->execute();
    $result = $check->get_result(); // Get the result set

    $row_count = $result->num_rows; // Check number of rows returned

    if ($row_count == 1) {
        echo "Username Already Exists. Try another One";
    } else {
        $sql = $data->prepare("INSERT INTO user(username, email, phone, usertype, password) VALUES(?, ?, ?, ?, ?)");
        $sql->bind_param("sssss", $username, $user_email, $user_phone, $usertype, $user_password);
        $result = $sql->execute();

        if ($result) {
            echo "<script type='text/javascript'>
            alert('Data Uploaded Successfully');
            </script>";
        } else {
            echo "Upload Failed";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
    <link rel="stylesheet" href="admin.css">

    <?php include 'admin_css.php'; ?>
</head>
<body>

<?php include 'admin_sidebar.php'; ?>

<div class="contant">
    <center>
        <h1>Add Student</h1>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label>Phone</label>
                    <input type="number" name="phone" required>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
                </div>
            </form>
        </div>
    </center>
</div>

</body>
</html>
