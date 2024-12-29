<?php

class Book {
    private string $title;
    private string $author;
    private float $price;

    public function __construct(string $title, string $author, float $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getDetails(): string {
        return "Title: {$this->title}, Author: {$this->author}, Price: {$this->price}";
    }

    public function applyDiscount(float $percentage): void {
        $discount = $this->price * ($percentage / 100);
        $this->price -= $discount;
    }

    public function updateTitle(string $newTitle): void {
        $this->title = $newTitle;
    }
}

// Creating book instances
$book1 = new Book("Things Fall Apart", "Chinua Achebe", 15.99);
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 12.49);

// Display details of each book
echo $book1->getDetails();
echo $book2->getDetails();

// Apply a discount to the first book
$book1->applyDiscount(10);
echo $book1->getDetails();

// Update the title of the second book
$book2->updateTitle("To Kill a Mockingbird 2nd Edition");
echo $book2->getDetails();