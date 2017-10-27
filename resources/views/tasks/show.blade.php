@extends('layouts.master')

@section('title')
Task {{ $task->id }}
@endsection

@section('content')
@include('tasks.task')
@endsection