<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>Prodduct Create</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'store')
            <form action="/product" method="post">
            @elseif($target == 'update')
            <form action="/product/{{ $product->id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="product_name">product_name</label>
                    <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}">
                </div>
                <div class="form-group">
                    <label for="products_codes">products_codes</label>
                    <input type="text" class="form-control" name="products_codes" value="{{ $product->products_codes }}">
                </div>
                <div class="form-group">
                    <label for="product_vendor">product_vendor</label>
                    <input type="text" class="form-control" name="product_vendor" value="{{ $product->product_vendor }}">
                </div>

                <div class="form-group">
                    <label for="product_description">product_description</label>
                    <input type="text" class="form-control" name="product_description" value="{{ $product->product_description }}">
                </div>

                <div class="form-group">
                    <label for="product_line">product_line</label>
                    <input type="text" class="form-control" name="product_line" value="{{ $product->product_line }}">
                </div>

                <div class="form-group">
                    <label for="quanitily_inStock">quanitily_inStock</label>
                    <input type="text" class="form-control" name="quanitily_inStock" value="{{ $product->quanitily_inStock }}">
                </div>

                <div class="form-group">
                    <label for="buy_price">buy_price</label>
                    <input type="text" class="form-control" name="buy_price" value="{{ $product->buy_price }}">
                </div>

                <div class="form-group">
                    <label for="product_scale">product_scale</label>
                    <input type="text" class="form-control" name="product_scale" value="{{ $product->product_scale }}">
                </div>

                <div class="form-group">
                    <label for="MSRP">MSRP</label>
                    <input type="text" class="form-control" name="MSRP" value="{{ $product->MSRP }}">
                </div>

                <button type="submit" class="btn btn-default">Create</button>
                <a href="/product">return</a>
            </form>
        </div>
    </div>
</div>