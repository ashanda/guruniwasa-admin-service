@extends('web.layouts.app')
@section('content')
{{-- {{ dd($grades) }} --}}
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD GRADES
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 ">
         <div class="text-end">
            <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow "></i>
            <span class=" text-uppercase font-13 fw-bold text-dark text-end"> Download excel</span>
         </div>
         <div class="row justify-content-end">
            <div class="col-lg-11">
               <div class="row justify-content-end pt-2">
                  <div class="col-lg-10 ">
                     <a class=" " data-bs-toggle="modal" data-bs-target="#addNotice">
                        <ul class="d-flex justify-content-center font-14 text-white 
                           my-1 py-2 px-3 bg-dark fw-500 align-items-center  rounded-pill">
                           <li><i class="fa fa-plus"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> Add Grade </li>
                        </ul>
                     </a>
                     <div class="modal fade" id="addNotice" data-bs-backdrop="static" 
                        tabindex="-1" aria-labelledby="addNotice" aria-hidden="true" >
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="modal-body ">
                                       <div class="mb-2">
                                          <label class="form-label font-14 fw-bold text-purple text-start  mb-0">ADD GRADES</label>
                                          <input type="text" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                       </div>
                                    </div>
                                    <div class="text-center">
                                       <button type="button" class="btn text-uppercase font-12 
                                          text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Submit                                    </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive">
            <table id="ourTeacherTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>GRADE NAME</th>
                  <th>EDIT / DELETE</th>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  @foreach ($grades as $grade)
                  <tr>
                     <td>{{ $grade['gname'] }}</td>
                     <td>
                        <div class="d-flex justify-content-center">
                           <button class="btn btn-success fw-500 font-11 px-2 w-50 rounded-pill text-white"
                              data-bs-toggle="modal" data-bs-target="#publishEditModal-{{ $grade['id'] }}">Update</button>
                           <button class="btn btn-danger fw-500 font-11 px-2 w-50 rounded-pill text-white"
                              data-bs-toggle="modal" data-bs-target="#publishDeleteModal-{{ $grade['id'] }}">Delete</button>
                        </div>   
                     </td>
                  </tr>

                  <!-- Edit Modal -->
                  <div class="modal fade" id="publishEditModal-{{ $grade['id'] }}" tabindex="-1" aria-labelledby="publishEditModalLabel-{{ $grade['id'] }}" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="publishEditModalLabel-{{ $grade['id'] }}">Edit Grade</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="{{ route('grades.update', $grade['id']) }}" method="POST">
                                 @csrf
                                 
                                 <div class="mb-3">
                                    <label for="gname-{{ $grade['id'] }}" class="form-label">Grade Name</label>
                                    <input type="hidden" name="id" value="{{ $grade['id'] }}" required>
                                    <input type="text" class="form-control" id="gname-{{ $grade['id'] }}" name="gname" value="{{ $grade['gname'] }}" required>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="publishDeleteModal-{{ $grade['id'] }}" tabindex="-1" aria-labelledby="publishDeleteModalLabel-{{ $grade['id'] }}" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="publishDeleteModalLabel-{{ $grade['id'] }}">Delete Grade</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <p>Are you sure you want to delete the grade "{{ $grade['gname'] }}"?</p>
                           </div>
                           <div class="modal-footer">
                              <form action="{{ route('grades.destroy', $grade['id']) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <input type="hidden" name="id" value="{{ $grade['id'] }}" required>
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                 <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>

                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

@endsection