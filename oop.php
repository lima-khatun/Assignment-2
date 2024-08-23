<?php

class Book
{

    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies)
    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Get the title of the book
    public function getTitle()
    {
        return $this->title;
    }

    // Get the number of available copies
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    // Borrow a book (decrease available copies)
    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Return a book (increase available copies)
    public function returnBook()
    {
        $this->availableCopies++;
    }
}

class Member
{

    // Private property
    private $name;

    // Constructor to initialize properties
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Get the name of the member
    public function getName()
    {
        return $this->name;
    }

    // Borrow a book
    public function borrowBook($book)
    {
        if ($book->borrowBook()) {

        } else 
        {
            echo $this->name . " could not borrow '" . $book->getTitle() . "' (no copies available).<br>";
        }
    }

    // Return a book
    public function returnBook($book)
    {
        $book->returnBook();
    }
}

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrowing books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Display available copies of books
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "<br>";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "<br>";
