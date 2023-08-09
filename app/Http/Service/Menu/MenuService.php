<?php
namespace App\Http\Service\menu;
use Illuminate\Support\Facades\Session;
use App\Models\Menu;
use Illuminate\support\str;
class MenuService
{
    public function create($request){
        // return Menu::create([

        // ]);
        try {
            Menu::create([
                'name' =>(string)$request->input('name'),
                'parent_id' =>(int)$request->input('parent_id'),
                'description' =>(string)$request->input('description'),
                'content' =>(string)$request->input('content'),
                'active' =>(string)$request->input('active'),
                // 'slug' => Str::slug($request->input('name'), '-'),
                // $data=$request->input()
            ]);
                Session::flash('success','tạo danh mục thành công');
            // $data=$request->input();

        }catch(\Exception $err){
        
        Session::flash('error',$err->getMessage());
        return false;
    }
    return true;
}}