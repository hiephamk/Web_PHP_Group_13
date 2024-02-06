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
```sql

```

# table 7: duy23000
```sql

```
