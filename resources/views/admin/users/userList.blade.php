@include('layouts.header')
@include('layouts.sidebar')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>User Type</th>
                      <th>Mobile</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($users as $key => $user)
                    <tr>
                      <td>
                           @if($user->username)
                                {{ $user->username }}
                            @endif
                      </td>
                      <td>
                            @if($user->email)
                                {{ $user->email }}
                            @endif
                      </td>
                      <td> 
                          @if($user->user_type)
                                {{ $user->user_type }}
                            @endif
                      </td>
                      <td>
                            @if($user->mobile_number)
                                {{ $user->mobile_number }}
                            @endif
                      </td>
                      <td></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>



</div>


@include("layouts.footer")