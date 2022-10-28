<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/website/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/style.css')}}">
</head>
<body>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-center ">
                        <div class="card-header">
                            <h4>Laravel Ajax Crud</h4>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-hover table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td>Men Fashion</td>
                                    <td>Tk,3999</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Product</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('/website/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('/website/js/jquery-3.6.0.min.js')}}"></script>

    @include('ajax.ajax')
    @include('productModal.modal')
</body>
</html>
