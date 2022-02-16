<!DOCTYPE html>
<html>
<head>
      <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('CSS/estilo.css') }}">
		  @livewireStyles
</head>
<body>
<!-- Navigation -->
@include('layouts.navigation');
    <header class="header">
        <div id="encabezado">
            <div id="logo">
                 BLOG RG
            </div>
            <div id="menu">
                <ul>
                    <li><a href="" class="active-menu">Inicio</a></li>
                    <li><a href="" class="enlace">Categoria</a></li>
                    <li><a href="" class="enlace">Inicio</a></li>
                    <li><a href="" class="enlace">Inicio</a></li>
                </ul>
        </div>
    </div>



        </div>
    </header>
    <section id="principal">
        <section id="publicaciones">
            <article class="post">
                <a href="" class="enlace-post">
                  @section('title');
                  <h2 class="titulo-post">Titulo de la Noticia 1</h2>
                </a>
                <img src="C:\Users\Raul\OneDrive\Documentos\DAW\M9\blog\homer.jpg" class="img-post" >
                <p>
                    <strong>Autor: </strong><span class="datos-publicaciones">Raul Gimenez</span>
                    &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones">Viernes 8 de Octubre de 2021</span>
                </p>
                @section('content')
                <p class="parrafo-post">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam itaque fugit harum. A magni ullam vitae rem natus, tenetur adipisci sequi rerum, error distinctio mollitia fuga quisquam molestias excepturi maiores.
                </p>
               <a href="" class="leer-mas">Leer m�s...</a> &nbsp; &nbsp;
               <span class="num-comentarios">20 comentarios</span>
            </article>


            <div id="paginacion">
                <p>Anteriores publicaciones &nbsp;&nbsp; <a href="" class="enlace-paginacion">Siguientes Publicaciones</a> </p>
            </div>

        </section>

        <section id="sidebar">
            <section id="buscar">
                <h2 class="encabezado-sidebar">Buscar</h2>
                <form>
                    <input type="text" name="buscar" placeholder="buscar">
                    <button class="boton">Ok</button>
                </form>
            </section>
            <section id="categorias">
                <h2 class="encabezado-sidebar">Categorias</h2>
                <a href="" class="enlace-sidebar">Ofimatica</a>
                <a href="" class="enlace-sidebar">Java</a>
                <a href="" class="enlace-sidebar">Javascript</a>
                <a href="" class="enlace-sidebar">HTML Y CSS</a>
            </section>
            <section id="sitios-amigos">
                <h2 class="encabezado-sidebar">Sitios Amigos</h2>
                <a href="" class="enlace-sidebar">Ofimatica</a>
                <a href="" class="enlace-sidebar">Java</a>
                <a href="" class="enlace-sidebar">Javascript</a>
                <a href="" class="enlace-sidebar">HTML Y CSS</a>
            </section>
            <section>
                <h2 class="encabezado-sidebar">Ultimos-post</h2>
                <a href="" class="enlace-sidebar">
                    <h4>Titulo de la noticia 9</h4>
                    <p>Esto es una descripcion de la noticia publicada del dia de hoy</p>
                </a>

                <a href="" class="enlace-sidebar">
                    <h4>Titulo de la noticia 8</h4>
                    <p>Esto es una descripcion de la noticia publicada del dia de hoy</p>
                </a>

                <a href="" class="enlace-sidebar">
                    <h4>Titulo de la noticia 7</h4>
                    <p>Esto es una descripcion de la noticia publicada del dia de hoy</p>
                </a>
                <a href="" class="enlace-sidebar">
                    <h4>Titulo de la noticia 6</h4>
                    <p>Esto es una descripcion de la noticia publicada del dia de hoy</p>
                </a>

            </section>
        </section>
    </section>

</body>
</html>
