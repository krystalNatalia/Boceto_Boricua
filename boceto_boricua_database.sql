-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 07:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boceto_boricua_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasproducts`
--

CREATE TABLE `hasproducts` (
  `ProductID` varchar(10) NOT NULL,
  `OrderNumber` int(10) NOT NULL,
  `Amount` int(10) DEFAULT NULL,
  `Price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `OrderNumber` int(10) NOT NULL,
  `Price` int(20) DEFAULT NULL,
  `SalesTax` int(20) DEFAULT NULL,
  `OrderDate` date DEFAULT NULL,
  `OrderTime` time DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `TrackingNumber` int(10) DEFAULT NULL,
  `ShippingMethod` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `placesorder`
--

CREATE TABLE `placesorder` (
  `OrderNumber` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `OrderStatus` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` varchar(10) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Dimensions` varchar(30) DEFAULT NULL,
  `Image` varchar(1024) DEFAULT NULL,
  `Category` varchar(25) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Title`, `Description`, `Dimensions`, `Image`, `Category`, `Price`, `Stock`) VALUES
('116-489-79', 'The Lighthouse', 'Pellentesque vehicula nunc non lorem efficitur interdum. Ut vulputate faucibus massa in eleifend. Nulla mollis, risus ac convallis pharetra, ante quam pretium enim, quis pharetra felis ante non est.', '1200 x 600', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/oil/The Lighthouse.jpg', 'oil', 35, 3),
('122-753-63', 'Doctor Who', 'Donec id odio imperdiet, pharetra ex in, sollicitudin magna. Morbi convallis nec quam in pretium. Praesent ac justo egestas, sollicitudin sapien ac, tincidunt eros.', '1000 x 1000', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/digital painting/Doctor Who.jpg', 'digital painting', 40, 2),
('205-374-87', 'Rivertown', 'Cras iaculis dictum quam, et ultrices elit vehicula at. Maecenas vehicula ex a mi ultrices porttitor. Curabitur pharetra ipsum libero.', '1000 x 550', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/oil/Rivertown.jpg', 'oil', 30, 3),
('444-614-10', 'Ink Eagle', 'njladg/uqkf/du diawdhioa dheidwoa diwiod odywiqyd oqaiw oyi', '1000 x 550', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/ink/Ink Eagle.jpg', 'ink', 30, 3),
('478-719-72', 'Dream World', 'Sed tempus lorem quam, a porttitor leo pulvinar scelerisque. Donec condimentum porttitor dui, vitae euismod velit. Etiam in diam quis felis congue vehicula.', '1000 x 550', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/digital painting/Dream World.jpg', 'digital painting', 35, 1),
('486-812-00', 'The Jellyfish', 'Phasellus id gravida est. Fusce eu porttitor tortor. Cras pulvinar, elit et faucibus pretium, quam erat dignissim quam, ut posuere augue velit eget ante.', '1200 x 600', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/acrylic/The Jellyfish.jpg', 'acrylic', 20, 3),
('498-482-37', 'The Tiger', 'ndbajkdbk daud gua dui aud duaud gw e kitty.', '1000 x 550', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/ink/The Tiger.jpg', 'ink', 30, 3),
('513-537-19', 'The Boat', 'jsabdjkasdsabdbsabdkakj', '1200 x 600', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/ink/The Boat.jpg', 'ink', 25, 4),
('546-048-99', 'Sleeping Knowledge', 'Donec sed commodo ante. Integer imperdiet efficitur lacus, a ultrices mauris posuere a. Fusce imperdiet metus eget justo egestas, rhoncus gravida eros mattis. Praesent laoreet risus nec nunc posuer.', '1000 x 1000', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/digital painting/Sleeping Knowledge.jpg', 'digital painting', 40, 2),
('563-826-48', 'El Caballo', 'Vestibulum auctor, nulla cursus blandit convallis, libero ex suscipit ex, non ultricies metus ante et augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '1200 x 600', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/acrylic/El Caballo.jpg', 'acrylic', 30, 1),
('665-974-59', 'La Cara', ' Proin vel massa sed mauris accumsan posuere nec at ipsum. Nullam sodales nec lorem sed luctus. Phasellus et tincidunt magna, sed rutrum nisl.', '1000 x 1000', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/acrylic/La Cara.jpg', 'acrylic', 15, 2),
('788-474-40', 'Burning Forest', 'Pellentesque placerat ac risus vel vestibulum. Praesent lacinia, tortor vel interdum facilisis, ante arcu luctus neque, non porta elit massa eu diam.', '1000 x 1000', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/oil/Burning Forest.jpg', 'oil', 45, 1),
('805-561-96', 'Alice', 'Cras quis lacus elit. Morbi ac semper odio. Donec quis malesuada lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;', '1000 x 500', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/digital painting/Alice.jpg', 'digital painting', 35, 2),
('818-460-85', 'Paisaje', 'Nam eget condimentum lacus, vel vulputate justo. Phasellus sollicitudin dictum felis ac facilisis. Ut imperdiet convallis neque.', '1000 x 550', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/acrylic/Paisaje.jpg', 'acrylic', 15, 2),
('822-135-96', 'The Countryside', 'Cras iaculis dictum quam, et ultrices elit vehicula at. Maecenas vehicula ex a mi ultrices porttitor. Curabitur pharetra ipsum libero.', '1000 x 500', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/oil/The Countryside.jpg', 'oil', 35, 2),
('896-189-60', 'The Rooster', 'sjadgugugau autgudauduawdg adua dad dtya dyauy duawud ', '1000 x 1000', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/ink/The Rooster.jpg', 'ink', 30, 2),
('925-416-12', 'Chinese Landscape', 'bdwjdkagkf.duak.daguk', '1000 x 550', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/ink/Chinese Landscape.jpg', 'ink', 25, 2),
('948-367-99', 'Nebula', 'Aenean efficitur consectetur mi id dictum. Vivamus tortor purus, lobortis a libero vel, pulvinar ornare dolor. Nulla tristique at nibh a pellentesque.', '1000 x 500', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/oil/Nebula.jpg', 'oil', 15, 1),
('956-132-30', 'El Atardecer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida, lectus sed pharetra auctor, risus ligula pharetra tellus, in pellentesque ligula lectus fringilla eros.', '1000 x 500', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/acrylic/El Atardecer.jpg', 'acrylic', 25, 2),
('994-918-70', 'Maiden Of The Sea', 'Duis erat orci, luctus eget massa at, luctus malesuada mi. Phasellus eget luctus lacus, vitae pretium nisl. Donec ac lobortis quam. Curabitur id orci et ipsum eleifend dictum vel non sapien.', '1000 x 1000', 'C:\\xampp\\htdocs\\PhpSites\\Boceto_Boricua_V3\\common/Images/digital painting/Maiden Of The Sea.jpg', 'digital painting', 35, 3);

-- --------------------------------------------------------

--
-- Table structure for table `userbillingaddress`
--

CREATE TABLE `userbillingaddress` (
  `IndexID` int(5) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `StreetName` varchar(30) DEFAULT NULL,
  `CityName` varchar(20) DEFAULT NULL,
  `StateName` varchar(20) DEFAULT NULL,
  `Zipcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usershippingaddress`
--

CREATE TABLE `usershippingaddress` (
  `IndexID` int(5) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `StreetName` varchar(40) DEFAULT NULL,
  `CityName` varchar(40) DEFAULT NULL,
  `Zipcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `Username` varchar(30) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `MiddleName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Town` varchar(20) DEFAULT NULL,
  `PaymentMethod` varchar(20) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`Username`, `FirstName`, `MiddleName`, `LastName`, `DateOfBirth`, `Town`, `PaymentMethod`, `Email`, `Password`) VALUES
('CyberKing10', 'Michael', 'Alexander', 'Ten', '1995-05-23', 'Camuy', 'Paypal', 'Transhuman@nexus.com', 'transhuman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasproducts`
--
ALTER TABLE `hasproducts`
  ADD PRIMARY KEY (`ProductID`,`OrderNumber`),
  ADD KEY `OrderNumber` (`OrderNumber`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`OrderNumber`);

--
-- Indexes for table `placesorder`
--
ALTER TABLE `placesorder`
  ADD PRIMARY KEY (`OrderNumber`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `userbillingaddress`
--
ALTER TABLE `userbillingaddress`
  ADD PRIMARY KEY (`IndexID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `usershippingaddress`
--
ALTER TABLE `usershippingaddress`
  ADD PRIMARY KEY (`IndexID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userbillingaddress`
--
ALTER TABLE `userbillingaddress`
  MODIFY `IndexID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usershippingaddress`
--
ALTER TABLE `usershippingaddress`
  MODIFY `IndexID` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasproducts`
--
ALTER TABLE `hasproducts`
  ADD CONSTRAINT `hasproducts_ibfk_1` FOREIGN KEY (`OrderNumber`) REFERENCES `ordertable` (`OrderNumber`),
  ADD CONSTRAINT `hasproducts_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `placesorder`
--
ALTER TABLE `placesorder`
  ADD CONSTRAINT `placesorder_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usertable` (`Username`),
  ADD CONSTRAINT `placesorder_ibfk_2` FOREIGN KEY (`OrderNumber`) REFERENCES `ordertable` (`OrderNumber`),
  ADD CONSTRAINT `placesorder_ibfk_3` FOREIGN KEY (`OrderNumber`) REFERENCES `ordertable` (`OrderNumber`);

--
-- Constraints for table `userbillingaddress`
--
ALTER TABLE `userbillingaddress`
  ADD CONSTRAINT `userbillingaddress_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usertable` (`Username`);

--
-- Constraints for table `usershippingaddress`
--
ALTER TABLE `usershippingaddress`
  ADD CONSTRAINT `usershippingaddress_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usertable` (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
