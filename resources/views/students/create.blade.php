@extends('layouts.master')

@section('content')
   <div class=" .col-md-6 .offset-md-3">
       <h1> Register a new student</h1>
       <hr>
       <form action="{{ route('students-store') }}" method="post">

           {{ csrf_field() }}
           <div class="form-group">
               <label for="name">Name</label>
               <input type="text" name="name" class="form-control" placeholder="Name">
           </div>
           <div class="form-group">
               <label for="surname">Surname</label>
               <input type="text" class="form-control" name="surname" placeholder="Surname">
           </div>
           <div class="form-group">
               <label for="DOB">Date of Birth</label>
               <input type="date" class="form-control" name="DOB">
           </div>
           <div class="form-group">
               <label for="EMBG">Unique ID </label>
               <input type="number" class="form-control" minlength="13" name="EMBG">
           </div>

           <button type="submit" class="btn btn-primary">Submit</button>
       </form>
   </div>
@endsection
