<?php
$db_host='localhost';
$db_name='pyrohod';
$db_user='root';
$db_pass='';
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysqli->set_charset("utf8mb4");

$result = $mysqli->query('SELECT * FROM `shop`');
?>
<?php
 if(empty($_COOKIE['user'])):
?>
<div class="container py-3">
<h1 class="text-center"><p class="text-white"><a class="text-white" href="index.php?page=on">Войдите</a>, чтобы записаться на приём</p></h1>
</div>
<?php else: ?>
<p>
<p>
<p>
<p>
<p>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
<div class="col">
<div class="card mb-4 bg-white rounded-3 shadow-sm">
<div class="text-dark">
      <?php
      $result = $mysqli->query('SELECT * FROM `doctor` WHERE code=1');
while($row = $result->fetch_assoc())
{
    echo '<p><img src="'.$row['image']. '"width="300" height="300"> <h1>'.$row['title'].'</h1> <p>'.''.$row['descr'].'<p>'.'Цена за приём: '.$row['price'].' рублей';
}
?>
<p>
<label for="start">Дата приёма:</label>
<input type="date" id="start" name="trip-start" value="2024-04-16" min="2024-01-01" max="2024-12-31" />
<p><a class="btn btn-lg btn-danger" href="index.php?page=cart1">Записаться на приём</a>
</div>
</div>
</div>
      <div class="col">
<div class="card mb-4 bg-white rounded-3 shadow-sm">
<div class="text-dark">
      <?php
      $result = $mysqli->query('SELECT * FROM `doctor` WHERE code=2');
while($row = $result->fetch_assoc())
{
    echo '<p><img src="'.$row['image']. '"width="300" height="300"> <h1>'.$row['title'].'</h1> <p>'.''.$row['descr'].'<p>'.'Цена за приём: '.$row['price'].' рублей';
}
?>
<p>
<label for="start">Дата приёма:</label>
<input type="date" id="start" name="trip-start" value="2024-04-16" min="2024-01-01" max="2024-12-31" />
<p><a class="btn btn-lg btn-danger" href="index.php?page=cart2">Записаться на приём</a>
</div>
</div>
</div>
      <div class="col">
<div class="card mb-4 bg-white rounded-3 shadow-sm">
<div class="text-dark">
      <?php
      $result = $mysqli->query('SELECT * FROM `doctor` WHERE code=3');
while($row = $result->fetch_assoc())
{
    echo '<p> <img src="'.$row['image']. '"width="300" height="300"> <h1>'.$row['title'].'</h1> <p>'.''.$row['descr'].'<p>'.'Цена за приём: '.$row['price'].' рублей';
}
?>
<p>
<label for="start">Дата приёма:</label>
<input type="date" id="start" name="trip-start" value="2024-04-16" min="2024-01-01" max="2024-12-31" />
<p><a class="btn btn-lg btn-danger" href="index.php?page=cart3">Записаться на приём</a>
</div>
</div>
</div>
</div>
<?php endif ?>