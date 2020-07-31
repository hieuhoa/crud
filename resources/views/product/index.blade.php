@extends('layout.master')
@section('content')

<h1 class="mt-4">Static Navigation</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Static Navigation</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>products_codes</th>
                            <th>product_name</th>
                            <th>product_line</th>
                            <th>product_scale</th>
                            <th>product_vendor</th>
                            <th>product_description</th>
                            <th>quanitily_inStock</th>
                            <th>buy_price</th>
                        </tr>

                        @foreach($products as $product)
                        <tr>
                            <td>
                            <a href="/product/{{ $product->id }}/edit">{{ $product->id }}</a>
                            </td>     
                            <td>{{ $product->products_codes }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_line }}</td>
                            <td>{{ $product->product_scale }}</td>
                            <td>{{ $product->product_vendor }}</td>
                            <td>{{ $product->product_description }}</td>
                            <td>{{ $product->quanitily_inStock }}</td>
                            <td>{{ $product->buy_price }}</td>
                            <td>
          <form action="/product/{{ $product->id }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span>DeLETe</button>
          </form>
        </td>
                        </tr>

                        @endforeach 

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection