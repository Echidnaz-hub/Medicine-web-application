<?php
 if(empty($_COOKIE['user'])):
?>
<div class="container py-3">
<h1 class="text-center"><p class="text-white"><a class="text-white" href="index.php?page=on">Войдите</a> или<a class="text-white" href="index.php?page=registration"> зарегистрируйтесь</a>, чтобы увидеть личный кабинет</p></h1>
</div>
<?php else: ?>
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
<img src="img/chel.png" width="180" height="180"; alt="...">
<h1 class="text-center"><p class="text-dark"> Здравствуйте, <?=$_COOKIE['user']?>.</p></h1>
<p>
<?php
$path = 'i/';
$types = array('image/gif', 'image/png', 'image/jpeg');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if (!in_array($_FILES['picture']['type'], $types))
    die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');

	if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
		echo 'Что-то пошло не так.';
	else
		echo 'Загрузка удачна. Ваше изображение отправлено на проверку модерации сайта.';
}
 
?>
<form enctype="multipart/form-data" method="post"> 
<input name="picture" type="file" />
<input type="submit" value="Загрузить" />
</form>
<h2 class="text-center"><p class="text-success">
Уведомлений нет
</p></h2>
<p>
<a class="text-danger" href="php/exit.php"> Выйти</a></h1>
</div>
</div>
</div>
</div>
</div>
<?php endif ?>