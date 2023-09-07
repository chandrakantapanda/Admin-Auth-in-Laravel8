@extends('admin.layout')
@section('content')
<script src="{{URL::asset('resources/js/ckeditor/ckeditor.js')}}"></script>	
		<section class="content">
      <div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Restaurant</h3>
              <a class="pull-right" href="{{ route('admindashboard') }}">
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
                  
                  <form action="{{ route('meal.update',$restaurant->id) }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    @method('PUT')
                    <div class="container-fluid">
                      <table class="table table-condensed table-striped table-bordered">
                        
                        <tr>
                          <td>Breakfast</td>
                          <td>
                            <textarea name="breakfast" id="breakfast" class="form-control ckeditor">{{$restaurant->breakfast}}</textarea>                            
                            @if ($errors->has('breakfast'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('breakfast') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>Lunch</td>
                          <td>
                            <textarea name="lunch" id="lunch" class="form-control ckeditor">{{$restaurant->lunch}}</textarea>                            
                            @if ($errors->has('lunch'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('lunch') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>Dinner</td>
                          <td>
                            <textarea name="dinner" id="dinner" class="form-control ckeditor">{{$restaurant->dinner}}</textarea>                            
                            @if ($errors->has('dinner'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('dinner') }}</strong>
                            </span>
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
    CKEDITOR.config.allowedContent = true;
    
</script>

</script>
@endsection 