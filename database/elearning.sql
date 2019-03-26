-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2019 lúc 04:14 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `elearning`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Miễn Phí', NULL, NULL),
(2, 'Nghe-Nói', NULL, NULL),
(3, 'Đọc', NULL, NULL),
(4, 'Luyện Thi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_lesson` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `id_user`, `id_lesson`, `created_at`, `updated_at`) VALUES
(1, 'bài học rât hay', 3, 2, '2019-03-24 15:03:54', '2019-03-24 15:03:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lenght` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(12,2) NOT NULL,
  `promotion_price` double(12,2) NOT NULL,
  `course_rate` double(8,2) NOT NULL,
  `level` int(11) NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id`, `course_number`, `title`, `course_avatar`, `lenght`, `price`, `promotion_price`, `course_rate`, `level`, `id_category`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'N3-01', 'Luyện Thi N3', 'courses-img1.jpg', '10 buổi', 1500000.00, 0.00, 5.00, 1, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `id` int(10) UNSIGNED NOT NULL,
  `lesson_number` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_course` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`id`, `lesson_number`, `name`, `video`, `sumary`, `id_course`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bảng chữ cái', 'https://www.youtube.com/embed/VHaGHGOG-2o', 'Chúng ta cần thuộc lòng bảng chữ cái', 1, NULL, NULL),
(2, 2, 'Bài thứ nhất', 'https://www.youtube.com/embed/VHaGHGOG-2o', 'chúng ta phải hiểu đc ', 1, NULL, NULL),
(3, 3, 'Bài thứ 2', 'https://www.youtube.com/embed/VHaGHGOG-2o', 'Cần hiểu rõ vấn đề', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_17_143615_create_category_table', 1),
(4, '2019_03_17_143752_create_course_table', 2),
(5, '2019_03_17_145011_create_lesson_table', 3),
(6, '2019_03_17_170350_create_register_table', 3),
(7, '2019_03_17_145158_create_comment_table', 4),
(8, '2019_03_17_145552_create_user_course_comment_table', 4),
(9, '2019_03_17_145402_create_re_comment_table', 5),
(10, '2019_03_19_220018_create_feedback_table', 6),
(11, '2019_03_26_212631_create_ex1_table', 7),
(12, '2019_03_26_213621_create_ex2_table', 7),
(13, '2019_03_26_213655_create_ex3_table', 7),
(14, '2019_03_26_213711_create_ex4_table', 7),
(15, '2019_03_26_214225_create_submitex1_table', 7),
(16, '2019_03_26_214246_create_submitex2_table', 7),
(17, '2019_03_26_214259_create_submitex3_table', 7),
(18, '2019_03_26_214311_create_submitex4_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register`
--

CREATE TABLE `register` (
  `id` int(10) UNSIGNED NOT NULL,
  `register_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` double(12,2) NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_course` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `register`
--

INSERT INTO `register` (`id`, `register_number`, `totalprice`, `payment`, `id_user`, `id_course`, `created_at`, `updated_at`) VALUES
(1, '1', 1500000.00, NULL, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `re_comment`
--

CREATE TABLE `re_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_comment` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) DEFAULT '0',
  `exp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `role` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `phone_number`, `exp`, `avatar`, `infor`, `balance`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Đức', 'nguyenvanduc95bg@gmail.com', NULL, '$2y$10$VJxDgJv.bPwk3WtjCrBo/eA6vnZKmC9Ag.WRSmvwo8jgsYS5RThhy', 'Hà Nội', 0, 'N1 tiếng nhật\r\n- Có 10 năm kinh nghiệm giảng dạy.', 'avatar.jpg', NULL, '0', 2, NULL, '2019-03-19 15:03:12', '2019-03-19 15:03:12'),
(2, 'Nguyễn Văn Đức', 'ducbka@gmail.com', NULL, '$2y$10$VJxDgJv.bPwk3WtjCrBo/eA6vnZKmC9Ag.WRSmvwo8jgsYS5RThhy', 'Hà Nội', 0, NULL, 'avatar.jpg', NULL, '0', 0, NULL, '2019-03-19 15:04:24', '2019-03-19 15:04:24'),
(3, 'Nguyễn Văn Đức', 'ducbka225@gmail.com', NULL, '$2y$10$VJxDgJv.bPwk3WtjCrBo/eA6vnZKmC9Ag.WRSmvwo8jgsYS5RThhy', 'Hà Nội', 0, NULL, 'avatar.jpg', NULL, '0', 0, NULL, '2019-03-24 03:23:32', '2019-03-24 03:23:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_course_comment`
--

CREATE TABLE `user_course_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '5',
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_course` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_course_comment`
--

INSERT INTO `user_course_comment` (`id`, `content`, `rate`, `id_user`, `id_course`, `created_at`, `updated_at`) VALUES
(1, 'Khóa học rất hay', 5, 3, 1, '2019-03-24 03:57:47', '2019-03-24 03:57:47'),
(2, 'Khóa học rất bổ ich', 5, 3, 1, '2019-03-24 04:06:15', '2019-03-24 04:06:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id_user_foreign` (`id_user`),
  ADD KEY `comment_id_lesson_foreign` (`id_lesson`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id_category_foreign` (`id_category`),
  ADD KEY `course_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_id_course_foreign` (`id_course`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register_id_user_foreign` (`id_user`),
  ADD KEY `register_id_course_foreign` (`id_course`);

--
-- Chỉ mục cho bảng `re_comment`
--
ALTER TABLE `re_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `re_comment_id_user_foreign` (`id_user`),
  ADD KEY `re_comment_id_comment_foreign` (`id_comment`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_course_comment`
--
ALTER TABLE `user_course_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_course_comment_id_user_foreign` (`id_user`),
  ADD KEY `user_course_comment_id_course_foreign` (`id_course`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `re_comment`
--
ALTER TABLE `re_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user_course_comment`
--
ALTER TABLE `user_course_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_id_lesson_foreign` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_id_course_foreign` FOREIGN KEY (`id_course`) REFERENCES `course` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_id_course_foreign` FOREIGN KEY (`id_course`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `register_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `re_comment`
--
ALTER TABLE `re_comment`
  ADD CONSTRAINT `re_comment_id_comment_foreign` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `re_comment_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_course_comment`
--
ALTER TABLE `user_course_comment`
  ADD CONSTRAINT `user_course_comment_id_course_foreign` FOREIGN KEY (`id_course`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_course_comment_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
