<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forms</title>
</head>

<body>

    <form method="post">

        <select name="country">
            <optgroup label="歐洲">
                <option value="germany">德國</option>
                <option value="france">法國</option>
                <option value="uk">英國</option>
            </optgroup>
            <optgroup label="亞洲">
                <option value="japan">日本</option>
                <option value="korea">韓國</option>
                <option value="taiwan" selected>台灣</option>
            </optgroup>
        </select>

        <button>Send</button>

    </form>


</body>

</html>