@extends('admin.layout')
@section('content')
<script src="{{URL::asset('resources/js/ckeditor/ckeditor.js')}}"></script>		
		<section class="content">
      <div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Create Room</h3>
              <a class="pull-right" href="{{ route('roomlists') }}">
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
                  
                    <form action="{{ route('room.store') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                    <div class="container-fluid">
                      <table class="table table-condensed table-striped table-bordered">
                        <tr>
                          <td>Title</td>
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
                          <td>Price</td>
                          <td>
                            <input type="text" name="price" value="" id="price" class="form-control"  />
                            @if ($errors->has('price'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('price') }}</strong>
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
                          <td>Overview</td>
                          <td><textarea name="overview" cols="40" rows="10" id="overview" class="form-control ckeditor" ></textarea>
                          @if ($errors->has('overview'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('overview') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
								        <tr>
                          <td>Amenities</td>
                          <td><textarea name="amenities" cols="40" rows="10" id="amenities" class="form-control ckeditor" ></textarea>
                          @if ($errors->has('amenities'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('amenities') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
								        <tr>
                          <td>Tariff</td>
                          <td><textarea name="tariff" cols="40" rows="10" id="tariff" class="form-control ckeditor" ></textarea>
                          @if ($errors->has('tariff'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('tariff') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr class="extradocs">
                          <td>Image</td>
                          <td>
                            <input type="file" name="image[]" class="pull-left" id="blogimage" accept='image/*'   />
                            <a href="javascript:void(0);" class="btn btn-info pull-right" id="addrow"><i class="fa fa-plus"></i>Add more image</a>
                            <span class="text-danger">*Upload image size minimum [Width: 651px X Height: 370px]</span>
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
 $('a#addrow').bind('click', function(){
  var inc=$(".docselmnt").length;
	inc=parseInt(inc+1);
  $('<tr id="dcs'+inc+'"><td></td><td><input type="file" class="pull-left" name="image[]" id="blogimage'+inc+'" accept="image/*"/><a href="javascript:void(0);" class="btn btn-danger pull-right" onclick="deletedocs('+inc+')">Remove</a><span class="text-danger">*Upload image size minimum [Width: 651px X Height: 370px]</span></td></tr>').insertAfter($(this).closest('tr'));
});
function deletedocs(evt){
	$("#dcs"+evt).remove();
}

</script>
@endsection 