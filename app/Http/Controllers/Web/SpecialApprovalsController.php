<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialApprovalsController extends Controller
{
    
    public function specialApprovals()
    {
        try{

            return view('web.special_approvals.view');

        }catch(\Exception $exception){

            return;
        }
    }


    
}
