<div class="container my-2">
    <div class="p-5 mb-4 rounded-3" style="background-image: url('your-image.jpg'); background-size: cover;">
        <div class="container-fluid">
            <h3 class="display-0 fw-bold mb-4">CRUD Example Simple Data</h3>
            <button type="button" class="btn btn-primary mb-4 modalInsert" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New Language
            </button>
            <form action="<?= BASE_URL ?>/feature/search" method="post" class="d-flex mb-4 col-lg-4" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="keyword" name="keyword" autocomplete="off">
                <button class="btn btn-outline-primary" type="submit" id="btnSearch">Search</button>
            </form>
                <div class="col-lg-4" >
                    <?php Flasher::flash() ?>
                </div>
            <ul class="list-group col-lg-4">
                <?php foreach ($data['program'] as $pro => $key): ?>
                    <li class="list-group-item">
                        <?= $key['bahasa'] ?>
                        <!-- delete -->
                        <a href="<?= BASE_URL ?>/feature/delete/<?= $key['id'] ?>" class="text-decoration-none">
                            <span class="badge text-bg-danger float-end ms-1" onclick="return confirm('Sure delete?');"><i
                                    class="bi bi-trash"></i></i></span>
                        </a>
                        <!-- update -->
                        <a href="<?= BASE_URL ?>/feature/update/<?= $key['id'] ?>" class="text-decoration-none modalUpdate"
                            data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $key['id'] ?>">
                            <span class="badge text-bg-primary float-end ms-1"><i
                                    class="bi bi-pencil-square"></i></i></span>
                        </a>
                        <!-- detail -->
                        <a href="<?= BASE_URL ?>/feature/detail/<?= $key['id'] ?>" class="text-decoration-none">
                            <span class="badge text-bg-info float-end"><i class="bi bi-info-circle"></i></i></span>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<!-- modal insert -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Programming language</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>/feature/create" method="post">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="bahasa" name="bahasa" autocomplete="true">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Rilis:</label>
                        <input type="number" class="form-control" id="tahun" name="tahun">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Author:</label>
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Type:</label>
                        <input type="text" class="form-control" id="tipe" name="tipe">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
