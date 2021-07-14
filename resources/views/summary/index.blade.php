@extends('layout')

@section('content')

<h1>Soal 1</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Area</th>
            <th>Vendor</th>
            <th>Jumlah Task</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($summary1 as $item)
        <tr>
            <td>{{ $item->area }}</td>
            <td>{{ $item->vendor }}</td>
            <td>{{ $item->jumlah_task }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr />

<h1>Soal 2</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            @foreach ($topheader as $item)
            <th>{{ $item->vendor }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($sideheader as $j => $area)
        <tr>
            <td>{{ $area->area }}</td>
            @foreach ($topheader as $i => $vendor)
            <td>{{$summary2[$j][$i]}}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>

<hr />

<h1>Soal 3</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Area</th>
            <th>All Task</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($summary3 as $item)
        <tr>
            <td>{{ $item->area }}</td>
            <td>{{ $item->all_task }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection