<h4 class="fw-bold py-3">Project</h4>

<div class="mb-3">
    <a href="<?= _WEB_ROOT ?>/port-admin/add-project" class="btn btn-success">Add</a>
</div>

<div class="card mb-4">
    <div class="table-responsive text-nowrap p-2">
        <table class="table table-striped" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Thumb image</th>
                    <th>On top</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php if (is_array($projects)) : ?>
                    <?php foreach ($projects as $project) : ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger"></i> <strong><?= $project['id'] ?></strong></td>
                            <td><?= $project['name'] ?></td>
                            <td><?=$project['project_type']?></td>
                            <td><img src="<?= _WEB_PUBLIC ?>/files/images/thumbs/<?= $project['image_thumb'] ?>" alt="Image thumb project" width="200px"></td>
                            <?php if ($project['on_top'] == 0) : ?>
                                <td><span class="badge bg-label-danger">NO TOP</span></td>
                            <?php endif; ?>
                            <?php if ($project['on_top'] == 1) : ?>
                                <td><span class="badge bg-label-info">ON TOP</span></td>
                            <?php endif; ?>
                            <td>
                                <a href="<?= _WEB_ROOT ?>/port-admin/update-project/project-<?= $project['id'] ?>" class="btn btn-primary edit-btn">Edit</a>
                                <button type="button" class="btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModel">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade text-left" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title text-danger">DELETE PROJECT</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Do you want to delete this project?</p>
            </div>
            <form action="<?= _WEB_ROOT ?>/delete-project" method="POST">
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
    new DataTable("#table")

    $('.delete-btn').click(function() {
        var row = $(this).closest('tr');

        var id = row.find('td:eq(0)').text();

        $('#deleteIdText').val(id);
    });
</script>