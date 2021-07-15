@extends('layout')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tasks</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('tasks.create') }}"> Create Task</a>
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
        <th>Task Name</th>
        <th>Vendor</th>
        <th>Site Name</th>
        <th width="280px" class="text-center">Action</th>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $task->taskname }}</td>
        <td>{{ $task->vendor }}</td>
        <td>{{ $task->site->sitename }}</td>
        <td class="text-center">
            <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">

                <a class="btn btn-info btn-sm" href="{{ route('tasks.show',$task->id) }}">Show</a>

                <a class="btn btn-primary btn-sm" href="{{ route('tasks.edit',$task->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $tasks->links('pagination::bootstrap-4') !!}

@endsection