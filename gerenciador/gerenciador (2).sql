-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.1.41
-- Versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `gerenciador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorianoticia`
--

CREATE TABLE IF NOT EXISTS `categorianoticia` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCategoria` varchar(70) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `categorianoticia`
--

INSERT INTO `categorianoticia` (`idCategoria`, `nomeCategoria`) VALUES
(12, 'Pesquisar Notícia'),
(11, 'Listar Notícia'),
(10, 'Inserir Notícia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `idNoticia` int(4) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `data` datetime NOT NULL,
  `fonte` varchar(300) NOT NULL,
  `resumo` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `destaque` char(3) NOT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT '1',
  `ativo` char(3) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `cod_usuario` int(4) NOT NULL,
  `cod_regiao` int(4) NOT NULL,
  `idCategoria` int(4) NOT NULL,
  PRIMARY KEY (`idNoticia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `titulo`, `data`, `fonte`, `resumo`, `texto`, `destaque`, `nivel`, `ativo`, `imagem`, `cod_usuario`, `cod_regiao`, `idCategoria`) VALUES
(26, 'CRIAÇÃO DE UM NOVO PRODUTO', '2013-05-16 18:07:39', '', 'Produto: Power Clean \r\nEmpresa: CL Produtos de Limpeza Ltda.\r\n', 'Tipo de produto: Este produto foi desenvolvido para solucionar um problema muito comum que até então nenhum semelhante conseguiu sanar e atender as necessidades e expectativas do público alvo. Trata-se de um removedor de mancha de caneta esferográfica composto por estabilizantes citrato de sódio, trifosfato de sódio, monofosfato de sódio e diafosfato de sódio, silicone, emulsificante, espessante, solvente alifático, derivados de isotiazolinonas, fragrância, água, hidróxido de sódio, espessante, tensoativo não iônico, coadjuvante, solvente, adjuvante, sequestrante, dispersante, fragrância e água.\r\n\r\n\r\nPosicionamento de mercado\r\nProduto que está presente na limpeza doméstica diária residencial ou comercial. O público alvo são as mulheres do lar ou domésticas.\r\n\r\n\r\nELABORAÇÃO DO PRODUTO\r\n\r\nParidade\r\nO Power Clean é parecido ou pode-se compará-lo com outros produtos que removem manchas gerais, incluindo manchas de caneta.\r\nO público à que direciona-se o Power Clean é o mesmo à que se destina outros produtos tira-manchas, isto é, doméstica, lavadeiras, lavanderias especializadas e donas de casa.\r\n\r\nDiferencial\r\nGarante-se uma maior eficácia do produto em relação à outros já existentes no mercado, porque Power Clean é específico.\r\nÉ o único no mercado que tira facilmente manhas causadas por caneta nas roupas.\r\n\r\nAlternativas de diferenciação\r\nProduto: Funcionalidade garantida.\r\nImagem: Embalagem prática, econômica e reutilizável.\r\nCanais de Distribuição: Cobertura em todo território brasileiro (supermercados, hipermercados e lojas especializadas em produtos de limpeza).\r\n\r\nAnálise de comportamento\r\n\r\nSocial: \r\n•	Classes A e B, um produto novo no mercado e também pela sua facilidade de uso, devido ao pode aquisitivo.\r\n•	Idade; podendo também atrair pessoas mais jovens que têm os dias mais agitados com capacidade em realizar suas tarefas mais rapidamente.\r\n\r\nPsicológicos: Atingindo pessoas ligadas a modernidade, que gostam de produtos inovadores no mercado.\r\n\r\nCultural: Aproximar as pessoas, incentivando-as a conviverem mais tempo juntas, sem ter de se preocupar com deveres domésticos.\r\n\r\n\r\nMARKETING MIX \r\n\r\nPrimeiro “P”: produto\r\n\r\nProduto é qualquer coisa que possa ser oferecida e que satisfaça necessidades e desejos de um mercado. Produto inclui não só bens ou serviços, mas também marcas, embalagens, serviços aos clientes e outras características. Não necessariamente o produto precisa ser físico. Eles podem existir fisicamente, mas também podem ser serviços, pessoas, locais, organizações, idéias, etc.\r\nPara entender melhor o que é um bem, há necessidade de compreender que não se trata somente de algo tangível (palpável ou físico), que compramos e levamos para casa. Muitas vezes estão, junto a ele, serviços, como as férias em um hotel ou um show de uma pessoa famosa.\r\nA Sadia, fabricante de alimentos, conhecedora de que as mulheres atualmente estão mais ocupadas, sabendo que elas estão no mercado de trabalho e têm pouco tempo para se dedicar ao marido e aos filhos, passou a oferecer uma linha de produtos congelados. Mas ela não ofereceu sua linha de produto salientando suas qualidades. Ela sugeriu o benefício da liberdade, que é algo que as mulheres se vangloriam nos dias de hoje. Nesse caso, fica explícito que o conceito de liberdade é muito mais valorizado do que o produto em si, e as consumidoras que desejam liberdade em seus casamentos compram o produto orgulhosas de sua liberdade.\r\nO produto deve, obrigatoriamente, ser aquele desejado pelo cliente, estar dentro das suas expectativas e satisfazer suas necessidades.\r\nQuando se criam produtos, cinco níveis devem ser observados. São eles:\r\n•	Benefício-núcleo: é um benefício fundamental que o consumidor está comprando. \r\n•	Produto básico: é aquele que o consumidor compra. Aqui são definidos os benefícios básicos dos produtos. \r\n•	Produto real ou esperado: apresenta cinco particularidades: nível de qualidade, características, design, marca e embalagem. É um conjunto de atribuições que os consumidores geralmente esperam. \r\n•	Produto ampliado: oferecem-se serviços e benefícios adicionais \r\n•	Produto potencial: é constituído por todas as ampliações e modificações que esses produtos podem sofrer no futuro. É a provável evolução do produto.\r\nDas quatro variáveis do marketing mix, podemos considerar o produto como sendo a mais crítica no processo decisório. As empresas precisam administrar suas marcas como um dos principais patrimônios da empresa. ', 'sim', 1, 'sim', 'img03.jpg', 1, 1, 10),
(27, '', '2013-05-16 20:04:01', '', '', '', 'nao', 1, 'sim', '', 1, 1, 10),
(28, 'Governo quer implantar internet ''rural'' a partir de 2014, diz Bernardo', '2013-05-16 20:09:14', '', 'O ministro das Comunicações, Paulo Bernardo, disse hoje que o governo vai exigir das operadoras a implantação da internet rural a partir do primeiro semestre de 2014.', '', 'sim', 1, 'sim', '', 1, 6, 1),
(29, 'Governo quer implantar internet ''rural'' a partir de 2014, diz Bernardo', '2013-05-16 20:10:25', '', 'O ministro das Comunicações, Paulo Bernardo, disse hoje que o governo vai exigir das operadoras a implantação da internet rural a partir do primeiro semestre de 2014.', '', 'sim', 1, 'sim', '', 1, 6, 1),
(30, 'Almir Murad Oliveira ''junior''', '2013-05-29 20:54:41', 'Almir Murad', 'O ministro das Comunicações, Paulo Bernardo, disse hoje que o governo vai exigir das operadoras a implantação da internet rural a partir do primeiro semestre de 2014.', '<p><span style="color: rgb(255, 0, 0);"><span style="font-family: Arial; font-size: 16px; line-height: 24px;">Em julho do ano passado, o governo realizou o leil&atilde;o da faixa de frequ&ecirc;ncia de 450 megahertz (MHz) destinada &agrave; telefonia m&oacute;vel e internet em zonas rurais, juntamente com o leil&atilde;o da faixa de 2,5 gigahertz (GHz) para a telefonia m&oacute;vel de quarta gera&ccedil;&atilde;o (4G). &quot;A meta &eacute; tornar a internet dispon&iacute;vel para 90% da popula&ccedil;&atilde;o em cinco anos&quot;, disse.</span></span></p>\r\n<p style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-family: Arial; font-size: 16px; line-height: 24px; vertical-align: baseline; color: rgb(51, 51, 51);"><span style="color: rgb(255, 0, 0);">O ministro disse que ter&aacute; uma reuni&atilde;o na pr&oacute;xima semana com as operadoras para avaliar o andamento da implanta&ccedil;&atilde;o da infraestrutura para a internet rural no pa&iacute;s.<br />\r\n&nbsp;</span></p>\r\n<p><span style="color: rgb(255, 0, 0);">&nbsp;</span></p>', 'sim', 2, 'sim', 'neimar.jpg', 1, 1, 1),
(34, 'Barcelona sobe proposta em R$ 15 milhões, mas Santos pede mais para convencer Neymar pai', '2013-05-22 21:49:27', '', 'O Comitê Gestor do Santos se reuniu no início da tarde desta quarta-feira para avaliar uma nova proposta do Barcelona, da Espanha, pelo atacante Neymar.', ' <p><span style="color: rgb(35, 31, 32); font-family: Arial; font-size: 13px; line-height: 20px;">O Comit&ecirc; Gestor do Santos se reuniu no in&iacute;cio da tarde desta quarta-feira para avaliar uma nova proposta do Barcelona, da Espanha, pelo atacante Neymar. O</span><span style="color: rgb(35, 31, 32); font-family: Arial; font-size: 13px; line-height: 20px;">&nbsp;</span><strong style="color: rgb(35, 31, 32); font-family: Arial; font-size: 13px; line-height: 20px; font-style: inherit;">UOL Esporte</strong><span style="color: rgb(35, 31, 32); font-family: Arial; font-size: 13px; line-height: 20px;">&nbsp;</span><span style="color: rgb(35, 31, 32); font-family: Arial; font-size: 13px; line-height: 20px;">apurou que o clube catal&atilde;o subiu a oferta de 16 milh&otilde;es de euros (R$ 42 milh&otilde;es) para 22 milh&otilde;es de euros (R$ 57 milh&otilde;es) para contratar o jogador. No entanto, a c&uacute;pula santista decidiu recusar a oferta e continuar aguardando propostas maiores pelo craque.</span></p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(35, 31, 32); font-size: 13px; font-family: Arial; line-height: 20px;">Em reuni&atilde;o, o Comit&ecirc; Gestor do Santos chegou a conclus&atilde;o que precisa de uma oferta maior para convencer Neymar da Silva Santos, pai do atacante, a aceitar a transfer&ecirc;ncia imediata do filho. Por isso, apesar de recusar a proposta, os dirigentes santistas avisaram o Bar&ccedil;a que aguardam novas ofertas pelo jogador.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(35, 31, 32); font-size: 13px; font-family: Arial; line-height: 20px;">&nbsp;</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(35, 31, 32); font-size: 13px; font-family: Arial; line-height: 20px;">Em entrevistas ap&oacute;s a final do Campeonato Paulista, o craque santista chegou at&eacute; a dizer que disputar o Campeonato Brasileiro pelo Santos.</p>\r\n<p>&nbsp;</p>', 'sim', 1, 'sim', '', 1, 6, 2),
(35, 'Após violência na Virada Cultural, PM reforça segurança para a Parada Gay de SP', '2013-05-22 22:06:51', '', 'A PM (Polícia Militar) de São Paulo reforçará a segurança da 17º Parada Gay de São Paulo, que acontece no próximo dia 2 de junho, após a violência que deixou dois mortos durante a Virada Cultural, no último final de semana. ', ' <p><span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 16px; line-height: 24px;">A PM (Pol&iacute;cia Militar) de S&atilde;o Paulo refor&ccedil;ar&aacute; a seguran&ccedil;a da 17&ordm; Parada Gay de S&atilde;o Paulo, que acontece no pr&oacute;ximo dia 2 de junho, ap&oacute;s a viol&ecirc;ncia que deixou dois mortos durante a Virada Cultural, no &uacute;ltimo final de semana. Em encontro com a organiza&ccedil;&atilde;o da parada, nesta quarta-feira (22), a PM definiu que aumentar&aacute; o efetivo na regi&atilde;o do trajeto do evento para 1.600 policiais. No ano passado, o contingente foi de aproximadamente 1.200 soldados.</span></p>\r\n<p>&nbsp;</p>', 'sim', 1, 'sim', '', 1, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `codProduto` smallint(3) NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(80) NOT NULL,
  `descricaoProduto` text NOT NULL,
  `precoProduto` float NOT NULL,
  `fotoProduto1` varchar(20) NOT NULL,
  `fotoProduto2` varchar(20) NOT NULL,
  `fotoProduto3` varchar(20) NOT NULL,
  `fotoProduto4` varchar(20) NOT NULL,
  `quantidadeProduto` int(11) NOT NULL,
  `destaqueProduto` char(3) NOT NULL DEFAULT 'sim',
  `entradaProduto` date NOT NULL,
  PRIMARY KEY (`codProduto`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codProduto`, `nomeProduto`, `descricaoProduto`, `precoProduto`, `fotoProduto1`, `fotoProduto2`, `fotoProduto3`, `fotoProduto4`, `quantidadeProduto`, `destaqueProduto`, `entradaProduto`) VALUES
(3, 'teste cadeira', 'teste de envio de produto via pagina                        ', 30, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 30, 'nao', '2015-09-10'),
(4, 'teste cadeira', 'teste de envio de produto via pagina                        ', 30, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 30, 'nao', '2015-09-10'),
(5, 'teste cadeira', 'teste de envio de produto via pÃ¡gina coraÃ§Ã£o                        ', 30, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 30, 'nao', '2015-09-10'),
(6, 'teste cadeirÃ£o', 'teste de envio de produto via pÃ¡gina coraÃ§Ã£o                        ', 30, '', '', '', '', 30, 'nao', '2015-09-10'),
(7, 'teste cadeirÃ£o', '                        teste de aalteraÃ§Ã£o de produto via pÃ¡gina coraÃ§Ã£o                                                ', 30, 'balcaoVitrine.jpg', 'conjuntoBanheiro.jpg', 'cozinhCompleta.jpg', 'gondolasExpositoras.', 30, 'sim', '0000-00-00'),
(8, 'teste cadeirÃ£o', 'teste de nova alteraÃ§Ã£o de produto via pÃ¡gina coraÃ§Ã£o                                                ', 30, 'armarios.jpg', 'balcaoVitrine.jpg', 'painelCama.jpg', 'paineTv.jpg', 30, 'sim', '0000-00-00'),
(9, 'Agora sim cadeira', 'testando inserÃ§Ã£o                     ', 30, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 0, 'nao', '2015-09-10'),
(10, 'Agora sim cadeira', 'testando inserÃ§Ã£o                     ', 30, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 0, 'nao', '2015-09-10'),
(11, 'Agora sim cadeira', 'testando inserÃ§Ã£o                     ', 30, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 0, 'nao', '2015-09-11'),
(12, 'teste cadeira 11', 'testando conexÃ£o de imagens                    ', 310, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 54, 'sim', '2015-09-11'),
(13, 'teste cadeira 11', 'testando conexÃ£o de imagens                    ', 310, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 54, 'sim', '2015-09-11'),
(14, 'teste cadeira 11', 'testando conexÃ£o de imagens                    ', 310, 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 'cadeira.jpeg', 54, 'sim', '2015-09-11'),
(15, 'mesa', 'tete pesquisa                      ', 300, 'moveisEscritorio.jpg', 'paineTv.jpg', 'cozinhCompleta.jpg', 'painelCama.jpg', 5, 'sim', '2015-09-16'),
(16, '', '                        ', 0, '', '', '', '', 0, 'sim', '2015-09-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `ativo` char(3) NOT NULL DEFAULT 'nao',
  `nivel` char(1) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `nome`, `email`, `senha`, `telefone`, `celular`, `ativo`, `nivel`, `data`) VALUES
(1, 'ALMIR MURAD OLIVEIRA JUNIOR', 'almir_murad@hotmail.com', 'e55e0ac006e4e83d7d9d9cd63e3a0ee42d1fb5d8', '1334277686', '1397277969', 'sim', 'A', '2013-05-15 23:07:05'),
(2, 'Rafaela Fernanda Murad Lucano', 'rafaela.lucano@hotmail.com', 'a305270ddbce06b68cbca8e214cf9dd96e58d7b2', '3427-7686', '99208-3525', 'sim', 'B', '2015-09-21 21:06:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
