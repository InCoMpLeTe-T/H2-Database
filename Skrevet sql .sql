

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Booked` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='samle alle de bookede';



INSERT INTO `admin` (`ID`, `Booked`) VALUES
(1, 'Liste'),
(2, 'liste2'),
(3, 'Liste3');



CREATE TABLE `classrooms` (
  `Room` varchar(50) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Lokaler';



INSERT INTO `classrooms` (`Room`, `ID`) VALUES
('A11', 1),
('A12', 2),
('A13', 3),
('B11', 4),
('B12', 5);



CREATE TABLE `school` (
  `Address` varchar(50) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Lokation';



INSERT INTO `school` (`Address`, `ID`, `Name`) VALUES
('H.C.Andersensvej', 1, 'Datahouse'),
('Håndværkervej', 2, 'Mekkerhouse');



CREATE TABLE `students` (
  `Name` varchar(50) DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `Teacher` varchar(50) DEFAULT NULL,
  `Room` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Elever ';



INSERT INTO `students` (`Name`, `Id`, `Teacher`, `Room`) VALUES
('Michael', 1, NULL, NULL),
('Martin', 2, NULL, NULL),
('Jannik', 3, NULL, NULL),
('Felix', 4, NULL, NULL),
('Danny', 5, NULL, NULL),
('Benjamin', 6, NULL, NULL),
('Kasper B', 7, NULL, NULL),
('Nicklas', 8, NULL, NULL),
('Kasper S', 9, NULL, NULL),
('Nicklas Boesen', 10, NULL, NULL);



CREATE TABLE `teachers` (
  `T_Name` varchar(50) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `ClassRoom` int(11) DEFAULT NULL,
  `Students` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Alle Undervisere';


INSERT INTO `teachers` (`T_Name`, `ID`, `ClassRoom`, `Students`) VALUES
('Mads Bock', 1, NULL, NULL),
('Ole Soelberg', 2, NULL, NULL),
('Lief Kronval', 3, NULL, NULL);



ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `school`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `classrooms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `school`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `students`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `teachers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


