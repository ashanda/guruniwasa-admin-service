@extends('web.layouts.app')
@section('content')
@if(session()->has('admin_data'))
    @php
        $adminData = session('admin_data');
        
    @endphp
@else
     <script>window.location = "{{ route('web.logout') }}";</script>
@endif

<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-2">
      </div>
      <div class="col-lg-6 col-sm-6 text-center pt-lg-0 pt-3">
         <p class="font-17 fw-bolder text-purple">Hello, <span class="fst-italic">< {{ $adminData['name'] }} ></span>
         </p>
         <h1 class="font-36 fw-bold text-uppercase text-purple pt-lg-0 pt-1">WELCOME TO GURU NIWASA LMS
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row align-items-center middle-hight">
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.finance.list') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-coins fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">FINANCE
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.employees.all_list') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-users  fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">EMPLOYEES
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.teachers.section') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-chalkboard-user fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">TEACHERS
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.student.talents') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-book fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">STUDENTS
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.special_approvals') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-gauge fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">SPECIAL APPROVALS
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{  route('web.item-shop-view') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-cart-shopping fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-18 text-white fw-500">Items Shop</p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{  route('web.notice.board') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-circle-exclamation fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">Notice Board</p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.notice.birthday_list')}}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-cake-candles fs-3 text-white "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">BIRTHDAYS  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{  route('web.fees.view') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-money-bill fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">CLASS FEES
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.other_transactions.view') }}"  class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-money-bill-wave fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">OTHER TRANSACTIONS
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.student_approvals.all_list') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-address-card  fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">STUDENT APPROVALS
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.video.view') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa-solid fa-circle-play fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">LMS INTRO VIDEO
                  </p>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
         <a href="{{ route('web.create_account') }}" class="hvr-shrink w-100">
            <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
               <div class="col-1  py-1">
                  <i class="fa fa-user  fs-3 text-white  "></i>
               </div>
               <div class="col-10 py-1 ps-4">
                  <p class="font-13 text-white fw-500">CREATE ACCOUNTS
                  </p>
               </div>
            </div>
         </a>
      </div>
   </div>
</div>
@endsection
