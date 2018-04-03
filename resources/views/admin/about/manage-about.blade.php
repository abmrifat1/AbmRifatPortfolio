@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>kkkkkii</h2>
                @if($message=Session::get('message'))
                    <h1 class="page-header">{{$message}}</h1>
                @else
                    <h1 class="page-header">Tables</h1>
                @endif
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
        <!-- /.row -->






                        <table class="table table-bordered " id="dataTables-example">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Profession</th>

                                <th>Work Title</th>
                                <th>Experience Title</th>
                                <th>Education Title</th>
                                <th>Achivement Title</th>

                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($abouts as $about)

                                <tr class="odd gradeX">
                                    <td>{{$i++}}</td>
                                    <td>{{$about->name}}</td>
                                    <td>{{$about->profession}}</td>

                                    <td>{{$about->work_title}}</td>
                                    <td>{{$about->experience_title}}</td>
                                    <td>{{$about->education_title}}</td>
                                    <td>{{$about->achivement_title}}</td>



                                    <td>{{$about->publication_status==1 ? 'Published':'Unpublished'}}</td>
                                    <td>
                                        <a href="{{url('/view-about/'.$about->id)}}" class="btn btn-info btn-xs" title="View About">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                        @if($about->publication_status==1)
                                            <a href="{{url('/unpublished-about/'.$about->id) }}" class="btn btn-success btn-xs" title="Pulished About">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/published-about/'.$about->id) }}" class="btn btn-warning btn-xs" title="UnPulished About">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif

                                        <a href="{{url('/edit-about/'.$about->id)}}" class="btn btn-primary btn-xs" title="Edit About">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{url('/delete-about/'.$about->id)}}" class="btn btn-danger btn-xs" onclick="return confirm('are you sure to remove this??')" title="Delete About">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->


                    <!-- /.panel-body -->


@endsection

