-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 24, 2021 alle 23:46
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progetto`
--
CREATE DATABASE IF NOT EXISTS `progetto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `progetto`;

-- --------------------------------------------------------

--
-- Struttura della tabella `bambino`
--

DROP TABLE IF EXISTS `bambino`;
CREATE TABLE `bambino` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Cognome` varchar(255) DEFAULT NULL,
  `Eta` int(11) DEFAULT NULL,
  `Indirizzo` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `bambino`
--

INSERT INTO `bambino` (`Id`, `Nome`, `Cognome`, `Eta`, `Indirizzo`, `Username`, `Email`, `Password`) VALUES
(1, 'ciao', 'ciao', 3, 'sdffdfs', 'email@gmail.com', 'fdssdf', 'Clelia90'),
(2, '', '', 0, '', '', '', 'Clelia11'),
(3, 'ciao', 'ciiao', 0, 'adsdas', 'email@gmail.com', 'sadssa', '$2y$10$H.9c8CC94h4S8kO3yLFjeO9z4NIzA7ifFpd7GM0YRCFAw1BSPvnkq'),
(4, 'clelia', 'nicotra', 3, 'via', 'clelia00', 'email@gmail.com', '$2y$10$oqaVa5QAyMRZlDkHb9EXxO/cM1XqYUYVqGOAUggUWwdyALp55KnsS'),
(5, 'fede', 'marte', 5, 'via', 'margot', 'email@gmail.com', '$2y$10$67LWc126YlBae6F3itkFXOnQsxeNfUsH8ndlxWdsAaxZuxtQuEqw.'),
(6, 'erica', 'dell', 2, 'via', 'ericadell', 'email@gmail.com', 'Ericadell9'),
(7, 'ciao', 'pollo', 4, 'via', 'patate', 'email@gmail.com', '$2y$10$/2NhUCelyFZ3ZLTPZtMlNeqrx6JPqsnlZpjPwKNMQKbKopLVuSTaS'),
(8, 'clelia', 'nicotrA', 1, 'piazza', 'schifo', 'email@gmail.com', '$2y$10$O5kxaLPEeyTIBkW5kBZ5auS.gyDlOkYQGH1NVPVRyyEmgM28OW76a'),
(9, 'margot', 'marte', 0, 'via ', 'margoooot', 'email@gmail.com', '$2y$10$AIVmz7ionrBOw8YX1zphqu/rjfuYIMjJ6p4b/tznxyv8ekr2DXUG2'),
(10, 'ok', 'ok', 2, 'via', 'ciao', 'email@gmail.com', '$2y$10$pu2O5rqxBiogq23CfxsreOkKdtC33QjB02dHdEaiFf3Bg1CJpILse'),
(11, 'ok', 'ok', 1, 'via', 'foglia', 'email@gmail.com', '$2y$10$kg17P2vdVz4OV4HLZ.jug./olcnWEImsbHWnHw703cAViU2y2ssou'),
(12, 'o', 'o', 1, 'dsf', 'si', 'email@gmail.com', '$2y$10$CKOYcROXv86Hf772B8OLQu9cePRnYTuU5Bffqd.2FrwHOi/grkXnO'),
(13, 'e', 'e', 1, 'e', 'e', 'email@gmail.com', '$2y$10$5DBJm2Vp5hyVAEguAXtvouUDvAsiSY7WG85R8M9jkhq/vlq5VYcqi'),
(14, 'e', 'e', 1, 't', 'palla', 'email@gmail.com', '$2y$10$uWLmSkY9R6fPGafOxTQS/eUZ4bb8B7sWNiMWvreY0bCQrb2tBCgTu'),
(15, 'fede', 'fede', 1, 'p', 'ssss', 'email@gmail.com', '$2y$10$CiHVh04iJuqexJXwjqLlPOj5u87xT4gp/yIuJQ6cEd2IQeEQ6RPAe'),
(16, 'ok', 'ok', 1, 'via', 'no', 'email@gmail.com', '$2y$10$qFpxBe2H//7lphPCz5ry6e2FEksF4NxaobdxgopWqUpXKol2TsI3K'),
(17, 'mamma', 'mamma', 1, 'o', 'mamma', 'email@gmail.com', '$2y$10$BcyDtF4tgad6sW7RB9dQb.cQPDI7FZwGEL4nm0gtUDYTpfyz5u6AW'),
(18, 'f', 'f', 2, 'f', 'f', 'email@gmail.com', '$2y$10$PcOAIVZn79CU8aebBYgxluISSkorhzHFdRTXV9zW63cNe4hwak4c.'),
(19, 'S', 'S', 2, 'S', 'S', 'email@gmail.com', '$2y$10$dszYbcLMKEr6LT3mxFY./O2IUm5hn1I6CeoZFYWDOzPBCzOAO.MUW'),
(20, 'r', 'e', 1, 'e', 'edera', 'email@gmail.com', '$2y$10$O9VdhjTZFjtcbk4mQJe2KORSCFTzMF/vL052AIHblAF4odXcs7f2.'),
(21, 'dfdsg', 'gsdgds', 1, 'dfg', 'luca', 'email@gmail.com', '$2y$10$pAO9tDdxSf974j81iO.h5O6WyUc9Tr8CIs6J0vtACK9dUKYVvI.uO'),
(22, 'clara', 'grasso', 1, 'via', 'clara', 'email@gmail.com', '$2y$10$BHFtcl/TsQkP9TBspCVTfOO7DKaMKP2yrNNpRsmzV/5IFH0.C/k6a');

-- --------------------------------------------------------

--
-- Struttura della tabella `canzone`
--

DROP TABLE IF EXISTS `canzone`;
CREATE TABLE `canzone` (
  `Codice` int(11) NOT NULL,
  `artista` varchar(255) DEFAULT NULL,
  `titolo` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `playlist` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `canzone`
--

INSERT INTO `canzone` (`Codice`, `artista`, `titolo`, `url`, `playlist`) VALUES
(98, 'Kanye+West', 'Runaway', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FKanye+West%2F_%2FRunaway', 52),
(99, 'Coldplay', 'The+Scientist', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FColdplay%2F_%2FThe+Scientist', 52),
(100, 'The+Weeknd', 'Blinding+Lights', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FThe+Weeknd%2F_%2FBlinding+Lights', 52),
(101, 'Lady+Gaga', 'Poker+Face', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FLady+Gaga%2F_%2FPoker+Face', 52),
(102, 'ABBA', 'Dancing+Queen', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FABBA%2F_%2FDancing+Queen', 52),
(103, 'Dua+Lipa', 'doN%27T+StArT+nOw', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FDua+Lipa%2F_%2FdoN%27T+StArT+nOw', 52),
(105, 'Oasis', 'Wonderwall', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FOasis%2F_%2FWonderwall', 52),
(106, 'Adele', 'Rumour+Has+It', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FAdele%2F_%2FRumour+Has+It', 52),
(107, 'Clean+Bandit', 'Symphony+%28feat.+Zara+Larsson%29', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FClean+Bandit%2F_%2FSymphony+%28feat.+Zara+Larsson%29', 52),
(108, 'Arctic+Monkeys', 'When+the+Sun+Goes+Down', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FArctic+Monkeys%2F_%2FWhen+the+Sun+Goes+Down', 52),
(109, 'Taylor+Swift', 'Lover', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FTaylor+Swift%2F_%2FLover', 52),
(110, 'Cesare+Cremonini', 'Dicono+di+me', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FCesare+Cremonini%2F_%2FDicono+di+me', 52),
(111, 'Cesare+Cremonini', 'Dicono+di+me', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FCesare+Cremonini%2F_%2FDicono+di+me', 52),
(112, 'Arctic+Monkeys', 'When+the+Sun+Goes+Down', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FArctic+Monkeys%2F_%2FWhen+the+Sun+Goes+Down', 64),
(115, 'Ennio+Morricone', 'Ti+prego+amami', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FEnnio+Morricone%2F_%2FTi+prego+amami', 63),
(116, 'My+Chemical+Romance', 'I%27m+Not+Okay+%28I+Promise%29', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FMy+Chemical+Romance%2F_%2FI%27m+Not+Okay+%28I+Promise%29', 63),
(117, 'Cesare+Cremonini', 'Dicono+di+me', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FCesare+Cremonini%2F_%2FDicono+di+me', 63),
(118, 'Cesare+Cremonini', 'Buon+viaggio+%28Share+the+love%29', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FCesare+Cremonini%2F_%2FBuon+viaggio+%28Share+the+love%29', 64),
(119, 'Mark+Ronson', 'Uptown+Funk', 'https%3A%2F%2Fwww.last.fm%2Fmusic%2FMark+Ronson%2F_%2FUptown+Funk', 66),
(129, 'Riccardo Fogli', 'Io Ti Prego Di Ascoltare', 'https://www.last.fm/music/Riccardo Fogli/_/Io Ti Prego Di Ascoltare', 68),
(130, 'The Black Angels', 'Black Grease', 'https://www.last.fm/music/The Black Angels/_/Black Grease', 68),
(131, 'The Black Angels', 'Black Grease', 'https://www.last.fm/music/The Black Angels/_/Black Grease', 68),
(132, 'ABBA', 'Mamma Mia', 'https://www.last.fm/music/ABBA/_/Mamma Mia', 68),
(133, 'Kanye West', 'Runaway', 'https://www.last.fm/music/Kanye West/_/Runaway', 81);

--
-- Trigger `canzone`
--
DROP TRIGGER IF EXISTS `quantita_canzoni`;
DELIMITER $$
CREATE TRIGGER `quantita_canzoni` AFTER INSERT ON `canzone` FOR EACH ROW begin 
if exists( select * from playlist where  id_numerico=new.playlist) 
then 
update playlist
set Num_canzoni=Num_canzoni+1
where id_numerico=new.playlist;
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struttura della tabella `giocattolo`
--

DROP TABLE IF EXISTS `giocattolo`;
CREATE TABLE `giocattolo` (
  `Codice` int(11) NOT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Categoria` varchar(255) DEFAULT NULL,
  `Descrizione` varchar(255) DEFAULT NULL,
  `Immagine` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `giocattolo`
--

INSERT INTO `giocattolo` (`Codice`, `Nome`, `Categoria`, `Descrizione`, `Immagine`) VALUES
(65, 'Casetta', 'Costruzioni', 'Casetta colorata con ingresso e finestre, realizzata con materiali riciclabili.', 'img/gioco2.jpg'),
(66, 'Baby Yoda Lego', 'Costruzioni', 'Lego - Star Wars Baby Yoda modellino tratto dalla nuova serie The Mandalorian.', 'img/gioco1.jpg'),
(67, 'Robot', 'Scienza', 'NAO è un robot umanoide che si muove, riconosce persone e oggetti, ascolta e parla.', 'img/gioco3.jpg'),
(68, 'Bambolotto', 'Bambole', 'Bambola Nenuco dormi con me con baby monitor e con lettino a sponda da posizionare vicino al lettino.', 'img/gioco4.jpg'),
(69, 'Barbie', 'Bambole', 'Barbie aiuta i piccoli buongustai a divertirsi con la Cucina dei Sogni con luci, suoni, formine di cibi, plastilina in 5 colori e oltre 20 accessori.', 'img/gioco5.jpg'),
(70, 'CREA MANIA', 'Arte', 'Laboratorio di ceramica - Pottery Wheel, Laboratorio di Ceramica - Vasaio Elettrico per Modellare l\'Argilla.', 'img/gioco6.jpg'),
(71, 'Modellino corpo umano', 'Scienza', 'Modellino corpo umano con parti smontabili per imparare l\'anatomia in modo sicuro e intelligente.', 'img/gioco7.jpg'),
(72, 'Biocosmesi', 'Scienza', 'Laboratorio di biocosmesi - E\' un vero laboratorio scientifico per creare una linea cosmetica bio completa.', 'img/gioco8.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `letterina`
--

DROP TABLE IF EXISTS `letterina`;
CREATE TABLE `letterina` (
  `Codice` int(11) NOT NULL,
  `Bambino` int(11) DEFAULT NULL,
  `Anno` int(11) DEFAULT NULL,
  `Testo` varchar(255) DEFAULT NULL,
  `Immagine` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `letterina`
--

INSERT INTO `letterina` (`Codice`, `Bambino`, `Anno`, `Testo`, `Immagine`) VALUES
(7, 10, 2021, 'ciao', 'ciao'),
(11, 11, 2021, '', 'https://images.unsplash.com/photo-1512389142860-9c449e58a543?crop=entropy'),
(12, 12, 2021, 'ciao', ''),
(18, 13, 2021, '', ''),
(46, 18, 2021, 'ok', 'https://images.unsplash.com/photo-1482517967863-00e15c9b44be?crop=entropy'),
(47, 19, 2021, 'ciao', 'https://images.unsplash.com/photo-1604537372136-89b3dae196e3?crop=entropy'),
(56, 20, 2021, 'babbo natale', 'https://images.unsplash.com/photo-1576919228236-a097c32a5cd4?crop=entropy'),
(57, 20, 2020, 'ciao', 'https://images.unsplash.com/photo-1482517967863-00e15c9b44be?crop=entropy'),
(58, 21, 2021, 'ciao', 'https://images.unsplash.com/photo-1513297887119-d46091b24bfa?crop=entropy'),
(59, 22, 2021, 'babbo natale', 'https://images.unsplash.com/photo-1482517967863-00e15c9b44be?crop=entropy');

-- --------------------------------------------------------

--
-- Struttura della tabella `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE `playlist` (
  `Id_numerico` int(11) NOT NULL,
  `Bambino` int(11) DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Num_canzoni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `playlist`
--

INSERT INTO `playlist` (`Id_numerico`, `Bambino`, `Nome`, `Num_canzoni`) VALUES
(50, 16, 'ciao', 10),
(52, 20, 'prima', 23),
(63, 20, 'nuova', 3),
(64, 20, 'hey', 2),
(66, 20, 'fede', 1),
(68, 21, 'nuova', 4),
(80, 21, 'seconda', 0),
(81, 22, 'nuova', 1),
(82, 22, 'prima', 0),
(83, 22, 'nuova', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `richiesta`
--

DROP TABLE IF EXISTS `richiesta`;
CREATE TABLE `richiesta` (
  `Codice` int(11) NOT NULL,
  `Giocattolo` int(11) DEFAULT NULL,
  `Letterina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `richiesta`
--

INSERT INTO `richiesta` (`Codice`, `Giocattolo`, `Letterina`) VALUES
(16, 65, 58),
(17, 65, 59),
(15, 70, 56);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `bambino`
--
ALTER TABLE `bambino`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `canzone`
--
ALTER TABLE `canzone`
  ADD PRIMARY KEY (`Codice`),
  ADD UNIQUE KEY `Codice` (`Codice`,`playlist`),
  ADD KEY `id_playlist` (`playlist`);

--
-- Indici per le tabelle `giocattolo`
--
ALTER TABLE `giocattolo`
  ADD PRIMARY KEY (`Codice`);

--
-- Indici per le tabelle `letterina`
--
ALTER TABLE `letterina`
  ADD PRIMARY KEY (`Codice`),
  ADD UNIQUE KEY `Bambino` (`Bambino`,`Anno`),
  ADD KEY `id_bambino` (`Bambino`);

--
-- Indici per le tabelle `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`Id_numerico`),
  ADD UNIQUE KEY `Bambino` (`Bambino`,`Id_numerico`),
  ADD KEY `idx_bamb` (`Bambino`);

--
-- Indici per le tabelle `richiesta`
--
ALTER TABLE `richiesta`
  ADD PRIMARY KEY (`Codice`),
  ADD UNIQUE KEY `Giocattolo` (`Giocattolo`,`Letterina`),
  ADD KEY `id_letterina` (`Letterina`),
  ADD KEY `id_gioca` (`Giocattolo`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `bambino`
--
ALTER TABLE `bambino`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT per la tabella `canzone`
--
ALTER TABLE `canzone`
  MODIFY `Codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT per la tabella `giocattolo`
--
ALTER TABLE `giocattolo`
  MODIFY `Codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT per la tabella `letterina`
--
ALTER TABLE `letterina`
  MODIFY `Codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT per la tabella `playlist`
--
ALTER TABLE `playlist`
  MODIFY `Id_numerico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT per la tabella `richiesta`
--
ALTER TABLE `richiesta`
  MODIFY `Codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `canzone`
--
ALTER TABLE `canzone`
  ADD CONSTRAINT `canzone_ibfk_1` FOREIGN KEY (`playlist`) REFERENCES `playlist` (`Id_numerico`);

--
-- Limiti per la tabella `letterina`
--
ALTER TABLE `letterina`
  ADD CONSTRAINT `letterina_ibfk_1` FOREIGN KEY (`Bambino`) REFERENCES `bambino` (`Id`);

--
-- Limiti per la tabella `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`Bambino`) REFERENCES `bambino` (`Id`);

--
-- Limiti per la tabella `richiesta`
--
ALTER TABLE `richiesta`
  ADD CONSTRAINT `richiesta_ibfk_1` FOREIGN KEY (`Letterina`) REFERENCES `letterina` (`Codice`),
  ADD CONSTRAINT `richiesta_ibfk_2` FOREIGN KEY (`Giocattolo`) REFERENCES `giocattolo` (`Codice`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
