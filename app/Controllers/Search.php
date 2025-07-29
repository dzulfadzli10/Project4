<?php

namespace App\Controllers;

use App\Models\PostModel;

class Search extends BaseController
{
    public function index()
    {
        $keyword = $this->request->getGet('keyword');

        if (!$keyword) {
            return redirect()->to('/');
        }

        $postModel = new PostModel();
        $data['keyword'] = $keyword;
        $data['results'] = $postModel
            ->groupStart()
                ->like('title', $keyword)
                ->orLike('content', $keyword)
            ->groupEnd()
            ->where('status', 'published')
            ->findAll();


        return view('search', $data);
    }
}
