<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="eest.css">
</head>
<body>
	<header>
   
    <center><h2 align="center"> <img src="Img/logoo.png" width="330" height="100"></h2></center>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Ensaladas</a>
        <a href="#">Comida occidental</a>
        <a href="#">Comida oriental</a>
        <a href="#">Sobre nosotros</a>
        <a href="#">Contacto</a>
    </nav>
    </header>
    <header>
    </header>
    <section>
    	 <center><I><font face="Century Gothic" size="20">Mr. Healthy</font></I></center>
        <p>En está página trata sobre el estilo de vida saludable, proporcionaremos información acerca de los atletas más destacados, problemas alimenticios, consejos para mejorar tu salud, etc. Además de recetas que te ayudarán a tener una mejor salud y rendimiento físico.
        <p><b>Atletas más destacados</b></p>
        <ol>
            <li>Lebron James</li>
            <li>Lionel Messi</li>
            <li>Soraya Jiménez</li>
            <li>Roger Federer</li>
            <li>Phil Mickelson</li>
            <li>Neymar</li>
            <li>Usain Bolt</li>
        </ol>
        <figure>
            <img src="Img/lebron.png" width="200" height="350" alt="Atletas mas destacados" />
            <center><figcaption>Lebron James</figcaption></center>
        </figure>
        <p>México está actualmente entre la lista de paises con más alto nivel de obesidad y sobrepeso, el 70% de los mexicanos padece sobrepeso y casi una tercera parte sufre de obesidad, además, esta enfermedad se asocia principalmente con la diabetes y enfermedades cardiovasculares, pero también con trastornos óseos y musculares y algunos tipos de cáncer.</p>
        <p>Recomendaciones para mantener una buena salud.
        <ul>
            <li>Tomar alrededor de 2 litros de agua al día</li>
            <li>Correr 30 minutos diarios</li>
            <li>María del Rosario Espinoza</li>
            <li>Come más frutas y verduras</li>
            <li>Consume menos grasas, carbohidratos y sal.</li>
        </ul>
    </section>
    <aside>
<font face="Letters for Learners" size="5"><b><center><p>AGENDA UNA CITA VIRTUAL</p></center></font></b>

<center><p>Al ingresar tus datos, te llegará informacion exclusiva acerca de una especialista en la salud que te 
atenderá de manera virtual. Te haremos llegar los datos de la cita por el correo que nos porporciones</p></center>

	<form method="post">
		<center><h1>REGISTRATE</h1>
		<input type="text" name="name" placeholder="Nombre">
		<input type="email" name="email" placeholder="Email">
		<br>
		<input type="submit" name="register"></center>
	</form>
	<?php

	include("reg.php");

	?>
	<h2 align="center"> <img src="Img/doc.png" width="300" height="300"></h2>
        </aside>
        
        <footer>
            <a href="https://www.youtube.com/watch?v=bV-3evwY0ng">Consejos para tu salud</a>
        </footer>
</body>
</html>