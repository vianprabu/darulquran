-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 04:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darul_quran`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `agama_id` int(11) NOT NULL,
  `namaagama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `alattransportasi`
--

CREATE TABLE `alattransportasi` (
  `alattransportasi_id` int(11) NOT NULL,
  `namaalattransportasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `alattransportasi`
--

INSERT INTO `alattransportasi` (`alattransportasi_id`, `namaalattransportasi`) VALUES
(1, 'Jalan Kaki'),
(2, 'Sepeda'),
(3, 'Sepeda Motor'),
(4, 'Mobil Probadi'),
(5, 'Antar Jemput Sekolah'),
(6, 'Angkutan Umum'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `anakpegawai`
--

CREATE TABLE `anakpegawai` (
  `anak_id` varchar(20) NOT NULL,
  `pegawai_id` varchar(20) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `tempatlahir_anak` varchar(50) NOT NULL,
  `tgllahir_anak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anakpegawai`
--

INSERT INTO `anakpegawai` (`anak_id`, `pegawai_id`, `nama_anak`, `tempatlahir_anak`, `tgllahir_anak`) VALUES
('A1', '7770001', 'Rizqi', 'Banyumas', '2001-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `asalsekolah`
--

CREATE TABLE `asalsekolah` (
  `asalsekolah_id` int(11) NOT NULL,
  `namaasalsekolah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `asalsekolah`
--

INSERT INTO `asalsekolah` (`asalsekolah_id`, `namaasalsekolah`) VALUES
(1, 'Lainnya'),
(2, 'MI'),
(3, 'SD'),
(4, 'SD di Luar Negeri'),
(5, 'SDLB');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('pegawai', 2, 1621501502);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
('/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//controller', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//crud', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//extension', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//form', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//model', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//module', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/compress', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/template', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush-all', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush-schema', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/load', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/unload', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/action', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/diff', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/preview', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/hello/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/hello/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/help/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/help/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/config', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/extract', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/down', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/history', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/mark', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/new', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/redo', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/to', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/up', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/captcha', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-email-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-registration-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/login', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/logout', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/password-recovery', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/password-recovery-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/registration', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/refresh-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/set-child-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/set-child-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/change-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('Admin', 1, 'Admin', NULL, NULL, 1426062189, 1426062189, NULL),
('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1426062189, 1426062189, 'userCommonPermissions'),
('changeUserPassword', 2, 'Change user password', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('commonPermission', 2, 'Common permission', NULL, NULL, 1426062188, 1426062188, NULL),
('createUsers', 2, 'Create users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('deleteUsers', 2, 'Delete users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('editUserEmail', 2, 'Edit user email', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('editUsers', 2, 'Edit users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('pegawai', 1, 'Pegawai', NULL, NULL, 1621501421, 1621501421, NULL),
('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUserEmail', 2, 'View user email', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUserRoles', 2, 'View user roles', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUsers', 2, 'View users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewVisitLog', 2, 'View visit log', NULL, NULL, 1426062189, 1426062189, 'userManagement');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('Admin', 'changeUserPassword'),
('Admin', 'createUsers'),
('Admin', 'deleteUsers'),
('Admin', 'editUsers'),
('Admin', 'viewUsers'),
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('assignRolesToUsers', 'viewUserRoles'),
('assignRolesToUsers', 'viewUsers'),
('changeOwnPassword', '/user-management/auth/change-own-password'),
('changeUserPassword', '/user-management/user/change-password'),
('changeUserPassword', 'viewUsers'),
('createUsers', '/user-management/user/create'),
('createUsers', 'viewUsers'),
('deleteUsers', '/user-management/user/bulk-delete'),
('deleteUsers', '/user-management/user/delete'),
('deleteUsers', 'viewUsers'),
('editUserEmail', 'viewUserEmail'),
('editUsers', '/user-management/user/bulk-activate'),
('editUsers', '/user-management/user/bulk-deactivate'),
('editUsers', '/user-management/user/update'),
('editUsers', 'viewUsers'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('viewUsers', '/user-management/user/view'),
('viewVisitLog', '/user-management/user-visit-log/grid-page-size'),
('viewVisitLog', '/user-management/user-visit-log/index'),
('viewVisitLog', '/user-management/user-visit-log/view');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_group`
--

CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('userCommonPermissions', 'User common permission', 1426062189, 1426062189),
('userManagement', 'User management', 1426062189, 1426062189);

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bidangprestasi`
--

CREATE TABLE `bidangprestasi` (
  `bidangprestasi_id` int(11) NOT NULL,
  `namabidangprestasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `bidangprestasi`
--

INSERT INTO `bidangprestasi` (`bidangprestasi_id`, `namabidangprestasi`) VALUES
(1, 'Akademik'),
(2, 'Keagamaan'),
(3, 'Teknologi'),
(4, 'Olahraga'),
(5, 'Pramuka/Paskibraka'),
(6, 'Karya Ilmiah Remaja'),
(7, 'Kesenian'),
(8, 'Pidato Bahasa Asing'),
(9, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `citacita`
--

CREATE TABLE `citacita` (
  `citacita_id` int(11) NOT NULL,
  `namacitacita` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `citacita`
--

INSERT INTO `citacita` (`citacita_id`, `namacitacita`) VALUES
(1, 'PNS'),
(2, 'TNI/POLRI'),
(3, 'Guru/Dosen'),
(4, 'Dokter'),
(5, 'Politikus'),
(6, 'Wiraswasta'),
(7, 'Seni/Lukis/Artis/Sejenis'),
(8, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `cuti_id` int(11) NOT NULL,
  `jeniscuti_id` int(11) NOT NULL,
  `pegawai_id` varchar(20) DEFAULT NULL,
  `keterangan_cuti` varchar(255) NOT NULL,
  `domisili_cuti` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `tgl_pengajuancuti` date NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_tidak_cuti` varchar(400) DEFAULT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_setujuicuti` date DEFAULT NULL,
  `jml_hari` int(11) NOT NULL,
  `statuspengajuan_id` varchar(20) DEFAULT '0',
  `pegawai_acc` varchar(20) DEFAULT NULL,
  `file_datadukung` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cutidetail`
--

CREATE TABLE `cutidetail` (
  `cutidetail_id` int(11) NOT NULL,
  `cuti_id` int(11) NOT NULL,
  `tgl_cuti` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailbeasiswa`
--

CREATE TABLE `detailbeasiswa` (
  `detailbeasiswa_id` int(11) NOT NULL,
  `jenisbeasiswa_id` int(11) DEFAULT NULL,
  `sumberbeasiswa_id` int(11) DEFAULT NULL,
  `jangkawaktu` varchar(10) DEFAULT NULL,
  `nominalditerima` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `detailprestasi`
--

CREATE TABLE `detailprestasi` (
  `detailprestasi_id` int(11) NOT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `bidangprestasi_id` int(11) DEFAULT NULL,
  `tingkatprestasi_id` int(11) DEFAULT NULL,
  `peringkat_id` int(11) DEFAULT NULL,
  `tahunmeraihprestasi` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `filepegawai`
--

CREATE TABLE `filepegawai` (
  `file_id` int(100) NOT NULL,
  `namafile` varchar(50) DEFAULT NULL,
  `ukuran` bigint(100) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `tgl_proses` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filepegawai`
--

INSERT INTO `filepegawai` (`file_id`, `namafile`, `ukuran`, `tgl_upload`, `tgl_proses`) VALUES
(49, 'fileguru (1).xlsx', 0, '2021-06-04', '2021-06-04'),
(50, 'fileguru (3).xlsx', 10457, '2021-06-04', NULL),
(55, 'Contoh.xlsx', 9530, '2021-06-04', '2021-06-04'),
(56, 'Contoh.xlsx', 9530, '2021-06-04', '2021-06-04'),
(69, 'Contoh3.xlsx', 9850, '2021-06-04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hobi`
--

CREATE TABLE `hobi` (
  `hobi_id` int(11) NOT NULL,
  `namahobi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `hobi`
--

INSERT INTO `hobi` (`hobi_id`, `namahobi`) VALUES
(1, 'Olahraga'),
(2, 'Kesenian'),
(3, 'Membaca'),
(4, 'Menulis'),
(5, 'Traveling'),
(6, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `izin_id` int(11) NOT NULL,
  `jenisizin_id` int(11) NOT NULL,
  `pegawai_id` varchar(20) DEFAULT NULL,
  `keterangan_izin` varchar(255) NOT NULL,
  `tgl_pengajuanizin` date NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_tidak_izin` varchar(400) DEFAULT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_setujuiizin` date DEFAULT NULL,
  `pegawai_acc` varchar(20) DEFAULT NULL,
  `bukti` varchar(20) NOT NULL,
  `statuspengajuan_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `izindetail`
--

CREATE TABLE `izindetail` (
  `izindetail_id` int(11) NOT NULL,
  `izin_id` int(11) NOT NULL,
  `tgl_izin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwalpresensi`
--

CREATE TABLE `jadwalpresensi` (
  `jadwalpresensi_id` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `jenispresensi_id` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jadwal_masuk` time NOT NULL,
  `jadwal_pulang` time NOT NULL,
  `batas_awal_masuk` time NOT NULL,
  `batas_akhir_masuk` time NOT NULL,
  `batas_awal_pulang` time NOT NULL,
  `batas_akhir_pulang` time NOT NULL,
  `isaktif` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwalpresensi`
--

INSERT INTO `jadwalpresensi` (`jadwalpresensi_id`, `jenispresensi_id`, `hari`, `jadwal_masuk`, `jadwal_pulang`, `batas_awal_masuk`, `batas_akhir_masuk`, `batas_awal_pulang`, `batas_akhir_pulang`, `isaktif`) VALUES
('1', 'PGWR', 'SENIN', '19:00:00', '03:00:00', '18:00:00', '19:15:00', '03:00:00', '16:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwalpresensi_pegawai`
--

CREATE TABLE `jadwalpresensi_pegawai` (
  `jadwalpresensipegawai_id` int(11) NOT NULL,
  `pegawai_id` varchar(20) NOT NULL,
  `jadwalpresensi_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwalpresensi_pegawai`
--

INSERT INTO `jadwalpresensi_pegawai` (`jadwalpresensipegawai_id`, `pegawai_id`, `jadwalpresensi_id`) VALUES
(1, '7770001', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jaraklokasisiswa`
--

CREATE TABLE `jaraklokasisiswa` (
  `jaraklokasisiswa_id` int(11) NOT NULL,
  `namajaraklokasisiswa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jaraklokasisiswa`
--

INSERT INTO `jaraklokasisiswa` (`jaraklokasisiswa_id`, `namajaraklokasisiswa`) VALUES
(1, '< 1 km'),
(2, '1 - 3 km'),
(3, '3 - 5 km'),
(4, '5 - 10 km'),
(5, '> 10 km');

-- --------------------------------------------------------

--
-- Table structure for table `jenisasalsekolah`
--

CREATE TABLE `jenisasalsekolah` (
  `jenisasalsekolah_id` int(11) NOT NULL,
  `namaasalsekolah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jenisasalsekolah`
--

INSERT INTO `jenisasalsekolah` (`jenisasalsekolah_id`, `namaasalsekolah`) VALUES
(1, 'TK'),
(2, 'RA'),
(3, 'PAUD'),
(4, 'TKLB'),
(5, 'Langsung dari Orangtua');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbeasiswa`
--

CREATE TABLE `jenisbeasiswa` (
  `jenisbeasiswa_id` int(11) NOT NULL,
  `namabeasiswa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jenisbeasiswa`
--

INSERT INTO `jenisbeasiswa` (`jenisbeasiswa_id`, `namabeasiswa`) VALUES
(1, 'Beasiswa Prestasi'),
(2, 'Beasiswa Kurang Mampu/Miskin'),
(3, 'Beasiswa Miskin dan Prestasi');

-- --------------------------------------------------------

--
-- Table structure for table `jeniscuti`
--

CREATE TABLE `jeniscuti` (
  `jeniscuti_id` int(11) NOT NULL,
  `nama_jeniscuti` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeniscuti`
--

INSERT INTO `jeniscuti` (`jeniscuti_id`, `nama_jeniscuti`) VALUES
(1, 'Cuti Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `jenisizin`
--

CREATE TABLE `jenisizin` (
  `jenisizin_id` int(11) NOT NULL,
  `nama_jenisizin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisizin`
--

INSERT INTO `jenisizin` (`jenisizin_id`, `nama_jenisizin`) VALUES
(1, 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `jeniskelamin`
--

CREATE TABLE `jeniskelamin` (
  `jeniskelamin_id` char(1) NOT NULL,
  `namajeniskelamin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`jeniskelamin_id`, `namajeniskelamin`) VALUES
('L', 'Laki-Laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `jenispegawai`
--

CREATE TABLE `jenispegawai` (
  `jenispegawai_id` varchar(10) NOT NULL,
  `nama_jenispegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenispegawai`
--

INSERT INTO `jenispegawai` (`jenispegawai_id`, `nama_jenispegawai`) VALUES
('GR', 'Guru'),
('GRBK', 'Guru BK'),
('PGW', 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `jenispresensi`
--

CREATE TABLE `jenispresensi` (
  `jenispresensi_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama_jenispresensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenispresensi`
--

INSERT INTO `jenispresensi` (`jenispresensi_id`, `nama_jenispresensi`) VALUES
('PGWR', 'Pegawai Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `jenjang_sekolah_id` int(11) NOT NULL,
  `nama_jenjang` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`jenjang_sekolah_id`, `nama_jenjang`) VALUES
(1, 'MI');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` int(11) NOT NULL,
  `namakelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `namakelas`) VALUES
(1, 'Tingkat 1'),
(2, 'Tingkat 2'),
(3, 'Tingkat 3'),
(4, 'Tingkat 4'),
(5, 'Tingkat 5'),
(6, 'Tingkat 6');

-- --------------------------------------------------------

--
-- Table structure for table `kelasparalel`
--

CREATE TABLE `kelasparalel` (
  `kelasparalel_id` int(11) NOT NULL,
  `namakelasparalel` char(2) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kelasparalel`
--

INSERT INTO `kelasparalel` (`kelasparalel_id`, `namakelasparalel`, `keterangan`) VALUES
(1, '01', 'Siswa pada Rombel 6 A Kelas Paralel 01'),
(2, '02', 'Siswa pada Rombel 6 B Kelas Paralel 02');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `logbook_id` bigint(20) NOT NULL,
  `targetkinerja_id` int(11) NOT NULL,
  `uraian_logbook` text NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `volume_capaian` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logpresensi`
--

CREATE TABLE `logpresensi` (
  `logpresensi_id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pegawai_id` varchar(20) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logpresensi`
--

INSERT INTO `logpresensi` (`logpresensi_id`, `waktu`, `pegawai_id`, `latitude`, `longitude`) VALUES
(1, '2021-06-04 07:45:16', '7770001', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pangkatgolongan`
--

CREATE TABLE `pangkatgolongan` (
  `pangkatgolongan_id` int(10) NOT NULL,
  `nama_pangkatgolongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangkatgolongan`
--

INSERT INTO `pangkatgolongan` (`pangkatgolongan_id`, `nama_pangkatgolongan`) VALUES
(1, 'Penata Tk.I, III/d'),
(2, 'Penata Muda Tk.I, III/b'),
(3, 'Penata, III/c');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` varchar(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jeniskelamin_id` char(1) CHARACTER SET latin1 NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `status_kawin` varchar(10) NOT NULL,
  `nama_pasangan` varchar(50) DEFAULT NULL,
  `sekolah_id` int(11) NOT NULL,
  `tmt` date DEFAULT NULL,
  `statuspegawai_id` varchar(20) DEFAULT NULL,
  `pangkatgolongan_id` int(10) DEFAULT NULL,
  `pendidikanpegawai_id` int(10) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `nama_sekolah` varchar(30) DEFAULT NULL,
  `sertifikasi` varchar(10) DEFAULT NULL,
  `status_inpasing` varchar(10) DEFAULT NULL,
  `jenispegawai_id` varchar(10) NOT NULL,
  `tugas_tambahan` varchar(30) DEFAULT NULL,
  `kaderisasi_nu` varchar(10) DEFAULT NULL,
  `foto_pegawai` varchar(20) DEFAULT NULL,
  `nokartu_pegawai` varchar(20) NOT NULL,
  `pin_pegawai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `nik`, `nip`, `nama_pegawai`, `jeniskelamin_id`, `tempat_lahir`, `tgl_lahir`, `alamat`, `status_kawin`, `nama_pasangan`, `sekolah_id`, `tmt`, `statuspegawai_id`, `pangkatgolongan_id`, `pendidikanpegawai_id`, `jurusan`, `nama_sekolah`, `sertifikasi`, `status_inpasing`, `jenispegawai_id`, `tugas_tambahan`, `kaderisasi_nu`, `foto_pegawai`, `nokartu_pegawai`, `pin_pegawai`) VALUES
('7770001', '3403011706690001', '3403011706690001', 'Drs. H. A. KHARIS MASDUKI, M.S.I.', 'L', 'GUNUNGKIDUL', '1969-06-06', 'LEDOKSARI 003/007, KEPEK, WONOSARI, GUNUNGKIDUL, DIY', 'KAWIN', 'Hj. WARDAH, S.P.', 1, '2003-12-01', 'PNS', 1, 4, 'MANAJEMEN KEBIJAKAN PENDIDIKAN', 'UIN SUNAN KALIJAGA YOGYAKARTA', '', '', 'GR', 'Kepala Madrasah', '', '7770001.jpg', '', ''),
('7770002', '3403014101710001', '', 'Hj. WARDAH, S.P.', 'P', 'BANTUL', '1971-01-01', 'LEDOKSARI 003/007, KEPEK, WONOSARI, GUNUNGKIDUL, DIY', 'KAWIN', 'Drs. H. A. KHARIS MASDUKI, M.S.I.', 1, '2005-07-01', 'GTY', NULL, NULL, 'PEMULIAAN TANAMAN', 'UNIVERSITAS GADJAH MADA YOGYAK', '1', '0', 'GR', 'Guru', '1', '7770002.jpg', '', ''),
('7770003', '3403036708830001', NULL, 'INSAN AYU WULANDARI, S.Pd.I.', 'P', 'GUNUNGKIDUL', '1988-08-27', 'WIYOKO UTARA 031/008, PLEMBUTAN, PLAYEN, GUNUNGKIDUL, DIY', 'KAWIN', 'NURCHOLIS, S.Pd.I.', 1, '2005-07-01', 'GTY', NULL, 4, 'PENDIDIKAN AGAMA ISLAM', 'STAIYO WONOSARI', 'SUDAH', 'SUDAH', 'GR', 'WAKIL KEPALA SEKOLAH', 'SUDAH', NULL, '', ''),
('7770004', '3403016106800001', NULL, 'ESTI WURYANI, S.Si.', 'P', 'GUNUNGKIDUL', '1980-05-21', 'LEDOKSARI 002/007, KEPEK, WONOSARI, GUNUNGKIDUL, DIY', 'BELUM KAWI', NULL, 1, '2005-07-01', 'GTY', NULL, 4, 'GEOGRAFI/PENGINDERAAN JAUH', 'UNIVERSITAS GADJAH MADA YOGYAK', 'SUDAH', 'SUDAH', 'GR', 'KEPALA TATA USAHA', 'SUDAH', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `pekerjaan_id` int(11) NOT NULL,
  `namapekerjaan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `namapendidikan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`pendidikan_id`, `namapendidikan`) VALUES
(0, 'Tidak berpendidikan Formal'),
(1, '<=SLTP'),
(2, 'D1'),
(3, 'D2'),
(4, 'D3'),
(5, 'D4'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikanpegawai`
--

CREATE TABLE `pendidikanpegawai` (
  `pendidikanpegawai_id` int(10) NOT NULL,
  `pegawai_id` varchar(20) DEFAULT NULL,
  `ket_pendidikan` varchar(250) NOT NULL DEFAULT '',
  `jenjang` enum('SD','SMP','SMA','D3','S1','S2','S3') DEFAULT NULL,
  `is_aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikanpegawai`
--

INSERT INTO `pendidikanpegawai` (`pendidikanpegawai_id`, `pegawai_id`, `ket_pendidikan`, `jenjang`, `is_aktif`) VALUES
(4, '7770001', 'Kuliah S2', 'S2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penghasilanortu`
--

CREATE TABLE `penghasilanortu` (
  `penghasilanortu_id` int(11) NOT NULL,
  `keteranganpenghasilanortu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `penghasilanortu`
--

INSERT INTO `penghasilanortu` (`penghasilanortu_id`, `keteranganpenghasilanortu`) VALUES
(1, '< = Rp. 500.000'),
(2, 'Rp. 500.001 - Rp. 1000.000'),
(3, 'Rp. 1000.001 - Rp. 2000.000'),
(4, 'Rp. 2000.001 - Rp. 3000.000'),
(5, 'Rp. 3000.001 - Rp. 5000.000'),
(6, '> Rp. 5000.000');

-- --------------------------------------------------------

--
-- Table structure for table `peringkat`
--

CREATE TABLE `peringkat` (
  `peringkat_id` int(11) NOT NULL,
  `keteranganperingkat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `peringkat`
--

INSERT INTO `peringkat` (`peringkat_id`, `keteranganperingkat`) VALUES
(1, 'Juara I'),
(2, 'Juara II'),
(3, 'Juara III'),
(4, 'Juara Harapan I'),
(5, 'Juara Harapan II'),
(6, 'Juara Harapan III'),
(7, 'Juara Favorit');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `presensi_id` varchar(10) NOT NULL,
  `jadwalpresensipegawai_id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `status_kehadiran` enum('HADIR','IJIN''CUTI','SAKIT') DEFAULT NULL,
  `cuti_id` int(11) DEFAULT NULL,
  `izin_id` int(11) DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL,
  `logpresensi_id` int(11) NOT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`presensi_id`, `jadwalpresensipegawai_id`, `tgl`, `status_kehadiran`, `cuti_id`, `izin_id`, `jam_masuk`, `jam_pulang`, `logpresensi_id`, `latitude`, `longitude`, `keterangan`) VALUES
('1', 1, '2021-06-07', 'HADIR', NULL, NULL, '19:00:00', '03:30:00', 1, '1', '1', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `sekolah_id` int(11) NOT NULL,
  `jenjang_sekolah_id` int(11) NOT NULL,
  `nsm` int(12) NOT NULL,
  `npsn` int(8) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`sekolah_id`, `jenjang_sekolah_id`, `nsm`, `npsn`, `nama_sekolah`, `alamat_sekolah`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`) VALUES
(1, 1, 12345, 12345, 'MI Darul Qur\'an', 'Gunungkidul', 'Gunungkidul', 'Gunungkidul', 'Gunungkidul', 'Jawa Tengah', 53);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) NOT NULL,
  `nis` char(20) DEFAULT NULL,
  `nisn` char(20) DEFAULT NULL,
  `nik` char(16) DEFAULT NULL,
  `namasiswa` varchar(150) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin_id` char(1) DEFAULT NULL,
  `agama_id` int(11) DEFAULT NULL,
  `sekolah_id` int(11) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `kelasparalel_id` int(11) DEFAULT NULL,
  `statussiswa_id` int(11) DEFAULT NULL,
  `asalsekolah_id` int(11) DEFAULT NULL,
  `hobi_id` int(11) DEFAULT NULL,
  `citacita_id` int(11) DEFAULT NULL,
  `jumlahsaudara` int(11) DEFAULT NULL,
  `jenisasalsekolah_id` int(11) DEFAULT NULL,
  `statusasalsekolah_id` int(11) DEFAULT NULL,
  `kabupatenkotaasalsekolahasal` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `propinsi` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `desakelurahan` varchar(100) DEFAULT NULL,
  `kodepos` varchar(20) DEFAULT NULL,
  `jaraklokasisiswa_id` int(11) DEFAULT NULL,
  `alattransportasi_id` int(11) DEFAULT NULL,
  `tunarungu` tinyint(1) DEFAULT NULL,
  `tunanetra` tinyint(1) DEFAULT NULL,
  `tunadaksa` tinyint(1) DEFAULT NULL,
  `tunagrahita` tinyint(1) DEFAULT NULL,
  `tunalaras` tinyint(1) DEFAULT NULL,
  `lambanbelajar` tinyint(1) DEFAULT NULL,
  `sulitbelajar` tinyint(1) DEFAULT NULL,
  `gangguankomunikasi` tinyint(1) DEFAULT NULL,
  `bakatluarbiasa` tinyint(1) DEFAULT NULL,
  `nomorkartukeluarga` varchar(30) DEFAULT NULL,
  `namaayah` varchar(150) DEFAULT NULL,
  `nikayah` char(16) DEFAULT NULL,
  `pendidikanayah_id` int(11) DEFAULT NULL,
  `pekerjaanayah_id` int(11) DEFAULT NULL,
  `namaibu` varchar(150) DEFAULT NULL,
  `nikibu` char(16) DEFAULT NULL,
  `pendidikanibu_id` int(11) DEFAULT NULL,
  `pekerjaanibu_id` int(11) DEFAULT NULL,
  `penghasilanortu_id` int(11) DEFAULT NULL,
  `nomorkkskps` char(30) DEFAULT NULL,
  `nomorpkh` char(30) DEFAULT NULL,
  `nomorkip` char(30) DEFAULT NULL,
  `statuspenerimapipbsm` tinyint(1) DEFAULT NULL,
  `alasanstatuspenerimaapipbsm` varchar(255) DEFAULT NULL,
  `periodepenerimaanpipbsm` varchar(255) DEFAULT NULL,
  `detailprestasi_id` int(11) DEFAULT NULL,
  `detailbeasiswa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `statusasalsekolah`
--

CREATE TABLE `statusasalsekolah` (
  `statusasalsekolah_id` int(11) NOT NULL,
  `namastatusasalsekolah` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `statusasalsekolah`
--

INSERT INTO `statusasalsekolah` (`statusasalsekolah_id`, `namastatusasalsekolah`) VALUES
(1, 'Negeri'),
(2, 'Swasta');

-- --------------------------------------------------------

--
-- Table structure for table `statuspegawai`
--

CREATE TABLE `statuspegawai` (
  `statuspegawai_id` varchar(20) NOT NULL,
  `statuspegawai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuspegawai`
--

INSERT INTO `statuspegawai` (`statuspegawai_id`, `statuspegawai`) VALUES
('GTT', 'Guru Tidak Tetap'),
('GTY', 'Guru Tetap Yayasan'),
('PNS', 'Pegawai Negeri Sipil'),
('PTT', 'Pegawai Tidak Tetap'),
('PTY', 'Pegawai Tetap Yayasan');

-- --------------------------------------------------------

--
-- Table structure for table `statuspengajuan`
--

CREATE TABLE `statuspengajuan` (
  `statuspengajuan_id` varchar(20) NOT NULL,
  `ket_statuspengajuan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuspengajuan`
--

INSERT INTO `statuspengajuan` (`statuspengajuan_id`, `ket_statuspengajuan`) VALUES
('0', 'Belum ACC'),
('1', 'Sudah ACC'),
('2', 'Tidak ACC');

-- --------------------------------------------------------

--
-- Table structure for table `statussiswa`
--

CREATE TABLE `statussiswa` (
  `statussiswa_id` int(11) NOT NULL,
  `namastatussiswa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `statussiswa`
--

INSERT INTO `statussiswa` (`statussiswa_id`, `namastatussiswa`) VALUES
(1, 'Naik dati tingkat sebelumnya'),
(2, 'Mengulang'),
(3, 'Siswa pindahan/mutasi masuk'),
(4, 'Drop-out kembali'),
(5, 'Siswa baru tingkat 1');

-- --------------------------------------------------------

--
-- Table structure for table `sumberbeasiswa`
--

CREATE TABLE `sumberbeasiswa` (
  `sumberbeasiswa_id` int(11) NOT NULL,
  `namasumberbeasiswa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sumberbeasiswa`
--

INSERT INTO `sumberbeasiswa` (`sumberbeasiswa_id`, `namasumberbeasiswa`) VALUES
(1, 'Pemerintah Pusat (Kementerian)'),
(2, 'Pemerintah Daerah'),
(3, 'BUMN'),
(4, 'BUMD'),
(5, 'Perusahaan Swasta'),
(6, 'Yayasan'),
(7, 'Perorangan'),
(8, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `targetkinerja`
--

CREATE TABLE `targetkinerja` (
  `targetkinerja_id` int(20) NOT NULL,
  `pegawai_id` varchar(20) NOT NULL,
  `uraian_target` text NOT NULL,
  `tahun` smallint(6) NOT NULL DEFAULT 0,
  `volume` float NOT NULL DEFAULT 0,
  `satuan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tingkatprestasi`
--

CREATE TABLE `tingkatprestasi` (
  `tingkatprestasi_id` int(11) NOT NULL,
  `keterangantingkatprestasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tingkatprestasi`
--

INSERT INTO `tingkatprestasi` (`tingkatprestasi_id`, `keterangantingkatprestasi`) VALUES
(1, 'Tingkat Kab/Kota'),
(2, 'Tingkat Provinsi'),
(3, 'Tingkat Nasional'),
(4, 'Tingkat Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `superadmin` smallint(1) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
(1, 'superadmin', 'kz2px152FAWlkHbkZoCiXgBAd-S8SSjF', '$2y$13$MhlYe12xkGFnSeK0sO2up.Y9kAD9Ct6JS1i9VLP7YAqd1dFsSylz2', NULL, 1, 1, 1426062188, 1426062188, NULL, NULL, NULL, 0),
(2, '7770001', '3awZQUvp8gajzuuY3i0q47_nQjPkuO4m', '$2y$13$n.j5kibUNLnPW1m84E8DX.LhpxswZa9K2U1IUvvLujjgw1H9sBHjC', NULL, 1, 0, 1621501495, 1621501495, '::1', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_visit_log`
--

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_visit_log`
--

INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES
(1, '60a380bba14ee', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621328059, 'Chrome', 'Windows'),
(2, '60a4bb85ac5a0', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621408645, 'Chrome', 'Windows'),
(3, '60a4bd04237d8', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621409028, 'Chrome', 'Windows'),
(4, '60a4bd5e7c788', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621409118, 'Chrome', 'Windows'),
(5, '60a4be1485724', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621409300, 'Chrome', 'Windows'),
(6, '60a4bf2a3f2f8', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621409578, 'Chrome', 'Windows'),
(7, '60a4c05663cfe', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621409878, 'Chrome', 'Windows'),
(8, '60a4c26340c62', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621410403, 'Chrome', 'Windows'),
(9, '60a5ca69114e5', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621477993, 'Chrome', 'Windows'),
(10, '60a626678b6bf', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1621501543, 'Chrome', 'Windows'),
(11, '60a626cb641b9', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621501643, 'Chrome', 'Windows'),
(12, '60a7569e31ef4', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621579422, 'Chrome', 'Windows'),
(13, '60a756bdb9a6b', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1621579453, 'Chrome', 'Windows'),
(14, '60a75d8512c0d', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621581189, 'Chrome', 'Windows'),
(15, '60a75e13b6691', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1621581331, 'Chrome', 'Windows'),
(16, '60a87232324c4', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621652018, 'Chrome', 'Windows'),
(17, '60a8748ae2bf1', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1621652618, 'Chrome', 'Windows'),
(18, '60a876481dc56', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621653064, 'Chrome', 'Windows'),
(19, '60a87fe4394b2', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1621655524, 'Chrome', 'Windows'),
(20, '60a899d6720f0', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621662166, 'Chrome', 'Windows'),
(21, '60ab59667b33b', '192.168.1.8', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36 Edg/90.0.818.62', 1, 1621842278, 'Chrome', 'Windows'),
(22, '60af3a340aff3', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1622096436, 'Chrome', 'Windows'),
(23, '60b05eb536f0a', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0', 1, 1622171317, 'Firefox', 'Windows'),
(24, '60b1e2953c164', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0', 1, 1622270613, 'Firefox', 'Windows'),
(25, '60b2037e676d6', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1622279038, 'Chrome', 'Windows'),
(26, '60b2059fb49c7', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1622279583, 'Chrome', 'Windows'),
(27, '60b83da08f9f4', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1622687136, 'Chrome', 'Windows'),
(28, '60b83ddcd8320', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1622687196, 'Chrome', 'Windows'),
(29, '60b83e0bc8f0c', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1622687243, 'Chrome', 'Windows'),
(30, '60b83fb318a51', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0', 1, 1622687667, 'Firefox', 'Windows'),
(31, '60b8707e384df', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 2, 1622700158, 'Chrome', 'Windows'),
(32, '60b98cd61bd2a', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 1, 1622772950, 'Chrome', 'Windows'),
(33, '60b98d6a93cbe', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 2, 1622773098, 'Chrome', 'Windows'),
(34, '60b98d9069095', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 1, 1622773136, 'Chrome', 'Windows'),
(35, '60b9db17d2d3b', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 2, 1622792983, 'Chrome', 'Windows');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`agama_id`) USING BTREE;

--
-- Indexes for table `alattransportasi`
--
ALTER TABLE `alattransportasi`
  ADD PRIMARY KEY (`alattransportasi_id`) USING BTREE;

--
-- Indexes for table `anakpegawai`
--
ALTER TABLE `anakpegawai`
  ADD PRIMARY KEY (`anak_id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indexes for table `asalsekolah`
--
ALTER TABLE `asalsekolah`
  ADD PRIMARY KEY (`asalsekolah_id`) USING BTREE;

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`),
  ADD KEY `fk_auth_item_group_code` (`group_code`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_item_group`
--
ALTER TABLE `auth_item_group`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `bidangprestasi`
--
ALTER TABLE `bidangprestasi`
  ADD PRIMARY KEY (`bidangprestasi_id`) USING BTREE;

--
-- Indexes for table `citacita`
--
ALTER TABLE `citacita`
  ADD PRIMARY KEY (`citacita_id`) USING BTREE;

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`cuti_id`),
  ADD KEY `FK_cuti_pegawai` (`pegawai_id`),
  ADD KEY `FK_cuti_statuspengajuan` (`statuspengajuan_id`),
  ADD KEY `jeniscuti_id` (`jeniscuti_id`),
  ADD KEY `pegawai_acc` (`pegawai_acc`);

--
-- Indexes for table `cutidetail`
--
ALTER TABLE `cutidetail`
  ADD PRIMARY KEY (`cutidetail_id`),
  ADD KEY `cuti_id` (`cuti_id`);

--
-- Indexes for table `detailbeasiswa`
--
ALTER TABLE `detailbeasiswa`
  ADD PRIMARY KEY (`detailbeasiswa_id`) USING BTREE,
  ADD KEY `jenisbeasiswa_id` (`jenisbeasiswa_id`) USING BTREE,
  ADD KEY `sumberbeasiswa_id` (`sumberbeasiswa_id`) USING BTREE;

--
-- Indexes for table `detailprestasi`
--
ALTER TABLE `detailprestasi`
  ADD PRIMARY KEY (`detailprestasi_id`) USING BTREE,
  ADD KEY `bidangprestasi_id` (`bidangprestasi_id`) USING BTREE,
  ADD KEY `tingkatprestasi_id` (`tingkatprestasi_id`) USING BTREE,
  ADD KEY `peringkat_id` (`peringkat_id`) USING BTREE;

--
-- Indexes for table `filepegawai`
--
ALTER TABLE `filepegawai`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`hobi_id`) USING BTREE;

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`izin_id`) USING BTREE,
  ADD KEY `FK_izin_pegawai` (`pegawai_id`),
  ADD KEY `FK_izin_statuspengajuan` (`statuspengajuan_id`),
  ADD KEY `jenisizin_id` (`jenisizin_id`),
  ADD KEY `pegawai_acc` (`pegawai_acc`);

--
-- Indexes for table `izindetail`
--
ALTER TABLE `izindetail`
  ADD PRIMARY KEY (`izindetail_id`),
  ADD KEY `izin_id` (`izin_id`);

--
-- Indexes for table `jadwalpresensi`
--
ALTER TABLE `jadwalpresensi`
  ADD PRIMARY KEY (`jadwalpresensi_id`) USING BTREE,
  ADD KEY `jenispresensi_id` (`jenispresensi_id`);

--
-- Indexes for table `jadwalpresensi_pegawai`
--
ALTER TABLE `jadwalpresensi_pegawai`
  ADD PRIMARY KEY (`jadwalpresensipegawai_id`),
  ADD KEY `pegawai_id` (`pegawai_id`),
  ADD KEY `jadwalpresensi_id` (`jadwalpresensi_id`);

--
-- Indexes for table `jaraklokasisiswa`
--
ALTER TABLE `jaraklokasisiswa`
  ADD PRIMARY KEY (`jaraklokasisiswa_id`) USING BTREE;

--
-- Indexes for table `jenisasalsekolah`
--
ALTER TABLE `jenisasalsekolah`
  ADD PRIMARY KEY (`jenisasalsekolah_id`) USING BTREE;

--
-- Indexes for table `jenisbeasiswa`
--
ALTER TABLE `jenisbeasiswa`
  ADD PRIMARY KEY (`jenisbeasiswa_id`) USING BTREE;

--
-- Indexes for table `jeniscuti`
--
ALTER TABLE `jeniscuti`
  ADD PRIMARY KEY (`jeniscuti_id`);

--
-- Indexes for table `jenisizin`
--
ALTER TABLE `jenisizin`
  ADD PRIMARY KEY (`jenisizin_id`);

--
-- Indexes for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`jeniskelamin_id`) USING BTREE;

--
-- Indexes for table `jenispegawai`
--
ALTER TABLE `jenispegawai`
  ADD PRIMARY KEY (`jenispegawai_id`) USING BTREE;

--
-- Indexes for table `jenispresensi`
--
ALTER TABLE `jenispresensi`
  ADD PRIMARY KEY (`jenispresensi_id`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`jenjang_sekolah_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`) USING BTREE;

--
-- Indexes for table `kelasparalel`
--
ALTER TABLE `kelasparalel`
  ADD PRIMARY KEY (`kelasparalel_id`) USING BTREE;

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`logbook_id`),
  ADD KEY `FK_logbook_targetkinerja` (`targetkinerja_id`);

--
-- Indexes for table `logpresensi`
--
ALTER TABLE `logpresensi`
  ADD PRIMARY KEY (`logpresensi_id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indexes for table `pangkatgolongan`
--
ALTER TABLE `pangkatgolongan`
  ADD PRIMARY KEY (`pangkatgolongan_id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`),
  ADD KEY `FK_pegawai_statuspegawai` (`statuspegawai_id`),
  ADD KEY `FK_pegawai_pangkatgolongan` (`pangkatgolongan_id`),
  ADD KEY `FK_pegawai_pendidikan` (`pendidikanpegawai_id`),
  ADD KEY `FK_pegawai_jenispegawai` (`jenispegawai_id`),
  ADD KEY `FK_pegawai_satminkal` (`sekolah_id`) USING BTREE,
  ADD KEY `jeniskelamin_id` (`jeniskelamin_id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`pekerjaan_id`) USING BTREE;

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`) USING BTREE;

--
-- Indexes for table `pendidikanpegawai`
--
ALTER TABLE `pendidikanpegawai`
  ADD PRIMARY KEY (`pendidikanpegawai_id`) USING BTREE,
  ADD KEY `pegawai_id` (`pegawai_id`),
  ADD KEY `pegawai_id_2` (`pegawai_id`);

--
-- Indexes for table `penghasilanortu`
--
ALTER TABLE `penghasilanortu`
  ADD PRIMARY KEY (`penghasilanortu_id`) USING BTREE;

--
-- Indexes for table `peringkat`
--
ALTER TABLE `peringkat`
  ADD PRIMARY KEY (`peringkat_id`) USING BTREE;

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`presensi_id`),
  ADD KEY `id_absen` (`presensi_id`) USING BTREE,
  ADD KEY `FK_presensi_jadwalpresensi` (`jadwalpresensipegawai_id`),
  ADD KEY `FK_presensi_cuti` (`cuti_id`),
  ADD KEY `FK_presensi_izin` (`izin_id`),
  ADD KEY `logpresensi_id` (`logpresensi_id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`sekolah_id`),
  ADD KEY `jenjang_sekolah_id` (`jenjang_sekolah_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`) USING BTREE,
  ADD KEY `jeniskelamin_id` (`jeniskelamin_id`) USING BTREE,
  ADD KEY `agama_id` (`agama_id`) USING BTREE,
  ADD KEY `kelas_id` (`kelas_id`) USING BTREE,
  ADD KEY `kelasparalel_id` (`kelasparalel_id`) USING BTREE,
  ADD KEY `statussiswa_id` (`statussiswa_id`) USING BTREE,
  ADD KEY `asalsekolah_id` (`asalsekolah_id`) USING BTREE,
  ADD KEY `hobi_id` (`hobi_id`) USING BTREE,
  ADD KEY `citacita_id` (`citacita_id`) USING BTREE,
  ADD KEY `jenisasalsekolah_id` (`jenisasalsekolah_id`) USING BTREE,
  ADD KEY `statusasalsekolah_id` (`statusasalsekolah_id`) USING BTREE,
  ADD KEY `jaraklokasisiswa_id` (`jaraklokasisiswa_id`) USING BTREE,
  ADD KEY `alattransportasi_id` (`alattransportasi_id`) USING BTREE,
  ADD KEY `pendidikanayah_id` (`pendidikanayah_id`) USING BTREE,
  ADD KEY `pekerjaanayah_id` (`pekerjaanayah_id`) USING BTREE,
  ADD KEY `pendidikanibu_id` (`pendidikanibu_id`) USING BTREE,
  ADD KEY `pekerjaanibu_id` (`pekerjaanibu_id`) USING BTREE,
  ADD KEY `penghasilanortu_id` (`penghasilanortu_id`) USING BTREE,
  ADD KEY `detailprestasi_id` (`detailprestasi_id`) USING BTREE,
  ADD KEY `sekolah_id` (`sekolah_id`);

--
-- Indexes for table `statusasalsekolah`
--
ALTER TABLE `statusasalsekolah`
  ADD PRIMARY KEY (`statusasalsekolah_id`) USING BTREE;

--
-- Indexes for table `statuspegawai`
--
ALTER TABLE `statuspegawai`
  ADD PRIMARY KEY (`statuspegawai_id`) USING BTREE;

--
-- Indexes for table `statuspengajuan`
--
ALTER TABLE `statuspengajuan`
  ADD PRIMARY KEY (`statuspengajuan_id`);

--
-- Indexes for table `statussiswa`
--
ALTER TABLE `statussiswa`
  ADD PRIMARY KEY (`statussiswa_id`) USING BTREE;

--
-- Indexes for table `sumberbeasiswa`
--
ALTER TABLE `sumberbeasiswa`
  ADD PRIMARY KEY (`sumberbeasiswa_id`) USING BTREE;

--
-- Indexes for table `targetkinerja`
--
ALTER TABLE `targetkinerja`
  ADD PRIMARY KEY (`targetkinerja_id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indexes for table `tingkatprestasi`
--
ALTER TABLE `tingkatprestasi`
  ADD PRIMARY KEY (`tingkatprestasi_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `agama_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alattransportasi`
--
ALTER TABLE `alattransportasi`
  MODIFY `alattransportasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `asalsekolah`
--
ALTER TABLE `asalsekolah`
  MODIFY `asalsekolah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bidangprestasi`
--
ALTER TABLE `bidangprestasi`
  MODIFY `bidangprestasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `citacita`
--
ALTER TABLE `citacita`
  MODIFY `citacita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `detailbeasiswa`
--
ALTER TABLE `detailbeasiswa`
  MODIFY `detailbeasiswa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailprestasi`
--
ALTER TABLE `detailprestasi`
  MODIFY `detailprestasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filepegawai`
--
ALTER TABLE `filepegawai`
  MODIFY `file_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `hobi`
--
ALTER TABLE `hobi`
  MODIFY `hobi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `izin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `izindetail`
--
ALTER TABLE `izindetail`
  MODIFY `izindetail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwalpresensi_pegawai`
--
ALTER TABLE `jadwalpresensi_pegawai`
  MODIFY `jadwalpresensipegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jaraklokasisiswa`
--
ALTER TABLE `jaraklokasisiswa`
  MODIFY `jaraklokasisiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenisasalsekolah`
--
ALTER TABLE `jenisasalsekolah`
  MODIFY `jenisasalsekolah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenisbeasiswa`
--
ALTER TABLE `jenisbeasiswa`
  MODIFY `jenisbeasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jeniscuti`
--
ALTER TABLE `jeniscuti`
  MODIFY `jeniscuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenisizin`
--
ALTER TABLE `jenisizin`
  MODIFY `jenisizin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `jenjang_sekolah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelasparalel`
--
ALTER TABLE `kelasparalel`
  MODIFY `kelasparalel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `logbook_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logpresensi`
--
ALTER TABLE `logpresensi`
  MODIFY `logpresensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pangkatgolongan`
--
ALTER TABLE `pangkatgolongan`
  MODIFY `pangkatgolongan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `pekerjaan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendidikanpegawai`
--
ALTER TABLE `pendidikanpegawai`
  MODIFY `pendidikanpegawai_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penghasilanortu`
--
ALTER TABLE `penghasilanortu`
  MODIFY `penghasilanortu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peringkat`
--
ALTER TABLE `peringkat`
  MODIFY `peringkat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `sekolah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statusasalsekolah`
--
ALTER TABLE `statusasalsekolah`
  MODIFY `statusasalsekolah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statussiswa`
--
ALTER TABLE `statussiswa`
  MODIFY `statussiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sumberbeasiswa`
--
ALTER TABLE `sumberbeasiswa`
  MODIFY `sumberbeasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `targetkinerja`
--
ALTER TABLE `targetkinerja`
  MODIFY `targetkinerja_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tingkatprestasi`
--
ALTER TABLE `tingkatprestasi`
  MODIFY `tingkatprestasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_auth_item_group_code` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `FK_cuti_pegawai` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`pegawai_id`),
  ADD CONSTRAINT `FK_cuti_statuspengajuan` FOREIGN KEY (`statuspengajuan_id`) REFERENCES `statuspengajuan` (`statuspengajuan_id`),
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`jeniscuti_id`) REFERENCES `jeniscuti` (`jeniscuti_id`),
  ADD CONSTRAINT `cuti_ibfk_3` FOREIGN KEY (`pegawai_acc`) REFERENCES `pegawai` (`pegawai_id`);

--
-- Constraints for table `cutidetail`
--
ALTER TABLE `cutidetail`
  ADD CONSTRAINT `cutidetail_ibfk_1` FOREIGN KEY (`cuti_id`) REFERENCES `cuti` (`cuti_id`);

--
-- Constraints for table `detailbeasiswa`
--
ALTER TABLE `detailbeasiswa`
  ADD CONSTRAINT `detailbeasiswa_ibfk_3` FOREIGN KEY (`jenisbeasiswa_id`) REFERENCES `jenisbeasiswa` (`jenisbeasiswa_id`),
  ADD CONSTRAINT `detailbeasiswa_ibfk_4` FOREIGN KEY (`sumberbeasiswa_id`) REFERENCES `sumberbeasiswa` (`sumberbeasiswa_id`);

--
-- Constraints for table `detailprestasi`
--
ALTER TABLE `detailprestasi`
  ADD CONSTRAINT `detailprestasi_ibfk_1` FOREIGN KEY (`bidangprestasi_id`) REFERENCES `bidangprestasi` (`bidangprestasi_id`),
  ADD CONSTRAINT `detailprestasi_ibfk_2` FOREIGN KEY (`tingkatprestasi_id`) REFERENCES `tingkatprestasi` (`tingkatprestasi_id`),
  ADD CONSTRAINT `detailprestasi_ibfk_3` FOREIGN KEY (`peringkat_id`) REFERENCES `peringkat` (`peringkat_id`);

--
-- Constraints for table `izin`
--
ALTER TABLE `izin`
  ADD CONSTRAINT `FK_izin_pegawai` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`pegawai_id`),
  ADD CONSTRAINT `FK_izin_statuspengajuan` FOREIGN KEY (`statuspengajuan_id`) REFERENCES `statuspengajuan` (`statuspengajuan_id`),
  ADD CONSTRAINT `izin_ibfk_1` FOREIGN KEY (`jenisizin_id`) REFERENCES `jenisizin` (`jenisizin_id`),
  ADD CONSTRAINT `izin_ibfk_2` FOREIGN KEY (`pegawai_acc`) REFERENCES `pegawai` (`pegawai_id`);

--
-- Constraints for table `izindetail`
--
ALTER TABLE `izindetail`
  ADD CONSTRAINT `izindetail_ibfk_1` FOREIGN KEY (`izin_id`) REFERENCES `izin` (`izin_id`);

--
-- Constraints for table `jadwalpresensi`
--
ALTER TABLE `jadwalpresensi`
  ADD CONSTRAINT `jadwalpresensi_ibfk_1` FOREIGN KEY (`jenispresensi_id`) REFERENCES `jenispresensi` (`jenispresensi_id`);

--
-- Constraints for table `jadwalpresensi_pegawai`
--
ALTER TABLE `jadwalpresensi_pegawai`
  ADD CONSTRAINT `jadwalpresensi_pegawai_ibfk_1` FOREIGN KEY (`jadwalpresensi_id`) REFERENCES `jadwalpresensi` (`jadwalpresensi_id`),
  ADD CONSTRAINT `jadwalpresensi_pegawai_ibfk_2` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`pegawai_id`);

--
-- Constraints for table `logbook`
--
ALTER TABLE `logbook`
  ADD CONSTRAINT `FK_logbook_targetkinerja` FOREIGN KEY (`targetkinerja_id`) REFERENCES `targetkinerja` (`targetkinerja_id`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `FK_pegawai_jenispegawai` FOREIGN KEY (`jenispegawai_id`) REFERENCES `jenispegawai` (`jenispegawai_id`),
  ADD CONSTRAINT `FK_pegawai_pangkatgolongan` FOREIGN KEY (`pangkatgolongan_id`) REFERENCES `pangkatgolongan` (`pangkatgolongan_id`),
  ADD CONSTRAINT `FK_pegawai_pendidikan` FOREIGN KEY (`pendidikanpegawai_id`) REFERENCES `pendidikanpegawai` (`pendidikanpegawai_id`),
  ADD CONSTRAINT `FK_pegawai_sekolah` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolah` (`sekolah_id`),
  ADD CONSTRAINT `FK_pegawai_statuspegawai` FOREIGN KEY (`statuspegawai_id`) REFERENCES `statuspegawai` (`statuspegawai_id`);

--
-- Constraints for table `pendidikanpegawai`
--
ALTER TABLE `pendidikanpegawai`
  ADD CONSTRAINT `pendidikanpegawai_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`pegawai_id`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `FK_presensi_cuti` FOREIGN KEY (`cuti_id`) REFERENCES `cuti` (`cuti_id`),
  ADD CONSTRAINT `FK_presensi_izin` FOREIGN KEY (`izin_id`) REFERENCES `izin` (`izin_id`),
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`jadwalpresensipegawai_id`) REFERENCES `jadwalpresensi_pegawai` (`jadwalpresensipegawai_id`),
  ADD CONSTRAINT `presensi_ibfk_3` FOREIGN KEY (`logpresensi_id`) REFERENCES `logpresensi` (`logpresensi_id`);

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `sekolah_ibfk_1` FOREIGN KEY (`jenjang_sekolah_id`) REFERENCES `jenjang` (`jenjang_sekolah_id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_10` FOREIGN KEY (`statusasalsekolah_id`) REFERENCES `statusasalsekolah` (`statusasalsekolah_id`),
  ADD CONSTRAINT `siswa_ibfk_11` FOREIGN KEY (`jaraklokasisiswa_id`) REFERENCES `jaraklokasisiswa` (`jaraklokasisiswa_id`),
  ADD CONSTRAINT `siswa_ibfk_12` FOREIGN KEY (`alattransportasi_id`) REFERENCES `alattransportasi` (`alattransportasi_id`),
  ADD CONSTRAINT `siswa_ibfk_13` FOREIGN KEY (`pendidikanayah_id`) REFERENCES `pendidikan` (`pendidikan_id`),
  ADD CONSTRAINT `siswa_ibfk_14` FOREIGN KEY (`pekerjaanayah_id`) REFERENCES `pekerjaan` (`pekerjaan_id`),
  ADD CONSTRAINT `siswa_ibfk_15` FOREIGN KEY (`pendidikanibu_id`) REFERENCES `pendidikan` (`pendidikan_id`),
  ADD CONSTRAINT `siswa_ibfk_16` FOREIGN KEY (`pekerjaanibu_id`) REFERENCES `pekerjaan` (`pekerjaan_id`),
  ADD CONSTRAINT `siswa_ibfk_17` FOREIGN KEY (`penghasilanortu_id`) REFERENCES `penghasilanortu` (`penghasilanortu_id`),
  ADD CONSTRAINT `siswa_ibfk_18` FOREIGN KEY (`detailprestasi_id`) REFERENCES `detailprestasi` (`detailprestasi_id`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`agama_id`),
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`kelas_id`),
  ADD CONSTRAINT `siswa_ibfk_4` FOREIGN KEY (`kelasparalel_id`) REFERENCES `kelasparalel` (`kelasparalel_id`),
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`statussiswa_id`) REFERENCES `statussiswa` (`statussiswa_id`),
  ADD CONSTRAINT `siswa_ibfk_6` FOREIGN KEY (`asalsekolah_id`) REFERENCES `asalsekolah` (`asalsekolah_id`),
  ADD CONSTRAINT `siswa_ibfk_7` FOREIGN KEY (`hobi_id`) REFERENCES `hobi` (`hobi_id`),
  ADD CONSTRAINT `siswa_ibfk_8` FOREIGN KEY (`citacita_id`) REFERENCES `citacita` (`citacita_id`),
  ADD CONSTRAINT `siswa_ibfk_9` FOREIGN KEY (`jenisasalsekolah_id`) REFERENCES `jenisasalsekolah` (`jenisasalsekolah_id`);

--
-- Constraints for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
