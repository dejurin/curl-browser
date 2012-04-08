<html>
  <body>
  <?php if(isset($_POST['foo'])): ?>

    <h1>Hello, <?php echo strtoupper($_POST['foo']); ?>!</h1>

  <?php else: ?>

    <form method="post" action="">
      <input type="text" name="foo"/>
      <input type="submit"/>
    </form>

  <?php endif; ?>
  </body>
</html>
