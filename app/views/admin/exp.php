<h4 class="fw-bold py-3">Experence</h4>

<div class="mb-3">
    <button class="btn btn-success" id="addExp" data-bs-toggle="modal" data-bs-target="#addExpModel">Add</button>
</div>

<div class="card mb-4">
    <div class="table-responsive text-nowrap p-3">
        <table class="table table-striped" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Exp type</th>
                    <th>Year</th>
                    <th>Role</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php if (is_array($exps)) : ?>
                    <?php foreach ($exps as $exp) : ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?= $exp['id'] ?></strong></td>
                            <td><?= $exp['name'] ?></td>
                            <td><?= $exp['exp_type'] ?></td>
                            <td><?= $exp['year'] ?></td>
                            <td><?= $exp['role'] ?></td>
                            <td style="max-width: 300px; white-space: normal; word-wrap: break-word;"><?= $exp['description'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary edit-btn" id="updateExp" data-bs-toggle="modal" data-bs-target="#updateExpModel">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger delete-btn" id="deleteExp" data-bs-toggle="modal" data-bs-target="#deleteExpModel">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="text-center mt-3">Đéo có dữ liệu</p>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade text-left" id="addExpModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-success">ADD EXP</h4>
            </div>
            <form action="<?= _WEB_ROOT ?>/add-exp" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="addNameText" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="yearText" class="col-md-3 col-form-label text-center">Type</label>
                        <div class="col-md-9">
                            <select id="typeSelect" class="form-select" name="expType">
                                <option>Default select</option>
                                <?php foreach ($exp_types as $exp_type) : ?>
                                    <option value="<?= $exp_type['id'] ?>"><?= $exp_type['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="yearText" class="col-md-3 col-form-label text-center">Year</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="2020" id="addYearText" name="year" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="yearText" class="col-md-3 col-form-label text-center">Role</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="addYearText" name="role" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="yearText" class="col-md-3 col-form-label text-center">description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="5" id="addYearText" name="description" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary close" data-bs-dismiss="modal">
                        <span class="block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-success ml-1" data-bs-dismiss="modal" id="insertmenu">
                        <span class="block">Add</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="updateExpModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-primary">EDIT EXP</h4>
            </div>
            <form action="<?= _WEB_ROOT ?>/update-exp" method="POST">
                <input type="hidden" id="updateIdText" name="id">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" id="updateNameText">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="yearText" class="col-md-3 col-form-label text-center">Type</label>
                        <div class="col-md-9">
                            <select id="typeSelect" class="form-select" name="expType">
                                <option value="0">Default select</option>
                                <?php foreach ($exp_types as $exp_type) : ?>
                                    <option value="<?= $exp_type['id'] ?>"><?= $exp_type['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="yearText" class="col-md-3 col-form-label text-center">Year</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="2020" id="updateYearText" name="year" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="yearText" class="col-md-3 col-form-label text-center">Role</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="updateRoleText" name="role" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="yearText" class="col-md-3 col-form-label text-center">description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="5" id="updateDesText" name="description" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary close" data-bs-dismiss="modal">
                        <span class="block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal" id="insertmenu">
                        <span class="block">Update</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="deleteExpModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-danger">DELETE EXP</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Do you want to delete this EXP?</p>
            </div>
            <form action="<?= _WEB_ROOT ?>/delete-exp" method="POST">
                <input type="hidden" name="id" id="deleteIdText">
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary close" data-bs-dismiss="modal">
                        <span class="block">Close</span>
                    </button>
                    <button type="submit" id="remove" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                        <span class="block">Delete</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.edit-btn').click(function() {
        var row = $(this).closest('tr');

        var id = row.find('td:eq(0)').text();
        var name = row.find('td:eq(1)').text();
        var year = row.find('td:eq(3)').text();
        var role = row.find('td:eq(4)').text();
        var des = row.find('td:eq(5)').html();

        $('#updateIdText').val(id);
        $('#updateNameText').val(name);
        $('#updateYearText').val(year);
        $('#updateRoleText').val(role);
        $('#updateDesText').val(des);
    });

    $('.delete-btn').click(function() {
        var row = $(this).closest('tr');

        var id = row.find('td:eq(0)').text();

        $('#deleteIdText').val(id);
    });
</script>