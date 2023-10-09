-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 12:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbc`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(20) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` int(20) NOT NULL,
  `experience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `fullname`, `date_of_birth`, `phone_number`, `experience`) VALUES
(9, 'Mahmoud Naserddine', '2001-11-07', 81879809, '3 years in accounting'),
(10, 'Ali Masrei', '1980-05-03', 71332670, '6 years in accounting');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equipment_id` int(20) UNSIGNED NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`equipment_id`, `equipment_name`, `description`, `price`, `image`) VALUES
(14, 'Gloves (Original)', 'Original boxing gloves are a vital piece of equipment designed to protect the hands and wrists of boxers during training. ', '180$', 'ogloves.png'),
(16, 'Handwraps', 'Original handwraps are essential accessories for boxers, providing crucial support and protection to the hands and wrists during training and fights.', '7$', 'wraps2.png'),
(17, 'MouthGuard', 'Mouthguards in boxing are indispensable protective gear, safeguarding the teeth, jaws, and oral tissues from potential injuries during intense fights and sparring sessions.', '5$', 'mg2.png'),
(18, 'HeadGear', 'Headgear in boxing serves as a crucial protective barrier, reducing the risk of head injuries and providing added cushioning during intense training and competitive bouts.', '100$', 'hg3.png'),
(19, 'Groin guard', 'A groin guard in boxing is an essential piece of protective equipment that provides crucial protection to the groin area, minimizing the risk of injury during intense boxing matches and training sessions.', '40$', 'gg.png'),
(20, 'Skipping Rope ', 'Skipping ropes, an essential piece of equipment in boxing, enhance footwork, agility, and cardiovascular endurance, contributing to a boxers overall fitness and conditioning.', '10$', 'sr2.png'),
(22, 'Gloves(Copy A)', 'Copy A boxing gloves are a popular choice among athletes, known for their durability and superior performance in the boxing ring.', '50$', 'cgloves.png');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `exercise_id` int(20) UNSIGNED NOT NULL,
  `exercise_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`exercise_id`, `exercise_name`, `description`, `image`) VALUES
(18, 'Shadow Boxing', 'Shadow boxing exercises in boxing involve throwing punches and combinations without a partner or opponent, allowing fighters to enhance their technique, footwork, and speed while visualizing and strategizing their movements.', 'sb.jpeg'),
(20, 'Push up', 'Push-ups are a versatile and effective exercise that targets multiple muscle groups, including the chest, arms, shoulders, and core, promoting strength, stability, and overall upper body fitness.', 'pus.jpeg'),
(21, 'Boxing Bag', 'Boxing bag exercises in boxing provide a powerful workout that enhances punching power, endurance, and overall technique, while also serving as a stress-relieving outlet for athletes.', 'bb.jpeg'),
(22, 'Technique and drills', 'Technique and drills in boxing are essential for honing precision, speed, and defensive skills, enabling boxers to execute effective combinations and footwork in the ring.', 'td.jpeg'),
(23, 'Sparring', 'Sparring is a dynamic practice of simulated combat that allows individuals to develop and refine their martial arts skills in a controlled environment.', 'sp.jpeg'),
(24, 'Pull up', 'Pull-ups are a challenging upper body exercise that strengthen the back, arms, and core while improving grip strength.', 'pu.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `event_id` int(20) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`event_id`, `event_name`, `event_date`, `description`, `image`) VALUES
(6, 'Lebanese Championship', '3 May-2023', 'Our gym fighter Mohammad Naserddine won the lebbanese championship at lightweight division.', 'B.jpeg'),
(14, 'Lebanese Championship', ' 1-Feb-2022', 'Lebanese championship - Bold Boxing Club ranking #1 with 8 gold medals in 8 seperate divisions.', 'deyar.jpeg'),
(15, 'Lebanese Championship 2nd Div', '3 May-2023', 'Bold Boxing Club is always on the top of boxing in Leabnon in all the divisions.', 'benaa.jpeg'),
(16, 'Lebanese Championship 2023 ', '3 May-2023', ' Our Bold Boxing Club champion Ali Hmede won the gold medal in Lebanese championship for the Heavyweight Division.', 'hmede.jpeg'),
(17, 'Lebanese Championship 2023', '3 May-2023', 'Bold Boxing Club light Heavyweight champion Mostafa Salloum won the Lebanese championship.', 'salloum.png'),
(18, 'Gym Vibes', '24-May-2023', 'Ali Rasheiny and Hsen Hamoud with Coach Mohammad Naserddine in the tarining session in Bold Boxing Club.', 'rashhamou.jpeg'),
(19, 'Lebanese Championship 2023', '3 May-2023', 'Moustafa Salloum with Coach Jaafar Naserddine and Coach Mohammad Naserdine after his flawless victory in the final.', 'salloum2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `schedule_id` int(20) UNSIGNED NOT NULL,
  `TrainerName` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `day_of_week` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `TrainerName`, `start_time`, `end_time`, `day_of_week`) VALUES
(1, 'Jaafar Naserddine', '6:00 pm', '7:30 pm', 'Tuesday-Thursday-Friday'),
(6, 'Mohammad Naserddine', '7:30pm', '9:00pm', 'Monday-Wednesday-Friday'),
(18, 'Jaafar Naserddine', '5:00pm', '6:00 pm', 'Monday-Wednesday-Fridayy'),
(19, 'Jaafar Naserddine', '12:00pm', '1:30pm', 'Tuesday-Thursday-Fridayy');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `trainer_id` int(20) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `certifications` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`trainer_id`, `fullname`, `phone_number`, `certifications`) VALUES
(1, 'jaafar Naserddine', 76939035, '3 star global trainer'),
(41, 'Mohammad Naserddine', 71186288, '3 star global trainer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `roleid` int(255) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roleid`, `FullName`, `username`, `password`, `date_of_birth`, `phone_number`) VALUES
(1, 1, 'Jaafar Naserddine', 'Jaafar123', '1234', '1987-12-27', '76939035'),
(25, 2, 'Nabil Bajoukkk', 'nabil123', 'n123', '2001-08-24', '03016331'),
(27, 2, 'Mahmoud Naserddine', 'mahmoud123', 'mahmoud123', '2001-11-07', '81879809'),
(28, 2, 'Mohammad Hareb', 'hareb123', 'h123', '2001-08-07', '71458186'),
(47, 2, 'Ali Sabra', 'ali123', 'sabra123', '1997-02-27', '70751796'),
(49, 2, 'Hassan Darwish', 'hassan123', 'darwish123', '2003-02-24', '70655271'),
(50, 2, 'Moustafa Salloum', 'mostafa123', 'salloum123', '2001-05-16', '79314122'),
(51, 2, 'Ali Hmede', 'ali123', 'hmede123', '1998-07-08', '81390611'),
(52, 2, 'Hsen Hammoud', 'hsen123', 'hammoud123', '1990-07-18', '76072697'),
(53, 2, 'Sadek El Sayed', 'sadek123', 'sayed123', '1995-09-16', '70057547'),
(54, 2, 'Mehsen Amhaz', 'mehsen123', 'amhaz123', '1994-03-13', '70740525'),
(55, 2, 'Hussein Rasheiny', 'hsen123', 'rasheiny123', '1994-05-17', '70685417'),
(56, 2, 'Abbass Darwish', 'abbass123', 'darwish123', '1997-04-18', '76751928'),
(59, 2, 'abdallah hassan', 'a123', 'h123', '2023-05-09', '71222333'),
(60, 2, 'mhmdtakach', 'mhmd123', 'mhmd123', '2002-01-19', '76994982'),
(61, 2, 'mhmdtakach', 'mhmd123', 'mhmd100', '2023-05-30', '76994982');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`exercise_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `equipment_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `exercise_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `schedule_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `trainer_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
