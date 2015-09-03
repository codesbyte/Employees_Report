/*
SQLyog Community Edition- MySQL GUI v8.04 
MySQL - 5.5.32 : Database - employees_report
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`employees_report` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `employees_report`;

/*Table structure for table `tblbasicinformation` */

DROP TABLE IF EXISTS `tblbasicinformation`;

CREATE TABLE `tblbasicinformation` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `FatherName` varchar(80) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Education` text,
  `Designation` varchar(200) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblbasicinformation` */

insert  into `tblbasicinformation`(`UserID`,`FirstName`,`LastName`,`FatherName`,`DOB`,`Education`,`Designation`,`CreateDate`,`UpdateDate`) values (1,'developer one','developer lastU','developer_fatherU','2015-09-02','dssd','PHP developer ',NULL,'2015-09-02 16:31:32'),(2,'developer_two',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'developer_three',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'developer_fourth',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'developer_five',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'developer_six',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'admin','root','','1970-01-01','','admin',NULL,'2015-09-02 16:28:03');

/*Table structure for table `tblcitymaster` */

DROP TABLE IF EXISTS `tblcitymaster`;

CREATE TABLE `tblcitymaster` (
  `CityID` int(11) NOT NULL AUTO_INCREMENT,
  `CityName` varchar(100) NOT NULL,
  `StateID` int(11) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  PRIMARY KEY (`CityID`)
) ENGINE=MyISAM AUTO_INCREMENT=542 DEFAULT CHARSET=latin1;

/*Data for the table `tblcitymaster` */

insert  into `tblcitymaster`(`CityID`,`CityName`,`StateID`,`CountryID`,`createdate`,`updatedate`) values (1,'Bhopal',1,1,NULL,NULL),(4,'Indore',1,1,NULL,NULL),(5,'Jabalpur',1,1,NULL,NULL),(6,'Gwalior',1,1,NULL,NULL),(7,'Kanpur',2,1,NULL,NULL),(8,'Jhansi',2,1,NULL,NULL),(9,'Lakhnow',2,1,NULL,NULL),(10,'Noida',2,1,NULL,NULL),(11,'Gaunda',2,1,NULL,NULL),(12,'Jaipur',3,1,NULL,NULL),(13,'Ajmer',3,1,NULL,NULL),(14,'Alwar',3,1,NULL,NULL),(15,'Kota',3,1,NULL,NULL),(16,'Jodhpur',3,1,NULL,NULL),(17,'Dholpur',3,1,NULL,NULL),(18,'Ahmedabad',4,1,NULL,NULL),(19,'Surat',4,1,NULL,NULL),(20,'Vadodara',4,1,NULL,NULL),(21,'Rajkot',4,1,NULL,NULL),(22,'Gandhinagar',4,1,NULL,NULL),(23,'Delhi',5,1,NULL,NULL),(24,'Los Angeles',6,2,NULL,NULL),(25,'Sun Francisco',6,2,NULL,NULL),(26,'Sun Diego',6,2,NULL,NULL),(27,'Oakland',6,2,NULL,NULL),(28,'Fresno',6,2,NULL,NULL),(29,'Bakersfield',6,2,NULL,NULL),(30,'Monterey',6,2,NULL,NULL),(31,'Chicago',7,2,NULL,NULL),(32,'Chicago Heights',7,2,NULL,NULL),(33,'Benton',7,2,NULL,NULL),(34,'Bridgeport',7,2,NULL,NULL),(35,'Bushnell',7,2,NULL,NULL),(36,'Arcola',7,2,NULL,NULL),(37,'Aledo',7,2,NULL,NULL),(38,'New York',8,2,NULL,NULL),(39,'Buffalo',8,2,NULL,NULL),(40,'Rochester',8,2,NULL,NULL),(41,'Yonkers',8,2,NULL,NULL),(42,'Syracuse',8,2,NULL,NULL),(43,'Columbus ',9,2,NULL,NULL),(44,'Cleveland ',9,2,NULL,NULL),(45,'Cincinnati ',9,2,NULL,NULL),(46,'Toledo',9,2,NULL,NULL),(47,'Dayton ',9,2,NULL,NULL),(48,'Birmingham',11,3,NULL,NULL),(49,'Bradford',12,3,NULL,NULL),(50,'Chester',13,3,NULL,NULL),(51,'Durham',15,3,NULL,NULL),(52,'Hereford',16,3,NULL,NULL),(53,'Bath',17,3,NULL,NULL),(54,'Bristol',18,3,NULL,NULL),(55,'Cambridge',19,3,NULL,NULL),(56,' Calgary',20,4,NULL,NULL),(57,'Red Deer',20,4,NULL,NULL),(58,'Sherwood Park',20,4,NULL,NULL),(59,'Airdrie',20,4,NULL,NULL),(60,'Camrose',20,4,NULL,NULL),(61,'Leduc',20,4,NULL,NULL),(62,'Vancouver',21,4,NULL,NULL),(63,'Surrey',21,4,NULL,NULL),(64,'Burnaby',21,4,NULL,NULL),(65,'Abbotsford',21,4,NULL,NULL),(66,'Langley',21,4,NULL,NULL),(67,'Coquitlam',21,4,NULL,NULL),(68,'Delta',21,4,NULL,NULL),(69,'Brandon',22,4,NULL,NULL),(70,'Steinbach',22,4,NULL,NULL),(71,'Thompson',22,4,NULL,NULL),(72,'Winkler',22,4,NULL,NULL),(73,'Winnipeg',22,4,NULL,NULL),(74,'Dieppe',23,4,NULL,NULL),(75,'Edmundston',23,4,NULL,NULL),(76,'Fredericton',23,4,NULL,NULL),(77,'Moncton',23,4,NULL,NULL),(78,'Rothesay',23,4,NULL,NULL),(79,'Toronto',24,4,NULL,NULL),(80,'Ottawa',24,4,NULL,NULL),(81,'Clarington',24,4,NULL,NULL),(82,'Quetta',25,5,NULL,NULL),(83,'Khuzdar',25,5,NULL,NULL),(84,'Turbat',25,5,NULL,NULL),(85,'Chaman',25,5,NULL,NULL),(86,'Gwadar',25,5,NULL,NULL),(87,'Kalat',25,5,NULL,NULL),(88,'Nushki',25,5,NULL,NULL),(89,'Abbottabad',26,5,NULL,NULL),(90,'Mingora',26,5,NULL,NULL),(91,'Daggar',26,5,NULL,NULL),(92,'Bannu',26,5,NULL,NULL),(93,'Drosh',26,5,NULL,NULL),(94,'Haripur',26,5,NULL,NULL),(95,'Karak',26,5,NULL,NULL),(96,'Lahore',27,5,NULL,NULL),(97,'Faisalabad',27,5,NULL,NULL),(98,'Rawalpindi',27,5,NULL,NULL),(99,'Multan',27,5,NULL,NULL),(100,'Muzaffargarh',27,5,NULL,NULL),(101,'Sialkot',27,5,NULL,NULL),(102,'Gujrat',27,5,NULL,NULL),(103,'Jhelum',27,5,NULL,NULL),(104,'Karachi',28,5,NULL,NULL),(105,'Kashmore',28,5,NULL,NULL),(106,'Hyderabad',28,5,NULL,NULL),(107,'Islamkot',28,5,NULL,NULL),(108,'Jacobabad',28,5,NULL,NULL),(109,'Mehar',28,5,NULL,NULL),(110,'Shahdadkot',28,5,NULL,NULL),(111,'Panaji',30,1,NULL,NULL),(112,'Calangute',30,1,NULL,NULL),(113,'Vasco da Gama',30,1,NULL,NULL),(114,'Margao',30,1,NULL,NULL),(115,'Mapusa',30,1,NULL,NULL),(116,'Ludhiana',31,1,NULL,NULL),(117,'Amritsar',31,1,NULL,NULL),(118,'Jalandhar',31,1,NULL,NULL),(119,'Patiala',31,1,NULL,NULL),(120,'Chandigarh',31,1,NULL,NULL),(121,'Pathankot',31,1,NULL,NULL),(122,'Phagwara',31,1,NULL,NULL),(123,'Rajpura',31,1,NULL,NULL),(124,'Faridabad',32,1,NULL,NULL),(125,'Gurgaon',32,1,NULL,NULL),(126,'Panipat',32,1,NULL,NULL),(127,'Ambala',32,1,NULL,NULL),(128,'Yamunanagar',32,1,NULL,NULL),(129,'Rohtak',32,1,NULL,NULL),(130,'Hisar',32,1,NULL,NULL),(131,'Karnal',32,1,NULL,NULL),(132,'Sonipat',32,1,NULL,NULL),(133,'Panchkula',32,1,NULL,NULL),(134,'Bhiwani',32,1,NULL,NULL),(135,'Sirsa',32,1,NULL,NULL),(136,'Bahadurgarh',32,1,NULL,NULL),(137,'Palwal',32,1,NULL,NULL),(138,'Kaithal',32,1,NULL,NULL),(139,'Rewari',32,1,NULL,NULL),(140,'Srinagar',33,1,NULL,NULL),(141,'Jammu',33,1,NULL,NULL),(142,'Anantnag',32,1,NULL,NULL),(143,'Anjaw',34,1,NULL,NULL),(144,'Changlang',34,1,NULL,NULL),(145,'East Kameng',34,1,NULL,NULL),(146,'East Siang',34,1,NULL,NULL),(147,'Papum Pare',34,1,NULL,NULL),(148,'Bilaspur',35,1,NULL,NULL),(149,'Chamba',35,1,NULL,NULL),(150,'Hamirpur',35,1,NULL,NULL),(151,'Kangra',35,1,NULL,NULL),(152,'Kinnaur',35,1,NULL,NULL),(153,'Kullu',35,1,NULL,NULL),(154,'Lahaul and Spiti',35,1,NULL,NULL),(155,'Mandi',35,1,NULL,NULL),(156,'Shimla',35,1,NULL,NULL),(157,'Sirmaur',35,1,NULL,NULL),(158,'Solan',35,1,NULL,NULL),(159,'Una',35,1,NULL,NULL),(160,'Nagaon',36,1,NULL,NULL),(161,'Guwahati ',36,1,NULL,NULL),(162,'Sivasagar',36,1,NULL,NULL),(163,'Golaghat',36,1,NULL,NULL),(164,'Goalpara',36,1,NULL,NULL),(165,'Tinsukia',36,1,NULL,NULL),(166,'Darrang',36,1,NULL,NULL),(167,'Patna',37,1,NULL,NULL),(168,'Gaya',37,1,NULL,NULL),(169,'Bhagalpur',37,1,NULL,NULL),(170,'Muzaffarpur',37,1,NULL,NULL),(171,'Purnia',37,1,NULL,NULL),(172,'Darbhanga',37,1,NULL,NULL),(173,'Arrah',37,1,NULL,NULL),(174,'Begusarai',37,1,NULL,NULL),(175,'Katihar',37,1,NULL,NULL),(176,'Munger',37,1,NULL,NULL),(177,'Chhapra',37,1,NULL,NULL),(178,'Saharsa',37,1,NULL,NULL),(179,'Sasaram',37,1,NULL,NULL),(180,'Hajipur',37,1,NULL,NULL),(181,'Dehri',37,1,NULL,NULL),(182,'Bagaha',37,1,NULL,NULL),(183,'Jamalpur',37,1,NULL,NULL),(184,'Jehanabad',37,1,NULL,NULL),(185,'Aurangabad',37,1,NULL,NULL),(186,'Kolkata',38,1,NULL,NULL),(187,'Asansol',38,1,NULL,NULL),(188,'Siliguri',38,1,NULL,NULL),(189,'Durgapur',38,1,NULL,NULL),(190,'Bardhaman',38,1,NULL,NULL),(191,'Baharampur',38,1,NULL,NULL),(192,'Habra',38,1,NULL,NULL),(193,'Jalpaiguri',38,1,NULL,NULL),(194,'Kharagpur',38,1,NULL,NULL),(195,'Shantipur',38,1,NULL,NULL),(196,'Ranaghat',38,1,NULL,NULL),(197,'Haldia',38,1,NULL,NULL),(198,'Raiganj',38,1,NULL,NULL),(199,'Bangaon',38,1,NULL,NULL),(200,'Bankura',38,1,NULL,NULL),(201,'Jamshedpur',39,1,NULL,NULL),(202,'Dhanbad',39,1,NULL,NULL),(203,'Ranchi',39,1,NULL,NULL),(204,'Bokaro Steel City',39,1,NULL,NULL),(205,'Deoghar',39,1,NULL,NULL),(206,'Phusro',39,1,NULL,NULL),(207,'Hazaribagh',39,1,NULL,NULL),(208,'Giridih',39,1,NULL,NULL),(209,'Ramgarh',39,1,NULL,NULL),(210,'Medininagar',39,1,NULL,NULL),(211,'Chirkunda',39,1,NULL,NULL),(212,'Raipur',40,1,NULL,NULL),(213,'Bilaspur',40,1,NULL,NULL),(214,'Korba',40,1,NULL,NULL),(215,'Rajnandgaon',40,1,NULL,NULL),(216,'Raigarh',40,1,NULL,NULL),(217,'Jagdalpur',40,1,NULL,NULL),(218,'Ambikapur',40,1,NULL,NULL),(219,'Dhamtari',40,1,NULL,NULL),(220,'Mahasamund',40,1,NULL,NULL),(221,'Durg-Bhilainagar',40,1,NULL,NULL),(222,'Bhubaneswar',41,1,NULL,NULL),(223,'Cuttack',41,1,NULL,NULL),(224,'Rourkela',41,1,NULL,NULL),(225,'Brahmapur',41,1,NULL,NULL),(226,'Sambalpur',41,1,NULL,NULL),(227,'Puri',41,1,NULL,NULL),(228,'Balasore',41,1,NULL,NULL),(229,'Bhadrak',41,1,NULL,NULL),(230,'Baripada',41,1,NULL,NULL),(231,'Mumbai',42,1,NULL,NULL),(232,'Pune',42,1,NULL,NULL),(233,'Nagpur',42,1,NULL,NULL),(234,'Thane',42,1,NULL,NULL),(235,'Pimpri-Chinchwad',42,1,NULL,NULL),(236,'Nashik',42,1,NULL,NULL),(237,'Kalyan-Dombivali',42,1,NULL,NULL),(238,'Vasai-Virar',42,1,NULL,NULL),(239,'Aurangabad',42,1,NULL,NULL),(240,'Solapur',42,1,NULL,NULL),(241,'Bhiwandi',42,1,NULL,NULL),(242,'Amravati	',42,1,NULL,NULL),(243,'Nanded',42,1,NULL,NULL),(244,'Sangli',42,1,NULL,NULL),(245,'Jalgaon',42,1,NULL,NULL),(246,'Ratnagiri',42,1,NULL,NULL),(248,'Adoni',43,1,NULL,NULL),(249,'Visakhapatnam',43,1,NULL,NULL),(250,'Vijayawada',43,1,NULL,NULL),(251,'Guntur',43,1,NULL,NULL),(252,'Nellore',43,1,NULL,NULL),(253,'Rajahmundry',43,1,NULL,NULL),(254,'Kurnool',43,1,NULL,NULL),(255,'Tirupati',43,1,NULL,NULL),(256,'Kakinada',43,1,NULL,NULL),(257,'Kadapa',43,1,NULL,NULL),(258,'Anantapur',43,1,NULL,NULL),(259,'Chittoor',43,1,NULL,NULL),(260,'Vizianagaram',43,1,NULL,NULL),(261,'Proddatur',43,1,NULL,NULL),(262,'Nandyal',43,1,NULL,NULL),(263,'Chilakaluripet',43,1,NULL,NULL),(264,'Tadpatri',43,1,NULL,NULL),(265,'Kavali',43,1,NULL,NULL),(266,'Narasaraopet',43,1,NULL,NULL),(267,'Gudivada',43,1,NULL,NULL),(268,'Dharmavaram',43,1,NULL,NULL),(269,'Guntakal',43,1,NULL,NULL),(270,'Srikakulam',43,1,NULL,NULL),(271,'Bhimavaram',43,1,NULL,NULL),(272,'Shimoga',44,1,NULL,NULL),(273,'Tumakuru',44,1,NULL,NULL),(274,'Ramanagara',44,1,NULL,NULL),(275,'Kolar',44,1,NULL,NULL),(276,'Bangalore Urban',44,1,NULL,NULL),(277,'Bangalore Rural',44,1,NULL,NULL),(278,'Chikkaballapur',44,1,NULL,NULL),(279,'Chitradurga',44,1,NULL,NULL),(280,'Davanagere',44,1,NULL,NULL),(281,'Haveri',44,1,NULL,NULL),(282,'Mysore',44,1,NULL,NULL),(283,'Koppal',44,1,NULL,NULL),(284,'Dharwad',44,1,NULL,NULL),(285,'Gadag',44,1,NULL,NULL),(286,'Raichur',44,1,NULL,NULL),(287,'Uttara Kannada',44,1,NULL,NULL),(288,'Alappuzha',45,1,NULL,NULL),(289,'Ernakulam',45,1,NULL,NULL),(290,'Idukki',45,1,NULL,NULL),(291,'Kannur',45,1,NULL,NULL),(292,'Kasaragod',45,1,NULL,NULL),(293,'Kollam',45,1,NULL,NULL),(294,'Kollam',45,1,NULL,NULL),(295,'Kozhikode',45,1,NULL,NULL),(296,'Malappuram',45,1,NULL,NULL),(297,'Palakkad',45,1,NULL,NULL),(298,'Pathanamthitta',45,1,NULL,NULL),(299,'Thiruvananthapuram',45,1,NULL,NULL),(300,'Thrissur',45,1,NULL,NULL),(301,'Wayanad',45,1,NULL,NULL),(302,'Darasuram',46,1,NULL,NULL),(303,'Madras',46,1,NULL,NULL),(304,'Mahabalipuram',46,1,NULL,NULL),(305,'Tiruttani',46,1,NULL,NULL),(306,'Tirukkalikundram',46,1,NULL,NULL),(307,'Kanchipuram',46,1,NULL,NULL),(308,'Vellore',46,1,NULL,NULL),(309,'Tiruvannamalai',46,1,NULL,NULL),(310,'Gingee',46,1,NULL,NULL),(311,'Panamalai',46,1,NULL,NULL),(312,'Chidambaram',46,1,NULL,NULL),(314,'Pondicherry',46,1,NULL,NULL),(315,'Auroville',46,1,NULL,NULL),(316,'Gangaikondacholapuram',46,1,NULL,NULL),(317,'Kumbakonam',46,1,NULL,NULL),(318,'Tribuvanam',46,1,NULL,NULL),(319,'Darasuram',46,1,NULL,NULL),(320,'Tiruvarur',46,1,NULL,NULL),(321,'Srirangam',46,1,NULL,NULL),(322,'Srinivasanallur',46,1,NULL,NULL),(323,'Kodumbalur',46,1,NULL,NULL),(324,'Thanjavur',46,1,NULL,NULL),(325,'Narttamalai',46,1,NULL,NULL),(326,'Rameshwaram',46,1,NULL,NULL),(327,'Madurai',46,1,NULL,NULL),(328,'Kalugumalai',46,1,NULL,NULL),(329,'Padmanabhapuram',46,1,NULL,NULL),(330,'Almora',47,1,NULL,NULL),(331,'Bageshwar',47,1,NULL,NULL),(332,'Chamoli',47,1,NULL,NULL),(333,'Champawat',47,1,NULL,NULL),(334,'Dehradun',47,1,NULL,NULL),(335,'Haridwar',47,1,NULL,NULL),(336,'Nainital',47,1,NULL,NULL),(337,'Pauri Garhwal',47,1,NULL,NULL),(338,'Pithoragarh',47,1,NULL,NULL),(339,'Rudraprayag',47,1,NULL,NULL),(340,'Tehri Garhwal',47,1,NULL,NULL),(341,'Udham Singh Nagar',47,1,NULL,NULL),(342,'Uttarkashi',47,1,NULL,NULL),(343,'Hyderabad',48,1,NULL,NULL),(344,'Warangal',48,1,NULL,NULL),(345,'Nizamabad',48,1,NULL,NULL),(346,'Karimnagar',48,1,NULL,NULL),(347,'Ramagundam',48,1,NULL,NULL),(348,'Khammam',48,1,NULL,NULL),(349,'Mahbubnagar',48,1,NULL,NULL),(350,'Nalgonda',48,1,NULL,NULL),(351,'Adilabad',48,1,NULL,NULL),(352,'Suryapet',48,1,NULL,NULL),(353,'Miryalaguda',48,1,NULL,NULL),(354,'Agartala',49,1,NULL,NULL),(355,'Amarpur',49,1,NULL,NULL),(356,'Belonia',49,1,NULL,NULL),(357,'Dharmanagar',49,1,NULL,NULL),(358,'Kailasahar',49,1,NULL,NULL),(359,'Kamalpur',49,1,NULL,NULL),(360,'Khowai',49,1,NULL,NULL),(361,'Kumarghat',49,1,NULL,NULL),(362,'Ranirbazar',49,1,NULL,NULL),(363,'Sabroom',49,1,NULL,NULL),(364,'Sonamura',49,1,NULL,NULL),(365,'Teliamura',49,1,NULL,NULL),(366,'Udaipur',49,1,NULL,NULL),(367,'Bishalgarh',49,1,NULL,NULL),(368,'Santirbazar',49,1,NULL,NULL),(369,'Ambassa',49,1,NULL,NULL),(370,'Jirania',49,1,NULL,NULL),(371,'Mohanpur',49,1,NULL,NULL),(372,'Melagarh',49,1,NULL,NULL),(373,'Gangtok',50,1,NULL,NULL),(374,'Mangan',50,1,NULL,NULL),(375,'Namchi',50,1,NULL,NULL),(376,'Geyzing',50,1,NULL,NULL),(377,'Bishnupur',51,1,NULL,NULL),(378,'Churachandpur',51,1,NULL,NULL),(379,'Chandel',51,1,NULL,NULL),(380,'Imphal East',51,1,NULL,NULL),(381,'Senapati',51,1,NULL,NULL),(382,'Tamenglong',51,1,NULL,NULL),(383,'Tamenglong',51,1,NULL,NULL),(384,'Ukhrul',51,1,NULL,NULL),(385,'Imphal West',51,1,NULL,NULL),(386,'Chatong',51,1,NULL,NULL),(387,'Aijal',52,1,NULL,NULL),(388,'Champhai',52,1,NULL,NULL),(389,'Kolasib',52,1,NULL,NULL),(390,'Lawngtlai',52,1,NULL,NULL),(391,'Lunglei',52,1,NULL,NULL),(392,'Mamit',52,1,NULL,NULL),(393,'Saiha',52,1,NULL,NULL),(394,'Serchhip',52,1,NULL,NULL),(395,'Dimapur',53,1,NULL,NULL),(396,'Kiphire',53,1,NULL,NULL),(397,'Kohima',53,1,NULL,NULL),(398,'Longleng',53,1,NULL,NULL),(399,'Mokokchung',53,1,NULL,NULL),(400,'Mon',53,1,NULL,NULL),(401,'Peren',53,1,NULL,NULL),(402,'Phek',53,1,NULL,NULL),(403,'Tuensang',53,1,NULL,NULL),(404,'Wokha',53,1,NULL,NULL),(405,'Zunheboto',53,1,NULL,NULL),(406,'Amini',54,1,NULL,NULL),(407,'Andrott',54,1,NULL,NULL),(408,'Kavaratti',54,1,NULL,NULL),(409,'Minicoy',54,1,NULL,NULL),(410,'Karaikal',55,1,NULL,NULL),(411,'Mahe',55,1,NULL,NULL),(412,'Pondicherry',55,1,NULL,NULL),(413,'Yanam',55,1,NULL,NULL),(414,'Port Blair',56,1,NULL,NULL),(415,'Daman ',57,1,NULL,NULL),(416,'Diu',57,1,NULL,NULL),(417,'Silvassa',58,1,NULL,NULL),(418,'Ujjain',1,1,NULL,NULL),(419,'Sagar',1,1,NULL,NULL),(420,'Dewas',1,1,NULL,NULL),(421,'Satna',1,1,NULL,NULL),(422,'Ratlam',1,1,NULL,NULL),(423,'Rewa',1,1,NULL,NULL),(424,'Murwara (Katni)',1,1,NULL,NULL),(425,'Singrauli',1,1,NULL,NULL),(426,'Burhanpur',1,1,NULL,NULL),(427,'Khandwa',1,1,NULL,NULL),(428,'Morena',1,1,NULL,NULL),(429,'Bhind',1,1,NULL,NULL),(430,'Chhindwara',1,1,NULL,NULL),(431,'Guna',1,1,NULL,NULL),(432,'Shivpuri',1,1,NULL,NULL),(433,'Vidisha',1,1,NULL,NULL),(434,'Chhatarpur',1,1,NULL,NULL),(435,'Damoh',1,1,NULL,NULL),(436,'Mandsaur',1,1,NULL,NULL),(437,'Khargone',1,1,NULL,NULL),(438,'Neemuch',1,1,NULL,NULL),(439,'Hoshangabad',1,1,NULL,NULL),(440,'Itarsi',1,1,NULL,NULL),(441,'Sehore',1,1,NULL,NULL),(442,'Betul',1,1,NULL,NULL),(443,'Seoni',1,1,NULL,NULL),(444,'Ghaziabad',2,1,NULL,NULL),(445,'Agra',2,1,NULL,NULL),(446,'Varanasi',2,1,NULL,NULL),(447,'Meerut',2,1,NULL,NULL),(448,'Allahabad',2,1,NULL,NULL),(449,'Bareilly',2,1,NULL,NULL),(450,'Aligarh',2,1,NULL,NULL),(451,'Moradabad',2,1,NULL,NULL),(452,'Saharanpur',2,1,NULL,NULL),(453,'Gorakhpur',2,1,NULL,NULL),(454,'Firozabad',2,1,NULL,NULL),(455,'Muzaffarnagar',2,1,NULL,NULL),(456,'Mathura',2,1,NULL,NULL),(457,'Rampur',2,1,NULL,NULL),(458,'Shahjahanpur',2,1,NULL,NULL),(459,'Faizabad',2,1,NULL,NULL),(460,'Bulandshahr',2,1,NULL,NULL),(461,'Sambhal',2,1,NULL,NULL),(462,'Amroha',2,1,NULL,NULL),(463,'Hardoi',2,1,NULL,NULL),(464,'Fatehpur',2,1,NULL,NULL),(465,'Raebareli',2,1,NULL,NULL),(466,'Ujhani',2,1,NULL,NULL),(467,'Orai',2,1,NULL,NULL),(468,'Sitapur',2,1,NULL,NULL),(469,'Bahraich',2,1,NULL,NULL),(470,'Sahaswan',2,1,NULL,NULL),(471,'Unnao',2,1,NULL,NULL),(472,'Jaunpur',2,1,NULL,NULL),(473,'Lakhimpur',2,1,NULL,NULL),(474,'Hathras',2,1,NULL,NULL),(475,'Banda',2,1,NULL,NULL),(476,'Pilibhit',2,1,NULL,NULL),(477,'Mughalsarai',2,1,NULL,NULL),(478,'Barabanki',2,1,NULL,NULL),(479,'Budaun',2,1,NULL,NULL),(480,'Khurja',2,1,NULL,NULL),(481,'Mainpuri',2,1,NULL,NULL),(482,'Lalitpur',2,1,NULL,NULL),(483,'Etah',2,1,NULL,NULL),(484,'Deoria',2,1,NULL,NULL),(485,'Ghazipur',2,1,NULL,NULL),(486,'Sultanpur',2,1,NULL,NULL),(487,'Azamgarh',2,1,NULL,NULL),(488,'Bijnor',2,1,NULL,NULL),(489,'Basti',2,1,NULL,NULL),(490,'Chandausi',2,1,NULL,NULL),(491,'Akbarpur',2,1,NULL,NULL),(492,'Ballia',2,1,NULL,NULL),(493,'Mubarakpur',2,1,NULL,NULL),(494,'Shikohabad',2,1,NULL,NULL),(495,'Shamli',2,1,NULL,NULL),(496,'Baraut',2,1,NULL,NULL),(497,'Kasganj',2,1,NULL,NULL),(498,'Ahmedabad',4,1,NULL,NULL),(499,'Jamnagar',4,1,NULL,NULL),(500,'Bhavnagar',4,1,NULL,NULL),(501,'Junagadh',4,1,NULL,NULL),(502,'Nadiad',4,1,NULL,NULL),(503,'Morbi',4,1,NULL,NULL),(504,'Surendranagar',4,1,NULL,NULL),(505,'Gandhidham',4,1,NULL,NULL),(506,'Veraval',4,1,NULL,NULL),(507,'Navsari',4,1,NULL,NULL),(508,'Bharuch',4,1,NULL,NULL),(509,'Anand',4,1,NULL,NULL),(510,'Porbandar',4,1,NULL,NULL),(511,'Godhra',4,1,NULL,NULL),(512,'Botad',4,1,NULL,NULL),(513,'Sidhpur',4,1,NULL,NULL),(514,'Banswara',3,1,NULL,NULL),(515,'Baran',3,1,NULL,NULL),(516,'Barmer',3,1,NULL,NULL),(517,'Bharatpur',3,1,NULL,NULL),(518,'Bhilwara',3,1,NULL,NULL),(519,'Bikaner',3,1,NULL,NULL),(520,'Bundi',3,1,NULL,NULL),(521,'Chittorgarh',3,1,NULL,NULL),(522,'Churu',3,1,NULL,NULL),(523,'Dausa',3,1,NULL,NULL),(524,'Dholpur',3,1,NULL,NULL),(525,'Dungarpur',3,1,NULL,NULL),(526,'Hanumangarh',3,1,NULL,NULL),(527,'Jaisalmer',3,1,NULL,NULL),(528,'Jalor',3,1,NULL,NULL),(529,'Jhalawar',3,1,NULL,NULL),(530,'Jhunjhunu',3,1,NULL,NULL),(531,'Jodhpur',3,1,NULL,NULL),(532,'Karauli',3,1,NULL,NULL),(533,'Nagaur',3,1,NULL,NULL),(534,'Pali',3,1,NULL,NULL),(535,'Pratapgarh',3,1,NULL,NULL),(536,'Rajsamand',3,1,NULL,NULL),(537,'Sikar',3,1,NULL,NULL),(538,'Sirohi',3,1,NULL,NULL),(539,'Sri Ganganagar',3,1,NULL,NULL),(540,'Tonk',3,1,NULL,NULL),(541,'Udaipur',3,1,NULL,NULL);

/*Table structure for table `tblcontactdetails` */

DROP TABLE IF EXISTS `tblcontactdetails`;

CREATE TABLE `tblcontactdetails` (
  `UserID` int(11) NOT NULL,
  `CountryID` int(11) DEFAULT NULL,
  `StateID` int(11) DEFAULT NULL,
  `CityID` int(11) DEFAULT NULL,
  `PermanentAddress` text,
  `temporaryAddress` text,
  `ContactNo` int(10) NOT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblcontactdetails` */

insert  into `tblcontactdetails`(`UserID`,`CountryID`,`StateID`,`CityID`,`PermanentAddress`,`temporaryAddress`,`ContactNo`,`CreateDate`,`UpdateDate`) values (1,1,1,4,'xcsxcsx','xcxc',1111111111,NULL,'2015-09-02 16:31:32'),(2,NULL,NULL,NULL,NULL,'palasia',2147483647,NULL,NULL),(3,NULL,NULL,NULL,NULL,NULL,2147483647,NULL,NULL),(4,NULL,NULL,NULL,NULL,NULL,2147483647,NULL,NULL),(5,NULL,NULL,NULL,NULL,NULL,2147483647,NULL,NULL),(6,NULL,NULL,NULL,NULL,NULL,2147483647,NULL,NULL),(7,0,0,0,'','',2147483647,NULL,'2015-09-02 16:28:03');

/*Table structure for table `tblcountrymaster` */

DROP TABLE IF EXISTS `tblcountrymaster`;

CREATE TABLE `tblcountrymaster` (
  `CountryID` int(11) NOT NULL AUTO_INCREMENT,
  `CountryName` varchar(100) NOT NULL,
  `CountryCode` varchar(11) NOT NULL,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  PRIMARY KEY (`CountryID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tblcountrymaster` */

insert  into `tblcountrymaster`(`CountryID`,`CountryName`,`CountryCode`,`createdate`,`updatedate`) values (1,'India','+91',NULL,NULL),(2,'USA','+1',NULL,NULL),(3,'UK','+44',NULL,NULL),(4,'Canada','+1',NULL,NULL),(5,'Pakistan','+92',NULL,NULL);

/*Table structure for table `tbllogininformation` */

DROP TABLE IF EXISTS `tbllogininformation`;

CREATE TABLE `tbllogininformation` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(80) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `VrfCode` varchar(20) DEFAULT NULL,
  `IsActive` int(2) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbllogininformation` */

insert  into `tbllogininformation`(`UserID`,`Email`,`Password`,`MemberID`,`VrfCode`,`IsActive`,`CreateDate`,`UpdateDate`) values (1,'akash.pareta@codesbyte.com','developer_1',4,NULL,1,NULL,'2015-09-02 16:31:32'),(2,'developer_2@gmail.com','developer_2',4,NULL,1,NULL,NULL),(3,'developer_3@gmail.com','developer_3',4,NULL,1,NULL,NULL),(4,'developer_4@gmail.com','developer_4',4,NULL,1,NULL,NULL),(5,'developer_5@gmail.com','developer_5',5,NULL,1,NULL,NULL),(6,'developer_6@gmail.com','developer_6',5,NULL,1,NULL,NULL),(7,'admin@gmail.com','admin',1,NULL,1,NULL,'2015-09-02 16:28:03');

/*Table structure for table `tblmembermaster` */

DROP TABLE IF EXISTS `tblmembermaster`;

CREATE TABLE `tblmembermaster` (
  `MemberID` int(11) NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(50) NOT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tblmembermaster` */

insert  into `tblmembermaster`(`MemberID`,`MemberName`,`CreateDate`,`UpdateDate`) values (1,'Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Subadmin','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Manager','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Developer','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Designer','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'Tester','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'BD','0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'Client','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `tblmembertask` */

DROP TABLE IF EXISTS `tblmembertask`;

CREATE TABLE `tblmembertask` (
  `TaskID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `TaskDate` date NOT NULL,
  `Intime` time DEFAULT NULL,
  `Outtime` time DEFAULT NULL,
  `TaskDescription` text NOT NULL,
  `IsActive` int(2) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  PRIMARY KEY (`TaskID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tblmembertask` */

insert  into `tblmembertask`(`TaskID`,`UserID`,`TaskDate`,`Intime`,`Outtime`,`TaskDescription`,`IsActive`,`CreateDate`,`UpdateDate`) values (1,1,'0000-00-00','10:00:00','07:30:00','Employee report working period sadsadsd dtedtfr rtr trtr tr tr tr t rt r tr t rt r t rt r t rt f gfg f gf g f gf gfgf g f gf g f gf g f gf gertgreg rg re t retrhg yhtr  gre tg retgre t re tre t re tre t reh f b dfg dfrgf bgdf gdf  gdf gf cvgdfgdg df g d gdf gre t',1,'2015-08-31 00:00:00','0000-00-00 00:00:00'),(2,1,'2015-09-02','11:55:00','02:10:00','sadsadsd dtedtfr rtr trtr tr tr tr t rt r tr t rt r t rt r t rt f gfg f gf g f gf gfgf g f gf g f gf g f gf gertgreg rg re t retrhg yhtr  gre tg retgre t re tre t re tre t reh f b dfg dfrgf bgdf gdf  gdf gf cvgdfgdg df g d gdf gre t',1,'2015-09-02 07:11:17','0000-00-00 00:00:00'),(3,1,'2015-09-02','10:00:00','07:40:00','sds sd sdsd sd sd s d sd',1,'2015-09-01 11:11:17','2015-09-02 11:11:17');

/*Table structure for table `tblmembertaskreply` */

DROP TABLE IF EXISTS `tblmembertaskreply`;

CREATE TABLE `tblmembertaskreply` (
  `TaskReplyID` int(11) NOT NULL AUTO_INCREMENT,
  `TaskID` int(11) DEFAULT NULL,
  `MemberID` int(11) DEFAULT NULL,
  `TaskReplyDescription` text NOT NULL,
  `ReplyNo` text,
  `CreateDate` datetime NOT NULL,
  PRIMARY KEY (`TaskReplyID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblmembertaskreply` */

/*Table structure for table `tblstatemaster` */

DROP TABLE IF EXISTS `tblstatemaster`;

CREATE TABLE `tblstatemaster` (
  `StateID` int(11) NOT NULL AUTO_INCREMENT,
  `StateName` varchar(100) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  PRIMARY KEY (`StateID`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

/*Data for the table `tblstatemaster` */

insert  into `tblstatemaster`(`StateID`,`StateName`,`CountryID`,`createdate`,`updatedate`) values (1,'Madhya Pradesh',1,NULL,NULL),(2,'Uttar Pradesh',1,NULL,NULL),(3,'Rajasthan',1,NULL,NULL),(4,'Gujrat',1,NULL,NULL),(5,'Delhi',1,NULL,NULL),(6,'California',2,NULL,NULL),(7,'Illinois',2,NULL,NULL),(8,'New York',2,NULL,NULL),(9,'Ohio',2,NULL,NULL),(11,'Birmingham',3,NULL,NULL),(12,'Bradford',3,NULL,NULL),(13,'Chester',3,NULL,NULL),(15,'Durham',3,NULL,NULL),(16,'Hereford',3,NULL,NULL),(17,'Bath',3,NULL,NULL),(18,'Bristol',3,NULL,NULL),(19,'Cambridge',3,NULL,NULL),(20,'Alberta',4,NULL,NULL),(21,'British Columbia',4,NULL,NULL),(22,'Manitoba',4,NULL,NULL),(23,'New Brunswick',4,NULL,NULL),(24,'Ontario',4,NULL,NULL),(25,'Balochistan',5,NULL,NULL),(26,'Khyber Pakhtunkhwa',5,NULL,NULL),(27,'Punjab',5,NULL,NULL),(28,'Sindh',5,NULL,NULL),(30,'Goa',1,NULL,NULL),(31,'Punjab',1,NULL,NULL),(32,'Haryana',1,NULL,NULL),(33,'Jammu & Kashmir',1,NULL,NULL),(34,'Arunachal Pradesh',1,NULL,NULL),(35,'Himachal Pradesh',1,NULL,NULL),(36,'Assam',1,NULL,NULL),(37,'Bihar',1,NULL,NULL),(38,'West Bengal',1,NULL,NULL),(39,'Jharkhand',1,NULL,NULL),(40,'Chhattisgarh',1,NULL,NULL),(41,'Odisha',1,NULL,NULL),(42,'Maharashtra',1,NULL,NULL),(43,'Andhra Pradesh',1,NULL,NULL),(44,'Karnataka',1,NULL,NULL),(45,'Kerala',1,NULL,NULL),(46,'Tamil Nadu',1,NULL,NULL),(47,'Uttarakhand',1,NULL,NULL),(48,'Telangana',1,NULL,NULL),(49,'Tripura',1,NULL,NULL),(50,'Sikkim',1,NULL,NULL),(51,'Manipur',1,NULL,NULL),(52,'Mizoram',1,NULL,NULL),(53,'Nagaland',1,NULL,NULL),(54,'Lakshadweep ',1,NULL,NULL),(55,'Pondicherry',1,NULL,NULL),(56,'Andaman and Nicobar ',1,NULL,NULL),(57,'Daman and Diu',1,NULL,NULL),(58,'Dadar and Nagar Haveli ',1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
