
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

      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
      <p>
        <a href="{{ route('web.employees.pending_leaves') }}" class="w-auto text-center text-uppercase font-12
        text-white rounded-pill py-2 px-3 bg-secondary fw-500 align-items-center
        hvr-shrink "> PENDING LEAVES

         <span class="badge badge-custom bg-white  text-dark ms-1 font-13">6</span>
     </a>
      </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
     
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="employeeLeaveTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                   
                  <th>  PHOTO
                  </th>
                  <th>NAME
                  </th>
                  <th>ANNUAL
                  </th>
                  <th>CASSUAL
                  </th>
                  <th>NO PAY
                  </th>
                  <th>VIEW</th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  <tr>
                  
                     <td>
                       <div class="row">
                        <div class="col-lg-3">
                            <img class="d-block w-75 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                            alt="Guru Niwasa LMS">
                        </div>

                       </div>

                     </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td>
                        <a href="{{ route('web.employees.leaves_check') }}" class=" text-white
                           font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                           align-items-center   hvr-shrink">View
                        </a>
                     </td>
                   

                    
                  </tr>

               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
