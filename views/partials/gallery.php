<?php
function renderImageGallery($images = []) {
    // Default placeholder images
    $defaultImages = [
        'https://placehold.co/600x400',
        'https://placehold.co/600x400'
    ];

    // Use default images if no input is given
    if (empty($images)) {
        $images = $defaultImages;
    }

    // Ensure there are at least 2 images
    if (count($images) < 2) {
        $images = array_merge($images, array_slice($defaultImages, 0, 2 - count($images)));
    }

    // Start the HTML output
    $html = '<div class="my-16 w-4/5 mx-auto md:w-full md:mx-0">';
    $html .= '<div class="mb-4">';
    $html .= '<div class="text-6xl text-center"> Services </div>';
    $html .= '</div>';
    $html .= '<div class="flex flex-wrap my-8 md:grid grid-cols-3 gap-3 my-3 mx-1 w-full">';

    // Loop through the images and create the HTML for each
    foreach ($images as $image) {
        $html .= '<div class="h-72 w-full bg-center relative bg-cover"';
        $html .= ' style="background-image:url(\'' . htmlspecialchars($image) . '\');">
        <div class="absolute top-0 w-full h-full left-0 services-link">
        <a class="text-2xl font-bold"href="/"> Standard </a>
        <div class="text-4xl">$21.99</div>
        </div>
        </div>';
    }

    // Close the container div
    $html .= '</div></div>';

    // Output the HTML
    echo $html;
}

// Example usage

?>
