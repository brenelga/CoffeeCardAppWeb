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
    </head>
        <style>
            body {
            background: linear-gradient(to bottom right, #e676b6, #4dcec6, #dacedd, #f73925);
            
            padding: 0;
            font-family: Arial, sans-serif;
        }
        #banner {
            background-color: #fff;
            padding: 50px 0;
            text-align: center;
            color: #333;
        }
        .contenido-banner {
            max-width: 800px;
            margin: 0 auto;
        }
        #banner h3 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        #banner span {
            color: #f73925;
        }
        .boton-empezar {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f73925;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            z-index: 999;
        }
        .menu a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            margin: 0 20px;
            padding: 10px;
            transition: color 0.3s ease;
        }
        .menu a:hover {
            color: #f73925;
        }
        .boton-empezar:hover {
            background-color: #d8311f;
        }
        #información {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 50px 0;
        }
        #información div {
            flex: 1;
            text-align: center;
        }
        #información img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        #información h4 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        #información p {
            color: #555;
        }
        footer {
            background-color: #fff;
            text-align: center;
            padding: 20px 0;
            color: #555;
        }
        </style>
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