@extends('home')

@section('content')

			<div id="content" class="app-content">
			<h1 class="page-header mb-3">
			Content de vous revoir {{ Auth::user()->name }}!!<small>Tout ce dont vous avez besoin se trouve ici.</small>
			</h1>

			<div class="row">

			<div class="col-xl-6 mb-3">

			<div class="card text-white text-opacity-70 h-100 overflow-hidden">

			<div class="card-img-overlay d-block d-lg-none bg-blue rounded"></div>


			<div class="card-img-overlay d-none d-md-block bg-blue rounded mb-n1 mx-n1" style="background-image: url(assets/img/bg/wave-bg.png); background-position: right bottom; background-repeat: no-repeat; background-size: 100%;"></div>


			<div class="card-img-overlay d-none d-md-block bottom-0 top-auto">
			<div class="row">
			<div class="col-md-8 col-xl-6"></div>
			<div class="col-md-4 col-xl-6 mb-n2">
			<img src="assets/img/page/dashboard.svg" alt="" class="d-block ms-n3 mb-5" style="max-height: 310px" />
			</div>
			</div>
			</div>


			<div class="card-body position-relative">

			<div class="row">

			<div class="col-md-8">

			<div class="d-flex">
			<div class="me-auto">
			<h5 class="text-white text-opacity-80 mb-3">Chiffre d'affaire hebdomadaire</h5>
			<h3 class="text-white mt-n1 mb-1">0 XOF</h3>
			<p class="mb-1 text-white text-opacity-60 text-truncate">
			<i class="fa fa-caret-up"></i> <b>0%</b> de progression depuis la semaine dernière
			</p>
			</div>
			</div>
			<hr class="bg-white bg-opacity-75 mt-3 mb-3" />

			<div class="row">
			<div class="col-6 col-lg-5">
			<div class="mt-1">
			<i class="fa fa-fw fa-shopping-bag fs-28px text-black text-opacity-50"></i>
			</div>
			<div class="mt-1">
			<div>Bénéfice disponible</div>
			<div class="fw-600 text-white">0 XOF</div>
			</div>
			</div>
			<div class="col-6 col-lg-5">
			<div class="mt-1">
			<i class="fa fa-fw fa-retweet fs-28px text-black text-opacity-50"></i>
			</div>
			<div class="mt-1">
			<div>Fonds disponibles</div>
			<div class="fw-600 text-white">0 XOF </div>
			</div>
			</div>
			</div>
			<hr class="bg-white bg-opacity-75 mt-3 mb-3" />
			<div class="mt-3 mb-2">
			<a href="#" class="btn btn-yellow btn-rounded btn-sm ps-5 pe-5 pt-2 pb-2 fs-14px fw-600"><i class="fa fa-wallet me-2 ms-n2"></i> Bilan complet</a>
			</div>

			</div>


			<div class="col-md-4 d-none d-md-block" style="min-height: 380px;"></div>

			</div>

			</div>

			</div>

			</div>


			<div class="col-xl-6">

			<div class="row">

			<div class="col-sm-6">

			<div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange" style="min-height: 199px;">

			<div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
			<img src="assets/img/icon/order.svg" alt="" class="ms-auto d-block mb-n3" style="max-height: 105px" />
			</div>


			<div class="card-body position-relative">
			<h5 class="text-white text-opacity-80 mb-3 fs-16px">Stock</h5>
			<h3 class="text-white mt-n1">0 produit</h3>
			<div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
			<div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
			</div>
			<div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 0% d'optimisation <br /></div>
			<div><a href="{{ route('stockview') }}" class="text-white d-flex align-items-center text-decoration-none">Voir plus <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
			</div>

			</div>


			<div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal" style="min-height: 199px;">

			<div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
			<img src="assets/img/icon/visitor.svg" alt="" class="ms-auto d-block mb-n3" style="max-height: 105px" />
			</div>


			<div class="card-body position-relative">
			<h5 class="text-white text-opacity-80 mb-3 fs-16px">Finances</h5>
			<h3 class="text-white mt-n1">0 XOF de marge disponible</h3>
			<div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
			<div class="progrss-bar progress-bar-striped bg-white" style="width: 50%"></div>
			</div>
			<div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 0% de progression<br /></div>
			<div><a href="#" class="text-white d-flex align-items-center text-decoration-none">Voir plus<i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
			</div>

			</div>

			</div>


			<div class="col-sm-6">

			<div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink" style="min-height: 199px;">

			<div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
			<img src="assets/img/icon/email.svg" alt="" class="ms-auto d-block mb-n3" style="max-height: 105px" />
			</div>


			<div class="card-body position-relative">
			<h5 class="text-white text-opacity-80 mb-3 fs-16px">Personnel</h5>
			<h3 class="text-white mt-n1">0 membre efficace</h3>
			<div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
			<div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
			</div>
			<div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-down"></i> 0% de progression <br /></div>
			<div><a href="#" class="text-white d-flex align-items-center text-decoration-none">Voir plus <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
			</div>

			</div>


			<div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-indigo" style="min-height: 199px;">

			<div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
			<img src="assets/img/icon/browser.svg" alt="" class="ms-auto d-block mb-n3" style="max-height: 105px" />
			</div>


			<div class="card-body position-relative">
			<h5 class="text-white text-opacity-80 mb-3 fs-16px">Activités</h5>
			<h3 class="text-white mt-n1">0 tâche terminée</h3>
			<div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
			<div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
			</div>
			<div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 0% de finition <br /></div>
			<div><a href="#" class="text-white d-flex align-items-center text-decoration-none">Voir plus <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
			</div>

			</div>

			</div>

			</div>

			</div>

			</div>


			<div class="row">

			<div class="col-xl-6">

			<div class="row">

			<div class="col-sm-6 mb-3 d-flex flex-column">

			<div class="card mb-3 flex-1">

			<div class="card-body">
			<div class="d-flex mb-3">
			<div class="flex-grow-1">
			<h5 class="mb-1">Nombre de clients</h5>
			<div>Votre nombre de clients est approximativement déduit du bilan de vos transactions</div>
			</div>
			<a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
			</div>
			<div class="d-flex">
			<div class="flex-grow-1">
			<h3 class="mb-1">0</h3>
			<div class="text-success fw-600 fs-13px">
			<i class="fa fa-caret-up"></i> +0%
			</div>
			</div>
			<div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center">
			<i class="fa fa-user fa-lg text-primary"></i>
			</div>
			</div>
			</div>

			</div>


			<div class="card">

			<div class="card-body">
			<div class="d-flex mb-3">
			<div class="flex-grow-1">
			<h5 class="mb-1">Exposition</h5>
			<div>Statistiques de visibilité</div>
			</div>
			<a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
			</div>

			<div class="row">

			<div class="col-6 text-center">
			<div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center mb-2 ms-auto me-auto">
			<i class="fa fa-thumbs-up fa-lg text-primary"></i>
			</div>
			<div class="fw-600 text-dark">0</div>
			<div class="fs-13px">Likes</div>
			</div>


			<div class="col-6 text-center">
			<div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center mb-2 ms-auto me-auto">
			<i class="fa fa-comments fa-lg text-primary"></i>
			</div>
			<div class="fw-600 text-dark">0</div>
			<div class="fs-13px">Commentaire</div>
			</div>

			</div>

			</div>

			</div>

			</div>


			<div class="col-sm-6 mb-3">

			<div class="card h-100">

			<div class="card-body">
			<div class="d-flex mb-3">
			<div class="flex-grow-1">
			<h5 class="mb-1">Traffic</h5>
			<div class="fs-13px">Evaluation du traffic</div>
			</div>
			<a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
			</div>
			<div class="mb-4">
			<h3 class="mb-1">0</h3>
			<div class="text-success fs-13px fw-600">
			<i class="fa fa-caret-up"></i> +0%
			</div>
			</div>
			<div class="progress mb-4" style="height: 10px;">
			<div class="progress-bar" style="width: 42.66%"></div>
			<div class="progress-bar bg-teal" style="width: 36.80%"></div>
			<div class="progress-bar bg-yellow" style="width: 15.34%"></div>
			<div class="progress-bar bg-pink" style="width: 9.20%"></div>
			<div class="progress-bar bg-gray-200" style="width: 5.00%"></div>
			</div>
			<div class="fs-13px">
			<div class="d-flex align-items-center mb-2">
			<div class="flex-grow-1 d-flex align-items-center">
			<i class="fa fa-circle fs-9px fa-fw text-primary me-2"></i> Direct visit
			</div>
			<div class="fw-600 text-dark">0%</div>
			</div>
			<div class="d-flex align-items-center mb-2">
			<div class="flex-grow-1 d-flex align-items-center">
			<i class="fa fa-circle fs-9px fa-fw text-teal me-2"></i> Organic Search
			</div>
			<div class="fw-600 text-dark">0%</div>
			</div>
			<div class="d-flex align-items-center mb-2">
			<div class="flex-grow-1 d-flex align-items-center">
			<i class="fa fa-circle fs-9px fa-fw text-warning me-2"></i> Referral Website
			</div>
			<div class="fw-600 text-dark">0%</div>
			</div>
			<div class="d-flex align-items-center mb-2">
			<div class="flex-grow-1 d-flex align-items-center">
			<i class="fa fa-circle fs-9px fa-fw text-danger me-2"></i> Social Networks
			</div>
			<div class="fw-600 text-dark">0%</div>
			</div>
			<div class="d-flex align-items-center mb-15px">
			<div class="flex-grow-1 d-flex align-items-center">
			<i class="fa fa-circle fs-9px fa-fw text-gray-200 me-2"></i> Others
			</div>
			<div class="fw-600 text-dark">0%</div>
			</div>
			<div class="fs-12px text-end">
			<span class="fs-10px">powered by </span>
			<span class="d-inline-flex fw-600">
			<span class="text-primary">G</span>
			<span class="text-danger">o</span>
			<span class="text-warning">o</span>
			<span class="text-primary">g</span>
			<span class="text-green">l</span>
			<span class="text-danger">e</span>
			</span>
			<span class="fs-10px">Analytics API</span>
			</div>
			</div>
			</div>

			</div>

			</div>

			</div>

			</div>


			<div class="col-xl-6 mb-3">

			<div class="card h-100">

			<div class="card-body">
			<div class="d-flex mb-3">
			<div class="flex-grow-1">
			<h5 class="mb-1">Point des ventes</h5>
			<div class="fs-13px">Weekly sales performance chart</div>
			</div>
			<a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
			</div>
			<div id="chart"></div>
			</div>

			</div>

			</div>

			</div>


			<div class="row">

			<div class="col-xl-6 mb-3">

			<div class="card h-100">

			<div class="card-body">
			<div class="d-flex align-items-center mb-4">
			<div class="flex-grow-1">
			<h5 class="mb-1">Meilleures ventes</h5>
			<div class="fs-13px">Top 3 produits vendus cette semaine</div>
			</div>
			<a href="#" class="text-decoration-none">Voir plus</a>
			</div>


			</div>

			</div>

			</div>


			<div class="col-xl-6 mb-3">

			<div class="card h-100">

			<div class="card-body">
			<div class="d-flex align-items-center mb-2">
			<div class="flex-grow-1">
			<h5 class="mb-1">Historique des transactions</h5>

			</div>

			</div>

			<div class="table-responsive mb-n2">
			<table class="table table-borderless mb-0">
			<thead>
			<tr class="text-dark">
			<th class="ps-0">No</th>
			<th>Order Details</th>
			<th class="text-center">Status</th>
			<th class="text-end pe-0">Amount</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
			</table>
			</div>

			</div>

			</div>

			</div>

			</div>

			</div>



@endsection


@section('script')

		<script data-cfasync="false" src="{{asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="assets/js/vendor.min.js" type="da8fcaab47f0f4686938ffdf-text/javascript"></script>
		<script src="{{url('assets/js/app.min.js')}}" type="da8fcaab47f0f4686938ffdf-text/javascript"></script>


		<script src="{{asset('assets/plugins/apexcharts/dist/apexcharts.min.js')}}" type="da8fcaab47f0f4686938ffdf-text/javascript"></script>
		<script src="{{asset('assets/js/demo/dashboard.demo.js')}}" type="da8fcaab47f0f4686938ffdf-text/javascript"></script>

		<script type="da8fcaab47f0f4686938ffdf-text/javascript">
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-53034621-1', 'auto');
			  ga('send', 'pageview');

			</script>
		<script src="{{asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="da8fcaab47f0f4686938ffdf-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6dc147a7dd7359ad","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>


		@endsection