<?php include 'header.php'; ?>
<main>
    <p class="success">The following registration information has been successfully
       submitted, <?php echo htmlspecialchars($first_name); ?>.</p>
    <ul>
        <li>Name: <?php echo htmlspecialchars($first_name) . " " . htmlspecialchars($last_name);?></li>
        <li>Phone: <?php echo htmlspecialchars($phone); ?></li>
        <li>Email: <?php echo htmlspecialchars($email); ?></li>
        <li>Zipcode: <?php echo htmlspecialchars($zipcode); ?></li>
    </ul>
</main>
<?php include 'footer.php'; ?>