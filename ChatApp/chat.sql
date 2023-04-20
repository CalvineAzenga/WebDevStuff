-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 03:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `message`) VALUES
(38, 379512796, 1414601875, 'Hey'),
(39, 1414601875, 379512796, 'Hello man'),
(40, 379512796, 1414601875, 'How are you'),
(41, 1414601875, 379512796, 'I\'m very fine bro,, miss though'),
(42, 379512796, 1414601875, 'I miss you too sis, how you doin?'),
(43, 1532119990, 1414601875, 'Hey sis'),
(44, 1414601875, 379512796, 'When are you coming home?'),
(45, 379512796, 1414601875, 'Soon sis, very soon'),
(46, 379512796, 1414601875, 'What grade are you in by the way?'),
(47, 1414601875, 379512796, '2nd why'),
(48, 379512796, 1414601875, 'OK'),
(49, 379512796, 1414601875, 'Ok'),
(50, 379512796, 1414601875, 'Nothing, just curious'),
(51, 1414601875, 379512796, 'You should call me sometime men, this aint how family behaves'),
(52, 379512796, 1414601875, 'uhuhuu'),
(53, 379512796, 1532119990, 'mambo mrembo'),
(54, 1532119990, 379512796, 'nko fity sana swee'),
(55, 317607333, 1414601875, 'Bazuuu'),
(56, 1414601875, 317607333, 'Oya \\n Oya \\n Oya'),
(57, 317607333, 517108736, 'mzito'),
(58, 1531909681, 1414601875, 'Hey man'),
(59, 1414601875, 1531909681, 'Holla, hawayu'),
(60, 379512796, 1414601875, 'Hey'),
(61, 1414601875, 379512796, 'Uvola shina'),
(62, 379512796, 1414601875, 'IDJIWJDI'),
(63, 1414601875, 379512796, 'WTW'),
(64, 1414601875, 379512796, 'WT\\7'),
(65, 1414601875, 379512796, 'WTGGV'),
(66, 1414601875, 379512796, 'FD'),
(67, 1414601875, 379512796, 'SDFS'),
(68, 487711225, 379512796, 'Hello anti'),
(69, 379512796, 487711225, 'Mmbo ash'),
(70, 487711225, 379512796, 'poa sana'),
(71, 12284400, 1414601875, 'Hello'),
(72, 12284400, 1414601875, 'Who are you?'),
(73, 1414601875, 12284400, 'Am I stupid?'),
(74, 1414601875, 12284400, 'Am I stupid'),
(75, 1414601875, 12284400, 'Am I stupid?\\n'),
(76, 1414601875, 12284400, 'My very educated Mother Just Show Us nINE pLANETS'),
(77, 12284400, 1414601875, 'Holla buddy!'),
(78, 1414601875, 12284400, 'Holla my guy'),
(79, 1414601875, 12284400, 'hey'),
(80, 12284400, 1414601875, 'semaje'),
(81, 1414601875, 12284400, 'unakam leo?'),
(82, 12284400, 1414601875, 'zae labda kesho mrning'),
(83, 1414601875, 12284400, 'Am I stupid?'),
(84, 12284400, 1414601875, 'hey'),
(85, 1414601875, 12284400, 'acha ujinga ðŸ˜Š'),
(86, 1414601875, 12284400, 'â¤â¤â¤â¤â¤'),
(87, 1414601875, 12284400, 'ðŸŽðŸŽâœ”ðŸ’‹'),
(88, 12284400, 1414601875, 'shoga pumbaf shenzi nsana ðŸ¤®ðŸ¤®ðŸ¤®ðŸ¤®');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(11, 1414601875, 'Calvine', 'Museywa', 'muscalazems@gmail.com', '1234', '16261907961607232053808.jpg', 'Offline now'),
(12, 379512796, 'Arshley', 'Imali', 'arshleyimali@calvine.com', '7412', '16261909841617460122685.jpg', 'Offline now'),
(15, 1532119990, 'Ventrine', 'Lungatso', 'ventyclean@gmail.com', '1234', '162619562702e19dd7f202cbc87aacd05fa6483d71.png', 'Offline now'),
(17, 317607333, 'Ezekiel', 'Mandu', 'ezeky@gmail.com', '1234', '1626457444400090900946_497943.jpg', 'Offline now'),
(18, 12284400, 'Algis', 'Suwara', 'algis@gmail.com', '1234', '162645758605_300.jpg', 'Offline now'),
(19, 487711225, 'Lydia', 'Adisa', 'lydia@gmail.com', '1234', '1626457673254700076206_status_abe075fbbad5429cbef9a2a34cbf4a34.jpg', 'Offline now'),
(20, 1253243730, 'GY`GYY', 'BY', 'YBY@gmail.com', '1234', '16264578122c06422584c693b09ae01dfc88f5c5e1.png', 'Offline now'),
(21, 517108736, 'Ezra', 'Amata', 'ezra@gmail.com', '1234', '1626457861465012322_552839.jpg', 'Offline now'),
(22, 1325493528, 'Derrick', 'Azenga', 'calvineazenga5326@gmail.com', 'Calvine2.', '1681995821hehe.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
