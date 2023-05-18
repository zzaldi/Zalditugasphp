
<!DOCTYPE html>
<html>

<head>
    <title>Sistem Parkir</title>
</head>

<body>
    <h1>Sistem Parkir</h1>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numberPolice">Nomor Polisi:</label>
        <input type="text" name="numberPolice" id="numberPolice" required><br>

        <input type="submit" name="submit" value="Parkir">
    </form>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numberPoliceExit">type:</label>
        <input type="text" name="numberPolice" id="numberPoliceExit" required><br>

        <input type="submit" name="submit" value="Keluar">
    </form>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="status">Status:</label>
        <input type="text" name="status" id="statuse" required><br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" name="submit" value="Status">
    </form>

    <?php
          echo  "ini adalah nomor polisis "

    ?>
 
</body>

</html>
