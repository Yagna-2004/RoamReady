CREATE DATABASE roamready_db;

USE roamready_db;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'user', '123456', 'user'),
(2, 'namee', '76543', 'namee'),
(3, 'Hello', '1234567', 'hello');


CREATE TABLE `cities` (
  `cityid` int(4) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `days` int(2) NOT NULL,
  `cost` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `cities` (`cityid`, `city`, `region`, `season`, `days`, `cost`) VALUES
(1, 'Chennai', 'South', 'Winter', 3, 30000),
(2, 'Ladakh', 'North', 'Summer', 7, 50000),
(3, 'Manali', 'North', 'Monsoon', 5, 35000),
(4, 'Mumbai', 'West', 'Winter', 3, 15000),
(5, 'Pune', 'West', 'Winter', 3, 15000),
(6, 'Rajasthan', 'North-West', 'Winter', 7, 40000),
(7, 'Goa', 'West', 'Summer', 3, 15000),
(8, 'Kerala', 'South', 'Monsoon', 5, 21000),
(9, 'Sikkim', 'North-East', 'Winter', 7, 55000);
COMMIT;

CREATE TABLE `hotels` (
  `hotelid` int(11) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `cityid` int(11) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `amenities` text DEFAULT NULL,
  `ratings` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `hotels` (`hotelid`, `hotel`, `cityid`, `cost`, `amenities`, `ratings`) VALUES
(1, 'Maple Hermitage', 1, 6000.00, '1. 24*7 Room Service\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Swimming Pool', 3),
(2, 'Trident', 2, 7000.00, '1. 24*7 Room Service\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Swimming Pool', 5),
(3, 'JW Marriott', 5, 7000.00, '1. 24*7 Room Service\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Swimming Pool', 5),
(4, 'The Taj', 4, 9000.00, '1. 24*7 Room Service\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Swimming Pool', NULL),
(5, 'The Leela Palace', 3, 8000.00, '1. 24*7 Room Service\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Swimming Pool', 5),
(6, 'Ritz Carlton', 7, 8000.00, '1. 24*7 Room Service\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Swimming Pool', 5),
(7, 'Kohinoor', 6, 5000.00, '1. 24*7 Water Supply\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Swimming Pool', 3),
(8, 'Taj Exotica', 8, 7000.00, '1. 24*7 Room Service\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Swimming Pool', 5),
(9, 'Tunga International', 9, 7000.00, '1. 24*7 Room Service\r\n2. Fine-Dining\r\n3. Free WiFi\r\n4. CCTV Surveillance\r\n5. Great Views', 5);
COMMIT;
