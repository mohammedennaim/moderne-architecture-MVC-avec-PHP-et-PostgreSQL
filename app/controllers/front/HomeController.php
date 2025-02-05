<?php
namespace App\controllers\front;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $this->view('front/home', ['title' => 'Bienvenue']);
    }
    public function show() {
        $this->view( 'front/article',  ['title' => 'Bienvenue Article']);
    }
}
