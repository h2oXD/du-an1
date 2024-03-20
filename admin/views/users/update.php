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
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input value="<?= $user['name'] ?>" type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input value="<?= $user['email'] ?>" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="password" class="form-label">Password:</label>
                            <input value="<?= $user['password'] ?>" type="password" class="form-control" id="password" placeholder="Enter password"
                                name="password">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="phone_number" class="form-label">Phone Number:</label>
                            <input value="<?= $user['phone_number'] ?>" type="text" class="form-control" id="phone_number"
                                placeholder="Enter phone number" name="phone_number">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="address" class="form-label">Address:</label>
                            <input value="<?= $user['address'] ?>" type="text" class="form-control" id="address" placeholder="Enter address"
                                name="address">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="role" class="form-label">Role:</label>
                            <Select class="form-control" class="form-control" name="role">
                                <option <?= $user['role'] ? 'selected' : null ?> value="1">Admin</option>
                                <option <?= !$user['role'] ? 'selected' : null ?> value="0">Member</option>
                            </Select>

                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=users">Danh sách</a> 
            </form>
        </div>
    </div>
</div>