
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
         <h1 class="font-30 fw-bold text-uppercase text-purple">ADD INCOME & EXPENCES CATEGORIES

         </h1>

      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
        
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    
   <div class="row middle-hight">
      <div class="col-lg-6 ">

        <h5 class=" font-18 fw-bold text-center pb-3   text-purple pt-lg-0 pt-1">
            ADD RECEIPT CATEGORY
         </h5>
        
            <table  class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14 text-center">

         
                <tr>
                    <th colspan="2">RECEIPTS</th>
                </tr>
                <tr>
                    <th>MAIN CATEGORY</th>
                    <th>SUB CATEGORY</th>
                </tr>
            
                <tbody class="font-13 fw-500 align-items-center text-center">
                <tr>
                    <td class="main-category">
                        TUTION CLASS
                        <button class="bg-info fw-500 font-11 px-3 border-0 rounded-pill text-white py-1 me-2" 
                        data-bs-toggle="modal" data-bs-target="#receipts_sub_category">ADD SUB CATEGORY</button>

                        <div class="modal fade" id="receipts_sub_category" data-bs-backdrop="static" tabindex="-1"
                        aria-labelledby="receipts_sub_category" aria-hidden="true">
                        <div class="modal-dialog text-start">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    ADD RECEIPT CATEGORY
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="modal-body modal-lg">
                                       <div class="row">
                                          <div class="col-12">
                                          
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">Main Category</label>
                                                <select class="form-select fw-500 rounded-3 border-dark font-13"
                                                   aria-label="Default select example">
                                                   <option selected="">Select Role</option>
                                                   <option value="1">1</option>
                                                   <option value="2">2</option>
                                                </select>
                                             </div>
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">Sub Category</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
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


                    </td>
                    <td class="sub-category">
                        PHYSICAL TEACHERS COMMISSION<br>
                        ONLINE TEACHERS COMMISION
                    </td>
                </tr>
                <tr>
                    <td class="main-category">
                        INVESTMENTS
                        
                    </td>
                    <td class="sub-category"></td>
                </tr>
                <tr>
                    <td class="main-category">
                        ITEM SHOP
                       
                    </td>
                    <td class="sub-category"></td>
                </tr>
            </tbody>
        </table>
   
         
      </div>


      <div class="col-lg-6 ">

        <h5 class=" font-18 fw-bold text-center pb-3   text-purple pt-lg-0 pt-1">
            ADD PAYMENT CATEGORY
         </h5>
        
            <table  class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14 text-center">

         
                <tr>
                    <th colspan="2">PAYMENT</th>
                </tr>
                <tr>
                    <th>MAIN CATEGORY</th>
                    <th>SUB CATEGORY</th>
                </tr>
            
                <tbody class="font-13 fw-500 align-items-center text-center">
                <tr>
                    <td class="main-category">
                        TUTION CLASS
                        <button class="bg-info fw-500 font-11 px-3 border-0 rounded-pill text-white py-1 me-2" 
                        data-bs-toggle="modal" data-bs-target="#payment_sub_category">ADD SUB CATEGORY</button>

                        <div class="modal fade" id="payment_sub_category" data-bs-backdrop="static" tabindex="-1"
                        aria-labelledby="payment_sub_category" aria-hidden="true">
                        <div class="modal-dialog text-start">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    ADD RECEIPT CATEGORY
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="modal-body modal-lg">
                                       <div class="row">
                                          <div class="col-12">
                                          
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">Main Category</label>
                                                <select class="form-select fw-500 rounded-3 border-dark font-13"
                                                   aria-label="Default select example">
                                                   <option selected="">Select Role</option>
                                                   <option value="1">1</option>
                                                   <option value="2">2</option>
                                                </select>
                                             </div>
                                             <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple  mb-0">Sub Category</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"
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


                    </td>
                    <td class="sub-category">
                        PHYSICAL TEACHERS COMMISSION<br>
                        ONLINE TEACHERS COMMISION
                    </td>
                </tr>
                <tr>
                    <td class="main-category">
                        INVESTMENTS
                        
                    </td>
                    <td class="sub-category"></td>
                </tr>
                <tr>
                    <td class="main-category">
                        ITEM SHOP
                       
                    </td>
                    <td class="sub-category"></td>
                </tr>
            </tbody>
        </table>
   
         
      </div>
   </div>
</div>
@endsection
