<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('content'); ?>



<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/product/save" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control <?= ($validation->hasError('product_name')) ? 'is-invalid' : ''; ?>" id="name" placeholder="name" name="product_name" autofocus value="<?= old('product_name'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('product_name'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="text" class="form-control <?= ($validation->hasError('price')) ? 'is-invalid' : ''; ?>" id="price" placeholder="500" name="price" value="<?= old('price'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('price'); ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <select id="category" name="category_id" class="custom-select <?= ($validation->hasError('category_id')) ? 'is-invalid' : ''; ?>">
                        <option value="a" selected disabled>Choose...</option>
                        <?php foreach ($category as $c) : ?>
                            <option value="<?= $c['id']; ?>" <?= old('category_id') ==  $c['id']  ? "selected" : ''; ?>><?= $c['subCategory']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('category_id'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Product Description</label>
                <textarea name="editor1" ></textarea>
                <script>
                    CKEDITOR.replace('editor1');
                </script>
                <p class="text-danger"><?= $validation->getError('editor1'); ?></p>
                
                
                

            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" placeholder="image" name="image_id" autofocus>
            </div>
            <div class="text-right">

                <a href="/product" class="btn btn-secondary mt-4 mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary mt-4">Save</button>
            </div>
        </form>

    </div>
</div>

<?= $this->endSection(); ?>