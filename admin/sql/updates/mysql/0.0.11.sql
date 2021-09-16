DROP TABLE IF EXISTS `#__helloworld`;

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

CREATE TABLE `owtxa_tvo_games` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`teamGamesId` INT(10) NOT NULL,
	`gamesData` LONGTEXT NULL COLLATE 'utf8mb4_bin',
	PRIMARY KEY (`id`) USING BTREE,
	UNIQUE INDEX `teamId` (`teamGamesId`) USING BTREE
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
DEFAULT CHARSET=utf8mb4;


INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (1, 732061, 68333, 'M-BzL2 2', 1, 'Herren 1');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (2, 725421, 68361, 'M-BzL4-1	', 1, 'Herren 2');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (3, 728101, 68533, 'wJA-BWOL-1	', 0, 'weibliche A-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (4, 725609, 68377, 'F-BzL1', 1, 'Damen 1');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (5, 725733, 68389, 'F-BzL4', 1, 'Damen 2');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (6, 735309, 69769, 'mJB-BzL1', 1, 'männliche B-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (7, 735413, 69789, 'mJC-BzL1', 1, 'männliche C-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (8, 737105, 69997, 'mJD-BzL1', 1, 'männliche D-Jugend 1');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (9, 748645, 70009, 'mJD-BzL3-1', 1, 'männliche D-Jugend 2');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (10, 739293, 70149, 'mJE-BzL2-1', 1, 'männliche E-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (11, 794966, 76366, 'mJE ABR 4	', 1, 'männliche E-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (12, 739473, 70165, 'wJA-BzL1	', 1, 'weibliche A-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (13, 739501, 70169, 'wJB-BzL1', 1, 'weibliche B-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (14, 739565, 70177, 'wJC-BzL1-1	', 1, 'weibliche C-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (15, 740745, 70281, 'wJD-BzL1', 1, 'weibliche D-Jugend');
INSERT INTO `owtxa_tvo_teams` (`id`, `teamGamesId`, `teamTableId`, `title`, `published`, `teamName`) VALUES (16, 741257, 70341, 'wJE-BzL1-1', 1, 'weibliche E-Jugend');

INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (1, 725421, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (2, 732061, [])
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (3, 728101, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (4, 725609, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (5, 725733, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (6, 735309, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (7, 735413, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (8, 737105, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (9, 748645, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (10, 739293, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (11, 794966, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (12, 739473, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (13, 739501, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (14, 739565, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (15, 740745, []);
INSERT INTO `owtxa_tvo_games` (`teamGamesId`, `gamesData`) VALUES (16, 741257, []);
