@extends('home')
@section('content')

			<div id="content" class="app-content">


						<div class="container">

									<div class="row justify-content-center">

												<div class="col-xl-10">

															<div class="row">

																	<div class="col-xl-9">
																		<ul class="breadcrumb">
																		<li class="breadcrumb-item"><a href="#">Ajoutez un nouveau produit</a></li>

																		</ul>

																	 	<hr class="mb-4" />

																	<div id="formControls" class="mb-5">
																	  
																					<div class="card">
																					<div class="card-body pb-2">
																									<form method="POST" action="{{url('home/setting')}}" enctype="multipart/form-data">
																										@csrf
																									<div class="row">
																											<div class="col-xl-6">
																												<div class="form-group mb-3">
																													<label class="form-label" for="exampleFormControlInput1">Nom du produit</label>
																													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name" />
																												</div>
																												<div class="form-group mb-3">
																													<label class="form-label" for="exampleFormControlTextarea1">Description du produit (150 mots au maximum)</label>
																													<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
																												</div>
																												<div class="form-group mb-3">
																												  <label class="form-label" for="exampleFormControlInput1">Coût unitaire du produit</label>
																												  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""  name="price" />
																												  </div>
																											</div>
																											<div class="col-xl-6">
																											  <div class="form-group mb-3">
																											    <label for="validationSelectInvalid" class="form-label"> Type du produit</label>
																											    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez le type" name="type" />
																												    <div class="invalid-feedback">
																											   
																											    </div>
																											  </div>

																											  <div class="form-group mb-3">
																												    <label for="validationSelectInvalid" class="form-label"> Quelle est la quantité disponible du produit</label>
																												    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Quantité"name="quantity" />
																												    <div class="invalid-feedback">
																											   
																											    </div>
 
																											  </div>

																												  <div class="form-group mb-3">
																												    <label for="validationSelectInvalid" class="form-label"> Fournisseur</label>
																												    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Fournisseur" name="provider" />
																												    <div class="invalid-feedback">
																											   
																											    </div>
 
																											  </div>

																											   <div class="form-group mb-3">
																												    <label class="form-label" for="exampleFormControlFile1">Chargez une photo du produit</label>
																												    <input type="file" class="form-control" id="exampleFormControlFile1" name="image" />
																												  </div>

																											</div>
																									</div>

																									<button type="submit" class="btn btn-success">Ajouter le produit</button>
																									</form>
																					</div>

																					</div>


																	</div>

																	</div>

															</div>

												</div>

									</div>
						</div>
			</div>


				@endsection

	@section('script')

			<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="2b575c971ab26e609381455f-text/javascript"></script>
			<script src="assets/js/app.min.js" type="2b575c971ab26e609381455f-text/javascript"></script>


			<script src="assets/plugins/highlight.js/highlight.min.js" type="2b575c971ab26e609381455f-text/javascript"></script>
			<script src="assets/js/demo/highlightjs.demo.js" type="2b575c971ab26e609381455f-text/javascript"></script>

			<script type="2b575c971ab26e609381455f-text/javascript">
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-53034621-1', 'auto');
				  ga('send', 'pageview');

				</script>
			<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2b575c971ab26e609381455f-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6dc14825de4559ad","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
	
				@endsection
