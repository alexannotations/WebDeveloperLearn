## Audio

```html
<body>
    <main>

    <section>
        <figure>
            <img loading="lazy" src="./pics/tinified.jpg" alt="Imagen comprimida">
            <figcaption>Una imagen comprimida.</figcaption>   
        </figure>  
    </section>

    </main>
</body>
```



## Video

```html
    <body>
        <main>
            
        <section>
            <!-- #t= inicioVideo,finVideo(opcional) en segundos -->
            <video src="./miVideo.mp4#t=70,100" controls preload="auto"></video>
        </section>

        <section>
            <video controls preload="auto">
                <!-- para permitir diversos formatos a elegir por el navegador -->
                <source src="./miVideo.mp4">
                <source src="./miVideo.m4v">
            </video>
        </section>

        </main>
    </body>
```

