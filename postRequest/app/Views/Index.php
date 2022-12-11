<!DOCTYPE html>
<html lang="en">
</head>
<body>
  <h1><?php echo $model->message; ?></h1>
  <a href="/home/about">About</a>

  <form method="POST">
    Set message:
    <input type="text" name="message" />
    <input type="submit"/>
  </form>
</body>
</html>