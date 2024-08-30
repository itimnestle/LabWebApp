@extends('layouts.app_movie')
@section('content')
<ol>
    @foreach ($Movies as $movie)

                 <li>{{$movie}}</li>

    @endforeach
</ol>
@endsection
