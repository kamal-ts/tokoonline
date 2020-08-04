<!-- Dropdown Card Example -->
<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="row no-gutters">
        <div class="col-md-5">
            <img class="card-img-top " src="/img/<?= $product['image_id']; ?>" alt="Card image cap">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <h5 class="card-title"><?= $product['product_name'] ?></h5>
                <hr>
                <h2 class="card-text text-danger "><?= "Rp " . number_format($product['price'], '2', ',', '.'); ?></h2>
            </div>

            <div class="card-body ">
                <div class="row">
                    <div class="col">

                        <a href="" class="btn btn-warning btn-sm btn-block">Edit</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-danger btn-sm btn-block" data-toggle="modal" data-target="#deletModal">Delet</a>
                    </div>
                    <div class="col"></div>
                </div>


                <br>
                <a href="/product">
                    <span class=" icon">
                        <i class="fas fa-arrow-left mr-1"></i>
                    </span>
                    <span class="text"><b>Back to Product Data</b></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Rating</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade show active" style="overflow: auto;" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <?= $product['description'] ?>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="deletModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="/product/<?= $product['id']; ?>" method="post">
                <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>