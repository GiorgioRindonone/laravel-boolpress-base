{{-- {{route('admin.posts.show', $post->id)}} --}}
<h1> {{$posts->title}}</h1>
<h4>{{$posts->date}}</h4>
<p>{{$posts->content}}</p>

@foreach ($comments as $comment)
@endforeach
