@extends('admin.layout')
@section('content')
<script src="{{URL::asset('resources/js/ckeditor/ckeditor.js')}}"></script>			
		<section class="content">
      <div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Create Testimonial</h3>
              <a class="pull-right" href="{{ route('testimonials') }}">
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
                  
                    <form action="{{ route('testimonial.store') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                    <div class="container-fluid">
                      <table class="table table-condensed table-striped table-bordered">
                        <tr>
                          <td>Testimonial Title</td>
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
                          <td>Location</td>
                          <td>
                            <input type="text" name="location" value="" id="location" class="form-control"  />
                            @if ($errors->has('location'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>Auther</td>
                          <td>
                            <input type="text" name="auther" value="" id="auther" class="form-control"  />
                            @if ($errors->has('auther'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('auther') }}</strong>
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
                            <input type="file" name="img" id="testimonialimage" accept='image/*'   />
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
<script>
    CKEDITOR.replace( 'Description' );
</script>
@endsection 