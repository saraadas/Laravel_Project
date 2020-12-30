@extends('dashboard_layouts.admin_main')

@section('body')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Manage Room</h4>
            </div>
            <div class="card-body">
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
                   <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-group">
                                    <select class="custom-select btn btn-primary pull-left" required>
                                      <option value="">Open this select menu</option>
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Description</label>
                                <input type="text" name="desc" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Room Style</label>
                                <input type="text" name="room_style" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="bmd-label-floating">Room Price</label>
                                <input type="text" name="price" class="form-control" value="">
                            </div>
                        </div>
                        <label for="imgage"></label>
                        <input class="btn btn-primary col-md-6" name="img" type="file" id="img"  accept="image/*">

                        <label for="imgage"></label>
                        <input class="btn btn-primary col-md-6" name="img1" type="file" id="img"  accept="image/*">

                        <label for="imgage"></label>
                        <input class="btn btn-primary col-md-6" name="img2" type="file" id="img"  accept="image/*">

                        <label for="imgage"></label>
                        <input class="btn btn-primary col-md-6" name="img3" type="file" id="img"  accept="image/*">

                        <label for="imgage"></label>
                        <input class="btn btn-primary col-md-6" name="img4" type="file" id="img"  accept="image/*">

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
              <h4 class="card-title ">Room Table</h4>
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
