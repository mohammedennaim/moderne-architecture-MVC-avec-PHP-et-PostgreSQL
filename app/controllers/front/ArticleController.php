<?php
namespace App\Controllers\Front;

use App\Core\Controller;
use App\Models\ArticleModel;

class ArticleController extends Controller {
    public function show(): void {
        $articles = ArticleModel::getAll();
        // $this->view('front/article', ['articles' => $articles]);
    }
}
