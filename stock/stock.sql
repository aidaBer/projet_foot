-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 06 Septembre 2016 à 01:34
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT '0',
  `brand_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'Gap', 1, 2),
(2, 'Forever 21', 1, 2),
(3, 'Gap', 1, 2),
(4, 'Forever 21', 1, 2),
(5, 'Adidas', 1, 2),
(6, 'Gap', 1, 2),
(7, 'Forever 21', 1, 2),
(8, 'Adidas', 1, 2),
(9, 'Gap', 1, 2),
(10, 'Forever 21', 1, 2),
(11, 'Adidas', 1, 1),
(12, 'Gap', 1, 1),
(13, 'Forever 21', 1, 1),
(14, 'TSE', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT '0',
  `categories_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'Sports ', 1, 2),
(2, 'Casual', 1, 2),
(3, 'Casual', 1, 2),
(4, 'Sport', 1, 2),
(5, 'Casual', 1, 2),
(6, 'Sport wear', 1, 2),
(7, 'Casual wear', 1, 1),
(8, 'Sports ', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`) VALUES
(1, '2016-07-15', 'John Doe', '9807867564', '2700.00', '351.00', '3051.00', '1000.00', '2051.00', '1000.00', '1051.00', 2, 2, 2),
(2, '2016-07-15', 'John Doe', '9808746573', '3400.00', '442.00', '3842.00', '500.00', '3342.00', '3342', '0', 2, 1, 2),
(3, '2016-07-16', 'John Doe', '9809876758', '3600.00', '468.00', '4068.00', '568.00', '3500.00', '3500', '0', 2, 1, 2),
(4, '2016-08-01', 'Indra', '19208130', '1200.00', '156.00', '1356.00', '1000.00', '356.00', '356', '0.00', 2, 1, 2),
(5, '2016-07-16', 'John Doe', '9808767689', '3600.00', '468.00', '4068.00', '500.00', '3568.00', '3568', '0', 2, 1, 1),
(6, '2016-09-04', 'tafa', '778092766', '1200.00', '156.00', '1356.00', '0', '1356.00', '0', '1356.00', 2, 1, 1),
(7, '2016-09-04', 'fata', 'dakar', '1200.00', '156.00', '1356.00', '23', '1333.00', '12', '1321.00', 1, 1, 1),
(8, '2016-09-05', 'tidiane', '771008989', '1200.00', '156.00', '1356.00', '0', '1356.00', '0', '1356.00', 2, 1, 1),
(9, '2016-09-05', 'Sophie', '772009090', '2400.00', '312.00', '2712.00', '0', '2712.00', '0', '2712.00', 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`) VALUES
(1, 1, 1, '1', '1500', '1500.00', 2),
(2, 1, 2, '1', '1200', '1200.00', 2),
(3, 2, 3, '2', '1200', '2400.00', 2),
(4, 2, 4, '1', '1000', '1000.00', 2),
(5, 3, 5, '2', '1200', '2400.00', 2),
(6, 3, 6, '1', '1200', '1200.00', 2),
(7, 4, 5, '1', '1200', '1200.00', 2),
(8, 5, 7, '2', '1200', '2400.00', 1),
(9, 5, 8, '1', '1200', '1200.00', 1),
(10, 6, 7, '1', '1200', '1200.00', 1),
(11, 7, 7, '1', '1200', '1200.00', 1),
(12, 8, 8, '8', '1200', '1200.00', 1),
(13, 9, 7, '2', '1200', '2400.00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `active`, `status`) VALUES
(1, 'Half pant', '../assests/images/stock/2847957892502c7200.jpg', 1, 2, '19', '1500', 2, 2),
(2, 'T-Shirt', '../assests/images/stock/163965789252551575.jpg', 2, 2, '9', '1200', 2, 2),
(3, 'Half Pant', '../assests/images/stock/13274578927924974b.jpg', 5, 3, '18', '1200', 2, 2),
(4, 'T-Shirt', '../assests/images/stock/12299578927ace94c5.jpg', 6, 3, '29', '1000', 2, 2),
(5, 'Half Pant', '../assests/images/stock/24937578929c13532e.jpg', 8, 5, '17', '1200', 2, 2),
(6, 'Polo T-Shirt', '../assests/images/stock/10222578929f733dbf.jpg', 9, 5, '29', '1200', 2, 2),
(7, 'Half Pant', '../assests/images/stock/1770257893463579bf.jpg', 11, 7, '24', '1200', 1, 1),
(8, 'Polo T-shirt', '../assests/images/stock/136715789347d1aea6.jpg', 12, 7, '1', '1200', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
(2, 'tafzer', 'tafzer', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Index pour la table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
