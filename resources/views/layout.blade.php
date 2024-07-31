<!DOCTYPE html>
<html lang="es_LA">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="og:url" content="@yield('url')"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="@yield('titulo')"/>
        <meta property="og:image" content="https://cofeecard.proyectos-idgs-23s.com/img/logo.jpg"/>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v20.0" nonce="RwBUwdil"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
        <header>
            <nav class="menu">
                <a href="/">Inicio</a>
                <a href="/login">Iniciar Sesion</a>
            </nav>
        </header>
        @yield('contenido')
    
    <footer>
        CoffeeCard 2024 &copy; <br>
        <div class="fb-page" data-href="https://www.facebook.com/people/CoffeeCard/61557462988543/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
        <div class="fb-share-button" data-href="https://cofeecard.proyectos-idgs-23s.com/index" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcofeecard.proyectos-idgs-23s.com%2Findex&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
    </footer>
    
    </body>
</html>