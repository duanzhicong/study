/*
 Navicat Premium Data Transfer

 Source Server         : red A
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : project

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 02/01/2020 17:40:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pro
-- ----------------------------
DROP TABLE IF EXISTS `pro`;
CREATE TABLE `pro`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pic` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pro
-- ----------------------------
INSERT INTO `pro` VALUES (1, 't1', 'c1', 'p1');
INSERT INTO `pro` VALUES (2, 't2', 'c2', 'p2');
INSERT INTO `pro` VALUES (3, 't3', 'c3', 'p3');
INSERT INTO `pro` VALUES (4, 't4', 'c4', 'p4');
INSERT INTO `pro` VALUES (5, 't5', 'c5', 'p5');
INSERT INTO `pro` VALUES (6, 't6', 'c6', 'p6');
INSERT INTO `pro` VALUES (7, 't7', 'c7', 'p7');

SET FOREIGN_KEY_CHECKS = 1;
