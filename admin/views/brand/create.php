<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?? null ?>
    </h1>
    <p class="mb-4">


    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Create
            </h6>
        </div>
        <?php if(isset($_SESSION['errors'])): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach($_SESSION['errors'] as $error): ?>
                <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div> <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                        <label for="brand_name" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="brand_name" placeholder="Enter Brand" name="brand_name">
                        </div>
                        <!-- <div class="mb-3 mt-3">
                        <label for="product_id" class="form-label">Product ID</label>
                            <input type="text" class="form-control" id="product_id" placeholder="Enter product id" name="product_id">
                        </div> -->
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="mb-3 mt-3">
                        <label for="is_active" class="form-label">Is active</label>
                            <input type="text" class="form-control" id="is_active" placeholder="Enter is active" name="is_active">
                        </div>
                    </div> -->
                </div>
                


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=colors">Danh sách</a> 
            </form>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['data'])) unset($_SESSION['data']); ?>