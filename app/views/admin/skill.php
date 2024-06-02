<h4 class="fw-bold py-3">Skill type</h4>

<div class="mb-3">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModel">Add</button>
</div>
<div class="card mb-4">
    <div class="table-responsive text-nowrap p-2">
        <table class="table table-striped" id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Icon</th>
                <th>Name</th>
                <th>Name icon</th>
                <th>Skill Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php if (is_array($skills)): ?>
                <?php foreach($skills as $skill): ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?=$skill['id']?></strong></td>
                        <td><img src="<?=_WEB_PUBLIC?>/files/images/icons/<?=$skill['icon']?>" height="50" alt="icon"></td>
                        <td><?=$skill['name']?></td>
                        <td><?=$skill['icon']?></td>
                        <td><?=$skill['skill_type']?></td>
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
                <h4 class="modal-title text-success">ADD SKILL</h4>
            </div>
            <form action="<?=_WEB_ROOT?>/add-skill" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="iconFile" class="col-md-3 col-form-label text-center">Icon (SVG)</label>
                        <div class="col-md-9">
                            <input class="form-control" type="file" id="iconFile" name="icon">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="nameText" name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name icon</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="nameText" name="nameIcon">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="typeSelect" class="col-md-3 col-form-label text-center">Skill type</label>
                        <div class="col-md-9">
                            <select id="typeSelect" class="form-select" name="skillType">
                                <option>Default select</option>
                                <?php foreach($skillTypes as $skillType): ?>
                                    <option value="<?=$skillType['id']?>"><?=$skillType['name']?></option>
                                <?php endforeach; ?>
                            </select>
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
                <h4 class="modal-title text-primary">EDIT SKILL</h4>
            </div>
            <form action="<?=_WEB_ROOT?>/update-skill" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="updateIdText" name="id">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="iconFile" class="col-md-3 col-form-label text-center">Icon (SVG)</label>
                        <div class="col-md-9">
                            <input class="form-control" type="file" id="iconFile" name="icon">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" id="updateNameText">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name icon</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="nameIcon" id="updateNameIconText">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="typeSelect" class="col-md-3 col-form-label text-center">Skill type</label>
                        <div class="col-md-9">
                            <select id="typeSelect" class="form-select" name="skillType">
                                <option value="0">Default select</option>
                                <?php foreach($skillTypes as $skillType): ?>
                                    <option value="<?=$skillType['id']?>"><?=$skillType['name']?></option>
                                <?php endforeach; ?>
                            </select>
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
                <h4 class="modal-title text-danger">DELETE SKILL</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Do you want to delete this skill?</p>
            </div>
            <form action="<?=_WEB_ROOT?>/delete-skill" method="POST">
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
        var name = row.find('td:eq(2)').text();
        var icon = row.find('td:eq(3)').text().split(".")[0];
        var type = row.find('td:eq(4)').text();

        $('#updateIdText').val(id);
        $('#updateNameText').val(name);
        $('#updateNameIconText').val(icon);
    });

    $('.delete-btn').click(function() {
        var row = $(this).closest('tr');

        var id = row.find('td:eq(0)').text();

        $('#deleteIdText').val(id);
    });
</script>