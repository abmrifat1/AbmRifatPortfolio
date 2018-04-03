@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>View Table</h2>
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
            <th>Working Process Title</th>
            <th>Working Process Icon</th>

            <th>Lastest Working Image</th>

            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1;?>

        @foreach($works as $work)

            <tr class="odd gradeX">
                <td>{{$i++}}</td>
                <td>{{$work->wp_title}}</td>
                <td>{{$work->wp_icon}}</td>
                <td><img src="{{asset($work->lw_image)}}" height="80" width="80"/></td>




                <td>{{$work->publication_status==1 ? 'Published':'Unpublished'}}</td>
                <td>

                    @if($work->publication_status==1)
                        <a href="{{url('/unpublished-work/'.$work->id) }}" class="btn btn-success btn-xs" title="Pulished Work">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                    @else
                        <a href="{{url('/published-work/'.$work->id) }}" class="btn btn-warning btn-xs" title="UnPulished Work">
                            <span class="glyphicon glyphicon-arrow-down"></span>
                        </a>
                    @endif

                    <a href="{{url('/edit-work/'.$work->id)}}" class="btn btn-primary btn-xs" title="Edit Work">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{url('/delete-work/'.$work->id)}}" class="btn btn-danger btn-xs" onclick="return confirm('are you sure to remove this??')" title="Delete Work">
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

