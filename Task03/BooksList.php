<?php

declare(strict_types=1);

class BooksList
{
    private array $books = [];

    public function add(Book $book): void
    {
        $this->books[] = $book;
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function get(int $index): Book
    {
        if (!isset($this->books[$index])) {
            throw new OutOfBoundsException("Книга с индексом $index не найдена.");
        }
        return $this->books[$index];
    }

    public function store(string $fileName): void
    {
        file_put_contents($fileName, serialize($this->books));
    }

    public function load(string $fileName): void
    {
        if (!file_exists($fileName)) {
            throw new RuntimeException("Файл $fileName не найден.");
        }
        $this->books = unserialize(file_get_contents($fileName));
    }
}
