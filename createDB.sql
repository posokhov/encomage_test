CREATE
DATABASE IF NOT EXISTS `posts`;

CREATE TABLE if not exists `post`
(
    `postId` int
(
    11
) auto_increment PRIMARY KEY,
    `user` varchar
(
    25
) NOT NULL,
    `text` text NOT NULL,
    `date` timestamp NOT NULL default CURRENT_TIMESTAMP
    )
    DEFAULT CHARSET = utf8;

CREATE TABLE `comments`
(
    `id`     int(10) auto_increment PRIMARY KEY,
    `postId` int(10) NOT NULL,
    `user`   varchar(255) NOT NULL,
    `text`   text         NOT NULL,
    `date`   timestamp    NOT NULL default CURRENT_TIMESTAMP
)

CREATE TABLE `rating`
(
    `id`     int(10) auto_increment PRIMARY KEY,
    `postId` int(10) NOT NULL,
    `rate`   text         NOT NULL,
    `date`   timestamp    NOT NULL default CURRENT_TIMESTAMP
) DEFAULT CHARSET = utf8;