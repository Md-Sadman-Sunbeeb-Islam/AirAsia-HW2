<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Air Asia Rewards Redemption</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <h1>AIR ASIA Rewards Redemption</h1>
  </header>

  <main>
    <section class="panel login-panel">
      <h2>Login</h2>
      <p class="subtitle">Sign in to redeem your reward points</p>

      <form action="card-list.php" method="get">
        <div class="form-group">
          <label for="userName">Username</label>
          <input type="text" id="userName" name="userName" maxlength="100" placeholder="Enter username" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" maxlength="100" placeholder="Enter password" required>
        </div>

        <button type="submit">Login</button>
      </form>
    </section>
  </main>
</body>
</html>
