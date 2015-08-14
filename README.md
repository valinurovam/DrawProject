#Задание 1
Планировал изначально возможность добавлять "фильтры" (borderWidth, fillColor, borderColor,...) сделать через декораторы, но не до конца смог продумать в голове,
как например реализовать подобные возможности  для библиотеки GD.

Минус в представленной реализации в том, что для каждой новой фигуры и рендера нужно написать реализацию "фильтров"

#Задание 2
```sql
CREATE TABLE `book` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
  FULLTEXT KEY `idx_book_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
```

```sql
CREATE TABLE `author` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
  FULLTEXT KEY `idx_author_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
```

```sql
CREATE TABLE `book_author` (
  `book_id` int(11) unsigned NOT NULL,
  `author_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8
```
#Задание 3
```sql
CREATE TABLE `data_stats` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('photo','image','text','review') NOT NULL,
  `date` date DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8
```

## решение 1
```sql
SELECT ds.type, ds.value
FROM data_stats ds
INNER JOIN (
    SELECT TYPE, MAX(DATE) AS DATE
    FROM data_stats
    GROUP BY 1
    ) ds_tmp ON ds.`type` = ds_tmp.type AND ds.`date` = ds_tmp.date
```
## решение 2
```sql
SELECT TYPE, VALUE 
FROM (
    SELECT TYPE, VALUE, DATE
    FROM data_stats
    ORDER BY DATE DESC
    ) ds_tmp
GROUP BY 1
```
