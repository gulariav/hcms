-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2014 at 06:17 PM
-- Server version: 5.1.71
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`, `last_login`, `modified_on`) VALUES
(1, 'Hariom', 'hariom.pal@sakshay.in', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2014-02-10 13:59:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_mobile` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `sender_name`, `sender_email`, `sender_mobile`, `message`, `added_on`) VALUES
(1, 'Hariom Pal', 'hariom.pal@gmail.com', '9015861718', 'My Message is shown here', '2014-02-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL,
  `page_text` longtext NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  `added_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_text`, `page_title`, `meta_keyword`, `meta_description`, `status`, `added_on`, `modified_on`) VALUES
(1, 'About Us', '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id leo elit. Praesent orci neque, viverra a nisi sit amet, hendrerit bibendum arcu. Duis id arcu a magna facilisis posuere. Proin a dui non nisi tincidunt porttitor. Nam id nibh non arcu feugiat convallis quis quis turpis. Mauris bibendum laoreet nisl, nec feugiat libero rhoncus at. Etiam ac egestas neque, ac volutpat nibh.\n\nPhasellus eu leo id ipsum malesuada convallis. Suspendisse iaculis molestie metus, nec facilisis dolor ultricies vel. Quisque ultrices, tortor at tincidunt vehicula, felis felis ultrices arcu, sed gravida nisl justo nec risus. Donec eget augue et ante vehicula interdum. Pellentesque a felis quis lacus pellentesque placerat. Suspendisse potenti. Proin ac pellentesque arcu.\n\nMaecenas pulvinar, lacus quis mollis egestas, metus lacus sollicitudin leo, eget feugiat tellus nisl sed lacus. Donec viverra odio et lorem cursus, eget congue lectus hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas vitae enim ac quam varius vehicula et nec magna. Integer sagittis risus eget lacinia facilisis. Morbi nibh dui, faucibus vel accumsan at, feugiat at purus. Nullam id accumsan enim. Maecenas pretium sodales ante, ultricies tincidunt mi. Donec pharetra vitae urna interdum aliquet. Duis sit amet nulla consequat, sagittis enim vel, iaculis nulla. Fusce nec est a lectus sodales porta.\n\nPraesent eget diam tellus. Etiam vel elementum libero. Quisque porta nunc sit amet neque tristique feugiat. Nam lorem justo, tristique et luctus non, egestas at dui. Maecenas tempor rutrum urna, non sodales libero laoreet ut. Sed porta felis in massa congue feugiat. Sed convallis tellus nec sodales laoreet. Phasellus sit amet lacinia libero. Phasellus laoreet luctus mi at rutrum. Mauris fringilla imperdiet tempus. Curabitur semper, nisl eu dictum egestas, sapien dolor mattis ante, nec rhoncus nunc magna ac augue. Praesent eu magna arcu. Praesent varius posuere turpis vitae auctor. Ut a purus non lacus pharetra consequat. Ut sapien sapien, porta sed facilisis vel, egestas et justo. Phasellus aliquet nulla eget turpis semper consequat.\n\nAenean sed leo ac dolor ornare gravida. Donec malesuada diam ipsum. Vestibulum vulputate enim ut mollis dictum. Morbi in nunc ultricies, adipiscing turpis interdum, gravida purus. Aenean at nulla scelerisque, ultrices turpis eu, lacinia sapien. Vestibulum fermentum hendrerit ante at feugiat. Pellentesque non dapibus tellus. ', 'About Us', 'about us', 'about us', '0', '2014-02-26 00:00:00', '2014-02-10 00:00:00'),
(2, 'Terms', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id leo elit. Praesent orci neque, viverra a nisi sit amet, hendrerit bibendum arcu. Duis id arcu a magna facilisis posuere. Proin a dui non nisi tincidunt porttitor. Nam id nibh non arcu feugiat convallis quis quis turpis. Mauris bibendum laoreet nisl, nec feugiat libero rhoncus at. Etiam ac egestas neque, ac volutpat nibh.</p>\n\n<p>Phasellus eu leo id ipsum malesuada convallis. Suspendisse iaculis molestie metus, nec facilisis dolor ultricies vel. Quisque ultrices, tortor at tincidunt vehicula, felis felis ultrices arcu, sed gravida nisl justo nec risus. Donec eget augue et ante vehicula interdum. Pellentesque a felis quis lacus pellentesque placerat. Suspendisse potenti. Proin ac pellentesque arcu.</p>\n\n<p>Maecenas pulvinar, lacus quis mollis egestas, metus lacus sollicitudin leo, eget feugiat tellus nisl sed lacus. Donec viverra odio et lorem cursus, eget congue lectus hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas vitae enim ac quam varius vehicula et nec magna. Integer sagittis risus eget lacinia facilisis. Morbi nibh dui, faucibus vel accumsan at, feugiat at purus. Nullam id accumsan enim. Maecenas pretium sodales ante, ultricies tincidunt mi. Donec pharetra vitae urna interdum aliquet. Duis sit amet nulla consequat, sagittis enim vel, iaculis nulla. Fusce nec est a lectus sodales porta.</p>\n\n<p>Praesent eget diam tellus. Etiam vel elementum libero. Quisque porta nunc sit amet neque tristique feugiat. Nam lorem justo, tristique et luctus non, egestas at dui. Maecenas tempor rutrum urna, non sodales libero laoreet ut. Sed porta felis in massa congue feugiat. Sed convallis tellus nec sodales laoreet. Phasellus sit amet lacinia libero. Phasellus laoreet luctus mi at rutrum. Mauris fringilla imperdiet tempus. Curabitur semper, nisl eu dictum egestas, sapien dolor mattis ante, nec rhoncus nunc magna ac augue. Praesent eu magna arcu. Praesent varius posuere turpis vitae auctor. Ut a purus non lacus pharetra consequat. Ut sapien sapien, porta sed facilisis vel, egestas et justo. Phasellus aliquet nulla eget turpis semper consequat.</p>\n\n<p>Aenean sed leo ac dolor ornare gravida. Donec malesuada diam ipsum. Vestibulum vulputate enim ut mollis dictum. Morbi in nunc ultricies, adipiscing turpis interdum, gravida purus. Aenean at nulla scelerisque, ultrices turpis eu, lacinia sapien. Vestibulum fermentum hendrerit ante at feugiat. Pellentesque non dapibus tellus.</p> ', 'Terms and Condition', 'terms and condition', 'terms and condition', '1', '0000-00-00 00:00:00', '2014-02-10 00:00:00'),
(3, 'Home', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id leo elit. Praesent orci neque, viverra a nisi sit amet, hendrerit bibendum arcu. Duis id arcu a magna facilisis posuere. Proin a dui non nisi tincidunt porttitor. Nam id nibh non arcu feugiat convallis quis quis turpis. Mauris bibendum laoreet nisl, nec feugiat libero rhoncus at. Etiam ac egestas neque, ac volutpat nibh.</p>\n\n<p>Phasellus eu leo id ipsum malesuada convallis. Suspendisse iaculis molestie metus, nec facilisis dolor ultricies vel. Quisque ultrices, tortor at tincidunt vehicula, felis felis ultrices arcu, sed gravida nisl justo nec risus. Donec eget augue et ante vehicula interdum. Pellentesque a felis quis lacus pellentesque placerat. Suspendisse potenti. Proin ac pellentesque arcu.</p>\n\n<p>Maecenas pulvinar, lacus quis mollis egestas, metus lacus sollicitudin leo, eget feugiat tellus nisl sed lacus. Donec viverra odio et lorem cursus, eget congue lectus hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas vitae enim ac quam varius vehicula et nec magna. Integer sagittis risus eget lacinia facilisis. Morbi nibh dui, faucibus vel accumsan at, feugiat at purus. Nullam id accumsan enim. Maecenas pretium sodales ante, ultricies tincidunt mi. Donec pharetra vitae urna interdum aliquet. Duis sit amet nulla consequat, sagittis enim vel, iaculis nulla. Fusce nec est a lectus sodales porta.</p>\n\n<p>Praesent eget diam tellus. Etiam vel elementum libero. Quisque porta nunc sit amet neque tristique feugiat. Nam lorem justo, tristique et luctus non, egestas at dui. Maecenas tempor rutrum urna, non sodales libero laoreet ut. Sed porta felis in massa congue feugiat. Sed convallis tellus nec sodales laoreet. Phasellus sit amet lacinia libero. Phasellus laoreet luctus mi at rutrum. Mauris fringilla imperdiet tempus. Curabitur semper, nisl eu dictum egestas, sapien dolor mattis ante, nec rhoncus nunc magna ac augue. Praesent eu magna arcu. Praesent varius posuere turpis vitae auctor. Ut a purus non lacus pharetra consequat. Ut sapien sapien, porta sed facilisis vel, egestas et justo. Phasellus aliquet nulla eget turpis semper consequat.</p>\n\n<p>Aenean sed leo ac dolor ornare gravida. Donec malesuada diam ipsum. Vestibulum vulputate enim ut mollis dictum. Morbi in nunc ultricies, adipiscing turpis interdum, gravida purus. Aenean at nulla scelerisque, ultrices turpis eu, lacinia sapien. Vestibulum fermentum hendrerit ante at feugiat. Pellentesque non dapibus tellus.</p> ', 'Home', 'My Home', 'My Home', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) NOT NULL,
  `default_keywords` text NOT NULL,
  `default_description` text NOT NULL,
  `facebook_page` varchar(255) NOT NULL,
  `twitter_page` varchar(255) NOT NULL,
  `modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `default_keywords`, `default_description`, `facebook_page`, `twitter_page`, `modified_on`) VALUES
(1, 'dsfsdafdsfdsfds', 'sfsadsdsadasdsfdaf', 'dfasfsdf', 'www.facebook.com', 'www.twitter.com', '2014-02-10 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
