<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $(document).ready(function () {
        // alert();
        $(document).on('click', '#add-product', function (p) {
            p.preventDefault();
            let name = $('#product_name').val();
            let price = $('#product_price').val();

            // console.log(name+price);

            $.ajax({

                url:"{{route('product.add')}}",
                method: 'post',
                data:{
                    product_name:name,
                    product_price:price,
                },
                success:function (res) {

                },
                error:function (err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function (index, value) {
                        $('.errorMessage').append('<span class = "text-danger">'+value+'</span>'+'<br>');
                    });

                }
            })


        })
    })
</script>
