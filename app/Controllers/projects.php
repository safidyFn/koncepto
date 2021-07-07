<?php

namespace App\Controllers;

class Projects extends BaseController {

    public function index() {

        return view('pages/Projects/list.php');
    
    }

    public function projects_un() {

        $static = model('projects/Projets');

        echo '<h1> Mon ID est le </h1>';

    }

}