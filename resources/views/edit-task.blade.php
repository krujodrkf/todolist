@extends('layouts.app')
@section('content')
  <h1>Edit task</h1>
  <form method="POST" action="{{ url("task/{$task->id}") }}">
    @csrf
    @method('PUT')
    <label for="name">Task:</label>
    <textarea name="name"rows="1" placeholder="{{$task->name}}"></textarea>
    <button type="submit" class="btn btn-success">Save</button>
  </form>
@endsection
