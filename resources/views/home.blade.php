@extends('layout.app')

@section('page-title', 'laravel-trains')

@section('container')
    <div class="home-container">
        <div class="sub-home-container">
            <h1>Treni in Partenza</h1>
            <div class="container-links">
                <div class="links-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Azienda</th>
                                <th>Data</th>
                                <th>Partenza</th>
                                <th>Destinazione</th>
                                <th>Orario partenza</th>
                                <th>Orario arrivo</th>
                                <th>In orario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trains as $train)
                                <tr>
                                    <td>{{$train['azienda']}}</td>
                                    <td>{{$train['giorno_partenza']}}</td>
                                    <td>{{$train['stazione_partenza']}}</td>
                                    <td>{{$train['stazione_arrivo']}}</td>
                                    <td>{{$train['orario_partenza']}}</td>
                                    <td>{{$train['orario_arrivo']}}</td>
                                    <td> {{$train['in_orario']}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
