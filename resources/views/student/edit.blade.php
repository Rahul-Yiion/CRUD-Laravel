<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Edit Student</title>
</head>

<body>

@php
         /*if (($student->course)== 1){
          $student->course="BCA";
         }
         elseif(($student->course)== 2){
          $student->course="BBA";
         }
         elseif(($student->course)== 3){
          $student->course="B.Com";
         }
         elseif(($student->course)== 4){
          $student->course="B.Ed";
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
         }*/
         @endphp





    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="{{ route('student.edit', $student->id) }}">Student Detail</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href="{{ route('student.create') }}">Add Student</a> 
                </div>
            </div>
    </nav>
    <a style="background-color:grey; float:right;"  href="{{ URL::previous() }}" class="btn btn-default"><b><-Back</b></a>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update Student</h3>
                @csrf
                <form action="{{ route('student.update', $student->id) }}" method="get">
                @csrf
                    
                <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"value="{{$student->name}}">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"value="{{$student->phone}}">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" id="email" name="email"value="{{$student->email}}">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>




                

                    <div class="form-group">
                        <label for="body">Course</label>
                    <select name="course">
                        @foreach ($data as $row )
                        <option value="{{$row->id}}" {{ $row->id == $student->course ? 'selected' : '' }}>{{$row->c_name}}</option>
                        @endforeach
                        
                        <!-- <option selected='selected'  value="{{$student->id}}"  >{{$row->c_name}}</option> -->
                    </select>
                    @error('course')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>






                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$student->address}}">
                        @error('address')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Gender</label><br>
                        <input type="radio" name="gender" value="1" <?php  if(($student->gender)=="1"){echo "Checked"; }?>>Male
                        <input type="radio" name="gender" value="2"<?php  if(($student->gender)=="2"){echo "Checked"; }?>>female
                        <input type="radio" name="gender" value="3"<?php  if(($student->gender)=="3"){echo "Checked"; }?>>Other&nbsp;<br><br>
               
                        @error('gender')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <lable> current Image</lable>
                    <img src="{{asset('storage/images/' . $student->image)}}" width="100px">
                     <br>
                     <br>
                    <label>Choice Image</label>
                    <input type="file" name="image" value="">
                    <br>
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Update Student</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>