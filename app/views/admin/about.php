<h4 class="fw-bold py-3">About</h4>
            
<div class="card mb-4">
    <div class="card-body">
    <form class="row" method="POST" action="<?=_WEB_ROOT?>/update-about" enctype="multipart/form-data">
        <div class="col-lg-3 col-md-12">
            <div class="mb-3 limit-img">
                <img src="<?=_WEB_PUBLIC?>/files/images/avatar/<?=$about['avatar']?>" alt="avatar" width="100%">
            </div>
            <a href="<?=_WEB_PUBLIC?>/files/pdf/CV.pdf" target="_blank" class="btn btn-info col-12">Check CV</a>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Full Name</label>
                <input type="text" class="form-control" name="name" id="basic-default-fullname" value="<?= $about['name'] ?>"/>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Your avatar (.PNG, .JPG, .JPEG)</label>
                <input class="form-control" type="file" id="formFile" name="avatar"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-description">Description</label>
                <textarea id="basic-default-description" name="description" class="form-control" rows="5" placeholder="Description about you" style="text-align: justify;"><?= $about['description']?></textarea>
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">Your CV (.PDF)</label>
                <input class="form-control" type="file" id="cv" name="cv"/>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
    </div>
</div>