<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: auto 50px;
    }
</style>

<body>
    <h1> Please Log In First </h1>

    <?php if (isset($error)) : ?>
        <p> Username / Password salah. Mohon periksa kembali</p>
    <?php endif; ?>

    <form action="home.php" method="post">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username" required>
        <br>
        <br>
        <label for="password">Password : </label>
        <input type="password" id="password" name="password" required>
        <br>
        <br>
        <label for="email">E-mail : </label>
        <input type="email" id="email" name="email" required>
        <br>
        <br>
        <button type="submit" name="submit">Hit me~!</button>
    </form>
</body>
</html>