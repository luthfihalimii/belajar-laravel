@extends('masterproject')
@section('title', 'masterproject')
@section('content-title', 'masterproject')
@section('content')
    <div class="col-md-8">
        <a href="" class="btn btn-success">Add Data</a>
        <table class="table"
                <tr>
                    <th>NO</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

            @forelse($types as $type)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $type->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="">edit</a>
                        <a class="btn btn-sm btn-danger" href="">hapus</a>
                    </td>
                </tr>
            @empty
            @endforelse

        </table>
    </div>

    <div class="col-md-4">

    </div>
@endsection
