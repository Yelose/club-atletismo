<?php

namespace App\Http\Controllers;

use App\Models\ExternalLink;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public $selected_id, $keyWord, $image, $link;
    public $updateMode = false;

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('footer', [
            'link' => ExternalLink::latest()
                ->orWhere('link', 'LIKE', $keyWord)
                ->orWhere('image', 'LIKE', $keyWord)
                ->orWhere('name', 'LIKE', $keyWord)
        ]);
    }
}
