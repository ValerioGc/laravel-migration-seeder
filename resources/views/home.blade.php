@extends('layout.app')

@section('page-title', 'Home')

@section('movies-container')
    <div class="home-container">
        <div class="sub-home-container">
            <h1>Seleziona una <strong>categoria</strong> per vedere i film</h1>
            <div class="container-links">
                <ul class="links-container">
                    @foreach($links as $link)
                        <li class="link">
                            <a>{{$link}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
