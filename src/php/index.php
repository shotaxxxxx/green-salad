<?php
  require_once('include/config.php');
  require_once('../config/php/database.php');

  try {
    $dbh = new PDO(DSN, DB_USER, DB_PASSWORD);
    echo '接続成功';
  } catch (PDOException $e) {
    //　例外発生時の処理
    echo 'エラー' . h($e->getMessage());
    exit();
  }

?>
<?php require_once('include/header.php') ?>

<main>
  <h1>Sapmle PHP</h1>
  <p>This is Sample PHP page.</p>

</main>
<?php require_once('include/footer.php') ?>
