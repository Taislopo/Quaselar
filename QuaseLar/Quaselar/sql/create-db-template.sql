CREATE DATABASE db_quaseLar;
    DEFAULT CHARACTER SET = 'utf8mb4';
    use db_quaseLar;
    CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `confirmar_senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
);



use DATABASE db_quaseLar;


CREATE TABLE `tb_procurados` (
  `id_procurados` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `nome_p` varchar(100) DEFAULT NULL,
  `especie_p` varchar(50) DEFAULT NULL,
  `raca_p` varchar(100) DEFAULT NULL,
  `sexo_p` varchar(5) DEFAULT NULL,
  `porte_p` enum('Pequeno','Medio','Grande') DEFAULT NULL,
  `img_pet_perdido` varchar(800) DEFAULT NULL,
  `ultima_vez_visto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_procurados`)
);

CREATE TABLE `tb_editar_perfil` (
  `id_editar_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `adicionar_numero` varchar(20) DEFAULT NULL,
  `data_acesso` datetime DEFAULT NULL,
  PRIMARY KEY (`id_editar_perfil`)
);

drop table tb_editar_perfil;

CREATE TABLE `tb_editar_perfil` (
  `id_editar_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `adicionar_numero` varchar(20) DEFAULT NULL,
  `data_nasc` datetime DEFAULT NULL,
  PRIMARY KEY (`id_editar_perfil`)
);

CREATE TABLE `tb_adocao` (
  `id_adocao` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `nome_pet` varchar(100) DEFAULT NULL,
  `especie` varchar(50) DEFAULT NULL,
  `raca` varchar(100) DEFAULT NULL,
  `sexo` varchar(5) DEFAULT NULL,
  `porte` enum('Pequeno','Medio','Grande') DEFAULT NULL,
  `castrado` varchar(3) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL,
  `vacinado` varchar(50) DEFAULT NULL,
  `motivo_da_adocao` text DEFAULT NULL,
  `img_pet` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`id_adocao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
