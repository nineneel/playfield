-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Dec 04, 2022 at 04:23 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playfield`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint UNSIGNED NOT NULL,
  `user_one` bigint UNSIGNED NOT NULL,
  `user_two` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_products`
--

CREATE TABLE `detail_products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_products`
--

INSERT INTO `detail_products` (`id`, `product_id`, `body`, `contents`, `duration`, `donts`, `benefits`, `created_at`, `updated_at`) VALUES
(6, 6, '<div>There was something in the sky. What exactly was up there wasn\'t immediately clear. But there was definitely something in the sky and it was getting bigger and bigger.</div><div><br></div>', 'They needed to find a place to eat. The kids were beginning to get grumpy in the back seat and if they didn\'t find them food soon, it was just a matter of time before they were faced with a complete', '40 minutes', 'It seemed to be an impossible no-win situation where not everyone would be happy no matter where they decided to eat which in itself would lead to a meltdown. Yet a decision needed to be made and it needed to be made quickly.', 'Everyone in the car had a different opinion on where the best place to eat would be with nobody agreeing with the suggestions of the others.', '2022-12-04 15:39:56', '2022-12-04 15:39:56'),
(7, 7, '<div>Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.</div><div><br></div>', 'Terrance knew that sometimes it was simply best to stay out of it. He kept repeating this to himself as he watched the scene unfold. He knew that nothing', '30 minutes', 'good would come of him getting involved. It was far better for him to stay on the sidelines and observe. He kept yelling this to himself inside his head as he walked over to the couple and punched the man in the face.', 'good would come of him getting involved. It was far better for him to stay on the sidelines and observe. He kept yelling this to himself inside his head as he walked over to the couple and punched the man in the face.', '2022-12-04 15:48:40', '2022-12-04 15:58:12'),
(8, 8, '<div>He was after the truth. At least, that\'s what he told himself. He believed it, but any rational person on the outside could see he was lying to himself. It was apparent he was really only after his own truth that he\'d already decided and was after this truth because the facts didn\'t line up with the truth he wanted. So he continued to tell everyone he was after the truth oblivious to the real truth sitting right in front of him.</div><div><br></div>', 'and was after this truth because the facts didn\'t line up with the truth he wanted. So he continued to tell everyone he was after the truth oblivious to the real truth sitting right in front of him.', '10 minuts', 'and was after this truth because the facts didn\'t line up with the truth he wanted. So he continued to tell everyone he was after the truth oblivious to the real truth sitting right in front of him.', 'and was after this truth because the facts didn\'t line up with the truth he wanted. So he continued to tell everyone he was after the truth oblivious to the real truth sitting right in front of him.', '2022-12-04 15:49:30', '2022-12-04 15:49:30'),
(9, 9, '<div>She was in a hurry. Not the standard hurry when you\'re in a rush to get someplace, but a frantic hurry. The type of hurry where a few seconds could mean life or death. She raced down the road ignoring speed limits and weaving between cars. She was only a few minutes away when traffic came to a dead standstill on the road ahead.</div><div><br></div>', 'She was in a hurry. Not the standard hurry when you\'re in a rush to get someplace, but a frantic hurry. The type of hurry where a few seconds could mean life or death. She raced down the road ignoring speed limits and weaving between cars. She was only a few minutes away when traffic came to a dead standstill on the road ahead.', '35 minutes', 'She was in a hurry. Not the standard hurry when you\'re in a rush to get someplace, but a frantic hurry. The type of hurry where a few seconds could mean life or death. She raced down the road ignoring speed limits and weaving between cars. She was only a few minutes away when traffic came to a dead standstill on the road ahead.', 'She was in a hurry. Not the standard hurry when you\'re in a rush to get someplace, but a frantic hurry. The type of hurry where a few seconds could mean life or death. She raced down the road ignoring speed limits and weaving between cars. She was only a few minutes away when traffic came to a dead standstill on the road ahead.', '2022-12-04 15:50:39', '2022-12-04 15:50:39'),
(10, 10, '<div>Twenty seconds were all that was left and Richard could hear each one tick by. Fifteen seconds now remained and the panic began to fully set in. Ten seconds and he wasn\'t sure he had enough time. Five seconds, four, three, two, one...</div><div><br></div>', 'panic began to fully set in. Ten seconds and he wasn\'t sure he had enough time. Five seconds, four, three, two, one...', '60 minutes', 'Fifteen seconds now remained and the', 'en seconds now remained and the panic began to fully set in. Ten seconds and he wasn\'t sure he had enough time. Five seconds, four, three, two, one...', '2022-12-04 15:51:41', '2022-12-04 15:57:28'),
(11, 11, '<div>The computer wouldn\'t start. She banged on the side and tried again. Nothing. She lifted it up and dropped it to the table. Still nothing. She banged her closed fist against the top. It was at this moment she saw the irony of trying to fix the machine with violence.</div><div><br></div><div>It was at this moment she saw the irony of trying to fix the machine with violence.</div><div><br></div>', 'It was at this moment she saw the irony of trying to fix the machine with violence.', '70 minutes', 'It was at this moment she saw the irony of trying to fix the machine with violence.', '. It was at this moment she saw the irony of trying to fix the machine with violence.', '2022-12-04 15:52:48', '2022-12-04 15:59:09'),
(12, 12, '<div>here are different types of secrets. She had held onto plenty of them during her life, but this one was different. She found herself holding onto the worst type. It was the type of secret thatbut it could end up getting you killed if you did.</div>', 'but it could end up getting you killed if you did.', '50 minutes', 'but it could end up getting you killed if you did.', 'It was the type of secret thatbut it could end up getting you killed if you did.', '2022-12-04 15:53:47', '2022-12-04 15:53:47'),
(13, 13, '<div>Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway. That\'s just her character. She knows she doesn\'t have to, but she still will just to show you that she can. Doubt her more and she\'ll prove she can again. We all already know this and you will too.</div><div><br></div>', 'Here\'s the thing. She doesn\'t have anything to prove, but she is going to anyway.', '90 minutes', 'The house was located at the top of the hill at the end of a winding road. It wasn\'t obvious that the house was there, but everyone in town knew that it existed. They were just all too afraid to ever go and see it in person.', 'They were just all too afraid to ever go and see it in person.', '2022-12-04 15:55:21', '2022-12-04 15:55:21'),
(14, 14, '<div>All he wanted was a candy bar. It didn\'t seem like a difficult request to comprehend, but the clerk remained frozen and didn\'t seem to want to honor the request. It might have had something to do with the gun pointed at his face.</div><div><br></div>', 'All he wanted was a candy bar. It didn\'t seem like a difficult request to comprehend, but the clerk remained frozen and didn\'t seem to want to honor the request. It might have had something to do with the gun pointed at his face.', '100 minutes', 't was something about the trees. The way they swayed with the wind in unison. The way they shaded the area around them. The sounds of their leaves in the wind and the cr', 'The trees were making a statement that I just couldn\'t understand.', '2022-12-04 15:56:30', '2022-12-04 15:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `detail_users`
--

CREATE TABLE `detail_users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `likes` text COLLATE utf8mb4_unicode_ci,
  `dislikes` text COLLATE utf8mb4_unicode_ci,
  `allergies` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_users`
--

INSERT INTO `detail_users` (`id`, `user_id`, `gender`, `birthdate`, `likes`, `dislikes`, `allergies`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Male', '2018-12-12', 'Drawing, Sports', 'Bugs', 'Tree Nut', 'user-image/HAzbeJsvDnNBfOU8ME08J39rlaqPpHGITj6U3YLa.png', '2022-12-04 16:07:00', '2022-12-04 16:11:17'),
(2, 3, 'Female', '2017-01-24', 'Drawing, Reading', 'Sports', '-', 'user-image/WgDYnOqMh3ER3FaZHrMrPBpRkr2Yn4GsQ61a5lN2.png', '2022-12-04 16:11:54', '2022-12-04 16:12:11'),
(3, 4, 'Male', '2018-09-12', 'Sports', '-', 'Sesame', 'user-image/nEiqmvc8B7FpThuIB2pRWebc791gELw5GeRfJRby.png', '2022-12-04 16:12:57', '2022-12-04 16:13:07'),
(4, 5, 'Male', '2019-02-09', 'Dancing, Cooking', 'Medicine', 'Fish', 'user-image/Bhsrbu37HbdUizu3HExAYfKExW9088MNH0e5BiX1.png', '2022-12-04 16:13:34', '2022-12-04 16:13:44'),
(5, 6, 'Male', '2018-02-09', 'Sports', '-', 'Fish', 'user-image/y7gJP76ojjL9BIyzAPhdvTKloIx2grB70OkHvaCl.jpg', '2022-12-04 16:14:10', '2022-12-04 16:14:22'),
(6, 7, 'Male', '2016-01-10', 'Coloring', 'Sleeping', '-', 'user-image/s3mDZ4l6Qg0ywa3B0HS6b65MxlKRVK377cpnBTbj.png', '2022-12-04 16:14:44', '2022-12-04 16:14:55'),
(7, 8, 'Female', '2017-07-10', 'Sports', '-', 'Tree Nut, Sesame', 'user-image/tDGzibKcgPIJZhQsUPAmUFHGWt1u1RVfDWgRF4i8.jpg', '2022-12-04 16:15:22', '2022-12-04 16:15:34'),
(8, 9, 'Male', '2016-05-12', 'Sports', 'Bugs', 'Wheat', 'user-image/ptbbEAjwuR3S576zRMyHAARTOVQ9uhn2bkw9AAlJ.jpg', '2022-12-04 16:15:57', '2022-12-04 16:16:09'),
(9, 10, 'Male', '2015-03-03', 'Sports', 'Bugs', 'Wheat, Tree Nut', 'user-image/oSgABQmwoRoi6XwiFn19Vjz3AIjL2wt3adS7Wr0D.jpg', '2022-12-04 16:16:38', '2022-12-04 16:16:52'),
(10, 11, 'Male', '2018-12-12', '-', 'Being Dirty', '-', 'user-image/jSeWuBJuqTj8XCFhmKzNw4MYZFfqvcEwA1ZjdiJj.jpg', '2022-12-04 16:17:22', '2022-12-04 16:17:34'),
(11, 12, 'Male', '2019-05-06', 'Drawing, Coloring', 'Cleaning', '-', 'user-image/HGXQkAG39E2H1Y77aCHzoTpEeool4Wr1iigP4FgQ.jpg', '2022-12-04 16:17:59', '2022-12-04 16:18:11'),
(12, 13, 'Male', '2016-01-20', 'Sports', 'Cleaning', '-', 'user-image/WIUGLQY0HWeWuMJ16uFpgJL2ZqmdZkIxNwbKw7j3.jpg', '2022-12-04 16:18:38', '2022-12-04 16:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint UNSIGNED NOT NULL,
  `facility_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `facility_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Activity Room', 'facility-image/j4LmarGSJFV4sQDP0m6husfSW13nCaVRUKs7WSjm.jpg', '2022-12-04 16:00:12', '2022-12-04 16:00:12'),
(2, 'Reading Room', 'facility-image/N6wAXI3HUawwjbG0YhlIyCO3Aa23LxOOjDQDGXeH.jpg', '2022-12-04 16:00:42', '2022-12-04 16:00:42'),
(3, 'Changing Room', 'facility-image/SpJn0LdfZdnmESlvjYTjISRmhe8dwTymdhK9CX7H.jpg', '2022-12-04 16:00:52', '2022-12-04 16:00:52'),
(4, 'First Aid Kit', 'facility-image/bZGmkIPkQHRYfT1IayLaxzeBJUJCCyQ67qIpxTtZ.jpg', '2022-12-04 16:01:02', '2022-12-04 16:01:02'),
(5, 'Fish Pond', 'facility-image/7Jel5LPhraCQnM9pjigDn3tmcyEtzDnWcHrV2U7d.jpg', '2022-12-04 16:01:09', '2022-12-04 16:01:09'),
(6, 'Kitchen', 'facility-image/ikYLihbyiCAIE7BRttsO6Ebitgq6jTy62wIryZDW.jpg', '2022-12-04 16:01:16', '2022-12-04 16:01:16'),
(7, 'Parking Lot', 'facility-image/7vNDin2E0yBX6WQV1IfhoIAeWirpbSMojKlvI2W5.jpg', '2022-12-04 16:01:23', '2022-12-04 16:01:23'),
(8, 'Playground', 'facility-image/tC9Q6xUX8fSbnYB3QDpIUXhQJB5R0OyFqlUxFhqS.jpg', '2022-12-04 16:01:30', '2022-12-04 16:01:30'),
(9, 'Rooftop', 'facility-image/W98Uuw8eEANwtxiTXw2JRiqCpC9RavMDLDgMxN2I.jpg', '2022-12-04 16:01:39', '2022-12-04 16:01:39'),
(10, 'Snack and Drinks', 'facility-image/rc7IVoXgL0n4wc6zdnO2WMJtcuyM4ccA1l81EDHH.jpg', '2022-12-04 16:01:48', '2022-12-04 16:01:48'),
(11, 'Waiting Room', 'facility-image/cJQKkoIVIl9QOkINMF4qvV4vYt07enah9HfAxc8U.jpg', '2022-12-04 16:01:56', '2022-12-04 16:01:56'),
(12, 'Bathrooms', 'facility-image/0pBwNkAvkQGHxNld6VHFjzrxgedPc8AhEohJ9423.jpg', '2022-12-04 16:02:07', '2022-12-04 16:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `conversation_id` bigint UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_30_181938_create_facilities_table', 1),
(6, '2022_10_31_013210_create_photos_table', 1),
(7, '2022_11_01_122915_create_products_table', 1),
(8, '2022_11_01_131757_create_product_images_table', 1),
(9, '2022_11_01_132131_create_detail_products_table', 1),
(10, '2022_11_01_132335_create_tag_products_table', 1),
(11, '2022_11_01_162210_create_tags_table', 1),
(12, '2022_11_01_180332_create_product_tags_table', 1),
(13, '2022_11_08_145024_create_orders_table', 1),
(14, '2022_11_20_071053_create_product_users_table', 1),
(15, '2022_11_20_100929_create_detail_users_table', 1),
(16, '2022_11_30_025338_create_messages_table', 1),
(17, '2022_11_30_025421_create_conversations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `bookdate` date NOT NULL,
  `booktime` time NOT NULL,
  `paid_status` enum('not_paid','paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint UNSIGNED NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo_name`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', 'galery-image/kPLTf3xd220HHAws3kzm7qK3WovzmuidtDCE92Ar.png', '2022-12-04 16:02:33', '2022-12-04 16:02:33'),
(2, '2', 'galery-image/axWqlayjIuAxRwnsqGkTMWoBk5T0BFyoo24fxhkO.jpg', '2022-12-04 16:02:37', '2022-12-04 16:02:37'),
(3, '3', 'galery-image/tyMo3PJQ3CMYU8NGTZJaBuXb1viBLLMWehmoRUWt.jpg', '2022-12-04 16:02:46', '2022-12-04 16:02:46'),
(4, '4', 'galery-image/ri2Pm4PJ8rx55sLt4Ruxifznanf128uKa1Yr3EzB.jpg', '2022-12-04 16:02:51', '2022-12-04 16:02:51'),
(5, '5', 'galery-image/C81G7Bacs7KsAvGq9IUQK7nZp8qOXJRI4Ipf7sQx.jpg', '2022-12-04 16:02:56', '2022-12-04 16:02:56'),
(6, '6', 'galery-image/dbIKC5ovZzcwamWriCsUnzqPqi9yNwg61JxUcR7f.jpg', '2022-12-04 16:03:03', '2022-12-04 16:03:03'),
(7, '7', 'galery-image/LLHL8YSSVPTymGM5pHT98QTSxFBqnLzS8tOPZSV7.jpg', '2022-12-04 16:03:10', '2022-12-04 16:03:10'),
(8, '8', 'galery-image/Lcp8PRum4aaZS4odcqTsXE0LLQO8T9dgkHRS0dWh.png', '2022-12-04 16:03:16', '2022-12-04 16:03:16'),
(9, '9', 'galery-image/85YPSdmZXUxiMS8uKnZhACSf4o23FqvnezBdkYQW.png', '2022-12-04 16:03:21', '2022-12-04 16:03:21'),
(10, '13', 'galery-image/UuzZ2a5iC4HmxIescobElaeYKz9WdGE5jvKY1Pig.jpg', '2022-12-04 16:03:30', '2022-12-04 16:03:30'),
(11, '14', 'galery-image/gPO4QnhDcwGec1cF9Yvt9WEGtBxVsc66xRX5lL7g.jpg', '2022-12-04 16:03:36', '2022-12-04 16:03:36'),
(12, '15', 'galery-image/kNfvibFK6MqKbVXksq1aTLvhOdfBAyLGAUSPkUIw.jpg', '2022-12-04 16:04:09', '2022-12-04 16:04:09'),
(13, '17', 'galery-image/t3aXdB6tLFW62HHITc0Mk74FwfaFHDrdsX9EeYRf.jpg', '2022-12-04 16:04:15', '2022-12-04 16:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(12,0) NOT NULL,
  `star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `age`, `slogan`, `excerpt`, `description`, `price`, `star`, `created_at`, `updated_at`) VALUES
(6, 'FEEL IT', '1-3', 'Perfect for small hands to hold and pretend-play!', 'Stimulate their imaginations and develop their fine motor skills', '<div>They needed to find a place to eat. The kids were beginning to get grumpy in the back seat and if they didn\'t find them food soon, it was just a matter of time before they were faced with a complete meltdown.<br><br>Even knowing this, the solution wasn\'t easy. Everyone in the car had a different opinion on where the best place to eat would be with nobody agreeing with the suggestions of the others. It seemed to be an impossible no-win situation where not everyone would be happy no matter where they decided to eat which in itself would lead to a meltdown. Yet a decision needed to be made and it needed to be made quickly.</div>', '169000', '3.1', '2022-12-04 15:39:56', '2022-12-04 15:39:56'),
(7, 'TAMASYA', '2-6', 'Pack up, because it’s holiday time!', 'Elevate their capability in memorizing transportations and holiday places', '<div>Elevate their capability in memorizing transportations and holiday places&nbsp;<br><br></div><div>I love the feel of wood curls flying off the lathe as I begin to shape the log in front of me. The sound of scraping changes based on the wetness of the wood, the speed at which the lathe is turning, and the type of cut I am making. The smell and feel of wet wood being turned are unique. The water is sprayed out as I cut through the different layers of wood. A log can turn into anything one\'s imagination can think of with the right set of hands-on tools. I have those hands and imagination. I use all of my senses and intuition to create a beautiful object. That is why I enjoy turning wood.</div>', '149000', '3.1', '2022-12-04 15:48:40', '2022-12-04 15:58:12'),
(8, 'RAINBOW', '4-6', 'What color is it?', 'Great kit to get your little one familiar with sorting and matching their colors', '<div>Great kit to get your little one familiar with sorting and matching their colors,&nbsp;</div><div>Terrance knew that sometimes it was simply best to stay out of it. He kept repeating this to himself as he watched the scene unfold. He knew that nothing good would come of him getting involved. It was far better for him to stay on the sidelines and observe. He kept yelling this to himself inside his head as he walked over to the couple and punched the man in the face.</div>', '89000', '3.4', '2022-12-04 15:49:30', '2022-12-04 15:49:30'),
(9, 'HANDS UP!', '4-5', 'How many fingers am i holding up?', 'These learning kit can be used as a counting, colors, or matching game for your kids', '<div>These learning kit can be used as a counting, colors, or matching game for your kids. These learning kit can be used as a counting, colors, or matching game for your kids. These learning kit can be used as a counting, colors, or matching game for your kids. These learning kit can be used as a counting, colors, or matching game for your kids.These learning kit can be used as a counting, colors, or matching game for your kids<br><br><br>These learning kit can be used as a counting, colors, or matching game for your kids.These learning kit can be used as a counting, colors, or matching game for your kids .These learning kit can be used as a counting, colors, or matching game for your kids</div>', '89000', '4', '2022-12-04 15:50:38', '2022-12-04 15:50:38'),
(10, 'PEKERJAAN', '6-7', 'What do you want to be in the future?', 'Increase your kid’s knowledge about types of jobs that the world offers', '<div>One dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...<br><br>Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...</div><div><br></div>', '199000', '3.4', '2022-12-04 15:51:41', '2022-12-04 15:57:28'),
(11, 'HOW ARE YOU?', '6-7', 'On the scale of 1-10, how excited are you?', 'To help your child to learn how to recognize, understand, and respond to how they feel', '<div>Many people say that life isn\'t like a bed of roses. I beg to differ. I think that life is quite like a bed of roses. Just like life, a bed of roses looks pretty on the outside, but when you\'re in it, you find that it is nothing but thorns and pain. I myself have been pricked quite badly.<br><br>&nbsp;Just like life, a bed of roses looks pretty on the outside, but when you\'re in it, you find that it is nothing but thorns and pain. I myself have been pricked quite badly.</div><div><br></div>', '109000', '3.6', '2022-12-04 15:52:48', '2022-12-04 15:59:09'),
(12, 'DON’T MOVE!', '4-6', 'Do you find any clue about the suspect?', 'Show your kids how to solve crimes and investigate suspects with critical thinking', '<div>Show your kids how to solve crimes and investigate suspects with critical thinking. Show your kids how to solve crimes and investigate suspects with critical thinking.Show your kids how to solve crimes and investigate suspects with critical thinking.Show your kids how to solve crimes and investigate suspects with critical thinkingShow your kids how to solve crimes and investigate suspects with critical thinking.&nbsp;<br><br>Show your kids how to solve crimes and investigate suspects with critical thinking. Show your kids how to solve crimes and investigate suspects with critical thinking</div>', '229000', '3.1', '2022-12-04 15:53:47', '2022-12-04 15:53:47'),
(13, 'IS IT A PENGUIN?', '7-10', 'Where do penguins live?', 'Increase vocabulary about Arctic and Antarctic animals and lace cards to practice small hands', '<div>Increase vocabulary about Arctic and Antarctic animals and lace cards to practice small hands. Increase vocabulary about Arctic and Antarctic animals and lace cards to practice small hands.Increase vocabulary about Arctic and Antarctic animals and lace cards to practice small hands.v .<br>Increase vocabulary about Arctic and Antarctic animals and lace cards to practice small hands.Increase vocabulary about Arctic and Antarctic animals and lace cards to practice small hands<br><br><br>Increase vocabulary about Arctic and Antarctic animals and lace cards to practice small hands. Increase vocabulary about Arctic and Antarctic animals and lace cards to practice small hands</div>', '189000', '3.2', '2022-12-04 15:55:21', '2022-12-04 15:55:21'),
(14, 'BRUSH YOUR TEETH!', '6-7', 'I ate too much candies and now my teeth hurt!', 'Encourage an explorative mindset through learning basic anatomy of the human teeth', '<div>She had a terrible habit o comparing her life to others. She realized that their life experiences were completely different than her own and that she saw only what they wanted her to see, but that didn\'t matter. She still compared herself and yearned for what she thought they had and she didn\'t.<br><br></div><div>Out of another, I get a lovely view of the bay and a little private wharf belonging to the estate. There is a beautiful shaded lane that runs down there from the house. I always fancy I see people walking in these numerous paths and arbors, but John has cautioned me not to give way to fancy in the least. He says that with my imaginative power and habit of story-making a nervous weakness like mine is sure to lead to all manner of excited fancies and that I ought to use my will and good sense to check the tendency. So I try.</div><div><br></div>', '189000', '3.5', '2022-12-04 15:56:30', '2022-12-04 15:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(3, 6, 'product-images/lDyK4XqYdipo30jKGGCFFYl8Y7vHOa1EDgGzhxMw.png', '2022-12-04 15:39:56', '2022-12-04 15:39:56'),
(4, 6, 'product-images/yiDJqwjDe4V12bCM11BKtBnQz4jZpU34PmSCIu4A.png', '2022-12-04 15:39:56', '2022-12-04 15:39:56'),
(5, 6, 'product-images/hhBAGVcUyF1cuCctkCDklvS9QHpscESpjT2JC9tj.png', '2022-12-04 15:39:56', '2022-12-04 15:39:56'),
(9, 8, 'product-images/sGN8VAj9KAItG7ZRYH39U8oYYlNoX0G5QTuWoE8H.png', '2022-12-04 15:49:30', '2022-12-04 15:49:30'),
(10, 8, 'product-images/LDHLPUi8zbhKmNo0xvCPX91bxbtJoocR5KrAs90y.png', '2022-12-04 15:49:30', '2022-12-04 15:49:30'),
(11, 9, 'product-images/BUYP1kSz6bDHs7JA7sl6kAQAcfrt6jnoUOysYMu2.png', '2022-12-04 15:50:39', '2022-12-04 15:50:39'),
(12, 9, 'product-images/6zWaIdDHIsr6Qyks28zcE1Rl1PGf3PNest4XkHTQ.png', '2022-12-04 15:50:39', '2022-12-04 15:50:39'),
(13, 9, 'product-images/XNnAeKhBKn8SG8bfaRGU1ZBvGvRNff7Q01P3EZrH.png', '2022-12-04 15:50:39', '2022-12-04 15:50:39'),
(18, 12, 'product-images/9kYYzHqZqp0PvAHii2DvXN4oBYVoPEnqLMIYWvWM.png', '2022-12-04 15:53:47', '2022-12-04 15:53:47'),
(19, 13, 'product-images/z1UV4UyezMypfQxMSyyFUBFoCHtFcTL6hDR6JM0G.png', '2022-12-04 15:55:21', '2022-12-04 15:55:21'),
(20, 13, 'product-images/WK5YICAKB0ba8Pl5Mib4JhCNB9yKdGBxlvL0KyOO.png', '2022-12-04 15:55:21', '2022-12-04 15:55:21'),
(21, 14, 'product-images/rihU81gBv4O3vdFnV4sd42xUzzX40Wib8ZfiJ2iw.png', '2022-12-04 15:56:30', '2022-12-04 15:56:30'),
(22, 14, 'product-images/iLXr4qSYur01lFERrXxe32WcHCfP6PwU1zJaGr4s.png', '2022-12-04 15:56:30', '2022-12-04 15:56:30'),
(23, 10, 'product-images/pKRUHkAZEnTLkC98QCxY8pvszlag5PrzQrV9ib84.png', '2022-12-04 15:57:28', '2022-12-04 15:57:28'),
(24, 7, 'product-images/VtaFVSP7OJjFXzf3mpoJgY2uEHFgI0ptSGp7KCg8.png', '2022-12-04 15:58:12', '2022-12-04 15:58:12'),
(26, 11, 'product-images/ibO8OLpowsjW93iWfobO0xAIMX91fFMzpjNdKMlH.png', '2022-12-04 15:59:09', '2022-12-04 15:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `product_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`product_id`, `tag_id`) VALUES
(6, 1),
(7, 1),
(11, 1),
(13, 1),
(6, 2),
(7, 2),
(9, 2),
(12, 2),
(14, 2),
(8, 3),
(10, 3),
(11, 3),
(12, 3),
(14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_users`
--

CREATE TABLE `product_users` (
  `product_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Five Senses', 'This Learning Kit is expected to help build students awareness and understanding of the five senses. With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.', '2022-12-04 15:20:23', '2022-12-04 15:20:23'),
(2, 'Human body', 'This Learning Kit is expected to help build students awareness and understanding of the five senses. With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.', '2022-12-04 15:20:23', '2022-12-04 15:20:23'),
(3, 'Awareness', 'Awarness Tag.', '2022-12-04 15:20:23', '2022-12-04 15:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `tag_products`
--

CREATE TABLE `tag_products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','editor','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@email.com', 'admin', NULL, NULL, '2022-12-04 15:20:23', '2022-12-04 15:20:23'),
(2, 'Kepin Aprilius', '$2y$10$fQ0SQzXq5QdOpNgOedaBde13enYdKED8A.xl9MaD12GGMotLa48/i', 'kepin@email.com', 'user', NULL, NULL, '2022-12-04 16:07:00', '2022-12-04 16:07:00'),
(3, 'Lina', '$2y$10$HNhuJi/.FH35oZf.dc7WFOcM6XNO9oGJ9hFfQImmN3Rb8U9D2dW/y', 'lina@email.com', 'user', NULL, NULL, '2022-12-04 16:11:54', '2022-12-04 16:11:54'),
(4, 'Lala', '$2y$10$JZCYw7ifJwEvu9WNjRxMy.SmHgevNf1bxzZ7HVK6OucbhmrHVXmEa', 'lala@email.com', 'user', NULL, NULL, '2022-12-04 16:12:57', '2022-12-04 16:12:57'),
(5, 'Tejo', '$2y$10$VRf5IKEncbeaqSaUUt3LUuDuTPF4UmYI/ipEzcnq1WFSfhKAi70Oe', 'tejo@email.com', 'user', NULL, NULL, '2022-12-04 16:13:34', '2022-12-04 16:13:34'),
(6, 'Ben', '$2y$10$DXo5/30LQQrA3mMjIQ0prOGNwEomuMRejigWlz3EqhU3nXa5GkLOK', 'ben@email.com', 'user', NULL, NULL, '2022-12-04 16:14:10', '2022-12-04 16:14:10'),
(7, 'Ani', '$2y$10$jWtPapXh3eKpdtecu0bNleepk08gXAidaHNjcVqFP49epjzaGdtHW', 'ani@email.com', 'user', NULL, NULL, '2022-12-04 16:14:44', '2022-12-04 16:14:44'),
(8, 'kylie', '$2y$10$CEMdhJgnUl47w65/umxQI.C759Thz9NG2YUGysadXEU9YlHYjdqqy', 'kylie@email.com', 'user', NULL, NULL, '2022-12-04 16:15:22', '2022-12-04 16:15:22'),
(9, 'rey', '$2y$10$drwUspvCmKczBotwiLV04O81bNZInC9Q/4gn32fbLpEg1GwJDJvPK', 'rey@email.com', 'user', NULL, NULL, '2022-12-04 16:15:57', '2022-12-04 16:15:57'),
(10, 'mike', '$2y$10$1d.TLSPtTHnzPjtg64LAiOUp88qkHEKPvT1/iepk9o82uDelyQ8lq', 'mike@email.com', 'user', NULL, NULL, '2022-12-04 16:16:38', '2022-12-04 16:16:38'),
(11, 'nana', '$2y$10$g5uzpZfpYKsW4DnCezjcP.RTHBrLk26iGUZ0M/DqJw6H8LL.iwziG', 'nana@email.com', 'user', NULL, NULL, '2022-12-04 16:17:22', '2022-12-04 16:17:22'),
(12, 'Tania', '$2y$10$CR.eJor242IvRitZAlWDTeOpLXAa7EE90a25Cds8h1RQDQy.9NLjy', 'tania@email.com', 'user', NULL, NULL, '2022-12-04 16:17:59', '2022-12-04 16:17:59'),
(13, 'Jonathan', '$2y$10$Tg92nR1aujIvIN2lj7SLse7R9Eyvv2z3TY1MPUeoXW0z2cHdrrHjW', 'jonathan@email.com', 'user', NULL, NULL, '2022-12-04 16:18:38', '2022-12-04 16:18:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_products`
--
ALTER TABLE `detail_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_users`
--
ALTER TABLE `detail_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`product_id`,`tag_id`),
  ADD KEY `product_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `product_users`
--
ALTER TABLE `product_users`
  ADD PRIMARY KEY (`product_id`,`user_id`),
  ADD KEY `product_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_products`
--
ALTER TABLE `tag_products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_products`
--
ALTER TABLE `detail_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `detail_users`
--
ALTER TABLE `detail_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag_products`
--
ALTER TABLE `tag_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD CONSTRAINT `product_tags_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `product_users`
--
ALTER TABLE `product_users`
  ADD CONSTRAINT `product_users_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
