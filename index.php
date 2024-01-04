<!DOCTYPE html>

<html>

<head>

    <title>PHP</title>


</head>

<body>

     <form action="function.php" method="post">

        <h2>PHP</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>
<footer>
        <p>&copy; <?php echo date("y"); ?> </p>
    </footer>

</html>

