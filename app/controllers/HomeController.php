<?php
    class Home extends controller {

        public $about;
        public $contact;
        public $work;
        public $skill;
        public $education;
        public $expType;
        public $exp;
        public $project;
        public $projectType;

        public $request;
        public $response;

        function __construct() {
            $this->about = $this->model('aboutModel');
            $this->contact = $this->model('contactModel');
            $this->work = $this->model('workModel');
            $this->skill = $this->model('skillModel');
            $this->education = $this->model('educationModel');
            $this->expType = $this->model('expTypeModel');
            $this->exp = $this->model('expModel');
            $this->project = $this->model('projectModel');
            $this->projectType = $this->model('projectTypeModel');

            $this->request  = new Request();
            $this->response  = new Response();
        }

        public function index() {
            $this->view('layouts/home_layout', [
                'data'=>[
                    'about' => $this->about->getAbout(),
                    'contacts' => $this->contact->getContact(),
                    'works' => $this->work->getWorks(),
                    'skills' => $this->skill->getSkills(),
                    'educations' => $this->education->getEducations(),
                    'exps' => $this->exp->getExps(),
                    'portfolio' => $this->project->getProjectInPortfolio(),
                    'projectTypes' => $this->projectType->getProjectTypes(),
                    'projects' => $this->project->getProjects(),
                ],
                'page'=>'home/home',
                'title'=> 'Portfolio'
            ]);
        }

        public function project($id) {
            $this->view('layouts/detail_layout', [
                'data'=>[
                    'project' => $this->project->getProject($id),
                ],
                'page'=>'home/project',
                'title'=> 'Portfolio | '.$this->project->getProject($id)['name']
            ]);
        }

        public function contactProcess() {
            if ($this->request->isPost()) {
                $name = $this->request->getFields()['name'];
                $phone = $this->request->getFields()['phone'];
                $mailFrom = $this->request->getFields()['mail'];
                $subject = $this->request->getFields()['subject'];
                $message = $this->request->getFields()['message'];

                sendMail($name, $phone, $mailFrom, $subject, $message);

                $this->response->redirect('');
            }
        }

    }
?>