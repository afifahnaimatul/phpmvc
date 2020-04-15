<?php

class About extends Controller{
    public function index($name = 'Afifah', $job = 'Programmer'){
        $data['name'] = $name;
        $data['job'] = $job;
        $data['title'] = 'About Me';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page(){
        $data['title'] = 'Pages';
        $this->view('template/header', $data);
        $this->view('About/page');
        $this->view('template/footer');
    }
}