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
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>CarPrime</title> 
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
                        <a href="cadastro.php">
                            <i class='bi bi-person-plus ' ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Cadastro</span>
                        </a>
                    </li>         

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../login/login.php">
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
        <input type="text" placeholder="Nome:" style="height: 32px" name="nome">&nbsp;&nbsp;
        <input type="text" placeholder="CPF" style="height: 32px" name="cpf">&nbsp;&nbsp;
        <input type="text" placeholder="email" style="height: 32px" name="email"><br><br>
        <input type="text" placeholder="Endereço" style="height: 32px" name="endereco">&nbsp;&nbsp;
        <input type="date" placeholder="Data de Nascimento" style="height: 32px" name="dt_nasc">&nbsp;&nbsp;
        <input type="text" placeholder="Telefone" style="height: 32px" name="telefone">
        <br/><br/>
        <input type="submit" name="valida" value="Enviar">
</form>

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
        $gravar = $conn -> prepare('INSERT INTO `clientes` (`id_cliente`, `nm_cliente`, `cpf_cliente`, `email_cliente`, `ds_endereco`, `dt_nascimento`, `nm_telefone`) VALUES (NULL, ?, ?, ?, ?, ?, ?);');
        $gravar -> bindParam(1, $nome);
        $gravar -> bindParam(2, $cpf);
        $gravar -> bindParam(3, $email);
        $gravar -> bindParam(4, $endereco);
        $gravar -> bindParam(5, $dt_nasc);
        $gravar -> bindParam(6, $telefone);
        $gravar -> execute();
    }

?>


    <div id="saida" style="text-decoration: none; border: none">
        <table width="100%" height="50px%">
            <tr style="border-radius: 5px; text-align: center">
            
                <td>
                    <b>Nome</b>
                </td>
                <td>
                    <b>CPF</b>
                </td>
                <td>
                    <b>EMAIL</b>
                </td>
            </tr>
            
        </table>
    </div>
    <script src="js/script_clientes.js"></script>
    <script src="js/script.js"></script>


</body>
</html>