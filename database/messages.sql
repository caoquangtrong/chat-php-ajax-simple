CREATE TABLE `messages`(
    `id_msg` int(11) not NULL AUTO_INCREMENT ,
    `body` longtext not null,
    `user_from` text not null,
    `date_sent` DATETIME not NULL,
    PRIMARY KEY (`id_msg`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;