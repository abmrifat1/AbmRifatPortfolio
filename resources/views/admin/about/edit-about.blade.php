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

                    <h3 class="panel-title text-center text-success">Edit About Info</h3>
                </div>
                <div class="panel-body">


                    <form role="form" action="{{url('/update-about')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" name="editAboutForm">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name" value="{{$aboutInfo->name}}">
                                <input type="hidden" name="about_id" class="form-control" id="inputEmail3" placeholder="Name" value="{{$aboutInfo->id}}">
                                <span style="color: red">{{ $errors->has('name') ?  $errors->first('name') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Profession</label>
                            <div class="col-sm-9">
                                <input type="text" name="profession" class="form-control" id="inputEmail3" placeholder="profession" value="{{$aboutInfo->profession}}">
                                <span style="color: red">{{ $errors->has('profession') ?  $errors->first('profession') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" accept="image/*"/>
                                <img src="{{asset($aboutInfo->image)}}" alt="" height="80" width="80"/>
                                <span style="color: red">{{ $errors->has('image') ?  $errors->first('image') : ' '}}</span>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Desccription</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea"  name="description" rows="10">{{$aboutInfo->description}}</textarea>
                                <span style="color: red">{{ $errors->has('description') ?  $errors->first('description') : ' '}}</span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Work Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="work_title" value="{{$aboutInfo->work_title}}" class="form-control" id="inputEmail3" placeholder="">
                                <span style="color: red">{{ $errors->has('work_title') ?  $errors->first('work_title') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Work Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" name="work_description" rows="10">{{$aboutInfo->work_description}}</textarea>
                                <span style="color: red">{{ $errors->has('work_description') ?  $errors->first('work_description') : ' '}}</span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Experience Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="experience_title" value="{{$aboutInfo->experience_title}}" class="form-control" id="inputEmail3" placeholder="profession">
                                <span style="color: red">{{ $errors->has('experience_title') ?  $errors->first('experience_title') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Experience Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" name="experience_description" rows="10">{{$aboutInfo->experience_description}}</textarea>
                                <span style="color: red">{{ $errors->has('experience_description') ?  $errors->first('experience_description') : ' '}}</span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Education Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="education_title" value="{{$aboutInfo->education_title}}" class="form-control" id="inputEmail3" placeholder="profession">
                                <span style="color: red">{{ $errors->has('education_title') ?  $errors->first('education_title') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Education Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" name="education_description" rows="10">{{$aboutInfo->education_description}}</textarea>
                                <span style="color: red">{{ $errors->has('education_description') ?  $errors->first('education_description') : ' '}}</span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Achivment Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="achivement_title" value="{{$aboutInfo->achivement_title}}" class="form-control" id="inputEmail3" placeholder="profession">
                                <span style="color: red">{{ $errors->has('achivement_title') ?  $errors->first('achivement_title') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Achivment Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" name="achivement_description" rows="10">{{$aboutInfo->achivement_description}}</textarea>
                                <span style="color: red">{{ $errors->has('achivement_description') ?  $errors->first('achivement_description') : ' '}}</span>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" value="{{$aboutInfo->address}}" class="form-control" id="inputEmail3" placeholder="profession">
                                <span style="color: red">{{ $errors->has('address') ?  $errors->first('address') : ' '}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="number" name="phone_number" value="{{$aboutInfo->phone_number}}" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                <span style="color: red">{{ $errors->has('phone_number') ?  $errors->first('phone_number') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Web Site</label>
                            <div class="col-sm-9">
                                <input type="text" name="web_site" value="{{$aboutInfo->web_site}}" class="form-control" id="inputEmail3" placeholder="profession">
                                <span style="color: red">{{ $errors->has('web_site') ?  $errors->first('web_site') : ' '}}</span>
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
                                <button type="submit" name="btn" class="btn btn-success btn-block" value="Save About Info">Update Product Info</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>


<script>
    document.forms['editAboutForm'].elements['publication_status'].value='{{$aboutInfo->publication_status}}';

</script>

@endsection
