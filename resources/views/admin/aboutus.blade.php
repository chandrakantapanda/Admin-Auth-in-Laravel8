@extends('admin.layout')
@section('content')
<script src="{{URL::asset('resources/js/ckeditor/ckeditor.js')}}"></script>	
		<section class="content">
      <div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Create Blog</h3>
              <a class="pull-right" href="{{ route('blogs') }}">
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
                  
                    <form action="{{ route('aboutus.update',$about->id) }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('PUT')
                    <div class="container-fluid">
                      <table class="table table-condensed table-striped table-bordered">
                        
								        <tr>
                          <td>About Description</td>
                          <td><textarea name="about" cols="40" rows="10" id="about" class="form-control ckeditor" >{{ $about->about }}</textarea>
                          @if ($errors->has('about'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('about') }}</strong>
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
                            <div class="col-sm-3">
                              <img src="{{ asset('public/uploads/about/'.$about->aboutimg) }}" style="width: 120px;"> 
                              <input type="hidden" name="orimg" value="{{ $about->aboutimg }}">
                            </div>
                          </td>                          
                        </tr>
                        <tr>
                          <td>Second Title</td>
                          <td>
                            <input type="text" name="sectitle" value="{{$about->sectitle}}" id="sectitle" class="form-control"  />
                            @if ($errors->has('sectitle'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('sectitle') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr> 
                        <tr>
                          <td>Second Description</td>
                          <td><textarea name="secdescription" cols="40" rows="10" id="about" class="form-control ckeditor" >{{ $about->secdescription }}</textarea>
                          @if ($errors->has('secdescription'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('secdescription') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>Image</td>
                          <td>
                            <input type="file" name="sec_img" id="blogimage" accept='image/*'   />
                            @if ($errors->has('sec_img'))
                              <span class="text-danger">{{ $errors->first('sec_img') }}</span>
                            @endif
                            <div class="col-sm-3">
                              <img src="{{ asset('public/uploads/about/'.$about->sec_img) }}" style="width: 120px;"> 
                              <input type="hidden" name="orsec_img" value="{{ $about->sec_img }}">
                            </div>
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