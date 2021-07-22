CREATE DATABASE Practice
USE Practice

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `authorid` int(11) NOT NULL DEFAULT 0,
  `title` varchar(55) CHARACTER SET utf8 NOT NULL,
  `ISBN` varchar(55) CHARACTER SET utf8 NOT NULL,
  `pub_year` smallint(6) NOT NULL DEFAULT 0,\
  `available` tinyint(4) NOT NULL
) 


INSERT INTO `books` (`authorid`, `title`, `ISBN`, `pub_year`, `available`) VALUES
(3, 'Executive Orders', '6', 1996, 1),
(3, 'Red Rabbit', '9', 2000, 0),
(3, 'Teeth of the Tiger', '5', 2003, 1),
(1, 'The Hobbit', '7', 1937, 1),
(1, 'The Return of The King', '1', 1955, 1),
(3, 'The Sum of All Fears', '8', 1991, 1),
(1, 'The Two Towers', '0', 1954, 1);

