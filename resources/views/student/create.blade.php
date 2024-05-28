<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Create Student</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="">Student Details</a>
            <div class="justify-end ">
                <div class="col ">
                </div>
            </div>
    </nav>
    <a style="background-color:yellow" href="{{ URL::previous() }}" class="btn btn-default"><b><-Back</b></a>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Add a Student</h3>
                <form action="{{ route('student.store') }}" method="post">
                @csrf
                <pre>
                    <!-- @php
                     print_r($errors->all);
                     @endphp -->
                </pre>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">phone</label>
                        <input type="text" class="form-control" id="phone"  name="phone"value="{{old('phone')}}">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" id="email" name="email"value="{{old('email')}}">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Course</label>
                    <select name="course">
                    <option value="">--SELECT--</option>
                        @foreach ($data as $row )
                        <option value="{{$row->id}}">{{$row->c_name}}</option>
                        
                        @endforeach
                    </select>
                        <!-- <select name="course" id="course"> -->
                        <!-- <option value="" selected='selected'>SELECT</option>
                        <option  id="1" value="1">BCA</option>
                        <option  id="2" value="2">BSC</option>
                        <option  id="3" value="3">MCA</option>
                        <option  id="4" value="4">MSC</option> -->
                        @error('course')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <!-- <div> class="form-group">
                        <label for="body">Gender</label>
                        <input type="redio" name="redio" value="">Male</input>
                        <input type="redio" name="redio" value="">Female</input>
                        <input type="redio" name="redio" value="">Other</input>

                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div> -->

                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" class="form-control" id="address" name="address"value="{{old('address')}}">
                        @error('address')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Gender</label><br>
                        <checked name="gender"value="{{old('gender')}}" checked>
                        <input type=radio name="gender" value="1" >Male</option>&nbsp;
                        <input type=radio name="gender" value="2" >Female</option>&nbsp; 
                        <input type=radio name="gender" value="3" >Other</option> &nbsp;           
                        @error('gender')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <label>Profile Photo</label>
                    <input type="file" name="image" value="{{old('image')}}">
                    <br>
                    <br>
                    <div class="form-group">
                    <input type="checkbox" value="1"  id="check" name="check">
                    <label for="remember_me">Are You Agree term and condtions.</label>
                    @error('check')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Create student</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>