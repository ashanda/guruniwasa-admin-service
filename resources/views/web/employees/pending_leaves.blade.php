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
         <h1 class="font-36 fw-bold text-uppercase text-purple">EMPLOYEE LEAVES

         </h1>
         <p class="font-18 fw-bold text-purple">PENDING
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="pendingLeaveTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>NAME</th>
                  <th>VIEW
                    EMPLOYEE
                      
                  </th>
                  <th>SUBMIT DATE

                  </th>
                  <th>REQUESTED
                    DATE
                    
                  </th>
                  <th>REASON
                  </th>
                  <th>DAY
                  </th>
                  <th>REMAINING
                    LEAVES
                    
                  </th>
                  <th>NO PAY
                    LEAVES</th>
                  <th>REMARK
                  </th>
                  <th>APPROVAL</th>
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
                     <td></td>
                     
                     
                     <td>
                        <button class="btn btn-info fw-bolder font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#remarkForm">
                        Remark</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="remarkForm"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="mb-2">
                                             <label class="form-label font-14 fw-bold text-purple  mb-0">Add Remark </label>
                                             <textarea class="form-control fw-500 rounded-3 border-dark font-13" rows="5"></textarea>
                                          </div>
                                          <button type="button" class="btn  font-14 text-white gradient-background-1 py-2 px-5  ">
                                          Submit</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td><button type="button" class="btn btn-success font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">APPROVE</button>
                        <button type="button" class="btn btn-danger font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">REJECT</button><br>
                        
                    </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection