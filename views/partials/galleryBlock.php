<?php

function generateGallery($photos = []) {
    // Default images if none are provided
    if (empty($photos)) {
        $photos = [
            'https://images.pexels.com/photos/1570806/pexels-photo-1570806.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1813272/pexels-photo-1813272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ];
    }

    $galleryHtml = '<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">';
    foreach ($photos as $photo) {
        $galleryHtml .= '<div class="relative">
                            <img src="' . htmlspecialchars($photo) . '" class="w-full h-auto cursor-pointer" onclick="openModal(this.src)">
                         </div>';
    }
    $galleryHtml .= '</div>';

    $galleryHtml .= '
    <div id="imageModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-75 hidden">
        <div class="relative">
            <button onclick="closeModal()" class="absolute top-0 left-0 m-4 text-white">Close</button>
            <img id="modalImage" src="" class="max-w-full max-h-full mx-auto" style="max-width: 600px;">
        </div>
    </div>

    <script>
        function openModal(src) {
            document.getElementById("imageModal").classList.remove("hidden");
            document.getElementById("modalImage").src = src;
            document.body.style.overflow = "hidden"; // Prevent scrolling
        }

        function closeModal() {
            document.getElementById("imageModal").classList.add("hidden");
            document.body.style.overflow = ""; // Re-enable scrolling
        }

        document.getElementById("imageModal").addEventListener("click", function(event) {
            if (event.target.id === "imageModal") {
                closeModal();
            }
        });
    </script>';

    return $galleryHtml;
}

// Example usage:
$photos = [
    'https://example.com/photo1.jpg',
    'https://example.com/photo2.jpg',
    // Add more photo URLs here
];

echo generateGallery($photos);

?>
