-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 12:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techhunt_neub_bd_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
`id` bigint(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `title`, `date`, `status`) VALUES
(3, 'NEUB CSE Day 2013-14', '20 Dec 2014', 'active'),
(4, 'NEUB CSE Day 2015', '18 Nov 2015', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `coach_details`
--

CREATE TABLE IF NOT EXISTS `coach_details` (
`id` bigint(20) NOT NULL,
  `team_id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tsize` varchar(50) NOT NULL,
  `institute` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` bigint(20) NOT NULL,
  `event_id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `event_id`, `name`, `image`, `mobile`, `email`, `designation`, `status`) VALUES
(1, 1, 'Al Mehdi Saadat Chowdhury', 'AlMehdiSaadatChowdhury2.jpg', '+8801730440808', 'saadat_cse@yahoo.com', 'Assistant Professor, Department of CSE(NEUB)', 'active'),
(2, 2, 'Noushad Sojib', 'noushad.jpg', '+8801738610213', 'noushad.sust@gmail.com', 'Lecturer, Department of CSE(NEUB)', 'active'),
(3, 6, 'Tazbeea Tazakka Oushneek', 'TazbeeaTazakka.jpg', '+8801926740528', 'oushneek@neub.edu.bd', 'Lecturer, Department of CSE(NEUB)', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `countdown`
--

CREATE TABLE IF NOT EXISTS `countdown` (
`id` bigint(20) NOT NULL,
  `month` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `msg_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countdown`
--

INSERT INTO `countdown` (`id`, `month`, `day`, `year`, `time`, `msg_status`) VALUES
(1, 'Dec', '21', '2017', '08:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` bigint(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `event_details_pdf` varchar(250) NOT NULL,
  `event_logo` varchar(200) NOT NULL,
  `participation_status` enum('team','individual') NOT NULL,
  `coach_status` enum('1','0') NOT NULL,
  `members_min` int(11) NOT NULL,
  `members_max` int(11) NOT NULL,
  `registration_status` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `event_details_pdf`, `event_logo`, `participation_status`, `coach_status`, `members_min`, `members_max`, `registration_status`, `status`) VALUES
(1, 'Programming Contest', 'techhunt_programming_2017_v5.pdf', 'Techhunt2017_Programming_Contest cover.png', 'team', '0', 3, 3, 0, 'active'),
(2, 'Robotics Contest', 'techhunt_robotics_2017_v3.pdf', 'Techhunt2017_Robotics_Contest cover.png', 'team', '0', 3, 3, 0, 'active'),
(3, 'Gaming Contest (COD4)', 'techhunt_game_cod4_2017_v3.pdf', 'Techhunt2017_Gaming_Contest_COD4 cover.png', 'team', '0', 4, 4, 0, 'active'),
(4, 'Gaming Contest (NFS)', 'techhunt_game_nfs_2017_v3.pdf', 'Techhunt2017_Gaming_Contest_NFS cover.png', 'individual', '0', 1, 1, 0, 'active'),
(5, 'Gaming Contest (FIFA 15)', 'techhunt_game_fifa_2017_v3.pdf', 'Techhunt2017_Gaming_Contest_FIFA cover.png', 'individual', '0', 1, 1, 0, 'active'),
(6, 'Gaming Contest', '', '', '', '', 0, 0, 0, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `album_id` bigint(20) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `album_id`, `status`) VALUES
(8, 'd (1).jpg', 3, 'active'),
(17, 'e (1).jpg', 4, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE IF NOT EXISTS `hotel_details` (
`id` bigint(20) NOT NULL,
  `hotel_file` varchar(250) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_details`
--

INSERT INTO `hotel_details` (`id`, `hotel_file`, `status`) VALUES
(1, 'techhunt_hotel_17.pdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `individual_details`
--

CREATE TABLE IF NOT EXISTS `individual_details` (
`id` bigint(20) NOT NULL,
  `bkash_no` varchar(50) NOT NULL,
  `bkash_trx` varchar(100) NOT NULL,
  `join_date` varchar(250) NOT NULL,
  `event_id` bigint(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tsize` varchar(50) NOT NULL,
  `institute` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_card` varchar(100) NOT NULL,
  `status` enum('active','inactive','rejected') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `individual_details`
--

INSERT INTO `individual_details` (`id`, `bkash_no`, `bkash_trx`, `join_date`, `event_id`, `name`, `tsize`, `institute`, `email`, `mobile`, `image`, `id_card`, `status`) VALUES
(4, '01990964045', '4KK5QVRQ19', '12:44 pm-20 Nov 2017', 4, 'Sorwar Ahmed', 'XL', 'North East University Bangladesh', 'sorwarahmed99@hotmail.com', '01705200595', '151116026015111602605322.jpg', '151116026115111602615716.jpg', 'active'),
(5, '01990964045', '4KL0R04LZI', '11:45 am-21 Nov 2017', 4, 'Abidur Rahman Jaigirdar', 'XL', 'North East University Bangladesh', 'abid.jaigirdar.neub@gmail.com', '01707646614', '151124313215112431321054.jpg', '151124313315112431336315.jpg', 'active'),
(6, '01990964045', '4KL0R07BJG', '11:50 am-21 Nov 2017', 4, 'Ashfaqur Rahman Jaigirdar', 'XL', 'North East University Bangladesh', 'abid.jaigirdar.neub@gmail.com', '01750596233', '151124342415112434245402.jpg', '15112434241511243424661.jpg', 'active'),
(7, '01959724217', '4KL7R0JO4N', '01:37 pm-21 Nov 2017', 4, 'Pranta Sarker', 'L', 'North East University Bangladesh', 'prantasarker78@gmail.com', '01680929776', '151124984215112498421385.jpg', '151124984315112498434782.jpg', 'active'),
(8, '01717605705', '4KL5R11GWD', '03:27 pm-21 Nov 2017', 5, 'Muhtamim Fuwad  Nahid', 'XL', 'Leading University,Sylhet', 'muhtamim0171@gmail.com', '01717605705', '151125642415112564241840.jpg', '151125642715112564271915.jpg', 'active'),
(9, '01717605705', '4KL7R3IENH', '12:19 am-22 Nov 2017', 5, 'Nasif Hannan', 'L', 'Sylhet Govt. College', 'nasifhannan@gmail.com', '01753820256', '151128833815112883381240.jpg', '151128835815112883587584.jpg', 'active'),
(10, '01751284790', '4KM8R5FBB0', '05:40 pm-22 Nov 2017', 4, 'MD. Anisuzzaman', 'M', 'North East University Bangladesh', 'mdazamanfahim@gmail.com', '01751284790', '151135076515113507656323.jpg', '151135080715113508076834.jpg', 'active'),
(11, '01717815865', '4KN2R83TGY', '01:03 am-23 Nov 2017', 5, 'Mustak Nadim Sany', 'XL', 'North East University Bangladesh', 'mustak_sany321@gmail.com', '01717815865', '151137738915113773897741.jpg', '151137739615113773965579.jpg', 'active'),
(12, '01854530256', '4KN5R9XJBV', '02:33 pm-23 Nov 2017', 4, 'Syed Husban Rahat', 'XL', 'Shahjalal City College', 'syedsirat123@gmail.com', '01754195079', '151142602015114260209944.jpg', '151142602015114260204437.jpg', 'active'),
(13, '01745610313', '4KN7R9WQUD', '02:33 pm-23 Nov 2017', 4, 'Ashique Abdullah', 'L', 'North East University Bangladesh', 'ashiqueashique465@gmail.com', '01745610313', '151142600915114260092686.jpg', '151142602915114260299440.jpg', 'active'),
(14, '01788228747', '4K05REMVW9', '05:52 pm-24 Nov 2017', 4, 'Gazi Md Jahidul Alam', 'M', 'Shahjalal Jamia School', 'leadingcircuit@gmail.com', '01794705135', '151152435915115243598430.jpg', '151152436015115243601983.jpeg', 'active'),
(15, '01965965955', '4K04RFUFRU', '09:12 pm-24 Nov 2017', 5, 'Jawad Khan Rayat', 'XL', 'Scholarshome', 'rayat35@gmail.com', '01751270995', '151153629815115362989641.jpg', '151153633715115363376225.jpg', 'active'),
(16, '01744303212', '4KP9RI3YYN', '03:16 pm-25 Nov 2017', 4, 'Rabindranath Das', 'M', 'North East University Bangladesh', '43rabin@gmail.com', '01744303212', '151160139615116013968532.jpg', '151160139715116013978621.jpg', 'active'),
(17, '01746347232', '01746347232', '05:15 pm-26 Nov 2017', 4, 'SYED RAHEM (Kamran)', 'XXL', 'S.R.K.', 'rahemkamran@gmail.com', '01746347232', '151169490315116949039582.jpg', '151169490615116949067255.jpg', 'rejected'),
(18, '01990964045', '4KR0RPY086', '11:43 am-27 Nov 2017', 4, 'Sheikh Atiqul Haque Saber', 'XL', 'North East University Bangladesh', 'sksaber19th@gmail.com', '01990964045', '151176140215117614021030.jpg', '15117614021511761402929.jpg', 'active'),
(19, '01768527145', '4KR7RQ18FZ', '11:52 am-27 Nov 2017', 4, 'Tanvir Shahriar', 'M', 'Sylhet Polytechnic Institute', 'tanvirshahriar19988@gmail.com', '01969890774', '151176194415117619446997.jpg', '151176194515117619455568.jpg', 'active'),
(20, '01746347232', 'TrxID 4KR7RQAERN at 27/11/2017 12:47', '12:55 pm-27 Nov 2017', 4, 'Syed Rahem Kamran', 'XXL', 'Dhakadokshin Degree College', 'rahemkamran@gmail.com', '01746347232', '151176570915117657092776.jpg', '151176571815117657183359.jpg', 'active'),
(21, '01747268175', '4KRORQEWGK', '01:27 pm-27 Nov 2017', 5, 'Md Yamin  Baksh', 'L', 'North East University Bangladesh', 'yamin.neub2@gmail.com', '01710461063', '151176762615117676264433.jpg', '151176765015117676504389.jpg', 'active'),
(22, '01837732721', '4KR4RQMHIY', '02:52 pm-27 Nov 2017', 4, 'Jayed Bin Rahman', 'L', 'Birshrestho Munshi Abdur Rouf Public College , Dhaka', 'sammofriends@gmail.com', '01763639118', '151177270415117727045693.jpg', '151177276115117727614733.jpg', 'active'),
(23, '01922921666', '4KR6RQLLNS', '05:26 pm-27 Nov 2017', 4, 'Rifat Bin Rahman', 'XL', 'Rajshahi Cantonment Public School and College', 'sunton71@gmail.com', '01951828982', '151178196815117819681621.jpg', '151178197015117819708132.jpeg', 'active'),
(24, '01721765202', '4KS8RVAARI', '03:35 pm-28 Nov 2017', 4, 'Joydip Das', 'M', 'North-East University,  Bagnladesh.', 'munna0072@yahoo.com', '01721765202', '151186170415118617043982.jpg', '151186171615118617163653.jpg', 'active'),
(25, '01711126064', '4KU4S3XVXG', '02:58 pm-30 Nov 2017', 5, 'Mahdin Islam Chowdhury', 'L', 'Jalalabad cantonment public school and college', 'islammahdin77@gmail.com', '01818088037', '151203231215120323122517.jpg', '151203233115120323319394.jpg', 'active'),
(26, '01612137313', '4KU4S51DOS', '06:21 pm-30 Nov 2017', 4, 'Suhan Shyeed Shemantho', 'XL', 'Scholarshome', 'carbonado117@gmail.com', '01624040766', '151204449315120444935144.jpg', '151204449815120444986073.jpg', 'active'),
(27, '01797215602', '4L48SL8V96', '12:35 pm-04 Dec 2017', 5, 'Dewan sowaib sadif', 'L', 'jalalabad cantonment public school and college', 'sadifsowaib@gmail.com', '01708965212', '151236929915123692993499.jpg', '151236930015123693006592.jpg', 'active'),
(28, '01724134768', '4L50SRXKUW', '06:15 pm-05 Dec 2017', 5, 'Sufol Deb Nath', 'M', 'Scholarshome Majortila College', 'adidassaga8@gmail.com', '01724134768', '151247613615124761362634.jpg', '151247615215124761522639.jpg', 'active'),
(29, '01780313347', '4L56SRVOP6', '06:25 pm-05 Dec 2017', 4, 'S.M.NURNOBI', 'M', 'North East University Bangladesh', 'nurnobisabok101@gmail.com', '01780313347', '151247674815124767481754.jpg', '151247675415124767545524.jpg', 'active'),
(30, '01984570070', '4L65SY0MSX', '09:32 pm-06 Dec 2017', 5, 'mahmudur rahman sakib', 'M', 'Jalalabad Cantonment Public School And College', 'sakibmahrah@gmail.com', '01631783380', '151257436715125743674724.jpg', '151257437515125743754815.jpg', 'active'),
(31, '01714485896', '4L88T4X4X0', '11:44 am-08 Dec 2017', 4, 'SHAH MD MAHFUZ HUSSAIN SHIMUL', 'L', 'universal college,sylhet', 'mdshimulahmed873@gmail.com', '01741986774', '151271177215127117721127.jpg', '151271188415127118847143.png', 'active'),
(32, '01796182528', '4L85T7OEX3', '08:46 pm-08 Dec 2017', 4, 'Sadiqul Islam Nayeem', 'L', 'M.C. College, Sylhet', 'sadiq.nayeem28@gmail.com', '01735532775', '151274435115127443519441.jpg', '151274441815127444184879.jpg', 'active'),
(33, '01761644976', '4L81T8AJ23', '12:02 am-09 Dec 2017', 4, 'Ishrat Jahan Tisha', 'L', 'North East University Bangladesh', 'ishratjahantisha370@gmail.com', '01761644976', '151275613115127561316003.jpg', '151275613215127561323674.jpg', 'active'),
(34, '01911224262', '4L97T94Z3R', '11:11 am-09 Dec 2017', 4, 'Mahin Iqbal Chowdhury', 'XL', 'Shahjalal University Of Science And Technology', 'mahiniqbalchy@gmail.com', '01521428176', '151279619915127961992351.jpg', '15127962921512796292817.jpg', 'active'),
(35, '01752088837', '4L98T9M4JA', '01:23 pm-09 Dec 2017', 5, 'foysol ahmed', 'XL', 'north east medical college and hospital', 'foysol.ahmed2@gmail.com', '01726499904', '151280420515128042058635.jpeg', '151280422715128042278959.jpg', 'active'),
(36, '01959724217', '4L90T9XRHK', '02:07 pm-09 Dec 2017', 5, 'Akramul islam', 'L', 'North East University Bangladesh', 'akramul16islam@gmail.com', '01712871038', '151280683015128068302683.jpg', '15128068411512806841451.jpg', 'active'),
(37, '01742551196', '4L90TB0G2A', '07:07 pm-09 Dec 2017', 5, 'Antu Roy', 'XL', 'Bangladesh University of Business and Technology', 'Anuvhob.roy888@gmail.com', '01742551196', '151282485215128248521461.jpg', '151282485515128248553196.jpg', 'active'),
(38, '01830269272', '4L90TCOKCC', '08:13 pm-09 Dec 2017', 4, 'Imran Hossain', 'L', 'Feni Government College', 'xsbabu@gmail.com', '01826995421', '151282882915128288292294.jpg', '151282883815128288387019.jpg', 'active'),
(39, '01740300534', '4L97TCHYIR', '10:22 pm-09 Dec 2017', 5, 'Showrav Mitra', 'L', 'Sylhet Engineering College', 'showravmitra@gmail.com', '01866020966', '151283651915128365198597.png', '151283652415128365245938.jpg', 'active'),
(40, '01775775622', '4LA2TEC210', '01:00 pm-10 Dec 2017', 5, 'Jahirul Alam Joy', 'L', 'Leading University', 'leadingcircuit@gmail.com', '01637910447', '151288919415128891944868.jpg', '151288924715128892477316.jpg', 'active'),
(41, '01795053095', '4LA1TEMR6X', '03:53 pm-10 Dec 2017', 5, 'Atikur Rahman', 'L', 'North East University Bangladesh', 'atikurrahman992@gmail.com', '01751382165', '151289958915128995892178.jpg', '151289959115128995917454.jpg', 'active'),
(42, '01971176401', '4CA7TFG665', '04:41 pm-10 Dec 2017', 5, 'Ahmad al kahir', 'M', 'North East University Bangladesh', 'm.kahir.2022@gmail.com', '01706448734', '151290247915129024795291.jpg', '151290248215129024822470.jpg', 'active'),
(43, '01990964045', '4LA2TELX5E', '05:07 pm-10 Dec 2017', 5, 'Md. Asif Muntasir', 'M', 'North East University Bangladesh', 'asifmuntasirshuaib@gmail.com', '01787118444', '151290407515129040755776.jpg', '151290407515129040752786.jpg', 'active'),
(44, '01775097139', '310', '06:12 pm-10 Dec 2017', 5, 'Musa Ahmed', 'L', 'North East University Bangladesh, sylhet', 'musaa7283@gmail.com', '01705754089', '151290792715129079278123.jpg', '151290793715129079372910.jpg', 'active'),
(45, '01925464235', '4LA7TGECLP', '06:29 pm-10 Dec 2017', 5, 'Tanayem Ahmed', 'M', 'Jalalabad Cantonment Public School', 'tanayemtnm@gmail.com', '01925464235', '151290894015129089404277.jpg', '151290895115129089512612.jpg', 'active'),
(46, '01771865044', '4LA7TG5R73', '06:31 pm-10 Dec 2017', 5, 'Biswajit Deb', 'XXL', 'Sylhet M.C College', 'jyotip30028@gmail.com', '01624548466', '151290911115129091119328.jpg', '151290911215129091121936.jpg', 'active'),
(47, '01925464235', '4LA7TGHZLT', '06:40 pm-10 Dec 2017', 5, 'Ishtiaque Ahmed', 'M', 'Osmani Medical High School', 'fyticinc@gmail.com', '01716066081', '151290963515129096352462.jpg', '151290963915129096397344.jpg', 'active'),
(48, '01780197626', '4LA3TGEA77', '06:42 pm-10 Dec 2017', 4, 'Sudipto Howlader Shovon', 'XXL', 'North East University Bangladesh', 'hrithik01556432380@gmail.com', '01780197626', '151290975015129097509486.jpg', '151290976715129097675688.jpg', 'active'),
(49, '01990542444', '4LA6TG9J62', '06:45 pm-10 Dec 2017', 5, 'Binayak Deb', 'XL', 'Sylhet Govt. Pilot High School', 'binayakdeb123@gmail.com', '01624548466', '151290992015129099206709.jpg', '151290992115129099217302.jpg', 'active'),
(50, '01680929776', '4LA1THAE0L', '08:33 pm-10 Dec 2017', 5, 'Pranta Sarker', 'L', 'NEUB', 'prantasarker78@gmail.com', '01680929776', '151291642515129164257556.jpg', '151291642615129164262494.jpg', 'active'),
(51, '01758966042', 'Will be submitted', '08:58 pm-10 Dec 2017', 4, 'Fardin Iqbal', 'XL', 'Rise', 'fardiniqbal16@gmail.com', '01758966042', '151291776415129177643821.jpeg', '151291788115129178811146.jpg', 'inactive'),
(52, '01737324631', '4LA6TH20OO', '09:08 pm-10 Dec 2017', 5, 'ZUBAIR AHMED RAFI', 'XXL', 'Shahjalal University of Science & Technology', 'zubairahmedrafi37@gmail.com', '01759139913', '151291851515129185151823.jpg', '151291851815129185184515.jpg', 'active'),
(53, '01758966042', 'Will be submitted', '09:09 pm-10 Dec 2017', 5, 'FARDIN IQBAL', 'XL', 'RISE', 'fardiniqbal16@gmail.com', '01758966042', '151291832515129183254155.jpeg', '151291857815129185782311.jpg', 'inactive'),
(54, '01680929776', '4LA2THD6QQ', '09:14 pm-10 Dec 2017', 5, 'Sheikh Atiqul Haque Saber', 'M', 'NEUB', 'sksaber19th@gmail.com', '01990964045', '151291884015129188407598.jpg', '151291884015129188405087.jpg', 'active'),
(55, '01688732671', '4LA3THJDL9', '09:21 pm-10 Dec 2017', 5, 'Susmit Sinha', 'XL', 'Shahporan Institute of Business and Technology', 'susmitsinha0@gmail.com', '01680846300', '151291916715129191674788.jpg', '151291926115129192616892.jpg', 'inactive'),
(56, '01711331027', '4LA2THRDH4', '10:03 pm-10 Dec 2017', 5, 'Muhammad Tawseef-ur Rahamn', 'L', 'Anandaniketan School', 'tastaw223@gmail.com', '01711331027', '15129216981512921698446.jpg', '15129218061512921806184.jpg', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
`id` bigint(20) NOT NULL,
  `result_file` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `result_file`, `status`) VALUES
(1, 'techhunt_result_17.pdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
`id` bigint(20) NOT NULL,
  `schedule_file` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `schedule_file`, `status`) VALUES
(1, 'techhunt_2017_schedule_v1.pdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
`id` bigint(20) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `title`, `status`) VALUES
(1, 'Title Sponsor', 'active'),
(2, 'Partial Sponsor', 'active'),
(3, 'T-shirt Sponsor', 'active'),
(4, 'Radio Partner', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_details`
--

CREATE TABLE IF NOT EXISTS `sponsor_details` (
`id` bigint(20) NOT NULL,
  `sponsor_id` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsor_details`
--

INSERT INTO `sponsor_details` (`id`, `sponsor_id`, `image`, `title`, `status`) VALUES
(1, 1, 'pubali-bank-logo.png', 'Pubali Bank Limited', 'active'),
(2, 2, 'gd.png', 'Green Delta Insurance Co. Ltd.', 'active'),
(3, 2, 'north-east-medical-college.jpg', 'North East Medical College', 'active'),
(4, 4, 'RadioTodayFM89.6.png', 'Radio Today 89.6FM', 'active'),
(5, 3, 'rebranding-img-new.png', 'AB Bank Limited', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id` bigint(20) NOT NULL,
  `bkash_no` varchar(50) NOT NULL,
  `bkash_trx` varchar(80) NOT NULL,
  `join_date` varchar(250) NOT NULL,
  `event_id` bigint(20) NOT NULL,
  `team_name` varchar(250) NOT NULL,
  `members` int(11) NOT NULL,
  `status` enum('active','inactive','rejected') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE IF NOT EXISTS `team_details` (
`id` bigint(20) NOT NULL,
  `team_id` bigint(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tsize` varchar(50) NOT NULL,
  `institute` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_card` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `techhunt_admin`
--

CREATE TABLE IF NOT EXISTS `techhunt_admin` (
`id` bigint(20) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `techhunt_admin`
--

INSERT INTO `techhunt_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'techhunt', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'info@techhuntbd.org');

-- --------------------------------------------------------

--
-- Table structure for table `tshirt_size`
--

CREATE TABLE IF NOT EXISTS `tshirt_size` (
`id` bigint(20) NOT NULL,
  `tsize` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tshirt_size`
--

INSERT INTO `tshirt_size` (`id`, `tsize`, `status`) VALUES
(1, 'M', 'active'),
(2, 'L', 'active'),
(3, 'XL', 'active'),
(4, 'XXL', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach_details`
--
ALTER TABLE `coach_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countdown`
--
ALTER TABLE `countdown`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_details`
--
ALTER TABLE `individual_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_details`
--
ALTER TABLE `sponsor_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techhunt_admin`
--
ALTER TABLE `techhunt_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tshirt_size`
--
ALTER TABLE `tshirt_size`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coach_details`
--
ALTER TABLE `coach_details`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `countdown`
--
ALTER TABLE `countdown`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `hotel_details`
--
ALTER TABLE `hotel_details`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `individual_details`
--
ALTER TABLE `individual_details`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sponsor_details`
--
ALTER TABLE `sponsor_details`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `techhunt_admin`
--
ALTER TABLE `techhunt_admin`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tshirt_size`
--
ALTER TABLE `tshirt_size`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
