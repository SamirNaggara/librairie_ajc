<?php 

class BookController
{
    public static function addBook()
    {
        // Support::debug($_POST);
        if (!empty($_POST))
        {
            // La classe Verif s'occupe de mettre un message d'erreur dans la session si le titre n'est pas valide
            Verif::verifTitre($_POST["titre"]);

            if (empty($_SESSION["msg"]))
            {

                $resultat = Book::insertBook(
                    [
                        "title"       =>      $_POST["titre"],
                        "genre"       =>      $_POST["genre"],
                        "author"      =>      $_POST["author"],
                        "price"       =>      $_POST["price"]
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
        }
        include VIEWS . "book/addBook.php";
    }

    public static function displayBooks()
    {
        $allBooks = Book::extractAllBooks();

        //Support::debug($allBooks);

        include VIEWS . "book/displayBooks.php";

        
    }
}


