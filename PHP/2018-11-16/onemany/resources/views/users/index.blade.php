@foreach($posts as $post)
{
    <div>
        {{$post['id']}} - {{$post['title']}} - {{$post['discription']}} - {{$post['content']['name']}}
    </div>
}
@endforeach