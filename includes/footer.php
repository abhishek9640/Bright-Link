</div>
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="../backend/privacy-policy.php">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item"><a href="../backend/terms-of-service.php">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        <span class="mr-1">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>©
                        </span> <a href="#" class="">Gyan</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="my-profile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-3">My Profile</h4>
                    <div class="content create-workform bg-body">
                        <div class="pb-2">
                            <label class="mb-1">Name</label>
                            <input type="text" class="form-control" disabled name="name" value="<?php echo $admins[1]; ?>">
                        </div>
                        <div class="pb-2">
                            <label class="mb-1">Email</label>
                            <input type="email" class="form-control" disabled name="email" value="<?php echo $admins[2]; ?>">
                        </div>
                        <div class="pb-2">
                            <label class="mb-1">Password</label>
                            <input type="password" class="form-control" disabled name="password" value="<?php echo (strlen($admins[3]) > 50) ? substr($admins[3], 0, 8) : $admins[3]; ?>">
                        </div>
                        <div class="col-lg-12 mt-4">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                <div class="btn btn-primary mr-4" data-dismiss="modal">Close</div>
                                <!-- <div class="btn btn-outline-primary" data-dismiss="modal">Create</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/backend-bundle.min.js"></script>

<script src="assets/js/table-treeview.js"></script>

<script src="assets/js/customizer.js"></script>

<script async src="assets/js/chart-custom.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>