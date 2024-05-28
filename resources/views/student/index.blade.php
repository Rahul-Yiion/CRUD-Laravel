<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Students Details</title>
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="#">Students Details</a>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-success" href="{{route('student.create')}}">Add Student</a>
        </div>
      </div>
    </div>
  </nav>
  @include('student.errors')

<br>

<form Action=""method="get">
    <input type="search" name="search" placeholder="Search hear.." value=""></input>
    <input type="Submit" Value="Search">
    <a href="{{('/')}}">
    <button type="button"> Reset</button>
  </a>
  </form>
  <table class="table table-bordered">
        <tr>
            <th>Sr.Num</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Course</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
         @foreach ($students as $student)
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
         }
         @endphp
                        
        <tr>
            <td>{{ $student->sr_num}}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->gender }}</td>
            <td><img src="{{asset('storage/images/' . $student->image)}}" width="100px"></td>
            <td>
                  <div class="d-flex">
                    <a class="btn btn-info" href="{{route('student.show',$student->id)}}">Show</a>&nbsp;
                    
                    <a class="btn btn-primary" href="{{ route('student.edit', $student->id) }}">Edit</a>&nbsp;

                    <a class="btn btn-danger" href="{{ route('student.destroy', $student->id) }}"onclick='return confrmdel()'>Delete</a>&nbsp;
                </div>
            </td>
        </tr>
        @endforeach    
        </table>
      {{$students->links()}};
<script>
  function confrmdel()
  {
    return confirm("Are You Sure You Want to delete..?");
  }
</script>

