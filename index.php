<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
	<title>Developer Andzej</title>
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="shortcut icon" href="img/1.png">
	<meta name="description" content="Hi I'm Andzej. Junior full stack developer">
	<meta name="keywords" content="full stack, java, php, css, html, javascript">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="box1">
		<header class="flex">
			<a class="nav-logo" href="">
				<img src="img/icon.png" alt="logo">
			</a>
			<div class="box1_1">
				<a href="#" class="hover"><span>HOME</span></a>
				<a href="#about" class="hover"><span>ABOUT</span></a>
				<a href="#myWorks" class="hover"><span>MY WORK</span></a>
				<a href="#skills" class="hover"><span>SKILLS</span></a>
				<a href="#contact" class="hover"><span>CONTACT</span></a>
			</div>
			<div class="dropdown">
					<button class="dropbtn">MENU</button>
					<div class="dropdown-content">
							<a href="#"><span>HOME</span></a>
							<a href="#about"><span>ABOUT</span></a>
							<a href="#myWorks"><span>MY WORK</span></a>
							<a href="#skills"><span>SKILLS</span></a>
							<a href="#contact"><span>CONTACT</span></a>
					</div>
			</div>
		</header>
	</div>
	<div class="box2 flex">
		<video autoplay muted loop src="img/video.mp4"></video>
		<div class="dimmer"></div>
		<div class="box2_1 center_1150">
			<h1>Hi,</h1>
			<h1>I'm Andzej.</h1>
			<div class="brline  anim_width"></div>
			<p class="anim_left">
				Junior <br/>
				Front End Developer / Back End Developer
			</p>
			<a href="files/A_Cernevic_cv.doc" download="A_Cernevic_cv.doc">
				<div class="button anim_left2">

					<span class="but_span">Download CV</span>
					<span class="button2"><i class="fas fa-angle-right"></i></span>
				</div>
			</a>
		</div>
	</div>
	<div class="box3">
		<a name="about"></a>
		<div class="center_1150 flex">
			<div class=" box3_1">
			</div>
			<div class="box3_2">

				<h2>About Me</h2>
				<p> Hi my name is Andzej. I'm 31 years old and live in Lithuania. <br> I did my first commercial work in IT as
					a network security programer from 2008 to 2017. <br>
					I began programming in 2017. I began learning Java at "Baltic Institute of Technology"
					in 2018. Now I'm a self employed person and I can make projects using: HTML, CSS, JS, Jquery, Php and Java. <br>
					All my work is on GitHub.
				</p>
			</div>
		</div>

	</div>

	<div class="box4">
		<h1>
			<div id="messenger"></div>
		</h1>
	</div>
	<div class="box5">
		<a name="myWorks"></a>
		<div id="triangle-box">
			<div id="triangle"></div>
		</div>
	</div>
	<div class="box6 ">
		<div class="center_1150 flex">
			<div class="box6_1">
				<a href="http://www.elektros-meistras.lt" target="blank">
					<h2>www.elektros-meistras.lt</h2>
				</a>
				<div class="brline"></div>
				<p>I made this web page using HTML and CSS.</p>
				<div id="git_flex">
					<a href="https://github.com/andzejc/elektros-meistras.git" target="blank"><i class="fab fa-github-square fa-3x"></i></a>
				</div>
			</div>
			<div class="box6_2">
				<img src="img/el-meistras.JPG" alt="img">
			</div>
		</div>
		<div class="center_1150 flex">
			<div class="box6_2">
				<img src="img/uzdavinukas.JPG" alt="img">
			</div>
			<div class="box6_1">
				<a href="http://www.task.andzej.com" target="blank">
					<h2>www.task.andzej.com</h2>
				</a>
				<div class="brline"></div>
				<p>It's a web app for young pupils. They can choose different mathematical tasks of varrying difficulty. The Web app is made using HTML, CSS, PHP and MYSQL.</p>
				<div id="git_flex">
					<a href="https://github.com/andzejc/uzdavinukas.git" target="blank"><i class="fab fa-github-square fa-3x"></i></a>
				</div>
			</div>
		</div>
		<div class="center_1150 flex">
			<div class="box6_1">
				<h2>Clients registration system</h2>
				<div class="brline"></div>
				<p>It's a clients registration system. Here you can create, read, update and delete persons. Information about
					clients is written to different databases tables which are connected by foreign keys.
					I made it using JAVA(Servlets, JSP and JDBC) and MYSQL.</p>
				<div id="git_flex">
					<a href="https://github.com/andzejc/javaFirstProject.git" target="blank"><i class="fab fa-github-square fa-3x"></i></a>
				</div>
			</div>
			<div class="box6_2">
				<img src="img/Crs.JPG" alt="img">
			</div>
		</div>
		<div class="center_1150 flex">
			<div class="box6_2">
				<img src="img/java2.JPG" alt="img">
			</div>
			<div class="box6_1">
				<h2>Clients registration system</h2>
				<div class="brline"></div>
				<p>
					This client registration system is equivalent to the first, except for the JDBC being replaced to JPA, Hibernate and changed web
					interface.
				</p>
				<div id="git_flex">
					<a href="https://github.com/andzejc/javaSecondProject.git" target="blank"><i class="fab fa-github-square fa-3x"></i></a>
				</div>
			</div>
		</div>
		<div class="center_1150 flex">
			<div class="box6_1">
				<a href="http://www.andzej.com" target="_blank">
					<h2>www.andzej.com</h2>
				</a>
				<div class="brline"></div>
				<p>This is my portfolio. I made it using HTML,CSS and JS. </p>
				<div id="git_flex">
					<a href="https://github.com/andzejc/portfolio.git" target="blank"><i class="fab fa-github-square fa-3x"></i></a>
				</div>
			</div>
			<div class="box6_2">
				<img src="img/portfolio.JPG" alt="img">
			</div>
		</div>
		<div class="center_1150 flex">
				<div class="box6_2">
					<img src="img/sport.JPG" alt="img">
				</div>
				<div class="box6_1">
						<a href="http://www.fitness.andzej.com" target="blank">
							<h2>fitness.andzej.com</h2>
						</a>
					<div class="brline"></div>
					<p>
							It's a fitness web page. I made it using HTML,CSS.
					</p>
					<div id="git_flex">
						<a href="https://github.com/andzejc/fitness.git" target="blank"><i class="fab fa-github-square fa-3x"></i></a>
					</div>
				</div>
			</div>
	</div>
	<div class="box7">
		<div id="triangle-box">
			<div id="triangle2"></div>
		</div>
	</div>

	<div class="box8_flex">
		<a name="skills"></a>
		<h2>My Skils</h2>
		<div class="grid">
			<img src="img/html5.png" alt="img">
			<img src="img/css3.png" alt="img">
			<img src="img/js3.png" alt="img">
			<img src="img/jquery.png" alt="img">
			<img src="img/php.png" alt="img">
			<img src="img/wordpress.png" alt="img">
			<a href=""></a>
			<img src="img/java.png" alt="img">
			<a href=""></a>
		</div>
	</div>

	<footer>
		<a name="contact"></a>
		<div class="center_1150">
			<div class="footer_conteriner1">
				<div class="flex">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18566.600354723905!2d25.29991100863221!3d54.43072223410643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ddc3624f37aff1%3A0x2600d18d4c45b031!2zSmHFoWnFq25haQ!5e0!3m2!1slt!2slt!4v1544467822424"
					 frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="footer_conteriner2">
				<div class="flex">
					<div class="links">
						<a href="https://www.linkedin.com/in/andžej-černevič-761904150" target="blank"><i class="fab fa-linkedin fa-3x"></i></a>
						<a href="https://github.com/andzejc?tab=repositories" target="blank"><i class="fab fa-github-square fa-3x"></i></a>

					</div>
					<div>
							<p><?php include( 'php/counter.php' ); ?></p>
						<p>&copy; 2018 by Andzej Cernevic</p>
					</div>
					<div>
						<address> Lauko 4 St, Jasiunai LT-17249 <br />
							Lithuania<br/>
							Phone: +370(673)10 342 <br />
							Email: andzej.cernevic@gmail.com
						</address>
					</div>
				</div>
			</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="script/script.js"></script>
</body>

</html>