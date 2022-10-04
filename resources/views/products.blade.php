<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
            crossorigin="anonymous">
        <link rel="stylesheet" 
              href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
         <link rel="stylesheet"
              href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        <title>Ajax CRUD</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2 class="my-5 text-center">Laravel 9 Ajax CRUD</h2>
                    <a href="" 
                        class="btn btn-primary my-3 float-end" 
                        data-bs-toggle="modal" 
                        data-bs-target="#addModal">
                        Add Product<i class="las la-plus"></i>
                    </a>
                    <input type="text" name="search" id="search" class="mb-3 form-control" placeholder="Serach Here..">
                    <div class="table-data">
                        @include('pagination_products')
                    </div>
                </div>
            </div>
        </div>
        @include('add_product_modal')
        @include('update_product_modal')
        @include('product_js')
        {!! Toastr::message() !!}
    </body>
</html>