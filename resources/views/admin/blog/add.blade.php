@extends('admin.layout')
@section('content')
<script src="{{URL::asset('resources/js/ckeditor/ckeditor.js')}}"></script>				
		<section class="content">
      <div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Create Blog</h3>
              <a class="pull-right" href="{{ route('bloglists') }}">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
              </a>
              <div class="clearfix"></div>
            </div>
					<!-- /.box-header -->
					<div class="box-body">
            <div class="row">	
						  <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                  @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                    <p>{{ $message }}</p>
                  </div>
                  @endif
                  
                    <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                    <div class="container-fluid">
                      <table class="table table-condensed table-striped table-bordered">
                        <tr>
                          <td>Blog Title</td>
                          <td>
                            <input type="text" name="title" value="" id="Brand" class="form-control"  />
                            @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
								        <tr>
                          <td>Description</td>
                          <td><textarea name="description" cols="40" rows="10" id="Description" class="form-control ckeditor" ></textarea>
                          @if ($errors->has('description'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>Image</td>
                          <td>
                            <input type="file" name="img" id="blogimage" accept='image/*'   />
                            @if ($errors->has('img'))
                              <span class="text-danger">{{ $errors->first('img') }}</span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td></td>
                          <td>
                            <input type="submit" name="save" value="SAVE"  class="btn btn-primary dropdown-toggle" />
                          </td>
                        </tr>
							        </table> 
                    </div>
						      </form>	
                </div>
				      </div>
			      </div>
		      </div>	
	      </div>
      </div>
    </div>
	</div>
</section>
@endsection 