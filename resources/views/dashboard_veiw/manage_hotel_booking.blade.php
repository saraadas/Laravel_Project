@extends('dashboard_layouts.admin_main')

@section('body')




  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Hotel Booking Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Time From
                    </th>
                    <th>
                      Time To
                    </th>
                    <th>
                      Additional Info.
                    </th>
                    <th>
                      User ID
                    </th>
                    <th>
                      Room ID
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


@endsection
