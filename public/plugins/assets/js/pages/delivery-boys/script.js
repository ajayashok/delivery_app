$(document).on('change','.changeStatus',function(){
    let order_id = $(this).data('order_id');
    $.ajax({
        url: SEND_URL,
        data:{
            'order_id':order_id,
            'id':$(this).val()
        },
        type: 'get',
        success: function (result) {
            toastr.success("Order status Changed Successfull : Order ID : "+result.data.order_code)
            $(this).val(result.data.id);
            $('.status'+result.data.id).html(result.data.status)
        }
    });
})
