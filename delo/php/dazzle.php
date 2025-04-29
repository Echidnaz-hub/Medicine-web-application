<?php
$db_host='localhost';
$db_name='pyrohod';
$db_user='root';
$db_pass='';
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysqli->set_charset("utf8mb4");

$result = $mysqli->query('SELECT * FROM `shop`');
?>
<h4>
<div class="pricing-header mx-auto text-center">
<form action="index.php?page=search" method="post">
    Выберите тип поиска: <br />
    <select name="searchtype">
    <option value="title">По названию</option>
    <option value="descr">По описанию</option>
</select>
<br />
</h4>
</div>
<h3>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <input name="searchterm" type="text" placeholder="Поиск">
    <button type="submit">Найти</button> 
</form>
</h3>
</div>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-body">

      <?php
      $result = $mysqli->query('SELECT * FROM `shop` WHERE code=1');
while($row = $result->fetch_assoc())
{
    echo '<p><img src="'.$row['image']. '"width="300" height="300"> <h1>'.$row['title'].'</h1> <p>'.''.$row['descr'].'<p>'.'Цена: '.$row['price'].' рублей';
}
?>
<p>
<a class="btn btn-lg btn-primary" href="index.php?page=thx">Купить</a>
</div>
</div>
</div>
<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-body">
      <?php
      $result = $mysqli->query('SELECT * FROM `shop` WHERE code=2');
while($row = $result->fetch_assoc())
{
    echo '<p><img src="'.$row['image']. '"width="300" height="300"> <h1>'.$row['title'].'</h1> <p>'.''.$row['descr'].'<p>'.'Цена: '.$row['price'].' рублей';
}
?>
<p>
<a class="btn btn-lg btn-primary" href="index.php?page=thx">Купить</a>
</div>
</div>
</div>
<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-body">
      <?php
      $result = $mysqli->query('SELECT * FROM `shop` WHERE code=3');
while($row = $result->fetch_assoc())
{
    echo '<p> <img src="'.$row['image']. '"width="300" height="300"> <h1>'.$row['title'].'</h1> <p>'.''.$row['descr'].'<p>'.'Цена: '.$row['price'].' рублей';
}
?>
<p>
<a class="btn btn-lg btn-primary" href="index.php?page=thx">Купить</a>
</div>
</div>
</div>
</div>