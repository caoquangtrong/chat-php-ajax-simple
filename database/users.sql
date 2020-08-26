CREATE TABLE `users`(
    `id_user` int(11) not NULL AUTO_INCREMENT,
    `username` text not null,
    `password` text not null,
    `date_created` DATETIME not NULL,
    PRIMARY KEY (`id_user`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;