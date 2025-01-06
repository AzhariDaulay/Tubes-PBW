<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direktori Gamifikasi</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Gamifikasi Dev</a>
            <a href="#" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1>Platform Direktori Perusahaan Gamifikasi</h1>
            <p>Temukan mitra terbaik untuk proyek gamifikasi Anda di sini!</p>
        </div>
        <div class="text-center mb-4">
            <a href="/companies/add" class="btn btn-warning">Tambah Perusahaan</a>
        </div>
    </section>

    <section id="companies" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Daftar Perusahaan</h2>
            <div class="row">
                <?php if ($companies): ?>
                    <?php foreach ($companies as $company): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card company-card">
                                <img src="<?= base_url('images/' . $company['logo']) ?>" class="card-img-top" alt="<?= $company['name'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $company['name'] ?></h5>
                                    <p class="card-text"><?= $company['description'] ?></p>
                                    <a href="<?= $company['website'] ?>" target="_blank" class="btn btn-primary">Kunjungi Website</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">Belum ada perusahaan terdaftar.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</body>
</html>
