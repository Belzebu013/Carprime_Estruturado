<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-white">
<!-- Index -->
<h4><b>Dashboard</b></h4>
<p>
SELECT Funcionario as Vendedor, DATE_FORMAT(dt_venda, '%d/%m/%Y') as 'Data da venda', vl_venda as 'Valor da Venda' FROM vendas WHERE dt_venda BETWEEN '2022-11-01' AND '2022-11-31';    
</p>
<p>
("SELECT count(*) as total_vendas from `vendas` WHERE `dt_venda` BETWEEN '2022-11-01' AND '2022-11-30';");
</p>
<p>
("SELECT count(vl_venda) as total_vendas_ano from `vendas` WHERE `dt_venda` BETWEEN '2022-01-01' AND '2022-12-31';");
</p>
<p>
SELECT SUM(vendas.vl_venda-veiculos.vl_compra) as Lucro_mensal from veiculos, vendas WHERE vendas.dt_venda BETWEEN '2022-11-01' AND '2022-11-30' AND vendas.id_venda = veiculos.id_veiculo;
</p>
<p>
SELECT SUM(vendas.vl_venda-veiculos.vl_compra) as Lucro_anual from veiculos, vendas WHERE vendas.dt_venda BETWEEN '2022-01-01' AND '2022-12-31' AND vendas.id_venda = veiculos.id_veiculo;
</p>
<p>
("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Roberto';");
</p>
<p>
("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Fernanda';");
</p>
<p>
("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Rafael';");
</p>
<p>
("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Leticia';");
</p>
<p>
("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Daniel';");
</p>
<p>
("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Renato';");
</p>
<p>
("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Aline';");
</p>
<p>
("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Fernando';");
</p>
<br/>

<!-- Clientes -->
<h4><b>Clientes</b></h4>
<p>
SELECT * FROM `clientes`
</p>
<p>
('SELECT * FROM `clientes` WHERE `id_cliente`= ?;')
</p>
<br/>
<!-- Login -->
<h4><b>Login</b></h4>
<p>
('SELECT * FROM `cadastro` WHERE `user_cad` = ? AND `senha_cad` = ?');
</p>
<br/>
<!-- Veiculos -->
<h4><b>Veiculos</b></h4>
<p>
SELECT * FROM veiculos;
</p>
</body>
</html>







