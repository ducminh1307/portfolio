<h4 class="fw-bold py-3">Skill type</h4>

<div class="mb-3">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModel">Add</button>
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
            <?php if (is_array($skillTypes)): ?>
                <?php foreach($skillTypes as $skillType): ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?=$skillType['id']?></strong></td>
                        <td><?=$skillType['name']?></td>
                        <td style=" max-width: 620px; white-space: normal; word-wrap: break-word;"><?=$skillType['description']?></td>
                        <td>
                            <button type="button" class="btn btn-primary edit-btn"data-bs-toggle="modal" data-bs-target="#updateModel">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModel">
                                Delete
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <div class="text-center mt-3">Đéo có dữ liệu</div>
                <?php endif; ?>
        </tbody>
        </table>
    </div>
</div>

<div class="modal fade text-left" id="addModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-success">ADD SKILL TYPE</h4>
            </div>
            <form action="<?=_WEB_ROOT?>/add-skill-type" method="POST">
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
                            <textarea name="description" id="" rows="10" class="form-control"></textarea>
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

<div class="modal fade text-left" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-primary">EDIT SKILL TYPE</h4>
            </div>
            <form action="<?=_WEB_ROOT?>/update-skill-type" method="POST">
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
                            <textarea name="description" id="updateDesText" rows="10" class="form-control"></textarea>
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

<div class="modal fade text-left" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-danger">DELETE SKILL TYPE</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Do you want to delete this skill type?</p>
            </div>
            <form action="<?=_WEB_ROOT?>/delete-skill-type" method="POST">
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