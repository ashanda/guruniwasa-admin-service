<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateAccountController extends Controller
{
    public function createAccount()
    {
        try{

            return view('web.create_account.view');

        }catch(\Exception $exception){

            return;
        }
    }

}
