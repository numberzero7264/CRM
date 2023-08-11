@extends('layout.Home')

@section('content')

    <table class="table">
        
        <thead>
            <tr>
                {{-- @dd($menus); --}}
                <th style="width:50px">ID</th>
                <th>Name</th>
                <th>Active</th>
                <th>Update</th>
                <th style="width:200px">
                    Chỉnh Sửa
                </th>
            </tr>
        </thead>
            
            <tbody>
                
                {!!App\Helpers\Helper::menu($menus)!!}
            
            </tbody>
    </table>
@endsection
