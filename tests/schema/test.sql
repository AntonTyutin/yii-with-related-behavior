DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL
);

DROP TABLE IF EXISTS `article_tag`;

CREATE TABLE `article_tag` (
  `article_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL,
  `weight` int(10) NULL,
  PRIMARY KEY (`article_id`,`tag_id`)
);

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `user_id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL,
  `content` text NOT NULL
);

DROP TABLE IF EXISTS `group`;

CREATE TABLE `group` (
  `gid` INTEGER PRIMARY KEY AUTOINCREMENT,
  `name` varchar(100) NOT NULL
);

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created_at` text NULL,
  `updated_at` text NULL
);

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `group_id` int(10) NULL,
  `name` varchar(100) NOT NULL,
  `created_at` text NULL,
  `updated_at` text NULL
);
