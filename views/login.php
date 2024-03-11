<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <?php showMessage('success') ?>
    <h3>Login</h3>
    <form action="/login" method="post">
        <input type="hidden" value="123213123123123123123";
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <?php showError('email'); ?>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <?php showError('password'); ?>
        </div>
        <input type="submit" value="Send">
    </form>
</body>
</html>
