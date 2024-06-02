<!-- Start Slider Area -->
<div id="home" class="rn-slider-area">
    <div class="slide slider-style-1">
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                    <div class="content">
                        <div class="inner">
                            <span class="subtitle">Welcome to my world</span>
                            <h1 class="title">Hi, I’m <span><?= $about['name'] ?></span><br>
                                <span class="header-caption" id="page-top">
                                    <!-- type headline start-->
                                    <span class="cd-headline clip is-full-width">
                                        <span>a</span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible">Game Developer</b>
                                            <b class="is-hidden">Designer</b>
                                            <b class="is-hidden">Web Developer.</b>
                                        </span>
                                    </span>
                                    <!-- type headline end -->
                                </span>
                            </h1>

                            <div>
                                <p class="description">
                                    <?= $about["description"] ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                <div class="social-share-inner-left">
                                    <span class="title">find with me</span>
                                    <ul class="social-share d-flex liststyle">
                                        <?php if (is_array($contacts)) : ?>
                                            <?php foreach ($contacts as $c) : ?>
                                                <?php if (!in_array($c['name'], array('Phone', 'Email'))) : ?>
                                                    <li class="facebook">
                                                        <a href="<?= $c['link'] ?>" title="<?= $c['name'] ?>" target="_blank"><i data-feather="<?= $c['icon'] ?>"></i></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                <div class="skill-share-inner">
                                    <span class="title">Download my CV</span><br>
                                    <a class="rn-btn download-btn" target="_blank" href="<?= _WEB_PUBLIC ?>/files/pdf/CV.pdf"><span><b>MY CV</b></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 order-lg-2 col-lg-5">
                    <div class="thumbnail">
                        <div class="inner">
                            <img src="<?= _WEB_PUBLIC ?>/files/images/avatar/<?= $about['image'] ?>" alt="Personal Portfolio Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->

<!-- Start Service Area -->
<div class="rn-service-area rn-section-gap section-separator" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left">
                    <span class="subtitle">Features</span>
                    <h2 class="title">What I Do</h2>
                </div>
            </div>
        </div>
        <div class="row row--25 mt_md--10 mt_sm--10">
            <?php if (is_array($works)) : ?>
                <?php foreach ($works as $work) : ?>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="<?= $work['icon_feather'] ?>"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><?= $work['name'] ?></h4>
                                    <p class="description"><?= $work['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- End Service Area  -->

<!-- Start Portfolio Area -->
<div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle">Visit my portfolio and keep your feedback</span>
                    <h2 class="title">My Portfolio</h2>
                </div>
            </div>
        </div>

        <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
            <?php if (is_array($portfolio)) : ?>
                <?php foreach ($portfolio as $project) : ?>
                    <!-- Start Single Portfolio -->
                    <div class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo _WEB_PUBLIC; ?>/files/images/thumbs/<?= $project['image_thumb'] ?>">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)"><?= $project['project_type'] ?></a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                600</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="<?= _WEB_ROOT ?>/project/project-<?= $project['id'] ?>"><?= $project['name'] ?><i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center mt--40">
            <a href="#projects" class="button">See all my projects →</a>
        </div>
    </div>
</div>
<!-- End portfolio Area -->

<!-- Start Resume Area -->
<div class="rn-resume-area rn-section-gap section-separator" id="resume">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <!-- <span class="subtitle">7+ Years of Experience</span> -->
                    <h2 class="title">My Resume</h2>
                </div>
            </div>
        </div>
        <div class="row mt--45">
            <div class="col-lg-12">
                <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                            Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                    </li>
                </ul>
                <!-- Start Tab Content Wrapper  -->
                <div class="rn-nav-content tab-content" id="myTabContents">

                    <!-- Start Single Tab  -->
                    <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                        <div class="education personal-experience-inner mt--40">
                            <div class="row">
                                <!-- Start Skill List Area  -->
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="content">
                                        <h4 class="maintitle">Education Quality</h4>
                                        <div class="experience-list">
                                            <?php if (is_array($educations)) : ?>
                                                <?php foreach ($educations as $education) : ?>
                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4><?= $education['name'] ?></h4>
                                                                    <span><?= $education['major'] ?> (<?= $education['time'] ?>)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span><?= $education['mark'] ?></span>
                                                                </div>
                                                            </div>
                                                            <p class="description"><?= $education['description'] ?></p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Skill List Area  -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab  -->

                    <!-- Start Single Tab  -->
                    <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                        <div class="personal-experience-inner mt--40">
                            <div class="row row--40">

                                <!-- Start Single Progressbar  -->
                                <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                    <div class="progress-wrapper">
                                        <div class="content">
                                            <!-- <span class="subtitle">Features</span> -->
                                            <h4 class="maintitle">Development Skill</h4>

                                            <div class="content-skill d-flex">
                                                <?php foreach ($skills as $skill) : ?>
                                                    <?php if ($skill['skill_type'] == 'Development Skill') : ?>
                                                        <!-- Start Single Progress Charts -->
                                                        <div class="skills d-flex align-items-center">
                                                            <div class="icon-skill">
                                                                <img src="<?= _WEB_PUBLIC ?>/files/images/icons/<?= $skill['icon'] ?>" alt="" width="50">
                                                            </div>
                                                            <h6 class="heading heading-h6 ml-3 my-0"><?= $skill['name'] ?></h6>
                                                        </div>
                                                        <!-- End Single Progress Charts -->
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Progressbar  -->

                                <!-- Start Single Progressbar  -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="progress-wrapper">
                                        <div class="content">
                                            <!-- <span class="subtitle">Features</span> -->
                                            <h4 class="maintitle">Design Skill</h4>

                                            <div class="content-skill d-flex">
                                                <?php foreach ($skills as $skill) : ?>
                                                    <?php if ($skill['skill_type'] == 'Design Skill') : ?>
                                                        <!-- Start Single Progress Charts -->
                                                        <div class="skills d-flex align-items-center">
                                                            <div class="icon-skill">
                                                                <img src="<?= _WEB_PUBLIC ?>/files/images/icons/<?= $skill['icon'] ?>" alt="" width="50">
                                                            </div>
                                                            <h6 class="heading heading-h6 ml-3 my-0"><?= $skill['name'] ?></h6>
                                                        </div>
                                                        <!-- End Single Progress Charts -->
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Progressbar  -->

                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab  -->

                    <!-- Start Single Tab  -->
                    <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                        <div class="personal-experience-inner mt--40">
                            <div class="row">
                                <!-- Start Skill List Area  -->
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="content">
                                        <h4 class="maintitle">Education Experience</h4>
                                        <div class="experience-list">

                                            <?php if (is_array($exps)) : ?>
                                                <?php foreach ($exps as $exp) : ?>
                                                    <?php if ($exp['exp_type'] == 'Education Experience') : ?>
                                                        <!-- Start Single List  -->
                                                        <div class="resume-single-list">
                                                            <div class="inner">
                                                                <div class="heading">
                                                                    <div class="title">
                                                                        <h4><?= $exp['name'] ?></h4>
                                                                        <span>Role: <?= $exp['role'] ?> (<?= $exp['year'] ?>)</span>
                                                                    </div>
                                                                </div>
                                                                <p class="description"><?= $exp['description'] ?></p>
                                                            </div>
                                                        </div>
                                                        <!-- End Single List  -->
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Skill List Area  -->

                                <!-- Start Skill List Area 2nd  -->
                                <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                    <div class="content">
                                        <h4 class="maintitle">Job Experience</h4>
                                        <div class="experience-list">

                                            <?php if (is_array($exps)) : ?>
                                                <?php foreach ($exps as $exp) : ?>
                                                    <?php if ($exp['exp_type'] == 'Job Experience') : ?>
                                                        <!-- Start Single List  -->
                                                        <div class="resume-single-list">
                                                            <div class="inner">
                                                                <div class="heading">
                                                                    <div class="title">
                                                                        <h4><?= $exp['name'] ?></h4>
                                                                        <span>Role: <?= $exp['role'] ?> (<?= $exp['year'] ?>)</span>
                                                                    </div>
                                                                </div>
                                                                <p class="description"><?= $exp['description'] ?></p>
                                                            </div>
                                                        </div>
                                                        <!-- End Single List  -->
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Skill List Area  -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab  -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Resume Area -->

<!-- Start Project Area -->
<div class="rn-client-area rn-section-gap section-separator" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span class="subtitle">Completed Projects</span>
                    <h2 class="title">Projects</h2>
                </div>
            </div>
        </div>

        <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
            <div class="col-lg-4">
                <div class="d-flex flex-wrap align-content-start h-100">
                    <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                        <ul class="nav tab-navigation-button flex-column nav-pills mt- me-3" id="v-pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="tab" href="#v-pills-all" role="tab" aria-selected="true">All</a>
                            </li>
                            <?php if (is_array($projectTypes)) : ?>
                                <?php foreach ($projectTypes as $pt) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-home-tab" data-toggle="tab" href="#v-pills-<?= slugify($pt['name']) ?>" role="tab" aria-selected="true"><?= $pt['name'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-area">
                    <div class="d-flex align-items-start">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="client-card">
                                    <?php if (is_array($projects)) : ?>
                                        <?php foreach ($projects as $p) : ?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <a href="<?= _WEB_ROOT ?>/project/project-<?= $p['id'] ?>">
                                                        <div class="thumbnail">
                                                            <div class="img_thumb">
                                                                <img src="<?php echo _WEB_PUBLIC; ?>/files/images/thumbs/<?= $p['image_thumb'] ?>" alt="Client-image">
                                                            </div>
                                                        </div>
                                                        <div class="seperator"></div>
                                                        <div class="client-name">
                                                            <span><?= $p['name'] ?></span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if (is_array($projectTypes)) : ?>
                                <?php foreach ($projectTypes as $pt) : ?>
                                    <div class="tab-pane fade show" id="v-pills-<?= slugify($pt['name']) ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="client-card">
                                            <?php if (is_array($projects)) : ?>
                                                <?php foreach ($projects as $p) : ?>
                                                    <?php if ($pt['id'] == $p['project_type_id']) : ?>
                                                        <!-- Start Single Brand  -->
                                                        <div class="main-content">
                                                            <div class="inner text-center">
                                                                <a href="<?= _WEB_ROOT ?>/project/project-<?= $p['id'] ?>">
                                                                    <div class="thumbnail">
                                                                        <div class="img_thumb">
                                                                            <img src="<?php echo _WEB_PUBLIC; ?>/files/images/thumbs/<?= $p['image_thumb'] ?>" alt="Client-image">
                                                                        </div>
                                                                    </div>
                                                                    <div class="seperator"></div>
                                                                    <div class="client-name">
                                                                        <span><?= $p['name'] ?></span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Brand  -->
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End project section -->

<!-- Start Blog Content -->
<div class="rn-blog-area rn-section-gap section-separator" id="blogs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="section-title text-center aos-init aos-animate">
                    <span class="subtitle">Visit my blog and keep your feedback</span>
                    <h2 class="title">My Blog</h2>
                </div>
            </div>
        </div>
        <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

            <!-- Start Single blog -->
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 aos-init aos-animate">
                <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="javascript:void(0)">
                                <img src="<?= _WEB_PUBLIC ?>/clients/images/Dribbble/03.jpg" alt="Personal Portfolio Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="category-info">
                                <div class="category-list">
                                    <a href="javascript:void(0)">Canada</a>
                                </div>
                                <div class="meta">
                                    <span><i class="feather-clock"></i> 2 min read</span>
                                </div>
                            </div>
                            <h4 class="title"><a href="javascript:void(0)">T-shirt design is the part of design
                                    <i class="feather-arrow-up-right"></i></a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single blog -->

            <!-- Start Single blog -->
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 aos-init aos-animate">
                <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="javascript:void(0)">
                                <img src="<?= _WEB_PUBLIC ?>/clients/images/Dribbble/01.jpg" alt="Personal Portfolio Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="category-info">
                                <div class="category-list">
                                    <a href="javascript:void(0)">Development</a>
                                </div>
                                <div class="meta">
                                    <span><i class="feather-clock"></i> 2 hour read</span>
                                </div>
                            </div>
                            <h4 class="title"><a href="javascript:void(0)">The services provide for design <i class="feather-arrow-up-right"></i></a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single blog -->

            <!-- Start Single blog -->
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 aos-init aos-animate">
                <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="javascript:void(0)">
                                <img src="<?= _WEB_PUBLIC ?>/clients/images/Dribbble/05.jpg" alt="Personal Portfolio Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="category-info">
                                <div class="category-list">
                                    <a href="javascript:void(0)">Application</a>
                                </div>
                                <div class="meta">
                                    <span><i class="feather-clock"></i> 5 min read</span>
                                </div>
                            </div>
                            <h4 class="title"><a href="javascript:void(0)">Mobile app landing design &amp; app
                                    maintain<i class="feather-arrow-up-right"></i></a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single blog -->

        </div>
        <div class="row justify-content-center mt--40">
            <a href="" class="button">All Blog →</a>
        </div>
    </div>
</div>
<!-- End Blog Content -->

<!-- Start Contact section -->
<div class="rn-contact-area rn-section-gap section-separator" id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle">Contact</span>
                    <h2 class="title">Contact With Me</h2>
                </div>
            </div>
        </div>
        <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
            <div class="col-lg-5">
                <div class="contact-about-area">
                    <div class="thumbnail d-flex justify-content-center">
                        <img src="<?php echo _WEB_PUBLIC; ?>/clients/images/contact.svg" alt="contact-img">
                    </div>
                    <div class="title-area">
                        <h4 class="title">Pham Duc Minh</h4>
                        <!-- <span>Chief Operating Officer</span> -->
                    </div>
                    <div class="description">
                        <p>If you want more information or want to hire me. Call me or send me an email. I will respond as soon as possible.
                        </p>
                        <?php if (is_array($contacts)) : ?>
                            <?php foreach ($contacts as $c) : ?>
                                <?php if ($c['name'] == 'Phone') : ?>
                                    <span class="phone">Phone: <a href="tel:<?= $c['link'] ?>"><?= $c['link'] ?></a></span>
                                <?php endif; ?>
                                <?php if ($c['name'] == 'Email') : ?>
                                    <span class="phone">Email: <a href="mailto:<?= $c['link'] ?>"><?= $c['link'] ?></a></span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="social-area">
                        <div class="name">FIND WITH ME</div>
                        <div class="social-icone">
                            <?php if (is_array($contacts)) : ?>
                                <?php foreach ($contacts as $c) : ?>
                                    <?php if (!in_array($c['name'], array('Phone', 'Email'))) : ?>
                                        <a href="<?= $c['link'] ?>" title="<?= $c['name'] ?>" target="_blank"><i data-feather="<?= $c['icon'] ?>"></i></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 contact-input">
                <div class="contact-form-wrapper">
                    <div class="introduce">

                        <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="<?= _WEB_ROOT ?>/send-mail">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact-name">Your Name</label>
                                    <input class="form-control form-control-lg" name="name" id="contact-name" type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact-phone">Phone Number</label>
                                    <input class="form-control" name="phone" id="contact-phone" type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input class="form-control form-control-sm" id="contact-email" name="mail" type="email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="subject">subject</label>
                                    <input class="form-control form-control-sm" id="subject" name="subject" type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contact-message">Your Message</label>
                                    <textarea name="message" id="contact-message" cols="30" rows="10" required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button name="submit" type="submit" id="submit" class="rn-btn">
                                    <span>SEND MESSAGE</span>
                                    <i data-feather="arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact section -->