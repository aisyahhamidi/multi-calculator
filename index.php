<!DOCTYPE html>
<html>



<head>
<title>Button Menu</title>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: sans-serif;
  }
  .button-container {
    display: flex;
    gap: 10px;
  }
  .button {
    padding: 10px 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>
  <div class="button-container">
    <a href="indexloan.php" class="button">Loan</a>
    <a href="indexbmi.php" class="button">BMI</a>
    <a href="indexelectricity.php" class="button">Electricity</a>
  </div>
</body>
</html>
