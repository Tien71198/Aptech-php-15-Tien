@foreach($posts as $post)
{
    <div>
        {{$post['id']}} - {{$post['title']}} - {{$posts['description']}} - {{$post['content']}} - {{$post['name']}}
    </div>
}
@endforeach