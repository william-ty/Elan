<?php

class Author {

    private $authorName;
    private $authorSurname;
    // private $books;

    public function __construct(string $authorName = "Prénom inconnu", $authorSurname = "Nom inconnu") {
        $this->authorNamme = $authorName;
        $this->authorSurname = $authorSurname;
        $this->books = [];
        



    }

    public function getAuthorName(){
        return $this->authorName;
    }

    public function setAuthorName( string $authorName){
        $this->authorName = $authorName;
        return $this;
    }
    public function getAuthorSurname(){
        return $this->authorSurname;
    }

    public function setAuthorSurname( string $aurthorSurname){
        $this->aurthorSurname = $aurthorSurname;
        return $this;
    }

    // Get Author getAuthorSurname & getAuthorName
    public function getAuthor(){
       return  $this->getAuthorName(). " ". $this->getAuthorSurname();
    }
    public function __toString(){
        return "This author is " . $this->getAuthor() . "</br>" . "Books : ";
    }

    // Get books 

    public function getBooks(){
        foreach ($this->books as $book => $i) {
            echo "$key => $val \n";
        }
    }

    // Add Book

        public function addBooks( Book $book){
            array_push($this->books,$book);
        }
}


// Books
class Book {
 
    private $title;
    private $author;
    private $dateOfPublication;
    private $price;


    
    public function __construct(string $title = "N/A", Author $author = NULL, int $dateOfPublication = 0, int $price = 0) {
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

$auteur = new Author("David", "Vanmak");

echo $auteur;



?>