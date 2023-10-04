<?= view('/admin/top'); ?>

<body style="background-color: white; color: black;">
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color: #FFAE42;">JEWELLERY <b>ESSENTIALS</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/logout" class="btn btn-danger"><i class="material-icons">&#xE879;</i> <span>Log Out</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>Item Name</th>
                            <th>Item Description</th>
                            <th>Item Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($items)):
                            foreach ($items as $item): ?>
                                <tr>
                                    <td><img src="/uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" width="100"></td>
                                    <td><?= $item['name']; ?></td>
                                    <td><?= $item['description']; ?></td>
                                    <td><?= $item['price']; ?></td>
                                    <td>
                                        <a href="/edit/<?= $item['id'] ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></a>
                                        <a href="/delete/<?= $item['id'] ?>" class="delete"><i data-toggle="tooltip" class="material-icons" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                            <?php endforeach; else: ?>
                            <tr>
                                <td colspan="5">No items found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="addEmployeeModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="edit">
                        <form method="post" action="/save" enctype="multipart/form-data">
                            <div class="modal-header" style="background-color: #FFAE42;">
                                <h4 class="modal-title" style="color: white;">JEWELLERY PRODUCTS</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="image">Item Image</label>
                                    <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required value="<?= isset($pro['name']) ? $pro['name'] : '' ?>">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required><?= isset($pro['description']) ? $pro['description'] : '' ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" required value="<?= isset($pro['price']) ? $pro['price'] : '' ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="/admin" class="btn btn-secondary" style="background-color: #FFAE42; color: white;">Cancel</a>
                                <button type="submit" class="btn btn-success" style="background-color: #FFAE42; color: white;">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
