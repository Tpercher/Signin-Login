<?php session_start(); ?>
<?php
ini_set('display_errors',1);

require ("db.php");
require("functions.fn.php");

if (isset($_POST["pseudo"]) && 
    isset($_POST["password"]))
{
  $pseudo  = htmlspecialchars($_POST["pseudo"]);
  $password= htmlspecialchars($_POST["password"]);

    $request = $db->prepare("SELECT * FROM users WHERE pseudo LIKE :pseudo AND password LIKE :password"); 
     $request->execute(
      array(
        "pseudo" => $pseudo,
        "password" => $password
      ));

   $users = $request->fetch(PDO::FETCH_ASSOC); 
   if($users == true){
    $_SESSION['pseudo'] = $users['pseudo'];
   header('Location: partage.php');
   } 
}

 

?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8"/>
      <title> Connexion</title>
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="A_css_login.css">
      <link rel="stylesheet" href="A_css_tablette_signin.css" media= "(min-width:379px) and (max-width:1059px)">
          <link rel="stylesheet" href="A_css_smartphone_faf.css" media= "(max-width:379px)">
          <!-- <link rel="stylesheet" href="A_css_pc_faf.css" media= "(min-width:800px) and (max-width:1280px)"> -->
    </head>

  <body>
    <header>
      <div id="menu-accordeon">
        <ul>
          <li><a href="index.php" title="Page d'accueil">Accueil</a></li>
          <li><a href="#" title="Acteurs">Acteurs</a>
            <ul>
              <li><a href="A_php_acteursff1.php">Fast 1</a></li>
              <li><a href="A_php_acteursff2.php">Fast 2</a></li>
              <li><a href="A_php_acteursff3.php">Fast 3</a></li>
              <li><a href="A_php_acteursff4.php">Fast 4</a></li>
              <li><a href="A_php_acteursff5.php">Fast 5</a></li>
              <li><a href="A_php_acteursff6.php">Fast 6</a></li>
              <li><a href="A_php_acteursff7.php">Fast 7</a></li>
              <li><a href="A_php_acteursff8.php">Fast 8</a></li>
            </ul>
          </li>
          <li><a href="#" title="Tous les Fast and Furious">Saga</a>
            <ul>
              <li><a href="A_php_sagaff1.php">Fast 1</a></li>
              <li><a href="A_php_sagaff2.php">Fast 2</a></li>
              <li><a href="A_php_sagaff3.php">Fast 3</a></li>
              <li><a href="A_php_sagaff4.php">Fast 4</a></li>
              <li><a href="A_php_sagaff5.php">Fast 5</a></li>
              <li><a href="A_php_sagaff6.php">Fast 6</a></li>
              <li><a href="A_php_sagaff7.php">Fast 7</a></li>
              <li><a href="A_php_sagaff8.php">Fast 8</a></li>
            </ul>
          </li>
          <li><a href="partage.php" title="Partage">Partage</a></li>
          <?php if($_SESSION){ ?>
          <li><a href="logout.php">Déconnexion</a></li>
          <?php }else{ ?>
          <li><a href="login.php" title="Connecte-toi">Connexion</a></li>
          <a href="signin.php" class="button" title="Inscris-toi">Inscription</a>
          <?php }; ?>
        </ul>
      </div>
    </header>
    <main>
      <div class="col-md-6">
      <div class="panel panel-primary">
      <div class="panel-heading">Connecte-toi !</div>
    
      <div class="panel-body">
                <form method="post" action="login.php" class="form-horizontal" role="form">
    
                          <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Pseudo</label>
                      <div class="col-sm-10">
                          <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Pseudo"/> 
                      </div>
                  </div>
                
    
                   <div class="form-group">
                        <label class="control-label col-sm-2" for="password">Password</label>
                      <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password"/> 
                      </div>
                    </div>
                
                
    
                <div class="form-group">
                      <div class="col-xs-offset-2 col-xs-10">
                          <button type="submit" class="btn btn-primary">Connexion</button>
                      </div>
                  </div>
                </form>
      </div>
      </div>
      </div>
    </main>
  </body>
    


<footer>
      <aside>
        <img id="logofooter" src="img\Accueil\logo_faf_footer.png">
        <img id="universal_logo2" src="img\Accueil\universal_logo2.png" width="9%">
      </aside>
        <div id="menufooter">
          <ul>
            <li><a href="index.php" title="Page d'accueil">Accueil</a></li>
            <li><a href="#" title="Acteurs">Acteurs</a>
              <ul>
                <li><a href="A_php_acteursff1.php">Fast 1</a></li>
                <li><a href="A_php_acteursff2.php">Fast 2</a></li>
                <li><a href="A_php_acteursff3.php">Fast 3</a></li>
                <li><a href="A_php_acteursff4.php">Fast 4</a></li>
                <li><a href="A_php_acteursff5.php">Fast 5</a></li>
                <li><a href="A_php_acteursff6.php">Fast 6</a></li>
                <li><a href="A_php_acteursff7.php">Fast 7</a></li>
                <li><a href="A_php_acteursff8.php">Fast 8</a></li>
              </ul>
            </li>
            <li><a href="#" title="Tous les Fast and Furious">Saga</a>
              <ul>
                <li><a href="A_php_sagaff1.php">Fast 1</a></li>
                <li><a href="A_php_sagaff2.php">Fast 2</a></li>
                <li><a href="A_php_sagaff3.php">Fast 3</a></li>
                <li><a href="A_php_sagaff4.php">Fast 4</a></li>
                <li><a href="A_php_sagaff5.php">Fast 5</a></li>
                <li><a href="A_php_sagaff6.php">Fast 6</a></li>
                <li><a href="A_php_sagaff7.php">Fast 7</a></li>
                <li><a href="A_php_sagaff8.php">Fast 8</a></li>
              </ul>
            </li>
            <li><a href="partage.php" title="Partage">Partage</a></li>
            <?php if($_SESSION){ ?>
            <li><a href="logout.php">Déconnexion</a></li>
            <?php }else{ ?>
            <li><a href="login.php" title="Connecte-toi">Connexion</a></li>
            <a href="signin.php" class="button" title="Inscris-toi">Inscription</a>
            <?php }; ?>

              <div id="legende">
                <a title="legende">Fast and Furious |</a>
                <span> &copy; 2017 | </span>
                <a title="mentions légales">Mentions légales |</a>
              </div>
          </ul>

        </div>
    </footer>
  </body>
</html>



