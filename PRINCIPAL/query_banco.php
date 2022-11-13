<!-- Index -->

SELECT Funcionario as Vendedor, DATE_FORMAT(dt_venda, '%d/%m/%Y') as 'Data da venda', vl_venda as 'Valor da Venda' FROM vendas WHERE dt_venda BETWEEN '2022-11-01' AND '2022-11-31';    

$conn->prepare("SELECT count(*) as total_vendas from `vendas` WHERE `dt_venda` BETWEEN '2022-11-01' AND '2022-11-30';");

("SELECT sum(vl_venda) as total_vendas_ano from `vendas` WHERE `dt_venda` BETWEEN '2022-01-01' AND '2022-12-31';");

("SELECT sum(vl_venda-vl_compra) as lucro_mensal from `vendas` WHERE `dt_venda` BETWEEN '2022-11-01' AND '2022-11-30';");

("SELECT sum(vl_venda-vl_compra) as Lucro_anual from `vendas` WHERE `dt_venda` BETWEEN '2022-01-01' AND '2022-12-31';");

("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Roberto';");

("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Fernanda';");

("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Rafael';");

("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Leticia';");

("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Daniel';");

("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Renato';");

("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Aline';");

("SELECT count(*) as vendas FROM `vendas` WHERE Funcionario = 'Fernando';");

<!-- Clientes -->

SELECT * FROM `clientes`

('SELECT * FROM `clientes` WHERE `id_cliente`= ?;')

<!-- Login -->

('SELECT * FROM `cadastro` WHERE `user_cad` = ? AND `senha_cad` = ?');

<!-- Veiculos -->

SELECT * FROM veiculos;






