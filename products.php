<?php include 'includes/header.php'; ?>

<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Product List</h4>
                    </div>
                    <a href="add-products.php" class="btn btn-primary add-list">
                        <i class="las la-plus mr-3"></i>Add Product
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-tables table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                <th>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                        <label for="checkbox1" class="mb-0"></label>
                                    </div>
                                </th>
                                <th>Product</th>
                                <th>Code</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Brand Name</th>
                                <th>Cost</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            <?php for ($i = 0; $i <= 5; $i++) { ?>
                                <tr>
                                    <td>
                                        <div class="checkbox d-inline-block">
                                            <input type="checkbox" class="checkbox-input" id="checkbox10">
                                            <label for="checkbox10" class="mb-0"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/table/product/09.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                            <div>
                                                Alloy Jewel Set
                                                <p class="mb-0"><small>This is test Product</small></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>AJS01</td>
                                    <td>Jewellery</td>
                                    <td>$150.00</td>
                                    <td>Jazzin</td>
                                    <td>$50.00</td>
                                    <td>200.0</td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line mr-0"></i></a>
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>