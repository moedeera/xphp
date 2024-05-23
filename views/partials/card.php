<?php 
function generateStudentHtml($student) {
    // Check if $student is an object or an array and access properties accordingly
    $name = is_array($student) ? $student['name'] : $student->name;
    $age = is_array($student) ? $student['age'] : $student->age;
    $graduated = is_array($student) ? $student['graduated'] : $student->graduated;

    // Create the HTML string with embedded PHP variables
    $html = '<div class="mini-container-unit">' .
            '<h3>' . htmlspecialchars($name) . '</h3>' .
            '<p> Age: ' . htmlspecialchars($age) . '</p>' .
            '<small>' . ($graduated ? "Graduated" : "Enrolled") . '</small>' .
            '</div>';

    return $html;
}

