@extends('admin.layout')
@section('content')
<style>			
#maindiv{width:960px;margin:10px auto;padding:10px;font-family:'Droid Sans',sans-serif;}
#formdiv{width:500px;float:left;text-align:center}
.upload{background-color:red;border:1px solid red;color:#fff;border-radius:5px;			padding:10px;text-shadow:1px 1px 0 green;box-shadow:2px 2px 15px rgba(0,0,0,.75);}
.upload:hover{cursor:pointer;background:#c20b0b;border:1px solid #c20b0b;box-shadow:0 0 5px rgba(0,0,0,.75);}
#file{color:green;padding:5px;border:1px dashed #123456;background-color:#f9ffe5}
#upload{margin-top:10px}
#noerror{color:green;text-align:left;}
#error{color:red;text-align:left;}
#img{width:17px;border:none;height:17px;margin-left:-20px;margin-bottom:91px;}
.abcd{text-align:center;}
.abcd img{height:200px;width:200px;padding:5px;border:1px solid #e8debd;}
b{color:red}
.delbtn ,.delgalleryimg{border-radius:50%;color:#fff;background-color:#dc3545;border-color:#dc3545;}
.delgalleryimg{left:80%;bottom: 90px}
</style>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Add Gallery</h3>
				<a class="pull-right" href="{{ route('admindashboard') }}">
					<button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
				</a>
				<div class="clearfix"></div>
			</div>
				<div class="box-body">
					<div class="row">
						<div class="col-lg-12">
							<form enctype="multipart/form-data" action="{{ route('gallery.store') }}" method="post">
								@csrf
								<div id="filediv" class="col-12 col-md-3 col-sm-4 col-xs-12">
									<input name="img" type="file" id="file" accept='image/*'/>
									@if ($errors->has('img'))
									<span class="text-danger">
										<strong>{{ $errors->first('img') }}</strong>
									</span>
									@endif
								</div>
								<div class="col-sm-12">
									<input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>
								</div>
							</form>
						</div>
					</div><br><br>
					<div class="row">
						<div class="col-lg-12 abcd position-absolute">							
							<?php $k=0; ?>
							@foreach($galleies as $gallery)
							<?php $k++; ?>
							<div class="col-12 col-md-3 col-sm-4 col-xs-12" id="dcs{{$k}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
								<button type="button" class="btn btn-sm delmainimg position-relative alert-danger" attrid="{{$gallery->id}}" onclick="deletetbldocs('{{$gallery->id}}','{{$k}}')">
								<i class="fa fa-trash-o"></i></button>
								<img src="{{ asset('public/uploads/gallery/'.$gallery->file_name) }}">
							</div><!-- <div class="col-12 col-md-3 col-sm--->
							@endforeach

						</div>
					</div>
				
				</div>
			</div>
            
        </div><!-- /.col -->
    </div><!-- /.row -->
</section>
@endsection
<script>
	function deletetbldocs(id,evt){
		var cnf=confirm("Are you sure ?");
		if(cnf==true){
		var _token=$("#_token").val();			
			$.ajax({
				url: "{{ route('gallery.delete') }}",
				dataType :'json',
				type:'POST',
				data:{_token:_token,id:id},
				success: function(result){
					console.log(result,'result');
					if(result==1){
						$("#dcs"+evt).remove();
						alert("Deleted Successfully!");
					}
				}
			});
		} 
	}
</script>