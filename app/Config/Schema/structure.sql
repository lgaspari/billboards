CREATE DATABASE IF NOT EXISTS billboards;
USE billboards;

CREATE TABLE `content_types` (
	`id` int (11) NOT NULL AUTO_INCREMENT,
	`name` varchar(45) NOT NULL,
	`slug` varchar(45) NOT NULL,
	`description` varchar(45) NOT NULL,
	`settings` text DEFAULT NULL,
	`requires_cron` tinyint(1) DEFAULT '0',
	`last_modification` timestamp NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uc_content_types_1` (`slug`)
) ENGINE=InnoDB;

CREATE TABLE `contents` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`content_type_id` int(11) NOT NULL,
	`name` varchar(45) NOT NULL,
	`settings` text DEFAULT NULL,
	`local_data` text DEFAULT NULL,
	`last_modification` timestamp NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uc_contents_1` (`name`),
	CONSTRAINT `fk_contents_1` FOREIGN KEY (`content_type_id`) REFERENCES `content_types` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `screens` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(45) NOT NULL,
	`address` varchar(255) DEFAULT NULL,
	`district` varchar(45) DEFAULT NULL,
	`commune` varchar(45) DEFAULT NULL,
	`current_ip` varchar(45) DEFAULT NULL,
	`last_check` datetime DEFAULT NULL,
	`last_modification` timestamp NULL ON UPDATE CURRENT_TIMESTAMP,
	`send_alert` tinyint(1) DEFAULT '0',
	PRIMARY KEY (`id`),
	UNIQUE KEY `uc_screens_1` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `tags` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(45) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uc_tags_1` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `roles` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(45) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uc_roles_1` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`role_id` int(11) NOT NULL,
	`username` varchar(45) NOT NULL,
	`password` varchar(45) NOT NULL,
	`email` varchar(100) NOT NULL,
	`last_login` datetime DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uc_users_1` (`username`),
	UNIQUE KEY `uc_users_2` (`email`),
	CONSTRAINT `fk_users_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `contents_screens` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`content_id` int(11) NOT NULL,
	`screen_id` int(11) NOT NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT `fk_contents_screens_1` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`) ON DELETE RESTRICT,
	CONSTRAINT `fk_contents_screens_2` FOREIGN KEY (`screen_id`) REFERENCES `screens` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE `screens_tags` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`screen_id` int(11) NOT NULL,
	`tag_id` int(11) NOT NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT `fk_screens_tags_1` FOREIGN KEY (`screen_id`) REFERENCES `screens` (`id`) ON DELETE RESTRICT,
	CONSTRAINT `fk_screens_tags_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE `tags_users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`tag_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT `fk_tags_users_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE RESTRICT,
	CONSTRAINT `fk_tags_users_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB;