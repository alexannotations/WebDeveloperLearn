<?php

if ( !isset( $_COOKIE["example_cookie"] ) ) {
    
    // Generamos la cookie
    setcookie(
        name: "example_cookie",
        value: "un michi salvaje!",
        expires_or_options: 0,   /* time()+1 */
        path: "/",  /* disponible en todas partes */
        domain: "localhost",
        secure: false,
        httponly: true
    );
    
    echo "¡Cookie creada!";
}

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>