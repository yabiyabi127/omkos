/*
SQLyog Ultimate v13.1.1 (32 bit)
MySQL - 10.1.38-MariaDB : Database - omkost_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`omkost_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `omkost_db`;

/*Table structure for table `tb_fasilitas_kamar` */

DROP TABLE IF EXISTS `tb_fasilitas_kamar`;

CREATE TABLE `tb_fasilitas_kamar` (
  `id_fasilitas_kamar` int(20) NOT NULL AUTO_INCREMENT,
  `luas_kamar` char(30) DEFAULT NULL,
  `bed` char(6) DEFAULT 'tidak',
  `meja_belajar` char(6) DEFAULT 'tidak',
  `tv` char(6) DEFAULT 'tidak',
  `ac` char(6) DEFAULT 'tidak',
  `wifi` char(6) DEFAULT 'tidak',
  `pasutri` char(6) DEFAULT 'tidak',
  `almari` char(6) DEFAULT 'tidak',
  `id_kost` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_fasilitas_kamar`),
  KEY `id_kost` (`id_kost`),
  CONSTRAINT `tb_fasilitas_kamar_ibfk_1` FOREIGN KEY (`id_kost`) REFERENCES `tb_kost` (`id_kost`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `tb_fasilitas_kamar` */

insert  into `tb_fasilitas_kamar`(`id_fasilitas_kamar`,`luas_kamar`,`bed`,`meja_belajar`,`tv`,`ac`,`wifi`,`pasutri`,`almari`,`id_kost`) values 
(29,' Meter X  Meter','ya','ya','ya','ya','ya','ya','ya',16);

/*Table structure for table `tb_fasilitas_umum` */

DROP TABLE IF EXISTS `tb_fasilitas_umum`;

CREATE TABLE `tb_fasilitas_umum` (
  `id_fasilitas_umum` int(20) NOT NULL AUTO_INCREMENT,
  `ruang_makan` char(6) DEFAULT 'tidak',
  `ruang_tamu` char(6) DEFAULT 'tidak',
  `ruang_jemuran` char(6) DEFAULT 'tidak',
  `taman` char(6) DEFAULT 'tidak',
  `mushola` char(6) DEFAULT 'tidak',
  `dapur` char(6) DEFAULT 'tidak',
  `bawa_hewan` char(6) DEFAULT 'tidak',
  `akses_kunci_gerbang` char(6) DEFAULT 'tidak',
  `cctv` char(6) DEFAULT 'tidak',
  `fasilitas_lain` char(60) DEFAULT NULL,
  `id_kost` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_fasilitas_umum`),
  KEY `id_kost` (`id_kost`),
  CONSTRAINT `tb_fasilitas_umum_ibfk_1` FOREIGN KEY (`id_kost`) REFERENCES `tb_kost` (`id_kost`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tb_fasilitas_umum` */

/*Table structure for table `tb_gambar_detail` */

DROP TABLE IF EXISTS `tb_gambar_detail`;

CREATE TABLE `tb_gambar_detail` (
  `id_gambar_detail` int(20) NOT NULL AUTO_INCREMENT,
  `gambar_1` char(200) DEFAULT NULL,
  `gambar_2` char(200) DEFAULT NULL,
  `gambar_3` char(200) DEFAULT NULL,
  `gambar_4` char(200) DEFAULT NULL,
  `id_kost` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_gambar_detail`),
  KEY `id_kost` (`id_kost`),
  CONSTRAINT `tb_gambar_detail_ibfk_1` FOREIGN KEY (`id_kost`) REFERENCES `tb_kost` (`id_kost`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `tb_gambar_detail` */

insert  into `tb_gambar_detail`(`id_gambar_detail`,`gambar_1`,`gambar_2`,`gambar_3`,`gambar_4`,`id_kost`) values 
(45,'302464.jpg','3024711.jpg','302464.jpg','302473.jpg',16),
(46,'3024711.jpg','3024711.jpg','3024711.jpg','3024711.jpg',17),
(50,'302472.jpg','3024641.jpg','combo.PNG','snip.PNG',NULL),
(51,'combo1.PNG','combo1.PNG','combo1.PNG','combo1.PNG',18);

/*Table structure for table `tb_kamar_mandi` */

DROP TABLE IF EXISTS `tb_kamar_mandi`;

CREATE TABLE `tb_kamar_mandi` (
  `id_kamar_mandi` int(20) NOT NULL AUTO_INCREMENT,
  `kamar_mandi_dalam` char(6) DEFAULT 'tidak',
  `shower` char(6) DEFAULT 'tidak',
  `kloset_duduk` char(6) DEFAULT 'tidak',
  `ember_mandi` char(6) DEFAULT 'tidak',
  `air_panas` char(6) DEFAULT 'tidak',
  `id_kost` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_kamar_mandi`),
  KEY `id_kost` (`id_kost`),
  CONSTRAINT `tb_kamar_mandi_ibfk_1` FOREIGN KEY (`id_kost`) REFERENCES `tb_kost` (`id_kost`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kamar_mandi` */

insert  into `tb_kamar_mandi`(`id_kamar_mandi`,`kamar_mandi_dalam`,`shower`,`kloset_duduk`,`ember_mandi`,`air_panas`,`id_kost`) values 
(9,'tidak','ya','ya','ya','ya',17),
(11,'tidak','ya','ya','ya','tidak',18);

/*Table structure for table `tb_kost` */

DROP TABLE IF EXISTS `tb_kost`;

CREATE TABLE `tb_kost` (
  `id_kost` int(20) NOT NULL AUTO_INCREMENT,
  `nama_kost` char(25) DEFAULT NULL,
  `alamat_kost` char(40) DEFAULT NULL,
  `harga_kost` char(8) DEFAULT NULL,
  `jenis_kost` char(6) DEFAULT NULL,
  `jumlah_kamar` char(3) DEFAULT NULL,
  `kamar_tersedia` char(3) DEFAULT NULL,
  `penghuni_kost` char(6) DEFAULT NULL,
  `id_pemilik` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_kost`),
  KEY `id_pemilik` (`id_pemilik`),
  CONSTRAINT `tb_kost_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `tb_pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kost` */

insert  into `tb_kost`(`id_kost`,`nama_kost`,`alamat_kost`,`harga_kost`,`jenis_kost`,`jumlah_kamar`,`kamar_tersedia`,`penghuni_kost`,`id_pemilik`) values 
(16,'KOST 1','Jl. Satu','1000.000','bulan','5','3','PUTRI',1),
(17,'KOST 2','Jl. Dua','750000','bulan','7','4','CAMPUR',1),
(18,'KOST 3','Jl. Tiga','900000','bulan','12','9','CAMPUR',1);

/*Table structure for table `tb_parkir` */

DROP TABLE IF EXISTS `tb_parkir`;

CREATE TABLE `tb_parkir` (
  `id_parkir` int(20) NOT NULL AUTO_INCREMENT,
  `mobil` char(6) DEFAULT 'tidak',
  `motor` char(6) DEFAULT 'tidak',
  `sepeda` char(6) DEFAULT 'tidak',
  `id_kost` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_parkir`),
  KEY `id_kost` (`id_kost`),
  CONSTRAINT `tb_parkir_ibfk_1` FOREIGN KEY (`id_kost`) REFERENCES `tb_kost` (`id_kost`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tb_parkir` */

insert  into `tb_parkir`(`id_parkir`,`mobil`,`motor`,`sepeda`,`id_kost`) values 
(10,'ya','ya','ya',18),
(11,'ya','tidak','ya',16);

/*Table structure for table `tb_pemilik` */

DROP TABLE IF EXISTS `tb_pemilik`;

CREATE TABLE `tb_pemilik` (
  `id_pemilik` int(20) NOT NULL AUTO_INCREMENT,
  `nama_pemilik` char(30) DEFAULT NULL,
  `kontak_pemilik` char(15) DEFAULT NULL,
  `email` char(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pemilik`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pemilik` */

insert  into `tb_pemilik`(`id_pemilik`,`nama_pemilik`,`kontak_pemilik`,`email`,`password`) values 
(1,'Hari','089630035749','hari@hari.com','21232f297a57a5a743894a0e4a801fc3'),
(11,'Hari kurniawan','082118301993','yabiyabi12@gmail.com','d84f8fcb02903f2f7909d3296fc751bb'),
(12,'','','','d41d8cd98f00b204e9800998ecf8427e'),
(13,'wqeqwe','765','asu@asu.asu','9cdfb439c7876e703e307864c9167a15'),
(14,'43242','4','4@4.4','310dcbbf4cce62f762a2aaa148d556bd');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
