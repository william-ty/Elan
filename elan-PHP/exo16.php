<?php

class Author
{
  private $name;
  private $firstName;

  public function __construct(
    string $firstName = "Prénom inconnu",
    $name = "Nom inconnu"
  ) {
    $this->firstName = $name;
    $this->lastName = $firstName;
    $this->books = [];
  }

  // Getter
  public function getFirstName()
  {
    return $this->firstName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  // Setter
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
    return $this;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
    return $this->lastName;
  }

  // Get Author
  public function getAuthor()
  {
    return $this->getFirstName() . " " . $this->getLastName();
  }

  // Get books
  public function getBooks()
  {
    foreach ($this->books as $book => $i) {
      echo $book->getTitle() . " \n";
    }
  }

  // Add Book

  // public function addBooks( Book$book){
  // array_push($this->books,$book);}

  public function __toString()
  {
    return "This author is " . $this->getAuthor() . "</br>" . "Books : ";
  }
}

// Books
class Book
{
  private $title;
  private $author;
  private $dateOfPublication;
  private $price;

  public function __construct(
    string $title = "N/A",
    Author $author = null,
    int $dateOfPublication = 0,
    int $price = 0
  ) {
    $this->title = $title;
    $this->author = $author;
    $this->dateOfPublication = $dateOfPublication;
    $this->price = $price;
  }
  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle(string $title)
  {
    $this->title = $title;
    return $this;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setAuthor(string $author)
  {
    $this->author = $author;
    return $this;
  }

  public function getDateOfPublication()
  {
    return $this->dateOfPublication;
  }

  public function setDateOfPublication(int $dateOfPublication)
  {
    $this->dateOfPublication = $dateOfPublication;
    return $this;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice(int $price)
  {
    $this->price = $price;
    return $this;
  }

  public function __toString()
  {
    return "L'auteur est  " .
      $this->getAuthor() .
      "<br/>" .
      " Titre: " .
      $this->getTitle() .
      "<br/>" .
      " Date de publication " .
      $this->getDateOfPublication() .
      "<br/>" .
      " Cost " .
      $this->getPrice();
  }
}

$auteur = new Author("Stephen", "KING");

echo $auteur->getFirstName() . " <br>";

echo $auteur->getLastName();

$auteur->setFirstName("David");
echo $auteur->getFirstName();

$auteur->setLastName("vanmak");
echo $auteur->getLastName();

// $auteur->setAuthorSurname("David");

echo $auteur->getAuthor();

?>
