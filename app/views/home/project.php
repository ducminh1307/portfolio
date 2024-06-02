<div class="pt--150 pb--100">
    <div class="container">
        <div id="tinymce" class="mce-content-body project content-project">
            <h1 class="title project-title"><?= $project['name'] ?></h1>
            <div class="project-type mb--20">
                <span><?= $project['project_type'] ?></span>
            </div>
            <?php echo htmlspecialchars_decode($project['content']) ?>
        </div>
    </div>
</div>