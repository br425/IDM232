-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2017 at 02:39 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `benrodia_database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(200) DEFAULT NULL,
  `fullPic` varchar(100) DEFAULT NULL,
  `desc` text,
  `tag` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `thumbnail`, `fullPic`, `desc`, `tag`) VALUES
(1, 'Metroid Collage Gradient', 'samus-hue-val-sat-design-tn.jpg', 'samus-hue-val-sat-design.jpg', 'Stylized Metroid hue-value-saturation gradient design project', 'digital'),
(2, 'Contrast Panorama', 'transform-frames-design-tn.PNG', 'transform-frames-design.png', 'High Contrast Panorama Design Project', 'digital'),
(3, 'Character Concept Art', 'char-designs-tn.png', 'char-designs.JPG', 'Color-centric character concept design project', 'digital'),
(4, 'Atmospheric Landscape', 'atmospheric-landscape-tn.JPG', 'atmospheric-design.png', 'A design project demonstrating atmospheric perspective as it applies to color and depth. I made it by collaging a number of pictures with Photoshop, then vectorizing and simplifying them in grayscale, before manually assigning color values to each of the layers, giving it this appearance.', 'digital'),
(5, 'Shroomsday', 'shroomsday-tn.JPG', 'shroomsday.jpg', 'The project was to make a movie poster for a cheesy B-movie of our own imagination (Introduction-to-Photoshop-class). That''s me in the poster, looking all horrified, but credit goes to my brother for the name.', 'digital'),
(6, 'Rodbe Movie Poster', 'rodbe-tn.JPG', 'rodbe.jpg', 'Another movie poster, this one a bit more derivitive I''ll admit. It was for a putty maquette that I sculpted, so very multimedia. I''m honestly showing off my work with his face than anything in Photoshop.', 'digital'),
(7, 'Charcoal Degas ''Waiting''', 'degas-tn.jpg', 'degas.jpg', 'Study of another artist (I didn''t have a wide selection of choices) in charcoals for a perspective/value class.', 'fine'),
(8, 'Pastel White Lotus', 'lotus-tn.jpg', 'lotus.jpg', 'An old pastels piece from back in highschool. Must have spent an eternity trying to mix up the right colors, and my art teacher wouldn''t have anything less. Thanks Mrs. Seufert.', 'fine'),
(9, 'Main Building Sketch', 'main-tn.jpg', 'main.jpg', 'Drawing of the stairwell in Drexel''s Main Building in two-point-perspective. Left ''intentionally'' unfinished, for artistic flair.', 'fine'),
(10, 'Self Portrait 2015', 'portrait-tn.jpg', 'portrait.jpg', 'A return to my face in 2015, because I am the most humble gentleman... ever! Actually my mom requested a new portrait since it had been a few years and I''ve grow some as an artist, and otherwise.', 'fine'),
(11, 'White Charcoal Bust', 'form-tn.jpg', 'form.jpg', 'A study of human form with a deformed homeless man as my model... Actually it''s a statue my teacher Mrs. Seufert picked up in Italy.', 'fine'),
(12, 'White Charcoal Profiles', 'char-faces-tn.jpg', 'char-faces.jpg', 'A self-portrait from 2055... It''s the same statue as the other picture, just a detail of his face this time. Gruesome though.', 'fine'),
(13, 'Charcoal Bear', 'bear-tn.jpg', 'bear.jpg', 'One of my oldest Charcoals from the young age of 14. Posing is definitely awkward and the fidelity didn''t hold up so well draw on that cheap paper, but it still has a place in my past.', 'fine'),
(14, 'Pastel Mosaic Turtles', 'turtle-tn.jpg', 'turtle.jpg', 'The beginning of my color theory study. The idea is that the hues are locked to each outline, but the shade shifts everytime you hit the edge of a line. It''s cute I gues, seems more like an Illustrator project to me now.', 'fine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
