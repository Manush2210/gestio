@extends('home')
@section('content')

<div id="content" class="app-content">

<div class="container">

<div class="row justify-content-center">

<div class="col-xl-10">

<div class="row">

<div class="col-xl-9">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Ajoutez une nouvelle entreprise</a></li>

</ul>

<hr class="mb-4" />

<div id="formControls" class="mb-5">
  <h4><i class="far fa-user fa-fw"></i> Informations Générales</h4>
  <p>Renseignez ces informations pour ajouter votre entreprise.</p>
  <div class="card">
<div class="card">
<div class="card-body pb-2">
<form>
<div class="row">
<div class="col-xl-6">
<div class="form-group mb-3">
<label class="form-label" for="exampleFormControlInput1">Nom de votre entreprise</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" />
</div>
<div class="form-group mb-3">
<label class="form-label" for="exampleFormControlTextarea1">Description de votre entreprise (150 mots au maximum)</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="form-group mb-3">
<label class="form-label" for="exampleFormControlFile1">Encoyez nous un dossier compressé des documents légaux de votre entre entreprise</label>
<input type="file" class="form-control" id="exampleFormControlFile1" />
</div>
</div>
<div class="col-xl-6">
  <div class="form-group mb-3">
    <label for="validationSelectInvalid" class="form-label"> Choisissez un type d'entreprise</label>
    <select class="form-select " id="validationSelect" required>
    <option selected disabled value="">Type</option>
    <option>...</option>
    </select>
    <div class="invalid-feedback">
   
    </div>
  </div>

    <div class="form-group mb-3">
    <label for="validationSelectInvalid" class="form-label"> Quelle est la taille du personnel du personnel de votre entreprise</label>
    <select class="form-select " id="validationSelect" required>
    <option selected disabled value="">Taille</option>
    <option>1-10</option>
    <option>Plus de 10</option>
    
    </select>
    <div class="invalid-feedback">
   
    </div>
  </div>
    

</div>
</div>

<button type="button" class="btn btn-success">Sauvegarder les informations</button>
</form>
</div>

</div>
</div>


<div id="general" class="mb-5">
  
  
  </div>
  </div>
  
  
  <div id="notifications" class="mb-5">
  <h4><i class="far fa-bell fa-fw"></i> Type d'activités</h4>
  <p>Enumérez vos activités.</p>

  <div class="card">
    <div class="card-body pb-2">
      <form>
               @csrf
            <div class="row">
                <div class="col-xl-12">
                  
                  <div class="form-group mb-3">
                      <label class="form-label" for="exampleFormControlInput1">Entrez ici votre nombre d'activités</label>
                      <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="" />
                  </div>
                  <div class="form-group mb-3">
                      <label class="form-label" for="exampleFormControlTextarea1">Evumérez chaque activités</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" />
                  </div>
                  <div class="form-group mb-3">
                      <label class="form-label" for="exampleFormControlTextarea1">Décrivez brièvement chaque activité</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                
                </div>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        #1
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        ...
                      </div>
                    </div>
                  </div>
                  
                </div><br>
            
            </div><br>
            
            <button type="submit" class="btn btn-success">Sauvegarder les informations</button>
      </form>
      </div>
    
  </div>

  </div>
  
  
  
  
  
  
  
  
  
  
  
  <div id="system" class="mb-5">
  <h4><i class="far fa-hdd fa-fw"></i> Utilisateurs</h4>
  <p>System storage, bandwidth and database setting</p>
  <div class="card">
  <div class="list-group list-group-flush">
  <div class="list-group-item d-flex align-items-center">
  <div class="flex-fill">
  <div>Utilisateur 1</div>
  <div class="text-gray-600">
  Attributs
  </div>
  </div>
  <div>
  <a href="#modalEdit" data-bs-toggle="modal" class="btn btn-default w-100px">Manage</a>
  </div>
  </div>
  
  <div class="list-group-item d-flex align-items-center">
  <div class="flex-fill">
  <div>Nombre d'utilisateurs maximum</div>
  <div class="text-gray-600">
  5
  </div>
  </div>
  <div>
  <a href="#modalEdit" data-bs-toggle="modal" class="btn btn-success w-100px">Ajouter</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  
  <button type="button" class="btn btn-primary">Valider la configuration</button>
  </div>


<div class="col-xl-3">

<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
<nav class="nav">
<a class="nav-link" href="#formControls" data-toggle="scroll-to">Informations Générales</a>

<a class="nav-link" href="#readonly" data-toggle="scroll-to">Types d'activités</a>
<a class="nav-link" href="#checkboxes" data-toggle="scroll-to">Utilisateurs</a>

</nav>
</nav>

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