<?php include 'includes/header.php'; ?>

<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add New Product</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="city" class="control-label">Product Name</label>
                                            <input type="text" id="city" class="form-control" required name="customerCity" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name" class="control-label">Vendor Name</label>
                                            <select name="productName" id="productName" class="form-control">
                                                <option value="">Vendor Product</option>
                                                <option value="">Gautam sir</option>
                                                <option value="">Aahish batra sir</option>
                                                <option value="">Manish Sir</option>
                                                <option value="">Shampoo venbor</option>
                                                <option value="">Oil</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name" class="control-label">Product Catagory</label>
                                            <select name="productName" id="productName" class="form-control">
                                                <option value="">Product</option>
                                                <option value="">Shampoo</option>
                                                <option value="">Comb</option>
                                                <option value="">Remover</option>
                                            </select>
                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label for="dob" class="control-label">Expiry Date</label>
                                            <input type="date" class="form-control" required id="dob" name="Expdate">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="dob" class="control-label">Manufacturer</label>
                                            <input type="text" class="form-control" required id="dob" name="manufacturer">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="dob" class="control-label">Quantity</label>
                                            <input type="number" class="form-control" required id="dob" name="quantity">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="dob" class="control-label">Purchase price</label>
                                            <input type="number" class="form-control" required id="dob" name="buy">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="dob" class="control-label">Selling price</label>
                                            <input type="number" class="form-control" required id="dob" name="sell">
                                        </div>
                                        <div class="col-md-3 form-group p-2">
                                            <label class="control-label">Image</label>
                                            <input type="file" class="px-3" name="pic" accept="image/*">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.No</th>
                                                                    <th>Dimensions</th>
                                                                    <th>Quantity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="add-products">
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <input type="text" name="cost" id="cost" placeholder="Enter the dimension" class="form-control" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="cost" id="cost" class="form-control" />
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="text-right text-lg-left">
                                                        <a class="text-white btn btn-primary" id="add_row">&plus;</a>
                                                        <a class="text-white btn btn-secondary" id="remove_row">&minus;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>


<script>
    $(document).ready(function() {
        var counter = 1;
        $('#add_row').click(function() {
            var html = '';
            html += '<tr>';
            html += '<td>' + (counter + 1) + '</td>';
            html += '<td><select name="productName[]" id="productName' + counter + '" class="form-control"><option value="">Select Product</option></select></td>';
            html += '<td><input type="number" name="cost[]" id="cost' + counter + '" class="form-control" /></td>';
            html += '</tr>';
            $('#add-products').append(html);
            counter++;
        });

        $('#remove_row').click(function() {
            if (counter > 1) {
                $('#add-products tr:last').remove();
                counter--;
            }
        });
    })
</script>