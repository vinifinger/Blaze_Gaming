-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Out-2016 às 22:14
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbcatalogo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `CATA_nome` varchar(70) NOT NULL,
  `CATA_dataLancamento` date DEFAULT NULL,
  `CATA_plataforma` enum('PC','Console','Portatil','') NOT NULL,
  `CATA_genero` varchar(50) NOT NULL,
  `CATA_desenvolvedor` varchar(50) NOT NULL,
  `CATA_distribuidora` varchar(30) NOT NULL,
  `CATA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CATA_imagem` varchar(265) DEFAULT NULL,
  `CATA_trailer` varchar(265) NOT NULL,
  `CATA_descricao` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`CATA_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`CATA_nome`, `CATA_dataLancamento`, `CATA_plataforma`, `CATA_genero`, `CATA_desenvolvedor`, `CATA_distribuidora`, `CATA_ID`, `CATA_imagem`, `CATA_trailer`, `CATA_descricao`) VALUES
('League of Legends', '2016-10-07', 'PC', 'Moba', 'Riot Games', 'Riot Games', 17, 'http://www.geracaogeek.com.br/wp-content/uploads/2015/02/LOL-Custom.png', 'https://www.youtube.com/embed/hNagx2lYzsE', 'League of Legends Ã© um jogo eletrÃ´nico do gÃªnero multiplayer online battle arena, desenvolvido e publicado pela Riot Games para Microsoft Windows e Mac OS X.'),
('Castlevania: Lords of Shadow 2', '2014-02-24', 'Console', 'AÃ§Ã£o-aventura', 'MercurySteam', 'Konami', 28, 'http://img.ibxk.com.br/2014/03/07/07142129960281.jpg', 'https://www.youtube.com/embed/gKsEPoJMuKY', 'A histÃ³ria se passa tanto em tempos medievais quanto modernos,continuando a histÃ³ria de DrÃ¡cula,agora enfraquecido e determinado em recuperar seus poderes para derrotar SatÃ£.'),
('Call of Duty: Advanced Warfare ', '2016-06-08', 'PC', 'FPS', 'Activision', 'Square Enix', 29, 'http://lazonya.com/wp-content/uploads/2015/09/Call-of-Duty-Advanced-Warfare-02.png', 'https://www.youtube.com/embed/YeMwByosHaM', 'Call of Duty Ã© um videojogo baseado no motor Quake III Arena engine (id Tech 3), lanÃ§ado em Outubro de 2003. Foi produzido pela Infinity Ward e publicado pela Activision. O jogo simula a infantaria e as forÃ§as combinadas da Segunda Guerra Mundial.'),
('The Elder Scrolls V: Skyrim', '2016-10-05', 'PC', 'RPG', 'Bethesda Game Studios', 'Steam', 30, 'http://all3games.com/wp-content/uploads/2016/06/Skyrim-Capa-All3Games.jpg', 'https://www.youtube.com/embed/gynKGDorank', 'Skyrim Ã© a terra natal de um povo bravo chamados de Nords (uma raÃ§a de humanos) onde alÃ©m da Grande Guerra, irrompeu uma guerra civil apÃ³s o assassinato do Alto Rei de Skyrim, Torygg. E diante de todas estas guerras e problemas, a provÃ­ncia se encontra dividida: de um lado se quer a separaÃ§Ã£o do ImpÃ©rio que agora estÃ¡ em ruÃ­nas, e do outro lado se quer permanecer leal'),
('Halo 5: Guardians', '0000-00-00', 'Console', 'FPS', '343 Industries', 'Microsoft Studios', 31, 'http://www.thewolfhall.com/wp-content/uploads/2016/09/Halo-5-Guardians.jpg', 'https://www.youtube.com/embed/NqVUuKqMICw', 'â€œA paz Ã© interrompida quando as colÃ³nias sÃ£o atacadas inesperadamente. Quando o maior herÃ³i da galÃ¡xia desaparece, Ã© pedido a Spartan Locke que localize Master Chief e resolva o mistÃ©rio que ameaÃ§a toda a galÃ¡xia.â€'),
('Assassins Creed 3', '2012-10-30', 'Console', 'AÃ§Ã£o-aventura', 'Ubisoft Montreal', 'Ubisoft', 34, 'http://www.v3wall.com/wallpaper/medium/1204/medium_20120414122348653941.jpg', 'https://www.youtube.com/embed/-pUhraVG7Ow', 'Assassin''s Creed III Ã© um jogo de aÃ§Ã£o-aventura produzido pela Ubisoft e publicado pela Ubisoft durante os meses de Outubro e Novembro de 2012 para Wii U, Xbox 360, PlayStation 3 e Microsoft Windows .'),
('Counter-Strike: Global Offensive', '2012-08-21', 'PC', 'FPS', ' Valve Corporation', 'Steam', 36, 'https://static-cdn.jtvnw.net/jtv_user_pictures/benjiweed7-profile_banner-e9557e500bf5407b-480.png', 'https://www.youtube.com/embed/edYCtaNueQY', 'Counter-Strike: Global Offensive Ã© um jogo de tiro em primeira pessoa online desenvolvido pela Valve Corporation e pela Hidden Path Entertainment, sendo uma sequÃªncia de Counter-Strike: Source. Ã‰ o quarto tÃ­tulo principal da franquia'),
('Minecraft', '2009-05-17', 'PC', 'Sandbox', 'Mojang Specifications', 'Steam', 37, 'http://www.wallpapersinsider.com/wp-content/uploads/2016/03/Funny-Minecraft-800x450.jpg', 'https://www.youtube.com/embed/EA1awLDmu5E', 'Minecraft Ã© um jogo eletrÃ´nico tipo sandbox e independente de mundo aberto que permite a construÃ§Ã£o usando blocos dos quais o mundo Ã© feito. Foi criado por Markus Notch Persson.'),
('DMC: Devil May Cry', '2013-01-17', 'Console', 'AÃ§Ã£o-aventura', 'Ninja Theory', 'Capcom', 38, 'http://st-listas.20minutos.es/images/2013-12/374600/4288099_640px.jpg?1388235889', 'https://www.youtube.com/embed/MRXVzKKGPO4', 'DmC: Devil May Cry Ã© um videojogo de aÃ§Ã£o do gÃªnero "hack e slash" desenvolvido pela Ninja Theory e publicado pela Capcom. Servindo como um reinicio, Ã© o quinto jogo da sÃ©rie Devil May Cry e o primeiro que nÃ£o foi produzido diretamente pela Capcom, em vez disso, a produÃ§Ã£o foi tratada pelo estÃºdio inglÃªs Ninja Theory, enquanto as filiais japonesas e americanas da Capcom supervisionaram '),
('God of War III', '2015-06-14', 'Console', 'AÃ§Ã£o-aventura', 'SCE Santa Monica Studio', 'Sony Computer Entertainment', 39, 'https://cdn.reshift.nl/media/media/thumbnails/640x360/2016071708554915498804123748/maxresdefault_LEvtpkl.jpg', 'https://www.youtube.com/embed/qKogMfIAAkY', 'God of War III, inicia imediatamente no final de God of War II, com Kratos sobre Gaia e os outros TitÃ£s escalando o Monte Olimpo em encontro aos deuses. No topo da montanha, Zeus, Poseidon, Hades, Hermes e HÃ©lio se preparam para a batalha. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE IF NOT EXISTS `entrada` (
  `CATA_user` varchar(50) NOT NULL,
  `CATA_pass` varchar(16) NOT NULL,
  `ultimo` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entrada`
--

INSERT INTO `entrada` (`CATA_user`, `CATA_pass`, `ultimo`) VALUES
('brieu', '11678', NULL),
('dedo', '2585', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
