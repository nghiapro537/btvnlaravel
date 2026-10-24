
@if(!$post->isEmpty())
@foreach($post as $item)
<h2>{{ $item->title }}</h2>
<p>Slug: {{ $item->slug }}</p>
@endforeach
@else
<p>Không tìm thấy bài viết nào!</p>
@endif