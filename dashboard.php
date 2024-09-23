<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Lookwork</title>
    <link rel="stylesheet" href="dashboard.css">
    
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Dashboard Admin - LookWork</h1>
        <div class="row">
            
        
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

        <!-- Card: Jumlah Lowongan Aktif -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Jumlah Lowongan Aktif</div>
                    <div class="card-body">
                        <h5 class="card-title">120</h5>
                        <p class="card-text">Lowongan saat ini tersedia.</p>
                    </div>
                </div>
            </div>
            <!-- Card: Jumlah Pelamar Terbaru -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Jumlah Pelamar Terbaru</div>
                    <div class="card-body">
                        <h5 class="card-title">50</h5>
                        <p class="card-text">Pelamar dalam 24 jam terakhir.</p>
                    </div>
                </div>
            </div>
            <!-- Card: Perusahaan Terdaftar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Perusahaan Terdaftar</div>
                    <div class="card-body">
                        <h5 class="card-title">30</h5>
                        <p class="card-text">Perusahaan telah bergabung.</p>
                    </div>
                </div>
            </div>
            <!-- Card: Pencari Kerja Terdaftar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Pencari Kerja Terdaftar</div>
                    <div class="card-body">
                        <h5 class="card-title">200</h5>
                        <p class="card-text">Pencari kerja terdaftar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

