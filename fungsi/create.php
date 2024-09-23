<form action="add_job.php" method="POST">
    <label for="title">Job Title:</label>
    <input type="text" id="title" name="title" required>
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>
    <label for="company_id">Company ID:</label>
    <input type="number" id="company_id" name="company_id">
    <button type="submit">Add Job</button>
</form>

<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'username', 'password', 'lowongan_kerja');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$title = $_POST['title'];
$description = $_POST['description'];
$company_id = $_POST['company_id'];

// Insert data ke tabel jobs
$sql = "INSERT INTO jobs (title, description, company_id) VALUES ('$title', '$description', $company_id)";
if ($conn->query($sql) === TRUE) {
    echo "New job created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
