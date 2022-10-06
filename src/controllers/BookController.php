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
	
	public static function detailBook()
	{
		if (isset($_GET["id"]) && !empty($_GET["id"]))
		{
			$detailLivre = Book::detailBook($_GET["id"]);
			
			include VIEWS . 'book/detailBook.php';
			
		}
	}
	
	public static function updateBook()
	{
		// Si il n'y a pas d'id ou qu'il est vide, on renvoie a la page des livres
		if (!isset($_GET["id"]) || empty($_GET["id"]))
		{
			header("Location:" . BASE_PATH . "livres");
			die;
		}
		
		$detailLivre = Book::detailBook($_GET["id"]);
		
	
		if (!empty($_POST))
		{
			
			if (!empty($_FILES["cover"]["name"]))
			{
				$fileName = Book::registerCover($_FILES["cover"]);
			}else
			{
				
				$fileName = $detailLivre["cover"];
			}
			
			$resultat = Book::updateBook([
				"id"		=>		$_GET["id"],
				"title"		=>		$_POST["title"],
				"genre"		=>		$_POST["genre"],
				"author"	=>		$_POST["author"],
				"price"		=>		$_POST["price"],
				"quantity"	=>		$_POST["quantity"],
				"cover"		=>		$fileName
			]);
			
			if ($resultat)
			{
				MessageManager::displaySuccess("Votre livre " . $_POST["title"] . " a bien été modifié !");
			}
			else
			{
				MessageManager::displayError("Il y a eu un soucis avec la modification du livre !");
			}
		}
		
		$detailLivre = Book::detailBook($_GET["id"]);
		
		include VIEWS . 'book/updateBook.php';
		
		
		
	}
}