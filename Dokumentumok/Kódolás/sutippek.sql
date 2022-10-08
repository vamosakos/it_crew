-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Okt 08. 03:12
-- Kiszolgáló verziója: 10.4.25-MariaDB
-- PHP verzió: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `sutippek`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `favorites`
--

CREATE TABLE `favorites` (
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `favorites`
--

INSERT INTO `favorites` (`user_id`, `recipe_id`) VALUES
(1, 2),
(2, 2),
(1, 3),
(1, 4),
(2, 4),
(3, 4),
(3, 3),
(3, 2),
(3, 5);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `details` varchar(4000) NOT NULL,
  `picture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `details`, `picture`) VALUES
(2, 'Sütemény1', 'só, tojás, cukor', ''),
(3, 'Sütemény2', 'só, tojás, cukor', ''),
(4, 'Sütemény3', 'só, tojás, cukor', ''),
(5, 'Sütemény4', 'só, tojás, cukor', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `email`) VALUES
(1, 'teszt1', 'Teszt Elek1', '202cb962ac59075b964b07152d234b70', 'teszt1@gmail.com'),
(2, 'teszt2', 'Teszt Elek2', '202cb962ac59075b964b07152d234b70', 'teszt2@gmail.com'),
(3, 'teszt3', 'Teszt Elek3', '202cb962ac59075b964b07152d234b70', 'teszt3@gmail.com');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `favorites`
--
ALTER TABLE `favorites`
  ADD KEY `const1` (`user_id`),
  ADD KEY `const2` (`recipe_id`);

--
-- A tábla indexei `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `const1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `const2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
