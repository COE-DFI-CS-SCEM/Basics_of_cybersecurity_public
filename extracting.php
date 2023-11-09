<?php
function hideTextInJPEG($coverImageFile, $outputImageFile, $hiddenText) {
    $image = imagecreatefromjpeg($coverImageFile);

    // Convert the text to binary
    $hiddenData = str_pad(decbin(strlen($hiddenText)), 32, '0', STR_PAD_LEFT); // 32-bit header with the length of hidden data
    $hiddenData .= str_pad('', 8 - (strlen($hiddenData) % 8), '0'); // Padding to make the data a multiple of 8 bits
    $hiddenData .= join('', array_map(function($char) {
        return str_pad(decbin(ord($char)), 8, '0', STR_PAD_LEFT);
    }, str_split($hiddenText)));

    $dataIndex = 0;
    $numBytes = strlen($hiddenData) / 8;

    for ($x = 0; $x < imagesx($image); $x++) {
        for ($y = 0; $y < imagesy($image); $y++) {
            if ($dataIndex < $numBytes) {
                $color = imagecolorat($image, $x, $y);
                $r = ($color >> 16) & 0xFF;
                $g = ($color >> 8) & 0xFF;
                $b = $color & 0xFF;

                $r = ($r & 0xFE) | (intval($hiddenData[$dataIndex * 8]) & 1);
                $g = ($g & 0xFE) | (intval($hiddenData[$dataIndex * 8 + 1]) & 1);
                $b = ($b & 0xFE) | (intval($hiddenData[$dataIndex * 8 + 2]) & 1);

                $newColor = imagecolorallocate($image, $r, $g, $b);
                imagesetpixel($image, $x, $y, $newColor);

                $dataIndex++;
            }
        }
    }

    imagejpeg($image, $outputImageFile, 100);
    imagedestroy($image);
}

$coverImageFile = 'C:/xampp/htdocs/sanjana/img1.jpg'; // Replace with the path to your cover image
$outputImageFile = 'C:/xampp/htdocs/sanjana/img2.jpg'; // Output steganography image
$hiddenText = 'This is a hidden message!';

hideTextInJPEG($coverImageFile, $outputImageFile, $hiddenText);
echo "Steganography completed. Check $outputImageFile";
?>
