
<ul>
    @foreach($anime->genres as $genre)
    <li>{{ $genre->name }}</li>
    @endforeach
</ul>
@foreach ($anime->episodes as $episode)
<div>{{$episode->id}}</div>
<div>{{$episode->name}}</div>
<div>{{$episode->sypnosis}}</div>
@foreach ($episode->images as $image)
<div><img style="width: 50px; height: 50px;" src="{{$image->src}}"></div>
@endforeach



<b>{{round($episode->rating())}}</b>
<br /><br />
@endforeach
