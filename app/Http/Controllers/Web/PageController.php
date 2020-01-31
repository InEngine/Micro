<?php

namespace App\Http\Controllers\Web;

use App\Pages\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    protected $pageManager;

    public function __construct(Manager $pageManager)
    {
        $this->pageManager = $pageManager;
    }

    public function home()
    {
        return $this->pageManager->getHome();
    }


    public function route($page)
    {

    }


}
