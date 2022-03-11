
@extends('home');
@section('content')
		<div id="content" class="app-content">

	<div class="d-flex align-items-center mb-3">
		<div>
		
		<h1 class="page-header mb-0">Stock </h1>
		</div>
		<div class="ms-auto">
		<a href="{{route('addproduct')}}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw me-1"></i> Ajouter un produit</a>
		</div>
		<div class="ms-auto">
		<a href="{{route('addproduct')}}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw me-1"></i> Editer un produit</a>
		</div>
		</div>
		<div class="mb-sm-4 mb-3 d-sm-flex">
		<div class="mt-sm-0 mt-2"><a href="#" class="text-dark text-decoration-none"><i class="fa fa-download fa-fw me-1 text-muted"></i> Export</a></div>
		<div class="ms-sm-4 mt-sm-0 mt-2"><a href="#" class="text-dark text-decoration-none"><i class="fa fa-upload fa-fw me-1 text-muted"></i> Import</a></div>
		<div class="ms-sm-4 mt-sm-0 mt-2 dropdown-toggle">
		<a href="#" data-bs-toggle="dropdown" class="text-dark text-decoration-none">More Actions</a>
		<div class="dropdown-menu">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div role="separator" class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Separated link</a>
		</div>
		</div>
		</div>
		<div class="card">
		<ul class="nav nav-tabs nav-tabs-v2 px-4">
		<li class="nav-item me-3"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">All</a></li>
		<li class="nav-item me-3"><a href="#publishedTab" class="nav-link px-2" data-bs-toggle="tab">Published</a></li>
		<li class="nav-item me-3"><a href="#expiredTab" class="nav-link px-2" data-bs-toggle="tab">Expired</a></li>
		<li class="nav-item me-3"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Deleted</a></li>
		</ul>
		<div class="tab-content p-4">
		<div class="tab-pane fade show active" id="allTab">
		
		<div class="input-group mb-4">
		<button class="btn btn-default dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter products &nbsp;</button>
		<div class="dropdown-menu">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div role="separator" class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Separated link</a>
		</div>
		<div class="flex-fill position-relative">
		<div class="input-group">
		<div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0" style="z-index: 1020;">
		<i class="fa fa-search opacity-5"></i>
		</div>
		<input type="text" class="form-control ps-35px" placeholder="Search products" />
		</div>
		</div>
		</div>
		
		
		<div class="table-responsive">
		<table class="table table-hover text-nowrap">
			<thead>
				<tr>
					<th class="pt-0 pb-2"></th>
					<th class="pt-0 pb-2">Produit</th>
					<th class="pt-0 pb-2">Quantité</th>
					<th class="pt-0 pb-2">Type</th>
					<th class="pt-0 pb-2">Fournisseur</th>
				</tr>
			</thead>
			<tbody>

				@foreach ($product as $item)
				<tr>
					<td class="w-10px align-middle">
						<div class="form-check">
						<input type="checkbox" class="form-check-input" id="product1">
						<label class="form-check-label" for="product1"></label>
						</div>
					</td>
					<td>
						<div class="d-flex align-items-center">
						<div class="w-60px h-60px bg-gray-100 d-flex align-items-center justify-content-center">
						<img class="mw-100 mh-100" src="assets/img/product/product-6.jpg" />
						</div>
						<div class="ms-3">
						<a href="#">{{$item->name}}</a>
						</div>
						</div>
					</td> 
					<td class="align-middle">{{$item->quantity}}</td>
					<td class="align-middle">{{$item->type}}</td>
					<td class="align-middle">{{$item->provider}}</td>
				</tr>
				<tr>
					<td class="w-10px align-middle">
						<div class="form-check">
						<input type="checkbox" class="form-check-input" id="product1">
						<label class="form-check-label" for="product1"></label>
						</div>
					</td>
					<td>
						<div class="d-flex align-items-center">
						<div class="w-60px h-60px bg-gray-100 d-flex align-items-center justify-content-center">
						<img class="mw-100 mh-100" src="assets/img/product/product-6.jpg" />
						</div>
						<div class="ms-3">
						<a href="#">{{$item->name}}</a>
						</div>
						</div>
					</td> 
					<td class="align-middle">{{$item->quantity}}</td>
					<td class="align-middle">{{$item->type}}</td>
					<td class="align-middle">{{$item->provider}}</td>
				</tr>
				
				@endforeach
			</tbody>
		</table>
		</div>
		
		<div class="d-md-flex align-items-center">
		<div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
		Showing 1 to 10 of 57 entries
		</div>
		<ul class="pagination mb-0 justify-content-center">
		<li class="page-item disabled"><a class="page-link">Previous</a></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">4</a></li>
		<li class="page-item"><a class="page-link" href="#">5</a></li>
		<li class="page-item"><a class="page-link" href="#">6</a></li>
		<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
		</div>
		</div>
		</div>
		</div>
    </div>
@endsection

@section('script')

		<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="assets/js/app.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>


		<script src="{{asset('assets/plugins/highlight.js/highlight.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/js/demo/highlightjs.demo.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-buttons/js/buttons.print.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
		<script src="{{asset('assets/js/demo/table-plugins.demo.js')}}" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>

		<script type="f67bd1f9a729ac1a78387d1c-text/javascript">
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-53034621-1', 'auto');
			  ga('send', 'pageview');

			</script>
		<script src="{{asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="f67bd1f9a729ac1a78387d1c-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6dc1483e9bd059ad","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>

@endsection