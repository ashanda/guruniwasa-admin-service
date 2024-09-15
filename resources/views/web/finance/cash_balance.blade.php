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
         <h1 class="font-30 fw-bold text-uppercase text-purple">MAIN CASH BALANCE

         </h1>

      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>

      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
    <div class="col-lg-12">
        <div class="row align-items-center  ">
            <div class="col-lg-5 col-sm-5   px-sm-0">
              <span class="  text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                 bg-light-blue fw-bolder align-items-center  ">CURRUNT BALANCE 15000
                 </span>
           </div>

        </div>
     </div>
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="mainCashTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>TIME</th>
                  <th>CATEGORY
                  </th>
                  <th>SUB
                    CATEGORY
                  </th>
                  <th>ITEM/SERVICE
                  </th>
                  <th>CASH IN</th>
                  <th>CASH
                    OUT</th>
                  <th>PROOF
                    DOCUMENT</th>



                  <th>BALANCE
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>
                        <button class="btn btn-info fw-500 font-11 px-2 w-100 rounded-pill "
                           data-bs-toggle="modal" data-bs-target="#errorDelete">
                           VIEW</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="errorDelete"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-12">
                                          <img class="d-block w-100 " src="{{asset('themes/default/img/6.webp')}}" alt="Guru Niwasa LMS">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
