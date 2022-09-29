@extends('layout.app')

@section('page-title', 'Home')

@section('movies-container')
    <div class="home-container">
        <div class="sub-home-container">
            <h1>Treni in Partenza</h1>
            <div class="container-links">
                <ul class="links-container">

                    @foreach($trains as $train)
                        <li class="link">
                            <a>{{$train}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
