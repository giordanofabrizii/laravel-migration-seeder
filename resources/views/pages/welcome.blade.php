@extends('layouts.app')

@section('page-name','Trains')

@section('main-content')
    <section>
        @foreach ($trains as $train)
            <article>
                <h1>{{ $train->Azienda }}</h1>
            </article>
        @endforeach
    </section>
@endsection
