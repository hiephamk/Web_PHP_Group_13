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
```Database_Customers:
CREATE TABLE `customers` (
  `customer_id` int NOT NULL PRIMARY KEY,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `login_status` tinyint(1) DEFAULT NULL,
  `email` varchar(100) NOT NULL UNIQUE,
  `password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```
# table 5: dan23000
```sql

```

# table 6: duy23000
```sql
CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `news_desc` varchar(200) NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `create_date` date DEFAULT NULL,
  `news_categoryId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

```
```sql
--
-- Dumping data for table `news`
--
able `news`
--

INSERT INTO `news` (`id`, `title`, `news_desc`, `image`, `create_date`, `news_categoryId`) VALUES
(2, 'News-1', 'News about travelling today', '../andy_tasks/images/news1.jpg', '2024-02-05', 1),
(3, 'News-2', 'News about business today', '../andy_tasks/images/news2.jpg', '2024-02-06', 2),
(4, 'News-2', 'News about Technology today', '../andy_tasks/images/news3.jpg', '2024-02-07', 3),
(5, 'Travel 2', 'News about travelling today', '../andy_tasks/images/news/travel-2.jpg', '2024-02-07', 1),
(6, 'Travel 1', 'News about travelling today', '../andy_tasks/images/news/Travel-1.jpg', '2024-02-06', 1),
(7, 'Travel 3', 'News about travelling today', '../andy_tasks/images/news/travel-3.jpg', '2024-02-04', 1),
(8, 'Travel 4', 'News about travelling today', '../andy_tasks/images/news/travel-4.jpg', '2024-02-06', 1),
(9, 'Travel 5', 'News about travelling today', '../andy_tasks/images/news/travel-5.jpg', '2024-02-06', 1),
(10, 'Business 1', 'News about business today', '../andy_tasks/images/news/Business-1.jpg', '2024-02-05', 2),
(11, 'Business 1', 'News about business today', '../andy_tasks/images/news/Business-1.jpg', '2024-02-05', 2),
(12, 'Business 2', 'News about business today', '../andy_tasks/images/news/Business-2.jpg', '2024-02-06', 2),
(13, 'Business 3', 'News about business today', '../andy_tasks/images/news/Business-3.jpg', '2024-02-07', 2),
(14, 'Business 4', 'News about business today', '../andy_tasks/images/news/Business-4.jpg', '2024-02-07', 2),
(15, 'Business 5', 'News about business today', '../andy_tasks/images/news/Business-5.jpg', '2024-02-05', 2),
(16, 'Technology 1', 'News about technology today', '../andy_tasks/images/news/Technology-1.jpg', '2024-02-05', 3),
(17, 'Technology 1', 'News about technology today', '../andy_tasks/images/news/Technology-1.jpg', '2024-02-05', 3),
(18, 'Technology 2', 'News about technology today', '../andy_tasks/images/news/Technology-2.jpg', '2024-02-06', 3),
(19, 'Technology 3', 'News about technology today', '../andy_tasks/images/news/Technology-3.jpg', '2024-02-06', 3),
(20, 'Technology 4', 'News about technology today', '../andy_tasks/images/news/Technology-4.jpg', '2024-02-07', 3),
(21, 'Technology 5', 'News about technology today', '../andy_tasks/images/news/Technology-5.jpg', '2024-02-07', 3);

```
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

-----
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_categoryId` (`news_categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`news_categoryId`) REFERENCES `NewsCategory` (`news_catergoryId`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;


```


