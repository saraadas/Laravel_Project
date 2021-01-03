@extends('dashboard_layouts.admin_main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">Manage Room</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Create Room</h3>
                    </div>
                    <hr>
                    <form action="" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Room Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" name="room_name" value="{{ old('room_name') }}" type="text" class="form-control cc-name valid">
                                @error('room_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Place Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="select_place" id="select" class="form-control">
                                    @foreach($places as $place)
                                        <option value="{{$place->id}}">{{$place->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea  id="textarea-input" name="desc" rows="9" class="form-control">{{ old('desc') }}</textarea>
                                @error('desc')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Room Style</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" value="{{ old('style') }}" name="style" type="text" class="form-control cc-name valid">
                                @error('style')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Room Capacity</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" value="{{ old('capacity') }}" name="capacity" type="text" class="form-control cc-name valid">
                                @error('capacity')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Room Price</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name"  value="{{ old('price') }}" name="price" type="text"
                                       class="form-control cc-name valid">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">Uploaded Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="file-input" name="image" class="form-control-file">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Create</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <div class="card-header text-center bg-light"><strong>Rooms Table</strong></div>
                        <table class="table table-borderless table-data3">
                            <thead class="bg-info">
                            <tr>
                                <th>ID</th>
                                <th>Place Name</th>
                                <th>Room Name</th>
                                <th>Style</th>
{{--                                <th>Description</th>--}}
                                <th >Capacity</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($room as $rooms)
                                <tr>
                                    <td>{{$rooms->id}}</td>
                                    <td>{{$rooms->getplacename()}}</td>
                                    <td>{{$rooms->room_name}}</td>
                                    <td>{{$rooms->style}}</td>
{{--                                    <td>{{$rooms->desc}}</td>--}}
                                    <td>{{$rooms->capacity}}</td>
                                    <td>{{$rooms->price}}</td>
                                    <td><img src="{{asset("uploads/images/$rooms->image")}}"</td>
                                    <td><a class="text-primary" href="/dashboard/manage_room/{{$rooms->id}}/edit"><span
                                                class="btn btn-primary">edit</span></a></td>
                                    <td class="text-primary"><a class="text-danger" href="/dashboard/manage_room/{{$rooms->id}}"><span
                                                class="btn btn-danger">delete</span></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
@endsection
