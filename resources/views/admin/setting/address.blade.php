@extends('admin.layout')
@section('content')
<script src="{{URL::asset('resources/js/ckeditor/ckeditor.js')}}"></script>	
		<section class="content">
      <div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Address</h3>
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
                  
                    <form action="{{ route('address.update',$address->id) }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('PUT')
                    <div class="container-fluid">
                      <table class="table table-condensed table-striped table-bordered">
                        
                        <tr>
                          <td>Email Address</td>
                          <td>
                            <input type="text" name="email" value="{{$address->email}}" id="email" class="form-control"  />
                            @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>Phone Number</td>
                          <td>
                            <input type="text" name="phone" value="{{$address->phone}}" id="phone" class="form-control"  />
                            @if ($errors->has('phone'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>Address</td>
                          <td>
                            <textarea name="address" id="address" class="form-control">{{$address->address}}</textarea>
                            @if ($errors->has('address'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>State</td>
                          <td>
                            <input type="text" name="state" value="{{$address->state}}" id="state" class="form-control"  />
                            @if ($errors->has('state'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>Pin</td>
                          <td>
                            <input type="text" name="pin" value="{{$address->pin}}" id="phone" class="form-control"  />
                            @if ($errors->has('pin'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('pin') }}</strong>
                            </span>
                            @endif
                          </td>                          
                        </tr>
                        <tr>
                          <td>iFrame</td>
                          <td>
                            <input type="text" name="iFrame" value="{{$address->iFrame}}" id="iFrame" class="form-control"  />
                            @if ($errors->has('iFrame'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('iFrame') }}</strong>
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
@endsection 