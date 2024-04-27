/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : andre

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 27/04/2024 08:12:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blok
-- ----------------------------
DROP TABLE IF EXISTS `blok`;
CREATE TABLE `blok` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `luas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blok
-- ----------------------------
BEGIN;
INSERT INTO `blok` (`id`, `nomor`, `luas`) VALUES (1, 'B1', '100m2');
INSERT INTO `blok` (`id`, `nomor`, `luas`) VALUES (2, 'B2', '120m2');
INSERT INTO `blok` (`id`, `nomor`, `luas`) VALUES (3, 'B3', '90m2');
COMMIT;

-- ----------------------------
-- Table structure for jenis
-- ----------------------------
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `tarif` varchar(255) DEFAULT NULL,
  `jatuh_tempo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jenis
-- ----------------------------
BEGIN;
INSERT INTO `jenis` (`id`, `nama`, `tarif`, `jatuh_tempo`) VALUES (1, 'Biaya kios', '350000', 10);
COMMIT;

-- ----------------------------
-- Table structure for kios
-- ----------------------------
DROP TABLE IF EXISTS `kios`;
CREATE TABLE `kios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `blok_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kios
-- ----------------------------
BEGIN;
INSERT INTO `kios` (`id`, `nomor`, `nama`, `blok_id`, `status`) VALUES (1, 'K001', 'haliza', 1, '-');
COMMIT;

-- ----------------------------
-- Table structure for los
-- ----------------------------
DROP TABLE IF EXISTS `los`;
CREATE TABLE `los` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `blok_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of los
-- ----------------------------
BEGIN;
INSERT INTO `los` (`id`, `nomor`, `nama`, `blok_id`, `status`) VALUES (1, 'L001', 'los 1', 2, NULL);
COMMIT;

-- ----------------------------
-- Table structure for pedagang
-- ----------------------------
DROP TABLE IF EXISTS `pedagang`;
CREATE TABLE `pedagang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pedagang
-- ----------------------------
BEGIN;
INSERT INTO `pedagang` (`id`, `nama`, `alamat`, `jkel`, `telp`, `tanggal`) VALUES (1, 'sudirman', 'jl sudirman', 'L', '098765678', '2024-04-26');
INSERT INTO `pedagang` (`id`, `nama`, `alamat`, `jkel`, `telp`, `tanggal`) VALUES (3, 'Wijayanto', 'jl s adam', 'L', '098765678', '2024-04-26');
INSERT INTO `pedagang` (`id`, `nama`, `alamat`, `jkel`, `telp`, `tanggal`) VALUES (4, 'Yanti', 'jl pramuka', 'P', '0987656789', '2024-04-26');
COMMIT;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `jkel` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `jabatan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
BEGIN;
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `alamat`, `jkel`, `telp`, `jabatan`) VALUES (1, '54678', 'Andi', 'jl kayu tangi', 'P', '09876567890', 'Pelaksana Retribusi');
COMMIT;

-- ----------------------------
-- Table structure for peralihan
-- ----------------------------
DROP TABLE IF EXISTS `peralihan`;
CREATE TABLE `peralihan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(255) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `pedagang_lama` int(11) DEFAULT NULL,
  `pedagang_baru` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of peralihan
-- ----------------------------
BEGIN;
INSERT INTO `peralihan` (`id`, `tanggal`, `biaya`, `pedagang_lama`, `pedagang_baru`, `created_at`, `updated_at`) VALUES (1, '2024-04-26', 50000, 1, 4, '2024-04-26 23:09:01', '2024-04-26 23:50:34');
INSERT INTO `peralihan` (`id`, `tanggal`, `biaya`, `pedagang_lama`, `pedagang_baru`, `created_at`, `updated_at`) VALUES (2, '2024-04-26', 35000, 1, 3, '2024-04-26 23:37:06', '2024-04-26 23:50:27');
COMMIT;

-- ----------------------------
-- Table structure for registrasi
-- ----------------------------
DROP TABLE IF EXISTS `registrasi`;
CREATE TABLE `registrasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `pedagang_id` int(11) unsigned DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of registrasi
-- ----------------------------
BEGIN;
INSERT INTO `registrasi` (`id`, `tanggal`, `pedagang_id`, `nomor`, `created_at`, `updated_at`) VALUES (1, '2024-04-27', 4, 'REG098767', '2024-04-27 00:10:18', '2024-04-27 00:11:55');
COMMIT;

-- ----------------------------
-- Table structure for retribusi
-- ----------------------------
DROP TABLE IF EXISTS `retribusi`;
CREATE TABLE `retribusi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pedagang_id` int(11) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `jenis_id` int(11) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of retribusi
-- ----------------------------
BEGIN;
INSERT INTO `retribusi` (`id`, `pedagang_id`, `tanggal_bayar`, `jenis_id`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES (1, 1, '2024-04-26', 1, '1', '2024', '2024-04-26 18:38:45', '2024-04-26 18:38:45');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (5, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (1, 'superadmin', NULL, 'superadmin', '2024-04-27 08:05:32', '$2y$10$3k7FLC2TkBzYnumOyiv7BOmTOsTzzJHb3/p4aKcBUoGonp4Jij0Wu', NULL, 'Yk4smAQViuZOcKJrOLGRWeEgT6YMRMFkjApSCMUuR8HSPRNWy9z0K93lJyNa', '2024-04-27 08:05:32', '2024-04-27 08:05:32', NULL, NULL, 0);
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (5, 'adi', NULL, 'adi', '2024-04-20 11:07:17', '$2y$10$sxXBzHYpymU8.AMoywsDh.EzC5P9fHnIr2POgiTkFWp11kQQBJQaG', NULL, NULL, '2024-04-20 03:07:17', '2024-04-20 03:07:17', NULL, NULL, 0);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
