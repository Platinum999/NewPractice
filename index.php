<?php
/**
 * Determines if the file being uploaded is a legitimate image or not.
 * If so, allows the file to be uploaded. Otherwise, prevents the upload
 * from occurring.
 *
 * PHP Version 7.4
 *
 * @category Demo
 * @package  TutsPlus_Demo
 * @author   Tom McFarlin <tom@tommcfarlin.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://is.gd/dq0DhO
 * @since    1.0.0
 */
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

?>