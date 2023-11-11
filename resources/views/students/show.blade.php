@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $students->name }}</h5>
            <p class="card-text">Address : {{ $students->address }}</p>
            <p class="card-text">Mobile : {{ $students->mobile }}</p>
        </div>
        </hr>
    </div>
</div>
<p class="mt-4" id="windowName"></p>
<script>
window.onload = function() {    
    const currentWindowName = window.location.href;
    const windowNameElement = document.getElementById("windowName");
    windowNameElement.innerHTML = "Current window name: " + currentWindowName;
};
</script>
@endsection