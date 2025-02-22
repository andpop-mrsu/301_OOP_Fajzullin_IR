<?php

declare(strict_types=1);
require_once "Book.php";
require_once "BooksList.php";

function runTest(): void
{
    echo "=== Тест класса Book ===" . PHP_EOL;
    $book = new Book("PHP forever", ["Gates B.", "Smith J."], "O'Reilly", 2020);
    echo $book . PHP_EOL;

    echo "=== Тест класса BooksList ===" . PHP_EOL;
    $booksList = new BooksList();
    $booksList->add($book);
    echo "Добавлено книг: " . $booksList->count() . PHP_EOL;

    $booksList->store("books.db");
    echo "Список книг сохранён." . PHP_EOL;

    $booksList->load("books.db");
    echo "Список книг загружен." . PHP_EOL;

    echo "Первая книга: " . PHP_EOL;
    echo $booksList->get(0) . PHP_EOL;
}
