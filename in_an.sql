-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2021 at 10:01 AM
-- Server version: 10.4.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u549850473_incuonghai`
--

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_muc_cha` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `noi_bat` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten`, `ten_khong_dau`, `danh_muc_cha`, `created_at`, `updated_at`, `noi_bat`) VALUES
(1, 'Các loại thiết bị gia công chế bản', 'cac-loai-thiet-bi-gia-cong-che-ban', -1, '2020-11-07 01:43:39', '2021-07-18 16:57:38', 0),
(2, 'Các loại máy in lưới', 'cac-loai-may-in-luoi', -1, '2020-11-07 01:44:23', '2021-07-18 16:57:38', 1),
(3, 'Thiết bị máy móc ép nhũ / Chuyển nhiệt', 'thiet-bi-may-moc-ep-nhu-chuyen-nhiet', -1, '2020-11-07 01:44:32', '2021-07-18 16:57:38', 0),
(4, 'Máy in Tampo (pad)', 'may-in-tampo-pad-', -1, '2020-11-07 01:44:39', '2021-07-18 16:57:38', 1),
(5, 'Các loại máy sấy', 'cac-loai-may-say', -1, '2020-11-07 01:44:44', '2021-07-18 16:57:38', 0),
(6, 'Vật tư in đặc chủng', 'vat-tu-in-dac-chung', -1, '2020-11-07 01:44:51', '2021-07-18 16:57:38', 1),
(7, 'Thiết bị tự động in vải', 'thiet-bi-tu-dong-in-vai', -1, '2020-11-07 01:45:01', '2021-07-18 16:57:38', 0),
(8, 'Thiết bị liên quan', 'thiet-bi-lien-quan', -1, '2020-11-07 01:45:07', '2021-07-18 16:57:38', 0),
(9, 'Các loại máy khác', 'cac-loai-may-khac', -1, '2020-11-07 01:45:15', '2021-07-18 16:57:38', 0),
(10, 'Khung in lưới / Bản in tampo', 'khung-in-luoi-ban-in-tampo', 1, '2020-11-07 01:49:39', '2021-07-18 16:57:38', 0),
(12, 'Bản in silicon / Bản in điện hóa', 'ban-in-silicon-ban-in-dien-hoa', 1, '2020-11-07 07:25:12', '2021-07-18 16:57:38', 0),
(13, 'Máy căng lưới / Máy chụp bản', 'may-cang-luoi-may-chup-ban', 1, '2020-11-07 07:25:33', '2021-07-18 16:57:38', 1),
(14, 'Máy sấy bản in', 'may-say-ban-in', 1, '2020-11-07 07:25:53', '2021-07-18 16:57:38', 0),
(15, 'Film', 'film', 1, '2020-11-07 07:25:58', '2021-07-18 16:57:38', 0),
(16, 'Bàn in tay', 'ban-in-tay', 2, '2020-11-07 07:26:42', '2021-07-18 16:57:38', 0),
(17, 'Bàn in lưới bán tự động', 'ban-in-luoi-ban-tu-dong', 2, '2020-11-07 07:27:02', '2021-07-18 16:57:38', 0),
(18, 'Bàn in lưới toàn tự động', 'ban-in-luoi-toan-tu-dong', 2, '2020-11-07 07:27:25', '2021-07-18 16:57:38', 0),
(19, 'Máy ép nhủ bán tự động phẳng', 'may-ep-nhu-ban-tu-dong-phang', 3, '2020-11-07 07:27:47', '2021-07-18 16:57:38', 0),
(20, 'Máy ép nhủ bán tự động nhiều vị trí', 'may-ep-nhu-ban-tu-dong-nhieu-vi-tri', 3, '2020-11-07 07:28:11', '2021-07-18 16:57:38', 0),
(21, 'Máy in lưới chuyên in bật lửa', 'may-in-luoi-chuyen-in-bat-lua', 2, '2020-11-08 08:12:40', '2021-07-18 16:57:38', 0),
(22, 'Máy ép nhũ bán tự động tròn phẳng kép', 'may-ep-nhu-ban-tu-dong-tron-phang-kep', 3, '2020-11-08 08:13:09', '2021-07-18 16:57:38', 0),
(23, 'Máy ép nhũ toàn tự động', 'may-ep-nhu-toan-tu-dong', 3, '2020-11-08 08:13:21', '2021-07-18 16:57:38', 0),
(24, 'Máy in chuyển nhiệt bán tự động', 'may-in-chuyen-nhiet-ban-tu-dong', 3, '2020-11-08 08:13:30', '2021-07-18 16:57:38', 0),
(25, 'Máy chuyển nhiệt toàn tự động', 'may-chuyen-nhiet-toan-tu-dong', 3, '2020-11-08 08:13:37', '2021-07-18 16:57:38', 0),
(26, 'Các loại máy in Tampo (pad) bán tự động', 'cac-loai-may-in-tampo-pad-ban-tu-dong', 4, '2020-11-08 08:13:47', '2021-07-18 16:57:38', 0),
(27, 'Các loại máy in tampo (pad) bán tự động băng tải', 'cac-loai-may-in-tampo-pad-ban-tu-dong-bang-tai', 4, '2020-11-08 08:14:22', '2021-07-18 16:57:38', 0),
(28, 'Các loại máy in Tampo (pad) toàn tự động', 'cac-loai-may-in-tampo-pad-toan-tu-dong', 4, '2020-11-08 08:15:02', '2021-07-18 16:57:38', 0),
(29, 'Máy in tampo chuyên in bật lửa', 'may-in-tampo-chuyen-in-bat-lua', 4, '2020-11-08 08:15:18', '2021-07-18 16:57:38', 0),
(30, 'Mực in', 'muc-in', 6, '2020-11-08 08:15:46', '2021-07-18 16:57:38', 0),
(31, 'Dung môi / keo chụp bản', 'dung-moi-keo-chup-ban', 6, '2020-11-08 08:15:55', '2021-07-18 16:57:38', 0),
(32, 'Lưới (lụa)', 'luoi-lua-', 6, '2020-11-08 08:16:06', '2021-07-18 16:57:38', 0),
(33, 'Vật tư tiêu hao in Tampo', 'vat-tu-tieu-hao-in-tampo', 6, '2020-11-08 08:16:14', '2021-07-18 16:57:38', 0),
(34, 'Thiết bị phụ tùng', 'thiet-bi-phu-tung', 6, '2020-11-08 08:16:36', '2021-07-18 16:57:38', 0),
(35, 'Sản phẩm khác', 'san-pham-khac', 6, '2020-11-08 08:16:45', '2021-07-18 16:57:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `may_in`
--

CREATE TABLE `may_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san_pham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_muc` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `may_in`
--

INSERT INTO `may_in` (`id`, `ten`, `ten_khong_dau`, `ma_san_pham`, `hinh_anh`, `mo_ta`, `danh_muc`, `created_at`, `updated_at`) VALUES
(19, 'Khung lưới', 'khung-luoi', 'SKU00070', 'WXuk_c9ae41ac2e40cd1e9451 (1).jpg', '<p>Khung lưới</p>', 10, '2020-11-09 07:27:24', '2021-07-18 16:57:58'),
(20, 'Mũi In Cao su', 'mui-in-cao-su', 'SKU00071', 'IKhR_image_2020-11-09_211451.png', '<p>Mũi In Cao su</p>', 6, '2020-11-09 14:14:54', '2021-07-18 16:57:58'),
(21, 'Khuôn In sắt', 'khuon-in-sat', 'SKU00072', '1cHR_image_2020-11-09_211549.png', '<p>Khuôn In sắt</p>', 6, '2020-11-09 14:15:51', '2021-07-18 16:57:58'),
(22, 'Khuôn in thép', 'khuon-in-thep', 'SKU00072', 'FB6A_image_2020-11-09_211647.png', '<p>Khuôn in thép</p>', 6, '2020-11-09 14:16:50', '2021-07-18 16:57:58'),
(23, 'Chổi In', 'choi-in', 'SKU00073', 'QRIu_image_2020-11-09_211820.png', '<p>Chổi in có nhiều quy cách hình dáng và độ mềm, cứng khác nhau, chất liệu từ cao su lưu hóa và nhựa tổng hợp</p>', 6, '2020-11-09 14:18:22', '2021-07-18 16:57:58'),
(24, 'Dao Gạt Mực', 'dao-gat-muc', 'SKU00074', 'lX59_image_2020-11-09_211942.png', '<p>Dao gạt mực thường và loại xuất khẩu</p>', 6, '2020-11-09 14:19:45', '2021-07-18 16:57:58'),
(25, 'Giấy In Nhiệt (HOT STAMPING FOIL)', 'giay-in-nhiet-hot-stamping-foil-', 'SKU00075', 'zffb_image_2020-11-09_212117.png', '<p>Giấy In Nhiệt (HOT STAMPING FOIL)</p>', 6, '2020-11-09 14:21:19', '2021-07-18 16:57:58'),
(26, 'KEO PU (Thạch Cao)', 'keo-pu-thach-cao-', 'SKU00076', 'bf5y_image_2020-11-09_212202.png', '<p>KEO PU (Thạch Cao)</p>', 31, '2020-11-09 14:22:04', '2021-07-18 16:57:58'),
(27, 'Bàn In Tay', 'ban-in-tay', 'SKU00077', 'TKSn_image_2020-11-09_212250.png', '<p>Bàn in tay</p>', 16, '2020-11-09 14:22:52', '2021-07-18 16:57:58'),
(28, 'Keo Cảm Quang', 'keo-cam-quang', 'SKU00077', '4GcG_image_2020-11-09_212329.png', '<p>Keo cảm quang</p>', 31, '2020-11-09 14:23:31', '2021-07-18 16:57:58'),
(29, 'JIG IN', 'jig-in', 'SKU00079', 'XiQ4_sss.PNG', '<p>JIG IN</p>', 6, '2020-11-09 14:24:37', '2021-07-18 16:57:58'),
(30, 'Máy căng lưới', 'may-cang-luoi', 'SKU00080', '4MvF_image_2020-11-09_212612.png', '<p>Máy căng lưới</p>', 13, '2020-11-09 14:26:14', '2021-07-18 16:57:58'),
(31, 'Máy Chụp Bảng In', 'may-chup-bang-in', 'SKU00081', 'osZi_maychup.PNG', '<p>Máy Chụp Bảng In</p>', 13, '2020-11-09 14:27:52', '2021-07-18 16:57:58'),
(32, 'Máy In Tampo', 'may-in-tampo', 'SKU00082', 'pqVg_mayintampo.PNG', '<p>&nbsp;</p>\r\n\r\n<p>máy in tampo<br />\r\n&nbsp;</p>', 4, '2020-11-09 14:29:10', '2021-07-18 16:57:58'),
(33, 'Máy In Lưới Tự Động', 'may-in-luoi-tu-dong', 'SKU00083', '98M9_image_2020-11-09_213025.png', '<p>Máy in lưới tự động</p>', 18, '2020-11-09 14:30:30', '2021-07-18 16:57:58'),
(34, 'Lưới in', 'luoi-in', 'SKU00089', 'TARE_image_2020-11-09_213154.png', '<p>Công ty có nhiều loại lưới thương hiệu như lưới SEFAR,lưới vàng,lưới nhập khẩu thích hợp dùng trong in mực UV và mực 4 màu UV.</p>', 32, '2020-11-09 14:32:37', '2021-07-18 16:57:58'),
(35, 'Bảng In Lưới', 'bang-in-luoi', 'SKU00092', 'xPQ5_image_2020-11-09_213337.png', '<p><br />\r\nĐặc điểm và chức năng :<br />\r\n• Công ty sản xuất chuyên nghiệp các khung lưới bằng thép , nhôm không<br />\r\ngỉ,bên trong rỗng,chúng được đặc trưng có tính chống ăn mòn cao, dễ vệ<br />\r\nsinh.<br />\r\n• Có thể sản xuất nhiều loại khung kích thước to nhỏ hình dáng khác nhau</p>', 10, '2020-11-09 14:33:46', '2021-07-18 16:57:58'),
(36, 'Máy in lưới', 'may-in-luoi', 'SKU000100', '30bk_image_2020-11-10_085817.png', '<p>Máy in lưới</p>', 2, '2020-11-10 02:30:00', '2021-07-18 16:57:58'),
(37, 'HJD-E5 MÁY CĂNG LƯỚI THEO CƠ CHẾ MÁY ỐC VÍT', 'hjd-e5-may-cang-luoi-theo-co-che-may-oc-vit', 'SKU000111', 'qHPW_mayy.jpg', '<p>HJD-E5 MÁY CĂNG LƯỚI THEO CƠ CHẾ MÁY ỐC VÍT</p>', 13, '2020-11-10 04:22:22', '2021-07-18 16:57:58'),
(38, 'MÁY CHỤP BẢN - CĂNG LƯỚI', 'may-chup-ban-cang-luoi', 'SKU000112', 'Q5pp_aa.jpg', '<p>MÁY CHỤP BẢN - CĂNG LƯỚI</p>', 13, '2020-11-10 04:23:35', '2021-07-18 16:57:58'),
(39, 'Máy in tampon SYC 150-4', 'may-in-tampon-syc-150-4', 'SKU000113', '1WJb_mayintampoo.jpg', '<p>Máy in tampon SYC 150-4</p>', 4, '2020-11-10 04:25:23', '2021-07-18 16:57:58'),
(40, 'Máy in tampon tự động WN-132LE (dạng dốc mực 6 màu)', 'may-in-tampon-tu-dong-wn-132le-dang-doc-muc-6-mau-', 'SKU000113', 'c5S2_image_2020-11-10_105523.png', '<p>Máy in tampon tự động WN-132LE (dạng dốc mực 6 màu)</p>', 4, '2020-11-10 04:27:17', '2021-07-18 16:57:58'),
(41, 'Máy in tampon SYC 125-100.', 'may-in-tampon-syc-125-100-', 'SKU000114', 'ixyJ_image_2020-11-10_105632.png', '<p>Máy in tampon SYC 125-100.</p>', 4, '2020-11-10 04:28:15', '2021-07-18 16:57:58'),
(42, 'MÁY IN LƯỚI 60-90 - may-in-luoi-4060-5070-6090-80120', 'may-in-luoi-60-90-may-in-luoi-4060-5070-6090-80120', 'SKU000115', 'NvxS_image_2020-11-10_105930.png', '<p>MÁY IN LƯỚI 60-90 - may-in-luoi-4060-5070-6090-80120</p>', 2, '2020-11-10 04:31:12', '2021-07-18 16:57:58'),
(43, 'Máy in lưới tự động dạng tròn', 'may-in-luoi-tu-dong-dang-tron', 'SKU000116', 'A4TO_image_2020-11-10_110100.png', '<p>Máy in lưới tự động dạng tròn</p>', 2, '2020-11-10 04:32:44', '2021-07-18 16:57:58'),
(44, 'Máy in tự động trên băng tải', 'may-in-tu-dong-tren-bang-tai', 'SKU000117', '7YcO_image_2020-11-10_110157.png', '<p>Máy in tự động trên băng tải</p>', 2, '2020-11-10 04:33:39', '2021-07-18 16:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_07_045513_danhmuc', 1),
(2, '2020_11_07_072715_create_may_in_table', 2),
(3, '2020_11_07_073137_create_san_pham_in_table', 2),
(4, '2020_11_07_073924_create_thong_tin_cty_in_table', 2),
(5, '2020_11_07_074310_create_vat_lieu_in_table', 2),
(6, '2020_11_07_075659_create_users_table', 3),
(7, '2020_11_08_022446_create_thong_tin_website_table', 4),
(8, '2020_11_08_142530_add_noi_bat_to_danh_muc_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham_in`
--

CREATE TABLE `san_pham_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_lieu` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `san_pham_in`
--

INSERT INTO `san_pham_in` (`id`, `ten`, `ten_khong_dau`, `hinh_anh`, `mo_ta`, `vat_lieu`, `created_at`, `updated_at`) VALUES
(1, 'In logo trên vật liệu nhựa - 1', 'in-logo-tren-vat-lieu-nhua-1', 'SsSx_sp2.jpg', '<p>Chúng tôi nhận In logo trên vật liệu nhựa - 1</p>', 1, '2020-11-07 18:57:10', '2021-07-18 16:58:08'),
(2, 'In logo trên vật liệu nhựa - 2', 'in-logo-tren-vat-lieu-nhua-2', 'w3hZ_sp2.jpg', '<p>In logo trên vật liệu nhựa - 2</p>', 1, '2020-11-07 19:00:48', '2021-07-18 16:58:08'),
(3, 'In logo trên vật liệu sứ - 1', 'in-logo-tren-vat-lieu-su-1', '0h3m_sp5.jpg', '<p>In logo trên vật liệu sứ - 1</p>', 2, '2020-11-07 19:05:09', '2021-07-18 16:58:08'),
(4, 'In logo trên vật liệu sứ- 2', 'in-logo-tren-vat-lieu-su-2', '1Zxx_sp6.jpg', '<p>In logo trên vật liệu sứ- 2</p>', 2, '2020-11-07 19:05:31', '2021-07-18 16:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_cty`
--

CREATE TABLE `thong_tin_cty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_website`
--

CREATE TABLE `thong_tin_website` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thong_tin_website`
--

INSERT INTO `thong_tin_website` (`id`, `sdt`, `email`, `dia_chi`, `mo_ta`, `created_at`, `updated_at`, `zalo`) VALUES
(1, '0865.028.656', 'nguyenduycuong261286@gmail.com', 'Khu liền kề KCN Quế Võ, Thôn Hà Liễu, Xã Phương Liễu, Quế Võ, Bắc Ninh', 'Chúng tôi chuyên nhận in gia công trên mọi vật liệu và cung cấp các loại máy in, máy phụ trợ.', NULL, '2020-11-08 05:00:08', '0972922034');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$V8xdTtvQwnuF5b8v0tEOSeWoCmdIz8uEuiHa2IzoB84fa5R743m5S', NULL, '2020-11-07 19:15:14', '2020-11-07 19:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `vat_lieu_in`
--

CREATE TABLE `vat_lieu_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vat_lieu_in`
--

INSERT INTO `vat_lieu_in` (`id`, `ten`, `ten_khong_dau`, `created_at`, `updated_at`) VALUES
(1, 'Nhựa', 'nhua', '2020-11-07 08:46:25', '2021-07-18 16:58:16'),
(2, 'Sứ', 'su', '2020-11-07 08:46:30', '2021-07-18 16:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `ten`, `ten_khong_dau`, `link`, `created_at`, `updated_at`) VALUES
(5, 'Sản xuất in ấn tại nhà máy', 'san-xuat-in-an-tai-nha-may', 'https://youtu.be/ShV1ujK-6gE', '2020-11-10 09:25:58', '2020-11-10 09:25:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `may_in`
--
ALTER TABLE `may_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham_in`
--
ALTER TABLE `san_pham_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thong_tin_cty`
--
ALTER TABLE `thong_tin_cty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thong_tin_website`
--
ALTER TABLE `thong_tin_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vat_lieu_in`
--
ALTER TABLE `vat_lieu_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `may_in`
--
ALTER TABLE `may_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `san_pham_in`
--
ALTER TABLE `san_pham_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thong_tin_cty`
--
ALTER TABLE `thong_tin_cty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thong_tin_website`
--
ALTER TABLE `thong_tin_website`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vat_lieu_in`
--
ALTER TABLE `vat_lieu_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
