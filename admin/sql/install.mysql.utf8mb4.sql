DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__tvo_teams` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`teamGamesId` INT(10) NOT NULL,
	`teamTableId` INT(10) NOT NULL,
	`title` VARCHAR(25) NOT NULL DEFAULT noTitle COLLATE 'utf8mb4_unicode_ci',
	`published` TINYINT(4) NOT NULL DEFAULT '1',
	`teamName` VARCHAR(25) NOT NULL DEFAULT noName COLLATE 'utf8mb4_unicode_ci',
	`teamLeague` VARCHAR(50) NOT NULL DEFAULT 'noLeagueSet' COLLATE 'utf8mb4_unicode_ci',
	PRIMARY KEY (`id`) USING BTREE,
	UNIQUE INDEX `teamId` (`teamGamesId`) USING BTREE
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=17
;


CREATE TABLE `#__tvo_tables` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`teamTableId` INT(10) NOT NULL,
	`tablesData` LONGTEXT NULL COLLATE 'utf8mb4_unicode_ci',
	`lastUpdated` DATETIME NOT NULL DEFAULT current_timestamp(),
	PRIMARY KEY (`id`) USING BTREE,
	UNIQUE INDEX `teamTableId` (`teamTableId`) USING BTREE
)
COLLATE='utf8mb4_unicode_ci'
CHARSET=utf8mb4
ENGINE=InnoDB
AUTO_INCREMENT=1
;

CREATE TABLE `#__tvo_games` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`teamGamesId` INT(10) NOT NULL,
	`gamesData` LONGTEXT NULL COLLATE 'utf8mb4_unicode_ci',
	`lastUpdated` DATETIME NOT NULL,
	PRIMARY KEY (`id`) USING BTREE,
	UNIQUE INDEX `teamId` (`teamGamesId`) USING BTREE
)
COLLATE='utf8mb4_unicode_ci'
CHARSET=utf8mb4
ENGINE=InnoDB
AUTO_INCREMENT=1
;
