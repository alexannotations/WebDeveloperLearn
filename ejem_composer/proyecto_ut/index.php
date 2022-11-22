<?php
// archivo principal de composer de autocarga
require __DIR__.'/vendor/autoload.php';

// NO es necesario hacer la validación desde la pagina
var_dump(App\Validate::email('usuarioindex@example.com'));
