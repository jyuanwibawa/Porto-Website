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
        background-color: #8A5A44;
    }
    .login-container {
        width: 320px;
        padding: 20px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form {
        display: flex;
        flex-direction: column;
    }

    .login-form h2 {
        margin-bottom: 20px;
        text-align: center;
        color: #8A5A44;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 90%;
        padding: 10px;
        border: none;
        background-color: #f4f4f4; /* Background color */
        border-radius: 8px; /* Border radius */
        margin-top: 5px; /* Margin top */
    }

    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #8A5A44;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
    }

    button:hover {
        background-color: #654032;
    }

    .signup-link {
        text-align: center;
        margin-top: 20px;
    }

    .signup-link a {
        color: #8A5A44;
        text-decoration: none;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }

    </style>
</head>
<body>
    <div class="login-container">
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
        <?php endif; ?>
        <form class="login-form" action="<?= site_url('home_page'); ?>" method="post">
            <h2>LOGIN</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">LOGIN</button>
        </form>
        <div class="signup-link">
            Don't have an account? <a href=<?= site_url('/signup') ?>>Sign Up</a>
        </div>
        <?php if(session()->getFlashdata('message')):?>
            <div style="color: green;">
                <?= session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('error')):?>
            <div style="color: red;">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
