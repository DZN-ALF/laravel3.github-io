@extends('layouts.main')
@section('container')
<table class="table table-bordered table-striped">
    <tr>
        <td style="width:150px">Nama</td>
        <td>{{ $data->nama }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $data->email }}</td>
    </tr>
    <tr>
        <td>Contact</td>
        <td>{{ $data->contact }}</td>
    </tr>
</table>
@endsection