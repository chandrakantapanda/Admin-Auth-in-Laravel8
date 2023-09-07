@extends('admin.layout')
@section('content')
<script src="{{URL::asset('resources/js/ckeditor/ckeditor.js')}}"></script>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">


              <div class="box-body">
                <form enctype="multipart/form-data" action="{{route('subbanner.store')}}" method="post">
                  @csrf
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Breadcum Banner <span
                                    style="color: red;">*</span></label>
                            <div class="col-sm-2">
                                <select name="page" class="form-control">
                                    <option value="about">About</option>
                                    <option value="rooms">Rooms</option>
                                    <option value="restaurants">restaurants</option>
                                    <option value="activitiy">Activitiy</option>
                                    <option value="gallery">gallery</option>
                                    <option value="blogs">blogs</option>
                                    <option value="guest">guest</option>
                                    <option value="contact">contact</option>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <input type="file" name="breadcrumbimage" id="breadcrumbimage" accept="image/*">
                                Max file size: 2 MB (jpg/png) [Height: 250px]
                                <br>
                            </div>
                            <div class="col-sm-2">
                              <input type="hidden" name="type" value="breadcrumb" id="type">
                              <input type="submit" name="save" value="SAVE" class="btn btn-primary dropdown-toggle">
                            </div>
                        </div>
                    </div>
                </form>
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>Sl. No.</th>
                          <th>Image</th>
                          <th>Page</th>
                          <th>Type</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody id="ContentPlaceHolder1_Tbody1">
                    <?php $i=0; ?>
                  @foreach($banners as $banner)  
                  <?php $i++; ?>
                  <tr>
                      <td> {{$i}}</td>							
                      <td> 
                        <img src="{{ asset('public/uploads/subbanner/'.$banner->file_name) }}" width="20%">
                      </td>
                      <td>{{$banner->page}}</td>
                      <td>{{$banner->type}}</td>		
                      <td>
                        <button type="button" class="btn btn-sm delbbimg btn-danger" attrid="35">
                        <i class="fa fa-trash-o"></i></button>
                      </td>									
                    </tr>
                    @endforeach									
                  </tbody>
                </table>
              </div><!--box-body -->



            </div>
        </div>
    </div>
</section>
@endsection