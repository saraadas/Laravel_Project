@extends('dashboard_layouts.admin_main')

@section('body')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Manage Admin</h4>
            </div>
            <div class="card-body">
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Full Name</label>
                                <input type="text" name="fullname" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Email address</label>
                                <input type="email" name="email" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Password</label>
                                <input type="password" name="password" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" name="submit">Add</button>
                    <div class="clearfix"></div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>




  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Admin Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Full Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Password
                    </th>
                    <th>
                      Edit
                    </th>
                    <th>
                      Delete
                    </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        Dakota Rice
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        <a class="text-primary" href="#"><span class="material-icons">
                            edit
                            </span></a>
                      </td>
                      <td class="text-primary">
                        <a class="text-danger" href="#"><span class="material-icons">
                            delete
                            </span></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>


@endsection
