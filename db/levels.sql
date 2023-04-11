/*
MySQL Data Transfer
Source Host: localhost
Source Database: levels
Target Host: localhost
Target Database: levels
Date: 2/15/2015 12:29:26 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for user_levels
-- ----------------------------
DROP TABLE IF EXISTS `user_levels`;
CREATE TABLE `user_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `user_levels` VALUES ('1', 'user1', 'user1', '1');
INSERT INTO `user_levels` VALUES ('2', 'user2', 'user2', '2');
INSERT INTO `user_levels` VALUES ('3', 'user3', 'user3', '3');
INSERT INTO `user_levels` VALUES ('4', 'user4', 'user4', '4');
