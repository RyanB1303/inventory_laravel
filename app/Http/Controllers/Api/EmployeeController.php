<?php

namespace App\Http\Controllers\Api;

use App\Employee;
use Illuminate\Http\Request;
use Image;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Employee::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $em = new Employee;

        $default_photo = '/backend/img/man.png';

        if($request->photo){
            $position = strpos($request->photo, ';');
            $sub = substr($request->photo, 0, $position);
            $ext = explode('/',$sub)[1];
            
            $photoName = time().".".$ext;
            $upload_path = '/backend/employee/';
            $image_url = $upload_path.$photoName;
            $image = Image::make($request->photo)->resize(200,200)->save($image_url);

            
        $em->username = $request->username;
        $em->email = $request->email;
        $em->gender = $request->gender;
        $em->first_name = $request->firstName;
        $em->last_name = $request->lastName;
        $em->salary = $request->salary;
        $em->city = $request->city;
        $em->position = $request->position;
        $em->phone = $request->phone;
        $em->join_date = $request->joinDate;
            $em->photo = $image_url;
        $em->save();

        }
        else {
            
        $em->username = $request->username;
        $em->email = $request->email;
        $em->gender = $request->gender;
        $em->first_name = $request->firstName;
        $em->last_name = $request->lastName;
        $em->salary = $request->salary;
        $em->city = $request->city;
        $em->position = $request->position;
        $em->phone = $request->phone;
        $em->join_date = $request->joinDate;
             $em->photo = $default_photo;
        $em->save();

        }

        // return response()->json($em, 200, $headers);
        // return  redirect()->action('Api\EmployeeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
