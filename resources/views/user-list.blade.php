@extends('/layouts.main')
@section('main-container')
<div class="content-page">
<div class="container-fluid">

   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">User List</h4>
               </div>
            </div>
          
            <div class="card-body">
               <div class="table-responsive">
                  <div class="row justify-content-between">
                     <div class="col-sm-6 col-md-6">
                        <div id="user_list_datatable_info" class="dataTables_filter">
                           <form class="mr-3 position-relative">
                              <div class="form-group mb-0">
                                 <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search"
                                    aria-controls="user-list-table">
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6">
                        <div class="user-list-files d-flex">
                           <a class="bg-primary" href="javascript:void();">
                              Print
                           </a>
                           <a class="bg-primary" href="javascript:void();">
                              Excel
                           </a>
                           <a class="bg-primary" href="javascript:void();">
                              Pdf
                           </a>
                        </div>
                     </div>
                  </div>
                  <table id="user-list-table" class="table table-striped dataTable mt-4" role="grid"
                     aria-describedby="user-list-page-info">
                     <thead>
                        <tr class="ligth">
                           <th>Profile</th>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Country</th>
                           <th>Status</th>
                           <th>Company</th>
                           <th>Join Date</th>
                           <th style="min-width: 100px">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($users as $user)
                        <tr>
                           <td class="text-center"><img class="rounded img-fluid avatar-40"
                                 src="../assets/images/user/01.jpg" alt="profile"></td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->lastname}}</td>
                           <td>{{$user->email}}</td>
                           <td>{{$user->country}}</td>   
                         <td><span class="badge bg-primary">Active</span></td>
                         <td>{{$user->companyname}}</td>
                           <td>2019/12/01</td>
                           <td>
                              <div class="flex align-items-center list-user-action">
                                 <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Add" href="{{route('user-add')}}"><i class="ri-user-add-line mr-0">
                                    </i>
                                 </a>
                                 <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit" href="user-edit/{{$user->id}}"><i class="ri-pencil-line mr-0"></i>
                                 </a> 
                                 <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                     data-original-title="Delete" href="delete/{{$user->id}}"><i class="ri-delete-bin-line mr-0"></i>
                                    </a>
                              </div> 
                           </td>
                        </tr>
                       
                        @endforeach
                       

                        @endsection
                        
                       