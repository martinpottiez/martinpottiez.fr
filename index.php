<html>
  <head>
    <title>Martin Pottiez - Computer Engineer</title>
    <meta name="viewport" content="width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="page flex column white" style="justify-content:space-between;">
      <header class="flex flex-end">
        <nav>
          <ul>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#resume">Resume</a></li>
            <li><a href="#contact" class="a-border">Contact</a></li>
          </ul>
        </nav>
      </header>
      <div class="flex" style="margin:initial">
        <div id="welcomeBox" class="parallax">
          <h1>Hi, I'm <span class="scramble">Martin</span><span class="t-blue">.</span></h1>
          <p class="left">
            I'm a 🇫🇷 software engineer and <br />
            iOS developer.<br />
            <a href="#contact" class="a-button">Contact me</a>
          </p>
        </div>
        <div id="page-img">
          <img src="img/martin2.jpg" alt="Martin's profil" width="600px;"/>
        </div>
      </div>
    </div>
    <div id="me" class="page flex column black" style="padding-bottom:15vw;">
      <div>
        <h2>BLOG</h2>
      </div>
      <div class="flex">
        <div class="parallax bot">
          <div class="left">
            I am a young student in computer engineering based in Calais, France.<br />
            I'm looking for an internship for the <span class="t-blue">Summer 2021</span>.<br />
            You are a campany and you're searching someone for a mission/project ?<br />
            I'm your man.<br />
            I'm motivated, sociable, patient, passionnate and very exciting to take up challenges !
          </div>
        </div>
      </div>
    </div>
    <div id="projects" class="page flex column grey" style="justify-content:flex-start;padding-bottom:10vw;">
      <div>
        <h2 class="scramble-title">Jocspret</h2>
      </div>
      <div class="grid">
        <div class="project flex center">
          <div><img src="img/classrewards.png" alt="https://weewin.fr"/></div>
          <div class="project-caption flex column j-e">
            <div>
              Rewards platform based on the behavior of pupils in a class (WIP)
            </div>
            <div>
              <a href="/classrewards" target="_blank">View Project</a>
            </div>
          </div>
        </div>
        <div class="project flex center">
          <div><img src="img/priinted.png" alt="https://www.Priinted.com"/></div>
          <div class="project-caption flex column j-e">
            <div>
              Platform connecting 3D printers and customers to each other.
            </div>
            <div>
              <a href="https://www.priinted.com" target="_blank">Visit Website</a>
            </div>
          </div>
        </div>
        <div class="project flex center">
          <div><img src="img/weewin.png" alt="https://weewin.fr"/></div>
          <div class="project-caption flex column j-e">
            <div>
              Video games sales platform to play more and spend less.
            </div>
            <div>
              <a href="" target="_blank">View Project</a>
            </div>
          </div>
        </div>
        <div class="project flex center">
          <div><img src="img/laboduino.png" alt="https://Laboduino.fr"/></div>
          <div class="project-caption flex column j-e">
            <div>
              Personnal blog about my projects and experiences.
            </div>
            <div>
              <a href="https://www.laboduino.fr" target="_blank">Visit Website</a>
            </div>
          </div>
        </div>
        <div class="project flex center">
          <div><img src="img/eiltech.png" alt="https://portail.eilco.fr/eiltech/"/></div>
          <div class="project-caption flex column j-e">
            <div>
              Website of an association of my engineering school.
            </div>
            <div>
              <a href="https://portail.eilco.fr/eiltech/" target="_blank">Visit Website</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="resume" class="grey flex column center" style="justify-content:flex-start;padding-bottom:10vw;">
      <div>
        <h2>Do you need more ?</h2>
      </div>
      <div>
        <p>
          You can see all my experiences and my school cursus on LinkedIn or on my resume.
        </p>
      </div>
      <div>
        <a href="cve_martin.pdf" target="_blank" class="button2">View my resume</a><a href="https://www.linkedin.com/in/martin-pottiez/" target="_blank" class="button">Go on my LinkedIn</a>
      </div>
    </div>
    <div id="contact" class="page flex column blue" style="justify-content:flex-start;">
      <div>
        <h2>Interested ? Let's talk !</h2>
      </div>
      <div class="content center">
        <p class="m0" id="contact-info"></p>
        <form method="POST">
          <div class="flex column a-s">
            <div class="flex">
              <input type="text" id="contact-nom" class="flex-box" name="name" placeholder="Name"/>
              <input type="text" id="contact-prenom" class="flex-box" name="surname" placeholder="Surname"/>
            </div>
            <div class="flex column a-s">
              <input type="email" id="contact-mail" name="mail" placeholder="Mail"/>
              <textarea name="message" id="contact-message" placeholder="Message"></textarea>
              <input type="submit" id="contact-submit" name="send" value="Send"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
  <script   src="https://code.jquery.com/jquery-3.5.1.js"   integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="   crossorigin="anonymous"></script>
  <script src="js/jq-visible/jquery.visible.js"></script>
  <script src="js/jq.js"></script>
</html>
