@extends('layot/app')
@section('content')
    @if(Session::has('message'))
        <span class="label label-success">{{Session::get('message')}}</span>
    @endif
@stop

<p></p>

<div class="table-responsive">
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <td>No</td>
                <td>Nrp</td>
                <td>nama</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <php $no = 0; ?>
            @foreach({{ $mhs ?? '' }} as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nrp }}</td>
                <td>{{ $row->nama }}</td>
                <td>
                    <a class="btn-warning" href="#">edit</a>
                    <a class="btn-danger" href="#">delete</a>
                </td>
            </tr>
            @endforeach
            <php endforeach ?>
        </tbody>
    </table>
</div>

