CREATE TABLE IF NOT EXISTS `clientes` (
	`id_cliente` int NOT NULL,
	`nome` varchar(255) NOT NULL DEFAULT '100',
	`email` varchar(255) NOT NULL DEFAULT '100',
	PRIMARY KEY (`id_cliente`)
);

CREATE TABLE IF NOT EXISTS `mensagens` (
	`data_envio` datetime NOT NULL,
	`id_mensagem` int NOT NULL,
	`id_cliente` int NOT NULL,
	`assunto` varchar(255) NOT NULL DEFAULT '150',
	`mensagem` text NOT NULL,
	PRIMARY KEY (`id_mensagem`)
);


ALTER TABLE `mensagens` ADD CONSTRAINT `mensagens_fk2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes`(`id_cliente`);