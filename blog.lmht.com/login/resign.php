<!DOCTYPE html>
<html>
<head>
  <title>resign</title>
  <link rel="stylesheet" type="text/css" href="demo.css">
  <meta charset="utf-8">
</head>
<body>
<div class="form">
          <form action="checkresign.php" method="post">
          <li class="tab"><a href="../main.php">Back to Main</a></li>
          <li class="tab"><a id="dangky" href="../LoginForm (Ajax)/index.php">Go Login</a></li>
          <div class="top-row">
            <h1>Resign</h1>
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="txtFirstName" />
            </div>
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="txtLastname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Tài Khoản<span class="req">*</span>
            </label>
            <input type="text" name="txtUser" />
          </div>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="txtPass" />
          </div>
          <button type="submit" class="button button-block"/>Get Start</button>
          </form>
</div>
</body>
</html>