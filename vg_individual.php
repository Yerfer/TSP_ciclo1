<!DOCTYPE html>

<html lang="es">

		<head>
			<title>Videojuego</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="individualCSS.css" />
		</head>

		<body>
			<header name="superior" title="">	</header>
			<aside name="izquierdo"></aside>
			
			<?php
				session_start();				
				$id_vj=$_GET["juegos"];				
				//conexion: 
				$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link));
				//consulta: 
				$query = "SELECT * FROM videogame WHERE id_vj='".$id_vj."'";
				//ejecutar consulta. 
				$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
				$urlyoutube="https://www.youtube.com/embed/";
				$row = mysqli_fetch_array($result);	
					if (isset($id_vj)) {
						
						$nombre=$row["nombre"];
						$descripcion=$row["descripcion"];
						$precio_dia=$row["precio_dia"];
						$stock=$row["stock"];
						$video=$row["video"];
						$urlvideo=$urlyoutube.$video;
						$id_categoria=$row["id_categoria"];
						$consulta="select nombre from categoria where id_categoria='".$id_categoria."'";
						$cate= mysqli_query($link, $consulta) or die("La consulta falló: " . mysqli_error($link));
						$fila_categoria = mysqli_fetch_array($cate);
						$categoria=$fila_categoria["nombre"];
						
						echo "							
<<<<<<< HEAD
						<form method='post' action='procesar.php'>
=======
						<form method='post' action='carrito.php'>
>>>>>>> 925e6045fec3c888f356103ec00e292967fcb63b
						<section name='juego'> 
							<header>
								<p name='nombre'><h2>Nombre del VideoJuego: </h2><h1>$nombre</h1></p>
								<h3><p name='cantidad'>Cantidad: $stock</p></h3>
							</header>
							<section name'atributos'>
								<header>
									<iframe class='youtube-player' type='text/html' src='".$urlvideo."' frameborder='0'></iframe>
								</header>
								<footer name='datos_pie'>
									<p>Precio: $precio_dia</p>
									";if(isset($_SESSION['session_username'])){
<<<<<<< HEAD
										echo "<input type='submit' name='vg".$id_vj."' value='Alquilar' />";
=======
										echo "<input type=hidden value='".$id_vj."' name='id'/>";
										echo "<input type='submit' name='vg".$id_vj."' value='Añadir Al Carrito De Compras' />";
>>>>>>> 925e6045fec3c888f356103ec00e292967fcb63b
									}
									else{
										echo "<p>Si Quieres Alquilar Debes <a href='registrar.php' >Registrarte</a>!</p>";
									}
<<<<<<< HEAD
									echo "<input type='submit' name='' value='Home Page' />
=======
									echo "<a href='aplicacionlogin.php'>Home page </a>
>>>>>>> 925e6045fec3c888f356103ec00e292967fcb63b
									<p>Descripción: $descripcion</p>
									<p>Categoria: $categoria</p>
								</footer>
							</section>
						</section>
						</form>
						";
					}
					else{
						header("location:aplicacion.php");
					}
			?>
			<aside name="derecho"> </aside> 	
			<footer name="pie">	</footer> 
		</body>
</html>