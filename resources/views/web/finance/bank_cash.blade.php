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
         <h1 class="font-36 fw-bold text-uppercase text-purple">BANK TO CASH

         </h1>

      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
         <p>
            <a class=" rounded-pill font-13 w-100 text-white rounded-3 py-2 px-3
               bg-secondary fw-500 align-items-center " data-bs-toggle="modal" data-bs-target="#addItemsForm">
            <i class="fa fa-plus"></i>  BANK TO CASH

            </a>
         </p>
         <div class="modal fade" id="addItemsForm" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="addItemsForm" aria-hidden="true">
            <div class="modal-dialog text-start">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                        BANK TO CASH
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="">
                        <div class="modal-body modal-lg">
                           <div class="row">
                              <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">Date & time</label>
                                    <input type="datetime-local" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>

                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">BANK</label>
                                    <select class="form-select fw-500 rounded-3 border-dark font-13"
                                       aria-label="Default select example">
                                       <option selected="">Select Role</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                    </select>
                                 </div>
                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">AMOUNT</label>
                                    <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>

                                 <div class="mb-2">
                                    <label class="form-label font-14 fw-bold text-purple  mb-0">UPLOAD PROOF</label>
                                    <input type="file" class="form-control fw-500 rounded-3 border-dark font-13"
                                       >
                                 </div>


                              </div>

                           </div>
                           <div class="text-center mt-4">
                              <button type="button" class="btn text-uppercase font-12
                                 text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">SUBMIT</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">

      <div class="col-12">
         <div class="table-responsive  ">
            <table id="bankCashTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>DAY</th>
                  <th>TIME
                  </th>
                  <th>BANK
                  </th>
                  <th>AMOUNT
                  </th>
                  <th>DOCUMENT
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

                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
