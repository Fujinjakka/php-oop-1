<!-- Creare una classe Book per modellare il concetto di libro, pensando a quali proprietà e metodi potrebbero essere utili.
Poi provare a creare istanze di quella classe, ad accedere alle proprietà e metodi degli oggetti creati, a stampare gli oggetti con var_dump. -->

<?php

class Book {
  public $title;
  public $author;
  public $cover;
  public $prize;
  public $date;

  public function __construct($title, $author) {
    // echo "New Book add!";
    $this->title = $title;
    $this->author = $author;
  }

  // public function getDate() {
  //   $this->date = date("d-m-Y");
  // }
}

$lordOfRings1 = new Book("The Fellowship of the Ring (The Lord of the Rings, Book 1)", "J.R.R. Tolkien");
$lordOfRings1->cover = "img/lordOfRings1.jpg";
$lordOfRings1->prize = 8.99;
$lordOfRings1->date ="27/10/2011";

$lordOfRings2 = new Book("The Two Towers (The Lord of the Rings, Book 2)", "J.R.R. Tolkien");
$lordOfRings2->cover = "img/lordOfRings2.jpg";
$lordOfRings2->prize = 8.99;
$lordOfRings2->date ="27/10/2011";

$lordOfRings3 = new Book("The Return of the King (The Lord of the Rings, Book 3)", "J.R.R. Tolkien");
$lordOfRings3->cover = "img/lordOfRings3.jpg";
$lordOfRings3->prize = 8.99;
$lordOfRings3->date ="27/10/2011";


$harryPotter1 = new Book("Harry Potter and the Philosopher's Stone", "J.K. Rowling");
$harryPotter1->cover = "img/harryPotter1.jpeg";
$harryPotter1->prize = 7.99;
$harryPotter1->date = "01/09/2014";

$harryPotter2 = new Book("Harry Potter and the Chamber of Secrets", "J.K. Rowling");
$harryPotter2->cover = "img/harryPotter2.jpeg";
$harryPotter2->prize = 7.99;
$harryPotter2->date = "01/09/2014";

$harryPotter3 = new Book("Harry Potter and the Prisoner of Azkaban", "J.K. Rowling");
$harryPotter3->cover = "img/harryPotter3.jpeg";
$harryPotter3->prize = 7.99;
$harryPotter3->date = "01/09/2014";

$harryPotter4 = new Book("Harry Potter and the Goblet of Fire", "J.K. Rowling");
$harryPotter4->cover = "img/harryPotter4.jpeg";
$harryPotter4->prize = 7.99;
$harryPotter4->date = "01/09/2014";

$harryPotter5 = new Book("Harry Potter and the Order of the Phoenix", "J.K. Rowling");
$harryPotter5->cover = "img/harryPotter5.jpeg";
$harryPotter5->prize = 7.99;
$harryPotter5->date = "01/09/2014";

$harryPotter6 = new Book("Harry Potter and the Half-Blood Prince", "J.K. Rowling");
$harryPotter6->cover = "img/harryPotter6.jpeg";
$harryPotter6->prize = 7.99;
$harryPotter6->date = "01/09/2014";

$harryPotter7 = new Book("Harry Potter and the Deathly Hallows", "J.K. Rowling");
$harryPotter7->cover = "img/harryPotter7.jpeg";
$harryPotter7->prize = 7.99;
$harryPotter7->date = "01/09/2014";

// var_dump($lordOfRings);