@extends('layouts.master')

@section('content')
   <div class=" .col-md-6 .offset-md-3">
       <h1> @lang('students.register-student')</h1>
       <hr>
       <form action="{{ route('students-store') }}" method="post">

           {{ csrf_field() }}
           <div class="form-group">
               <label for="name">@lang('students.name')</label>
               <input type="text" name="name" class="form-control" placeholder="Name">
           </div>
           <div class="form-group">
               <label for="surname">@lang('students.surname')</label>
               <input type="text" class="form-control" name="surname" placeholder="Surname">
           </div>
           <div class="form-group">
               <label for="DOB">@lang('students.date_of_birth')</label>
               <input type="date" class="form-control" name="DOB">
           </div>
           <div class="form-group">
               <label for="EMBG">@lang('students.unique_id_number') </label>
               <input type="number" class="form-control" minlength="13" name="EMBG">
           </div>

           <button type="submit" class="btn btn-primary">@lang('students.submit')</button>
       </form>
   </div>
@endsection

