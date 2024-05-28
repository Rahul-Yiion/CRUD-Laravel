<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\course;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $search=$request['search'];
        
        $students=student::Paginate(env('PAGINATE'));
        if($search){
            $students = student::where('name', 'like', '%' . $search . '%')->orwhere('address', 'like', '%' . $search . '%')->Paginate(env('PAGINATE'));
        }
        return view('student.index', compact('students'));
    }


    
       
       
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|alpha',
            'phone' => 'required|numeric',
            'course' => 'required',
            'email' => 'required|email|max:255|unique:student',
            'address' => 'max:180',
            'gender' => 'required',
            'check' => 'required',

           
        ],
        [
            'name.required'=>'Name is Required.',
            'name.alpha' => 'Enter Only Text, withaout Space',
            'phone.required'=>'Phone is Required.',
            'phone.numeric'=>'Enter Only Number',
            // 'phone.max'=> 'Please Enter 10 Digit.',
            'course.required' => 'Course is Required.',
            'email.required' => 'Email is Required.',
            'email.email' => 'Enter Valid Email EX.test@gmail.com',
            'email.max'=> 'Enter Valid langth Of Email.',
            'email.unique'=>'Email Alrady Exist',
            'gender.required'=>'Gender is Required.',
            'check.required'=>'agree with terms and conditions',


        ]
    );
        // dd($request);

        student::create($request->all());
        return redirect()->route('student.index')
            ->with('success', 'Student created successfully.'); 
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|alpha',
            'phone' => 'required|numeric',
            'course' => 'required',
            'email' => 'required|email|max:255',
            'address' => 'max:180',
           
        ],
        [
            'name.required'=>'Name is Required.',
            'name.alpha' => 'Enter Only Text, withaout Space',
            'phone.required'=>'Phone is Required.',
            'phone.numeric'=>'Enter Only Number',
            'phone.max'=> 'PLease Enter 10 Digit.',
            'course.required' => 'Course is Required.',
            'email.required' => 'Email is Required.',
            'email.email' => 'Enter Valid Email EX.test@gmail.com',
            'email.max'=> 'Enter Valid langth Of Email.',
            'email.unique'=>'Email Alrady Exist',


        ]
    );
        $student = student::find($id); 
        $student->update($request->all());
        
        return redirect()->route('student.index')
            ->with('success', 'Student updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $student = student::find($id); 
        $student->delete();
        return redirect()->route('student.index')
            ->with('success', 'Student deleted successfully.'); 
    }

    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $data = course::all();
         return view('student.create',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    
    public function show($id)
    {
        $student = student::find($id); // Changed $post to $student
        return view('student.show', compact('student')); 
    }

    /**
     * Show the form for editing the specified student.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // dd($id);
        $data = course::all();
        $student = student::find($id); // Changed $post to $student
        return view('student.edit', compact('student','data')); 

        
    }

       public function course()
    {
        $data = course::all();
        return view('student.edit',['data'=>$data]);
    }
}
