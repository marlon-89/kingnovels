<?php
$id = filter_input(INPUT_POST, "id");
include_once 'config.php';
$data = new DbManager($db);
$book = $data->getBookById($id);
?>
<div class="row">
    <h2 class="text-center"><?= $book['name'] ?></h2>
    <div class="col-sm-3 text-center one-book-image">
        <img src="images/books/<?= $book['path'] ?>" alt="<?= $book['name'] ?>">
    </div>
    <div class="col-sm-9">
        <p class="text-justify about-book"><?= $book['info'] ?></p>
    </div>
</div>
<div class="button-container text-center">
    <button type="button" class="btn btn-default text-center" onclick="returnAllBooks()">Повернутися до списку книг</button>
</div>