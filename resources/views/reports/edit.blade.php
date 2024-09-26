@extends('layouts.app')
@section('content')
<h3>Edit Report Form</h3><form action = "/reports/{{$report->id}}" method="POST" class ="form-group">
    @csrf
    @method('put')
    Title : <input type = "text" name = "title"  value = "{{$report->title}}" class ="form-group" ><br>
    Description : <textarea name="description" class ="form-group">{{$report->description}}</textarea><br>
    Priority : <select name="priority" class ="form-group">
        <option value ="{{$report->priority}}">{{$report->priority}}</option>       
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select><br>
        <input type="submit" value="update"onclick="return confirm('Are You Sure')">
        <input type="reset" value="cancel"><br>
        </form>
    
        @endsection


                    