@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center pt-lg-0 pt-3">
         <h1 class="font-36 fw-bold text-uppercase text-purple pt-lg-0 pt-1">CREATE ACCONTS
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3">
      </div>
   </div>
</div>
<div class="container-fluid pt-4 pb-5 px-lg-5 ">
   <div class="col-12">
      <div class="row justify-content-center">
         <div class="col-lg-5">
            <div class="row align-items-center">
               <div class="col-3">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
               <div class="col-9">
                  <h3 class="font-20 fw-bold text-purple pb-1">PRAMOD THILINA</h3>
                  <h3 class="font-17 fw-bold text-purple pb-1">EMP 0002
                  </h3>
               </div>
            </div>
         </div>
      </div>
      <form action="">
      <div class="row justify-content-around bg-white rounded-35 px-lg-5 py-3 mt-3 border-new">
     

            <div class="col-lg-6 pt-3">
                <div class="mb-2">
                    <label class="form-label font-12 fw-bold text-purple  mb-0">Full Name </label>
                    <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Full Name ">
                 </div>
                 <div class="mb-2">
                    <label class="form-label font-12 fw-bold text-purple  mb-0">Designation </label>
                    <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Designation ">
                 </div>
                 <div class="mb-2">
                    <label class="form-label font-12 fw-bold text-purple  mb-0">Contact No</label>
                    <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Contact No ">
                 </div>
                 <div class="mb-2">
                    <label class="form-label font-12 fw-bold text-purple  mb-0">Secondary Contact No</label>
                    <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Contact No ">
                 </div>
             </div>
             <div class="col-lg-6 pt-3">
                <div class="mb-2">
                    <label class="form-label font-12 fw-bold text-purple  mb-0">Address </label>
                    <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Address ">
                 </div>
                 <div class="mb-2">
                    <label class="form-label font-12 fw-bold text-purple  mb-0">District </label>
                    <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter District ">
                 </div>
                 <div class="mb-2">
                    <label class="form-label font-12 fw-bold text-purple  mb-0">Town </label>
                    <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Town ">
                 </div>
             </div>
             <div class="col-12">
                <h2 class="font-18 fw-bold  text-purple   pt-3 pb-2">
                    GIVE ACCESS

                </h2>

                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-6 pb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="itemShopMain">
                            <label class="form-check-label fw-bold font-14" for="itemShopMain">
                                ITEM SHOP
                            </label>
                        </div>
                        <div class="subcategories ps-lg-3 ps-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="itemShopSub">
                                <label class="form-check-label font-12" for="itemShopSub">
                                    ITEM SHOP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="payments">
                                <label class="form-check-label font-12" for="payments">
                                    PAYMENTS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="pendingItems">
                                <label class="form-check-label font-12" for="pendingItems">
                                    PENDING ITEMS
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6 pb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="itemShopMain">
                            <label class="form-check-label fw-bold font-14" for="itemShopMain">
                                ITEM SHOP
                            </label>
                        </div>
                        <div class="subcategories ps-lg-3 ps-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="itemShopSub">
                                <label class="form-check-label font-12" for="itemShopSub">
                                    ITEM SHOP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="payments">
                                <label class="form-check-label font-12" for="payments">
                                    PAYMENTS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="pendingItems">
                                <label class="form-check-label font-12" for="pendingItems">
                                    PENDING ITEMS
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6 pb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="itemShopMain">
                            <label class="form-check-label fw-bold font-14" for="itemShopMain">
                                ITEM SHOP
                            </label>
                        </div>
                        <div class="subcategories ps-lg-3 ps-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="itemShopSub">
                                <label class="form-check-label font-12" for="itemShopSub">
                                    ITEM SHOP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="payments">
                                <label class="form-check-label font-12" for="payments">
                                    PAYMENTS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="pendingItems">
                                <label class="form-check-label font-12" for="pendingItems">
                                    PENDING ITEMS
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6 pb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="itemShopMain">
                            <label class="form-check-label fw-bold font-14" for="itemShopMain">
                                ITEM SHOP
                            </label>
                        </div>
                        <div class="subcategories ps-lg-3 ps-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="itemShopSub">
                                <label class="form-check-label font-12" for="itemShopSub">
                                    ITEM SHOP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="payments">
                                <label class="form-check-label font-12" for="payments">
                                    PAYMENTS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="pendingItems">
                                <label class="form-check-label font-12" for="pendingItems">
                                    PENDING ITEMS
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

             <div class="row align-items-center mt-3">
                <div class="col-lg-4 col-sm-5 col-6">
                     <a href=" " class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35 ">
                     Submit
                     </a>
                  </div>


               </div>
      
      </div>
    </form>
   </div>
</div>
</div>
@endsection