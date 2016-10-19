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
    
        <section>
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
                                    <li class="active"><a href="login.php"><i class="material-icons left">contacts</i>Login</a></li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        
        <?php 
        session_start();
        
            if (isset($_GET["sair"]))
            {
                session_destroy(); 
                header("Loction:login.php");
            }
        
            if (isset($_POST['action']))
            {
                //conexao com o banco
                $_SESSION["user"] = $_POST["user"];
            }
        
            
        
            if (!isset($_SESSION['user']))
            {
                
        ?>
        
        <div class="row">
            <section class="white col l10 push-l1" style="position:absolute; top: 80px; border-radius: 20px">
                <div class="row">
                    <form class="col s12" action="login.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="user" name="user" type="text" class="validate">
                                <label for="user">Usuário</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="senha" name="senha" type="password" class="validate">
                                <label for="senha">Senha</label>
                            </div>
                        </div>
                        <div class="row">
                             <div class="center-align">
                                <button class="btn waves-effect waves-light" type="submit" name="action">
                                    <i class="material-icons left">send</i> Entrar
                                </button>
                             </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        
        <?php
        
            }
            else
            {
                
        ?>
        <div class="row">
            <section class="white col l10 push-l1" style="position:absolute; top: 80px; border-radius: 20px;"> 
                <span class="flow-text center-align"><h1>Seja bem-vindo, <?php echo $_SESSION["user"]; ?>!</h1></span>
                <span class="flow-text center-align"><h2>Clique <a href="login.php?sair=1">aqui</a> se deseja sair.</h2></span>
            </section>
        </div>
        <?php
            
            }
        
        ?>
        
       <!-- <script src="jquery-3.1.1.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script>-->
    </body>
</html>