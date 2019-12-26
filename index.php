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
    <!-- header -->
    <nav class="navbar is-dark">
        <!-- navbar brand, navbar menu... -->
        <a class="navbar-item" class=" has-text-white-ter">
            <!-- home -->
            <h1>Coralie DAMERY  <img src="images/baseline_all_inclusive_white_18dp.png" alt=""></h1>
          </a>
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
      <img class="has-ratio" width="640" height="360" src="images/coffee.jpg" frameborder="0" allowfullscreen></img>
      <div class="slider"><p class="main">Welcome<br>on my page!</p></div>
    </figure>
    <div class="logo"> <a name="About_me"> <img class="img_logo" src="images/Logo/eye.png" alt="eye"></a></div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <div class="tile is-child box">
          <p class="title">Développeuse Web Junior</p>
          <figure class="image is-128x128" class="moi">
            <img src="images/me.jpeg">
          </figure>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
          <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
          <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
        </div>
      <div class="tile is-4 is-vertical is-parent">
        <div class="tile is-child box">
          <p class="title">Formations</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
        <div class="tile is-child box">
          <p class="title">Emplois</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
      </div>
      </div>
    </div>
    <div class="logo"> <a name="Domaines_aptitudes"><img class="img_logo" src="images/Logo/Fusee.png" alt="eye"></a></div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Third column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Third column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Third column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>
    <div class="logo"> <a name="Compétences_tech"><img class="img_logo" src="images/Logo/code1.png" alt="eye"></a></div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Third column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Third column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>
    <div class="logo"> <a name="Portfolio"><img class="img_logo" src="images/Logo/portfolio.png" alt="Portfolio"></a></div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Third column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Third column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>
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
    <!-- Contact -->
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
  
    
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
  </body>
</html>