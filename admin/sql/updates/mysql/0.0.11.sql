DROP TABLE IF EXISTS `#__helloworld`;
DROP TABLE IF EXISTS `#__tvo_teams_games`;

CREATE TABLE `#__tvo_teams` (
	`id`      INT(11)     NOT NULL AUTO_INCREMENT,
	`teamId`	INT(10)			NOT NULL,
	`title`		VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`),
	UNIQUE (`teamId`)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
DEFAULT COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `#__tvo_games` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`teamGamesId` INT(10) NOT NULL,
	`gamesData` LONGTEXT NULL COLLATE 'utf8mb4_bin',
	PRIMARY KEY (`id`) USING BTREE,
	UNIQUE INDEX `teamId` (`teamGamesId`) USING BTREE
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
DEFAULT COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `#__tvo_tables` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`teamTableId` INT(10) NOT NULL,
	`tablesData` LONGTEXT NULL COLLATE 'utf8mb4_unicode_ci',
	`lastUpdated` DATETIME NOT NULL,
	PRIMARY KEY (`id`) USING BTREE,
	UNIQUE INDEX `teamTableId` (`teamTableId`) USING BTREE
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
DEFAULT COLLATE=utf8mb4_unicode_ci;



INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (732061, 68333, 'M-BzL2 2', 1, 'Herren 1');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (725421, 68361, 'M-BzL4-1	', 1, 'Herren 2');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (728101, 68533, 'wJA-BWOL-1	', 0, 'weibliche A-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (725609, 68377, 'F-BzL1', 1, 'Damen 1');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (725733, 68389, 'F-BzL4', 1, 'Damen 2');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (735309, 69769, 'mJB-BzL1', 1, 'männliche B-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (735413, 69789, 'mJC-BzL1', 1, 'männliche C-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (737105, 69997, 'mJD-BzL1', 1, 'männliche D-Jugend 1');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (748645, 70009, 'mJD-BzL3-1', 1, 'männliche D-Jugend 2');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (739293, 70149, 'mJE-BzL2-1', 1, 'männliche E-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (794966, 76366, 'mJE ABR 4	', 1, 'männliche E-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (739473, 70165, 'wJA-BzL1	', 1, 'weibliche A-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (739501, 70169, 'wJB-BzL1', 1, 'weibliche B-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (739565, 70177, 'wJC-BzL1-1	', 1, 'weibliche C-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (740745, 70281, 'wJD-BzL1', 1, 'weibliche D-Jugend');
INSERT INTO `owtxa_tvo_teams` (`teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (741257, 70341, 'wJE-BzL1-1', 1, 'weibliche E-Jugend');

INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (725421, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (732061, [])
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (728101, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (725609, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (725733, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (735309, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (735413, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (737105, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (748645, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (739293, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (794966, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (739473, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (739501, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (739565, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (740745, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (741257, []);

INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (68361, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (68333, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (68533, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (68377, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (68389, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (69769, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (69789, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (69997, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (70009, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (70149, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (76366, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (70165, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (70169, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (70177, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (70281, []);
INSERT INTO `owtxa_tvo_tables` (`teamTableId`, `tablesData`) VALUES (70341, []);
