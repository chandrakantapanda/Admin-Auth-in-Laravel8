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
                    <h3 class="box-title">Testimonial</h3>
                    <a class="pull-right" href="{{ route('testimonial.create') }}">
                        <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add Testimonial</button>
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
                        @foreach($Testimonials as $Testimonial)
							<tr>
								<td>{{$Testimonial->id}}</td>
								<td>{{$Testimonial->title}}</td>
								<td width="5%"><img src="{{ asset('public/uploads/testimonial/'.$Testimonial->picture) }}"  width="100%"></td>
								<td>{{$Testimonial->createdon}}</td>
								<td><a class="text-success btn btn-success" href="{{route('testimonial.edit', ['id'=>$Testimonial->id ])}}"><i class="fa fa-edit"></i>Edit</a>
								<button type="button" class="btn btn-sm delblog btn-danger" attrid="{{$Testimonial->id}}">
										<i class="fa fa-trash-o"></i>Delete</button>
								</td>
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