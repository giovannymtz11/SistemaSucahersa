<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

			<?php

				if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Consultor"){

					echo '<li class="active">

							<a href="inicio">

							  <i class="fa fa-home"></i>
								
							  <span>Inicio</span>

							</a>

						  </li>';
				}

				if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Gestor"){

					echo '<li>

							<a href="usuarios">

							  <i class="fa fa-user"></i>
						
							  <span>Usuarios</span>

							</a>

						  </li>';

				}

				if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Gestor"){

				echo '<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>';

			}

			echo '<li>

				<a href="productos2">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>';

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Gestor" || $_SESSION["perfil"] == "Consultor"){

				echo '<li>

				<a href="productos">

					<i class="fa fa-list-ul"></i>
					<span>Inventario</span>

				</a>

			</li>';

			}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Gestor"){

				echo '<li>

				<a href="sucursales">

					<i class="fa fa-home"></i>
					<span>Sucursales</span>

				</a>

			</li>';
			}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Gestor"){

				echo '<li>

				<a href="proveedores">

					<i class="fa fa-users"></i>
					<span>Proveedores</span>

				</a>

			</li>';
			}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Gestor" || $_SESSION["perfil"] == "Consultor"){

				echo '<li>

				<a href="bajas">

					<i class="fa fa-list-ul"></i>
					<span>Bajas</span>

				</a>

			</li>';
			}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Consultor"){

				echo '<li>

				<a href="reportes">
							
					<i class="fa fa-circle-o"></i>
					<span>Reportes</span>

				</a>

			</li>';
			}
			?>

		</ul>

	 </section>

</aside>