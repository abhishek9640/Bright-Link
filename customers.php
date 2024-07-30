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
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Mobile Number</th>
                                <th>DOB</th>
                                <th>Last bill paid</th>
                                <th>Last Visit</th>
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

                                            <div>
                                                Gyan prakash
                                            </div>
                                        </div>
                                    </td>
                                    <td>MOIDA</td>
                                    <td>9849824981</td>
                                    <td>10/12/12</td>
                                    <td>$50.00</td>
                                    <td>6/5/23</td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="bill" href="customer-billing.php"><i class="ri-bill-line mr-0"></i></a>
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