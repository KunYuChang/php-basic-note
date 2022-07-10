# PHP 與 HTML

```php
<?php

<?php if ($hour < 12): ?>

    <h1>Good morning</h1>

<?php elseif ($hour < 18): ?>

    <h1>Good afternoon</h1>

<?php elseif ($hour < 22): ?>

    <h1>Good evening</h1>

<?php else: ?>

    <h1>Good night</h1>

<?php endif; ?>

?>

```

## 參考

[Alternative syntax for control structures](https://www.php.net/manual/en/control-structures.alternative-syntax.php)
