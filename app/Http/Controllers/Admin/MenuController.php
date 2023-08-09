<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use App\http\Service\menu\MenuService;

class MenuController extends Controller
{
    protected $menuservice;

    public function __construct(MenuService $menuservice){
        $this->menuservice = $menuservice;

    }
    //
    public function create(){
        return view('menu.add',[
            'title' => 'Thêm một danh mục mới']);
    }
    public function store(CreateFormRequest $request){
        $result = $this->menuservice->create($request);

        return redirect()->back();
    }
}
