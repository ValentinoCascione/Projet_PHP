-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `price` tinyint(4) NOT NULL,
  `image` text NOT NULL,
  `date` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `post` (`id`, `title`, `price`, `image`, `date`, `id_user`) VALUES
(46,	'dzdzd',	89,	'data:image/jpeg;base64,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',	NULL,	19),
(47,	'ZAZAZA',	21,	'dzdzadzdaz',	NULL,	19),
(48,	'ezezdzdÅ“',	21,	'dzsddzdazd',	NULL,	21);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `username`, `password`, `admin`) VALUES
(19,	'popo',	'$2y$12$BBy86TZfnRu2N48YbaiXEuDYbwYRtiM34mRdgbGaoVHPveIZJLGeS',	1),
(20,	'sss',	'$2y$12$N9G2yWqt0p7nPENk65.lJurQ4kIwwqrviDIg5GTd/nJ5BDHIoHxaC',	0),
(21,	'lol',	'$2y$12$94.hJGhoWLM8PPiPDzd.ce.gAXuUS8UvqPPA/TljCFQAj7ZQW5oQy',	0),
(22,	'deux',	'$2y$12$NKkM5fvBCZY.Rcdsxf2cc.dwn5wrFJDtkU6SNq1Qx7rsDdYOct/ri',	0);

-- 2019-09-05 15:09:46
