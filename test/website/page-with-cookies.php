<?php if(!isset($_COOKIE['foo'])) setcookie('foo', 'bar'); ?>
<html>
<body>
  <ul>
  <?php foreach($_COOKIE as $name => $value): ?>
    <li><?php echo $name; ?> = <?php echo $value; ?></li>
  <?php endforeach; ?>
  </ul>
</body>
</html>
