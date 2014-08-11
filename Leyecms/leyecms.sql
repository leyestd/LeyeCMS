CREATE DATABASE  IF NOT EXISTS `leyecms` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `leyecms`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: leyecms
-- ------------------------------------------------------
-- Server version	5.6.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_about`
--

DROP TABLE IF EXISTS `tbl_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_about`
--

LOCK TABLES `tbl_about` WRITE;
/*!40000 ALTER TABLE `tbl_about` DISABLE KEYS */;
INSERT INTO `tbl_about` VALUES (1,'<h3>佳腾简介：</h3>\r\n<p style=\"text-indent: 2em;\">昆山佳腾光电塑胶有限公司（台资）成立于2002年6月，坐落于江苏省昆山市张浦镇江丰路168号，投资总额达1700万美金，占地面积50亩，员工900人，是专门从事塑胶模具设计，模具制造及注塑成型加工的专业厂家。主要生产PC电子类、汽车类、NB类、OA办公用品类、数位类、TV类等产品。</p>\r\n<p style=\"text-indent: 2em;\">昆山佳腾传承过去台湾丰富的开模经验，12年来培养了一批优秀工程师，再加上先进的软硬体设备，延续台湾ISO管理，全面优化管理体系，受到越来越多客户的青睐，公司于2005年陆续通过ISO9001：2008质量管理体系认证、ISO14001：2004环境质量管理体系认证、OHSAS18001：2007职业安全卫生管理体系。其产品远销台湾、日本、美国、欧洲及东南亚各地。</p>\r\n<p style=\"text-indent: 2em;\">昆山佳腾自成立以来，一直秉承以&ldquo;诚信、品质、成本、效率、服务、创新&rdquo;为宗旨的经营理念。</p>\r\n<p style=\"text-indent: 2em;\">诚邀四海顾客来访佳腾，愿与您携手共创美好未来！</p>\r\n<h3>佳腾概况：</h3>\r\n<p style=\"text-indent: 2em;\">注册时间：<span class=\"text-success\">2002.01.30</span>，投入生产时间：<span class=\"text-success\">2002.10.18</span>，注册资本：<span class=\"text-success\">USD970万</span>，投资总额：<span class=\"text-success\">USD1,854万</span>，厂房建坪：<span class=\"text-success\">26161M2</span>，工厂地面：<span class=\"text-success\">13056M2</span>，员工人数：<span class=\"text-success\">900人</span>，模具厂人数：<span class=\"text-success\">145人</span></p>\r\n<h3>经营理念：</h3>\r\n<p style=\"text-indent: 2em;\">本着<span class=\"text-error\">诚信</span>之原则，坚持不断改善流程来降低<span class=\"text-error\">成本</span>，并不断提升员工产出的<span class=\"text-error\">品质</span>与<span class=\"text-error\">效率</span>，提供給客戶合理价位的高品质产品，以及满意的<span class=\"text-error\">服务</span>，且在技术、流程、管理、服务上力求<span class=\"text-error\">创新</span>求精，并赢得客戶的信赖与支持，创造三赢(客戶滿意/员工福利/股东获利)以期达到永续经营的目标。</p>\r\n<h3>客户颁发奖项：</h3>\r\n<ul class=\"thumbnails\">\r\n<li class=\"span3\">\r\n<div class=\"thumbnail\"><img src=\"http://218.4.205.131/jiateng/upload/attachment/13857717584924.jpg\" alt=\"\" width=\"300\" height=\"300\" />\r\n<p class=\"text-center\">HP颁发的奖</p>\r\n</div>\r\n</li>\r\n<li class=\"span3\">\r\n<div class=\"thumbnail\"><img src=\"http://218.4.205.131/jiateng/upload/attachment/13857717773651.jpg\" alt=\"\" width=\"300\" height=\"300\" />\r\n<p class=\"text-center\">Canon 颁发的奖项</p>\r\n</div>\r\n</li>\r\n<li class=\"span3\">\r\n<div class=\"thumbnail\"><img src=\"http://218.4.205.131/jiateng/upload/attachment/13857717897809.jpg\" alt=\"\" width=\"300\" height=\"300\" />\r\n<p class=\"text-center\">MSI 颁发的奖项</p>\r\n</div>\r\n</li>\r\n<li class=\"span3\">\r\n<div class=\"thumbnail\"><img src=\"http://218.4.205.131/jiateng/upload/attachment/13857718085510.jpg\" alt=\"\" width=\"300\" height=\"300\" />\r\n<p class=\"text-center\">Coretronic 颁发的奖项</p>\r\n</div>\r\n</li>\r\n</ul>');
/*!40000 ALTER TABLE `tbl_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_advertisement`
--

DROP TABLE IF EXISTS `tbl_advertisement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_advertisement`
--

LOCK TABLES `tbl_advertisement` WRITE;
/*!40000 ALTER TABLE `tbl_advertisement` DISABLE KEYS */;
INSERT INTO `tbl_advertisement` VALUES (25,'昆山佳腾欢迎您！','/upload/images/13866341247114.jpg','我们专门从事塑胶模具设计，模具制造及注塑成型加工的专业厂家。主要生产PC电子类、汽车类、NB类、OA办公用品类、数位类、TV类等产品。');
/*!40000 ALTER TABLE `tbl_advertisement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_attachment`
--

DROP TABLE IF EXISTS `tbl_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_attachment`
--

LOCK TABLES `tbl_attachment` WRITE;
/*!40000 ALTER TABLE `tbl_attachment` DISABLE KEYS */;
INSERT INTO `tbl_attachment` VALUES (11,'HP颁发的奖','/upload/attachment/13857717584924.jpg','jpg','/leyecms/upload/attachment/13857717584924.jpg','HP颁发的奖'),(12,'Canon颁发的奖','/upload/attachment/13857717773651.jpg','jpg','/leyecms/upload/attachment/13857717773651.jpg','Canon颁发的奖'),(13,'MSI颁发的奖','/upload/attachment/13857717897809.jpg','jpg','/leyecms/upload/attachment/13857717897809.jpg','MSI颁发的奖'),(14,'Coretronic颁发的奖','/upload/attachment/13857718085510.jpg','jpg','/leyecms/upload/attachment/13857718085510.jpg','Coretronic颁发的奖'),(15,'二维码','/upload/attachment/13867716355405.gif','gif','/jiateng/upload/attachment/13867716355405.gif','无');
/*!40000 ALTER TABLE `tbl_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contact`
--

LOCK TABLES `tbl_contact` WRITE;
/*!40000 ALTER TABLE `tbl_contact` DISABLE KEYS */;
INSERT INTO `tbl_contact` VALUES (1,'xxxxx','<h3>xxxxxxxxxx</h3>\r\n<p><span style=\"font-size: large;\">地址: 江xxxxxxxx</span></p>\r\n<p><span style=\"font-size: large;\">电话: 86-512-xxxxxxx</span></p>\r\n<p><span style=\"font-size: large;\">邮编: 215300</span></p>\r\n<hr />\r\n<h4>模具厂业务部</h4>\r\n<p><span style=\"font-size: large;\">联系人: 杨先生</span></p>\r\n<p><span style=\"font-size: large;\">传真: 86-512-xxxxxx</span></p>\r\n<p><span style=\"font-size: large;\"><a href=\"mailto:jiateng@ksjiateng.com\">E-mail: xxxxxxx</a></span></p>\r\n<hr />\r\n<h4>塑胶厂业务部</h4>\r\n<p><span style=\"font-size: large;\">联系人: 李先生</span></p>\r\n<p><span style=\"font-size: large;\">传真: 86-512-xxxxxxx</span></p>\r\n<p><span style=\"font-size: large;\"><a href=\"mailto:franky.lee@ksjiateng.com\">E-mail:xxxxxxx.com</a></span></p>'),(5,'xxxxxx','<h3>xxxxx</h3>\r\n<p><span style=\"font-size: large;\">地址: xxxx</span></p>\r\n<p><span style=\"font-size: large;\">电话: 86-574-xxxxx</span></p>\r\n<p><span style=\"font-size: large;\">传真: 86-574-86xxx</span></p>\r\n<p><span style=\"font-size: large;\">邮编: 315800</span></p>\r\n<p><a href=\"mailto:jiateng@nbjiateng.com\"><span style=\"font-size: large;\">E-mail: jxxxxxx</span></a></p>');
/*!40000 ALTER TABLE `tbl_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_culture`
--

DROP TABLE IF EXISTS `tbl_culture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_culture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_culture`
--

LOCK TABLES `tbl_culture` WRITE;
/*!40000 ALTER TABLE `tbl_culture` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_culture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_equipment`
--

DROP TABLE IF EXISTS `tbl_equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_equipment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_equipment`
--

LOCK TABLES `tbl_equipment` WRITE;
/*!40000 ALTER TABLE `tbl_equipment` DISABLE KEYS */;
INSERT INTO `tbl_equipment` VALUES (1,'模具设备明细','<table class=\"table  table-striped table-condensed\">\r\n<thead>\r\n<tr><th>机台</th><th>数量</th></tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>高速机CNC铣床</td>\r\n<td>6</td>\r\n</tr>\r\n<tr>\r\n<td>CNC精雕机</td>\r\n<td>4</td>\r\n</tr>\r\n<tr>\r\n<td>CNC加工机</td>\r\n<td>4</td>\r\n</tr>\r\n<tr>\r\n<td>镜面火花机</td>\r\n<td>8</td>\r\n</tr>\r\n<tr>\r\n<td>EDM</td>\r\n<td>7</td>\r\n</tr>\r\n<tr>\r\n<td>线切割机</td>\r\n<td>9</td>\r\n</tr>\r\n<tr>\r\n<td>平面磨</td>\r\n<td>5</td>\r\n</tr>\r\n<tr>\r\n<td>铣床</td>\r\n<td>14</td>\r\n</tr>\r\n<tr>\r\n<td>车床</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<td>锯床</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<td>搖臂钻床</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<td>翻模机</td>\r\n<td>1</td>\r\n</tr>\r\n<tr>\r\n<td>合模机</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<td>补焊机</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">测量工具：三次元、块规、內径规 、外径规、游标卡尺、厚薄规、高度规、硬度计、大理石量测平台、分厘卡、斜度规、R规、塞规、投影机。</td>\r\n</tr>\r\n</tbody>\r\n</table>'),(2,'射出机台明细','<table class=\"table table-striped table-condensed\">\r\n<thead>\r\n<tr><th>机台</th><th>数量</th></tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>塑胶射出成型机</td>\r\n<td>73</td>\r\n</tr>\r\n<tr>\r\n<td>超音波清洗机</td>\r\n<td>5</td>\r\n</tr>\r\n<tr>\r\n<td>点胶机</td>\r\n<td>17</td>\r\n</tr>\r\n<tr>\r\n<td>宁波厂 塑胶射出成型机</td>\r\n<td>21</td>\r\n</tr>\r\n</tbody>\r\n</table>');
/*!40000 ALTER TABLE `tbl_equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_innovation`
--

DROP TABLE IF EXISTS `tbl_innovation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_innovation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `thumbnail` varchar(200) DEFAULT NULL,
  `typeid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `innovationid_idx` (`typeid`),
  CONSTRAINT `innovationid` FOREIGN KEY (`typeid`) REFERENCES `tbl_innovation_type` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_innovation`
--

LOCK TABLES `tbl_innovation` WRITE;
/*!40000 ALTER TABLE `tbl_innovation` DISABLE KEYS */;
INSERT INTO `tbl_innovation` VALUES (1,'Moldflow软件','/upload/images/13867432696897.jpg','没有填写相关信息','/upload/thumbnail/13867432696897.jpg',4),(2,'UG软件','/upload/images/13867433883428.jpg','没有填写相关信息','/upload/thumbnail/13867433883428.jpg',4),(3,'CAD软件','/upload/images/13867434228714.jpg','没有填写相关信息','/upload/thumbnail/13867434228714.jpg',4),(4,'PROE软件','/upload/images/13867434537433.jpg','没有填写相关信息','/upload/thumbnail/13867434537433.jpg',4),(5,'Drawing软件','/upload/images/13867434747176.jpg','没有填写相关信息','/upload/thumbnail/13867434747176.jpg',4),(6,'大型CNC高速机','/upload/images/13854737552350.jpg','没有填写相关信息','/upload/thumbnail/13854737552350.jpg',4),(9,'注塑机','/upload/images/13854742979463.jpg','没有填写相关信息','/upload/thumbnail/13854742979463.jpg',3),(10,'注塑机','/upload/images/13854743173836.jpg','没有填写相关信息','/upload/thumbnail/13854743173836.jpg',3),(11,'清洗线后无尘包装车间','/upload/images/13854743394212.jpg','没有填写相关信息','/upload/thumbnail/13854743394212.jpg',3),(12,'即冷即热成型洁净室','/upload/images/13854743552306.jpg','没有填写相关信息','/upload/thumbnail/13854743552306.jpg',3),(15,'注塑机','/upload/images/13854744867937.jpg','没有填写相关信息','/upload/thumbnail/13854744867937.jpg',3),(16,'注塑机','/upload/images/13854745242930.jpg','没有填写相关信息','/upload/thumbnail/13854745242930.jpg',3),(17,'注塑机','/upload/images/13854745594782.jpg','没有填写相关信息','/upload/thumbnail/13854745594782.jpg',3),(19,'大型放电机','/upload/images/13854748409093.jpg','没有填写相关信息','/upload/thumbnail/13854748409093.jpg',4),(20,'大型线割机','/upload/images/13854748985158.jpg','没有填写相关信息','/upload/thumbnail/13854748985158.jpg',4),(21,'合模机150T','/upload/images/13854749953599.jpg','没有填写相关信息','/upload/thumbnail/13854749953599.jpg',4),(22,'合模机250T','/upload/images/13854750623977.jpg','没有填写相关信息','/upload/thumbnail/13854750623977.jpg',4),(23,'模具三次元量测','/upload/images/13854750901540.jpg','模具三次元量测(大) 1200*1500*1200mm','/upload/thumbnail/13854750901540.jpg',4),(24,'模具三次元量测','/upload/images/13854751118072.jpg','模具三次元量测（小） 500*600*400mm','/upload/thumbnail/13854751118072.jpg',4),(25,'品保二次元量测','/upload/images/13854751334943.jpg','品保二次元量测（大型4台）','/upload/thumbnail/13854751334943.jpg',4),(26,'品保二次元量测','/upload/images/13854751532407.jpg','品保二次元量测（小型2台）','/upload/thumbnail/13854751532407.jpg',4),(27,'钳工现场','/upload/images/13854751877056.jpg','没有填写相关信息','/upload/thumbnail/13854751877056.jpg',4),(28,'小型CNC高速机','/upload/images/13854752308729.jpg','没有填写相关信息','/upload/thumbnail/13854752308729.jpg',4),(29,'小型镜面放电机','/upload/images/13854752564665.jpg','没有填写相关信息','/upload/thumbnail/13854752564665.jpg',4),(30,'小型线割机','/upload/images/13854753015408.jpg','没有填写相关信息','/upload/thumbnail/13854753015408.jpg',4),(33,'中大型CNC高速机','/upload/images/13854755179952.jpg','没有填写相关信息','/upload/thumbnail/13854755179952.jpg',4),(34,'中大型镜面放电机','/upload/images/13854755578624.jpg','没有填写相关信息','/upload/thumbnail/13854755578624.jpg',4),(37,'产品无尘加工线','/upload/images/13855127715787.jpg','没有填写相关信息','/upload/thumbnail/13855127715787.jpg',3);
/*!40000 ALTER TABLE `tbl_innovation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_innovation_type`
--

DROP TABLE IF EXISTS `tbl_innovation_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_innovation_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_innovation_type`
--

LOCK TABLES `tbl_innovation_type` WRITE;
/*!40000 ALTER TABLE `tbl_innovation_type` DISABLE KEYS */;
INSERT INTO `tbl_innovation_type` VALUES (3,'塑胶厂'),(4,'模具厂');
/*!40000 ALTER TABLE `tbl_innovation_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_leave`
--

DROP TABLE IF EXISTS `tbl_leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `validate` int(11) DEFAULT '0',
  `comment` text,
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_leave`
--

LOCK TABLES `tbl_leave` WRITE;
/*!40000 ALTER TABLE `tbl_leave` DISABLE KEYS */;
INSERT INTO `tbl_leave` VALUES (44,'wang','<script>alert(\'测试\');</script>','13145676654','123123@qq.com',1,'fwfwefwefwef','2013-11-21 21:02:05'),(46,'aa','这是一个很好的cms系统\r\n\r\n谢谢，我们会更加努力的！\r\n\r\n管理员','a','cc@qq.com',1,'kkk','2013-11-25 16:34:23'),(47,'511494679@ qq.com ','看上去不错~  蛮顺眼的！','','511494679@qq.com',1,'谢谢了','2013-11-25 17:12:58'),(48,'12346','看看这条可以提交不','123','12@12.com',1,'在手机上答复你\r\n','2013-11-25 17:13:45'),(64,'fym','我是公司的一員！期待試試！','57451658','fym@ksjiateng.com',1,'知道你是谁','2013-11-27 15:01:46');
/*!40000 ALTER TABLE `tbl_leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_links`
--

DROP TABLE IF EXISTS `tbl_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_links`
--

LOCK TABLES `tbl_links` WRITE;
/*!40000 ALTER TABLE `tbl_links` DISABLE KEYS */;
INSERT INTO `tbl_links` VALUES (3,'erge','http://www.ergererg.com');
/*!40000 ALTER TABLE `tbl_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_menu`
--

DROP TABLE IF EXISTS `tbl_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_menu`
--

LOCK TABLES `tbl_menu` WRITE;
/*!40000 ALTER TABLE `tbl_menu` DISABLE KEYS */;
INSERT INTO `tbl_menu` VALUES (1,'wef','<p>wfwef<img src=\"http://218.4.205.131/leyecms/upload/attachment/13843991202217.jpg\" alt=\"\" width=\"201\" height=\"150\" /></p>'),(2,'wefwe','fwefwef'),(3,'wefwef','wefwefwef'),(4,'wefwef','wefwefwef');
/*!40000 ALTER TABLE `tbl_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_news`
--

LOCK TABLES `tbl_news` WRITE;
/*!40000 ALTER TABLE `tbl_news` DISABLE KEYS */;
INSERT INTO `tbl_news` VALUES (1,'tret','<p>ertertretretrer&nbsp; ret&nbsp; ert&nbsp; e&nbsp; eee<img src=\"http://img2.bdstatic.com/img/image/17358ee3d6d55fbb2fb59db77054d4a20a44623dc30.jpg\" alt=\"\" width=\"271\" height=\"271\" /><img src=\"http://218.4.205.131/leyecms/upload/attachment/13843985628975.jpg%20\" alt=\"\" width=\"631\" height=\"882\" /></p>');
/*!40000 ALTER TABLE `tbl_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `thumbnail` varchar(200) DEFAULT NULL,
  `typeid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `productid_idx` (`typeid`),
  CONSTRAINT `productid` FOREIGN KEY (`typeid`) REFERENCES `tbl_product_type` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (117,'HP印表机','/upload/images/13856087099579.jpg','没有填写相关信息','/upload/thumbnail/13856087099579.jpg',5),(118,'TV后盖','/upload/images/13856087263977.jpg','没有填写相关信息','/upload/thumbnail/13856087263977.jpg',5),(119,'TV后盖','/upload/images/13856087513569.jpg','没有填写相关信息','/upload/thumbnail/13856087513569.jpg',5),(120,'TV前框','/upload/images/13856087722786.jpg','没有填写相关信息','/upload/thumbnail/13856087722786.jpg',5),(121,'TV前框','/upload/images/13856087854480.jpg','没有填写相关信息','/upload/thumbnail/13856087854480.jpg',5),(122,'TV前框','/upload/images/13856088072276.jpg','没有填写相关信息','/upload/thumbnail/13856088072276.jpg',5),(124,'TV前框','/upload/images/13856088398036.jpg','没有填写相关信息','/upload/thumbnail/13856088398036.jpg',5),(125,'模仁','/upload/images/13856088638083.jpg','没有填写相关信息','/upload/thumbnail/13856088638083.jpg',5),(126,'汽车保险杆','/upload/images/13856088924002.jpg','没有填写相关信息','/upload/thumbnail/13856088924002.jpg',5),(127,'事物机','/upload/images/13856089092828.jpg','没有填写相关信息','/upload/thumbnail/13856089092828.jpg',5),(129,'事物机','/upload/images/13856089322105.jpg','没有填写相关信息','/upload/thumbnail/13856089322105.jpg',5),(130,'刷卡机','/upload/images/13856089515499.jpg','没有填写相关信息','/upload/thumbnail/13856089515499.jpg',5),(156,'胶框','/upload/images/13856102046862.jpg','没有填写相关信息','/upload/thumbnail/13856102046862.jpg',4),(157,'胶框','/upload/images/13856102163367.jpg','没有填写相关信息','/upload/thumbnail/13856102163367.jpg',4),(158,'胶框','/upload/images/13856102478766.jpg','没有填写相关信息','/upload/thumbnail/13856102478766.jpg',4),(159,'胶框','/upload/images/13856102577612.jpg','没有填写相关信息','/upload/thumbnail/13856102577612.jpg',4),(160,' 胶框','/upload/images/13856102675955.jpg','没有填写相关信息','/upload/thumbnail/13856102675955.jpg',4),(162,'胶框','/upload/images/13856103019784.jpg','没有填写相关信息','/upload/thumbnail/13856103019784.jpg',4),(163,'胶框','/upload/images/13856103136683.jpg','没有填写相关信息','/upload/thumbnail/13856103136683.jpg',4),(164,'胶框','/upload/images/13856103276578.jpg','没有填写相关信息','/upload/thumbnail/13856103276578.jpg',4),(167,'胶框','/upload/images/13856103613558.jpg','没有填写相关信息','/upload/thumbnail/13856103613558.jpg',4),(174,'投影机','/upload/images/13856524316796.jpg','没有填写相关信息 ','/upload/thumbnail/13856524316796.jpg',5),(175,'投影机','/upload/images/13856524561475.jpg','没有填写相关信息 ','/upload/thumbnail/13856524561475.jpg',5),(213,'刷卡机','/upload/images/13868252512891.jpg','没有填写相关信息','/upload/thumbnail/13868252512891.jpg',6),(214,'刷卡机','/upload/images/13868252925540.jpg','没有填写相关信息','/upload/thumbnail/13868252925540.jpg',6),(215,'PC主机面板','/upload/images/13868253475934.jpg','没有填写相关信息','/upload/thumbnail/13868253475934.jpg',6),(216,'PC主机面板','/upload/images/13868253936376.jpg','没有填写相关信息','/upload/thumbnail/13868253936376.jpg',6),(217,'PC主机面板','/upload/images/13868254081897.jpg','没有填写相关信息','/upload/thumbnail/13868254081897.jpg',6),(218,'PC主机面板','/upload/images/13868254332328.jpg','没有填写相关信息','/upload/thumbnail/13868254332328.jpg',6),(219,'PC主机面板','/upload/images/13868254513060.jpg','没有填写相关信息','/upload/thumbnail/13868254513060.jpg',6),(220,'DVD机壳','/upload/images/13868254803723.jpg','没有填写相关信息','/upload/thumbnail/13868254803723.jpg',6),(221,'投影机','/upload/images/13868255668326.jpg','没有填写相关信息','/upload/thumbnail/13868255668326.jpg',6),(222,'投影机','/upload/images/13868255922210.jpg','没有填写相关信息','/upload/thumbnail/13868255922210.jpg',6),(223,'投影机','/upload/images/13868256266840.jpg','没有填写相关信息','/upload/thumbnail/13868256266840.jpg',6),(224,'按键','/upload/images/13868256561237.jpg','没有填写相关信息','/upload/thumbnail/13868256561237.jpg',6),(225,'按键','/upload/images/13868256876999.jpg','没有填写相关信息','/upload/thumbnail/13868256876999.jpg',6),(226,'按键','/upload/images/13868257123795.jpg','没有填写相关信息','/upload/thumbnail/13868257123795.jpg',6),(227,'数码相机','/upload/images/13868257684813.jpg','没有填写相关信息','/upload/thumbnail/13868257684813.jpg',6),(228,'数码相机','/upload/images/13868257892891.jpg','没有填写相关信息','/upload/thumbnail/13868257892891.jpg',6),(229,'数码相机','/upload/images/13868258104735.jpg','没有填写相关信息','/upload/thumbnail/13868258104735.jpg',6),(230,'手机','/upload/images/13868258369491.jpg','没有填写相关信息','/upload/thumbnail/13868258369491.jpg',6),(231,'手机','/upload/images/13868258526985.jpg','没有填写相关信息','/upload/thumbnail/13868258526985.jpg',6),(232,'手机','/upload/images/13868258853108.jpg','没有填写相关信息','/upload/thumbnail/13868258853108.jpg',6),(233,'HP打印机','/upload/images/13868259605241.jpg','没有填写相关信息','/upload/thumbnail/13868259605241.jpg',6),(234,'HP打印机','/upload/images/13868259775575.jpg','没有填写相关信息','/upload/thumbnail/13868259775575.jpg',6),(235,'打印机部件','/upload/images/13868260095946.jpg','没有填写相关信息','/upload/thumbnail/13868260095946.jpg',6),(236,'打印机部件','/upload/images/13868260351240.jpg','没有填写相关信息','/upload/thumbnail/13868260351240.jpg',6),(237,'扫描仪','/upload/images/13868260633843.jpg','没有填写相关信息','/upload/thumbnail/13868260633843.jpg',6),(238,'扫描仪','/upload/images/13868260847737.jpg','没有填写相关信息','/upload/thumbnail/13868260847737.jpg',6),(239,'扫描仪','/upload/images/13868261087272.jpg','没有填写相关信息','/upload/thumbnail/13868261087272.jpg',6),(240,'扫描仪','/upload/images/13868261374456.jpg','没有填写相关信息','/upload/thumbnail/13868261374456.jpg',6),(241,'扫描仪','/upload/images/13868261591178.jpg','没有填写相关信息','/upload/thumbnail/13868261591178.jpg',6),(242,'扫描仪','/upload/images/13868261883652.jpg','没有填写相关信息','/upload/thumbnail/13868261883652.jpg',6),(243,'扫描仪','/upload/images/13868262103377.jpg','没有填写相关信息','/upload/thumbnail/13868262103377.jpg',6),(244,'扫描仪','/upload/images/13868262603902.jpg','没有填写相关信息','/upload/thumbnail/13868262603902.jpg',6),(245,'扫描仪','/upload/images/13868262873912.jpg','没有填写相关信息','/upload/thumbnail/13868262873912.jpg',6),(246,'转换器','/upload/images/13868263125771.jpg','没有填写相关信息','/upload/thumbnail/13868263125771.jpg',6),(247,'转换器','/upload/images/13868263322133.jpg','没有填写相关信息','/upload/thumbnail/13868263322133.jpg',6),(248,'支架','/upload/images/13868263581639.jpg','没有填写相关信息','/upload/thumbnail/13868263581639.jpg',6),(249,'支架','/upload/images/13868263849580.jpg','没有填写相关信息','/upload/thumbnail/13868263849580.jpg',6),(250,'支架','/upload/images/13868264023766.jpg','没有填写相关信息','/upload/thumbnail/13868264023766.jpg',6),(251,'充电底座','/upload/images/13868264291941.jpg','没有填写相关信息','/upload/thumbnail/13868264291941.jpg',6),(252,'NB背盖','/upload/images/13868264962883.jpg','没有填写相关信息','/upload/thumbnail/13868264962883.jpg',6),(253,'NB背盖','/upload/images/13868265241738.jpg','没有填写相关信息','/upload/thumbnail/13868265241738.jpg',6),(254,'NB面框','/upload/images/13868265552554.jpg','没有填写相关信息','/upload/thumbnail/13868265552554.jpg',6),(255,'NB面框','/upload/images/13868265764218.jpg','没有填写相关信息','/upload/thumbnail/13868265764218.jpg',6),(256,'NB上盖','/upload/images/13868266145670.jpg','没有填写相关信息','/upload/thumbnail/13868266145670.jpg',6),(257,'NB上盖','/upload/images/13868266411308.jpg','没有填写相关信息','/upload/thumbnail/13868266411308.jpg',6),(258,'NB下盖','/upload/images/13868267345812.jpg','没有填写相关信息','/upload/thumbnail/13868267345812.jpg',6),(259,'NB下盖','/upload/images/13868267585263.jpg','没有填写相关信息','/upload/thumbnail/13868267585263.jpg',6),(260,'40寸TV','/upload/images/13868268346123.jpg','没有填写相关信息','/upload/thumbnail/13868268346123.jpg',6),(261,'TV','/upload/images/13868268515897.jpg','没有填写相关信息','/upload/thumbnail/13868268515897.jpg',6),(262,'TV前框＋后盖','/upload/images/13868268833359.jpg','没有填写相关信息','/upload/thumbnail/13868268833359.jpg',6),(263,'TV前框','/upload/images/13868269255794.jpg','没有填写相关信息','/upload/thumbnail/13868269255794.jpg',6),(264,'TV前框','/upload/images/13868269516947.jpg','没有填写相关信息','/upload/thumbnail/13868269516947.jpg',6),(265,'42寸面框','/upload/images/13868269751709.jpg','没有填写相关信息','/upload/thumbnail/13868269751709.jpg',6),(266,'TV后盖','/upload/images/13868270012094.jpg','没有填写相关信息','/upload/thumbnail/13868270012094.jpg',6),(267,'65寸背投底座','/upload/images/13868270298258.jpg','没有填写相关信息','/upload/thumbnail/13868270298258.jpg',6),(268,'TV底座','/upload/images/13868270672600.jpg','没有填写相关信息','/upload/thumbnail/13868270672600.jpg',6),(269,'汽车部件','/upload/images/13868271219797.jpg','没有填写相关信息','/upload/thumbnail/13868271219797.jpg',6),(270,'汽车部件','/upload/images/13868271378999.jpg','没有填写相关信息','/upload/thumbnail/13868271378999.jpg',6),(271,'汽车部件','/upload/images/13868271979522.jpg','没有填写相关信息','/upload/thumbnail/13868271979522.jpg',6),(272,'汽车部件','/upload/images/13868272179194.jpg','没有填写相关信息','/upload/thumbnail/13868272179194.jpg',6),(273,'汽车部件','/upload/images/13868272434089.jpg','没有填写相关信息','/upload/thumbnail/13868272434089.jpg',6),(274,'汽车部件','/upload/images/13868272587547.jpg','没有填写相关信息','/upload/thumbnail/13868272587547.jpg',6),(275,'汽车部件','/upload/images/13868272772697.jpg','没有填写相关信息','/upload/thumbnail/13868272772697.jpg',6),(276,'汽车部件','/upload/images/13868272971671.jpg','没有填写相关信息','/upload/thumbnail/13868272971671.jpg',6),(277,'汽车部件','/upload/images/13868273167356.jpg','没有填写相关信息','/upload/thumbnail/13868273167356.jpg',6),(278,'汽车部件','/upload/images/13868273355191.jpg','没有填写相关信息','/upload/thumbnail/13868273355191.jpg',6),(279,'汽车部件','/upload/images/13868273563060.jpg','没有填写相关信息','/upload/thumbnail/13868273563060.jpg',6),(280,'TV产品','/upload/images/13868274572119.JPG','没有填写相关信息','/upload/thumbnail/13868274572119.JPG',6),(281,'胶框','/upload/images/13868277692690.JPG','没有填写相关信息','/upload/thumbnail/13868277692690.JPG',4),(282,'模具','/upload/images/13868278015516.JPG','没有填写相关信息','/upload/thumbnail/13868278015516.JPG',5),(283,'模具','/upload/images/13868278217577.JPG','没有填写相关信息','/upload/thumbnail/13868278217577.JPG',5);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product_type`
--

DROP TABLE IF EXISTS `tbl_product_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product_type`
--

LOCK TABLES `tbl_product_type` WRITE;
/*!40000 ALTER TABLE `tbl_product_type` DISABLE KEYS */;
INSERT INTO `tbl_product_type` VALUES (4,'胶框类'),(5,'模具类'),(6,'成品类');
/*!40000 ALTER TABLE `tbl_product_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_site_info`
--

DROP TABLE IF EXISTS `tbl_site_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_site_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `adminemail` varchar(100) DEFAULT NULL,
  `websiterecords` varchar(100) DEFAULT NULL,
  `Copyright` varchar(255) DEFAULT NULL,
  `Keyword` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `programversion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_site_info`
--

LOCK TABLES `tbl_site_info` WRITE;
/*!40000 ALTER TABLE `tbl_site_info` DISABLE KEYS */;
INSERT INTO `tbl_site_info` VALUES (1,'佳腾专门从事塑胶模具设计，模具制造及注塑成型加工的专业厂家。主要生产PC电子类、汽车类、NB类、OA办公用品类、数位类、TV类等产品。','www.leyecms.com','303650172@qq.com','苏ICP备09018209号','版权所有:昆山佳腾光电塑胶有限公司 设计:佳腾资讯部 苏ICP备09018209号','昆山佳腾光电塑胶有限公司,昆山佳腾,佳腾,专业模具,塑胶模具,胶框,OA模具,3C模具,TV模具,高镜面模具,精密模具,Plastic mould,high gloss mould,frame','一个小型cms','88888888888','88888888','0.1');
/*!40000 ALTER TABLE `tbl_site_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'admin','25d55ad283aa400af464c76d713c07ad','303650172@qq.com');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-12 23:20:53
