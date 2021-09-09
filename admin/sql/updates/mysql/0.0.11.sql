DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__tvo_teams` (
	`id`      INT(11)     NOT NULL AUTO_INCREMENT,
	`teamId`	INT(10)			NOT NULL,
	`title`		VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`),
	UNIQUE (`teamId`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;

INSERT INTO `#__tvo_teams` (`teamId`, `title`) VALUES
(123456, 'Team01'),
(345678, 'Team02'),
(567890, 'Team03');
