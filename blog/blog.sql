-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Şub 2023, 13:23:12
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `id` int(11) NOT NULL,
  `egitimBaslik` text NOT NULL,
  `egitimYazi` text NOT NULL,
  `tarih` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`id`, `egitimBaslik`, `egitimYazi`, `tarih`) VALUES
(1, 'Lise Hayatım', 'Hacı Sevim Yıldız - 1 Mesleki ve Teknik Anadolu Lisesi', '2018-2022'),
(11, 'Staj Dönemim', '<a href=\"https://elvanajans.com\">Elvan Ajans - Kreatif & Dijital Reklam Ajansı</a>', '2021-2022');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `hakkimdaYazi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `hakkimdaYazi`) VALUES
(1, 'Selam! Ben Yusuf. Bursa\'\'nın İnegöl ilçesinde doğdum ve büyüdüm. Eğitimimi, Hacı Sevim Yıldız -1 Mesleki ve Teknik Anadolu Lisesinde \'Web Programlama\' dalında eğitimimi aldım ve yazılım bilimine giriş yaptım.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `yas` int(11) NOT NULL,
  `ulke` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `iletisimAd` varchar(255) NOT NULL,
  `iletisimSoyad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `yas`, `ulke`, `telefon`, `email`, `iletisimAd`, `iletisimSoyad`) VALUES
(1, 18, 'Türkiye', '+90 538 861 18 35', 'yusufbalaban03@gmail.com', 'Yusuf', 'Balaban');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisimform`
--

CREATE TABLE `iletisimform` (
  `iletisimFormID` int(11) NOT NULL,
  `iletisimFormAd` varchar(255) NOT NULL,
  `iletisimFormMail` varchar(255) NOT NULL,
  `iletisimFormMesaj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisimform`
--

INSERT INTO `iletisimform` (`iletisimFormID`, `iletisimFormAd`, `iletisimFormMail`, `iletisimFormMesaj`) VALUES
(2, 'yusuf balaban', 'yusufbalaban03@gmail.com', 'yusuf balaban');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisisel`
--

CREATE TABLE `kisisel` (
  `kisiselID` int(11) NOT NULL,
  `kisiselYazi` varchar(255) NOT NULL,
  `kisiselAdi` varchar(255) NOT NULL,
  `kisiselSoyadi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kisisel`
--

INSERT INTO `kisisel` (`kisiselID`, `kisiselYazi`, `kisiselAdi`, `kisiselSoyadi`) VALUES
(1, 'Merakım gereği küçüklüğümden beri bilgisayara olan ilgim oyunlarla kalmayıp bir seviye daha atlayarak yazılım bilimine ulaştım. Sonrasında okulumu ve dalımı seçerek en doğru kararı verdim.', 'Ahmet', 'Yılmaz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `cvindir` varchar(255) NOT NULL,
  `anasayfa` varchar(255) NOT NULL,
  `hakkimda` varchar(255) NOT NULL,
  `egitim` varchar(255) NOT NULL,
  `portfolio` varchar(255) NOT NULL,
  `iletisim` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `cvindir`, `anasayfa`, `hakkimda`, `egitim`, `portfolio`, `iletisim`, `cv`) VALUES
(1, 'Cv İndir', 'Anasayfa', 'Hakkımda', 'Eğitim', 'Portfolio', 'İletişim', 'cv.pdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozellikler`
--

CREATE TABLE `ozellikler` (
  `ozellikID` int(11) NOT NULL,
  `ozellikAdi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ozellikler`
--

INSERT INTO `ozellikler` (`ozellikID`, `ozellikAdi`) VALUES
(3, 'Web Tasarım'),
(4, 'Yazılım ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `portfoliaphoto`
--

CREATE TABLE `portfoliaphoto` (
  `photoID` int(11) NOT NULL,
  `photoBaglanti` text NOT NULL,
  `photoUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `portfoliaphoto`
--

INSERT INTO `portfoliaphoto` (`photoID`, `photoBaglanti`, `photoUrl`) VALUES
(1, 'mia3.png', 'https://github.com/ysfblbn/Mia-Koltuk'),
(11, 'Adsız tasarım (2).png', 'https://github.com/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersMail` varchar(255) NOT NULL,
  `usersSifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`usersID`, `usersMail`, `usersSifre`) VALUES
(1, 'admin', 'admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisimform`
--
ALTER TABLE `iletisimform`
  ADD PRIMARY KEY (`iletisimFormID`);

--
-- Tablo için indeksler `kisisel`
--
ALTER TABLE `kisisel`
  ADD PRIMARY KEY (`kisiselID`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ozellikler`
--
ALTER TABLE `ozellikler`
  ADD PRIMARY KEY (`ozellikID`);

--
-- Tablo için indeksler `portfoliaphoto`
--
ALTER TABLE `portfoliaphoto`
  ADD PRIMARY KEY (`photoID`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `iletisimform`
--
ALTER TABLE `iletisimform`
  MODIFY `iletisimFormID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `kisisel`
--
ALTER TABLE `kisisel`
  MODIFY `kisiselID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ozellikler`
--
ALTER TABLE `ozellikler`
  MODIFY `ozellikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `portfoliaphoto`
--
ALTER TABLE `portfoliaphoto`
  MODIFY `photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
