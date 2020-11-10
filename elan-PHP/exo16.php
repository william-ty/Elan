<?php

class Author {

    private $author;

    public function __construct(string $author = "inconnu") {
        $this->author = $author;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setauthor( string $author){
        $this->author = $author;
        return $this;
    }

    public function __toString(){
        return "This author is " . $this->author;
    }
}


// Books
class Book {
 
    private $title;
    private $author;
    private $dateOfPublication;
    private $price;

    public function __construct(string $title = "N/A", Mark $author = NULL, int $dateOfPublication = 0, int $price = 0) {
        $this->title = $title;
        $this->author = $author;
        $this->dateOfPublication= $dateOfPublication;
        $this->price= $price;
    }
    public function getTitle(){
        return $this->title;
    }

    public function setTitle( string $title){
        $this->title = $title;
        return $this;
    }


    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor(string $author){
        $this->author = $author;
        return $this;
    }

    public function getDateOfPublication(){
        return $this->dateOfPublication;
    }

    public function setDateOfPublication(int $dateOfPublication){
        $this->dateOfPublication = $dateOfPublication;
        return $this;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice(int $price){
        $this->price = $price;
        return $this;
    }

    public function __toString(){
        return "L'auteur est  ".$this->getAuthor(). "<br/>". " Titre: ".$this->getTitle()."<br/>"." Date de publication ".$this->getDateOfPublication()."<br/>"." Cost ".$this->getPrice();
    }
}

$author = new Author ("Stephen Kings");
echo $author;
$book = new Book;

$book->setTitle("Yugiyo");
echo $book->getTitle();
?>