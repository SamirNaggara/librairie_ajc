<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'masterlib',
        'DB_USER' => 'root',
        'DB_PSWD' => '',
    ],
    'app' => [
        'name' => 'Master Lib',
        'projectBaseUrl' => 'http://localhost/masterLib/'
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '\\..\\';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . 'public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public\\';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const UPLOADS = BASE_DIR.'uploads\\';
const COVER = CONFIG['app']['projectBaseUrl'] . "uploads/";
const ASSETS = CONFIG['app']['projectBaseUrl'] . 'assets/';

/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                  => ['AppController', 'index'],
    '/ajout_livre'      => ['BookController', 'addBook'],
    '/livres'           => ['BookController', 'displayBooks'],
    '/delete-book'      => ['BookController', 'deleteBook'],
	'/detail-book'		=> ['BookController','detailBook']

];
