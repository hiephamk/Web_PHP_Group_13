# table 1: dinh23000
```sql
CREATE TABLE `Product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  `full_desc` varchar(500) NOT NULL,
  `image` varchar(50) NOT NULL,
  `category_id` int NOT NULL,
  `energy_id` int NOT NULL,
  PRIMARY KEY (`product_id`),
  FOREIGN KEY (`category_id`) REFERENCES `CarCategory` (`category_id`),
  FOREIGN KEY (`energy_id`) REFERENCES `EnergyType` (`energy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```
# table 2: dinh23000
```sql
CREATE TABLE `CarCategory` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

# table 3: dinh23000
```sql
CREATE TABLE `EnergyType` (
  `energy_id` int NOT NULL AUTO_INCREMENT,
  `energy_type` varchar(50) NOT NULL,
  PRIMARY KEY (`energy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

# table 4: hiep23000
```sql

```

# table 5: dan23000
```sql

```

# table 6: duy23000

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `news_desc` varchar(200) NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `news_categoryId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news_desc`, `image`, `news_categoryId`) VALUES
(2, 'News-1', 'News about travelling today', '../andy_tasks/images/news1.jpg', 1),
(3, 'News-2', 'News about business today', '../andy_tasks/images/news2.jpg', 2),
(4, 'News-2', 'News about Technology today', '../andy_tasks/images/news3.jpg', 3);


# table 7: duy23000
```sql
CREATE TABLE `NewsCategory` (
  `news_catergoryId` int NOT NULL,
  `catergory_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `NewsCategory`
--

INSERT INTO `NewsCategory` (`news_catergoryId`, `catergory_name`) VALUES
(1, 'Travel'),
(2, 'Business'),
(3, 'Technologies');
```
