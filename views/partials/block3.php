<?php 
function generateBlock3($data = []) {
    // Set default values
    $defaultHeader = "Left Aligned Title";
    $defaultContent = "
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    ";
    $defaultImage = "https://placehold.co/400x400"; // Add a default image URL if needed

    // Use the provided data or default values
    $header = isset($data['header']) ? $data['header'] : $defaultHeader;
    $content = isset($data['content']) ? $data['content'] : $defaultContent;
    $buttonLink = isset($data['button']['link']) ? $data['button']['link'] : null;
    $buttonText = isset($data['button']['text']) ? $data['button']['text'] : null;
    $image = isset($data['image']) ? $data['image'] : $defaultImage;

    // Create the HTML string with embedded PHP variables
    $html = '<div class="my-4 py-4 min-h-96 flex flex-col md:grid md:grid-cols-2">';
    $html .= '<div class="flex justify-center items-center p-3 my-4">' .
             '<div class="font-bold text-5xl mb-2 text-left">' . htmlspecialchars($header) . '</div>' .
             '<p class="mb-8 px-4 text-left">' . htmlspecialchars($content) . '</p>';

    // Add the button only if both link and text are provided
    if ($buttonLink && $buttonText) {
        $html .= '<a href="' . htmlspecialchars($buttonLink) . '" class="border rounded font-bold px-4 py-2 mt-4 bg-green-500 text-white hover:bg-green-400 ease-in-out">' .
                 htmlspecialchars($buttonText) . 
                 '</a>';
    }

    $html .= '</div>' .
             '<div class="h-56 min-w-56 border bg-center bg-cover md:min-h-56 md:h-full rounded-full overflow-hidden" ' .
             'style="background-image: url(\'' . htmlspecialchars($image) . '\')">' .
             '</div>' .
             '</div>';

    return $html;
}
?>
