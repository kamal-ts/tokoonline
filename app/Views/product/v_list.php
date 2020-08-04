<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('content'); ?>

<a href="/product/create" class="btn btn-primary btn-icon-split mb-3">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add Product</span>
</a>

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
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($product as $p) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><img class="imglist" src="/img/<?= $p['image_id']; ?>" alt=""></td>
                            <td><?php echo substr($p['product_name'], 0, 50); ?></td>
                            <td><?= $p['subCategory']; ?></td>
                            <td class="text-danger"><?= "Rp " . number_format($p['price'], '0', ',', '.'); ?></td>
                            <td>
                                <a href="/Product/<?= $p['slug'] ?>" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deletModal">
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

<?= $this->endSection(); ?>