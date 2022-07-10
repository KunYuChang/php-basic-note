# mysqli

## 連線資料庫

```php
<?php

$db_host = 'localhost';
$db_name = 'cms';
$db_user = 'cms_www';
$db_pass = 'wNL)znZ@xrlSkAsA';
?>

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error()) {
    echo mysqli_connect_error()
    exit;
}

echo "Connected successfully.";

// 查詢

if (isset($_GET['id']) && in_numeric($_GET['id'])) {
    $sql = "SELECT *
            FROM article
            WHERE id = . $_GET['id]";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
        var_dump($articles);
    }
}


```

## 參考

[mysqli_connect](https://www.php.net/manual/en/function.mysqli-connect.php)
[MySQL Improved Extension](https://www.php.net/manual/en/book.mysqli.php)
[mysqli_connect_error](https://www.php.net/manual/en/mysqli.connect-error.php)

[mysqli_query](https://www.php.net/manual/en/mysqli.query.php)
[Converting to boolean](https://www.php.net/manual/en/language.types.boolean.php#language.types.boolean.casting)
[Comparison Operators](https://www.php.net/manual/en/language.operators.comparison.php)
[mysqli_fetch_row](https://www.php.net/manual/en/mysqli-result.fetch-row.php)
[mysqli_fetch_all](https://www.php.net/manual/en/mysqli-result.fetch-all.php)

[is_numeric](https://www.php.net/manual/en/function.is-numeric.php)
[isset](https://www.php.net/manual/en/function.isset.php)
[Logical Operators](https://www.php.net/manual/en/language.operators.logical.php)
