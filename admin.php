<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Layout</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar Section -->
        <div class="sidebar">
            <div class="sidebar-header">
            </div>
            <ul class="nav">
                <li><a href="#">DASHBOARD</a></li>
                <li><a href="#">About</a></li>
                <li>
                    <a href="#">Dropdown &#x25BC;</a>
                    <ul class="dropdown">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">User</a></li>
                    </ul>
                </li>
                <li><a href="#">Report</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <!-- Content Section -->
        <div class="content">
            <h1>Dashboard Admin - LookWork</h1>

            <!-- Ringkasan Statistik -->
            <div class="section">
                <h2>Ringkasan Statistik</h2>
                <ul>
                    <li>Jumlah Lowongan Aktif: 120</li>
                    <li>Jumlah Pelamar Terbaru: 50</li>
                    <li>Perusahaan Terdaftar: 30</li>
                    <li>Pencari Kerja Terdaftar: 200</li>
                </ul>
            </div>
            
            <!-- Manajemen Perusahaan -->
            <div class="section">
                <h2>Company</h2>
                <ul>
                    <li><a href="#">Daftar Perusahaan Terdaftar</a></li>
                    <li><a href="#">Daftar Lowongan Aktif</a></li>
                    <li><a href="#">Profil Perusahaan</a></li>
                </ul>
            </div>

            <!-- Manajemen Pelamar -->
            <div class="section">
                <h2>User</h2>
                <ul>
                    <li><a href="#">Daftar Pelamar</a></li>
                </ul>
            </div>

             <!-- Manajemen Kerja -->
             <div class="section">
                <h2>Jobs</h2>
                <ul>
                    <li><a href="#">Daftar pekerjaan</a></li>
                </ul>
            </div>
            
            <div class="section">
                <h2>Logout</h2>
                <ul>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
