CREATE VIEW `group8`.`friends` AS 
SELECT `userID` AS `userID_user`, `userID_2` AS `userID_friend`
FROM `group8`.`relationship`
WHERE status = 0
UNION
SELECT `userID_2` AS `userID_user`, `userID` AS `userID_friend`
FROM `group8`.`relationship`
WHERE status = 0 ;

CREATE VIEW `group8`.`friendAndFriendsOfFriends` AS 
SELECT f1.`userID_user`, f2.`userID_friend` AS `userID_friendOfFriend`
FROM `group8`.`friends` f1, `group8`.`friends` f2
WHERE f1.`userID_user` != f2.`userID_friend`
  AND (
    f1.`userID_friend` = f2.`userID_user`
    OR (
      f1.`userID_user` = f2.`userID_user` 
      AND f1.`userID_friend` = f2.`userID_friend`))
ORDER BY `userID_user`;