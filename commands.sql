CREATE TABLE IF NOT EXISTS `users` (
                                       `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                                       `name` CHAR(100) NOT NULL,
    `age` TINYINT UNSIGNED DEFAULT NULL,
    `email` CHAR(255) NOT NULL UNIQUE,
    `password` CHAR NOT NULL,
    `gender` ENUM('male', 'female'),
    `deleted_at` TIMESTAMP DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )  ENGINE=InnoDB CHARACTER SET utf8;


INSERT INTO `users`(`name`, `email`, `password`, `gender`) VALUES ('Jim', 'jim@gmail.com', 'password', 'male')

    INSERT INTO `users`(`name`, `email`, `password`, `gender`, `age`) VALUES ('Mike', 'mike@gmail.com', 'password', 'male', 25)


INSERT INTO `users`(`name`, `email`, `password`, `gender`, `age`) VALUES ('Kate', 'kate@gmail.com', 'password', 'female', 30),
    ('Oliver', 'oliver@gmail.com', 'password', 'male', 20)

SELECT `id` FROM `users` WHERE `email` = 'kate@gmail.com'

SELECT * FROM `users` WHERE `email` LIKE '%ukr.net';
SELECT * FROM `users` WHERE `age` BETWEEN  25 AND 40;
SELECT * FROM `users` WHERE `id` NOT IN (1,4);
SELECT * FROM `users` WHERE `age` > 30 AND (`email` LIKE '%@ukr.net' OR `id` > 1)
SELECT * FROM `users` WHERE `age` > 20 AND `email` LIKE '%@ukr.net' ORDER BY `age` DESC
SELECT * FROM `users` WHERE `age` > 20 AND `email` LIKE '%@ukr.net' ORDER BY `age` DESC
SELECT * FROM `users` WHERE `email` = 'mike@gmail.com' AND `deleted_at` IS NULL
SELECT * FROM `users` WHERE `deleted_at` IS NOT NULL
SELECT * FROM `users` ORDER BY `age` DESC LIMIT 2, 1


UPDATE `users` SET `age` = 40, `name` = 'test' WHERE `id` = 3

DELETE FROM `users`;


CREATE TABLE IF NOT EXISTS `posts` (
                                       `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                                       `title` CHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    `user_id` INT UNSIGNED DEFAULT NULL,
    `deleted_at` TIMESTAMP DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
    );

CREATE TABLE IF NOT EXISTS `tags` (
                                      `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                                      `title` CHAR(255) NOT NULL,
    `deleted_at` TIMESTAMP DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

CREATE TABLE IF NOT EXISTS `post_tag` (
                                          `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                                          `post_id` INT UNSIGNED,
                                          `tag_id` INT UNSIGNED,
                                          FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`),
    FOREIGN KEY (`tag_id`) REFERENCES `tags`(`id`)
    );

INSERT INTO `posts`(`title`, `content`, `user_id`) VALUES ('post title', 'post content')
    INSERT INTO `tags`(`title`) VALUES ('IT'), ('FINANCE'), ('SPORT')

INSERT INTO `post_tag`(`post_id`, `tag_id`) VALUES (1, 1), (1, 2)

SELECT * FROM `posts`

SELECT * FROM `post_tag` WHERE `post_id` IN (1)

SELECT * FROM `tags` WHERE `id` IN (1,2)

SELECT AVG(`age`) avg FROM `users`








