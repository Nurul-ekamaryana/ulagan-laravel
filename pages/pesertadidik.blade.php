@extends('layout')

@section('title', 'pesertadidik Page')

@section('content')
    <h2>Pesertadidik.</h2>
    <div>
        <table  cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>id</th>
                <th>Nis</th>
                <th>Nama lengkap</th>
                <th>jenis kelamin</th>
                <th>kelas</th>
                <th>alamat</th>
                <th>status</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->id}}</td>
                <td>{{$person->nis}}</td>
                <td>{{$person->namalengkap}}</td>
                <td>{{$person->jk}}</td>
                <td>{{$person->kelas}}</td>
                <td>{{$person->alamat}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection