
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
         <p class="font-18 fw-bold text-purple">PRAMOD THILINA
        </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
 
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row justify-content-between align-items-center pb-3">
        <div class="col-lg-10 mx-auto">
            <div class="row align-items-center text-center ">
                <div class="col-lg-3 col-sm-5 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                  <span class="  text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                     bg-light-blue fw-bolder align-items-center  ">ANNUAL LEAVE BALANCE
                     - 150</span>
               </div>
               <div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-0  mb-3 px-sm-0">
                <span class=" text-uppercase font-13 w-100 text-white rounded-3 py-2 px-3
                 bg-light-blue fw-bolder align-items-center  ">CASSUAL LEAVE BALANCE -8 </span>
             </div>
            </div>
         </div>
       



     </div>
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="employeeLeaveCheckTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>DATE</th>
                  <th>DAY
                  </th>
                  <th>REASON
                  </th>
                  <th>LEAVE TYPE
                  </th>
                  <th>REMARKS

                  </th>
                  <th>STATUS</th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                     <td> </td>
                   
                     <td> </td>
                     <td> </td>
                     <td> </td>
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
                    

                   



                     <td>
                       
                        <span class="btn btn-primary fw-500 font-11 px-2 w-100 rounded-pill text-white"
                         >
                        APPROVED</span>
                    
                        <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#scholshipEdit">
                        EDIT</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="scholshipEdit"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                       <div class="col-12">
                                          <p class=" fw-500 font-14 rounded-3 text-dark pb-3">
                                             Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                          </p>
                                          <button type="button" class="btn  font-14 text-white gradient-background-1 py-2 px-5  ">
                                          Submit</button>
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
