@extends('dashboard_layouts.admin_main')

@section('body')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Manage Farm</h4>
            </div>
            <div class="card-body">
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Farm Name</label>
                                <input type="text" name="farm_name" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Farm Description</label>
                                <input type="text" name="farm_desc" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Farm Capacity</label>
                                <input type="text" name="farm_capacity" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Farm Price</label>
                                <input type="text" name="farm_price" class="form-control" value="">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Farm Location</label>
                                <input type="text" name="farm_location" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <label for="imgage"></label>
                    <input class="btn btn-primary col-md-6" name="img" type="file" id="img" accept="image/*">

                    <label for="imgage"></label>
                    <input class="btn btn-primary col-md-6" name="img1" type="file" id="img" accept="image/*">

                    <label for="imgage"></label>
                    <input class="btn btn-primary col-md-6" name="img2" type="file" id="img" accept="image/*">

                    <label for="imgage"></label>
                    <input class="btn btn-primary col-md-6" name="img3" type="file" id="img" accept="image/*">

                    <label for="imgage"></label>
                    <input class="btn btn-primary col-md-6" name="img4" type="file" id="img"  accept="image/*">

                    <label for="imgage"></label>
                    <input class="btn btn-primary col-md-6" name="img5" type="file" id="img" accept="image/*">
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
              <h4 class="card-title ">Farm Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Country
                    </th>
                    <th>
                      City
                    </th>
                    <th>
                      Salary
                    </th>
                    <th>
                      City
                    </th>
                    <th>
                      Salary
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
                      <td class="text-primary">
                        $36,738
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td class="text-primary">
                        $36,738
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
