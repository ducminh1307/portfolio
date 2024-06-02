<?php
$routes['default_controller'] = 'Home';
$routes['home'] = 'home/index';

//home - project
$routes['project/project-(\d+)'] = 'home/project/$1';

//admin-about
$routes['port-admin'] = 'admin/index';
$routes['port-admin/about'] = 'admin/index';
$routes['update-about'] = 'admin/updateAboutProcess';

//admin-contact
$routes['port-admin/contact'] = 'admin/contact';
$routes['add-contact'] = 'admin/addContactProcess';
$routes['update-contact'] = 'admin/updateContactProcess';
$routes['delete-contact'] = 'admin/deleteContactProcess';

//admin-work
$routes['port-admin/work'] = 'admin/work';
$routes['add-work'] = 'admin/addWorkProcess';
$routes['update-work'] = 'admin/updateWorkProcess';
$routes['delete-work'] = 'admin/deleteWorkProcess';

//admin-education
$routes['port-admin/education'] = 'admin/education';
$routes['add-education'] = 'admin/addEducationProcess';
$routes['update-education'] = 'admin/updateEducationProcess';
$routes['delete-education'] = 'admin/deleteEducationProcess';

//admin-skill
$routes['port-admin/skill'] = 'admin/skill';
$routes['add-skill'] = 'admin/addSkillProcess';
$routes['update-skill'] = 'admin/updateSkillProcess';
$routes['delete-skill'] = 'admin/deleteSkillProcess';

//admin-skill type
$routes['port-admin/skill-type'] = 'admin/skillType';
$routes['add-skill-type'] = 'admin/addSkillTypeProcess';
$routes['update-skill-type'] = 'admin/updateSkillTypeProcess';
$routes['delete-skill-type'] = 'admin/deleteSkillTypeProcess';

//admin-exp
$routes['port-admin/exp'] = 'admin/exp';
$routes['add-exp'] = 'admin/addExpProcess';
$routes['update-exp'] = 'admin/updateExpProcess';
$routes['delete-exp'] = 'admin/deleteExpProcess';

//admin-exp type
$routes['port-admin/exp-type'] = 'admin/expType';
$routes['add-exp-type'] = 'admin/addExpTypeProcess';
$routes['update-exp-type'] = 'admin/updateExpTypeProcess';
$routes['delete-exp-type'] = 'admin/deleteExpTypeProcess';

//admin-project
$routes['port-admin/project'] = 'admin/project';
$routes['add-project'] = 'admin/addProjectProcess';
$routes['update-project'] = 'admin/updateProjectProcess';
$routes['delete-project'] = 'admin/deleteProjectProcess';
$routes['port-admin/add-project'] = 'admin/addProject';
$routes['port-admin/update-project/project-(\d+)'] = 'admin/updateProject/$1';

//admin-project type
$routes['port-admin/project-type'] = 'admin/projectType';
$routes['add-project-type'] = 'admin/addProjectTypeProcess';
$routes['update-project-type'] = 'admin/updateProjectTypeProcess';
$routes['delete-project-type'] = 'admin/deleteProjectTypeProcess';

//admin-login
$routes['port-admin/login'] = 'admin/login';
$routes['login-process'] = 'admin/loginProcess';

//contact
$routes['send-mail'] = 'home/contactProcess';

//upload image
$routes['upload-image'] = 'admin/uploadImage';

//loi 404
$routes['404'] = 'loi/err404';
