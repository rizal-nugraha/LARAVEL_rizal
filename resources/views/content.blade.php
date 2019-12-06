@extends('layout/app')
@section('content')    
<h4>USER PROFILE</h4>
<h4>Sekarang Saya dari konten untuk {{$nama}} </h4>
        {!! Form::open(['url'=>'/proses_tambah']); !!}
    NRP :
        {!! Form::text('nrp','',['placeholder'=>'NRP','class'=>'form-control']) !!}
    Nama :
        {!! Form::text('nama','',['placeholder'=>'Nama','class'=>'form-control']) !!}
    <br><br>
        {!! Form::submit('Tambah Data',['class'=>'btn btn-info']) !!}

        {!! Form::close() !!}
@endsection