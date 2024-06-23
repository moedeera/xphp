<?php
function renderImageGallery($data) {
    // Extract title and items from the data array
    $title = $data['title'] ?? 'Prices';
    $items = $data['items'] ?? [];

    // Start the HTML output
    $html = '<div class="my-24 w-4/5 mx-auto md:w-full md:mx-0">';
    $html .= '<div class="mb-4">';
    $html .= '<div class="text-6xl text-center">' . htmlspecialchars($title) . '</div>';
    $html .= '</div>';
    $html .= '<div class="flex flex-wrap my-8 md:grid grid-cols-3 gap-3 my-3 mx-1 w-full">';

    // Loop through the items and create the HTML for each
    foreach ($items as $item) {
        $image = htmlspecialchars($item['image']);
        $itemName = htmlspecialchars($item['item']);
        $price = is_array($item['price']) ? implode(', ', array_map('htmlspecialchars', $item['price'])) : htmlspecialchars($item['price']);
        
        $html .= '<div class="h-72 w-full bg-center relative bg-cover"';
        $html .= ' style="background-image:url(\'' . $image . '\');">
        <div class="absolute top-0 w-full h-full left-0 services-link">
        <a class="text-2xl font-bold"href="#">' . $itemName . '</a>
        <div class="text-4xl">' . $price . '</div>
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
