<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class studentsController extends Controller
{
    public function  index(){
        $students = Students::all();
        $data=[
            'status'=>200,
            'students'=>$students
        ];

        return response()->json($data,200);
    }
}
