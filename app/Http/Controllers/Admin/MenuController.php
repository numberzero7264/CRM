<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\http\Service\menu\MenuService;
use App\Helper\Helper;

class MenuController extends Controller
{
    protected $menuservice;

    public function __construct(MenuService $menuservice){
        $this->menuservice = $menuservice;

    }
    //
    public function create(){
        return view('menu.add',[
            'title' => 'Thêm một danh mục mới',
            'menus'=>$this->menuservice->getParent()]);
            
    }
    public function store(CreateFormRequest $request){
        $this->menuservice->create($request);

        return redirect()->back();
    }
    public function index(){
        // dd($this->menuservice->getall());
        return view('menu.Home',[
            'title' => 'Danh sách danh mục mới nhất',
            'menus'=>$this->menuservice->getAll()
        ]);    
    }
    public function destroy(Request $request):JsonResponse
    {        
        $result=$this->menuservice->destroy($request);
        if($result){
            return response()->json([
            'error' =>false,
            'message' =>'Xóa thành công thư mục'
        ]);
    }
        return response()->json(
            [
                'error' =>true
            ]
        );
    }
    
}
