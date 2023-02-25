

CREATE TABLE `cadastro` (
  `id_cad` int(3) NOT NULL,
  `nome_cad` varchar(50) NOT NULL,
  `user_cad` varchar(80) NOT NULL,
  `senha_cad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cad`, `nome_cad`, `user_cad`, `senha_cad`) VALUES
(1, 'Eduardo', 'admin@admin', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(4) NOT NULL,
  `nm_cliente` varchar(80) NOT NULL,
  `cpf_cliente` varchar(20) NOT NULL,
  `email_cliente` varchar(80) NOT NULL,
  `ds_endereco` varchar(100) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `nm_telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nm_cliente`, `cpf_cliente`, `email_cliente`, `ds_endereco`, `dt_nascimento`, `nm_telefone`) VALUES
(1, 'Eduardo', '95175341081', 'eduardo@email.com', 'Av. Pres. Getúlio Vargas', '2000-01-03', '991245687'),
(2, 'Daniel', '09486954046', 'daniel@email.com', 'Av. Pres. Getúlio Vargas	', '2009-01-01', '991443685'),
(3, 'Ricardo', '95175341081', 'ricardo@email.com', 'Av. Pres. Getúlio Vargas', '2000-01-03', '991245687'),
(4, 'Renata', '09486954046', 'renata@email.com', 'Av. Pres. Getúlio Vargas	', '2009-01-01', '991443685'),
(5, 'Simone', '95175341081', 'simone@email.com', 'Av. Pres. Getúlio Vargas', '2000-01-03', '991245687'),
(6, 'Adriana', '09486954046', 'adriana@email.com', 'Av. Pres. Getúlio Vargas	', '2009-01-01', '991443685'),
(7, 'Cesar', '95175341081', 'cesar@email.com', 'Av. Pres. Getúlio Vargas', '2000-01-03', '991245687'),
(8, 'Rodrigo', '09486954046', 'rodrigo@email.com', 'Av. Pres. Getúlio Vargas	', '2009-01-01', '991443685'),
(9, 'Matheus', '95175341081', 'matheus@email.com', 'Av. Pres. Getúlio Vargas', '2000-01-03', '991245687'),
(10, 'Marcelo', '09486954046', 'marcelo@email.com', 'Av. Pres. Getúlio Vargas	', '2009-01-01', '991443685'),
(11, 'Flavia', '95175341081', 'flavia@email.com', 'Av. Pres. Getúlio Vargas', '2000-01-03', '991245687'),
(12, 'Isabeli', '09486954046', 'isabeli@email.com', 'Av. Pres. Getúlio Vargas	', '2009-01-01', '991443685'),
(13, 'Andreia', '95175341081', 'andreia@email.com', 'Av. Pres. Getúlio Vargas', '2000-01-03', '991245687'),
(14, 'Douglas', '09486954046', 'douglas@email.com', 'Av. Pres. Getúlio Vargas	', '2009-01-01', '991443685'),
(15, 'Theo', '95175341081', 'theo@email.com', 'Av. Pres. Getúlio Vargas', '2000-01-03', '991245687');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id_veiculo` int(3) NOT NULL,
  `nm_veiculo` varchar(30) NOT NULL,
  `ds_veiculo` varchar(100) NOT NULL,
  `combustivel` varchar(10) NOT NULL,
  `nm_portas` int(1) NOT NULL,
  `km_rodados` int(6) NOT NULL,
  `transmissao` varchar(15) NOT NULL,
  `vl_compra` float(7,2) NOT NULL,
  `url_veiculo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id_veiculo`, `nm_veiculo`, `ds_veiculo`, `combustivel`, `nm_portas`, `km_rodados`, `transmissao`, `vl_compra`, `url_veiculo`) VALUES
(1, 'Honda Civic', '1.5 16v turbo', 'Gasolina', 4, 88000, 'Automatico', 29000.00, '../arquivos/civic.jpg'),
(2, 'Toyota Hilux', '2.8 SRV 4X4 CD 16V', 'Diesel', 4, 60000, 'Automatico', 38000.00, '../arquivos/hilux.jpg'),
(3, 'Volkswagen FOX', '1.6 MSI COMFORTLINE 8V', 'Flex', 4, 50000, 'Manual', 76200.00, '../arquivos/fox.jpg'),
(4, 'Fiat Palio', '1.0 MPI FIRE 8V', 'Flex', 2, 2011, 'Manual', 24000.00, '../arquivos/palio.jpg'),
(5, 'Chevrolet Onix', '1.0 LT', 'Flex', 4, 26540, 'Manual', 26000.00, '../arquivos/onix.jpg'),
(6, 'Audi A3', '1.4 TFSI 16V', 'Flex', 4, 58616, 'Automatico', 84200.00, '../arquivos/Audi_a3.jpg'),
(7, 'Chevrolet  Cruze', '1.4 TURBO 16V', 'Flex', 4, 0, 'Manual', 17000.00, '../arquivos/cruze.jpg'),
(8, 'Hyunday HR', '2.5 4X2 16V', 'Diesel', 2, 0, 'Manual', 45000.00, '../arquivos/hyunday_hr.jpg'),
(9, 'Mini Cooper', '2.0 16V TURBO', 'Gasolina', 2, 27190, 'Automatico', 29000.00, '../arquivos/mini_cooper.jpg'),
(10, 'Porsche Cayenne', '4.8 S 4X4 V8 32V', 'Gasolina', 4, 93000, 'Automatico', 76200.00, '../arquivos/cayenne.jpg'),
(11, 'Chevrolet Corsa', '1.4 MPFI MAXX 8V', 'Flex', 4, 127000, 'Manual', 45000.00, '../arquivos/corsa.jpg'),
(12, 'Renault Master', '2.3 EXTRA FURGÃO L3H2', 'Diesel', 3, 269100, 'Manual', 35000.00, '../arquivos/master.jpg'),
(13, 'Mini Cooper', '2.0 16V TURBO', 'Gasolina', 2, 27190, 'Automatico', 29000.00, '../arquivos/mini_cooper.jpg'),
(14, 'Porsche Cayenne', '4.8 S 4X4 V8 32V', 'Gasolina', 4, 93000, 'Automatico', 76200.00, '../arquivos/cayenne.jpg'),
(15, 'Chevrolet Corsa', '1.4 MPFI MAXX 8V', 'Flex', 4, 127000, 'Manual', 45000.00, '../arquivos/corsa.jpg'),
(16, 'Renault Master', '2.3 EXTRA FURGÃO L3H2', 'Diesel', 3, 269100, 'Manual', 35000.00, '../arquivos/master.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(4) NOT NULL,
  `Funcionario` varchar(50) NOT NULL,
  `vl_venda` float(7,2) NOT NULL,
  `dt_venda` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `Funcionario`, `vl_venda`, `dt_venda`) VALUES
(1, 'Roberto', 35000.00, '2022-11-09'),
(2, 'Fernanda', 40000.00, '2022-11-04'),
(3, 'Rafael', 80500.00, '2022-11-12'),
(4, 'Leticia', 26700.00, '2022-11-22'),
(5, 'Daniel', 29700.00, '2022-11-29'),
(6, 'Renato', 93500.00, '2022-11-01'),
(7, 'Aline', 22700.00, '2022-11-30'),
(8, 'Fernando', 52700.00, '2022-11-20'),
(9, 'Roberto', 35000.00, '2022-11-30'),
(10, 'Rafael', 80500.00, '2022-11-05'),
(11, 'Renato', 93500.00, '2022-11-08'),
(12, 'Fernando', 52700.00, '2022-11-28'),
(13, 'Roberto', 60000.00, '2022-10-04'),
(14, 'Rafael', 99500.00, '2022-09-06'),
(15, 'Renato', 98500.00, '2022-09-08'),
(16, 'Fernando', 70700.00, '2022-10-01');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cad`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id_veiculo`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id_veiculo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


ALTER TABLE `vendas`
  MODIFY `id_venda` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

