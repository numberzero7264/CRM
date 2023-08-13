@extends('layout.Home')
@section('head')
<script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
@endsection
@yield('head')
@section('content')
<form action="" method="post">
    <div class="card-body">
      <div class="form-group">
        <label>Tên Danh Mục</label>
        <input type="text" value="{{$menu->name}}" name="name"class="form-control" id="name">
      </div>
      <div class="form-group">
        <label>Danh Mục</label>
        <select class="form-control" name="parent_id" id="parent_id">
          <option value="0" {{$menu->parent_id==0 ? 'selected':''}}>Danh mục cha</option> 
          @foreach ($menus as $menuParent )
          <option value="{{$menuParent->id}}" 
            {{$menu->parent_id==$menuParent->id ? 'selected':''}}>
            {{$menuParent->name}}
        </option>     
          @endforeach
        </select>
            
      </div>
      <div class="form-group">
        <label>Mô tả</label>
        <textarea name="description" class="form-control">{{$menu->description}}</textarea>
      </div>
      <div class="form-group">
        <label>Mô tả chi tiết</label>
        <textarea name="content" id="content" class="form-control">{{$menu->content}}</textarea>
      </div>
      <div class="form-group">
        <label>Kích hoạt</label>
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" type="radio" id="active" value="1" name="active"
              {{$menu->active==1 ? 'checked=""':''}}>
              <label for="active" class="custom-control-label">có</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
              {{$menu->active==0 ? 'checked=""':''}}>
              <label for="no_active" class="custom-control-label">Không</label>
            </div>
          </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
    </div>
    @csrf
  </form>
  @section('footer')
  <script>CKEDITOR.replace( 'content' );</script>
@endsection
@yield('footer')
@endsection
