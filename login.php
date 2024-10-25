<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body {
    font-family: Arial, sans-serif;
    height: 100vh;
    background: linear-gradient(135deg, #ff6f61, #ffbc67);
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background: rgba(255, 255, 255, 0.9);
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1.5s ease-in-out;
}

.signin-form {
    width: 300px;
}

h2 {
    text-align: center;
    margin-bottom: 1.5rem;
    font-size: 2rem;
    color: #333;
    font-weight: bold;
}

.input-group {
    margin-bottom: 1rem;
}

.input-group label {
    display: block;
    margin-bottom: 0.5rem;
}

.input-group input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: border 0.3s;
}

.input-group input:focus {
    border-color: #ff6f61;
    outline: none;
}

button {
    width: 100%;
    padding: 0.75rem;
    border: none;
    border-radius: 5px;
    background: #ff6f61;
    color: white;
    font-size: 1.25rem;
    cursor: pointer;
    transition: background 0.3s, transform 0.3s;
}

button:hover {
    background: #ff3e2d;
    transform: scale(1.05);
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
    </style>
</head>
<body>
<div class="container">
        <div class="signin-form">
            <h2>Sign In</h2>

            <h4>
                <?php
                error_reporting(0);
                session_start();
                session_destroy();

                echo $_SESSION['loginMessage'];
                
                ?>
                
            </h4>

            <form action="login_check.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>

</body>
</html>