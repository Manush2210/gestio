<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/asp-studio/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 23:14:30 GMT -->
<head>
<meta charset="utf-8" />
<title>Gestio | Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<link href="assets/css/vendor.min.css" rel="stylesheet" />
<link href="assets/css/app.min.css" rel="stylesheet" />

</head>
<body>

<div id="app" class="app">

<div id="header" class="app-header">

<div class="mobile-toggler">
<button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>


<div class="brand">
<div class="desktop-toggler">
<button type="button" class="menu-toggler" data-toggle="sidebar-minify">
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>
<a href="#" class="brand-logo">
<img src="assets/img/logo.svg" alt="" height="20" />
</a>
</div>


<div class="menu">
<form class="menu-search" method="POST" name="header_search_form">
<div class="menu-search-icon"><i class="fa fa-search"></i></div>
<div class="menu-search-input">
<input type="text" class="form-control" placeholder="Search menu..." />
</div>
</form>
<div class="menu-item dropdown">
<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
<div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
<div class="menu-label">3</div>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-notification">
<h6 class="dropdown-header text-dark mb-1">Notifications</h6>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<i class="fa fa-receipt fa-lg fa-fw text-success"></i>
</div>
<div class="dropdown-notification-info">
<div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
<div class="time">just now</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<i class="far fa-user-circle fa-lg fa-fw text-muted"></i>
</div>
<div class="dropdown-notification-info">
<div class="title">3 new customer account is created</div>
<div class="time">2 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<img src="assets/img/icon/android.svg" alt="" width="26" />
</div>
<div class="dropdown-notification-info">
<div class="title">Your android application has been approved</div>
<div class="time">5 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<img src="assets/img/icon/paypal.svg" alt="" width="26" />
</div>
<div class="dropdown-notification-info">
<div class="title">Paypal payment method has been enabled for your store</div>
<div class="time">10 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<div class="p-2 text-center mb-n1">
<a href="#" class="text-dark text-opacity-50 text-decoration-none">See all</a>
</div>
</div>
</div>
<div class="menu-item dropdown">
<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
<div class="menu-img online">
<img src="assets/img/user/user4.svg" alt="" class="ms-100 mh-100 rounded-circle" />
</div>
<div class="menu-text"><span class="__cf_email__" data-cfemail="">admin@mail.com</span></div>
</a>
<div class="dropdown-menu dropdown-menu-right me-lg-3">
<a class="dropdown-item d-flex align-items-center" href="#">Profil <i class="fa fa-user-circle fa-fw ms-auto text-dark text-opacity-50"></i></a>
<a class="dropdown-item d-flex align-items-center" href="#">Param??tres <i class="fa fa-wrench fa-fw ms-auto text-dark text-opacity-50"></i></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center" href="#">Se d??connecter <i class="fa fa-toggle-off fa-fw ms-auto text-dark text-opacity-50"></i></a>
</div>
</div>
</div>

</div>


<div id="sidebar" class="app-sidebar">

<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

<div class="menu">
<div class="menu-header">Vue d'ensemble</div>
<div class="menu-item active">
<a href="index-2.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-laptop"></i></span>
<span class="menu-text">Tableau de bord</span>
</a>
</div>
<div class="menu-item">
<a href="configuration.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-chart-pie"></i></span>
<span class="menu-text">Ajouter une entreprise</span>
</a>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon">
<i class="fa fa-envelope"></i>
<span class="menu-icon-label">6</span>
</span>
<span class="menu-text">Email</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="email_inbox.html" class="menu-link">
<span class="menu-text">Bo??te de r??ception</span>
</a>
</div>
<div class="menu-item">
<a href="email_compose.html" class="menu-link">
<span class="menu-text">Envoyer un message</span>
</a>
</div>
</div>
</div>
<div class="menu-divider"></div>
<div class="menu-header">Nom de l'entreprise</div>
<div class="menu-item">
<a href="widgets.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-qrcode"></i></span>
<span class="menu-text">Accueil</span>
</a>
</div>
<div class="menu-item has-sub">
	<a href="#" class="menu-link">
		<span class="menu-icon"><i class="fa fa-file-alt"></i></span>
		<span class="menu-text">T??ches</span>
		<span class="menu-caret"><b class="caret"></b></span>
	</a>

<div class="menu-submenu">

<div class="menu-item">
<a href="ui_buttons.html" class="menu-link">
<span class="menu-text">Urgentes</span>
</a>
</div>
<div class="menu-item">
<a href="ui_card.html" class="menu-link">
<span class="menu-text">En cours</span>
</a>
</div>
<div class="menu-item">
<a href="ui_icons.html" class="menu-link">
<span class="menu-text">Termin??es</span>
</a>
</div>



</div>
</div>

<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-table"></i></span>
<span class="menu-text">Stock</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="table_elements.html" class="menu-link">
<span class="menu-text">Table Elements</span>
</a>
</div>
<div class="menu-item">
<a href="table_plugins.html" class="menu-link">
<span class="menu-text">Table Plugins</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-chart-bar"></i></span>
<span class="menu-text">Finances</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="chart_js.html" class="menu-link">
<span class="menu-text">Chart.js</span>
</a>
</div>
<div class="menu-item">
<a href="chart_apex.html" class="menu-link">
<span class="menu-text">Apexcharts.js</span>
</a>
</div>
</div>
</div>
<div class="menu-item">
<a href="map.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-map-marker-alt"></i></span>
<span class="menu-text">Expansion</span>
</a>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-code-branch"></i></span>
<span class="menu-text">Personnel</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="layout_starter.html" class="menu-link">
<span class="menu-text">Starter Page</span>
</a>
</div>
<div class="menu-item">
<a href="layout_fixed_footer.html" class="menu-link">
<span class="menu-text">Fixed Footer</span>
</a>
</div>
<div class="menu-item">
<a href="layout_full_height.html" class="menu-link">
<span class="menu-text">Full Height</span>
</a>
</div>
<div class="menu-item">
<a href="layout_full_width.html" class="menu-link">
<span class="menu-text">Full Width</span>
</a>
</div>
<div class="menu-item">
<a href="layout_boxed_layout.html" class="menu-link">
<span class="menu-text">Boxed Layout</span>
</a>
</div>
<div class="menu-item">
<a href="layout_minified_sidebar.html" class="menu-link">
<span class="menu-text">Minified Sidebar</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="fa fa-globe"></i></span>
<span class="menu-text">Vitrine</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="page_scrum_board.html" class="menu-link">
<span class="menu-text">Scrum Board</span>
</a>
</div>
<div class="menu-item">
<a href="page_products.html" class="menu-link">
<span class="menu-text">Products</span>
</a>
</div>
<div class="menu-item">
<a href="page_orders.html" class="menu-link">
<span class="menu-text">Orders</span>
</a>
</div>
<div class="menu-item">
<a href="page_gallery.html" class="menu-link">
<span class="menu-text">Gallery</span>
</a>
</div>
<div class="menu-item">
<a href="page_search_results.html" class="menu-link">
<span class="menu-text">Search Results</span>
</a>
</div>
<div class="menu-item">
<a href="page_coming_soon.html" class="menu-link">
<span class="menu-text">Coming Soon Page</span>
</a>
</div>
<div class="menu-item">
<a href="page_404_error.html" class="menu-link">
<span class="menu-text">404 Error Page</span>
</a>
</div>
<div class="menu-item">
<a href="page_login.html" class="menu-link">
<span class="menu-text">Login</span>
</a>
</div>
<div class="menu-item">
<a href="page_register.html" class="menu-link">
<span class="menu-text">Register</span>
</a>
</div>
</div>
</div>
<div class="menu-divider"></div>
<div class="menu-header">Utilisateurs</div>
<div class="menu-item">
<a href="profile.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-user-circle"></i></span>
<span class="menu-text">Liste des utilisateurs</span>
</a>
</div>
<div class="menu-item">
<a href="calendar.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-calendar"></i></span>
<span class="menu-text">Calendrier</span>
</a>
</div>
<div class="menu-item">
<a href="settings.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-cog"></i></span>
<span class="menu-text">Param??tres</span>
</a>
</div>
<div class="menu-item">
<a href="helper.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-question-circle"></i></span>
<span class="menu-text">Aide</span>
</a>
</div>
<div class="menu-item">
<a href="asp_identity.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-fingerprint"></i></span>
<span class="menu-text">V??rifications</span>
</a>
</div>
<div class="p-3 px-4 mt-auto hide-on-minified">
<a href="documentation/index.html" target="_blank" class="btn btn-secondary d-block w-100 fw-600 rounded-pill">
<i class="fa fa-code-branch me-1 ms-n1 opacity-5"></i> Documentation
</a>
</div>
</div>

</div>


<button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>

</div>




<div id="content" class="app-content">

<div class="container">



</div>


<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


<div class="theme-panel">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content">
<ul class="theme-list clearfix">
<li><a href="javascript:;" class="bg-red" data-theme="theme-red" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-pink" data-theme="theme-pink" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-orange" data-theme="theme-orange" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-yellow" data-theme="theme-yellow" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-lime" data-theme="theme-lime" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-green" data-theme="theme-green" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-teal" data-theme="theme-teal" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-cyan" data-theme="theme-cyan" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Aqua" data-original-title="" title="">&nbsp;</a></li>
<li class="active"><a href="javascript:;" class="bg-blue" data-theme="" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-purple" data-theme="theme-purple" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-indigo" data-theme="theme-indigo" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo" data-original-title="" title="">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-gray-600" data-theme="theme-gray-600" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray" data-original-title="" title="">&nbsp;</a></li>
</ul>
<hr class="mb-0" />
<div class="row mt-10px pt-3px">
<div class="col-9 control-label text-dark fw-bold">
<div>Dark Mode <span class="badge bg-primary ms-1 position-relative py-4px px-6px" style="top: -1px">NEW</span></div>
<div class="lh-14 fs-13px">
<small class="text-dark opacity-50">
Adjust the appearance to reduce glare and give your eyes a break.
</small>
</div>
</div>
<div class="col-3 d-flex">
<div class="form-check form-switch ms-auto mb-0 mt-2px">
<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
</div>
</div>
</div>
</div>
</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/js/app.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>


<script src="assets/plugins/highlight.js/highlight.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/js/demo/highlightjs.demo.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.flash.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/plugins/bootstrap-table/dist/bootstrap-table.min.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>
<script src="assets/js/demo/table-plugins.demo.js" type="f67bd1f9a729ac1a78387d1c-text/javascript"></script>

<script type="f67bd1f9a729ac1a78387d1c-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="f67bd1f9a729ac1a78387d1c-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6dc1483e9bd059ad","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/asp-studio/table_plugins.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 23:17:24 GMT -->
</html>
