<?php 
function generateBlock2($data = []) {
    // Set default values
    $defaultHeader = "Centered Title";
    $defaultContent = "
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    ";
    $defaultImage = "https://placehold.co/600x400"; // Add a default image URL if needed

    // Use the provided data or default values
    $header = isset($data['header']) ? $data['header'] : $defaultHeader;
    $content = isset($data['content']) ? $data['content'] : $defaultContent;
    $buttonLink = isset($data['button']['link']) ? $data['button']['link'] : null;
    $buttonText = isset($data['button']['text']) ? $data['button']['text'] : null;
    $image = isset($data['image']) ? $data['image'] : $defaultImage;

    // Create the HTML string with embedded PHP variables
    $html = '<div class="my-4 py-4 min-h-96 flex flex-col-reverse md:grid md:grid-cols-2">';
    $html .= '<div class="p-3 my-4 text-center">' .
             '<div class="font-bold text-5xl mb-2">' . htmlspecialchars($header) . '</div>' .
             '<p class="mb-8">' . htmlspecialchars($content) . '</p>';

    // Add the button only if both link and text are provided
    if ($buttonLink && $buttonText) {
        $html .= '<a href="' . htmlspecialchars($buttonLink) . '" class="border rounded font-bold px-4 py-2 mt-4 bg-blue-500 text-white hover:bg-blue-400 ease-in-out">' .
                 htmlspecialchars($buttonText) . 
                 '</a>';
    }

    $html .= '</div>' .
             '<div class="h-56 min-w-56 border bg-center bg-cover md:min-h-56 md:h-full" ' .
             'style="background-image: url(\'' . htmlspecialchars($image) . '\')">' .
             '</div>' .
             '</div>';

    return $html;
}
?>
