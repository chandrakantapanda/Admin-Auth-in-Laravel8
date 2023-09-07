@extends('admin.layout')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
             @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Contacts</h3>
                    <a class="pull-right" href="{{ route('admindashboard') }}">
                        <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                    </a>
                    <div class="clearfix"></div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
							<tr>
								<td>{{$contact->id}}</td>
								<td>{{$contact->name}}</td>
								<td>{{$contact->email}}</td>
                                <td>{{$contact->subject}}</td>
								<td><a class="text-success btn btn-success" href="{{route('contact', ['id'=>$contact->id ])}}"><i class="fa fa-edit"></i>View</a>
								
							</tr>
                        @endforeach	
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection