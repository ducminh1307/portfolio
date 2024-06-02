<h4 class="fw-bold py-3">Experence Type</h4>

<div class="mb-3">
    <button class="btn btn-success" id="addContact" data-bs-toggle="modal" data-bs-target="#addExpTypeModel">Add</button>
</div>

<div class="card mb-4">
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php if (is_array($exps)): ?>
                <?php foreach($exps as $exp): ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?=$exp['id']?></strong></td>
                        <td><?=$exp['name']?></td>
                        <td><?=$exp['description']?></td>
                        <td>
                            <button type="button" class="btn btn-primary edit-btn" id="updateContact" data-bs-toggle="modal" data-bs-target="#updateExpTypeModel">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger delete-btn" id="deleteContact" data-bs-toggle="modal" data-bs-target="#deleteExpTypeModel">
                                Delete
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center mt-2">Đéo có dữ liệu</p>
            <?php endif; ?>
        </tbody>
        </table>
    </div>
</div>

<div class="modal fade text-left" id="addExpTypeModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-success">ADD EXP TYPE</h4>
            </div>
            <form action="<?=_WEB_ROOT?>/add-exp-type" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="addNameText" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="5" id="addLinkText" name="link" required></textarea>
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

<div class="modal fade text-left" id="updateExpTypeModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-primary">EDIT EXP TYPE</h4>
            </div>
            <form action="<?=_WEB_ROOT?>/update-exp-type" method="POST">
                <input type="hidden" id="updateIdText" name="id">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" id="updateNameText">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">Description</label>
                        <div class="col-md-9">
                        <textarea class="form-control" rows="5" id="updateDesText" name="link" required></textarea>
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

<div class="modal fade text-left" id="deleteExpTypeModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-danger">DELETE EXP TYPE</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Do you want to delete this contact?</p>
            </div>
            <form action="<?=_WEB_ROOT?>/delete-exp-type" method="POST">
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
        var des = row.find('td:eq(2)').text();

        $('#updateIdText').val(id);
        $('#updateNameText').val(name);
        $('#updateDesText').val(des);
    });

    $('.delete-btn').click(function() {
        var row = $(this).closest('tr');

        var id = row.find('td:eq(0)').text();

        $('#deleteIdText').val(id);
    });
</script>