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
                    <h3 class="box-title">Rooms</h3>
                    <a class="pull-right" href="{{ route('room.create') }}">
                        <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add Room</button>
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
                        @foreach($products as $product)
							<tr>
								<td>{{$product->id}}</td>
								<td>{{$product->title}}</td>
								<td width="5%">
                                    @foreach($product->images as $pimages) 
                                        <img src="{{ asset('public/uploads/product/'.$pimages->image) }}"  width="100%">
                                     @endforeach
                                </td>
								<td>{{$product->created_at}}</td>
								<td><a class="text-success btn btn-success" href="{{route('room.edit', ['id'=>$product->id ])}}"><i class="fa fa-edit"></i>Edit</a>
								<button type="button" class="btn btn-sm delblog btn-danger" attrid="{{$product->id}}">
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