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
         <h1 class="font-36 fw-bold text-uppercase text-purple pt-lg-0 pt-1">CREATE TEACHER ACCONTS
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3">
      </div>
   </div>
</div>
<div class="container-fluid pt-4 pb-5 px-lg-5 ">
   <div class="col-12">
      <div class="row justify-content-center">
        <div class="col-lg-5 d-flex justify-content-center">
            <img class="d-block w-40 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}" alt="Guru Niwasa LMS">
        </div>
    </div>
<form action="{{ route('web.teachers.add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-around bg-white rounded-35 px-lg-5 py-3 mt-3 border-new">
        <div class="col-lg-6 pt-3">
            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">Full Name</label>
                <input type="text" class="form-control font-13 fw-500 rounded-3 border-dark" name="full_name" placeholder="Enter Full Name" required>
            </div>
            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">Grade</label>
                 
                <select class="form-select font-13 fw-500 rounded-3 border-dark" name="gradeList[]" multiple required>
                   
                    @foreach ($grades as $grade)
                        <option value="{{ $grade['id'] }}">{{ $grade['gname'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">Contact No</label>
                <input type="text" class="form-control font-13 fw-500 rounded-3 border-dark" name="contact_no" placeholder="Enter Contact No" required>
            </div>
            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">Secondary Contact No</label>
                <input type="text" class="form-control font-13 fw-500 rounded-3 border-dark" name="secondary_contact_no" placeholder="Enter Secondary Contact No">
            </div>
            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">Email</label>
                <input type="email" class="form-control font-13 fw-500 rounded-3 border-dark" name="email" placeholder="Enter Email" required>
            </div>
            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">Password</label>
                <input type="password" class="form-control font-13 fw-500 rounded-3 border-dark" name="password" placeholder="Enter Password" required>
            </div>
        </div>
        <div class="col-lg-6 pt-3">
            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">Address</label>
                <input type="text" class="form-control font-13 fw-500 rounded-3 border-dark" name="address" placeholder="Enter Address" required>
            </div>
            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">District</label>
                <input type="text" class="form-control font-13 fw-500 rounded-3 border-dark" name="district" placeholder="Enter District" required>
            </div>
            <div class="mb-2">
                <label class="form-label font-12 fw-bold text-purple mb-0">Town</label>
                <input type="text" class="form-control font-13 fw-500 rounded-3 border-dark" name="town" placeholder="Enter Town" required>
            </div>
        </div>

        <div class="col-12">
            <h2 class="font-18 fw-bold text-purple pt-3 pb-2">GIVE ACCESS</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-6 pb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gradeList[]" value="itemShop" id="itemShopMain">
                        <label class="form-check-label fw-bold font-14" for="itemShopMain">ITEM SHOP</label>
                    </div>
                    <div class="subcategories ps-lg-3 ps-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="gradeList[]" value="itemShopSub" id="itemShopSub">
                            <label class="form-check-label font-12" for="itemShopSub">ITEM SHOP</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="gradeList[]" value="payments" id="payments">
                            <label class="form-check-label font-12" for="payments">PAYMENTS</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="gradeList[]" value="pendingItems" id="pendingItems">
                            <label class="form-check-label font-12" for="pendingItems">PENDING ITEMS</label>
                        </div>
                    </div>
                </div>
                <!-- Repeat the above block for other access categories, updating values accordingly -->
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-lg-4 col-sm-5 col-6">
                <button type="submit" class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35">
                    Submit
                </button>
            </div>
        </div>
    </div>
</form>

   </div>
</div>
</div>
@endsection