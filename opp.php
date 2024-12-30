<?php

class Book {
    // Add properties as Private
    private $title;
    private $availableCopies;

    // Initialize properties
    public function __construct($title, $availableCopies ){
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    // Add getTitle method
    public function getTitle(){
        return $this->title;
    }

    //  Add getAvailableCopies method

    public function getAvailableCopies(){
        return $this->availableCopies;
    }


    // Add borrowBook method
    public function borrowBook(){
        if($this->availableCopies > 0){
            $this->availableCopies-- ;
            echo "You have borrowed '{$this->title}'.\n";
        }else {
            echo "Sorry, '{$this->title}' is out of Stock .\n <br>";
        }
    }


    // Add returnBook method

    public function returnBook(){
        $this->availableCopies++ ;
        echo "You Have Returned '{$this->title}'.\n <br>";
    }
    
}

class Member {
    //Add properties as Private

    private $name;

    //Initialize properties
    public function __construct($name){
        $this->name = $name;
    }

    //Add getName method
    public function getName(){
        return $this->name;
    }

    // Add borrowBook method
    public function borrowBook(Book $book){
        echo "{$this->name} is borrowing '{$book->getTitle()}'.\n <br>";
        $book->borrowBook();
    }


    // Add returnBook method
    public function returnBook(Book $book){
        echo "{$this->name} is Returning '{$book->getTitle()}'.\n <br> ";
        $book->returnBook();
    }
}


// Usage

//  create  3 books  

$book1 = new Book ("Great Women of Islam", 6);
$book2 = new Book ("Fiqh Us Sunnah", 10);
$book3 = new Book ("Al-Fihrist", 12);

 
// create 3 member

$member1 = new Member("Rohim");
$member2 = new Member("Korim");
$member3 = new Member("Salam");


// Member 1 borrows book 1
$member1->borrowBook($book1);

// Member 2 borrows book 2
$member2->borrowBook($book2);

// Member 3 borrows book 3
$member3->borrowBook($book3);


// Print available copies

echo "Available copies of '{$book1->getTitle()}':  {$book1->getAvailableCopies()}\n<br>" ;
echo "Available copies of '{$book2->getTitle()}':  {$book2->getAvailableCopies()}\n<br>" ;
echo "Available copies of '{$book3->getTitle()}':  {$book3->getAvailableCopies()}\n<br>" ;


// Member 1 returns book 1
$member1->returnBook($book1);

// Member 2 returns book 2
$member2->returnBook($book2);

// Print available copies after returning
echo "Available copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n<br>";
echo "Available copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n<br>";
echo "Available copies of '{$book3->getTitle()}': {$book3->getAvailableCopies()}\n<br>";








?>