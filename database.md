# table 1: dinh23000
```sql
CREATE TABLE `Product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  `full_desc` varchar(500) NOT NULL,
  `images` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `energy_type` varchar(20) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

# table 2: hiep23000
```sql
CREATE TABLE `customers` (
  `customer_id` int NOT NULL PRIMARY KEY,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `email` varchar(100) NOT NULL UNIQUE,
  `password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

# table 3: dan23000
```sql
CREATE TABLE Requests (
    request_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(50),
    phone VARCHAR(20),
    addr VARCHAR(100),
    city VARCHAR(50),
    country VARCHAR(50),
    zip VARCHAR(20),
    request VARCHAR(500)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

# table 4: duy23000
```sql
CREATE TABLE `News` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `news_desc` varchar(200) NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `create_date` date DEFAULT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```