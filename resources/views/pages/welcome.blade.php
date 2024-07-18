@extends('layouts.app')

@section('page-name','Trains')

@section('main-content')
    <section>
        @foreach ($trains as $train)
            <article>
                {{-- # @if ($train->Cancellato == 0) per non vedere i treni cancellati --}}

                    <span>{{$train->Azienda}}</span>
                    <span>{{$train->Codice_treno}},</span><br>
                    <span>{{$train->Stazione_di_partenza}},</span>
                    <span>{{$train->Stazione_di_arrivo}},</span><br>
                    <span>{{$train->Orario_di_partenza}},</span>
                    <span>{{$train->Orario_di_arrivo}},</span><br>
                    <span>{{$train->In_orario == 0 ? 'In ritardo' : 'In orario' }}</span>
                    <span>{{$train->Cancellato == 1 ? ', CANCELLATO' : null }}</span>

                {{-- # @endif --}}
            </article>
        @endforeach
    </section>
@endsection
