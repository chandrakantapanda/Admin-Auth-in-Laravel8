@extends('admin.layout')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Contact</h3>
                    <a class="pull-right" href="{{ route('admindashboard') }}">
                        <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                    </a>
                    <div class="clearfix"></div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped dataTable">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>{{$contact->id}}</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>{{$contact->name}}</th>
                            </tr>
                            <tr>
                                <th>EMail</th>
                                <th>{{$contact->email}}</th>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <th>{{$contact->subject}}</th>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <th>{{$contact->description}}</th>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <th>{{$contact->created_at}}</th>
                            </tr>
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