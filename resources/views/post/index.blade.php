
@foreach($posts as $post)
    <article class="post">
        <a href="{{route('post.show',['id'=>$post->id])}}" class="enlace-post">
            <h2 class="titulo-post">{{ $post->title}}</h2>
        </a>
        <img src="C:\Users\Raul\OneDrive\Documentos\DAW\M9\blog\homer.jpg" class="img-post" >
        <p>
            <strong> Author: </strong><span class="datos-publicaciones">{{ $post->user->name }} </span>
            &nbsp; &nbsp;
            <strong>Fecha: </strong><span class="datos-publicaciones">Viernes 8 de Octubre de 2021</span>
        </p>

    </article>
@endforeach
