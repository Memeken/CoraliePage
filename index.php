<?php
  include 'mail.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Coralie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cookie|Courgette|Lobster+Two|Nanum+Myeongjo&display=swap" rel="stylesheet"> 
  </head>
  <body>
    <!-- lien haut de page -->
    <div class="page">
      <div class='retourHaut'><a href='#Home' class="home" ><img src=" images/Logo/arrow.png " alt="retourHaut"></a></div>
    </div>
    <!-- header -->
    <nav class="navbar is-dark">
        <!-- navbar brand, navbar menu... -->
        <a class= "coralieD" class="navbar-item" class=" has-text-white-ter" name="Home">
            <!-- home -->
            <h1>Coralie DAMERY<img src="images/baseline_all_inclusive_white_18dp.png" alt="infinity"></h1>
          </a>
          <!-- download -->
          <div class="control is-right">
          <a href="CvCoralieDamery.pdf" download  ><button class="button is-light is-medium"> Télécharger le CV en .pdf</button></a>
          </div>
        <!-- navigation -->
        <div class="dropdown is-right">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <img class="menu" src="images/baseline_reorder_white_18dp.png" alt="menu">
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#About_me">About me</a>
            <a class="dropdown-item" href="#Domaines_aptitudes">Domaines & Aptitudes</a>
            <a class="dropdown-item" href="#Compétences_tech">Compétences Techniques</a>
            <a class="dropdown-item" href="#Portfolio">Portfolio</a>
            <a class="dropdown-item" href="#Intérêts">Intérêts</a>
            <a class="dropdown-item" href="#Contact">Contact</a>
          </div>
        </div>
      </nav>
    <!-- image -->
    <figure class="image is-16by9">
      <img class="has-ratio" width="640" height="360" src="images/coffee-.jpg" frameborder="0" allowfullscreen></img>
      <div class="slider"><p class="main">Welcome<br>on my page!</p></div>
    </figure>
    <!-- bloc About me -->
    <div class="logo"> <a name="About_me"> <img class="img_logo" src="images/Logo/eye.png" alt="eye"></a></div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <div class="tile is-child box">
          <p class="title">Développeuse Web Junior</p>
          <figure class="image is-128x128" class="moi">
            <img src="images/coraliedamery.jpeg">
          </figure>
          <br>
          <br>
          <p>Hello, je m’appelle Coralie, actuellement en formation dans le développement web & mobile avec la fabrique Simplon.Co, Grandes écoles du numérique, je suis à la recherche d'une entreprise qui pourrait m'accueillir pour mettre en application mes connaissances.</p>
          <br>
          <p>Forte d’une expérience dans le commerce d’une dizaine d’années, je souhaite aujourd’hui m’investir totalement dans le domaine du web.</p>
          <br>
          <p>Je serai ravie de pouvoir apporter mes compétences acquises au cours de ma formation(HTML/CSS/JS/GITHUB/CMS/PHP) ainsi que mon profond enthousiasme à travailler en équipe.</p>
        </div>
      <div class="tile is-4 is-vertical is-parent">
        <div class="tile is-child box">
          <p class="title">Formations</p>
          <p><strong>2019/2020</strong>- Formation Développeur Web/Web mobile.</p>
          <p><strong>2008</strong> - Licence Marketing option publicité et communication</p>
          <p><strong>2007</strong> - BTS Professions Immobilières</p>
          <p><strong>2005</strong> - Bac SES option Math Appliqués</p>
        </div>
        <div class="tile is-child box">
          <p class="title">Emplois</p>
          <p><strong>2019</strong> - Projet client site/application bien être, géré avec les méthodes agiles</p>
          <p><strong>2012/2019</strong> - Gestionnaire administrative, commerciale et comptable en agence immobilière</p>
          <p><strong>2008/2009</strong> - Employée gestion client chez Leroy Merlin</p>
        </div>
      </div>
      </div>
    </div>
    <!-- bloc domaine et aptitude -->
    <div class="logo"> <a name="Domaines_aptitudes"><img class="img_logo" src="images/Logo/Fusee.png" alt="eye"></a></div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Gestion de projet</p>
          <p class="subtitle">Vente & développement</p>
          <div class="content">
            <p>Identification des besoins clients, chiffrage du devis, suivi des dossiers jusqu’à l’aboutissement du projet, adaptation et suivi de nouvelles stratégies, formée aux méthodes agiles.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Gestion d'équipe</p>
          <p class="subtitle">Négociation & projet Web</p>
          <div class="content">
            <p>Mise en place et animation des réunions / retrospectives, répartitions des tâches en équipe, force de proposition et résolution des difficultés.</p>
          </div>
        </article>
      </div>
      <!-- <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title"></p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div> -->
    </div>
    <!-- bloc compétences tech -->
    <div class="logo"> <a name="Compétences_tech"><img class="img_logo" src="images/Logo/code1.png" alt="eye"></a></div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Langages Informatiques</p>
          <p class="subtitle">Back & Front-end</p>
          <div class="content">
            <p><img src="images/Logo/html.png" alt="Logo_HTML"> HTML</p>
            <div class="container">
              <div class="skills html">90%</div>
            </div>
            <br>
            <p><img src="images/Logo/css3.png" alt="Logo_CSS"> CSS</p>
            <div class="container">
              <div class="skills css">80%</div>
            </div>
            <br>
            <p><img src="images/Logo/php.png" alt="Logo_PHP"> PHP</p>
            <div class="container">
              <div class="skills php">70%</div>
            </div>
            <br>
            <p><img src="images/Logo/mysql.png" alt="Logo_MYSQL"> MySql</p>
            <div class="container">
              <div class="skills mysql">60%</div>
            </div>
            <br>
            <p><img src="images/Logo/javascript.png" alt="Logo_JavaScript"> JavaScript</p>
            <div class="container">
              <div class="skills js">60%</div>
            </div>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Logiciels Design</p>
          <p class="subtitle">IOS & Adobe</p>
          <div class="content">
            <p><img src="images/Logo/procreate.png" alt="Logo_Procreate" width="13%"> Procreate</p>
            <div class="container">
              <div class="skills procreate">90%</div>
            </div>
            <br>
            <p><img src="images/Logo/adobe-after-effects.png" alt="Logo_AE"> After-Effects</p>
            <div class="container">
              <div class="skills ae">60%</div>
            </div>
            <br>
            <p><img src="images/Logo/adobe-illustrator.png" alt="Logo_AI"> Illustrator</p>
            <div class="container">
              <div class="skills ai">80%</div>
            </div>
            <br>
            <p><img src="images/Logo/adobe-indesign.png" alt="Logo_AIN"> Indesign</p>
            <div class="container">
              <div class="skills ain">60%</div>
            </div>
            <br>
            <p><img src="images/Logo/adobe-photoshop.png" alt="Logo_AP"> Photoshop</p>
            <div class="container">
              <div class="skills ap">70%</div>
            </div>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Framework</p>
          <p class="subtitle">Manipulation & Intégration</p>
          <div class="content">
          <p><img src="images/Logo/wordpress.png" alt="Logo_wordpress"> Wordpress</p>
            <div class="container">
              <div class="skills wp">60%</div>
            </div>
            <br>
            <p><img src="images/Logo/bulma.png" alt="Logo_bulma"> Bulma</p>
            <div class="container">
              <div class="skills bulma">80%</div>
            </div>
            <br>
            <p><img src="images/Logo/bootstrap.png" alt="Logo_bootstrap"> Bootstrap</p>
            <div class="container">
              <div class="skills bootstrap">70%</div>
            </div>
            <br>
            <p><img src="images/Logo/symfony.png" alt="Logo_symfony"> Symfony</p>
            <div class="container">
              <div class="skills symfony">50%</div>
            </div>
          </div>
        </article>
      </div>
    </div>
    <!-- bloc portfolio -->
    <div class="logo"> <a name="Portfolio"><img class="img_logo" src="images/Logo/portfolio.png" alt="Portfolio"></a></div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">My GITHUB</p>
          <p class="subtitle"><a name="Github" href="https://github.com/Memeken" ><img class="link"  src="images/Logo/github.png" alt="Github"></a></p>
          <div class="content">
            <p>Un aperçu de fonctionnalités et sites fait pendant la période de formation.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">My Behance</p>
          <p class="subtitle"><a  name="Behance" href="https://www.behance.net/coraliedamery" ><img class="link" src="images/Logo/behance.png" alt="Behance"></a></p>
          <div class="content">
            <p>Quelques créations faites sur Ipad pro 12 avec le logiciel Procreate.</p>
          </div>
        </article>
      </div>
    </div>
    <!-- bloc interets -->
    <div class="logo"> <a name="Intérêts"><img class="img_logo" src="images/Logo/finger.png" alt="Intérêts"></a></div>
    <div class="hob" class="tile is-ancestor">
      <div  class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Intérêts</p>
          <div class="content">
            <img class="logo_hob" src="images/Logo/lego.png" alt="lego">
            <img class="logo_hob" src="images/Logo/game-boy-.png" alt="video_game">
            <img class="logo_hob" src="images/Logo/skyrim.png" alt="skyrim">
            <img class="logo_hob" src="images/Logo/assassins-creed.png" alt="assassins-creed">
            <img class="logo_hob" src="images/Logo/krita.png" alt="design">
            <img class="logo_hob" src="images/Logo/netflix.png" alt="streaming">
          </div>
        </article>
      </div>
    </div>
    <!-- bloc Contact -->
    <div class="logo"> <a name="Contact"><img class="img_logo" src="images/Logo/code.png" alt="Contact"></a></div>
    <div class="container is-widescreen">
        <form method="POST" action="">     
          <div class="field">
            <label class="label">Nom</label>
            <div class="control">
              <input class="input" type="text" placeholder="Votre nom" name="nom">
            </div>
          </div>
          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="email" placeholder="Votre mail" name="mail">
            </div>
          </div>
          <div class="field">
            <label class="label">Votre Message</label>
            <div class="control">
              <textarea class="textarea" name="message" placeholder="Votre message"></textarea>
            </div>
          </div>
          <div class="field is-grouped">
            <div class="control">
            <input type="submit" name="mailform" value="Envoyer"class="button is-link">
            </div>
          </div>          
      </form>
    </div>
      <?php if(isset($msg)) {
        // echo $msg;
        echo '<SCRIPT language="Javascript">alert(\''.$msg.'\', \'Information !\');</SCRIPT>';
            }
      ?>
      <!-- bloc site et mentions légales -->
    <div class="logo"> <a name="Facebook" href="https://fr-fr.facebook.com/people/M%C3%A9m%C3%A9-Ken/100010133447454" ><img class="img_logo" src="images/Logo/facebook.png" alt="Facebook"></a><a name="Instagram" href="https://www.instagram.com/meme_ken/"><img class="img_logo" src="images/Logo/instagram.png" alt="Instagram"></a><a name="Discord" href="#" onclick="alert('Coralie#7043');"><img class="img_logo" src="images/Logo/discorde.png" alt="Discord"></a><a name="Map" href="https://www.google.com/maps/place/13470+Carnoux-en-Provence/@43.2590057,5.5479765,14z/data=!3m1!4b1!4m5!3m4!1s0x12c9a4b3c9ddbf41:0x40819a5fd96fe20!8m2!3d43.258996!4d5.565438?hl=fr"><img class="img_logo" src="images/Logo/periscope.png" alt="Map"></a>
    <p><a class="legal" href="#" onclick="alert('Site réalisé en partie avec Bulma / Boostrap/ Icone8.fr');"> Mentions légales</a></p></div>
  
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    
  </body>
</html>