CREATE TABLE `signin_system`.`users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `user` VARCHAR(255) NOT NULL , 
    `pass` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)
) ENGINE = InnoDB;


INSERT INTO `users` (`id`, `user`, `pass`) 
VALUES (NULL, 'admin', '12345')

INSERT INTO `users` (`id`, `user`, `pass`) 
VALUES (NULL, 'france', '200022')