<?php 

class Book extends Db
{
    public static function insertBook(array $data)
    {
        $requete = "INSERT INTO book(title, quantity, genre, author, price, cover) VALUES (?, 1, ?,?,?,?)";

        $response = self::getDb()->prepare($requete);
        return $response->execute([
            $data["title"],
            $data["genre"],
            $data["author"],
            $data["price"],
            ""
        ]);
       
    }

    public static function extractAllBooks()
    {
        $requete = "SELECT * from book";
        $response = self::getDb()->prepare($requete); // On prepare la requete
        $resultat = $response->execute(); // On execute la requete mais les données sont toujours dans l'objet response
        if ($resultat) // Si la requete a bien marché (booleen)
            return $response->fetchAll(PDO::FETCH_ASSOC); // On fetchAll les données pour les recuperer sous forme de liste
    }
}