<?php if (!isset($project)) : ?>
    <h4 class="fw-bold mt-3">Add Project</h4>
<?php else : ?>
    <h4 class="fw-bold mt-3">Update Project</h4>
<?php endif; ?>

<div class="card mt-4">
    <div class="card-body">
        <form action="<?= _WEB_ROOT ?>/<?= !isset($project) ? "/add-project" : "update-project" ?>/add-project" method="POST" id="formSubmit" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $project['id'] ?>">
            <div class="mb-3">
                <label for="addNameText" class="col-form-label text-center">Name</label>
                <input class="form-control" type="text" id="addNameText" name="name" value="<?php if (isset($project)) {
                                                                                                echo $project['name'];
                                                                                            } ?>" required>
            </div>
            <div class="mb-3 row">
                <div class="col-6 d-flex align-item-center">
                    <label for="sortText" class="col-form-label" style="margin-right: 20px">Sort</label>
                    <input type="number" name="sort" id="sortText" class="form-control" min="0" value="<?php if (isset($project)) echo $project['sort']?>">
                </div>
                <div class="col-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="on_top" <?php if (isset($project)) {
                                                                                                                        if ($project['on_top'] == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        }
                                                                                                                    } ?>>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Show project in Portfolio</label>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-6">
                    <label for="project_type" class="col-md-3 col-form-label">Project Type</label>
                    <select name="project_type" id="project_type" class="form-select">
                        <option value="">Default selection</option>
                        <?php if (isset($project)) : ?>
                            <?php foreach ($projectTypes as $projectType) : ?>
                                <option value="<?= $projectType['id'] ?>" <?php echo ($projectType['id'] == $project['project_type_id']) ? 'selected' : '' ?>><?= $projectType['name'] ?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <?php foreach ($projectTypes as $projectType) : ?>
                                <option value="<?= $projectType['id'] ?>"><?= $projectType['name'] ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="col-6">
                    <label for="thumb" class="col-md-3 col-form-label">Thumb</label>
                    <input class="form-control" type="file" id="thumb" name="thumb">
                </div>
            </div>
            <div class="mb-3">
                <label for="editor" class="col-form-label">Description</label>
                <textarea name="description" class="editor" id="editor"><?php if (isset($project)) {
                                                                            echo htmlspecialchars_decode($project['content']);
                                                                        } ?></textarea>
            </div>
            <?php if (!isset($project)) : ?>
                <button type="submit" style="width: 100%;" class="btn btn-success ml-1" data-bs-dismiss="modal" id="insertmenu">
                    <span class="block">Add</span>
                </button>
            <?php else : ?>
                <button type="submit" style="width: 100%;" class="btn btn-primary ml-1" data-bs-dismiss="modal" id="insertmenu">
                    <span class="block">Update</span>
                </button>
            <?php endif; ?>
        </form>
    </div>
</div>

<script>
    const image_upload_handler = (blobInfo, progress) => {
        return new Promise((resolve, reject) => {
            const formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            $.ajax({
                url: '<?= _WEB_ROOT ?>/upload-image',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                xhr: function() {
                    const xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener('progress', (e) => {
                        if (e.lengthComputable) {
                            progress((e.loaded / e.total) * 100);
                        }
                    }, false);
                    return xhr;
                },
                success: function(response) {
                    if (typeof response.location === 'string') {
                        resolve(response.location);
                    } else {
                        reject('Invalid JSON: ' + JSON.stringify(response));
                    }
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 403) {
                        reject({
                            message: 'HTTP Error: ' + xhr.status,
                            remove: true
                        });
                    } else {
                        reject('HTTP Error: ' + xhr.status + ' - ' + error);
                    }
                }
            });
        });
    };
    tinymce.init({
        document_base_url: "<?= _WEB_ROOT ?>/",
        selector: 'textarea#editor',
        plugins: 'preview powerpaste casechange importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media mediaembed codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker editimage help formatpainter permanentpen pageembed charmap tinycomments mentions quickbars linkchecker emoticons advtable footnotes autocorrect typography advtemplate markdown',
        toolbar1: 'fullscreen undo redo | blocks fontfamily fontsize | bold italic underline strikethrough forecolor backcolor | ltr rtl casechange | formatpainter removeformat | align lineheight',
        toolbar2: 'tableofcontents checklist numlist bullist indent outdent | link image media pageembed table | pagebreak nonbreaking emoticons charmap | codesample  code | addcomment showcomments | spellcheckdialog a11ycheck typography | print visualblocks searchreplace preview | aidialog aishortcuts',
        images_upload_url: '<?= _WEB_ROOT ?>/upload-image',
        image_caption: true,
        images_upload_handler: image_upload_handler,
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        menubar: 'happy',
        height: 700,
        setup: function(editor) {
            editor.on('PreInit', function() {
                editor.parser.addNodeFilter('iframe', function(nodes) {
                    nodes.forEach(function(node) {
                        node.attr('sandbox', 'allow-scripts allow-same-origin');
                    });
                });
            });
            editor.on('SetupMediaEmbedPreview', function(e) {
                e.meta.sandbox = 'allow-scripts allow-same-origin';
            });
        }
    });
</script>