@extends('layouts.app')
@section('content')
  <h1>Edit task</h1>
  <form method="POST" action="{{ url("task/{$task->id}") }}">
    @csrf
    @method('PUT')
    <label for="name" class="field-label">Task:</label>
    <textarea name="name"rows="1" class="field-textarea" placeholder="{{$task->name}}"></textarea>
    <button type="submit">Save</button>
  </form>
@endsection
