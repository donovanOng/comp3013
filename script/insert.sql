INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', 'Chevy', 'Ng', 'chevyng@gmail.com', 'pw1', '0', '1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', 'Yi Shan', 'Chua', 'yishan@hotmail.com', 'pw2', '1', '1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', 'Donovan', 'Ong', 'donong@gmail.com', 'pw3', '1', '1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', 'Laman', 'Mammadova', 'laman@gmail.com', 'pw4', '0', '1',CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`user` (
`userID`, `first_name`, `last_name`, `email`, `password`, `privacy`, `admin`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', 'Nigel', 'Ng', 'nigelng@gmail.com', 'pw5', '1', '0',CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');


INSERT INTO `group8`.`blog`
(`blogID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '2', 'Pineapple', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`blog`
(`blogID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '3', 'Fashion Star', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`blog`
(`blogID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '4', 'Let''s Go', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`blog`
(`blogID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '1', 'Just Smile', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);



INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '4', 'Title 1', 'Body 1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '4', 'Title 2', 'Body 2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '1', 'Title 3', 'Body 3', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '3', 'Title 4', 'Body 4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '4', 'Title 5', 'Body 5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '3', 'Title 6', 'Body 6', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '3', 'Title 7', 'Body 7', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '2', 'Title 8', 'Body 8', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '2', 'Title 9', 'Body 9', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '1', 'Title 10', 'Body 10', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '1', 'Title 11', 'Body 11', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '4', 'Title 12', 'Body 12', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '1', 'Title 13', 'Body 13', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '4', 'Title 14', 'Body 14', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '1', 'Title 15', 'Body 15', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '2', 'Title 16', 'Body 16', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`post`
(`postID`, `blogID`, `title`, `body`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '1', 'Title 17', 'Body 17', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);



INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', '2', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '2', '3', '1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '4', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '4', '5', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`relationship`
(`relationshipID`, `userID`, `userID_2`, `status`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '5', '3', '1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');


INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', 'circle name 1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '4', 'circle name 2', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '5', 'circle name 3', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '2', 'circle name 4', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '2', 'circle name 5', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '3', 'circle name 6', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`circle` (
`circleID`, `userID`, `name`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '4', 'circle name 7', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');




INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '1', '3', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '1', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '1', '5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '2', '3', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '2', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '2', '5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '3', '5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '3', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '3', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '4', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '4', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '4', '3', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '4', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '5', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '5', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '5', '5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '6', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '6', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('20', '6', '3', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '7', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '7', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`circleFriends`
(`cFriendsID`, `circleID`, `userID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('23', '7', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);



INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '7', '1', 'blablabla 1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '1', '3', 'blablabla 2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '7', '2', 'blablabla 3', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '4', '3', 'blablabla 4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '3', '5', 'blablabla 5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '5', '4', 'blablabla 6', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '5', '2', 'blablabla 7', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '5', '5', 'blablabla 8', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '2', '3', 'blablabla 9', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '3', '2', 'blablabla 10', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '7', '1', 'blablabla 11', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '5', '4', 'blablabla 12', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '1', '4', 'blablabla 13', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '2', '3', 'blablabla 14', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '7', '1', 'blablabla 15', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '4', '4', 'blablabla 16', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '5', '2', 'blablabla 17', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '3', '5', 'blablabla 18', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '2', '3', 'blablabla 19', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('20', '6', '2', 'blablabla 20', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '2', '3', 'blablabla 21', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '5', '4', 'blablabla 22', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('23', '5', '5', 'blablabla 23', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('24', '3', '5', 'blablabla 24', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('25', '3', '2', 'blablabla 25', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('26', '1', '3', 'blablabla 26', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('27', '5', '4', 'blablabla 27', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('28', '2', '4', 'blablabla 28', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`message`
(`messageID`, `circleID`, `userID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('29', '6', '3', 'blablabla 29', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);



INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1',  '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '1', '2', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '2',  '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '4', '2', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '3', '1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '4', '1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '5', '1', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');

INSERT INTO `group8`.`photoCollection`
(`collectionID`, `userID`, `accessRights`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '2', '2', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');


INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '1', '7', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '7', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '1', '6', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '5', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photoCollectionAccessRights`
(`rightsID`, `collectionID`, `circleID`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '7', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);


INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '2', '1', 'path 1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '7', '5', 'path 2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '2', '1', 'path 3', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '1', '1', 'path 4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '5', '3', 'path 5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '4', '4', 'path 6', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '5', '5', 'path 7', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '2', '1', 'path 8', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '2', '2', 'path 9', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '2', '4', 'path 10', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '6', '4', 'path 11', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '4', '4', 'path 12', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '1', '1', 'path 13', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '3', '2', 'path 14', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '3', '2', 'path 15', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '4', '5', 'path 16', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '8', '2', 'path 17', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '8', '2', 'path 18', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '1', '1', 'path 19', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('20', '2', '3', 'path 20', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '3', '1', 'path 21', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '8', '4', 'path 22', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('23', '3', '1', 'path 23', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('24', '1', '2', 'path 24', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('25', '6', '4', 'path 25', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('26', '6', '5', 'path 26', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`photo`
(`photoID`, `collectionID`, `userID`, `path`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('27', '6', '2', 'path 27', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);


INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '1', '1', 'Thank you', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '4', '1', 'Nice pic!', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '5', '1', 'Good :) ', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '2', '3', 'Wow', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', '1', '3', 'It was amazing', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '1', '2', 'Great day!', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '5', '2', 'Unforgettable day with friends!', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '3', '2', 'Hello', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('9', '2', '18', 'comment 9', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '4', '24', 'comment 10', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '2', '3', 'comment 11', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '1', '16', 'comment 12', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '3', '7', 'comment 13', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '5', '26', 'comment 14', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '2', '3', 'comment 15', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '4', '4', 'comment 16', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '2', '25', 'comment 17', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '4', '1', 'comment 18', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '3', '5', 'comment 19', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`comment`
(`commentID`, `userID`, `photoID`, `content`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('20', '1', '22', 'comment 20', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);


INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('1', 'Computer Science student in UCL',	'Male',	'1992-07-10',	'London',	'Singapore',	'1 Gower Street',
  'English, Chinese, Basic Korean and Japanese', 'UCL', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('2', 'Computer Science student in UCL',	'Female',	'1995-07-21',	'London',	'Singapore',	'1 Bedford Street',
  'English, Chinese', 'Bed', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('3', 'Computer Science student in UCL',	'Male',	'1992-09-04',	'London',	'Singapore',	'1 Regent Street',
  'English, Chinese', 'UCL', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);


INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('4', 'Econs student in UCL',	'Male',	'1992-07-10',	'London',	'Singapore',	'1 Charlotte Street',
  'English, Chinese', 'UCL', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`profile`
(`userID`, `about`, `gender`, `birthdate`, `current_city`, `home_city`, `address`, `languages`, `workplace`, `CREATED_AT`, `UPDATED_AT`)
VALUES ('5', 'Computer Science student in UCL',	'Female',	'1992-07-10',	'London',	'Azerbaijan',	'1 Malet Street',
  'English, Azerbaijani', 'UCL', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('1','2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('1', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('2', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('3', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('4', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('6', '5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('7', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('8', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('10', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('11', '5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('12', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('13', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('14', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('15', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('16', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('17', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('18', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('19', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '2', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('21', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('22', '5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('23', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('24', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('25', '1', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('25', '5', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);

INSERT INTO `group8`.`annotation`
(`photoID`,`userID`,`CREATED_AT`, `UPDATED_AT`)
VALUES ('26', '4', '0000-00-00 00:00:00.000000', CURRENT_TIMESTAMP);
