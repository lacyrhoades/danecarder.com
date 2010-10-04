
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- painting
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `painting`;


CREATE TABLE `painting`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255)  NOT NULL,
	`medium` VARCHAR(255),
	`dimensions` VARCHAR(255),
	`date` DATETIME,
	`description` VARCHAR(255),
	`category` VARCHAR(255),
	`subcategory` VARCHAR(255),
	`thumbnail` VARCHAR(255),
	`image` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `painting_U_1` (`title`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
