<a href="/reports/create">Tambah</a>
@extends('layouts.app')
@section('content')
@if(count($reports)>0)
<table class="table table-striped">
    <thead>
        <th>Report Title</th>
        <th>Report Decription</th>
        <th>Report Priority</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->description}}</td>
            <td>{{$report->priority}}</td>
            <td><a href="/reports/{{$report->id}}"class="btn btn-info">Details</a></td>
            <td><a href="/reports/{{$report->id}}/edit" class="btn btn-warning">Edit</a></td>
            <td><form action="/reports/{{$report->id}}" method = "POST">
                @csrf
                @method('Delete')
                <input type="submit" value ="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure')"></form></td>
        </tr>
        @endforeach
    </tbody>
@else
No Data 
@endif
@endsection