
    <div>
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
    	<div><p>By: </p>{{$post->user->name}}</div>    	
    </div>

<div>
@foreach($post->comments as $comment)
<b>{{$comment->user->name}}</b>
<p>{{$comment->comment}}</p>
@endforeach

</div>

@if(Auth::user() != null)
<div>
<form action="{{route('comment.create')}}" method="POST">
@csrf
<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
<input type="hidden" name="post_id" value="{{$post->id}}">
<label for="lcomment">Comment:</label>
<textarea type="text" id="lcomment" name="textarea" rows="10" cols="50">write something</textarea>
<input type="submit" value="Submit">
</form>
</div>
@endif