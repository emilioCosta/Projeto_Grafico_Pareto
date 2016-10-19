<html>
    <head>
        <!--<link href="MaterialIcons.css" rel="stylesheet">-->
        <!--<style rel="stylesheet" href="materialize/css/materialize.min.css"></style>-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href= "materialize/css/materialize.min.css">
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>           
      <script src="materialize/js/materialize.min.js"></script>	 
    </head>
    <body class="blue-grey lighten-5">
         
        <div class="navbar-fixed">
            <nav class="z-depth-2">
                <div class="nav-wrapper indigo lighten-1">
                  <div class="row">
                      <div class="col s6">
                          <div class="row">
                            <a href="home.php" class="brand-logo col s4 push-s2">Logo</a>
                          </div>
                      </div>
                      <div class="col s6">
                          <div class="container">
                              <ul  class="right hide-on-med-and-down">
                                <li><a href="reclamacoes.php"><i class="material-icons left">assignment</i>Reclamações</a></li>
                                <li ><a href="#"><i class="material-icons left">assessment</i>Gráficos</a></li>
                                <li ><a href="#"><i class="material-icons left">contacts</i>Login</a></li>
                              </ul>
                          </div>
                      </div>
                    </div>
                </div>
            </nav>
        </div>
        
        <?php
        if (isset($_POST['action']))
            {
                //conexao com o banco
                $_SESSION["user"] = $_POST["user"];
                header("Location: login.php");
            }
        ?>
       <!-- <script src="jquery-3.1.1.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script>-->
    </body>
</html>