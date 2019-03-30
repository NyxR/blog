@extends("layout.layout")

@section('content')

    <h1>Bravo !</h1>

        <a class="btn btn-primary" href="{{action('LinksController@show', ['id' => $link->id])}}">
            {{route('link.show', $link)}}
        </a>
    <i class="fa fa-tablet"></i>

@endsection