<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_profile";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$bio = $_POST['bio'];
$profilePicture = "";

// Upload file gambar jika ada
if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] == UPLOAD_ERR_OK) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["profilePicture"]["name"]);
    move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFile);
    $profilePicture = $targetFile;
}

// Update data ke database
$sql = "UPDATE profiles SET name=?, email=?, bio=?, profile_picture=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $name, $email, $bio, $profilePicture, $id); // ganti $id dengan ID yang sesuai
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Profile updated successfully!";
} else {
    echo "Error updating profile: " . $conn->error;
}

$stmt->close();
$conn->close();
?>