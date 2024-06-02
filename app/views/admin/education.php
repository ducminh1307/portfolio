<h4 class="fw-bold py-3">Education</h4>

<div class="mb-3">
    <button class="btn btn-success" id="addeducation" data-bs-toggle="modal" data-bs-target="#addEducationModel">Add</button>
</div>

<div class="card mb-4">
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Major</th>
                <th>Time</th>
                <th>Mark</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php if (is_array($educations)): ?>
                <?php foreach($educations as $education): ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"><?=$education['id']?></strong></td>
                        <td style="max-width: 200px;white-space: pre-wrap; word-wrap: break-word;"><?=$education['name']?></td>
                        <td><?=$education['major']?></td>
                        <td><?=$education['time']?></td>
                        <td><?=$education['mark']?></td>
                        <td style="max-width: 400px;white-space: pre-wrap; word-wrap: break-word;"><?=$education['description']?></td>
                        <td>
                            <button type="button" class="btn btn-primary edit-btn" id="updateeducation" data-bs-toggle="modal" data-bs-target="#updateEducationModel">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger delete-btn" id="deleteeducation" data-bs-toggle="modal" data-bs-target="#deleteEducationModel">
                                Delete
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="mt-3 text-center">Đéo có dữ liệu</p>
            <?php endif; ?>
        </tbody>
        </table>
    </div>
</div>

<div class="modal fade text-left" id="addEducationModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-success">ADD EDUCATION</h4>
            </div>
            <form action="<?=_WEB_ROOT?>/add-education" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="addNameText" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">Major</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="addLinkText" name="major" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">time</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="addLinkText" name="time" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">mark</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="addLinkText" name="mark" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="10" id="addLinkText" name="des"></textarea>
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

<div class="modal fade text-left" id="updateEducationModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-primary">EDIT EDUCATION</h4>
            </div>
            <form action="<?=_WEB_ROOT?>/update-education" method="POST">
                <input type="hidden" id="updateIdText" name="id">
                <div class="modal-body">
                <div class="mb-3 row">
                        <label for="nameText" class="col-md-3 col-form-label text-center">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="updateNameText" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">Major</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="updateMajorText" name="major" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">time</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="updateTimeText" name="time" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">mark</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="updateMarkText" name="mark" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkText" class="col-md-3 col-form-label text-center">description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="10" id="updateDesText" name="des"></textarea>
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

<div class="modal fade text-left" id="deleteEducationModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-danger">DELETE EDUCATION</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Do you want to delete this education?</p>
            </div>
            <form action="<?=_WEB_ROOT?>/delete-education" method="POST">
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
        var major = row.find('td:eq(2)').text();
        var time = row.find('td:eq(3)').text();
        var mark = row.find('td:eq(4)').text();
        var des = row.find('td:eq(5)').text();

        $('#updateIdText').val(id);
        $('#updateNameText').val(name);
        $('#updateMajorText').val(major);
        $('#updateTimeText').val(time);
        $('#updateMarkText').val(mark);
        $('#updateDesText').val(des);
    });

    $('.delete-btn').click(function() {
        var row = $(this).closest('tr');

        var id = row.find('td:eq(0)').text();

        $('#deleteIdText').val(id);
    });
</script>