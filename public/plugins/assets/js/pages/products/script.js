$(document).on('click','.blue-btn',function(){
    let id = $(this).data('id');
        $.ajax({
            url: SEND_URL,
            data:{'product_id':id},
            type: 'get',
            success: function (result) {
                toastr.success("Order Placed Successfull : Order ID : "+result.data.order_code)
                $(this).val(result.id);
            }
        });
})
