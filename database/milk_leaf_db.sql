-- Create Milk Leaf Database
CREATE DATABASE IF NOT EXISTS milk_leaf_db;
USE milk_leaf_db;

-- Create Products Table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Content Table
CREATE TABLE IF NOT EXISTS content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    section VARCHAR(50) NOT NULL,
    title VARCHAR(255),
    subtitle VARCHAR(255),
    description TEXT,
    image VARCHAR(255),
    order_index INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Testimonials Table
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    comment TEXT NOT NULL,
    rating INT NOT NULL DEFAULT 5,
    image VARCHAR(255),
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create Orders Table
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255) NOT NULL,
    customer_phone VARCHAR(20) NOT NULL,
    customer_address TEXT NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Order Items Table
CREATE TABLE IF NOT EXISTS order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

-- Create Users Table (for admin panel)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    full_name VARCHAR(100),
    role ENUM('admin', 'editor') DEFAULT 'editor',
    is_active BOOLEAN DEFAULT TRUE,
    last_login TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert Sample Data for Products
INSERT INTO products (name, description, price, stock, image) VALUES
('Susu Kambing Original', 'Susu kambing murni dengan rasa original dan kaya nutrisi.', 35000, 100, 'product-original.jpg'),
('Susu Kambing Madu', 'Susu kambing dengan tambahan madu alami untuk kesehatan.', 40000, 85, 'product-honey.jpg'),
('Susu Kambing Cokelat', 'Susu kambing dengan rasa cokelat yang lezat dan bergizi.', 38000, 75, 'product-chocolate.jpg');

-- Insert Sample Testimonials
INSERT INTO testimonials (name, comment, rating, image) VALUES
('Anisa', 'Susu kambing ini terbaik untuk kesehatan keluarga kami. Anak-anak suka dan tidak ada alergi.', 5, 'anisa.jpg'),
('Budi', 'Milk leaf sangat membantu pencernaan saya setelah lama tidak cocok dengan susu sapi.', 5, 'budi.jpg'),
('Siti', 'Saya suka rasanya yang tidak terlalu kuat dan manfaatnya sangat terasa!', 5, 'siti.jpg'),
('Andi', 'This leaf milk was recommended by my doctor and it worked great!', 5, 'andi.jpg'),
('Rina', 'Suami dan anak-anak saya sekarang rutin minum susu kambing ini setiap pagi.', 5, 'rina.jpg'),
('Wanto', 'Milk leaf menjadi pilihan terbaik untuk keluarga kami. Terima kasih!', 5, 'wanto.jpg');

-- Insert Admin User
INSERT INTO users (username, password, email, full_name, role) VALUES
('admin', '$2y$10$8RUvWzYWpADDOq5fvF.YuO3K6jydK4OA44iGWx6VxXcS/wR.FBtxC', 'admin@milkleaf.com', 'Administrator', 'admin'); 