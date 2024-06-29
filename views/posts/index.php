<?php

function renderPostPage($postId) {
    // Database credentials
    $host = 'us-cluster-east-01.k8s.cleardb.net'; // e.g., us-cdbr-east-02.cleardb.com
    $dbname = 'heroku_569477d4d6a38b9'; // e.g., heroku_569477d4d6a38b9
    $username = 'b0f25289553103';
    $password = '40ebff09';
    $port = '3306'; // Default MySQL port

    try {
        // Set up the PDO connection
        $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("SELECT title, date, image, content FROM posts WHERE id = :postId");
        $stmt->bindParam(':postId', $postId, PDO::PARAM_INT);
        $stmt->execute();

        // Fetch the result
        $post = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($post) {
            // Render the post
            echo '<div class="container h-full flex flex-col gap-1 pt-32">';
            echo '<img src='. htmlspecialchars($post['image']) . '" style="width:100%; max-width:600px;" alt=""/>';
            echo '<h1>' . htmlspecialchars($post['title']) . '</h1>';
            echo '<small>' . htmlspecialchars($post['date']) . '</small>';
            echo '<p>' . nl2br(htmlspecialchars($post['content'])) . '</p>';
            echo '</div>';
        } else {
            echo '<div class="container h-full flex items-center justify-center">';
            echo '<h1 class="text-6xl text-center">Post not found</h1>';
            echo '</div>';
        }

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

// Handle the GET request
$uri = $_SERVER['REQUEST_URI'];
$root = '/xphp/post/'; // Define your root path for posts

if (strpos($uri, $root) === 0) {
    $postId = substr($uri, strlen($root));
    if (is_numeric($postId)) {
        renderPostPage((int)$postId);
    } else {
        echo '<p>Invalid post ID.</p>';
    }
}

?>
