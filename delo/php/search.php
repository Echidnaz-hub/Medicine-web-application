<div class="container py-3">
<div class="card-deck mb-3 text-center">
<div class="card mb-4 shadow-sm">
      <div class="card-body">
<?php
$searchtype=$_POST['searchtype'];
$searchterm=$_POST['searchterm'];
$searchterm= trim($searchterm);
if (!$searchtype || !$searchterm)
{
  echo 'Вы не ввели параметры поиска. Пожалуйста, вернитесь на пердыдущую страницу и повторите ввод.';
  exit;
}
if (!get_magic_quotes_gpc())
{
  $searchtype = addslashes($searchtype);
  $searchterm = addslashes($searchterm);
}

$db_host='localhost';
$db_name='pyrohod';
$db_user='root';
$db_pass='';
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_error())
{
  echo 'Ошибка: Не удалось установить соединение с базой данных.
  Пожалуйста, повторите попытку позже.';
  exit;
}
mysqli_set_charset($db, "utf8");
include 'results.php';
?>
<p>
<a class="btn btn-lg btn-primary" href="index.php?page=thx">Купить</a>
</div>
</div>
</div>
</div>
