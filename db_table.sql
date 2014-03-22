DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
	`userid` int(11) NOT NULL auto_increment,
	`fname` varchar(50) NOT NULL,
	`lname` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`password` varchar(100) NOT NULL,
	`status` varchar(10) NOT NULL,
	PRIMARY KEY  (`userid`),
	UNIQUE KEY `userid` (`userid`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT=1;

INSERT INTO `users` VALUES (0,'admin','admin','admin@admin.com','admin','admin');
