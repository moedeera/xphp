<?php
function createPageHeader($title = "Default Title", $imageUrl = "https://example.com/default-image.jpg") {
    // Escape HTML special characters in the title and image URL to prevent XSS attacks
    $escapedTitle = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    $escapedImageUrl = htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8');

    // Return the HTML structure with the dynamically inserted title and image URL
    return "<div class=\"page-header\" style=\"background-image:url('{$escapedImageUrl}')\">
  <div class=\"overlay-bg\">
    <div class=\"page-header-content\">
      <div class=\"text-2xl md:text-6xl tracking-wide uppercase\">
        {$escapedTitle}
      </div>
    </div>
  </div>
</div>";
}



?>

