@include('admin.template.header')
@include('admin.template.sidebar')

  
			<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
				<section class="content-header">
				  <h1>{{$title}} </h1>
				  <ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">{{$title}}</a></li>
				  </ol>
				</section>			
				<!-- Main content -->
				@yield('content')
				<!-- /.content -->
		</div>
		
		@include('admin.template.footer')
<script type="text/javascript">



</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
