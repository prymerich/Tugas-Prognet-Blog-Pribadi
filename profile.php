<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile - Get To Know Me</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .about h2, .about h3 {
            color: #000; 
        }
        .status span {
            color: #000;
        }
        .lead {
            color: #000;
        }

        .my-profile {
            color:#000;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary-subtle p-4">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Krishna Richad</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="profile.html">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogpost.html">Blog Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- bagian php -->
    <?php

    // Koneksi ke database
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

    $sql = "SELECT * FROM profiles WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['names'];
        $email = $row['email'];
        $description = $row['descriptions'];
    } else {
        echo "No user found.";
    }

    // Cek jika form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['names'];
    $email = $_POST['email'];
    $description = $_POST['descriptions'];

    // // Cek jika ada file yang diupload
    // if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] == 0) {
    //     $targetDir = "uploads/"; // Pastikan folder ini ada dan dapat ditulis
    //     $targetFile = $targetDir . basename($_FILES["profilePicture"]["name"]);
    //     move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFile);
    // }


    // Update data ke database
    $updateSql = "UPDATE profiles SET names=?, email=?, descriptions=? WHERE id=1";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sss", $name, $email, $description);

    if ($stmt->execute()) {
        echo "Profile updated successfully.";
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    $stmt->close();
}

    // Tutup koneksi
    $conn->close();
    ?>

    <!-- About Section -->
    <section class="about bg-white p-5">
        <div class="container d-flex align-items-center">
            <div class="me-4">
                <img src="profil.jpg" alt="Your Name" class="img-fluid rounded-circle" style="width: 400px; height: 300px;">
            </div>
            <div>
                <h2>About Me</h2>
                <p>Hi, I'm <?php echo htmlspecialchars($name); ?>.</p>
                <p><?php echo htmlspecialchars($description); ?></p>
                <p>You can contact me on my email: <?php echo htmlspecialchars($email); ?>.</p>
                
                <h3 class="text-start">Overall Status</h3>
                <div class="statuses">
                    <div class="status text-start">
                        <span>Social</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%;">50%</div>
                        </div>
                    </div>
                    <div class="status text-start">
                        <span>Fitness</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%;">50%</div>
                        </div>
                    </div>
                    <div class="status text-start">
                        <span>Introvert</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%;">70%</div>
                        </div>
                    </div>
                    <div class="status text-start">
                        <span>Extrovert</span>
                        <div class="progress progress-success">
                            <div class="progress-bar" style="width: 100%;">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="my-profile" class="p-5">
    <div class="container">
        <h2 class="text-center mb-4">My Profile</h2>
        <form id="profileForm" method="POST" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="names" class="form-label">Name</label>
                <input type="text" class="form-control" id="names" name="names" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" id="bio" name="descriptions" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="profilePicture" class="form-label">Profile Picture</label>
                <input type="file" class="form-control" id="profilePicture" name="profilePicture" accept="image/*">
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
        
        <!-- Notifikasi Kustom -->
        <div id="notification" class="notification-card d-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile Updated</h5>
                    <p id="notification-content" class="card-text"></p>
                    <button id="close-notification" class="btn btn-secondary">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('profileForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form secara default

    // Ambil data dari form
    const formData = new FormData(this);

    // Tampilkan notifikasi kustom
    const notificationContent = document.getElementById('notification-content');
    notificationContent.textContent = `Name: ${formData.get('names')}\nEmail: ${formData.get('email')}\nBio: ${formData.get('descriptions')}`;
    
    const notification = document.getElementById('notification');
    notification.classList.remove('d-none');

    // Kirim data ke server menggunakan Fetch API
    fetch('profile.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            return response.text();
        }
        throw new Error('Network response was not ok.');
    })
    .then(data => {
        console.log(data);
        // Reset form setelah data berhasil dikirim
        this.reset();
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);

    // Menutup notifikasi ketika tombol Close ditekan
    document.getElementById('close-notification').addEventListener('click', function() {
    const notification = document.getElementById('notification');
    notification.classList.add('d-none');
});
    });
});
</script>
<style>
    #notification {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(5px);
    z-index: 1000;
}

.notification-card {
    display: none;
}

.notification-card.d-none {
    display: none;
}

.card {
    width: 400px;
    border-radius: 10px;
}
</style>
    <!-- Footer -->
    <footer class="bg-primary-subtle p-4 text-center">
        <p>&copy; 2023 Richad Krishnadana Primantara</p>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>