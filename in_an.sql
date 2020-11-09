-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2020 lúc 04:00 PM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `in_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_muc_cha` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `noi_bat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten`, `danh_muc_cha`, `created_at`, `updated_at`, `noi_bat`) VALUES
(1, 'Các loại thiết bị gia công chế bản', -1, '2020-11-07 01:43:39', '2020-11-09 02:49:36', 1),
(2, 'Các loại máy in lưới', -1, '2020-11-07 01:44:23', '2020-11-09 02:49:54', 1),
(3, 'Thiết bị máy móc ép nhũ / Chuyển nhiệt', -1, '2020-11-07 01:44:32', '2020-11-07 01:44:32', 0),
(4, 'Máy in Tampo (pad)', -1, '2020-11-07 01:44:39', '2020-11-09 02:50:11', 1),
(5, 'Các loại máy sấy', -1, '2020-11-07 01:44:44', '2020-11-07 01:44:44', 0),
(6, 'Vật tư in đặc chủng', -1, '2020-11-07 01:44:51', '2020-11-09 02:48:44', 1),
(7, 'Thiết bị tự động in vải', -1, '2020-11-07 01:45:01', '2020-11-07 01:45:01', 0),
(8, 'Thiết bị liên quan', -1, '2020-11-07 01:45:07', '2020-11-07 01:45:07', 0),
(9, 'Các loại máy khác', -1, '2020-11-07 01:45:15', '2020-11-07 01:45:15', 0),
(10, 'Khung in lưới / Bản in tampo', 1, '2020-11-07 01:49:39', '2020-11-09 04:36:39', 0),
(12, 'Bản in silicon / Bản in điện hóa', 1, '2020-11-07 07:25:12', '2020-11-07 07:25:12', 0),
(13, 'Máy căng lưới / Máy chụp bản', 1, '2020-11-07 07:25:33', '2020-11-07 07:25:33', 0),
(14, 'Máy sấy bản in', 1, '2020-11-07 07:25:53', '2020-11-07 07:25:53', 0),
(15, 'Film', 1, '2020-11-07 07:25:58', '2020-11-07 07:25:58', 0),
(16, 'Bàn in tay', 2, '2020-11-07 07:26:42', '2020-11-07 07:26:42', 0),
(17, 'Bàn in lưới bán tự động', 2, '2020-11-07 07:27:02', '2020-11-07 07:27:02', 0),
(18, 'Bàn in lưới toàn tự động', 2, '2020-11-07 07:27:25', '2020-11-07 07:27:25', 0),
(19, 'Máy ép nhủ bán tự động phẳng', 3, '2020-11-07 07:27:47', '2020-11-07 07:27:47', 0),
(20, 'Máy ép nhủ bán tự động nhiều vị trí', 3, '2020-11-07 07:28:11', '2020-11-07 07:28:11', 0),
(21, 'Máy in lưới chuyên in bật lửa', 2, '2020-11-08 08:12:40', '2020-11-08 08:12:40', 0),
(22, 'Máy ép nhũ bán tự động tròn phẳng kép', 3, '2020-11-08 08:13:09', '2020-11-08 08:13:09', 0),
(23, 'Máy ép nhũ toàn tự động', 3, '2020-11-08 08:13:21', '2020-11-08 08:13:21', 0),
(24, 'Máy in chuyển nhiệt bán tự động', 3, '2020-11-08 08:13:30', '2020-11-08 08:13:30', 0),
(25, 'Máy chuyển nhiệt toàn tự động', 3, '2020-11-08 08:13:37', '2020-11-08 08:13:37', 0),
(26, 'Các loại máy in Tampo (pad) bán tự động', 4, '2020-11-08 08:13:47', '2020-11-08 08:13:47', 0),
(27, 'Các loại máy in tampo (pad) bán tự động băng tải', 4, '2020-11-08 08:14:22', '2020-11-08 08:14:22', 0),
(28, 'Các loại máy in Tampo (pad) toàn tự động', 4, '2020-11-08 08:15:02', '2020-11-08 08:15:02', 0),
(29, 'Máy in tampo chuyên in bật lửa', 4, '2020-11-08 08:15:18', '2020-11-08 08:15:18', 0),
(30, 'Mực in', 6, '2020-11-08 08:15:46', '2020-11-08 08:15:46', 0),
(31, 'Dung môi / keo chụp bản', 6, '2020-11-08 08:15:55', '2020-11-08 08:15:55', 0),
(32, 'Lưới (lụa)', 6, '2020-11-08 08:16:06', '2020-11-08 08:16:06', 0),
(33, 'Vật tư tiêu hao in Tampo', 6, '2020-11-08 08:16:14', '2020-11-08 08:16:14', 0),
(34, 'Thiết bị phụ tùng', 6, '2020-11-08 08:16:36', '2020-11-08 08:16:36', 0),
(35, 'Sản phẩm khác', 6, '2020-11-08 08:16:45', '2020-11-08 08:16:45', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `may_in`
--

CREATE TABLE `may_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san_pham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_muc` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `may_in`
--

INSERT INTO `may_in` (`id`, `ten`, `ma_san_pham`, `hinh_anh`, `mo_ta`, `danh_muc`, `created_at`, `updated_at`) VALUES
(2, 'Dao gạt mực 3 lớp (máy in)', 'SKU00053', 'KZrE_8f1bbc9d247ec7209e6f.jpg', '<p>Dao gạt mực 3 lớp (máy in)</p>', 6, '2020-11-08 18:32:32', '2020-11-08 18:32:32'),
(3, 'Nước rửa lưới', 'SKU00051', 'fBNv_e5ad7933e1d0028e5bc1.jpg', '<p>Nước rửa lưới</p>', 6, '2020-11-08 18:34:41', '2020-11-08 18:34:41'),
(4, 'Mực in', 'SKU00038', 'ltHq_666b55f6cd152e4b7704.jpg', '<p>Mực in</p>', 6, '2020-11-08 18:35:37', '2020-11-08 18:35:37'),
(5, 'Mực in', 'SKU00037', 'pMl9_663e6abaf25911074848.jpg', '<p>Mực in</p>', 6, '2020-11-08 18:36:41', '2020-11-08 18:36:41'),
(6, 'Tủ sấy bản', 'SKU00159', 'EzxY_screenshot1596165746.png', '<h1>Tủ sấy bản</h1>', 1, '2020-11-08 18:46:20', '2020-11-08 18:46:20'),
(7, 'Máy căng lưới', 'SKU00158', 'lxQe_screenshot1596165758.png', '<p>Máy căng lưới</p>', 1, '2020-11-08 18:47:34', '2020-11-08 18:47:34'),
(8, 'Máy chụp bản polyme', 'SKU00157', 'cPLU_screenshot1596165734.png', '<h1>Máy chụp bản polyme</h1>', 1, '2020-11-08 18:48:16', '2020-11-08 18:48:16'),
(9, 'Máy chụp bản', 'SKU00156', '2phT_screenshot1596165710.png', '<h1>Máy chụp bản</h1>', 1, '2020-11-08 18:49:09', '2020-11-08 18:49:09'),
(10, 'Máy in tampo 4 màu độc lập', 'SKU00146', 'a3Z0_screenshot1596102984.png', '<p>&nbsp;Máy in tampo 4 màu độc lập</p>', 4, '2020-11-08 18:52:34', '2020-11-08 18:52:34'),
(11, 'Máy in tampo toàn tự động', 'SKU00145', 'TGR5_screenshot1596102614.png', '<p>Máy in tampo toàn tự động</p>', 4, '2020-11-08 18:53:28', '2020-11-08 18:53:28'),
(12, 'Máy in tampo 4 màu bán tự động băng tải tròn', 'MR-S4/C', 'olsJ_screenshot1596102137.png', '<p>&nbsp;Máy in tampo 4 màu bán tự động băng tải tròn</p>', 4, '2020-11-08 18:54:17', '2020-11-08 18:54:17'),
(13, 'Máy in tampo 6 màu bán tự động băng tải tròn', 'MR-P6/C', 'xzRt_screenshot1596102152.png', '<p>Máy in tampo 6 màu bán tự động băng tải tròn</p>', 1, '2020-11-08 18:56:13', '2020-11-08 18:56:13'),
(14, 'Bàn in thủ công', 'SKU00089', 'n0t1_screenshot1596170574.png', '<p>Bàn in thủ công</p>', 2, '2020-11-09 02:35:48', '2020-11-09 02:35:48'),
(15, 'Máy in lưới bán tự động', 'SKU00017', 'uyGr_may-in-luoi-phan-ban-tu-dong.png', '<p>Máy in lưới bán tự động</p>', 2, '2020-11-09 02:36:41', '2020-11-09 02:36:41'),
(16, 'Máy in lưới bán tự động', 'SKU00018', 'spJh_may-in-luoi-phang-ban-tu-dong.png', '<p>Máy in lưới bán tự động</p>', 2, '2020-11-09 02:41:22', '2020-11-09 02:41:22'),
(17, 'Máy in lưới bán tự động', 'SKU00099', '7v8g_may-in-lua-phang-ban-tu-dong.png', '<p>Máy in lưới bán tự động</p>', 2, '2020-11-09 02:42:28', '2020-11-09 02:42:28'),
(18, 'Máy in Tampo 8 màu đa chức năng', 'SKU00109', '5BUk_may-in-tampo-da-chuc-nang-8-mau.png', '<p>Máy in Tampo 8 màu đa chức năng</p>', 4, '2020-11-09 04:48:03', '2020-11-09 04:48:03'),
(19, 'Khung lưới', 'SKU00070', 'WXuk_c9ae41ac2e40cd1e9451 (1).jpg', '<p>Khung lưới</p>', 10, '2020-11-09 07:27:24', '2020-11-09 07:27:24'),
(20, 'Mũi In Cao su', 'SKU00071', 'IKhR_image_2020-11-09_211451.png', '<p>Mũi In Cao su</p>', 6, '2020-11-09 14:14:54', '2020-11-09 14:14:54'),
(21, 'Khuôn In sắt', 'SKU00072', '1cHR_image_2020-11-09_211549.png', '<p>Khuôn In sắt</p>', 6, '2020-11-09 14:15:51', '2020-11-09 14:15:51'),
(22, 'Khuôn in thép', 'SKU00072', 'FB6A_image_2020-11-09_211647.png', '<p>Khuôn in thép</p>', 6, '2020-11-09 14:16:50', '2020-11-09 14:16:50'),
(23, 'Chổi In', 'SKU00073', 'QRIu_image_2020-11-09_211820.png', '<p>Chổi in có nhiều quy cách hình dáng và độ mềm, cứng khác nhau, chất liệu từ cao su lưu hóa và nhựa tổng hợp</p>', 6, '2020-11-09 14:18:22', '2020-11-09 14:18:22'),
(24, 'Dao Gạt Mực', 'SKU00074', 'lX59_image_2020-11-09_211942.png', '<p>Dao gạt mực thường và loại xuất khẩu</p>', 6, '2020-11-09 14:19:45', '2020-11-09 14:19:45'),
(25, 'Giấy In Nhiệt (HOT STAMPING FOIL)', 'SKU00075', 'zffb_image_2020-11-09_212117.png', '<p>Giấy In Nhiệt (HOT STAMPING FOIL)</p>', 6, '2020-11-09 14:21:19', '2020-11-09 14:21:19'),
(26, 'KEO PU (Thạch Cao)', 'SKU00076', 'bf5y_image_2020-11-09_212202.png', '<p>KEO PU (Thạch Cao)</p>', 31, '2020-11-09 14:22:04', '2020-11-09 14:22:04'),
(27, 'Bàn In Tay', 'SKU00077', 'TKSn_image_2020-11-09_212250.png', '<p>Bàn in tay</p>', 16, '2020-11-09 14:22:52', '2020-11-09 14:22:52'),
(28, 'Keo Cảm Quang', 'SKU00077', '4GcG_image_2020-11-09_212329.png', '<p>Keo cảm quang</p>', 31, '2020-11-09 14:23:31', '2020-11-09 14:23:31'),
(29, 'JIG IN', 'SKU00079', 'XiQ4_sss.PNG', '<p>JIG IN</p>', 6, '2020-11-09 14:24:37', '2020-11-09 14:24:37'),
(30, 'Máy căng lưới', 'SKU00080', '4MvF_image_2020-11-09_212612.png', '<p>Máy căng lưới</p>', 13, '2020-11-09 14:26:14', '2020-11-09 14:26:49'),
(31, 'Máy Chụp Bảng In', 'SKU00081', 'osZi_maychup.PNG', '<p>Máy Chụp Bảng In</p>', 13, '2020-11-09 14:27:52', '2020-11-09 14:27:52'),
(32, 'Máy In Tampo', 'SKU00082', 'pqVg_mayintampo.PNG', '<p>&nbsp;</p>\r\n\r\n<p>máy in tampo<br />\r\n&nbsp;</p>', 4, '2020-11-09 14:29:10', '2020-11-09 14:29:10'),
(33, 'Máy In Lưới Tự Động', 'SKU00083', '98M9_image_2020-11-09_213025.png', '<p>Máy in lưới tự động</p>', 18, '2020-11-09 14:30:30', '2020-11-09 14:30:30'),
(34, 'Lưới in', 'SKU00089', 'TARE_image_2020-11-09_213154.png', '<p>Công ty có nhiều loại lưới thương hiệu như lưới SEFAR,lưới vàng,lưới nhập khẩu thích hợp dùng trong in mực UV và mực 4 màu UV.</p>', 32, '2020-11-09 14:32:37', '2020-11-09 14:32:37'),
(35, 'Bảng In Lưới', 'SKU00092', 'xPQ5_image_2020-11-09_213337.png', '<p><br />\r\nĐặc điểm và chức năng :<br />\r\n• Công ty sản xuất chuyên nghiệp các khung lưới bằng thép , nhôm không<br />\r\ngỉ,bên trong rỗng,chúng được đặc trưng có tính chống ăn mòn cao, dễ vệ<br />\r\nsinh.<br />\r\n• Có thể sản xuất nhiều loại khung kích thước to nhỏ hình dáng khác nhau</p>', 10, '2020-11-09 14:33:46', '2020-11-09 14:33:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
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
-- Cấu trúc bảng cho bảng `san_pham_in`
--

CREATE TABLE `san_pham_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_lieu` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham_in`
--

INSERT INTO `san_pham_in` (`id`, `ten`, `hinh_anh`, `mo_ta`, `vat_lieu`, `created_at`, `updated_at`) VALUES
(1, 'In logo trên vật liệu nhựa - 1', 'SsSx_sp2.jpg', '<p>Chúng tôi nhận In logo trên vật liệu nhựa - 1</p>', 1, '2020-11-07 18:57:10', '2020-11-07 19:03:49'),
(2, 'In logo trên vật liệu nhựa - 2', 'w3hZ_sp2.jpg', '<p>In logo trên vật liệu nhựa - 2</p>', 1, '2020-11-07 19:00:48', '2020-11-07 19:00:48'),
(3, 'In logo trên vật liệu sứ - 1', '0h3m_sp5.jpg', '<p>In logo trên vật liệu sứ - 1</p>', 2, '2020-11-07 19:05:09', '2020-11-07 19:05:09'),
(4, 'In logo trên vật liệu sứ- 2', '1Zxx_sp6.jpg', '<p>In logo trên vật liệu sứ- 2</p>', 2, '2020-11-07 19:05:31', '2020-11-07 19:05:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_cty`
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
-- Cấu trúc bảng cho bảng `thong_tin_website`
--

CREATE TABLE `thong_tin_website` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_website`
--

INSERT INTO `thong_tin_website` (`id`, `sdt`, `email`, `dia_chi`, `mo_ta`, `created_at`, `updated_at`) VALUES
(1, '0865.028.656', 'nguyenduycuong261286@gmail.com', 'Khu liền kề KCN Quế Võ, Thôn Hà Liễu, Xã Phương Liễu, Quế Võ, Bắc Ninh', 'Chúng tôi chuyên nhận in gia công trên mọi vật liệu và cung cấp các loại máy in, máy phụ trợ.', NULL, '2020-11-08 05:00:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$V8xdTtvQwnuF5b8v0tEOSeWoCmdIz8uEuiHa2IzoB84fa5R743m5S', NULL, '2020-11-07 19:15:14', '2020-11-07 19:16:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vat_lieu_in`
--

CREATE TABLE `vat_lieu_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vat_lieu_in`
--

INSERT INTO `vat_lieu_in` (`id`, `ten`, `created_at`, `updated_at`) VALUES
(1, 'Nhựa', '2020-11-07 08:46:25', '2020-11-07 08:47:03'),
(2, 'Sứ', '2020-11-07 08:46:30', '2020-11-07 08:46:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `may_in`
--
ALTER TABLE `may_in`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham_in`
--
ALTER TABLE `san_pham_in`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_cty`
--
ALTER TABLE `thong_tin_cty`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_website`
--
ALTER TABLE `thong_tin_website`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vat_lieu_in`
--
ALTER TABLE `vat_lieu_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `may_in`
--
ALTER TABLE `may_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `san_pham_in`
--
ALTER TABLE `san_pham_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thong_tin_cty`
--
ALTER TABLE `thong_tin_cty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thong_tin_website`
--
ALTER TABLE `thong_tin_website`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vat_lieu_in`
--
ALTER TABLE `vat_lieu_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
