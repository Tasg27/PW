<?php
    class Book{
        //properties
        public $title;
        public $author;
        public $price;

        //Constructor
        function __construct($title, $author, $price){
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
        }

        //Methods
        function getTitle(){
            return $this->title;
        }

        function getAuthor(){
            return $this->author;
        }

        function getPrice(){
            return $this->price;
        }
    }

    $livro1 = new Book("Harry Potter","J. K. Rowling",20.79);
    $livro2 = new Book("Biblia", "Deus", 99.99);
    $livro3 = new Book("Momo", "Thomas Mann", 15.68);
    $livro4 = new Book("Ensaio sobre a Cegueira", "Saramago", 23.77);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Objects</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>

    <?php foreach($carrinhoCompras as $Livro){?>

    <h1><?php echo $livro1->getTitle(); ?></h1>
    Author: <?php echo $livro1->getAuthor(); ?><br>
    <strong><?php echo $livro1->getPrice(); ?></strong>€

    <?php} ?>

        <h3>Total: <?php //TODO ?></h3>

</body>
</html>