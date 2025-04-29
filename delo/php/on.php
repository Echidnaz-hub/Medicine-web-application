<?php
 if(empty($_COOKIE['user'])):
?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="text-white">Вход</h1>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
<form action="php/login.php" method="post">
    <input type="text" class="form-control" name="login"
    id="login" placeholder="Введите логин"><br>
    <input type="password" class="form-control" name="pass"
    id="pass" placeholder="Введите пароль"><br>
    <button type="submit" class="btn btn-lg btn-block btn-success">Войти</button>
</div>
</form>
<div class="col">
</div>
</div>
<?php else: ?>
<div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li><h1 class="text-center"><p class="text-white"> Вы уже вошли, <?=$_COOKIE['user']?>.<a class="text-danger" href="php/exit.php"> Выйти</a></p></h1></li>
        </ul>
      </div>
      </div>
      <?php endif;?>