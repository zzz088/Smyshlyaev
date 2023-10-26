<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>lw1</title>
</head>

<body>

    <?php

    include 'user.php';
    include 'userservise.php';


    // Пример данных
    $user1 = new User('name1', 'password', new DateTime('2000-07-18'));
    $user2 = new User('name12345', 'password', new DateTime('2004-12-06'));
    $user3 = new User('name544', 'password', new DateTime('2010-08-25'));

    $users = [$user1, $user2, $user3];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["sort_username"])) {
            $users = UserService::sortByUsername($users, $_POST["sort_username"] === "ascending");
        } elseif (isset($_POST["sort_birthday"])) {
            $users = UserService::sortByBirthday($users, $_POST["sort_birthday"] === "ascending");
        }
    }
    ?>
    <form method="post">
        <button type="submit" name="sort_username" value="ascending">Сортировать по возрастанию имени</button>
        <button class="btn" type="submit" name="sort_username" value="descending">Сортировать по убыванию имени</button>
        <button class="btn" type="submit" name="sort_birthday" value="ascending">Сортировать по возрастанию даты рождения</button>
        <button class="btn" type="submit" name="sort_birthday" value="descending">Сортировать по убыванию даты рождения</button>
    </form>
    <table>
        <tr>
            <th>Имя пользователя</th>
            <th>Пароль</th>
            <th>Дата рождения</th>
        </tr>
        <?php
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user->username . "</td>";
            echo "<td>" . $user->password . "</td>";
            echo "<td>" . $user->birthday->format('Y-m-d') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>