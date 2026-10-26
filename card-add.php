<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Gift Card - Air Asia Rewards Redemption</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <h1>AIR ASIA Rewards Redemption</h1>
  </header>

  <main>
    <section class="panel form-panel">
      <h2>Add Gift Card</h2>
      <p class="hint">The Card ID is generated automatically.</p>

      <form action="card-list.php" method="get">
        <div class="form-group">
          <label for="cardName">Card Name</label>
          <input type="text" id="cardName" name="cardName" maxlength="100" placeholder="e.g. Starbucks Gift Card" required>
        </div>

        <div class="form-group">
          <label for="cardType">Card Type</label>
          <select id="cardType" name="cardType" required>
            <option value="" selected disabled>Select card type</option>
            <option value="Shopping">Shopping</option>
            <option value="Food &amp; Beverage">Food &amp; Beverage</option>
            <option value="Travel">Travel</option>
          </select>
        </div>

        <div class="form-group">
          <label for="cardValue">Card Value ($)</label>
          <input type="number" id="cardValue" name="cardValue" min="0" step="0.01" placeholder="0.00" required>
        </div>

        <div class="form-group">
          <label for="points">Points Required</label>
          <input type="number" id="points" name="points" min="0" step="1" placeholder="e.g. 1500" required>
        </div>

        <div class="form-actions">
          <button type="submit">Submit</button>
          <a class="btn btn-secondary" href="card-list.php">Cancel</a>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
