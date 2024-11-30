<?php

$output = "";

function appear($dir) {
    global $output; // Declare $output as global to access the outer scope variable

    // Get all files in the directory
    $files = scandir($dir);

    // Sort the files in ascending order
    sort($files);

    // Loop through each file
    foreach ($files as $file) {
        // Skip . and ..
        if ($file != "." && $file != "..") {
            // Get the file extension
            $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            
            // Check if the file is an image (you can add more extensions as needed)
            if (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'])) {
                // For Viewer.js Use
                $output .= '<div class="col" id="grid-adjt">
                                <div class="card border border-dark rounded-4">
                                    <img src="'.$dir.'/'.$file.'" class="img-fluid card-img-top rounded-4" data-action="zoom">
                                </div>
                            </div>';

                // For LightBox.js Use
                // $output .= '<div class="col" id="grid-adjt">
                //                 <div class="card border border-dark rounded-4">
                //                     <a href="'.$dir.'/'.$file.'" data-lightbox="mygallery">
                //                         <img src="'.$dir.'/'.$file.'" class="card-img-top rounded-4" alt="...">
                //                     </a>
                //                 </div>
                //             </div>';
            }
        }
    }

    echo $output;
}

?>
