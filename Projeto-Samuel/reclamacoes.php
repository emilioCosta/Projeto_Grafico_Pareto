<?php
    include 'library/common.php'
 
?>

<html>
    <head>
        <!--<link href="MaterialIcons.css" rel="stylesheet">-->
        <!--<style rel="stylesheet" href="materialize/css/materialize.min.css"></style>-->
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	   <link rel="stylesheet" href= "materialize/css/materialize.min.css">
       <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script type="text/javascript" src="materialize/js/materialize.min.js"></script>           
       <script src="materialize/js/materialize.min.js"></script>	 
       <script src="reclamacoes.js"></script>
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
                                        <li class="active"><a href="reclamacoes.php"><i class="material-icons left">assignment</i>Reclamações</a></li>
                                        <li ><a href="#"><i class="material-icons left">assessment</i>Gráficos</a></li>
                                        <li ><a href="login.php"><i class="material-icons left">contacts</i>Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>    
        
    <?php
        
        if(!isset($_SESSION["user"]))
        {
            
    ?>
    
        <div class="row">
            <section class="white col l10 push-l1" style="position:absolute; top: 80px; border-radius: 20px">
            
                <br>
                <form class="col s12" action="reclamacoes.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nome" type="text" class="validate" name="nomeCliente">
                            <label for="nome">Nome Completo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="telefone" type="tel" class="validate" name="tel">
                            <label for="telefone">Telefone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                       <div id="select" class="input-field col s12" >
                            <select name="tipoReclamacao">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="1">Atendimento</option>
                                <option value="2">Prazo de reparação</option>
                                <option value="3">Avaria</option>
                                <option value="4">Logística</option>
                                <option value="5">Outros</option>
                            </select>
                            <label>Tipo da Reclamação</label>
                        </div>

                         <div hidden="true" id="outro" class="input-field col s6">
                            <input id="outros" placeholder="Digite os motivos." type="text" length="100" class="validate" name="outro">
                            <label for="outros">Outros</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="descricao" class="materialize-textarea" length="500" name="reclamacao"></textarea>
                            <label for="descricao">Reclamação</label>
                        </div>
                    </div>
                    <div class="row">
                         <div class="center-align">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                <i class="material-icons left">send</i> Enviar
                            </button>
                         </div>
                    </div>
                </form>
            
        </section>
            </div>
        
    <?php
            if(isset($_POST['action']))                                                          
            {
                $conexao = conexao();
                
                date_default_timezone_set('America/Sao_Paulo');
                $dataAtual = date('d/m/Y');
                
                $nomeDoCliente = $_POST['nomeCliente'];
                $telefone = $_POST['tel'];
                $email = $_POST['email'];
                $tipoReclamacao = $_POST['tipoReclamacao'];
                
                if($tipoReclamacao == 5)
                    $textOutro = $_POST['outro'];
                
                $reclamacao = $_POST['reclamacao'];
                
                $sql = "INSERT INTO Mensagem VALUES ('$nomeDoCliente', '$telefone', '$email','$reclamacao','$dataAtual','$tipoReclamacao','$textOutro')";
                
                $stmt = sqlsrv_query($conexao,$sql);
    
                if ($stmt) 
                {
                    echo "Inclusão realizada com sucesso.";
                }
                else 
                {
                    echo 'Falha na inclusão';
                }
                
                sqlsrv_free_stmt($stmt);
                sqlsrv_close($conexao);
            }
                        
        }
        else
        {
            
    ?>
        <div class="row">
            <section class="white col l10 push-l1" style="position:absolute; top: 80px; border-radius: 20px">
            
                <br>
                <form class="col s12">
                
                </form>
            
            </section>
        </div>
    <?php
        
        }
        
    ?>
       <!-- <script src="jquery-3.1.1.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script>-->
        
    </body>
</html>
