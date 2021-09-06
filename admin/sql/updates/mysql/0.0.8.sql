DROP TABLE IF EXISTS `#__tvo_teams`;

CREATE TABLE `#__tvo_teams` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
  `title`    VARCHAR(20) NOT NULL DEFAULT 'NoNameSet',
	`teamId`   INT(8) NOT NULL,
  `published` BOOLEAN DEFAULT FALSE,
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
DEFAULT COLLATE=utf8mb4_unicode_ci;

INSERT INTO `#__tvo_teams` (`teamId`, `teamName`) VALUES
('123456', 'Testteam01'),
('234567', 'Testteam02');
