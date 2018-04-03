@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Client Message</h2>
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

            <th>Subject</th>
            <th>Message</th>

            <th>Status</th>
            <th>Time</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1;?>
        @foreach($sms as $sms)

            <tr class="odd gradeX">
                <td>{{$i++}}</td>
                <td>{{$sms->name}}</td>
                <td>{{$sms->subject}}</td>

                <td>{{$sms->sms}}</td>
                <td>{{$sms->status}}</td>
                <td>{{$sms->created_at}}</td>



                <td>


                    <a href="{{url('/reply-sms/'.$sms->id)}}" class="btn btn-primary btn-xs" title="Reply Message">
                        <span class="glyphicon glyphicon-align-right"></span>
                    </a>
                    <a href="{{url('/delete-sms/'.$sms->id)}}" class="btn btn-danger btn-xs" onclick="return confirm('are you sure to remove this??')" title="Delate">
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

