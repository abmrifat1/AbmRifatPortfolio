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

                    <h3 class="panel-title text-center text-success">Add Work</h3>
                </div>
                <div class="panel-body">


                    <form role="form" action="{{url('/new-work')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Working Process Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="wp_title" class="form-control" id="inputEmail3" placeholder="Working Process Title">
                                <span style="color: red">{{ $errors->has('wp_title') ?  $errors->first('wp_title') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Working Process Icon</label>
                            <div class="col-sm-9">
                                <input type="text" name="wp_icon" class="form-control" id="inputEmail3" placeholder="Working Process Icon">
                                <span style="color: red">{{ $errors->has('wp_icon') ?  $errors->first('wp_icon') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Latest Working Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="lw_image" accept="image/*"/>
                                <span style="color: red">{{ $errors->has('lw_image') ?  $errors->first('lw_image') : ' '}}</span>

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
                                <button type="submit" name="btn" class="btn btn-success btn-block" value="Save Work Info">Save Work Info</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>



@endsection
