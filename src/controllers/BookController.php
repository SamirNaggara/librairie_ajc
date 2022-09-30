<?php

class BookController
{

    // static -> pas besoin d'instancié la classe
    public static function addBook()
    {
        if (!empty($_POST))
        {
            // La class Verif s'occupe de mettre un message d'erreur dans la session si le titre n'est pas valide
            Verif::verifTitre($_POST["title"]);



            if(empty($_SESSION["msg"]))
            {
                $fileName = Book::registerCover($_FILES["cover"]);
            }



            if(empty($_SESSION["msg"]))
            {
                $resultat = Book::insertBook(
                    [
                        "title"   =>  $_POST["title"],
                        "genre"   =>  $_POST["genre"],
                        "author"  =>  $_POST["author"],
                        "price"   =>  $_POST["price"],
                        "cover"   =>  $fileName
                    ]
                );

                if ($resultat)
                {
                    MessageManager::displaySuccess("Votre livre " . $_POST["title"] . " a bien été ajouté !");
                }
                else
                {
                    MessageManager::displayError("Il y a eu un soucis avec l'enregistrement !");
                }
            }
        }

        include VIEWS . 'book/addBook.php';
    }



    public static function displayBooks()
    {
        $allBooks = Book::extractAllBooks();

        // Support::Debug($allBooks);

        include VIEWS . 'book/displayBooks.php';
    }


    public static function deleteBook()
    {
        if (isset($_GET["id"]) && !empty($_GET["id"]))
        {
            $resultat = Book::deleteBook($_GET["id"]);

            if ($resultat)
            {
                MessageManager::displaySuccess("Le livre a bien été supprimé !");
            }
            else
            {
                MessageManager::displayError("Il y a eu un soucis avec la suppression !");
            }
            
            header("refresh:2;url=" . BASE_PATH . "livres");
            
            include VIEWS . 'book/deleteBook.php';
        }

        
    }

}