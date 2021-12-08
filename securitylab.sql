-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Ara 2021, 19:42:04
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `securitylab`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `benkimim`
--

CREATE TABLE `benkimim` (
  `id` int(11) NOT NULL,
  `useragent` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `serveragent` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `benkimim`
--

INSERT INTO `benkimim` (`id`, `useragent`, `serveragent`) VALUES
(88, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'Apache/2.4.51 (Win64) OpenSSL/1.1.1l PHP/8.0.12'),
(89, '<script>alert(\"bb\")</script>', 'Apache/2.4.51 (Win64) OpenSSL/1.1.1l PHP/8.0.12'),
(90, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36 Edg/95.0.1020.40', 'Apache/2.4.51 (Win64) OpenSSL/1.1.1l PHP/8.0.12'),
(91, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'Apache/2.4.51 (Win64) OpenSSL/1.1.1l PHP/8.0.12'),
(92, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'Apache/2.4.51 (Win64) OpenSSL/1.1.1l PHP/8.0.12'),
(93, '<script>alert(1)</script>', 'Apache/2.4.51 (Win64) OpenSSL/1.1.1l PHP/8.0.12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`) VALUES
(1, 'Test Başlık', 'test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik test içerik '),
(2, 'makale başlık', 'makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik makale içerik ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkinda` text COLLATE utf8_turkish_ci NOT NULL,
  `gorsel` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `username`, `pass`, `hakkinda`, `gorsel`) VALUES
(6, 'test', 'test', 'teststs', '/2350828036img6.jpg'),
(12, 'deneme', 'test', 'idor test', '/2122031234module_table_top.png'),
(13, 'ahmet', '123', 'sdfsfddf', 'asddsd//2910027328img8.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ziyaret`
--

CREATE TABLE `ziyaret` (
  `id` int(11) NOT NULL,
  `author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `benkimim`
--
ALTER TABLE `benkimim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ziyaret`
--
ALTER TABLE `ziyaret`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `benkimim`
--
ALTER TABLE `benkimim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `ziyaret`
--
ALTER TABLE `ziyaret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
