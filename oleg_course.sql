-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `courses` (`id`, `title`, `price`, `description`, `text`, `photo`, `teacher`, `youtube_link`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1,	'Коммуникация с клиентом',	120,	'<p>Если &laquo;клиент&raquo; для вас &ndash; всегда прав(ки) и договориться с ним &ndash; все равно, что без жилета переплыть океан &ndash; то этот вебинар для вас!<br />\r\nНа вебинаре мы разобьём клиентов на 5 типов, поговорим о подходе к каждому из них, научимся решать стрессовые ситуации, не теряя нервные клетки и баллы репутации, расскажем о нетипичных, а главное действенных секретах как онлайн, так и оффлайн коммуникации и многое-многое другое.</p>',	'<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',	'uploads/courses//678009235f78468f92a8500fee01cc18.jpg',	'Peter Parker',	'https://www.youtube.com/embed/37JPBLlyT4c',	'11:14',	'13:16',	'2021-06-25 06:11:37',	'2021-06-25 06:26:16'),
(2,	'Как гореть и не выгореть',	120,	'<p>Если вам сегодня, так же как и нам ещё недавно, не хочется вставать утром с кровати, хочется делать только &laquo;ничего&raquo; и, кажется, что когда-то до боли и слез обожаемое дело раздражает больше, чем соседи с вечным ремонтом &ndash; вы здесь не случайно.</p>',	'<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',	'uploads/courses//9ef4ab31e446b24ed8d2696079e4cb01.jpg',	'CRAIG DANIEL',	'https://www.youtube.com/embed/0Sbf5Y1sbRo',	'08:27',	'17:36',	'2021-06-25 06:27:54',	'2021-06-25 06:27:54'),
(3,	'Сам себе Beauty',	150,	'<p>Расскажем и покажем как выделиться среди толпы мастеров и салонов, правильно показывать свою экспертность и качество работ. После выполнения всех советов курса - клиенты гарантированы.</p>',	'<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',	'uploads/courses//75d336e88fd82b15912e9268f9f00c67.jpg',	'Mary Jane',	'https://www.youtube.com/embed/0Sbf5Y1sbRo',	'14:34',	'21:34',	'2021-06-25 06:30:06',	'2021-06-25 06:30:06'),
(4,	'Стратегия',	200,	'<p>Онлайн и офлайн курсы по разработке стратегии продвижения коммерческих профилей в Instagram и не только в нём.</p>',	'<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',	'uploads/courses//145556242769ce1a7a4296b2e19030e6.jpg',	'Peter Parker',	'https://www.youtube.com/embed/0Sbf5Y1sbRo',	'09:31',	'12:34',	'2021-06-25 06:31:01',	'2021-06-25 06:31:01'),
(5,	'Продакшн',	120,	'<p>Офлайн курс для тех, кто хочет научиться делать воспламеняющийся контент в любых условиях и при любых обстоятельствах.</p>',	'<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',	'uploads/courses//6b7695ae9fee3438d282083ea8168eb9.jpg',	'Peter Parker',	'https://www.youtube.com/embed/0Sbf5Y1sbRo',	'12:35',	'14:37',	'2021-06-25 06:32:02',	'2021-06-25 06:32:02'),
(6,	'Таргет',	180,	'<p>Как привлекать клиентов и не сливать бюджет - расскажет таргетолог нашего агентства, имеющий опыт работы с большим количеством ниш.</p>',	'<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',	'uploads/courses//704955e8c02b3f290838a827d47ea935.jpg',	'Mary Jane',	'https://www.youtube.com/embed/37JPBLlyT4c',	'11:36',	'21:38',	'2021-06-25 06:33:10',	'2021-06-25 06:33:10');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2021_06_25_012553_create_courses_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Evgenii',	'admin@admin.com',	NULL,	'$2y$10$SUKH4oHh20rUAH0x4Od90utTjekH7bUUjCzdeE7FzCOSAJGcYTiUK',	NULL,	'2021-06-25 06:10:54',	'2021-06-25 06:10:54');

-- 2021-06-25 06:58:50
