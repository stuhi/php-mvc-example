<!DOCTYPE html>
<html lang="en">
</head>
<body>
  <div style="border-bottom:1px solid #ccc;">
    <h1>Layout</h1>
    <a href="/home/index">Home</a>
    <a href="/home/about">About</a>

    <?php if ($model->_isAuth): ?>
    <a href="/account/logout">Logout</a>
    <?php else: ?>
    <a href="/account/login">Login</a>
    <?php endif ?>
    
  </div>
  <?php require_once($model->_html); ?>
</body>
</html>