-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 09:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipaymu_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `uuid` varchar(250) NOT NULL,
  `nip` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL DEFAULT '2000-01-01',
  `id_list_pekerjaan` int(4) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`uuid`, `nip`, `nama`, `email`, `tanggal_lahir`, `id_list_pekerjaan`, `no_wa`, `foto`, `created_at`, `updated_at`, `aktif`) VALUES
('15b9d720-ab96-11ec-a8f4-cf7acea232ce', '100051', 'F3JVA1Y4SXGPZB', '100051@yahoo.co.id', '2004-07-15', 10, '628178031569', '', '2022-03-24 17:16:03', '2022-03-24 17:16:03', '1'),
('15baea80-ab96-11ec-8b3b-dd2178f91a53', '100052', 'A12YSML3R4', '100052@yahoo.com', '1982-03-09', 1, '628182539714', '', '2022-03-24 17:16:03', '2022-03-24 17:16:03', '1'),
('15bb5c40-ab96-11ec-8840-21d5790b8eed', '100053', 'I194CQWHFT', '100053@yahoo.com', '1992-12-31', 6, '628191064285', '', '2022-03-24 17:16:03', '2022-03-24 17:16:03', '1'),
('15bc0020-ab96-11ec-9d7d-c34ac20656e0', '100054', 'AD35ZHMF', '100054@gmail.com', '2001-10-16', 16, '628183046721', '', '2022-03-24 17:16:03', '2022-03-24 17:16:03', '1'),
('15bca9e0-ab96-11ec-998b-e9617ac24ebd', '100055', 'NDX4HKIFMUCRW', '100055@yahoo.com', '1991-09-26', 11, '628165193248', '', '2022-03-24 17:16:03', '2022-03-24 17:16:03', '1'),
('15bd4e80-ab96-11ec-b88b-8f427d0382d3', '100056', 'HOJN4FZBER', '100056@gmail.com', '1996-03-22', 15, '628101749823', '', '2022-03-24 17:16:03', '2022-03-24 17:16:03', '1'),
('15be2050-ab96-11ec-a2d5-23b70134f163', '100057', '85VL3RQW', '100057@yahoo.com', '1980-03-23', 15, '628152896017', '', '2022-03-24 17:16:03', '2022-03-24 17:16:03', '1'),
('15c002a0-ab96-11ec-ac84-6d39e5f70b82', '100058', '2TL15MSHOYXU', '100058@yahoo.co.id', '2002-09-10', 7, '628125419083', '', '2022-03-24 17:16:03', '2022-03-24 17:16:03', '1'),
('15c0ac70-ab96-11ec-b5d4-85565b4b5a27', '100059', 'OQK8L2JZYSTAG', '100059@yahoo.com', '1981-12-20', 3, '628135986240', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c11a60-ab96-11ec-b28c-632d02eb582f', '100060', 'IHXDM41QK6V9', '100060@gmail.com', '1991-07-25', 4, '628162473805', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c18470-ab96-11ec-8cf9-8d768e5ef95a', '100061', 'YOV431K2LI69TG', '100061@yahoo.com', '1991-09-07', 18, '628145709182', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c1f740-ab96-11ec-9b42-cf95b1f6f96e', '100062', 'C8RET26SKJUWZA', '100062@yahoo.com', '1987-06-09', 2, '628105423891', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c26270-ab96-11ec-847d-a5e847883eac', '100063', 'XWB6TPJ4Z', '100063@gmail.com', '1992-07-27', 17, '628161472580', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c2fe40-ab96-11ec-9d33-593a60ada62e', '100064', 'OYK7GSTLPB9E06X', '100064@yahoo.com', '1981-04-28', 3, '628185902147', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c36aa0-ab96-11ec-9f70-f95c1a85df43', '100065', '2FW6DYTL8SJPX', '100065@rocketmail.com', '1995-09-10', 4, '628159340168', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c3e0c0-ab96-11ec-a2ab-69660ce21e67', '100066', 'N0YTQGXJ2KLO8', '100066@yahoo.co.id', '1991-11-02', 3, '628167413920', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c45820-ab96-11ec-8987-5b076448eb93', '100067', 'KF57PVOSMGXQ', '100067@yahoo.com', '2000-12-03', 18, '628132018496', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c4fdb0-ab96-11ec-a9ed-9f46a033aeb7', '100068', 'EGFLSJP064VX', '100068@gmail.com', '2000-07-30', 13, '628157248316', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c571a0-ab96-11ec-abc8-c518730290d2', '100069', 'ACKY8WI05VUMGX1', '100069@gmail.com', '1987-01-14', 1, '628104581726', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c5e580-ab96-11ec-8aea-b36e685b1dd0', '100070', '4GIF7P5KW02ON6', '100070@rocketmail.com', '2001-04-30', 6, '628162358491', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c65b40-ab96-11ec-a6f3-818b5ddb6df2', '100071', 'EG1UBLIMJY', '100071@yahoo.co.id', '1989-02-26', 8, '628113627405', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c6cb60-ab96-11ec-8f03-ddef914b4b1e', '100072', '9O827XSNRFAU4ZB', '100072@yahoo.co.id', '1999-05-11', 18, '628137649510', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c73c50-ab96-11ec-afd6-cf6018e8d4bd', '100073', 'YD814QV69K72N0Z', '100073@gmail.com', '1991-03-13', 3, '628179203681', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c7a740-ab96-11ec-85c0-e1a21dae9407', '100074', '0KJEBH1VG63CI2N', '100074@yahoo.com', '1986-10-14', 1, '628112073698', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c81260-ab96-11ec-b256-c5e18ea26408', '100075', 'RPYMN4JDTV', '100075@yahoo.com', '1987-12-31', 6, '628185216097', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c885c0-ab96-11ec-adb8-7dc829456d8d', '100076', 'VRD02AWX', '100076@yahoo.com', '1991-12-22', 3, '628150624317', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c8f020-ab96-11ec-b594-e525138c4267', '100077', 'CWDFER3V4Y8QI2B', '100077@yahoo.co.id', '1983-04-21', 8, '628169054217', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c95fb0-ab96-11ec-abd9-e7063ede6981', '100078', '8E4OFUXVLG0', '100078@rocketmail.com', '2002-06-25', 10, '628145936201', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15c9dbd0-ab96-11ec-ae4e-f3cb54429210', '100079', 'B6ODWQU7ZK4JR', '100079@gmail.com', '2003-09-12', 12, '628148139562', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15ca8350-ab96-11ec-86da-4bf184e5ca35', '100080', 'GIMP6KLNO5WUFX9', '100080@yahoo.com', '1991-06-25', 16, '628157102349', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15cb2fa0-ab96-11ec-baef-7f339b82c78c', '100081', 'GNHOU0V9LYB65A', '100081@yahoo.co.id', '1992-12-05', 7, '628143281659', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15cbdd40-ab96-11ec-98b1-6dfff5fd9ff3', '100082', 'EBX13DCPO', '100082@yahoo.com', '1992-02-01', 18, '628182690471', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15cc5840-ab96-11ec-a8d0-abd9fa9d0f06', '100083', '8FX2O7UD', '100083@rocketmail.com', '2000-01-19', 6, '628163541802', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15ccd270-ab96-11ec-ad4f-f1e4ce7d63c5', '100084', '9HD7W5REKVUG', '100084@gmail.com', '2001-06-22', 11, '628128630179', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15cd4120-ab96-11ec-980a-e9a48952ba7d', '100085', 'D5VXEBZKG', '100085@yahoo.co.id', '1999-09-05', 5, '628112803567', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15cdbab0-ab96-11ec-a16a-692ca9b6fd07', '100086', 'O7JTNK3XFBD', '100086@rocketmail.com', '2005-11-21', 18, '628127140386', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15ce31e0-ab96-11ec-9811-dd4146d2b164', '100087', 'A706VR2UOSHP', '100087@yahoo.com', '1991-01-28', 5, '628184392765', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15cf0130-ab96-11ec-b286-ebf1f4115949', '100088', 'PKUQ847YT3', '100088@rocketmail.com', '2003-12-02', 12, '628163598147', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15cf7dd0-ab96-11ec-8fe1-715a7359705c', '100089', 'DMCP6UQKV', '100089@rocketmail.com', '1991-12-11', 13, '628136215879', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15cfe8b0-ab96-11ec-a0c6-4706a0874a09', '100090', 'OCKQ7UNH4FMS6', '100090@rocketmail.com', '1997-08-27', 1, '628194063821', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d0be50-ab96-11ec-b97a-f1dda3660f29', '100091', 'YN8J9PKVH03LR', '100091@gmail.com', '1981-05-24', 2, '628189463021', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d13a80-ab96-11ec-a952-bf087a4b3c17', '100092', '9W5VOMKAB3G', '100092@gmail.com', '1984-05-28', 7, '628185246071', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d1b6b0-ab96-11ec-92df-012dea268ea5', '100093', 'IUJOYEGNDB3FS5K', '100093@yahoo.co.id', '1996-03-13', 14, '628113865497', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d233c0-ab96-11ec-bdda-e795b2a4a745', '100094', 'HDIYFKMZ6X', '100094@yahoo.co.id', '1999-08-08', 6, '628161978203', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d2b2a0-ab96-11ec-8051-ed4fccd91916', '100095', 'LAP5KYC4E1', '100095@rocketmail.com', '1996-01-18', 4, '628145208731', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d36530-ab96-11ec-a114-0f2569e1409c', '100096', '0WIM4O3B76Z9P', '100096@rocketmail.com', '1982-05-26', 10, '628187295143', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d3e470-ab96-11ec-a421-0d6a64c8275c', '100097', 'T2SEUKGWQNR1', '100097@gmail.com', '1992-09-30', 9, '628175203489', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d49870-ab96-11ec-8af6-87f0a45b1eb1', '100098', '49OGCWSE6LFMP', '100098@yahoo.co.id', '1988-02-26', 14, '628175681204', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d54a20-ab96-11ec-bd89-7dc35f1705d4', '100099', 'ZGLO9E27CJD', '100099@rocketmail.com', '1998-12-26', 5, '628104267398', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('15d62530-ab96-11ec-9355-2d1eb4524952', '100100', '5HOL70A3', '100100@yahoo.co.id', '2002-07-01', 18, '628158094361', '', '2022-03-24 17:16:04', '2022-03-24 17:16:04', '1'),
('37d38380-ab77-11ec-a3fb-89f8951e1a87', '100001', '4J173FSDC0LE2', '100001@yahoo.com', '1989-04-12', 5, '628150287614', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d3da50-ab77-11ec-a4a0-7d3a6c804f06', '100002', 'IAK34HR9DWLJO', '100002@yahoo.com', '2003-04-06', 14, '628190156873', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d42e10-ab77-11ec-a394-a320a1f63625', '100003', 'PDXB4HC2IW50', '100003@gmail.com', '1987-06-29', 13, '628185946012', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d4c2e0-ab77-11ec-808f-65955c37e807', '100005', 'CR657OPT', '100005@yahoo.co.id', '1992-10-29', 3, '628132781409', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d50f30-ab77-11ec-ad4b-c727dbc75041', '100006', '2PLN9EIJ', '100006@yahoo.com', '1983-06-14', 12, '628136241579', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d55f20-ab77-11ec-9346-d5446fd09981', '100007', 'YDASRG5TQ2PXUC', '100007@rocketmail.com', '1995-01-22', 18, '628152843971', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d5b050-ab77-11ec-839c-4366d2d1f71c', '100008', 'ZOBWX6A7FRYU92K', '100008@yahoo.com', '1996-08-19', 11, '628116258047', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d60510-ab77-11ec-8ebc-0d2f01101c7e', '100009', 'CM3Q01ONJ49', '100009@yahoo.co.id', '2001-08-06', 2, '628181376290', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d654f0-ab77-11ec-aa7a-557f2dddb436', '100010', 'F5I6L3PD', '100010@rocketmail.com', '1992-11-23', 8, '628194817506', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d6a400-ab77-11ec-b773-69495e4f5e4a', '100011', 'Y4VGFH3BPUO', '100011@yahoo.co.id', '1999-01-20', 17, '628189325407', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d74a90-ab77-11ec-a88a-3bfb2ba50b0b', '100013', '3G9C5IKPXDREO6', '100013@yahoo.co.id', '2003-11-12', 12, '628146058721', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d79de0-ab77-11ec-ab6f-57fd849de568', '100014', 'MK9CGBDZFJT1SI', '100014@yahoo.co.id', '1991-06-04', 16, '628164528931', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d7ee50-ab77-11ec-8d36-df83df3f59ad', '100015', 'Z46Y1VL89XG3DT', '100015@yahoo.co.id', '1996-06-30', 6, '628195483671', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d84c40-ab77-11ec-b0af-edea8594cd6f', '100016', '6Q8VRC7E3KGP9W', '100016@yahoo.com', '1996-12-18', 5, '628110739482', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d89ed0-ab77-11ec-9cbd-0564462df1cb', '100017', 'AIQON2XWHPSVCGZ', '100017@yahoo.com', '1988-10-09', 13, '628131725409', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d8f260-ab77-11ec-b284-af11e42c53b6', '100018', 'OMWBN05ZC', '100018@yahoo.com', '2005-01-04', 6, '628147835601', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d94640-ab77-11ec-8a38-c9b9f0e4734c', '100019', 'KTX2073OCGZ5', '100019@gmail.com', '1991-05-01', 17, '628140538769', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d98fd0-ab77-11ec-853a-ed7edfa81c54', '100020', '4KP7EBIZ9JVSX2', '100020@yahoo.com', '1992-05-05', 18, '628103541928', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37d9dee0-ab77-11ec-b5c4-6fd7ba532520', '100021', 'RP4J92S1YGXO', '100021@rocketmail.com', '1988-01-26', 14, '628170145239', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37da3050-ab77-11ec-97a0-5b32433031df', '100022', 'C1TV6LES7HMP', '100022@rocketmail.com', '2005-11-19', 12, '628186127530', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37da8640-ab77-11ec-a7b5-474eba157c63', '100023', 'HO9X1M5SC6D3NV', '100023@rocketmail.com', '1980-03-25', 14, '628143609817', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dadac0-ab77-11ec-aa94-6590eccc3b92', '100024', '3SCB289WG', '100024@rocketmail.com', '1997-11-02', 9, '628190364578', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37db2bf0-ab77-11ec-90e7-69fe0075bdf2', '100025', 'E05FB4AJIOUK', '100025@rocketmail.com', '2002-01-06', 16, '628130927481', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37db8280-ab77-11ec-bc48-e7f05df76c84', '100026', 'LSIQ9PUT', '100026@rocketmail.com', '1987-02-15', 10, '628137180425', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dbd530-ab77-11ec-8bf3-87a6571580f2', '100027', 'MY1L2EIW', '100027@yahoo.co.id', '1995-02-26', 8, '628130741862', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dc2b10-ab77-11ec-a209-3778a377cc98', '100028', 'STGZ87NF4HWYVQK', '100028@gmail.com', '1986-12-07', 13, '628101762895', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dc83a0-ab77-11ec-a5bf-ed2f8c4c5425', '100029', 'HFQSYE5R6JPVLU', '100029@rocketmail.com', '1981-08-15', 9, '628141079528', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dcda80-ab77-11ec-a917-578a1304283d', '100030', 'QDZEW9AI642', '100030@rocketmail.com', '1980-07-05', 4, '628173461520', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dd3070-ab77-11ec-a71c-a98880c49604', '100031', 'SL4TWXJMU71K', '100031@gmail.com', '1990-03-27', 13, '628187350692', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dd8710-ab77-11ec-9044-2fab9943d307', '100032', '17K5CY4EMWLBV6D', '100032@gmail.com', '1998-03-21', 2, '628109362184', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dddc40-ab77-11ec-9e3d-239cd72a46dd', '100033', 'IJ106GSF', '100033@rocketmail.com', '1983-01-26', 4, '628153408619', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37de8610-ab77-11ec-855f-771287a9e403', '100034', 'H3FCGP6B', '100034@yahoo.com', '1981-01-26', 13, '628184650129', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dee5a0-ab77-11ec-88ad-a11e41e39578', '100035', 'NMWFTKG0CRZI5JU', '100035@yahoo.co.id', '1999-07-19', 15, '628104591637', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37df43b0-ab77-11ec-93b9-7b6eb6de7481', '100036', 'B1X8UM0OLHDRF', '100036@yahoo.com', '1985-01-15', 3, '628157301264', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37dfa090-ab77-11ec-a5dd-2f4c33498b99', '100037', 'QWV1ZYTMF3', '100037@yahoo.co.id', '1994-03-28', 9, '628140653891', '', '2022-03-24 13:35:06', '2022-03-24 13:44:45', '0'),
('37e03150-ab77-11ec-b967-cf28c0b92b42', '100038', '3JFAZB0EVMPY', '100038@yahoo.co.id', '1981-02-23', 7, '628148732061', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37e09a20-ab77-11ec-ba75-7d684331fd07', '100039', 'MGEFQJ6NKXZR0I9', '100039@yahoo.com', '1997-01-24', 10, '628169807352', '', '2022-03-24 13:35:06', '2022-03-24 13:44:24', '0'),
('37e0fdb0-ab77-11ec-ba47-017a43a9938d', '100040', 'AFZ3D4K1H6', '100040@gmail.com', '1984-09-30', 8, '628120653197', '', '2022-03-24 13:35:06', '2022-03-24 13:43:37', '0'),
('37e162e0-ab77-11ec-842f-510367c6e8dc', '100041', 'WAR1KTC8IF2BMS0', '100041@gmail.com', '1993-10-16', 16, '628192573041', '', '2022-03-24 13:35:06', '2022-03-24 13:42:54', '0'),
('37e1bd70-ab77-11ec-b621-255fbbed15b1', '100042', 'OFE8WY25L9P', '100042@yahoo.co.id', '1994-05-23', 5, '628143628709', '', '2022-03-24 13:35:06', '2022-03-24 13:44:31', '0'),
('37e21ff0-ab77-11ec-83fc-35c63e66f814', '100043', 'EWDX9RL63JBM18', '100043@yahoo.com', '1996-04-12', 13, '628147530628', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37e28050-ab77-11ec-a6b4-d1731f3cb92b', '100044', '5JH107IRP', '100044@rocketmail.com', '1991-09-01', 1, '628128197354', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37e2e410-ab77-11ec-8621-ef1c852bd252', '100045', 'OCBN2MA0PK', '100045@gmail.com', '1982-03-03', 11, '628139452867', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37e34680-ab77-11ec-811f-f39ec0bc1e02', '100046', 'THC5M3NAZP', '100046@gmail.com', '1984-05-15', 16, '628165317089', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37e3a1c0-ab77-11ec-8e99-f56261d9b7ff', '100047', 'OFW6DBRQK', '100047@yahoo.com', '1986-12-27', 14, '628139158074', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37e406d0-ab77-11ec-ac46-9b8356b7ec68', '100048', 'N4JX8WZU9LKI6P2', '100048@rocketmail.com', '1995-08-02', 14, '628167192058', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37e46f40-ab77-11ec-8cd1-39481c5bbc16', '100049', 'NYRJK8ET', '100049@gmail.com', '1985-04-26', 18, '628190384527', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('37e4d000-ab77-11ec-bc23-b958b42e191a', '100050', 'Z02YBTMU9IJC', '100050@gmail.com', '1981-08-15', 1, '628115273469', '', '2022-03-24 13:35:06', '2022-03-24 13:35:06', '1'),
('b7b49130-ab98-11ec-89d5-d5b0467ffb88', '100099', '7RGOFYA83N', '100099@yahoo.co.id', '1980-11-23', 11, '628191526308', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7b7fe40-ab98-11ec-86d5-93dec6c0ed94', '100100', 'KAYPNVQO', '100100@gmail.com', '1987-07-29', 12, '628123951708', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7ba6490-ab98-11ec-9a4f-f79a89650f4a', '100101', '24EIN16KBF', '100101@gmail.com', '2001-07-29', 8, '628170628159', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7bc3010-ab98-11ec-b128-29946ebeb48c', '100102', 'IQYBZSW3O2', '100102@gmail.com', '1986-03-06', 6, '628182679513', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7be8f30-ab98-11ec-93d6-c9f2b64120ac', '100103', '7FU6NQ1ZSID', '100103@yahoo.co.id', '1997-01-14', 4, '628104597312', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7c11470-ab98-11ec-8bba-65c3cee29a6a', '100104', 'B8JK9SLVYDQWPIG', '100104@yahoo.co.id', '1996-12-13', 10, '628102973815', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7c37c80-ab98-11ec-936b-fbfe2a7455b8', '100105', 'KE8HY9ARX7', '100105@yahoo.co.id', '1984-11-16', 11, '628180795123', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7c5c610-ab98-11ec-a2dc-99160f2eeeed', '100106', 'SOU6Q2EZ3WHMJY', '100106@rocketmail.com', '1996-08-21', 13, '628178035912', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7c803b0-ab98-11ec-88d1-65f5fa89cc03', '100107', '5XA6Q3VEFT8N4I', '100107@rocketmail.com', '2000-03-15', 10, '628140873692', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7caa4f0-ab98-11ec-a4df-1b7a9756c716', '100108', 'VSNAZ1GOX96FRY2', '100108@yahoo.com', '1982-11-07', 6, '628171569834', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7cdb670-ab98-11ec-90f9-9702a95cf34a', '100109', 'UC6JM7T5SHF', '100109@rocketmail.com', '1986-08-14', 6, '628114823790', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7d04240-ab98-11ec-a034-4d3f4d095799', '100110', '58SNK2460PZTD', '100110@rocketmail.com', '1990-04-11', 11, '628157318962', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7d2cf30-ab98-11ec-8053-cd4da666e509', '100111', '9368FPQWJ4XBS', '100111@gmail.com', '1992-12-13', 10, '628169485027', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7d50c40-ab98-11ec-a681-4b5cb5876342', '100112', '75T9KQ3XCRV6', '100112@rocketmail.com', '2002-11-11', 12, '628182049731', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7d75a80-ab98-11ec-b540-e5a61bc1bf35', '100113', 'HCX461GAQT02S', '100113@rocketmail.com', '0000-00-00', 8, '628165741092', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7da79c0-ab98-11ec-a416-d5ee43171c02', '100114', '1MNOJLAV', '100114@yahoo.co.id', '2004-06-04', 5, '628126549871', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7dce950-ab98-11ec-be1c-f9b593148ecd', '100115', 'R9OLCEVK8FUA', '100115@rocketmail.com', '2004-09-23', 8, '628198375602', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7e032e0-ab98-11ec-b350-e37c02e48210', '100116', 'BVEDR0W67QUOS', '100116@yahoo.co.id', '1997-11-12', 6, '628192301648', '', '2022-03-24 17:34:54', '2022-03-24 17:34:54', '1'),
('b7e24190-ab98-11ec-9656-63d5a731806b', '100117', '7PN9J8SQFW', '100117@yahoo.com', '2003-09-12', 18, '628145890237', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7e47b80-ab98-11ec-9a82-057c48a0e54c', '100118', '1BZ64IS2K', '100118@yahoo.com', '1983-09-19', 14, '628126015947', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7e68440-ab98-11ec-8d59-57c4bd64cf96', '100119', 'UH7ETQZX', '100119@yahoo.co.id', '1980-02-01', 7, '628171089432', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7e93560-ab98-11ec-871f-3d646a9ad193', '100120', '2ZQPBW59V', '100120@yahoo.com', '1998-05-27', 11, '628132890146', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7eb7060-ab98-11ec-b2de-8df9f0de5c90', '100121', '0R4A2LBIZCN', '100121@gmail.com', '1997-10-29', 9, '628159038674', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7eee280-ab98-11ec-a62e-979f678af66e', '100122', 'Q9TGLUR3M8X', '100122@gmail.com', '1993-04-02', 7, '628162350981', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7f1b3a0-ab98-11ec-8d6c-7f0851dd89bc', '100123', 'ELXM5KWZHT3', '100123@gmail.com', '1982-07-17', 9, '628169854317', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7f454c0-ab98-11ec-9c81-c70bbc14e4b0', '100124', '09JTFO36Z', '100124@yahoo.com', '1994-10-05', 5, '628196342517', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7f6d270-ab98-11ec-88fd-01f44e25dbb6', '100125', 'TE945HVS8K', '100125@yahoo.co.id', '2001-04-29', 18, '628168107435', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7f91c80-ab98-11ec-ab83-718b3f8df858', '100126', 'BGJZWTRI5', '100126@rocketmail.com', '1987-02-14', 10, '628102956843', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7fb7a50-ab98-11ec-865b-2131dd4a80aa', '100127', '8VEZL3AOP9', '100127@yahoo.co.id', '1986-05-17', 3, '628134168095', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b7fe7c00-ab98-11ec-b97a-e95277eadb6a', '100128', 'GNM3XUZD', '100128@rocketmail.com', '2003-07-31', 18, '628162703984', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b8019cd0-ab98-11ec-bc92-cbeb3964dd3d', '100129', 'LBA1920MY', '100129@yahoo.com', '1987-04-18', 8, '628194032658', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b803c760-ab98-11ec-a12e-1fc0ea1299c3', '100130', 'OSRE905UIBX3VL', '100130@yahoo.co.id', '2001-10-25', 11, '628142670198', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b806bef0-ab98-11ec-9c81-7d0b16ca8ad4', '100131', 'D73YN8J0R6', '100131@gmail.com', '1998-05-11', 10, '628182513904', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b80ac0e0-ab98-11ec-a674-4177e6e6de5f', '100132', 'U435A7DFWH', '100132@yahoo.com', '1991-02-22', 4, '628102978164', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b80d0160-ab98-11ec-936c-49b5ee76a512', '100133', 'O0MZNG2F6P3CIA9', '100133@yahoo.co.id', '1980-06-25', 14, '628173026154', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b80fad60-ab98-11ec-9835-e11dffb6af02', '100134', 'PX357CIQNLH', '100134@rocketmail.com', '1993-03-24', 14, '628119027863', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b8124c50-ab98-11ec-a4fb-fdd22c0bafcb', '100135', 'F268DCZW', '100135@yahoo.com', '1989-12-02', 2, '628181357602', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b81596c0-ab98-11ec-a329-b77c6aaadae8', '100136', 'NHJUYD826LP3O', '100136@yahoo.co.id', '1982-04-24', 4, '628101923456', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b81819c0-ab98-11ec-b6a9-210d7092a120', '100137', 'SV8WQA5GRKME', '100137@gmail.com', '2000-09-14', 12, '628186120543', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b81a56b0-ab98-11ec-8d8c-eda68edd565b', '100138', '9QBWEFZI53XK', '100138@gmail.com', '1989-08-11', 13, '628136459827', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b81cc700-ab98-11ec-aae4-730c1f282f4c', '100139', 'RYGVJN31H2', '100139@yahoo.com', '2002-06-30', 10, '628193704268', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b81f61b0-ab98-11ec-8500-51198b829071', '100140', 'MYPWZF578K6D', '100140@gmail.com', '1990-01-28', 1, '628134865209', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b821c900-ab98-11ec-adf4-e3fe1f6f6080', '100141', 'MFH9VPTU63YNBJ', '100141@rocketmail.com', '1989-02-18', 9, '628153817690', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b8242240-ab98-11ec-b0cb-13bfacb99d54', '100142', 'Q7KZO3N0SXPF', '100142@yahoo.co.id', '1986-02-06', 7, '628179132586', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b8276b10-ab98-11ec-8f00-cb79a1722828', '100143', '4UC2K6DXS1I3', '100143@gmail.com', '2000-06-17', 3, '628125938064', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b82a0760-ab98-11ec-90c3-710a703c4ffc', '100144', '734DC026G1BF', '100144@gmail.com', '2003-05-28', 14, '628101738542', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b82d8df0-ab98-11ec-86ab-2916078cf9bb', '100145', 'N5SHWDQECV', '100145@yahoo.com', '1994-09-25', 18, '628126801795', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b8303630-ab98-11ec-b3e0-a978f33dcece', '100146', 'BY6O7LQI9WGVEX', '100146@yahoo.com', '1997-12-03', 3, '628117302896', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b8330220-ab98-11ec-bd38-ed9c361dbeba', '100147', '8I45VR1OFQWJ', '100147@gmail.com', '1995-01-01', 8, '628113240957', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1'),
('b83597b0-ab98-11ec-9983-ff98c80619c2', '100148', 'NOZ8AY37C0J', '100148@rocketmail.com', '1983-11-04', 1, '628146518703', '', '2022-03-24 17:34:55', '2022-03-24 17:34:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_list_pekerjaan`
--

CREATE TABLE `tb_list_pekerjaan` (
  `id_list_pekerjaan` int(4) NOT NULL,
  `nama_pekerjaan` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_list_pekerjaan`
--

INSERT INTO `tb_list_pekerjaan` (`id_list_pekerjaan`, `nama_pekerjaan`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Programmer ', '2022-03-24 08:09:50', '2022-03-24 08:09:50', '1'),
(2, 'IT Support', '2022-03-24 08:09:50', '2022-03-24 08:09:50', '1'),
(3, 'HRD', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(4, 'Perawat', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(5, 'Petani', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(6, 'Marketing', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(7, 'Design Graphic', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(8, 'Fotografer', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(9, 'Editor', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(10, 'Dokter', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(11, 'Pegawai Negeri', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(12, 'Wiraswasta', '2022-03-24 08:26:03', '2022-03-24 08:26:03', '1'),
(13, 'Apoteker', '2022-03-24 07:46:24', '2022-03-24 07:46:24', '1'),
(14, 'tes', '2022-03-24 07:55:49', '2022-03-24 07:55:49', '1'),
(15, 'Tes pekerjaan', '2022-03-24 07:58:54', '2022-03-24 07:58:54', '1'),
(16, 'tes 2', '2022-03-24 07:59:39', '2022-03-24 19:15:58', '0'),
(17, 'Tes Baru 2', '2022-03-24 08:00:19', '2022-03-24 08:19:43', '1'),
(18, 'Pekerjaan Update new', '2022-03-24 08:00:45', '2022-03-24 19:07:49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(4) NOT NULL,
  `nama_product` varchar(250) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` int(4) NOT NULL DEFAULT 0,
  `foto` varchar(250) DEFAULT NULL,
  `url_path` varchar(250) DEFAULT NULL,
  `aktif` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `nama_product`, `deskripsi`, `harga`, `foto`, `url_path`, `aktif`, `created_at`, `updated_at`) VALUES
(7, 'My New Product 1', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 235000, '1.jpg', 'GambarProduct/', 1, '2022-03-24 17:36:31', '2022-03-24 17:36:31'),
(8, 'My New Product 2', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 325000, '2.jpg', 'GambarProduct/', 1, '2022-03-24 17:36:31', '2022-03-24 17:36:31'),
(9, 'my New Product 3', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 145000, '3.jpg', 'GambarProduct/', 1, '2022-03-24 17:38:01', '2022-03-24 17:38:01'),
(10, 'My New Product 4', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 425000, '1.jpg', 'GambarProduct/', 1, '2022-03-24 17:38:01', '2022-03-24 17:38:01'),
(11, 'My New Product 5', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 185000, '2.jpg', 'GambarProduct/', 1, '2022-03-24 17:38:57', '2022-03-24 17:38:57'),
(12, 'My New Product 6', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 245000, '3.jpg', 'GambarProduct/', 1, '2022-03-24 17:38:57', '2022-03-24 17:38:57'),
(13, 'New Input Product tes', 'Ini adalah product terbaru Ini adalah product terbaru Ini adalah product terbaru', 850000, '1648147759xrmpvzwcdeiflboqhguanstyjk.jpg', '/GambarProduct/1648147759xrmpvzwcdeiflboqhguanstyjk.jpg', 1, '2022-03-24 18:25:27', '2022-03-24 19:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_images`
--

CREATE TABLE `tb_room_images` (
  `id_room_images` int(4) NOT NULL,
  `alt` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `id_kategori_room` int(4) DEFAULT 0,
  `url_path` varchar(250) NOT NULL,
  `urutan` int(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_room_images`
--

INSERT INTO `tb_room_images` (`id_room_images`, `alt`, `title`, `foto`, `id_kategori_room`, `url_path`, `urutan`, `created_at`, `updated_at`, `aktif`) VALUES
(6, 'Aruna - 3', 'Aruna - 3', '1646283797fyjugkxcwhrqmnzblpistoaved.jpg', 5, 'GambarRoomCat/thumbnail/1646283797fyjugkxcwhrqmnzblpistoaved.jpg', 1, '2022-03-03 05:03:18', '2022-03-03 05:03:18', 0),
(8, 'Aruna - 2', 'Aruna - 2', '1646578341flihjgwycvopsrtnedbxzmakqu.jpg', 5, 'GambarRoomCat/thumbnail/1646578341flihjgwycvopsrtnedbxzmakqu.jpg', 2, '2022-03-03 11:35:24', '2022-03-06 14:52:21', 0),
(9, 'Aruna - 1', 'Aruna - 1', '1646578322uyefcxhsvrtbmiwgqlakpojnzd.jpg', 5, 'GambarRoomCat/thumbnail/1646578322uyefcxhsvrtbmiwgqlakpojnzd.jpg', 3, '2022-03-06 14:52:02', '2022-03-06 14:52:02', 0),
(10, 'Aruna - 1', 'Aruna - 1', '1646626664jhpclwznvorifqexmsktdauygb.jpg', 5, 'GambarRoomCat/thumbnail/1646626664jhpclwznvorifqexmsktdauygb.jpg', 4, '2022-03-07 03:25:46', '2022-03-07 04:17:44', 0),
(11, 'Aruna - 2', 'Aruna - 2', '1646625529mzdnfteaoygpulhvsckrqixjbw.jpg', 5, 'GambarRoomCat/thumbnail/1646625529mzdnfteaoygpulhvsckrqixjbw.jpg', 5, '2022-03-07 03:25:49', '2022-03-07 03:58:49', 0),
(12, 'Aruna - 3', 'Aruna - 3', '1646626748hdmlqkgzbrunivtfwcsyojepxa.jpg', 5, 'GambarRoomCat/thumbnail/1646626748hdmlqkgzbrunivtfwcsyojepxa.jpg', 6, '2022-03-07 03:25:49', '2022-03-07 04:19:10', 0),
(13, 'Sabitha - 1', 'Sabitha - 1', '1646659914stnfrpoldexqmbajuyikchgzvw.jpg', 6, 'GambarRoomCat/thumbnail/1646659914stnfrpoldexqmbajuyikchgzvw.jpg', 1, '2022-03-07 13:31:54', '2022-03-07 13:31:54', 0),
(14, 'Sabitha - 2', 'Sabitha - 2', '1646659914tawesvcpjlxbfdnoyimhkrugqz.jpg', 6, 'GambarRoomCat/thumbnail/1646659914tawesvcpjlxbfdnoyimhkrugqz.jpg', 2, '2022-03-07 13:31:54', '2022-03-07 13:31:54', 0),
(15, 'Sabitha - 3', 'Sabitha - 3', '1646659914zhsrybkqgldnovfcaiuxpmetjw.jpg', 6, 'GambarRoomCat/thumbnail/1646659914zhsrybkqgldnovfcaiuxpmetjw.jpg', 3, '2022-03-07 13:31:54', '2022-03-07 13:31:54', 0),
(16, 'Sabitha - 1', 'Sabitha - 1', '1646661853bywnlkepimaxdruzfgqstohcjv.jpg', 6, 'GambarRoomCat/thumbnail/1646661853bywnlkepimaxdruzfgqstohcjv.jpg', 4, '2022-03-07 14:04:13', '2022-03-07 14:04:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `no_wa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_level` int(4) NOT NULL,
  `foto_ttd` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aktif` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `no_wa`, `id_level`, `foto_ttd`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Ovi Artiani', 'oviartiani123@gmail.com', '$2y$10$afWL.Y5qYb7M43n5BNB47ubnfYQdnx3hhvbViLuGPW3v.CriVNlWK', '089321397044', 2, '', '2019-02-14 16:45:06', '2020-09-10 09:58:53', 1),
(22, 'Elis', 'elisuwarni@gmail.com', '$2y$10$HDjiFpskmfyXl01cM/qeHudMSZCP/cYflVgDgICohaPLJlP49k7mO', '0983891391', 3, '', '2019-04-18 19:04:16', '2020-09-10 10:01:08', 1),
(30, 'gusmang', 'user@gmail.com', '$2y$10$0lTm7jqG/kl6c1Tp92c/1.BPudYw4FR0PGv2M9CsaGIgHD5hwU02q', '089803818392', 1, '-', '2020-09-10 09:44:05', '2022-03-21 12:30:17', 1),
(31, 'Wartawan Ku Baru', 'wartawan@gmail.com', '$2y$10$j0.EKRpUQIqF14ym.61gdemReNqRL1CDIuHC0WpiCyInx24KqCfnm', '089213892301', 2, '-', '2020-09-10 09:47:10', '2020-09-10 09:57:53', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `uuid` (`uuid`),
  ADD UNIQUE KEY `nip` (`nip`,`email`);

--
-- Indexes for table `tb_list_pekerjaan`
--
ALTER TABLE `tb_list_pekerjaan`
  ADD PRIMARY KEY (`id_list_pekerjaan`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `nama_kategori` (`nama_product`);

--
-- Indexes for table `tb_room_images`
--
ALTER TABLE `tb_room_images`
  ADD PRIMARY KEY (`id_room_images`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_list_pekerjaan`
--
ALTER TABLE `tb_list_pekerjaan`
  MODIFY `id_list_pekerjaan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_room_images`
--
ALTER TABLE `tb_room_images`
  MODIFY `id_room_images` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
