INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', 'Chevy', 'Ng', 'chevyng@gmail.com', 'pw1', '0', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', 'Yi Shan', 'Chua', 'yishan@hotmail.com', 'pw2', '1', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', 'Donovan', 'Ong', 'donong@gmail.com', 'pw3', '2', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', 'Laman', 'Mammadova', 'laman@gmail.com', 'pw4', '2', '1',CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', 'Nigel', 'Ng', 'nigelng@gmail.com', 'pw5', '1', '0',CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


INSERT INTO `group8`.`blog`
(`blogID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '2', 'Pineapple', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`blog`
(`blogID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '3', 'Fashion Star', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`blog`
(`blogID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '4', 'Let''s Go', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`blog`
(`blogID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '1', 'Just Smile', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);



INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '4', 'Title 1', 'Body 1', '2017-01-22 11:31:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '4', 'Title 2', 'Body 2', '2017-01-22 12:31:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '1', 'Title 3', 'Body 3', '2017-01-23 21:31:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '3', 'Title 4', 'Body 4', '2017-01-23 21:36:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '4', 'Title 5', 'Body 5', '2017-02-11 15:36:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '3', 'Title 6', 'Body 6', '2017-02-13 13:36:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '3', 'Title 7', 'Body 7', '2017-02-15 16:36:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '2', 'Title 8', 'Body 8', '2017-02-21 17:16:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '2', 'Title 9', 'Body 9', '2017-02-23 18:16:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '1', 'Title 10', 'Body 10', '2017-02-23 18:18:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '1', 'Title 11', 'Body 11', '2017-02-24 13:23:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '4', 'Title 12', 'Body 12', '2017-02-26 19:23:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '1', 'Title 13', 'Body 13', '2017-02-26 19:54:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '4', 'Title 14', 'Body 14', '2017-02-27 22:45:02', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '1', 'Title 15', 'Body 15', '2017-03-01 12:00:00', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '2', 'Title 16', 'Body 16', '2017-03-01 12:15:00', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '1', 'Title 17', 'Body 17', '2017-03-01 23:59:59', CURRENT_TIMESTAMP);



INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', '2', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '2', '3', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '4', '1', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '4', '5', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '5', '3', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', 'circle name 1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '4', 'circle name 2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '5', 'circle name 3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '2', 'circle name 4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '2', 'circle name 5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '3', 'circle name 6', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '4', 'circle name 7', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);




INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '1', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '1', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '1', '5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '2', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '2', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '2', '5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '3', '5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '3', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '3', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '4', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '4', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '4', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '4', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '5', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '5', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '5', '5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '6', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '6', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('20', '6', '3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '7', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '7', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('23', '7', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);



INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '7', '1', 'blablabla 1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '1', '3', 'blablabla 2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '7', '2', 'blablabla 3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '4', '3', 'blablabla 4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '3', '5', 'blablabla 5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '5', '4', 'blablabla 6', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '5', '2', 'blablabla 7', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '5', '5', 'blablabla 8', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '2', '3', 'blablabla 9', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '3', '2', 'blablabla 10', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '7', '1', 'blablabla 11', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '5', '4', 'blablabla 12', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '1', '4', 'blablabla 13', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '2', '3', 'blablabla 14', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '7', '1', 'blablabla 15', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '4', '4', 'blablabla 16', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '5', '2', 'blablabla 17', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '3', '5', 'blablabla 18', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '2', '3', 'blablabla 19', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('20', '6', '2', 'blablabla 20', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '2', '3', 'blablabla 21', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '5', '4', 'blablabla 22', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('23', '5', '5', 'blablabla 23', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('24', '3', '5', 'blablabla 24', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('25', '3', '2', 'blablabla 25', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('26', '1', '3', 'blablabla 26', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('27', '5', '4', 'blablabla 27', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('28', '2', '4', 'blablabla 28', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('29', '6', '3', 'blablabla 29', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);



INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1',  '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '1', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '2',  '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '4', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '3', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '4', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '5', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '2', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '1', '7', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '7', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '1', '6', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '5', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '7', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '2', '1', 'path 1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '7', '5', 'path 2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '2', '1', 'path 3', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '1', '1', 'path 4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '5', '3', 'path 5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '4', '4', 'path 6', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '5', '5', 'path 7', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '2', '1', 'path 8', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '2', '2', 'path 9', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '2', '4', 'path 10', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '6', '4', 'path 11', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '4', '4', 'path 12', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '1', '1', 'path 13', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '3', '2', 'path 14', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '3', '2', 'path 15', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '4', '5', 'path 16', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '8', '2', 'path 17', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '8', '2', 'path 18', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '1', '1', 'path 19', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('20', '2', '3', 'path 20', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '3', '1', 'path 21', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '8', '4', 'path 22', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('23', '3', '1', 'path 23', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('24', '1', '2', 'path 24', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('25', '6', '4', 'path 25', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('26', '6', '5', 'path 26', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('27', '6', '2', 'path 27', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', '1', 'Thank you', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '4', '1', 'Nice pic!', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '5', '1', 'Good :) ', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '2', '3', 'Wow', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '1', '3', 'It was amazing', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '1', '2', 'Great day!', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '5', '2', 'Unforgettable day with friends!', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '3', '2', 'Hello', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '2', '18', 'comment 9', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '4', '24', 'comment 10', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '2', '3', 'comment 11', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '1', '16', 'comment 12', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '3', '7', 'comment 13', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '5', '26', 'comment 14', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '2', '3', 'comment 15', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '4', '4', 'comment 16', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '2', '25', 'comment 17', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '4', '1', 'comment 18', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '3', '5', 'comment 19', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('20', '1', '22', 'comment 20', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', 'Computer Science student in UCL',	'Male',	'1992-07-10',	'London',	'Singapore',	'1 Gower Street',
  'English, Chinese, Basic Korean and Japanese', 'UCL', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', 'Computer Science student in UCL',	'Female',	'1995-07-21',	'London',	'Singapore',	'1 Bedford Street',
  'English, Chinese', 'Bed', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', 'Computer Science student in UCL',	'Male',	'1992-09-04',	'London',	'Singapore',	'1 Regent Street',
  'English, Chinese', 'UCL', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

  INSERT INTO `group8`.`profile`
  (`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
  VALUES ('4', 'Computer Science student in UCL',	'Female',	'1995-01-01',	'London',	'Azerbaijan',	'1 Malet Street',
    'English, Azerbaijani', 'UCL', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', 'Econs student in UCL',	'Male',	'1993-10-30',	'London',	'Singapore',	'1 Charlotte Street',
  'English, Chinese', 'UCL', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);



INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('1','2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('23', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('24', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('25', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('25', '5', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('26', '4', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
