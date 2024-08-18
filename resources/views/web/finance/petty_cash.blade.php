
@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="/" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">PETTY CASH
         </h1>

      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
        
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row justify-content-between align-items-center pb-3">
        <div class="col-lg-10 mx-auto pb-4">
            <div class="row align-items-center text-center ">
                <div class="col-lg-3 col-sm-3 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                  <span class="  text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                     bg-light-blue fw-bolder align-items-center  ">PETTY CASH AMOUNT
                     15000</span>
               </div>
               <div class="col-lg-3 col-sm-3 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                 bg-light-blue fw-bolder align-items-center  ">CURRUNT BALANCE
                 15000</span>
             </div>
             <div class="col-lg-3 col-sm-3 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                  bg-light-blue fw-bolder align-items-center  ">Petty Cash
                  Excess/Shortage</span>
             </div>
             
            </div>
         </div>
        
     </div>
   <div class="row middle-hight">
      <div class="col-lg-10 mx-auto">
         <div class="table-responsive  ">
            <table id="pettyCashTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14 text-center">
                  <th>NAME
                    </th>
                  <th>VIEW PETTY CASH ACCOUNTS

                </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center text-center">
                  <tr>
                      
                     <td> RAMOD THILINA</td>

                     <td>
                        <a href="{{ route('web.finance.petty_cash_view') }}" class=" text-white
                           font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                           align-items-center   hvr-shrink">View
                        </a>
                     </td>
                     
 

                     
                  </tr>

               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
