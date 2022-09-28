<?php 

class BookController
{
    public static function addBook()
    {
        // Support::debug($_POST);
        if (!empty($_POST))
        {
            $resultat = Book::insertBook(
                [
                    "title"       =>      $_POST["titre"],
                    "genre"       =>      $_POST["genre"],
                    "author"      =>      $_POST["author"],
                    "price"        =>      $_POST["price"]
                ]
            );

            if ($resultat)
            {
                MessageManager::displaySuccess("Votre livre " . $_POST["titre"] . " a bien été ajouté à la base de donnée");
            }else
            {
                MessageManager::displayError("Il y a eu un soucis avec l'enregistrement en base de donnée");
            }
        }
        include VIEWS . "book/addBook.php";
    }
}


