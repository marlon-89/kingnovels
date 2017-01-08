// Переменная для вывода сообщения при ошибке загрузки
var message = "<p class='text-center'>Виникла проблема із завантаженням даних. Спробуйте, будь-ласка, знову.</p>";
// Функция для вывода информации о выбранной книге 
function aboutBook(elem) {
    $.post("../load_book_info.php",
            {
                id: elem.dataset.bookId
            },
            function (data, status) {
                if (status === 'success') {
                    $("#content").html(data);
                } else {
                    $("#content").html(message);
                }
            });
}
// Функция для возвращения к списку всех книг 
function returnAllBooks() {
    $("#content").load("../load_books_images.php",
            function (response, status) {
                if (status === 'success') {
                    $("#content").html(response);
                } else {
                    $("#content").html(message);
                }
            });
}
$(document).ready(function () {
    // По умолчанию загружаем с сервера изображения всех книг 
    $("#content").load("../load_books_images.php",
            function (response, status) {
                if (status === 'success') {
                    $("#content").html(response);
                } else {
                    $("#content").html(message);
                }
            });
});