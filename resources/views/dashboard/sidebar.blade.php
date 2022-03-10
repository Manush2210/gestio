<div id="sidebar" class="app-sidebar">

				<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

					<div class="menu">
						<div class="menu-header">Vue d'ensemble</div>
						<div class="menu-item active">
							<a href="{{route('userdashboard')}}" class="menu-link">
								<span class="menu-icon"><i class="fa fa-laptop"></i></span>
								<span class="menu-text">Tableau de bord</span>
							</a>
						</div>

						<div class="menu-item">
							<a href="{{route('config')}}" class="menu-link">
								<span class="menu-icon"><i class="fa fa-chart-pie"></i></span>
								<span class="menu-text">Ajouter une entreprise</span>
							</a>
						</div>

						<!--<div class="menu-item has-sub">
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
									<a href="inbox.html" class="menu-link">
									<span class="menu-text">Boîte de réception</span>
									</a>
								</div>
								<div class="menu-item">
									<a href="message.html" class="menu-link">
									<span class="menu-text">Envoyer un message</span>
									</a>
								</div>
							</div>
						</div>-->
						<div class="menu-divider"></div>
						<div class="menu-header">Nom de l'entreprise</div>
						
						<div class="menu-item">
							<a href="task.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-file-alt"></i></span>
							<span class="menu-text">Tâches</span>
							</a>
						</div>

						<div class="menu-item has-sub">
						<a href="#" target="s1" class="menu-link">
						<span class="menu-icon"><i class="fa fa-table"></i></span>
						<span class="menu-text">Stock</span>
						<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
						<div class="menu-item">
						<a href="{{route("stockview")}}" class="menu-link">
						<span id="s1" class="menu-text">Stock Disponible</span>
						</a>
						</div>
						<div class="menu-item">
						<a href="edit_stock.html" class="menu-link">
						<span class="menu-text">Editer le Stock</span>
						</a>
						</div>
						</div>
						</div>
						<div class="menu-item">
							<a href="task.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-chart-bar"></i></span>
							<span class="menu-text">Finances</span>
							</a>
						</div>
						<!--<div class="menu-item">
						<a href="map.html" class="menu-link">
						<span class="menu-icon"><i class="fa fa-map-marker-alt"></i></span>
						<span class="menu-text">Expansion</span>
						</a>
						</div>-->
						<div class="menu-item">
							<a href="personnel.html" class="menu-link">
							<span class="menu-icon"><i class="fa fa-code-branch"></i></span>
							<span class="menu-text">Personnel</span>
							</a>
						</div>

						<div class="menu-item">
						<a href="profil.html" class="menu-link">
						<span class="menu-icon"><i class="fa fa-qrcode"></i></span>
						<span class="menu-text">Materiel</span>
						</a>
						</div>


						<div class="menu-divider"></div>
						<div class="menu-header">Utilisateurs</div>
						<div class="menu-item">
						<a href="user.html" class="menu-link">
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
						<span class="menu-text">Paramètres</span>
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
						<span class="menu-text">Vérifications</span>
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