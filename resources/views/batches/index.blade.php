@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Batches</h4>
        </div>
        <div class="card-body">
            <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New Batch">
                <i class="bi bi-plus-square me-1" aria-hidden="true"></i> Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Start Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($batches as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->course->name }}</td>
                            <td>{{ $item->start_date }}</td>

                            <td>
                                <a href="{{ url('/batches/' . $item->id) }}" title="View Batch"><button class="btn btn-info btn-sm"><i class="bi bi-eye-fill me-1" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Edit Batch"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square me-1" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('/batches' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill me-1" aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection