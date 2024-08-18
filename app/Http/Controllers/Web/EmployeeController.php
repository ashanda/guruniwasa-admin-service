<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function allEmployee()
    {
        try{

            return view('web.employees.all_list');

        }catch(\Exception $exception){

            return;
        }
    }

    public function employeeDetails()
    {
        try{

            return view('web.employees.details');

        }catch(\Exception $exception){

            return;
        }
    }


    public function employeeSalary()
    {
        try{

            return view('web.employees.salary');

        }catch(\Exception $exception){

            return;
        }
    }

    public function employeeSalaryView()
    {
        try{

            return view('web.employees.salary_view');

        }catch(\Exception $exception){

            return;
        }
    }
    


    public function employeeAttendance()
    {
        try{

            return view('web.employees.attendance');

        }catch(\Exception $exception){

            return;
        }
    }

    public function employeeAttendanceView()
    {
        try{

            return view('web.employees.attendance_view');

        }catch(\Exception $exception){

            return;
        }
    }






    public function employeeLeaves()
    {
        try{

            return view('web.employees.leaves');

        }catch(\Exception $exception){

            return;
        }
    }
    


    public function employeeLeavesCheck()
    {
        try{

            return view('web.employees.leaves_check');

        }catch(\Exception $exception){

            return;
        }
    }

    public function employeePendingLeaves()
    {
        try{

            return view('web.employees.pending_leaves');

        }catch(\Exception $exception){

            return;
        }
    }







}
