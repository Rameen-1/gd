<?php include 'header.php'; ?>
<main>
    <h2>Search Results</h2>
    <?php
    $base = strtolower(trim($_GET['domain']));
    $tlds = ['.com', '.net', '.org'];
    $mockTaken = ['example.com', 'test.org']; // dummy unavailable domains
 
    echo "<ul>";
    foreach ($tlds as $tld) {
        $full = $base . $tld;
        $available = !in_array($full, $mockTaken);
        echo "<li>";
        echo $full . " - ";
        if ($available) {
            echo "<strong>Available</strong> ";
            echo "<a href='cart.php?add=$full'>[Add to Cart]</a>";
        } else {
            echo "<span style='color:red;'>Taken</span>";
        }
        echo "</li>";
    }
    echo "</ul>";
    ?>
</main>
</body>
</html>
 
