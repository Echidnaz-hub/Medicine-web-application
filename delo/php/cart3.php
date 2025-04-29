<?php
$db_host='localhost';
$db_name='pyrohod';
$db_user='root';
$db_pass='';
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysqli->set_charset("utf8mb4");

$result = $mysqli->query('SELECT * FROM `doctor`');
?>
<h1 class="text-center"><p class="text-white">Вы успешно записались на приём!</p></h1>
<p>
<p>
<p>
<p>
<p>
<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
<div class="text-center">
<div class="col">
<div class="card mb-4 bg-white rounded-3 shadow-sm">
<div class="text-dark">
      <?php
      $result = $mysqli->query('SELECT * FROM `doctor` WHERE code=3');
while($row = $result->fetch_assoc())
{
    echo '<p><img src="'.$row['image']. '"width="300" height="300"> <h1>'.$row['title'].'</h1> <p>'.''.$row['descr'].'<p>'.'Цена: '.$row['price'].' рублей';
}
?>
<p><a class="btn btn-lg btn-danger" href="index.php?page=main">Отменить запись</a>
</div>
</div>
</div>
</div>
</div>