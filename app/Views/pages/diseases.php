<?= $this->extend('core') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Penyakit</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addDiseases">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

        </div>
    </div>
</div>

<div class="modal fade" id="addDiseases" tabindex="-1" role="dialog" aria-labelledby="addDiseasesId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Penyakit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="code">Kode</label>
                        <input type="text" name="code" id="code" class="form-control" placeholder="Ex. GE1" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ex. Eksim" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="summernote" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="suggestion">Saran Penanganan</label>
                        <textarea class="summernote" name="suggestion" id="suggestion"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>