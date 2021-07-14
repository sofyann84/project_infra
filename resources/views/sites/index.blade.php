@extends('layout')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Sites</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('sites.create') }}"> Create Site</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">No</th>
        <th>Site Name</th>
        <th>Area</th>
        <th width="280px" class="text-center">Action</th>
    </tr>
    @foreach ($sites as $site)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $site->sitename }}</td>
        <td>{{ $site->area }}</td>
        <td class="text-center">
            <form action="{{ route('sites.destroy',$site->id) }}" method="POST">

                <a class="btn btn-info btn-sm" href="{{ route('sites.show',$site->id) }}">Show</a>

                <a class="btn btn-primary btn-sm" href="{{ route('sites.edit',$site->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $sites->links() !!}

@endsection