-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 19, 2019 lúc 01:18 AM
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
-- Cơ sở dữ liệu: `e_learning`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'Miễn Phí', NULL, NULL),
(2, 'Nghe-Nói', NULL, NULL),
(3, 'Đọc', NULL, NULL),
(4, 'Viết', NULL, NULL),
(5, 'Luyện Thi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_User` int(10) UNSIGNED NOT NULL,
  `ID_Lesson` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `ID` int(10) UNSIGNED NOT NULL,
  `CourseNumber` int(11) NOT NULL,
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Course_Avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Teacher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lenght` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` double(8,2) NOT NULL,
  `Promotion_Price` double(8,2) NOT NULL,
  `Course_Rate` double(8,2) NOT NULL,
  `Level` int(11) NOT NULL,
  `ID_Category` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`ID`, `CourseNumber`, `Title`, `Course_Avatar`, `Teacher`, `Lenght`, `Price`, `Promotion_Price`, `Course_Rate`, `Level`, `ID_Category`, `created_at`, `updated_at`) VALUES
(1, 123, '123', '123', '123', '123', 123.00, 123.00, 123.00, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `ID` int(10) UNSIGNED NOT NULL,
  `LessonNumber` int(11) NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sumary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Course` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`ID`, `LessonNumber`, `Name`, `Video`, `Sumary`, `ID_Course`, `created_at`, `updated_at`) VALUES
(1, 123, '123', '123', '123', 1, NULL, NULL);

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
(4, '2019_03_17_143752_create_course_table', 1),
(5, '2019_03_17_145011_create_lesson_table', 1),
(6, '2019_03_17_145158_create_comment_table', 2),
(7, '2019_03_17_145402_create_re_comment_table', 3),
(8, '2019_03_17_145552_create_user_course_comment_table', 4),
(9, '2019_03_17_170350_create_register_table', 5);

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
  `ID` int(10) UNSIGNED NOT NULL,
  `Register_Number` int(11) NOT NULL,
  `TotalPrice` double(8,2) NOT NULL,
  `Payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_User` int(10) UNSIGNED NOT NULL,
  `ID_Course` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `re_comment`
--

CREATE TABLE `re_comment` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_User` int(10) UNSIGNED NOT NULL,
  `ID_Comment` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Infor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Role` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`, `Address`, `Exp`, `Avatar`, `Infor`, `Balance`, `Role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Nguyễn Văn Đức', 'nguyenvanduc95bg@gmail.com', '$2y$10$j2DmYLTHALNnq.lpePDnHuBLpiyqXnv8H.F18FifBwTe3ilQrpYOC', 'Hà Nội', NULL, NULL, NULL, '0', 0, NULL, '2019-03-18 14:12:08', '2019-03-18 14:12:08'),
(4, 'Nguyễn Văn Đức', 'ducbka@gmail.com', '$2y$10$6yFrQuMi49sYXP14oLv2mO34l7NyKDzybHa8/FmLXw0hMSV.HrV/2', 'Hà Nội', NULL, NULL, NULL, '0', 0, NULL, '2019-03-18 14:57:56', '2019-03-18 14:57:56'),
(5, 'Nguyễn Văn Đức', 'ducbka225@gmail.com', '$2y$10$8lWhBL60RWt26ibJDH6qyuR6aB78dBScgvBLs.RtL/.vGVdJri9my', 'Hà Nội', NULL, NULL, NULL, '0', 0, NULL, '2019-03-18 15:24:24', '2019-03-18 15:24:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_course_comment`
--

CREATE TABLE `user_course_comment` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rate` int(11) NOT NULL,
  `ID_User` int(10) UNSIGNED NOT NULL,
  `ID_Course` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `category_name_unique` (`Name`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `comment_id_user_foreign` (`ID_User`),
  ADD KEY `comment_id_lesson_foreign` (`ID_Lesson`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_id_category_foreign` (`ID_Category`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `lesson_id_course_foreign` (`ID_Course`);

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `register_id_user_foreign` (`ID_User`),
  ADD KEY `register_id_course_foreign` (`ID_Course`);

--
-- Chỉ mục cho bảng `re_comment`
--
ALTER TABLE `re_comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `re_comment_id_user_foreign` (`ID_User`),
  ADD KEY `re_comment_id_comment_foreign` (`ID_Comment`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `users_email_unique` (`Email`);

--
-- Chỉ mục cho bảng `user_course_comment`
--
ALTER TABLE `user_course_comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_course_comment_id_user_foreign` (`ID_User`),
  ADD KEY `user_course_comment_id_course_foreign` (`ID_Course`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lesson`
--
ALTER TABLE `lesson`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `re_comment`
--
ALTER TABLE `re_comment`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user_course_comment`
--
ALTER TABLE `user_course_comment`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_id_lesson_foreign` FOREIGN KEY (`ID_Lesson`) REFERENCES `lesson` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_id_user_foreign` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_id_category_foreign` FOREIGN KEY (`ID_Category`) REFERENCES `category` (`ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_id_course_foreign` FOREIGN KEY (`ID_Course`) REFERENCES `course` (`ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_id_course_foreign` FOREIGN KEY (`ID_Course`) REFERENCES `course` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `register_id_user_foreign` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `re_comment`
--
ALTER TABLE `re_comment`
  ADD CONSTRAINT `re_comment_id_comment_foreign` FOREIGN KEY (`ID_Comment`) REFERENCES `comment` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `re_comment_id_user_foreign` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_course_comment`
--
ALTER TABLE `user_course_comment`
  ADD CONSTRAINT `user_course_comment_id_course_foreign` FOREIGN KEY (`ID_Course`) REFERENCES `course` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_course_comment_id_user_foreign` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
