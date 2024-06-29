
<?php
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate credentials
    if ($email === 'tg@info.com' && $password === '123') {
        // Redirect to profile page
        header('Location: /xphp/home');
        exit;
    } else {
        // Error message
        $error = 'Invalid email or password!';
    }
}
?>

<div class="container">


  <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
  <h1>Login Page</h1>
  <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form class="login-form" method="post">
        <div class="form-input">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-input">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button class="btn" type="submit">Login</button>
        </div>
    </form>
</div>
</html>