<?php


class AdminController extends BaseController
{

    public function __construct()
    {
        $this->path = "/adm/";
    }


    public function index()
    {

        return View::make('admin.index',
            ['path' => $this->path]
        );
    }
}