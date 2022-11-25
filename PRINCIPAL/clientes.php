<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
         
    <!----===== Boxicons CSS ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_clientes.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>CarPrime</title> 
    <style>
        table{
            border: none;
            color: black;
            background: none;
        }

        tr:hover{
            color: #fff;
            background: #1E90FF;
        }

        td{
            border: none;
            padding: 5px;
        }

        .tbl{
            border: solid 1px black;
        }

        input{
            float: left;
            margin: auto;
            margin-left: 5px;
        
        }

        input:hover{
            transform: scale(1,1.1);
        }

        .bt1{ 
            width: 200px;
            color: black;
            border: solid 1px;
        }


        .inp{
            width: 300px;
            height: 150px;
        }


        
    </style>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="imagens/cp.jpg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">CarPrime</span>
                    <span class="profession">Versão 1.0.0</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

         <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                         <i class='bi bi-house'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="clientes.php">
                            <i class="bi bi-person-lines-fill"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="veiculos.php">
                            <i class='"bi bi-truck'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Veículos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Financiamento.php">
                            <i class='bi bi-person-plus ' ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Financiamento</span>
                        </a>
                    </li>         

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="login.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
    
    <section class="home">
    <div id="conteudo">
    <form id="wrap" style="text-decoration: none; border: none" action="clientes.php" method="post">

        <input type="text" placeholder="Nome:" style="height: 32px" name="nome" class="form-control" aria-label="Username" aria-describedby="basic-addon1">&nbsp;&nbsp;
        <input type="text" placeholder="CPF" style="height: 32px" name="cpf" class="form-control" aria-label="Username" aria-describedby="basic-addon1">&nbsp;&nbsp;
        <input type="text" placeholder="email" style="height: 32px" name="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1"><br><br>
        <input type="text" placeholder="Endereço" style="height: 32px" name="endereco" class="form-control" aria-label="Username" aria-describedby="basic-addon1">&nbsp;&nbsp;
        <input type="date" placeholder="Data de Nascimento" style="height: 32px" name="dt_nasc" class="form-control" aria-label="Username" aria-describedby="basic-addon1">&nbsp;&nbsp;
        <input type="text" placeholder="Telefone" style="height: 32px" name="telefone" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        <br/><br/>
        <button type="submit" class="btn btn-outline-primary bt1" name="valida">Enviar</button>
</form>

    <div id="saida" style="text-decoration: none; border: none">
       
         <table class="table tbl">
          <thead  class="table-dark text-light" id="tb">
            <tr style="text-decoration: none;">
              <th scope="col" ><h4>Nome</h4></th>
              <th scope="col" ><h4>CPF</th>
              <th scope="col" ><h4>Email</th>
              <th scope="col" ><h4>Endereço</th>
              <th scope="col" ><h4>Data de Nascimento</th>
              <th scope="col" ><h4>Telefone</th>
               <th scope="col" ></th>
               <th scope="col" ></th>
            </tr>
          </thead>


            <hr/>
            <?php
    //puxar dados do formulario

    include 'conn.php';
    if(isset($_POST['valida'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $dt_nasc = $_POST['dt_nasc'];
        $telefone = $_POST['telefone'];

        try{
        if(empty($dt_nasc = $_POST['dt_nasc'])){
            throw new Exception();
        }else{
        $gravar = $conn -> prepare('INSERT INTO `clientes` (`id_cliente`, `nm_cliente`, `cpf_cliente`, `email_cliente`, `ds_endereco`, `dt_nascimento`, `nm_telefone`) VALUES (NULL, ?, ?, ?, ?, ?, ?);');
        $gravar -> bindParam(1, $nome);
        $gravar -> bindParam(2, $cpf);
        $gravar -> bindParam(3, $email);
        $gravar -> bindParam(4, $endereco);
        $gravar -> bindParam(5, $dt_nasc);
        $gravar -> bindParam(6, $telefone);
        $gravar -> execute();
        echo "<h4>".$nome." Cadastrado com Sucesso</h4>";
        }
        }catch(Exception $e){
            echo "<h4>Houve um erro ao efetuar o cadastro, por favor verifique os dados e tente novamente!</h4>";
        }
    
    }



    // aviso de exclusao

    if(isset($_GET['aviso'])){
        $id=$_GET['id'];
        $nome = $_GET['nome'];
        echo "<h4>Deseja realmente excluir ".$nome."?</h4>";
        echo "<h4><a href='clientes.php?excluir&id=$id&nome=$nome'>Sim</a>"."&nbsp"."&nbsp"."<a href='clientes.php'>Não</a></h4>";
    }

    //exclusao definitiva

    if(isset($_GET['excluir'])){
        $id=$_GET['id'];
        $nome = $_GET['nome'];
        $excluir = $conn -> prepare('DELETE FROM clientes WHERE `clientes`.`id_cliente` = ?');
        $excluir -> bindParam(1, $id);
        $excluir -> execute();
        echo "<h4>".$nome." excluido com sucesso!</h4>";
    }

    //exibir todos os resultados na tabela
    
        $exibir_resultados = $conn -> prepare('SELECT * FROM `clientes`');
        $exibir_resultados -> execute();
            echo '<tbody>';
            while($row = $exibir_resultados->fetch()){
                echo "<tr class='tbl2' class='cor' style='top: 50px'>";
                echo "<td>".$row['nm_cliente']."</td>";
                echo "<td>".$row['cpf_cliente']."</td>";
                echo "<td>".$row['email_cliente']."</td>";
                echo "<td>".$row['ds_endereco']."</td>";
                $DataNasc = new DateTime($row['dt_nascimento']);
                echo "<td>".$DataNasc->format('d/m/Y')."</td>";
                echo "<td>".$row['nm_telefone']."</td>";
                echo "<td><a href='clientes.php?aviso&id= ".$row['id_cliente']."&nome=".$row['nm_cliente']."'>Excluir</a></td>";
                echo "<td><a href='clientes.php?avisoalterar&id= ".$row['id_cliente']."&nome=".$row['nm_cliente']."'>Alterar</a></td>";
                echo '<tr>';
            }
        echo '</tbody>';


        //Alteração
    if(isset($_GET['avisoalterar'])){
        $id = intVal($_GET['id']);
        $nome = $_GET['nome'];
        $alterar = $conn -> prepare('SELECT * FROM `clientes` WHERE `id_cliente`= ?;');
        $alterar -> bindValue(1, $id);
        $alterar -> execute();
        $row = $alterar -> fetch();

        ?>  

    <form action="clientes.php" method="POST">  
        <Input type="hidden" class="inp" name="id" value="<?php echo $row['id_cliente'];?>"/>
        <Input type="text" class="inp" name="nome" value="<?php echo $row['nm_cliente']; ?>"/>
        <Input type="text"  class="inp" name="cpf" value="<?php echo $row['cpf_cliente']; ?>"/>
        <Input type="text"  class="inp" name="email" value="<?php echo $row['email_cliente']; ?>"/>
        <Input type="text"  class="inp" name="endereco" value="<?php echo $row['ds_endereco']; ?>"/>
        <Input type="text"  class="inp" name="dt_nasc" value="<?php echo $row['dt_nascimento']; ?>"/>
        <Input type="text"  class="inp" name="telefone" value="<?php echo $row['nm_telefone']; ?>"/>
        <Input type="submit" name="altera" value="Alterar" class="bt1" id="btn1"/>
    </form>
   
    </br>
    </br>
  
        <?php
    }
    if(isset($_POST['altera'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        //$dt_nascimento = $_POST['dt_nasc'];
        $dt_nasci=new DateTime($_POST['dt_nasc']);
        $dt_nasc=$dt_nasci->format('Y/m/d');
        $telefone = $_POST['telefone'];
        $alterar = $conn -> prepare('UPDATE `clientes` SET `nm_cliente` = ?, `cpf_cliente` = ?, `email_cliente` = ?, `ds_endereco` = ?, `dt_nascimento` = ?, `nm_telefone` = ? WHERE `clientes`.`id_cliente` = ?;');
        $alterar -> bindValue(1, $nome);
        $alterar -> bindValue(2, $cpf);
        $alterar -> bindValue(3, $email);
        $alterar -> bindValue(4, $endereco);
        $alterar -> bindValue(5, $dt_nasc);
        $alterar -> bindValue(6, $telefone);
        $alterar -> bindValue(7, $id);
        $alterar -> execute();
        echo "<h4>Alterado com sucesso!</h4>";

    }


?>

        </table>
    </div>
    <script src="js/script_clientes.js"></script>
    <script src="js/script.js"></script>


</body>
<script>
    $(document).ready(()=>{
        $('.inp').css({'width':'150px','height':'30px','padding':'5px','margin-left':'20px','border-radius':'5px','border':'transparent'});

        $('#btn1').css({'width':'100px','height':'30px','margin-left':'20px','border-radius':'5px','text-align':'center'});

        $('#tb').css({'width':'90%','height':'10px'});

        $('#btn1').mouseover(()=>{
            $('#btn1').css({'color':'blue'});
        })

        $('#btn1').mouseout(()=>{
            $('#btn1').css({'color':'black'});
        })
        


    });
</script>
</html>