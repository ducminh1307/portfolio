<?php
class Admin extends controller
{

    public $about;
    public $account;
    public $contact;
    public $work;
    public $skillType;
    public $skill;
    public $education;
    public $expType;
    public $exp;
    public $projectType;
    public $project;

    public $request;
    public $response;

    function __construct()
    {
        $this->about = $this->model('aboutModel');
        $this->account = $this->model(('accountModel'));
        $this->contact = $this->model('contactModel');
        $this->work = $this->model('workModel');
        $this->skillType = $this->model('skillTypeModel');
        $this->skill = $this->model('skillModel');
        $this->education = $this->model('educationModel');
        $this->expType = $this->model('expTypeModel');
        $this->exp = $this->model('expModel');
        $this->projectType = $this->model('projectTypeModel');
        $this->project = $this->model('projectModel');

        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $this->checkAdmin();
        $this->view('layouts/admin_layout', [

            'body' => [
                'about' => [
                    'name' => $this->about->getAbout()["name"],
                    'description' => $this->about->getAbout()['description'],
                    'avatar' => $this->about->getAbout()['image']
                ]
            ],
            'page' => 'admin/about',
            'title' => 'Dashboard | About'
        ]);
    }

    public function updateAboutProcess()
    {
        $typesImage = array('jpg', 'jpeg', 'png');
        $path = 'public/assets/files/images/avatar/';
        if ($this->request->isPost()) {
            $name = $this->request->getFields()["name"];
            $img = $_FILES['avatar'];
            $cv = $_FILES['cv'];
            $description = $this->request->getFields()["description"];
            if ($img) {
                $file_type = explode('.', $img['name']);
                $type = end($file_type);

                if (in_array($type,  $typesImage)) {
                    $img_tmp = $img['tmp_name'];
                    move_uploaded_file($img_tmp, $path . 'avatar.' . $type);
                    $this->about->updateAbout($name, 'avatar.' . $type, $description);
                }
            }
            if ($cv) {
                $fileCv_type = explode('.', $cv['name']);
                $typeCV = end($fileCv_type);
                $pathCv = 'public/assets/files/pdf/';
                if ($typeCV == 'pdf') {
                    $imgCv_tmp = $cv['tmp_name'];
                    move_uploaded_file($imgCv_tmp, $pathCv . 'CV.' . $typeCV);
                }
            } else {
                $this->about->updateAboutWithoutImage($name, $description);
            }
            $this->response->redirect('port-admin/about');
        }
    }

    public function contact()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'contacts' => $this->contact->getContact()
            ],
            'page' => 'admin/contact',
            'title' => 'Dashboard | Contact'
        ]);
    }

    public function addContactProcess()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getFields()["name"];
            $icon = $this->request->getFields()["icon"];
            $link = $this->request->getFields()["link"];

            $this->contact->addContact($name, $icon, $link);

            $this->response->redirect("port-admin/contact");
        }
    }

    public function updateContactProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];
            $name = $this->request->getFields()["name"];
            $icon = $this->request->getFields()["icon"];
            $link = $this->request->getFields()["link"];

            $this->contact->updateContact($id, $name, $icon, $link);

            $this->response->redirect("port-admin/contact");
        }
    }

    public function deleteContactProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];

            $this->contact->deleteContact($id);

            $this->response->redirect("port-admin/contact");
        }
    }

    public function work()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'works' => $this->work->getWorks(),
            ],
            'page' => 'admin/work',
            'title' => 'Dashboard | Work'
        ]);
    }

    public function addWorkProcess()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getFields()["name"];
            $icon = $this->request->getFields()["icon_feather"];
            $description = $this->request->getFields()["description"];

            $this->work->addWork($name, $icon, $description);

            $this->response->redirect("port-admin/work");
        }
    }

    public function updateWorkProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];
            $name = $this->request->getFields()["name"];
            $icon = $this->request->getFields()["icon"];
            $description = $this->request->getFields()["description"];

            $this->work->updateWork($id, $name, $icon, $description);

            $this->response->redirect("port-admin/work");
        }
    }

    public function deleteWorkProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];

            $this->work->deleteWork($id);

            $this->response->redirect("port-admin/work");
        }
    }

    public function education()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'educations' => $this->education->getEducations()
            ],
            'page' => 'admin/education',
            'title' => 'Dashboard | Education'
        ]);
    }

    public function addEducationProcess()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getFields()["name"];
            $major = $this->request->getFields()["major"];
            $time = $this->request->getFields()["time"];
            $mark = $this->request->getFields()["mark"];
            $des = $this->request->getFields()["des"];

            $this->education->addEducation($name, $major, $time, $mark, $des);

            $this->response->redirect("port-admin/education");
        }
    }

    public function updateEducationProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];
            $name = $this->request->getFields()["name"];
            $major = $this->request->getFields()["major"];
            $time = $this->request->getFields()["time"];
            $mark = $this->request->getFields()["mark"];
            $des = $this->request->getFields()["des"];

            $this->education->updateEducation($id, $name, $major, $time, $mark, $des);

            $this->response->redirect("port-admin/education");
        }
    }

    public function deleteEducationProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];

            $this->education->deleteEducation($id);

            $this->response->redirect("port-admin/education");
        }
    }

    public function skillType()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'skillTypes' => $this->skillType->getSkillTypes()

            ],
            'page' => 'admin/skillType',
            'title' => 'Dashboard | Skill Type'
        ]);
    }

    public function addSkillTypeProcess()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getFields()["name"];
            $description = $this->request->getFields()["description"];

            $this->skillType->addSkillType($name, $description);

            $this->response->redirect("port-admin/skill-type");
        }
    }

    public function updateSkillTypeProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];
            $name = $this->request->getFields()["name"];
            $description = $this->request->getFields()["description"];

            $this->skillType->updateSkillType($id, $name, $description);

            $this->response->redirect("port-admin/skill-type");
        }
    }

    public function deleteSkillTypeProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];

            $this->skillType->deleteSkillType($id);

            $this->response->redirect("port-admin/skill-type");
        }
    }

    public function skill()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'skills' => $this->skill->getSkills(),
                'skillTypes' => $this->skillType->getSkillTypes()
            ],
            'page' => 'admin/skill',
            'title' => 'Dashboard | Skill'
        ]);
    }

    public function addSkillProcess()
    {
        $path = 'public/assets/files/images/icons/';
        if ($this->request->isPost()) {
            $name = $this->request->getFields()["name"];
            $skill_type = $this->request->getFields()["skillType"];
            $name_icon = strtolower($this->request->getFields()["nameIcon"]) . '.svg';
            $img = $_FILES['icon']['name'];
            if ($img) {
                $file_type = explode('.', $img);
                $type = end($file_type);

                if ($type == 'svg') {
                    $img_tmp = $_FILES['icon']['tmp_name'];
                    move_uploaded_file($img_tmp, $path . $name_icon);
                    $this->skill->addSkill($skill_type, $name, $name_icon);
                }
            }
            $this->response->redirect('port-admin/skill');
        }
    }

    public function updateSkillProcess()
    {
        $path = 'public/assets/files/images/icons/';
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];
            $name = $this->request->getFields()["name"];
            $skill_type = $this->request->getFields()["skillType"];
            $name_icon = strtolower($this->request->getFields()["nameIcon"]) . '.svg';
            $img = $_FILES['icon']['name'];
            if ($img) {
                $file_type = explode('.', $img);
                $type = end($file_type);

                if ($type == 'svg') {
                    $img_tmp = $_FILES['icon']['tmp_name'];
                    move_uploaded_file($img_tmp, $path . $name_icon);
                }
            }
            if ($skill_type == 0) {
                $this->skill->updateSkill1($id, $name, $name_icon);
            } else {
                $this->skill->updateSkill($id, $name, $name_icon, $skill_type);
            }
            $this->response->redirect('port-admin/skill');
        }
    }

    public function deleteSkillProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];
            $this->skill->deleteSkill($id);

            $this->response->redirect('port-admin/skill');
        }
    }

    public function expType()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'exps' => $this->expType->getExpType()
            ],
            'page' => 'admin/expType',
            'title' => 'Dashboard | Expe type'
        ]);
    }

    public function addExpTypeProcess()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getFields()["name"];
            $des = $this->request->getFields()["link"];

            $this->expType->addExpType($name, $des);

            $this->response->redirect("port-admin/exp-type");
        }
    }

    public function updateExpTypeProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];
            $name = $this->request->getFields()["name"];
            $des = $this->request->getFields()["link"];

            $this->expType->updateExpType($id, $name, $des);

            $this->response->redirect("port-admin/exp-type");
        }
    }

    public function deleteExpTypeProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];

            $this->expType->deleteExpType($id);

            $this->response->redirect("port-admin/exp-type");
        }
    }

    public function exp()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'exps' => $this->exp->getExps(),
                'exp_types' => $this->expType->getExpType()
            ],
            'page' => 'admin/exp',
            'title' => 'Dashboard | Experence'
        ]);
    }

    public function addExpProcess()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getFields()["name"];
            $exp_type = $this->request->getFields()["expType"];
            $year = $this->request->getFields()["year"];
            $role = $this->request->getFields()["role"];
            $des = $this->request->getFields()["description"];

            $this->exp->addExp($name, $exp_type, $year, $role, $des);

            $this->response->redirect("port-admin/exp");
        }
    }

    public function updateExpProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];
            $name = $this->request->getFields()["name"];
            $exp_type = $this->request->getFields()["expType"];
            $year = $this->request->getFields()["year"];
            $role = $this->request->getFields()["role"];
            $des = $this->request->getFields()["description"];

            if ($exp_type == 0) {
                $this->exp->updateExpNoneType($id, $name, $year, $role, $des);
            } else {
                $this->exp->updateExp($id, $name, $exp_type, $year, $role, $des);
            }

            $this->response->redirect("port-admin/exp");
        }
    }

    public function deleteExpProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()["id"];

            $this->exp->deleteExp($id);

            $this->response->redirect("port-admin/exp");
        }
    }

    public function projectType()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'projectTypes' => $this->projectType->GetProjectTypes(),
            ],
            'page' => 'admin/projectType',
            'title' => 'Dashboard | Project Type'
        ]);
    }

    public function addProjectTypeProcess()
    {
        if ($this->request->isPost()) {
            $name = $this->request->getFields()['name'];
            $des = $this->request->getFields()['description'];

            $this->projectType->addProjectType($name, $des);

            $this->response->redirect('port-admin/project-type');
        }
    }

    public function updateProjectTypeProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()['id'];
            $name = $this->request->getFields()['name'];
            $des = $this->request->getFields()['description'];

            $this->projectType->updateProjectType($id, $name, $des);

            $this->response->redirect('port-admin/project-type');
        }
    }

    public function deleteProjectTypeProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()['id'];

            $this->projectType->deleteProjectType($id);

            $this->response->redirect('port-admin/project-type');
        }
    }

    public function project()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'projects' => $this->project->getProjects()
            ],
            'page' => 'admin/project',
            'title' => 'Dashboard | Project'
        ]);
    }

    public function addProject()
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'projectTypes' => $this->projectType->getProjectTypes(),
            ],
            'page' => 'admin/projectForm',
            'title' => 'Dashboard | Add Project'
        ]);
    }

    public function updateProject($id)
    {
        $this->view('layouts/admin_layout', [
            'body' => [
                'projectTypes' => $this->projectType->getProjectTypes(),
                'project' => $this->project->getProject($id)
            ],
            'page' => 'admin/projectForm',
            'title' => 'Dashboard | Update Project'
        ]);
    }

    public function addProjectProcess()
    {
        if ($this->request->isPost()) {
            $upload_dir = 'public/assets/files/images/thumbs/';
            $types = array('png', 'jpg', 'jpeg');

            $name_project = $this->request->getFields()['name'];
            $projectType = $this->request->getFields()['project_type'];
            $content = htmlspecialchars($this->request->getFields()['description']);
            $thumb = $_FILES['thumb'];
            $sort = $this->request->getFields()['sort'];
            
            if (isset($this->request->getFields()['on_top'])) {
                $onTop = 1;
            } else {
                $onTop = 0;
            }

            if (is_uploaded_file($thumb['tmp_name'])) {
                $ext = strtolower(pathinfo($thumb['name'], PATHINFO_EXTENSION));
                if (in_array($ext, $types)) {
                    $name_image = slugify($name_project) . '-' . mt_rand(10000, 99999).'.'.$ext;
                    $file_path = $upload_dir . $name_image;
                    move_uploaded_file($thumb['tmp_name'], $file_path);
                    $this->project->addProject($name_project, $projectType, $name_image, $content, $onTop, $sort);

                    $this->response->redirect('port-admin/project');
                }
            }
        }
    }

    public function updateProjectProcess()
    {
        if ($this->request->isPost()) {
            $upload_dir = 'public/assets/files/images/thumbs/';
            $types = array('png', 'jpg', 'jpeg');

            $id = $this->request->getFields()['id'];
            $name_project = $this->request->getFields()['name'];
            $projectType = $this->request->getFields()['project_type'];
            $content = htmlspecialchars($this->request->getFields()['description']);
            $thumb = $_FILES['thumb'];
            $sort = $this->request->getFields()['sort'];

            if (isset($this->request->getFields()['on_top'])) {
                $onTop = 1;
            } else {
                $onTop = 0;
            }

            if (is_uploaded_file($thumb['tmp_name'])) {
                $name_old = $this->project->getProject($id)['image_thumb'];
                unlink($upload_dir . $name_old);

                $ext = strtolower(pathinfo($thumb['name'], PATHINFO_EXTENSION));
                if (in_array($ext, $types)) {
                    $name_image = slugify($name_project) . '-' . mt_rand(10000, 99999).'.'.$ext;
                    $file_path = $upload_dir . $name_image;

                    move_uploaded_file($thumb['tmp_name'], $file_path);
                    
                    $this->project->updateProject($id, $name_project, $projectType, $name_image, $content, $onTop, $sort);

                    $this->response->redirect('port-admin/project');
                }
            } else {
                $this->project->updateProjectNoThumb($id, $name_project, $projectType, $content, $onTop, $sort);
                
                $this->response->redirect('port-admin/project');
            }
        }
    }

    public function deleteProjectProcess()
    {
        if ($this->request->isPost()) {
            $id = $this->request->getFields()['id'];

            $this->project->deleteProject($id);

            $this->response->redirect('port-admin/project');
        }
    }

    public function login()
    {
        $this->view("admin/login", [
            'data' => [
                'test' => $this->account->getUser('phamducminh', 'MINH!#)&')
            ],
            'title' => 'Login Page'
        ]);
    }

    public function loginProcess()
    {
        if ($this->request->isPost()) {
            $user = $this->request->getFields()["user"];
            $pass = $this->request->getFields()["pass"];
            $mess = "";
            if ($this->account->checkUser($user)) {
                if ($this->account->getUser($user, $pass)) {
                    session::setSession('account', $this->account->getUser($user, $pass));
                    if ($this->request->getFields()['rem'] == 1) {
                        setcookie('username', $user, time() + 3600 * 24);
                        setcookie('password', $pass, time() + 3600 * 24);
                    } else {
                        setcookie('username', $user, time() - 60);
                        setcookie('password', $pass, time() - 60);
                    }
                    $mess = '<script>window.location.href="' . _WEB_ROOT . '/port-admin"</script>';
                } else {
                    $mess = 'Username or password is incorect';
                }
            } else {
                $mess = 'Username or password is incorect';
            }

            echo json_encode($mess);
        }
    }

    public function checkAdmin()
    {
        if (!session::checkSession('account')) {
            $this->response->redirect('port-admin/login');
        }
    }

    public function uploadImage()
    {
        $data = [];
        $types = array('jpg', 'png', 'jpeg');
        $upload_dir = 'public/assets/files/images/images/';
        reset($_FILES);
        $temp = current($_FILES);
        if (is_uploaded_file($temp['tmp_name'])) {
            $file_path = $upload_dir . $temp['name'];
            $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

            if (!in_array($file_type, $types)) {
                header("HTTP/1.1 400 Invalid extension.");
                return;
            }

            move_uploaded_file($temp['tmp_name'], $file_path);

            echo json_encode(array('location' => _WEB_PUBLIC . '/files/images/images/' . $temp['name']));
        } else {
            header("HTTP/1.1 500 Server Error");
        }
    }
}
