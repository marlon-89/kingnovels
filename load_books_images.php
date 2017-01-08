<?php
include_once 'config.php';
$data = new DbManager($db);
$books = $data->getBooks();
?>
<h2 class="text-center">Пориньте у моторошні і одночасно прекрасні світи, створені Королем хорору!</h2>
<div class="row">
    <?php for ($i = 0; $i < count($books); $i++) : ?>
        <div class="col-md-2 col-sm-3 col-xs-6 text-center books-images">
            <img src="images/books/<?= $books[$i]['path'] ?>" alt="<?= $books[$i]['name'] ?>" onclick="aboutBook(this)" data-book-id="<?= $books[$i]['id'] ?>">
            <p class="to-about-book" onclick="aboutBook(this)" data-book-id="<?= $books[$i]['id'] ?>"><?= $books[$i]['name'] ?></p>
        </div>
    <?php endfor ?>
</div>