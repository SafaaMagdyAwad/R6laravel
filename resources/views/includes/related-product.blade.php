<section class="related-product section-padding border-top">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h3 class="mb-5">You might also like</h3>
            </div>
@foreach ($releated as $product)
    
    <div class="col-lg-4 col-12 mb-3">
        <div class="product-thumb">
            <a href="{{route('public.productDetail',$product)}}">
                <img src="{{asset('assets/images/product/'.$product->image)}}" class="img-fluid product-image" alt="{{$product->title}}">
            </a>

            <div class="product-top d-flex">
                <span class="product-alert me-auto">New arrival</span>

                <a href="{{route('public.like',$product)}}" class="bi-heart-fill product-icon"></a>
            </div>

            <div class="product-info d-flex">
                <div>
                    <h5 class="product-title mb-0">
                        <a href="{{route('public.productDetail',$product)}}" class="product-title-link">{{$product->title}}</a>
                    </h5>

                    <p class="product-p">{{$product->discription}}</p>
                </div>

                <small class="product-price text-muted ms-auto mt-auto mb-5">${{$product->price}}</small>
            </div>
        </div>
    </div>
@endforeach

            

        </div>
    </div>
</section>