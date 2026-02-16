<?php

class Book
{
    private $title;
    private $author;
    private $year;
    private $price;

    public function __construct($title, $author, $year, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;

        if ($year < 1000 || $year > 2026) {
            throw new Exception("Year must be a valid four-digit number");
        }

        if ($price < 0) {
            throw new Exception("Price cannot be negative");
        }
    }




    public function getInfo()
    {
        return "{$this->title} by {$this->author} ({$this->year}) - \${$this->price}";
    }
}



$book = new Book("Clean Code", "Robert C. Martin", 2000, 39.99);
echo $book->getInfo(); // Clean Code by Robert C. Martin (2008) - $39.99

// This should throw an exception:
// $invalidBook = new Book("Old Book", "Author", 500, 10);