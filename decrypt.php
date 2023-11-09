<?php
function extractTextFromJPEG($stegoImageFile) {
    $image = imagecreatefromjpeg($stegoImageFile);

    $hiddenData = '';
    $dataLength = 0;
    $bitBuffer = 0;
    $bitCount = 0;

    for ($x = 0; $x < imagesx($image); $x++) {
        for ($y = 0; $y < imagesy($image); $y++) {
            $color = imagecolorat($image, $x, $y);
            $r = ($color >> 16) & 0xFF;
            $g = ($color >> 8) & 0xFF;
            $b = $color & 0xFF;

            $bitBuffer = ($bitBuffer << 1) | ($r & 1);
            $bitCount++;

            if ($bitCount === 8) {
                $hiddenData .= chr($bitBuffer);
                $bitBuffer = 0;
                $bitCount = 0;

                if (strlen($hiddenData) === 4) {
                    $dataLength = unpack('N', $hiddenData)[1];
                }

                if (strlen($hiddenData) === $dataLength + 4) {
                    imagedestroy($image);
                    return substr($hiddenData, 4);
                }
            }
        }
    }

    imagedestroy($image);
    return "No hidden data found in the image.";
}

$stegoImageFile = 'C:/xampp/htdocs/sanjana/img2.jpg'; // Replace with the path to your steganography image
$extractedText = extractTextFromJPEG($stegoImageFile);
echo "Extracted Text: $extractedText";
?>
