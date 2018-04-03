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


                    <form class="form-horizontal" action="#" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-3">Email </label>
                            <div class="col-sm-9">
                                <input type="email" value="{{$clientSms->email}}" name="email" class="form-control"/>
                                {{ $errors->has('email') ? $errors->first('email') : ' ' }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Subject</label>
                            <div class="col-sm-9">
                                <input type="text" name="subject" class="form-control"/>
                                {{ $errors->has('subject') ? $errors->first('subject') : ' ' }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Message</label>
                            <div class="col-sm-9">
                                <textarea name="sms" class="form-control" style="resize: vertical"></textarea>
                                {{ $errors->has('sms') ? $errors->first('sms') : ' ' }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <input type="submit" name="btn" class="btn btn-success " value="Sent"/>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>



@endsection
