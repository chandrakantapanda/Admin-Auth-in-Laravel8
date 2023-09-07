@extends('admin.layout')
@section('content')
<script src="{{URL::asset('resources/js/ckeditor/ckeditor.js')}}"></script>		
		<section class="content">
      <div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Create Room</h3>
              <a class="pull-right" href="{{ route('rooms') }}">
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
                  
                    <form action="{{ route('room.update',$product->id) }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('PUT')
                    <div class="container-fluid">
                      <table class="table table-condensed table-striped table-bordered">
                        <tr>
                          <td>Title</td>
                          <td>
                            <input type="text" name="title" value="{{$product->title}}" id="Brand" class="form-control"  />
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
                            <input type="text" name="price" value="{{$product->price}}" id="price" class="form-control"  />
                            @if ($errors->has('price'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
								        <tr>
                          <td>Description</td>
                          <td><textarea name="description" cols="40" rows="10" id="Description" class="form-control ckeditor">{{$product->description}}</textarea>
                          @if ($errors->has('description'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
								        <tr>
                          <td>Overview</td>
                          <td><textarea name="overview" cols="40" rows="10" id="overview" class="form-control ckeditor">{{$product->overview}}</textarea>
                          @if ($errors->has('overview'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('overview') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
								        <tr>
                          <td>Amenities</td>
                          <td><textarea name="amenities" cols="40" rows="10" id="amenities" class="form-control ckeditor">{{$product->amenities}}</textarea>
                          @if ($errors->has('amenities'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('amenities') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
								        <tr>
                          <td>Tariff</td>
                          <td><textarea name="tariff" cols="40" rows="10" id="tariff" class="form-control ckeditor">{{$product->tariff}}</textarea>
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
                            <a href="javascript:void(0);" class="btn btn-info pull-right" id="addrow">Add more image</a>
                            @if ($errors->has('img'))
                              <span class="text-danger">{{ $errors->first('img') }}</span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td></td>
                          <td>                          
                            <div class="col-md-12">
                              <div class="form-group">
                                <!-- <label>Product Image</label> -->
                                @foreach ($productimages as $key => $pimages)
                                <div class="imagelocation{{ $pimages->id }} col-12 col-md-3 col-sm-3 col-xs-12 imgloc">
                                  <img src="{{ asset('public/uploads/product/'.$pimages->image) }}" width="100%">                                  
                                  @if($pimages->isprimary!='yes') 
                                  <a href="javascript:void(0);" class="badge btn-danger delbtn" onclick="deleteimage('{{ $pimages->id }}')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                  @endif
                                </div>
                                @endforeach 

                              </div>
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
<script>
 $('a#addrow').bind('click', function(){
  var inc=$(".docselmnt").length;
	inc=parseInt(inc+1);
  $('<tr id="dcs'+inc+'"><td></td><td><input type="file" class="pull-left" name="image[]" id="blogimage'+inc+'" accept="image/*"/><a href="javascript:void(0);" class="btn btn-danger pull-right" onclick="deletedocs('+inc+')">Remove</a></td></tr>').insertAfter($(this).closest('tr'));
});
function deletedocs(evt){
	$("#dcs"+evt).remove();
}
function deleteimage(image_id){
	var answer = confirm ("Are you sure you want to delete from this image?");
   var _token=$("input[name='_token']").val();
	if(answer){
		$.ajax({
			type: "POST",
			url: "{{ route('room.delete') }}",
			data: {_token:_token,'image_id':image_id},
			success: function (response) {
				if (response == 1) {
					$(".imagelocation"+image_id).remove(".imagelocation"+image_id);
					alert('The Product image has been removed');
				};                  
			}
		});
	}
}
</script>
@endsection 