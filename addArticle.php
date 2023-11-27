<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("Location: /login.php");
        exit();
    }
    require_once 'header.php';
    ?>

    <div class="container my-5">
      <h1 class="text-center my-3">Добавление статьи на сайт</h1>
      <div class="col-sm-6 mx-auto">
        <form action="/php/handlerAddArticle.php" method="post">
          <div class="mb-3">
            <input required name="title" type="text" class="form-control" placeholder="Заголвок статьи">
          </div>
          <div class="mb-3">
            <textarea name="content" class="form-control" placeholder="Текст статьи"></textarea>
          </div>
          <div class="mb-3">
            <input required name="author" type="text" class="form-control" placeholder="Автор">
          </div>
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Добавить статью">
          </div>
        </form>
      </div>
    </div>
<?php
require_once 'footer.php'
?>