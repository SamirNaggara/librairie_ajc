<?php

    class Book extends Db
    {
        public static function insertBook(array $data)
        {
            $requete = "INSERT INTO book(title, quantity, genre, author, price, cover) 
                            VALUES (?, 1, ?, ?, ?, ?)";

            $response = self::getDb()->prepare($requete);
            return $response->execute([
                $data["title"],
                $data["genre"],
                $data["author"],
                $data["price"],
                $data["cover"]
            ]);  
        }
        
        public static function extractAllBooks()
        {
            $requete = "SELECT * FROM book";
            $response = self::getDb()->prepare($requete);  //On prépare la requête
            $resultat = $response->execute(); 
            if ($resultat) //Si la requête fonctionne bien 
                return $response->fetchAll(PDO::FETCH_ASSOC); //On récupère les données, on les extrait avec fetchAll()
        }

        public static function registerCover(array $file)
        {
            $fileName = uniqid() . time() . $file["name"];
            $path = UPLOADS . $fileName;
            move_uploaded_file($_FILES["cover"]["tmp_name"], $path);
                return $fileName;
        }
        
        public static function deleteBook(int $id)
        {
            $requete = "DELETE FROM book WHERE id_book = ?";

            $response = self::getDb()->prepare($requete);
            return $response->execute([
                $id
            ]); 
        }
		
		public static function detailBook(int $id)
		{
			$requete = "SELECT * FROM book WHERE id_book=?";
            $response = self::getDb()->prepare($requete);  //On prépare la requête
            $resultat = $response->execute([$id]); 
            if ($resultat) //Si la requête fonctionne bien 
                return $response->fetch(PDO::FETCH_ASSOC); //On récupère les données, on les extrait avec fetchAll()
		}
		
		public static function updateBook(array $data)
		{
			$requete = "UPDATE book SET title=?,quantity=?,genre=?,author=?,price=?,cover=? WHERE id_book = ?";
            $response = self::getDb()->prepare($requete);
            return $response->execute([
                $data["title"],
                $data["quantity"],
                $data["genre"],
                $data["author"],
                $data["price"],
                $data["cover"],
				$data["id"]
            ]);  
		}
		
	

    }