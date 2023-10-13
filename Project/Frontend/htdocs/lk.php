<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style_lk.css">
  <title>Вход в личный кабинет</title>
</head>
<body>
  <div class="container mt-5">
    <h3 class="mb-4">Вход в личный кабинет</h3>
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Имя пользователя</label>
        <input type="text" id="username" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" id="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn">Войти</button>
    </form>
  </div>
</body>
</html>
