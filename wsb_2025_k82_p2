-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 06, 2026 at 04:12 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsb_2025_k82_p2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_06_195835_add_two_factor_columns_to_users_table', 1),
(5, '2025_10_06_195929_create_personal_access_tokens_table', 1),
(6, '2025_12_29_224301_add_role_to_users_table', 1),
(7, '2025_12_30_095524_create_products_table', 1),
(8, '2025_12_30_095525_create_orders_table', 1),
(9, '2025_12_30_095526_create_order_items_table', 1),
(10, '2025_12_30_095527_add_status_to_orders_table', 1),
(11, '2026_01_01_142550_default_products_examples', 2),
(12, '2026_01_01_184652_add_customer_data_to_orders_table', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address_line` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `notes` text DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `full_name`, `email`, `phone`, `address_line`, `postal_code`, `city`, `notes`, `total_price`, `created_at`, `updated_at`, `status`) VALUES
(2, 2, 'Marcin Ratajczak', 'marcinratajczak1911@gmail.com', '725403327', 'Bułgarska 5/7', '60-320', 'Poznań', 'test', 339.98, '2026-01-01 19:27:38', '2026-01-01 19:27:38', 'przygotowane');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(4, 2, 1, 1, 320.00, '2026-01-01 19:27:38', '2026-01-01 19:27:38'),
(5, 2, 3, 2, 9.99, '2026-01-01 19:27:38', '2026-01-01 19:27:38');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('marcinratajczak1911@gmail.com', '$2y$12$kJSY992JmlgDwAgWq9RD7Ot3B4txUTuefeSCGD/QuR1b16P7P/UpW', '2026-01-04 16:49:56');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Zasilacz Gigabyte P850GM 850W', 'Certyfikat sprawności: 80 Plus Gold\r\nMoc: 850W\r\nModularne okablowanie: W pełni modularne\r\nŚrednica wentylatora: 120 mm\r\nStandard/Format: ATX', 320.00, 10, 'https://images.morele.net/i1064/7323111_2_i1064.jpg', '2025-12-30 07:31:48', '2026-01-04 19:50:28'),
(2, 'GeForce RTX 5060 Ti Python III 16GB GDDR7 DLSS4', 'Seria karty graficznej: GeForce RTX z serii 50\r\nObsługa Ray tracingu: Tak\r\nTechnika upscalingu: Nvidia DLSS 4\r\nUkład graficzny: GeForce RTX 5060 Ti\r\nRodzaj złącza: PCIe 5.0 x16\r\nPamięć: 16 GB\r\nRodzaj pamięci: GDDR7\r\nSzyna pamięci: 128 bit\r\nPrzepustowość pamięci: 448 GB/s\r\nEfektywne taktowanie pamięci: 14000 MHz', 2099.00, 4, 'https://allegro.stati.pl/AllegroIMG/PRODUCENCI/GIGABYTE/GV-N506TEAGLE-OC-16GD/karta-graficzna.jpg', '2025-12-30 07:34:35', '2025-12-30 07:34:35'),
(3, 'Kabel SATA - SATA SAVIO GAK-04 0.3 m', 'Złącza: SATA (7-pin) żeński (kątowy) - SATA (7-pin) żeński\r\nTyp: SATA III\r\nDługość [m]: 0.3\r\nZłącza kątowe: Jedno\r\nEkranowanie: Nie\r\nZatrzaski: Tak\r\nKolor: Czarny', 9.99, 47, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR6lWkgRtQFaK7RKZkVAHbAgd3AHSFLbGwDs87KISIa1WlOSjXhiSHoJvdToVmo5dS6Ayy2DLBCmqNgK5PjPRhLQJsTKFBzJ3ApVsDM-KOqJlgWk05HjHk8De0-6aUhWOsflpoGOA&usqp=CAc', '2025-12-30 07:36:13', '2026-01-01 19:27:38'),
(4, 'ASRock B450 PRO4 R2.0', 'Rodzaj chłodzenia chipsetu płyty głównej: Pasywny\r\nObsługiwane rodziny procesorów: AMD Ryzen™\r\nGniazdo procesora: Socket AM4\r\nChipset: AMD B450\r\nArchitektura procesora: Zen 3 (4 generacja), Zen 2 (3 generacja), Zen+ (2 generacja)\r\nTyp obsługiwanej pamięci: DDR4-3200 MHz, DDR4-2933 MHz,DDR4-2666 MHz ,DDR4-2400 MHz ,DDR4-2133 MHz\r\nLiczba banków pamięci: 4 x DIMM\r\nMaksymalna wielkość pamięci RAM: 128 GB\r\nArchitektura pamięci: Dual-channel\r\nWewnętrzne złącza: SATA III (6 Gb/s) - 6 szt.\r\nM.2 PCIe NVMe 3.0 x4 - 1 szt.\r\nM.2 PCIe NVMe 3.0 x2 / SATA - 1 szt.\r\nPCIe 3.0 x16 - 1 szt.\r\nPCIe 3.0 x16 (tryb x4) - 1 szt.\r\nPCIe 2.0 x1 - 4 szt.\r\nUSB 3.2 Gen. 1 - 1 szt.\r\nUSB 2.0 - 2 szt.\r\nZłącze ARGB 3 pin - 1 szt.\r\nZłącze RGB 4 pin - 1 szt.\r\nZłącze COM - 1 szt.\r\nFront Panel Audio\r\nZłącze wentylatora CPU 4 pin - 1 szt.\r\nZłącze wentylatora SYS/CHA - 3 szt.\r\nZłącze pompy AIO - 1 szt.\r\nZłącze zasilania 8 pin - 1 szt.\r\nZłącze zasilania 24 pin - 1 szt.\r\nZłącze modułu TPM - 1 szt.\r\nZewnętrzne złącza:\r\nVGA (D-Sub) - 1 szt.\r\nHDMI - 1 szt.\r\nDisplayPort - 1 szt.\r\nRJ45 (LAN) 1 Gbps - 1 szt.\r\nUSB Type-C - 1 szt.\r\nUSB 3.2 Gen. 1 - 4 szt.\r\nUSB 3.2 Gen. 2 - 1 szt.\r\nUSB 2.0 - 2 szt.\r\nPS/2 klawiatura/mysz - 1 szt.\r\nAudio jack - 3 szt.\r\nObsługa RAID, RAID 0, RAID 1, RAID 10\r\nObsługa wielu kart graficznych: AMD CrossFireX\r\nObsługa układów graficznych w procesorach: Tak\r\nUkład audio: Realtek ALC892\r\nŁączność bezprzewodowa: Nie\r\nFormat: ATX\r\nSzerokość: 224 mm\r\nWysokość: 305 mm', 299.90, 6, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcROGtRRDBZOHN7yJCj8QZn-Wiqhvy3ky__Un8RlsCAzjSqnMBVZLdHnMktwoRWfmc9HSzbG1MUKH5n72BRGa-ofgbCRTUjHgJgzpmF3ttHImBaGxTZ21fD3&usqp=CAc', '2025-12-30 07:40:00', '2025-12-30 08:34:30'),
(5, 'Dysk SSD - GOODRAM 1TB 2,5\\\" SATA SSD CX400', 'Pojemność: 1024 GB\r\nFormat: 2.5\"\r\nInterfejs: 2,5\" SATA\r\nPrędkość odczytu (maksymalna): 550 MB/s\r\nPrędkość zapisu (maksymalna): 500 MB/s\r\nNiezawodność MTBF: 2 000 000 godz.', 349.00, 15, 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/9/pr_2020_9_9_11_23_41_185_02.jpg', '2025-12-30 07:42:01', '2025-12-30 07:42:01'),
(6, 'Pamięć RAM Kingston Fury Beast, DDR5, 16 GB, 6000MHz', 'Typ pamięci: DDR5\r\nNiskoprofilowe: Tak\r\nPojemność łączna: 16 GB\r\nLiczba modułów: 2\r\nCzęstotliwość pracy [MHz]: 6000\r\nOpóźnienie: CL36\r\nNapięcie [V]: 1.35', 7777.00, 50, 'https://images.morele.net/i1064/12775277_3_i1064.jpg', '2025-12-30 07:44:31', '2025-12-30 07:44:31');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1vgt7dzQNrum9ljoPHvzEF4CCkSTRiJvMuheLRN3', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZXBaVllrOFhmWHNIT1EzRGFkOVRuUlRQMnV4dG1qclVaUG5tVzVseCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1767562223),
('CEAuQOsM7EguKhcbObQDrP6OPgLdpSWWFz1UkBpA', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ1MwZENkeU1SemhoakpPRExuekNnbmJhdm1RZ3c5T08yYkRFRXFnUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1767708043);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$sN.iSyHlqv1GWTbXPLCNbOelaSGSxErQyEbcEg7oPVVmTUlcqqpb2', NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-01 12:22:19', '2026-01-01 12:22:19', 'admin'),
(2, 'User', 'user@gmail.com', NULL, '$2y$12$upjv3nulrc2s6FkHkq/HsugU7FfSZI9GJj7t1TwBqZJ3ty7SIXjXi', NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-01 12:22:50', '2026-01-01 12:22:50', 'user'),
(5, 'Moderator', 'moderator@gmail.com', NULL, '$2y$12$dXGyUOAAkia60CUpmLe1AO2BANmECPC6UWw9AwiQN3akP/a6gZB/m', NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-04 18:14:17', '2026-01-04 18:14:17', 'moderator');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeksy dla tabeli `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeksy dla tabeli `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indeksy dla tabeli `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
