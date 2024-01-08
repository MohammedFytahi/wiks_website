<?php

class Wikis extends Controller
{
    public function index()
    {
        $wikiModel = $this->model('Wiki');
        $wikis = $wikiModel->getAllWikis();

        $data = [
            'wikis' => $wikis
        ];

        $this->view('wikis/index', $data);
    }

   
}
