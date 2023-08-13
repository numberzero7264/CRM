<?php
namespace App\Http\Service\Menu;
use Illuminate\Support\Facades\Session;
use App\Models\Menu;
use Illuminate\Support\str;
class MenuService
{
    public function getparent(){
        return menu::where('parent_id',0)->get();
        // when($parent_id==0,function($query)use($parent_id){
        //     $query->where('parent_id',$parent_id);
        // })
        // ->get();
    }
    public function getAll(){
        
        return Menu::orderbyDesc('id')->paginate(20);
        // return Menu::all();
    }
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

            }catch(\Exception $err)
                {        
                    Session::flash('error',$err->getMessage());
                    return false;
                }
        return true;

    }  
    public function update($request, $menu):bool{
        
        $menu->name =(string)$request->input('name');
        $menu->parent_id =(int)$request->input('parent_id');
        $menu->description =(string)$request->input('description');
        $menu->content =(string)$request->input('content');
        $menu->active =(string)$request->input('active');
        $menu->save();
    
        session::flash('success','cập nhật thành công danh mục');
        return true;
    }
    public function destroy($request){
        $id= (int) $request->input('id');
        $menu=Menu::where('id',$id)->first();
        if($menu){
            return Menu::where('id',$id)->orWhere('parent_id',$id)->delete();

            }
    return false;
    }

}