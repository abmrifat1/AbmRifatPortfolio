@extends('admin.master')
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-8 col-sm-offset-2">

                <div class="panel-heading">



                    <div class="col-lg-12">
                        <h1 class="text-success text-center">{{Session::get('message')}}</h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <h3 class="panel-title text-center text-success">Edit Client Info</h3>
                </div>
                <div class="panel-body">


                    <form role="form" action="{{url('/update-client')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" name="editClientForm">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name" value="{{$clientInfo->name}}">
                                <input type="hidden" name="client_id" class="form-control" id="inputEmail3" placeholder="Name" value="{{$clientInfo->id}}">
                                <span style="color: red">{{ $errors->has('name') ?  $errors->first('name') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Designation</label>
                            <div class="col-sm-9">
                                <input type="text" name="designation" class="form-control" id="inputEmail3" placeholder="profession" value="{{$clientInfo->designation}}">
                                <span style="color: red">{{ $errors->has('designation') ?  $errors->first('designation') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Desccription About Me</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea"  name="description" rows="10">{{$clientInfo->description}}</textarea>
                                <span style="color: red">{{ $errors->has('description') ?  $errors->first('description') : ' '}}</span>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" accept="image/*"/>
                                <img src="{{asset($clientInfo->image)}}" alt="" height="80" width="80"/>
                                <span style="color: red">{{ $errors->has('image') ?  $errors->first('image') : ' '}}</span>

                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Contact Link</label>
                            <div class="col-sm-9">
                                <input type="text" name="cc_link" value="{{$clientInfo->cc_link}}" class="form-control" id="inputEmail3" placeholder="">
                                <span style="color: red">{{ $errors->has('cc_link') ?  $errors->first('cc_link') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Contact Icon</label>
                            <div class="col-sm-9">
                                <input type="text" name="cc_icon" value="{{$clientInfo->cc_icon}}" class="form-control" id="inputEmail3" placeholder="">
                                <span style="color: red">{{ $errors->has('cc_icon') ?  $errors->first('cc_icon') : ' '}}</span>
                            </div>
                        </div>










                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <select name="publication_status" class="form-control">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="btn" class="btn btn-success btn-block" value="Update Client Info">Update Client Info</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>


    <script>
        document.forms['editClientForm'].elements['publication_status'].value='{{$clientInfo->publication_status}}';

    </script>

@endsection
