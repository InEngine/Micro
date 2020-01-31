<?php


namespace App\Pages;


class Manager
{
    public function getPage()
    {

    }

    public function getHome()
    {
        $page = config('pages.home');
        return $page;
    }
}