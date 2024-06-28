<?php 
function generateBlock1($data = []) {
    // Set default values
    $defaultHeader = "Title";
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
    $html = '<div class="mt-8 mb-32 px-2 md:px-0  mx-auto flex flex-col-reverse md:grid md:grid-cols-2"
    style="min-height:24rem;"
    >' .
            '<div class="px-3 mb-4 mt-4 md:mt-0">' .
            '<div class="font-bold text-5xl mb-2 font-thin tracking-wide uppercase">' . htmlspecialchars($header) . '</div>' .
            '<p class="mb-8  leading-8 tracking-wide">' . htmlspecialchars($content) . '</p>';

    // Add the button only if both link and text are provided
    if ($buttonLink && $buttonText) {
        $html .= '<a href="' . htmlspecialchars($buttonLink) . '" class="btn">' .
                 htmlspecialchars($buttonText) . ' &#8594;'.
                 '</a>';
    }

    $html .= '</div>' .
             '<div class="min-h-64 min-w-56 bg-center bg-cover md:min-h-56 md:h-full" ' .
             'style="background-image: url(\'' . htmlspecialchars($image) . '\');
            
             ">
             ' .
             '</div>' .
             '</div>';

    return $html;
}
?>
