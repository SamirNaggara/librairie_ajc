<?php

    class Verif
    {
        public static function verifTitre(string $title)
        {
            if(strlen($title) < 3)
            {
                MessageManager::displayError("Attention, votre titre doit comporter au moins 3 caractères !");
            }
            
            if(strlen($title) >= 150)
            {
                MessageManager::displayError("Attention, votre titre ne doit pas dépasser 150 caractères !");
            }

        }
    }