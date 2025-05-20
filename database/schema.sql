-- Create the database
CREATE DATABASE IF NOT EXISTS `milk_leaf_db`;
USE `milk_leaf_db`;

-- Table structure for products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample data for products
INSERT INTO `products` (`name`, `description`, `price`, `image`, `size`, `active`) VALUES
('Susu Kambing Original', 'Susu kambing murni tanpa tambahan apapun, rasakan keasliannya.', 25000.00, 'assets/images/product-original.jpg', '500ml', 1),
('Susu Kambing Madu', 'Perpaduan susu kambing dengan madu alami untuk rasa yang lebih manis.', 30000.00, 'assets/images/product-honey.jpg', '500ml', 1),
('Susu Kambing Kurma', 'Kombinasi sehat susu kambing dengan ekstrak kurma untuk energi ekstra.', 35000.00, 'assets/images/product-dates.jpg', '500ml', 1);

-- Table structure for testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `rating` int(1) NOT NULL DEFAULT 5,
  `comment` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample data for testimonials
INSERT INTO `testimonials` (`name`, `location`, `rating`, `comment`, `image`, `active`) VALUES
('Anisa', 'Jakarta', 5, 'Susu kambing ini enak sekali! Saya suka rasanya dan sangat bermanfaat untuk pencernaan.', 'assets/images/testimonial-1.jpg', 1),
('Budi', 'Bandung', 5, 'Saya telah mencoba berbagai produk susu kambing, tapi yang ini yang terbaik! Tidak berbau amis.', 'assets/images/testimonial-2.jpg', 1),
('Siti', 'Surabaya', 5, 'Anak saya sangat suka susu kambing ini. Sekarang dia minum susu tanpa dipaksa!', 'assets/images/testimonial-3.jpg', 1),
('Arif', 'Yogyakarta', 5, 'Saya rutin minum susu kambing setiap pagi dan merasa lebih berenergi sepanjang hari.', 'assets/images/testimonial-4.jpg', 1),
('Rina', 'Semarang', 5, 'Susu sapi bikin saya sakit perut, tapi susu kambing ini tidak. Rasanya enak dan lebih sehat!', 'assets/images/testimonial-5.jpg', 1),
('Wawan', 'Bali', 5, 'Saya suka varian madu, manis alami dan lebih nikmat. Pengiriman juga cepat!', 'assets/images/testimonial-6.jpg', 1);

-- Table structure for orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `size` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_city` varchar(255) DEFAULT NULL,
  `customer_address` text NOT NULL,
  `payment_method` varchar(50) NOT NULL DEFAULT 'transfer',
  `notes` text DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_number` (`order_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 