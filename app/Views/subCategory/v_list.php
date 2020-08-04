<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('content'); ?>

<a href="" class="btn btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#addSubCategoryModal">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add Sub Category</span>
</a>

<?php if ($validation->hasError('category') || $validation->hasError('subCategory')): ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Failed !</strong> <?= $validation->getError('subCategory');?><?= $validation->getError('category');?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php endif; ?>


<?php if (session()->getFlashdata('pesan')) : ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulation!</strong> <?= session()->getFlashdata('pesan'); ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($category as $c) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $c['category']; ?></td>
                            <td><?= $c['subCategory']; ?></td>
                            <td>
                                <a href="" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deletSubCategoryModal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- add Modal-->
<div class="modal fade" id="addSubCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addSubCategoryModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="addSubCategoryModal">Form Add Sub Catehory</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/subcategory/save" method="POST">
                    <div class="form-group">
                        <label for="/subcategory/save">Catgory</label>
                        <select class="custom-select" id="category" name="category" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subCategory">Sub Category</label>
                        <input type="text" class="form-control" id="subCategory" name="subCategory" required>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Save</button>
                        
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>