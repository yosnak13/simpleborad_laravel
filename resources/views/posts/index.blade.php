<h1>Posts</h1>
@foreach($posts as $post)
  <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
  <a href="/posts/{{ $post->id }}/edit">Edit</a>

  <form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button type="submit">Delete</button>
  </form>
@endforeach

<a href="/posts/create">New Post</a>
