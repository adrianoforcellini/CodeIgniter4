<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Users</title>
</head>

<body>
    <div class="container mt-5">
        <table>

            <tr>
                <th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Username
                </th>
                <th>
                    Lastname
                </th>
                <th>
                    Email
                </th>
                <th>
                    Ações
                </th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['lastname'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>Ações</td>

                </tr>
            <?php endforeach ?>
        </table>

    </div>

</body>

</html>