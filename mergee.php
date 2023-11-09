<?php
// Load the first image
$image1 = imagecreatefromjpeg('C:\xampp\htdocs\sanjana\img1.jpg'); // Replace with the correct path to your first image file

// Load the second image
$image2 = imagecreatefromjpeg('C:\xampp\htdocs\sanjana\img2.jpg'); // Replace with the correct path to your second image file

if (!$image1 || !$image2) {
    die('Failed to load image files.');
}

// Get the dimensions of the first image
$width1 = imagesx($image1);
$height1 = imagesy($image1);

// Get the dimensions of the second image
$width2 = imagesx($image2);
$height2 = imagesy($image2);

// Calculate the dimensions of the new image (width and height)
$newWidth = max($width1, $width2);
$newHeight = $height1 + $height2;

// Create a new image with the calculated dimensions
$newImage = imagecreatetruecolor($newWidth, $newHeight);

// Copy the first image onto the new image
imagecopy($newImage, $image1, 0, 0, 0, 0, $width1, $height1);

// Copy the second image below the first image
imagecopy($newImage, $image2, 0, $height1, 0, 0, $width2, $height2);

// Save the final image
imagejpeg($newImage, 'merged_image.jpg'); // Replace with the output image file name

// Clean up memory
imagedestroy($image1);
imagedestroy($image2);
imagedestroy($newImage);

echo "Images merged and saved as 'merged_image.jpg'";
?>
