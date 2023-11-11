@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Payment</h4>
        </div>
        <div class="card-body">
            <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New Payment">
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
                            <th>Start Date</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($payments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enrollment->enroll_no }}</td>
                            <td>{{ $item->paid_date }}</td>
                            <td>{{ $item->amount }}</td>

                            <td>
                                <a href="{{ url('/payments/' . $item->id) }}" title="View Payment"><button class="btn btn-info btn-sm"><i class="bi bi-eye-fill me-1" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square me-1" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill me-1" aria-hidden="true"></i> Delete</button>
                                </form>
                                <a href="{{ url('/report/' .$item->id ) }}" target="_blank" title="Print Payment"><button class="btn btn-success btn-sm"><i class="bi bi-printer-fill me-1" aria-hidden="true"></i> Print</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection