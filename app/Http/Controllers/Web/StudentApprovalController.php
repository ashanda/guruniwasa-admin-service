<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentApprovalController extends Controller
{
    public function studentApproval()
    {
        try{

            return view('web.student_approvals.all_list');

        }catch(\Exception $exception){

            return;
        }
    }


    public function gradeRequests()
    {
        try{

            return view('web.student_approvals.grade_requests');

        }catch(\Exception $exception){

            return;
        }
    }

    public function freeRequests()
    {
        try{

            return view('web.student_approvals.free_request');

        }catch(\Exception $exception){

            return;
        }
    }








}
