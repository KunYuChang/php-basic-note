# Booleans and Null

## Booleans

echo 只能對字串做處理，所以當遇到數值會將型別自動轉成字串，
也就是說 PHP 會把 true 轉成 1，遇到 false 會轉成空字串(“”)。

```php
$logged_in = true;
$is_admin = false;

echo $logged_in;

```

## Null

1. Null 代表該變數沒有值
2. Null 不區分大小寫，但約定成俗最好寫成小寫。

```php
// 有時候你會看到有人將下列的判斷式將null擺在前面，用意是避免不小心將 == 寫成 =
$user_id = null;

if (null == $user_id) {
    $user_id = 0;
}
```

## 參考

[更多條件判斷與null空集合](https://progressbar.tw/posts/167)

