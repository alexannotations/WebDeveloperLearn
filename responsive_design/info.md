https://www.mydevice.io/

https://mediaqueri.es/

https://web.dev/learn/design/


Se debe optimizar para todos los dispositivos. Hay tiene que tener en claro un par de conceptos:

__Break points__: cuando la pantalla sea de cierto tamaño, se generará un cambio para reposicionar o redimensionar los contenedores.
__Media Queries__: son condicionales. No es la mejor práctica pero aplicándolo al CSS:

    ```css
        @media (min-width: #pixeles-necesarios <pantalla;) {"código que se aplicará"}
    ```

y se aplican para cada tamaño de dispositivo. El pixelaje dado será el break point.

Lo más importante es diseñar para movil. Por lo que se debe diseñar con mobile first. Es decir, primero diseñar para celular, luego un break point para tablet y finalmente un break point para PC.

Para aplicar media queries con buenas prácticas, hay que hacerlo en el header. Porque así solo se descarga el código necesario según el dispositivo, mientras que en CSS se descarga todo sin importar nada.

En la tag ```<link>``` se colocan los atributos ```href```, ```rel``` y, a partir del segundo archivo, el break point ```media="screen and (min-width: #px"```. El _style.css_ debe estar hecho para mobile. Luego se pueden crear otros archivos como _tablet.css_ o _desktop.css_.

# aplicandolo desde el css
    ```css
        @media (min-width: 480px;) {
            'phone'
            }

        @media (min-width: 768px;) {
            'tablet'
            }

        @media (min-width: 1024px;) {
            'pc'
            }
    ```


# aplicandolo desde el __\<head\>__
    ```html
        <link href="style.css" rel="stylesheet"> <!-- estilos enfocados en mobile -->
        <link href="tablet.css" rel="stylesheet" media="screen and (min-width: 768px)">
    ```
