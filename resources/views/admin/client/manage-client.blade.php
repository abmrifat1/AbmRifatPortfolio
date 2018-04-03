@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Client Info Table</h2>
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
            <th>Designation</th>
            <th>Image</th>

            <th>Description About Me</th>

            <th>Contrat Link</th>
            <th>Contact Icon</th>

            <th>Publication Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1;?>
        @foreach($clients as $client)

            <tr class="odd gradeX">
                <td>{{$i++}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->designation}}</td>

                <td><img src="{{asset($client->image)}}" height="80" width="80"/></td>
                <td>{{$client->description}}</td>
                <td>{{$client->cc_link}}</td>
                <td>{{$client->cc_icon}}</td>




                <td>{{$client->publication_status==1 ? 'Published':'Unpublished'}}</td>
                <td>

                    @if($client->publication_status==1)
                        <a href="{{url('/unpublished-client/'.$client->id) }}" class="btn btn-success btn-xs" title="Pulished Client Info">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                    @else
                        <a href="{{url('/published-client/'.$client->id) }}" class="btn btn-warning btn-xs" title="UnPulished Client Info">
                            <span class="glyphicon glyphicon-arrow-down"></span>
                        </a>
                    @endif

                    <a href="{{url('/edit-client/'.$client->id)}}" class="btn btn-primary btn-xs" title="Edit Client Info">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{url('/delete-client/'.$client->id)}}" class="btn btn-danger btn-xs" onclick="return confirm('are you sure to remove this??')" title="Delete Client Info">
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

