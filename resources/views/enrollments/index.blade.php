@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Enrollment Application</h4>
        </div>
        <div class="card-body">
            <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Course">
                <i class="bi bi-plus-square me-1" aria-hidden="true"></i> Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment No.</th>
                            <th>Batch</th>
                            <th>Student</th>
                            <th>Join Date</th>
                            <th>Fee</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($enrollments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enroll_no }}</td>
                            <td>{{ $item->batch->name }}</td>
                            <td>{{ $item->student->name }}</td>
                            <td>{{ $item->join_date }}</td>
                            <td>{{ $item->fee }}</td>

                            <td>
                                <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollment"><button class="btn btn-info btn-sm"><i class="bi bi-eye-fill me-1" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollment"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square me-1" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('/enrollments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill me-1" aria-hidden="true"></i> Delete</button>
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