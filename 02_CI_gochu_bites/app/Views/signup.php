<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gochu Bites</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color:#8A5A44;
       }
.signup-container {
    width: 320px;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.signup-form {
    display: flex;
    flex-direction: column;
}

.signup-form h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #8A5A44;
}

.signup-form .form-group {
    margin-bottom: 15px;
}

.signup-form label {
    font-weight: bold;
}

.signup-form input[type="text"],
.signup-form input[type="email"],
.signup-form input[type="password"] {
    width: 90%;
    padding: 10px;
    border: none;
    background-color: #f4f4f4; /* Background color */
    border-radius: 8px; /* Border radius */
    margin-top: 5px; /* Margin top */
}

.signup-form button {
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #8A5A44;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.signup-form button:hover {
    background-color: #654032;
}

.login-link {
    text-align: center;
    margin-top: 20px;
}

.login-link a {
    color: #8A5A44;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <div class="signup-container">
        <form class="signup-form" action="submit_signup.php" method="post">
            <h2>SIGN UP</h2>
            <div class="form-group">
                <label for="fullname">Nama:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">REGISTER</button>
        </form>
        <div class="login-link">
            Already have an account? <a href=<?= site_url('/login') ?>>Login</a>
        </div>
    </div>
</body>
</html>
