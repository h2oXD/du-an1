<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?? null ?>
        <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=order_detail-create">Thêm mới</a> 
    </h1>
    <p class="mb-4">
        
        
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Datatable
            </h6>
        </div>
        <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <ul>
                
                <li><?= $_SESSION['success'] ?></li>
                
            </ul>
        </div> <?php unset($_SESSION['success']); ?>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Order_ID</th>
                            <th>Product_ID</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($order_details as $order_detail): ?>
                        
                        
                        <tr>
                            <td><?= $order_detail['id']?></td>
                            <td><?= $order_detail['order_id']?></td>
                            <td><?= $order_detail['product_id']?></td>
                            <td><?= $order_detail['price']?></td>
                            <td><?= $order_detail['quantity']?></td>
                            
                            <td>
                                <a class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=order_detail-detail&id=<?= $order_detail['id']?>">Chi tiết</a> 
                                <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=order_detail-update&id=<?= $order_detail['id']?>">Sửa</a> 
                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không')" href="<?= BASE_URL_ADMIN ?>?act=order_detail-delete&id=<?= $order_detail['id']?>">Xóa</a> 
                                
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
