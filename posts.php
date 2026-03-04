<?php
require_once __DIR__.'/users.php';
require_once __DIR__. '/functions.php';



//Bonus 1 welcome admin or welcome user
        echo "welcome:" . ($user['role'] === 'admin' ? "admin" : "user");


// Bonus 2: Post Counter
$postsCount = count($_SESSION['posts']);
echo "Total posts: " . $postsCount . "<br>";

// Bonus 3: Empty State
if ($postsCount === 0) {
    echo "No posts available";
    exit;
}

// Bonus 4: Post Indexing
$counter = 1;
foreach($_SESSION['posts'] as $post) {
    echo "Post #" . $counter . "<br>";
    echo "Title: " . $post['title'] . "<br>";
    echo "Content: " . $post['content'] . "<br>";
    echo "Author: " . $post['author'] . "<br><br>";
    $counter++;
}
?>