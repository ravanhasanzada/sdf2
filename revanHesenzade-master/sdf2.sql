-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 03:47 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sdf2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `menu`
-- 

CREATE TABLE `menu` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `menu`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `ups2`
-- 

CREATE TABLE `ups2` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `ups2`
-- 

INSERT INTO `ups2` VALUES (1, 'Quality Cuisine', 'Far far away, behind the word mountains, far from ');
INSERT INTO `ups2` VALUES (2, ' Fresh Food', 'Far far away, behind the word mountains, far from ');
INSERT INTO `ups2` VALUES (3, 'Bread & Pancake', 'Far far away, behind the word mountains, far from ');
INSERT INTO `ups2` VALUES (4, 'Reserve Now', 'Far far away, behind the word mountains, far from ');
INSERT INTO `ups2` VALUES (5, 'Fresh Vegies Salad', 'Far far away, behind the word mountains, far from ');
INSERT INTO `ups2` VALUES (6, 'Whole Chicken', 'Far far away, behind the word mountains, far from ');
