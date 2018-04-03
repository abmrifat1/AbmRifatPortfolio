@extends('admin.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @if($message=Session::get('message'))
                    <h1 class="page-header">{{$message}}</h1>
                @else
                    <h1 class="page-header">Tables</h1>
                @endif
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">


                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <tr>
                                <th>About ID</th>
                                <td>{{$about->id}}</td>
                            </tr>
                            <tr>

                                <th>Name</th>
                                <td>{{$about->name}}</td>
                            </tr>
                            <tr>
                                <th>Profession</th>
                                <td>{{$about->profession}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src="{{asset($about->image)}}" height="80" width="80"/></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$about->description}}</td>
                            </tr>
                            <tr>
                                <th>Work Title</th>
                                <td>{{$about->work_title}}</td>
                            </tr>
                            <tr>
                                <th>Work Description</th>
                                <td>{{$about->work_description}}</td>
                            </tr>
                            <tr>
                                <th>Experience Title</th>
                                <td>{{$about->experience_title}}</td>
                            </tr>
                            <tr>
                                <th>Experience Description</th>
                                <td>{{$about->experience_description}}</td>
                            </tr>
                            <tr>
                                <th>Education Title</th>
                                <td>{{$about->education_title}}</td>
                            </tr>
                            <tr>
                                <th>Education Description</th>
                                <td>{{$about->education_description}}</td>
                            </tr>
                            <tr>
                                <th>Achivement Title</th>
                                <td>{{$about->achivement_title}}</td>
                            </tr>
                            <tr>
                                <th>Achivement Description</th>
                                <td>{{$about->achivement_description}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$about->address}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$about->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Web Site</th>
                                <td>{{$about->web_site}}</td>
                            </tr>

                            <tr>
                                <th>Publication Status</th>
                                <td>{{$about->publication_status}}</td>
                            </tr>


                        </table>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>


@endsection

