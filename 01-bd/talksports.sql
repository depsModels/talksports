CREATE DATABASE  IF NOT EXISTS `talksports`;
USE `talksports`;

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `nickname` varchar(45) NOT NULL,
                         `email` varchar(45) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                         `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;