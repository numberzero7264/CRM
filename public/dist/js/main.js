$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id,url){
    if (confirm ('Bạn có chắc sẽ xóa danh mục này không ? Sau khi xóa sẽ không thể khôi phục.')){
        $.ajax({
            type:'DELETE',
            datatype:'json',
            data:{id},
            url:url,
            success:function(result){
                // console.log(result);
                if(result.error==false){
                    alert(result.message);
                    location.reload();
                }
                else{
                    alert('Xóa lỗi vui lòng thử lại');
                }
                    
            }
        })
    }
}