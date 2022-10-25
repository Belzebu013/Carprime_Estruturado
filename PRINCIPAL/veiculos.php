<!DOCTYPE html>
<html lang="PT-BR">
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

    <section class="home home2">
        <div class="container">
            <div class="row">
                <!-- Card 1-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px;">
                        <img src="imagens/civic.jpg" class="card-img-top" alt="Honda Civic">
                        <div class="card-body">
                          <h5 class="card-title">HONDA CIVIC</h5>
                          <p class="card-text">
                            1.5 16v turbo<br>
                            Gasolina<br>
                            4p<br>
                            88.000 km<br>
                            Automático 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 2-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/hilux.jpg" class="card-img-top" alt="Land Hover Discovery">
                        <div class="card-body">
                          <h5 class="card-title">TOYOTA HILUX</h5>
                          <p class="card-text">
                            2.8 SRV 4X4 CD 16V<br>
                            Diesel<br>
                            4p<br>
                            60.000 km <br>
                            Automático
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 3-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/fox.jpg" class="card-img-top" alt="VOLKSWAGEN FOX
                        ">
                        <div class="card-body">
                          <h5 class="card-title">VOLKSWAGEN FOX
                        </h5>
                          <p class="card-text">
                            1.6 MSI COMFORTLINE 8V<br>
                            Flex<br>
                            4p<br>
                            50.000 km<br>
                            Manual 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 4-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/palio.jpg" class="card-img-top" alt="FIAT PALIO
                        ">
                        <div class="card-body">
                          <h5 class="card-title">FIAT PALIO
                        </h5>
                          <p class="card-text">
                            1.0 MPI FIRE 8V <br>
                            Flex<br>
                            2p<br>
                            2011 km<br>
                            Manual 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                
            </div>
            <br>
            <!--Linha 2-->
            <div class="row">
                 <!-- Card 1-->
                 <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/onix.jpg" class="card-img-top" alt="CHEVROLET ONIX                        ">
                        <div class="card-body">
                          <h5 class="card-title">CHEVROLET ONIX                        </h5>
                          <p class="card-text">
                            1.0 LT<br>
                            Flex<br>
                            4p<br>
                            26.540 km<br>
                            Manual 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 2-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/Audi_a3.jpg" class="card-img-top" alt="AUDI A3                        ">
                        <div class="card-body">
                          <h5 class="card-title">AUDI A3</h5>
                          <p class="card-text">
                            1.4 TFSI 16V<br>
                            Flex<br>
                            4p<br>
                            58.616 km <br>
                            Automático
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 3-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/cruze.jpg" class="card-img-top" alt="CHEVROLET CRUZE">
                        <div class="card-body">
                          <h5 class="card-title">CHEVROLET CRUZE</h5>
                          <p class="card-text">
                            1.4 TURBO 16V<br>
                            Flex<br>
                            4p<br>
                            0 km<br>
                            Manual 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 4-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/hyunday_hr.jpg" class="card-img-top" alt="HYUNDAI HR                        ">
                        <div class="card-body">
                          <h5 class="card-title">HYUNDAI HR </h5>
                          <p class="card-text">
                            2.5 4X2 16V<br>
                            Diesel<br>
                            2p<br>
                            0 km<br>
                            Manual 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
            </div>
            <br>
            <!--Linha 3-->
            <div class="row">
                 <!-- Card 1-->
                 <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/mini_cooper.jpg" class="card-img-top" alt="MINI COOPER                        ">
                        <div class="card-body">
                          <h5 class="card-title">MINI COOPER                        </h5>
                          <p class="card-text">
                            2.0 16V TURBO<br>
                            Gasolina<br>
                            2p<br>
                            27.190 km<br>
                            Automático 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 2-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/cayenne.jpg" class="card-img-top" alt="PORSCHE CAYENNE                        ">
                        <div class="card-body">
                          <h5 class="card-title">PORSCHE CAYENNE                        </h5>
                          <p class="card-text">
                            4.8 S 4X4 V8 32V<br>
                            Gasolina<br>
                            4p<br>
                            93.000 km <br>
                            Automático
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 3-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/corsa.jpg" class="card-img-top" alt="CHEVROLET CORSA                        ">
                        <div class="card-body">
                          <h5 class="card-title">CHEVROLET CORSA</h5>
                          <p class="card-text">
                            1.4 MPFI MAXX 8V<br>
                            Flex<br>
                            4p<br>
                            127.000 km<br>
                            Manual 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
                <!-- Card 4-->
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px">
                        <img src="imagens/master.jpg" class="card-img-top" alt="RENAULT MASTER                        ">
                        <div class="card-body">
                          <h5 class="card-title">RENAULT MASTER</h5>
                          <p class="card-text">
                            2.3 EXTRA FURGÃO L3H2<br>
                            Diesel<br>
                            3p<br>
                            269.100 km<br>
                            Manual 
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>


    </section>
    <script src="js/script.js"></script>

</body>
</html>