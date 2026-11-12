<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
 include 'header.inc'; 
         
?>

<main>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
    <p>You have logged in successfully.</p>
</main>

<?php include 'footer.inc'; ?>
   
</body>
</html>