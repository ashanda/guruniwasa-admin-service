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
         <h1 class="font-36 fw-bold text-uppercase text-purple"> EMPLOYEE SALARIES
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
      <div class="table-responsive  ">
         <table id="employeeSalaryTbl" class="table table-striped table-hover table-bordered">
            <thead class="text-white gradient-background text-uppercase fw-light font-14">
                <tr>
                    <th>NAME</th>
                    <th>BASIC SALARY</th>
                    <th>FIXED ALLOWANCE</th>
                    <th>OTHER ALLOWANCES</th>
                    <th>STUDENT COMMISSION</th>
                    <th>OT</th>
                    <th>LEAVES</th>
                    <th>SUBTOTAL</th>
                    <th>EPF 8%</th>
                    <th>EPF 12%</th>
                    <th>ETF 3%</th>
                    <th>SALARY ADVANCE</th>
                    <th>WH TAX</th>
                    <th>OTHER DEDUCTIONS</th>
                    <th>GRAND TOTAL</th>
                    <th>SALARY SLIP</th>
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
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td>
                     <button class="btn btn-info fw-500 font-11 px-2 w-100 rounded-pill text-white"
                        data-bs-toggle="modal" data-bs-target="#salaryUpload">Upload</button>
                     <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="salaryUpload"
                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                        <div class="modal-dialog modal-dialog-centered ">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body ">
                                 <div class="row">
                                    <div class="col-12">
                                       
                                       <div class="mb-3">
                                        <label for="formFile" class="form-label fw-500 font-14 rounded-3 text-dark">
                                           Salary Slip</label>
                                        <input class="form-control fw-500 font-14 rounded-3 text-dark" type="file" id="formFile">
                                      </div>
                                       <button type="button" class="btn  font-14 text-white gradient-background-1 py-2 px-5  ">
                                       Submit</button>
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