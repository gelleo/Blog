CREATE TABLE IF NOT EXISTS `logtb001_posts` (
`id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `data` date NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1',
  `data_desativado` date DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;


CREATE TABLE IF NOT EXISTS `logtb002_usuarios` (
`id` int(11) NOT NULL,
  `login` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

--
-- Extraindo dados da tabela `logtb002_usuarios`
-- login: admin
-- senha: 123456

INSERT INTO `logtb002_usuarios` (`id`, `login`, `senha`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');


ALTER TABLE `logtb001_posts`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `logtb002_usuarios`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `logtb001_posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `logtb002_usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

