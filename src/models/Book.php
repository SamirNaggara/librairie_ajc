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
}