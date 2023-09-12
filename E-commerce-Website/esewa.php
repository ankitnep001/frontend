<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>E-sewa/payment</title>
</head>
<body>
    <nav class="navbar">
        <img src="img/logo.png" alt="" onclick="refreshPage()" >
    </nav>
    <section>
        <p>Make your payment here </p>
    </section>
    <article>
        <div class="login-box">
            <h2>Login</h2>
            <form>
              <label for="username" style="background-color: white;">eSewa Id</label>
              <input type="text" id="username" name="username" placeholder="email / mobile number" required>
        
              <label for="password" style="background-color: white;">Password:</label>
              <input type="password" id="password" name="password" placeholder="Enter your password" required>
        
              <button type="submit">Login</button>
            </form>
          </div>
    </article>
    <script>
        function refreshPage() {
          location.reload();
        }
      </script>
</body>
</html>