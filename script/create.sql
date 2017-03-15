CREATE DATABASE group8;
USE group8;
CREATE TABLE `group8`.`user` (
	`userID` INT NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(255) NOT NULL,
	`last_name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`photo_path` VARCHAR(255) NOT NULL,
	`privacy` TINYINT NOT NULL DEFAULT '1',
	`admin` TINYINT NOT NULL DEFAULT '0',
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UPDATED_AT` TIMESTAMP NOT NULL,
	PRIMARY KEY (`userID`),
	UNIQUE (`email`)
) ENGINE = InnoDB;
CREATE TABLE `group8`.`relationship` (
	`relationshipID` INT NOT NULL AUTO_INCREMENT,
	`userID` INT NOT NULL COMMENT 'Foreign Key',
	`userID_2` INT NOT NULL,
	`status` TINYINT NOT NULL DEFAULT '1',
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UPDATED_AT` TIMESTAMP NOT NULL,
	PRIMARY KEY (`relationshipID`),
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`userID_2`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`photoCollection` (
	`collectionID` INT NOT NULL AUTO_INCREMENT,
	`userID` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`accessRights` TINYINT NOT NULL DEFAULT '2',
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`UPDATED_AT` TIMESTAMP NOT NULL,
	PRIMARY KEY (`collectionID`),
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`circle` (
	`circleID` INT NOT NULL AUTO_INCREMENT,
	`userID` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`circleID`),
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`photo` (
	`photoID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`collectionID` INT NOT NULL,
	`userID` INT NOT NULL,
	`path` VARCHAR(255) NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (`collectionID`) REFERENCES `group8`.`photoCollection`(`collectionID`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`comment` (
	`commentID` INT NOT NULL AUTO_INCREMENT,
	`userID` INT NOT NULL,
	`photoID` INT NOT NULL,
	`content` LONGTEXT NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`commentID`),
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`photoID`) REFERENCES `group8`.`photo`(`photoID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`blog` (
	`blogID` INT NOT NULL AUTO_INCREMENT,
	`userID` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`blogID`),
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`post` (
	`postID` INT NOT NULL AUTO_INCREMENT,
	`blogID` INT NOT NULL,
	`title` VARCHAR(255) NOT NULL,
	`body` LONGTEXT NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`postID`)
) ENGINE = InnoDB;
CREATE TABLE `group8`.`circleFriends` (
	`cFriendsID` INT NOT NULL AUTO_INCREMENT,
	`circleID` INT NOT NULL,
	`userID` INT NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`cFriendsID`),
	FOREIGN KEY (`circleID`) REFERENCES `group8`.`circle`(`circleID`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`message` (
	`messageID` INT NOT NULL AUTO_INCREMENT,
	`circleID` INT NOT NULL,
	`userID` INT NOT NULL,
	`content` LONGTEXT NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`messageID`),
	FOREIGN KEY (`circleID`) REFERENCES `group8`.`circle`(`circleID`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`photoCollectionAccessRights` (
	`rightsID` INT NOT NULL AUTO_INCREMENT,
	`collectionID` INT NOT NULL,
	`circleID` INT NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`rightsID`),
	FOREIGN KEY (`collectionID`) REFERENCES `group8`.`photoCollection`(`collectionID`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`circleID`) REFERENCES `group8`.`circle`(`circleID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
CREATE TABLE `group8`.`profile` (
	`userID` INT NOT NULL,
	`about` LONGTEXT NOT NULL,
	`gender` VARCHAR(255) NOT NULL,
	`birthdate` DATE NOT NULL,
	`current_city` VARCHAR(255) NOT NULL,
	`home_city` VARCHAR(255) NOT NULL,
	`address` VARCHAR(255) NOT NULL,
	`languages` VARCHAR(255) NOT NULL,
	`workplace` VARCHAR(255) NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
	UNIQUE(`userID`)
) ENGINE = InnoDB;
CREATE TABLE `group8`.`annotation` (
	`photoID` INT NOT NULL,
	`userID` INT NOT NULL,
	`CREATED_AT` TIMESTAMP NOT NULL DEFAULT 0,
	`UPDATED_AT` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (`photoID`) REFERENCES `group8`.`photo`(`photoID`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`userID`) REFERENCES `group8`.`user`(`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT annotate_unique UNIQUE (`photoID`, `userID`)
) ENGINE = InnoDB;
