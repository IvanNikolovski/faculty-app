@extends('layouts.master')

@section('content')
    <div class=" .col-md-6 .offset-md-3">
        <h1> @lang('students.register-student')</h1>
        <hr>
        <form action="{{ route('students-update', ['id'=> $student->id]) }}" method="post">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">@lang('students.name')</label>
                <input type="text" name="name" class="form-control" value="{{$student->name}}">
            </div>
            <div class="form-group">
                <label for="surname">@lang('students.surname')</label>
                <input type="text" class="form-control" name="surname" value="{{$student->surname}}">
            </div>
            <div class="form-group">
                <label for="DOB">@lang('students.date_of_birth')</label>
                <input type="date" class="form-control" name="DOB" value="{{$student->DOB}}">
            </div>
            <div class="form-group">
                <label for="EMBG">@lang('students.unique_id_number')</label>
                <input type="number" class="form-control" minlength="13" name="EMBG" value="{{$student->EMBG}}" >
            </div>

            <button type="submit" class="btn btn-primary">@lang('students.update')</button>
        </form>
        <hr>
        <form action="{{ route('students-delete', ['id'=> $student->id]) }}" method="post">
            {{ csrf_field() }}

            <button type="submit" class="btn btn-danger">@lang('students.delete')</button>

        </form>
    </div>
@endsection

