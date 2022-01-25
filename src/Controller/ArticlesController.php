<?php
declare(strict_types=1);

namespace App\Controller;

class ArticlesController extends AppController
{
    
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
            'limit' => 1,
        ]; 

        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
    }
}
