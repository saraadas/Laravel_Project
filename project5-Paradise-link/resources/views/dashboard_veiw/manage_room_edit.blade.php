@extends('dashboard_layouts.admin_main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">Manage Room</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Edit Room</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/manage_room/{{$room->id}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <img class="rounded mx-auto d-block" width="200" height="200"
                                 src="{{asset("uploads/images/$room->image")}}"></div>
                        <br>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="cc-name" class="control-label mb-1">Room Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="cc-name" name="room_name" value="{{$room->room_name}}" type="text" class="form-control cc-name valid">
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
                                <textarea  id="textarea-input" name="desc" rows="9"  class="form-control">{{$room->desc}}</textarea>
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
                                <input id="cc-name" value="{{$room->style}}" name="style" type="text" class="form-control cc-name valid">
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
                                <input id="cc-name" value="{{$room->capacity}}" name="capacity" type="text" class="form-control cc-name valid">
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
                                <input id="cc-name"  value="{{$room->price}}" name="price" type="text"
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
                                <span id="payment-button-amount">Update</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
