
CREATE TABLE `site` 
(
  `id` varchar (11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `URL` varchar(80) NOT NULL DEFAULT '0',
  `description` varchar(225) NOT NULL DEFAULT '0'
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `site` (`id`, `nom`, `URL`, `description`) VALUES
('11A0', 'Cuisine','www.macuisine.com' ,'Dans ce site, apprenez a cuisiner avec amour' ),
('12B1', 'Sport', 'www.monsport.com', 'Tout connaitre sur le monde du sport'),
('13C1', 'Dance', 'www.madance.com','Apprendre a avoir le rythme dans la peau'),
('14D0', 'Education','www.moneducation.com', 'etudiez sans soucis'),
('15E8', 'Blog','www.monblog.com', 'Ici je vous mettrais mes astuces beaute'),
('16F8', 'Equipement','www.monequipement.com', 'Venez equiper votre maison avec notre aide'),
('17G9', 'Voitures','mesvoitures.com', 'Achetez, louez ou vendez une voiture'),
('18H6', 'Maison', 'mamaison.com', 'Vous avez ici, un large choix de maison');
