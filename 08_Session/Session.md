# Session vs Cookie

## Session

1. session 是使用者瀏覽網站時，將一些小資料記錄在伺服器上進行資訊的暫存，作為下次再訪時或者瀏覽過程中取用某些值。
2. 存放時間依伺服器中 php.ini session timeout 設定的時間而定
3. session 設定後馬上可以取用
4. session 還沒過期或清除之前都可以取用

[session_start](https://www.php.net/manual/en/function.session-start.php)
[$\_SESSION](https://www.php.net/manual/en/reserved.variables.session.php)
[session_destroy](https://www.php.net/manual/en/function.session-destroy.php)

## Cookie

1. cookie 是使用者瀏覽網站時，將一些小資料記錄在伺服器上進行資訊的暫存，作為下次再訪時或者瀏覽過程中取用某些值。
2. 若無設定存放時間，當瀏覽器關閉後，該 cookie 自動過期。
3. 設定後，須在下次瀏覽網頁才能使用。
4. setcookie 撰寫的位置必須在任何輸出(echo,print_r)之前
5. 除非某特殊原因，否則應該使用 session 而非 cookie

[setcookie](https://www.php.net/manual/en/function.setcookie.php)
[$\_COOKIE](https://www.php.net/manual/en/reserved.variables.cookies.php)
