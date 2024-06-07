<?php 
function generateListBlock($data = []) {
    // Set default values
    $defaultListName = "List";
    $defaultListItems = [
        "Free Wi-Fi",
        "Complimentary breakfast",
        "Swimming pool",
        "Fitness center",
        "Spa and wellness center",
        "Room service",
        "On-site restaurant",
        "24-hour front desk",  
    ];
    $defaultImage = "https://img.icons8.com/fluency/28/000000/checkmark--v1.png"; // Add a default image URL if needed

    // Use the provided data or default values
    $listName = isset($data['listName']) ? $data['listName'] : $defaultListName;
    $listItems = isset($data['listItems']) ? $data['listItems'] : $defaultListItems;
    $includeImage = isset($data['includeImage']) ? $data['includeImage'] : $defaultImage;

    // Start generating the HTML block
   
    $html = '<ul class=" border rounded md:w-1/4 px-1">';
    $html .= '<li class="p-2 text-2xl font-bold">Features</li>';

    // Loop through each item and create list elements
    foreach ($listItems as $item) {
        $html .= '<li class="p-2 flex gap-3">';
        $html .= '<img width="28" height="28" src="' . htmlspecialchars($includeImage) . '" alt="checkmark--v1"/>';
        $html .= htmlspecialchars($item);
        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}
?>
