<?php
# cookie disponible en una sola parte del sitio
setcookie(
    name: "subdomain_cookie",
    value: "Esta cookie solo está disponible en /conf",
    expires_or_options: time() + 60 * 60 * 24, /* un dia */
    path: "/WebDeveloperLearn/cookies_sesiones/conf/", /* / la cookie siempre esta disponible */
    domain: "localhost",
    secure: false,
    httponly: true
);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>