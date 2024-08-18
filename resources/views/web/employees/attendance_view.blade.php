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
         <h1 class="font-36 fw-bold text-uppercase text-purple">EMPLOYEE ATTENDANCE

         </h1>
         <p class="font-20 fw-500 text-purple">JANUARY
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
        <div class="row align-items-center">
           <div class="col-lg-4 col-sm-5 ">
          
           </div>
           <div class="col-lg-8 pt-lg-0 pt-sm-3 pt-3">
              <form action="">
                <div class="row justify-content-end">
                    <div class="col-lg-5 col-sm-5 col-6">
                       <select class="form-select form-select-lg border border-info rounded-pill font-15 fw-500 text-dark py-2 
                       " aria-label=".form-select-lg example">
                          <option selected="">Select Employee Name Filter</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                       </select>
                    </div>
                    
                    <div class="col-lg-2 col-sm-2 col-6 pt-lg-0 pt-sm-0 pt-3">
                       <button type="submit" class="btn w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3
                          bg-success fw-bolder align-items-center ">Submit</button>
                    </div>
                 </div>
              </form>
              
           </div>
        </div>
     </div>
   <div class="col-12">
      <div class="table-responsive  ">
         <table id="employeeAttendanceTbl" class="table table-striped table-hover table-bordered">
            <thead class="text-white gradient-background text-uppercase fw-light font-14">
                <tr>
                    <th>DATE</th>
                    <th>DAY</th>
                    <th>NAME</th>
                    <th>IN</th>
                    <th>OUT</th>
                    <th>WORKING
                        HOURS</th>
                    <th>OT</th>
                    <th>DEDUCTS</th>
                    <th>STATUS</th>
                    <th>REMARK</th>
                    <th>EDIT/DELETE</th>
                   
                </tr>
            </thead>
            <tbody class="font-13 fw-500 align-items-center">
               <tr>
                  <td>  </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
              <td>
                        
                    <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                       data-bs-toggle="modal" data-bs-target="#pulishEdit">EDIT</button>
                    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pulishEdit"
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
                    <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white"
                       data-bs-toggle="modal" data-bs-target="#pulishDelete">DELETE</button>
                    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pulishDelete"
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