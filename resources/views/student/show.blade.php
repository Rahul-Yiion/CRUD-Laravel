<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>student Details</title>
</head>

<body>

@php
         if (($student->course)== 1){
          $student->course="BCA";
         }
         elseif(($student->course)== 2){
          $student->course="BBA";
         }
         elseif(($student->course)== 3){
          $student->course="B.Com";
         }
         elseif(($student->course)== 4){
          $student->course="M.Ed";
         }
         elseif(($student->course)== 5){
          $student->course="MSC";
         }
         elseif(($student->course)== 6){
          $student->course="MCA";
         }
         elseif(($student->course)== 7){
          $student->course="BSW";
         }
         elseif(($student->course)== 8){
          $student->course="LLB";
         }
         else{
          $student->course="Not Selected";
         }
         @endphp



    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="{{ route('student.show',$student->id) }}">Students  Details</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href="{{ route('student.create') }}">Add Students</a>
                </div>
            </div>
    </nav>
    <a style="background-color:grey; float:right;"  href="{{ URL::previous() }}" class="btn btn-default"><b><-Back</b></a>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
            <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"value="{{$student->name}}" disabled>
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
            </div>
            <!-- <label for="name">Name:</label>
            <div class="card-name">
                    <p class="card-text">&nbsp;&nbsp;&nbsp;{{ $student->name }}</p>
                </div> -->
                @php
         if(($student->gender)=="1"){
            $student->gender="Male";
         }
         elseif(($student->gender)=="2"){
            $student->gender="Female";
         }
         else{
            $student->gender="Other";
         }
         @endphp
                <label for="name">Phone</label>
                <div class="card-phone">
                <input type="text" class="form-control" id="phone" name="phone"value="{{$student->phone}}" disabled>
                </div>
                <label for="name">Email</label>
                <div class="card-email">
                <input type="text" class="form-control" id="email" name="email"value="{{$student->email}}" disabled>
                </div>
                <label for="name">Course</label>
                <div class="card-course">
                <input type="text" class="form-control" id="course" name="course"value="{{$student->course}}" disabled>
                </div> 
                <label for="name">Address</label>
                <div class="card-address">
                <input type="text" class="form-control" id="address" name="address"value="{{$student->address}}" disabled>
                </div>
                <label for="name">Gender</label>
                <div class="card-address">
                <input type="text" class="form-control" id="address" name="address"value="{{$student->gender}}" disabled>
                </div>
                <label for="name">Image</label>
                <div class="card-address">
                <img src="{{asset('storage/images/' . $student->image)}}" width="100px" disabled>
                </div>
                <br>
                <!-- <div class="card-footer d-flex">
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a> -->
                   
                </div>
            </div>
        </div>
    </div>
</body>

</html>