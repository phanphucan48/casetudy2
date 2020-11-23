-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: cuahangdienthoai
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `oder`
--

DROP TABLE IF EXISTS `oder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oder` (
  `id` int NOT NULL AUTO_INCREMENT,
  `OderDate` date DEFAULT NULL,
  `IDuser` int DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `diachi` varchar(200) DEFAULT NULL,
  `quantity` varchar(200) DEFAULT NULL,
  `ngaygiao` varchar(200) DEFAULT NULL,
  `idproduct` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oder`
--

LOCK TABLES `oder` WRITE;
/*!40000 ALTER TABLE `oder` DISABLE KEYS */;
INSERT INTO `oder` VALUES (22,'2020-11-20',1,'12345677','sádsadsadasd','2','2020-11-28','13'),(24,'2020-11-20',1,'12345677','huế','2','2020-11-20','10'),(25,'2020-11-20',1,'12345677','huế','2','2020-11-20','15'),(26,'2020-11-20',1,'12345677','123213432415sdsfdsfdaadf','2','2020-11-22','13'),(27,'2020-11-20',1,'12345677','123213432415sdsfdsfdaadf','2','2020-11-22','7'),(28,'2020-11-20',1,'12345677','123sdasdasdasasdsad','2','2020-11-20','5'),(29,'2020-11-20',1,'12345677','sadsadasdsad','2','2020-11-04','5'),(30,'2020-11-20',1,'12345677','sadsadasdsad','2','2020-11-20','5'),(31,'2020-11-20',1,'12345677','sádsadsadasd','2','2020-11-19','5'),(32,'2020-11-20',1,'12345677','123sdasdasdasasdsad','2','2020-11-19','11'),(33,'2020-11-20',1,'12345677','sadsadasdsad','2','2020-11-19','7'),(34,'2020-11-20',1,'12345677','huế','2','2020-11-21','5'),(35,'2020-11-20',1,'12345677','huế','2','2020-11-22','7'),(36,'2020-11-20',1,'12345677','huế','2','2020-11-21','7'),(37,'2020-11-20',1,'12345677','huế','2','2020-11-21','13'),(38,'2020-11-20',72,'0982724856','42 nguyễn trãi','3','2020-11-21','13');
/*!40000 ALTER TABLE `oder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `idProduct` int NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(150) DEFAULT NULL,
  `ImgProduct` varchar(200) DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `SPKM` tinyint NOT NULL,
  `price` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `brank` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `idbrank` int NOT NULL,
  PRIMARY KEY (`idProduct`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (5,'iPhone 11 64GB','https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-red-fix-200x200.jpg',2,1,'29000000','2020-11-13','IPhone',NULL,1),(7,'SS Galaxy Z Flip','https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-den-600x600-400x400.jpg',1,1,'36000000','2020-11-13','SamSung',NULL,2),(9,'Iphone11','https://cdn.tgdd.vn/Products/Images/42/213033/iphone-12-pro-max-195420-015420-400x400.jpg',0,1,'18000000','2020-11-13','Iphone',NULL,1),(10,'Iphone12','https://cdn.tgdd.vn/Products/Images/42/228736/iphone-12-128gb-195820-105824-400x400.jpg',1,1,'26000000','2020-11-13','Iphone',NULL,1),(11,'OPPO A93','https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-230520-060532-200x200.jpg',1,1,'7490000','2020-11-13','OPPO',NULL,3),(12,'OPPO Find X2','https://cdn.tgdd.vn/Products/Images/42/198150/oppo-find-x2-blue-600x600-600x600.jpg',1,1,'19000000','2020-11-13','OPPO',NULL,3),(13,'OPPO A52','https://cdn.tgdd.vn/Products/Images/42/220649/oppo-a52-black-600x600-600x600.jpg',0,0,'6000000','2020-11-13','OPPO',NULL,3),(14,'SS Galaxy M51','https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-white-400x400-400x400.png',1,1,'10000000','2020-11-13','SamSung',NULL,2),(15,'SS Galaxy A70','https://cdn.tgdd.vn/Products/Images/42/195012/samsung-galaxy-a70-053720-073758-600x600.jpg',1,0,'9000000','2020-11-13','SamSung',NULL,2),(17,'iPhone Xr 64GB','https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-400x400.jpg',1,1,'30000000','2020-11-13','Iphone',NULL,1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_has_oder`
--

DROP TABLE IF EXISTS `product_has_oder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_has_oder` (
  `Product_idProduct` int NOT NULL,
  `Oder_idProduct` int NOT NULL,
  PRIMARY KEY (`Product_idProduct`,`Oder_idProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_has_oder`
--

LOCK TABLES `product_has_oder` WRITE;
/*!40000 ALTER TABLE `product_has_oder` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_has_oder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `role` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'phanphucan','1234567','12345677',1),(2,'admin','5678910','12345667',2),(3,'quochuy','1234567','1234567',1),(69,'phanphucan123','1234567','0787778949',1),(70,'phanphucan1234','1234567','0787778949',1),(71,'anphanasdasd','1234567','0787778949',1),(72,'zinzou12345','1234567','0982724856',1),(73,'quocdung','12345678','0787778949',NULL),(74,'kimanh','12345678','0787778949',2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_has_oder`
--

DROP TABLE IF EXISTS `user_has_oder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_has_oder` (
  `user_id` int NOT NULL,
  `Oder_idProduct` int NOT NULL,
  PRIMARY KEY (`user_id`,`Oder_idProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_has_oder`
--

LOCK TABLES `user_has_oder` WRITE;
/*!40000 ALTER TABLE `user_has_oder` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_has_oder` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-22 22:11:19
