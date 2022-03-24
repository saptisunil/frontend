<?php
ob_start();
if (isset($_SESSION['username'])) {

  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/styles/styles.css">
  <title>Falcontrac</title>
</head>

<body>
  <?php require('../components/navbar.php') ?>
  <?php require('../components/menu.php') ?>
  <div class="d-flex flex-row-reverse overflow-auto">
    <?php
    require('../components/monitor-table/monitorMessageBox.php')
    ?>

    <div class="container">
      <div class=" p-1 rounded text-center mt-3 bg--primary">
        <h3 class="" style="color: gray;">ISSUE MONITOR</h3>
      </div>

      <?php
      require('../components/monitor-table/monitorTable.php')
      ?>
    </div>
  </div>
  <script src="../assets/js/falcon.js"></script>
</body>
</html>