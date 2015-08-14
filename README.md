# DrawProject
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
