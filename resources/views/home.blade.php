<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/asp-studio/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 23:14:30 GMT -->
<head>
		<meta charset="utf-8" />
		<title>Gestio | Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />

		<link href="{{ asset('assets/css/vendor.min.css')}}" rel="stylesheet"/>
		<link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" />

</head>
<body>

		<div id="app" class="app">
			<!--header app header-->
				@include('dashboard.header')
			<!--Side bar-->
				@include('dashboard.sidebar')

		<!--	content	-->

		@yield('content')
		

			<!--end content-->

		    <!--btn scroll-->

			<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

			<!--end btn scroll-->

			@include('dashboard.theme')

		</div>

		<!--script-->

		@yield ('script')
		
</body>

<!-- Mirrored from seantheme.com/asp-studio/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 23:15:39 GMT -->
</html>
