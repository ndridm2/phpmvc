<div class="container my-2">
    <div class="p-5 mb-4 rounded-3" style="background-image: url('your-image.jpg'); background-size: cover;">
        <div class="container-fluid py-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['program']['bahasa'] ?></h5>
                    <h6 class="card-subtitle text-body-secondary"><?= $data['program']['tahun'] ?></h6>
                    <p class="card-text"><?= $data['program']['author'] ?></p>
                    <p class="card-text"><?= $data['program']['tipe'] ?></p>
                    <a href="#" class="card-link text-decoration-none">
                    <span class="badge text-bg-success rounded-pill"></span>
                    </a>
                    <a href="<?= BASE_URL ?>/feature" class="card-link text-decoration-none">
                        <span class="badge text-bg-danger rounded-pill">Back</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>