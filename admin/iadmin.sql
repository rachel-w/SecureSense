
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `contrera_sensedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `MapData`
--

CREATE TABLE IF NOT EXISTS `MapData` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `lattitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `MapData`
--

INSERT INTO `MapData` (`id`, `name`, `description`, `lattitude`, `longitude`) VALUES
(19, 'hyder', 'Birla Mandir<br>\nHill Fort Rd, Hyderabad, Telangana 500004<br>', '17.406287', '78.469095'),
(20, 'hyderabad', '<img src="http://www.keenthemes.com/preview/metronic/theme/assets/global/plugins/jcrop/demos/demo_files/image1.jpg" height="70" width="140"><br><p class="text-warning text-capitalize">hi lakshmaji</p>Mobile<strong>88888</strong><br><div class="label label-primary">OPENS AT :7:50</div><div class="label label-success">CLOSED AT :9:59</div>', '17.454576', '78.384980'),
(29, 'hyder', '<img src="http://www.keenthemes.com/preview/metronic/theme/assets/global/plugins/jcrop/demos/demo_files/image1.jpg" width="140" height="70"><br><p class="text-warning text-capitalize">fghd</p>Mobile<strong>ddgh</strong><br><div class="label label-primary">OPENS AT :dfghdfh</div><div class="label label-success">CLOSED AT :dgh</div>', '17.450473', '78.380979');

-- ----------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
