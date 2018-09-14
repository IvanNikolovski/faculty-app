@extends('layouts.master')

@section('content')
    <div class=" .col-md-6 .offset-md-3">
        <h1> @lang('courses.new_course')</h1>
        <hr>
        <form action="{{ route('courses-store') }}" method="post">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">@lang('courses.name')</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="surname">@lang('courses.ects')</label>
                <input type="text" class="form-control" name="ects" placeholder="Surname">
            </div>
            <div class="form-group">
                <label for="DOB">@lang('courses.description')</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="EMBG">@lang('courses.semester') </label>
                <input type="number" class="form-control" name="semester_id">
            </div>

            <button type="submit" class="btn btn-primary">@lang('courses.submit')</button>
        </form>
    </div>
@endsection

