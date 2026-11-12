<?php include 'header.inc'; ?>


    <h2>Login</h2>

    <?php if (isset($_GET['error'])) { ?>
        <p>Invalid username or password. Please try again.</p>
    <?php } ?>

    <form method="post" action="process.php">
        <p>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </p>
        <input type="hidden" name="Ba Hung" value="SWS02178">
        <p><input type="submit" value="Login"></p>
    </form>
</main>
<?php include 'footer.inc'; ?>

