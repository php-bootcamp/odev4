# Vivense PHP Talent Bootcamp - Ödev 4

Bu haftaki ödev için aşağıdaki UML diagrama göre PHP sınıflarını oluşturacağız. Oluşturulan bu sınıflarda herhangi bir gerçek bağlantı / sorgu / işlem bulunmasına gerek yok. Sadece yapıyı oluşturmanız yeterli. Deneme amaçlı ekrana çıktı verebilirsiniz. İsteğe bağlı olarak yapıyı kendi istediğiniz şekilde de değiştirebilirsiniz.

![diagram](https://github.com/php-bootcamp/odev4/blob/master/diagram.jpg?raw=true)

## Örnek Kullanım

Yaptığınız yapıyı test etmek için `test.php` dosyasını veya aşağıdaki betiği kullanabilirsiniz.

> **Not:** Yapıya göre farklılık olabileceğini unutmayın. Yapıda değişiklik yaptıysanız, kendi yapınıza göre `test.php` dosyasını değiştiriniz.

```php
<?php

include "IQuery.php";
include "IDatabaseType.php";
include "PDOConnector.php";
include "SQLQuery.php";
include "SQL.php";
include "SQLCrud.php";
include "MySQL.php";
include "PostgreSQL.php";

$db = new MySQL("localhost", "root", "toor", "database");

$query = (new SQLQuery())->setTable("users")->select()->addWhere("username", "=", ":user")->addBinding("user", "eray");

$eray = $db->first($query);
```
