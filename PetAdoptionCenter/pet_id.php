<?php
if (file_exists('adoption_requests.txt')) {
    $requests = file('adoption_requests.txt');
    echo "<h2>Adoption Requests:</h2><ul>";
    foreach ($requests as $request) {
        echo "<li>$request</li>";
    }
    echo "</ul>";
} else {
    echo "<h2>No adoption requests yet.</h2>";
}
?>
