

@extends("layout.layout")

@section('title', $title)

@section('content')

    <h1>{{$title}}</h1>

    <p>Lorem ipsum ..... </p>

    <ul>
        @forelse($numbers as $number)
            <li>{{$number}}</li>
            @empty
            <li>Aucun chiffre</li>
            @endforelse


    </ul>

@endsection

