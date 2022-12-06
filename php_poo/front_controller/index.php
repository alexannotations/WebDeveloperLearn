<?php

$page = $_GET["page"] ?? null;

if ($page==NULL) {
    require("pages/home.php");
}else{
    match ($page) {
        'contact' => require (__DIR__.'/pages/contact.php'),
        'services' => require __DIR__ . '/pages/services.php',
        default => require __DIR__ . '/pages/home.php'
    };
}


/*
switch ($page) {
    case 'contact':
        # WebDeveloperLearn/php_poo/front_controller/index.php?page=contact
        require("pages/contact.php");
        break;
    case 'services':
        # WebDeveloperLearn/php_poo/front_controller/index.php?page=services
        require("pages/services.php");
        break;
    default:
        require("pages/home.php");
        break;
}
*/
