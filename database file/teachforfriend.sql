-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 09:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teachforfriend`
--

-- --------------------------------------------------------

--
-- Table structure for table `appuser`
--

CREATE TABLE `appuser` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `FirstName` varchar(25) DEFAULT NULL,
  `LastName` varchar(25) DEFAULT NULL,
  `GmailAddress` varchar(50) DEFAULT NULL,
  `Picture` longblob NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `IsAdministrator` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appuser`
--

INSERT INTO `appuser` (`ID`, `UserName`, `FirstName`, `LastName`, `GmailAddress`, `Picture`, `Age`, `IsAdministrator`) VALUES
(1, 'kyle.kentner@gmail.com', 'Kyle', 'Kentner', 'kyle.kentner@gmail.com', 0x68747470733a2f2f6c68332e676f6f676c6575736572636f6e74656e742e636f6d2f612f41415458414a772d59556e6e5257395a2d376d376c4b414457794f5930644470664f444e75683245513331633d7339362d63, 0, b'1'),
(2, 'jyles.kentner@gmail.com', 'Kyle', 'Kentner', 'jyles.kentner@gmail.com', 0x68747470733a2f2f6c68332e676f6f676c6575736572636f6e74656e742e636f6d2f612f41415458414a7866564c6f335a623575315173487a46745532344a71694a37572d4250534a6a6f44506f593d7339362d63, 0, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Phone` char(12) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Name`, `Phone`, `Description`) VALUES
(1, 'Computer Science', NULL, 'The Computer Science department at OSU'),
(2, 'Biology', NULL, 'Department for all biological studies');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Phone` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`ID`, `Name`, `Phone`) VALUES
(1, 'Oklahoma State University', '405-777-1234'),
(2, 'Missouri University of Science and Technology', '573-555-1234');

-- --------------------------------------------------------

--
-- Table structure for table `materialsubject`
--

CREATE TABLE `materialsubject` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materialsubject`
--

INSERT INTO `materialsubject` (`ID`, `Name`) VALUES
(1, 'Intro to Database Programming'),
(2, 'Data Structures'),
(3, 'Operating Systems'),
(4, 'Web Design'),
(5, 'Artificial Intelligence'),
(6, 'Computer Organization and Arch'),
(7, 'Mobile Development'),
(8, 'Video Game Development'),
(9, 'Extended Reality'),
(10, 'Organic Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `IsPublic` bit(1) DEFAULT NULL,
  `Size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `ID` int(11) NOT NULL,
  `Title` varchar(60) DEFAULT NULL,
  `Phone` char(12) DEFAULT NULL,
  `Description` varchar(240) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Length` time DEFAULT NULL,
  `Rating` float DEFAULT NULL,
  `Link` varchar(400) DEFAULT NULL,
  `TutorID` int(11) DEFAULT NULL,
  `SubjectID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`ID`, `Title`, `Phone`, `Description`, `Date`, `Length`, `Rating`, `Link`, `TutorID`, `SubjectID`) VALUES
(1, 'DBMS - Hash Index', '555-444-3333', 'Video by Tutorials Point (India) on hash indexing', '2022-04-19', NULL, 5, 'https://www.youtube.com/embed/zz8ZyV9fRQg', 1, 1),
(2, 'Crash Recovery, Aries Algorithm', '555-123-4567', 'Video by learning tutorials online about DB recovery', '2022-04-19', NULL, 5, 'https://www.youtube.com/embed/HwgUGf-kXu4', 1, 1),
(3, 'Dijkstras Algorithm', '555-789-1324', 'Abdul Baris video on Dijkstras shortest-path algorithm', '2022-04-19', NULL, 5, 'https://www.youtube.com/embed/XB4MIexjvY0', 1, 2),
(4, 'DFS and BFS', '555-222-1397', 'Abdul Baris video on DFS and BFS', '2022-04-19', NULL, 5, 'https://www.youtube.com/embed/pcKY4hjDrxk', 1, 2),
(5, 'What is a mutex in C?', '555-123-4567', 'A video on mutexes in C by CodeVault', '2022-04-20', NULL, 5, 'https://www.youtube.com/embed/oq29KUy29iQ', 1, 3),
(6, 'Recursive Mutexes', '555-555-5555', 'Video by CodeVault on recursive mutexes in C', '2022-04-20', NULL, 5, 'https://www.youtube.com/embed/Ot-VR3jzQMY', 2, 3),
(8, 'Stoichiometry', '573-222-3468', 'Video on stoichiometry by The Organic Chemistry Tutor', '2022-04-21', NULL, 5, 'https://www.youtube.com/embed/7Cfq0ilw7ps', 2, 10),
(14, 'How Augmented Reality Works', '555-222-1234', 'Beginners AR video by Reality School.', '2022-04-21', NULL, 5, 'https://www.youtube.com/embed/H7ZHemE2nRs', 1, 9),
(15, 'The Future of Augmented Reality', '555-123-4567', 'Future of AR by Future Business Tech', '2022-04-21', NULL, 5, 'https://www.youtube.com/embed/WxzcD04rwc8', 2, 9),
(22, 'Swift', '555-123-4567', 'Build your first Swift app by iOS Academy.', '2022-04-21', NULL, 5, 'https://www.youtube.com/embed/yuo50-TiKgo', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tutorialplaylist`
--

CREATE TABLE `tutorialplaylist` (
  `TutorialID` int(11) NOT NULL,
  `PlaylistID` int(11) NOT NULL,
  `PlayIndex` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userplaylist`
--

CREATE TABLE `userplaylist` (
  `UserID` int(11) NOT NULL,
  `PlaylistID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertutorial`
--

CREATE TABLE `usertutorial` (
  `UserID` int(11) NOT NULL,
  `TutorialID` int(11) NOT NULL,
  `Likes` bit(1) DEFAULT NULL,
  `Rating` float DEFAULT NULL CHECK (`Rating` >= 0.5 and `Rating` <= 5.0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertutorial`
--

INSERT INTO `usertutorial` (`UserID`, `TutorialID`, `Likes`, `Rating`) VALUES
(1, 1, NULL, 4),
(1, 15, NULL, 4),
(2, 2, NULL, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appuser`
--
ALTER TABLE `appuser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `materialsubject`
--
ALTER TABLE `materialsubject`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TutorID` (`TutorID`),
  ADD KEY `SubjectID` (`SubjectID`);

--
-- Indexes for table `tutorialplaylist`
--
ALTER TABLE `tutorialplaylist`
  ADD PRIMARY KEY (`TutorialID`,`PlaylistID`),
  ADD KEY `PlaylistID` (`PlaylistID`);

--
-- Indexes for table `userplaylist`
--
ALTER TABLE `userplaylist`
  ADD PRIMARY KEY (`UserID`,`PlaylistID`),
  ADD KEY `PlaylistID` (`PlaylistID`);

--
-- Indexes for table `usertutorial`
--
ALTER TABLE `usertutorial`
  ADD PRIMARY KEY (`UserID`,`TutorialID`),
  ADD KEY `TutorialID` (`TutorialID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appuser`
--
ALTER TABLE `appuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materialsubject`
--
ALTER TABLE `materialsubject`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD CONSTRAINT `tutorial_ibfk_1` FOREIGN KEY (`TutorID`) REFERENCES `appuser` (`ID`),
  ADD CONSTRAINT `tutorial_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `materialsubject` (`ID`);

--
-- Constraints for table `tutorialplaylist`
--
ALTER TABLE `tutorialplaylist`
  ADD CONSTRAINT `tutorialplaylist_ibfk_1` FOREIGN KEY (`TutorialID`) REFERENCES `tutorial` (`ID`),
  ADD CONSTRAINT `tutorialplaylist_ibfk_2` FOREIGN KEY (`PlaylistID`) REFERENCES `playlist` (`ID`);

--
-- Constraints for table `userplaylist`
--
ALTER TABLE `userplaylist`
  ADD CONSTRAINT `userplaylist_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `appuser` (`ID`),
  ADD CONSTRAINT `userplaylist_ibfk_2` FOREIGN KEY (`PlaylistID`) REFERENCES `playlist` (`ID`);

--
-- Constraints for table `usertutorial`
--
ALTER TABLE `usertutorial`
  ADD CONSTRAINT `usertutorial_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `appuser` (`ID`),
  ADD CONSTRAINT `usertutorial_ibfk_2` FOREIGN KEY (`TutorialID`) REFERENCES `tutorial` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
