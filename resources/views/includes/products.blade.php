<section class="products section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <h2 class="mb-5">New Arrivals</h2>
            </div>

            <label hidden> {{$i=0;}}</label>
            @foreach ($products as $product)
                @if ($i<3)

                    <div class="col-lg-4 col-12">
                        <div class="product-thumb">
                            <a href="product-detail.html">
                                <img src="{{asset('assets/images/product/'.$product->image)}}" class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <a href="{{route('product.like',$product)}}" class="bi-heart-fill product-icon"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.html" class="product-title-link">{{$product->title}}</a>
                                    </h5>

                                    <p class="product-p"> {{$product->discription}}  </p>
                                </div>

                                <small class="product-price text-muted ms-auto">${{$product->price}}</small>
                            </div>
                        </div>
                    </div>




                <label hidden> {{$i++;}}</label>

                
                    
                @endif
            @endforeach

            <div class="col-12">
                <h2 class="mb-5">Popular</h2>
            </div>

            @foreach ($popular as $product)
                
                <div class="col-lg-4 col-12">
                    <div class="product-thumb">
                        <a href="product-detail.html">
                            <img src="{{asset('assets/images/product/'.$product->image)}}" class="img-fluid product-image" alt="">
                        </a>

                        <div class="product-top d-flex">
                            <a href="{{route('product.like',$product)}}" class="bi-heart-fill product-icon"></a>
                        </div>

                        <div class="product-info d-flex">
                            <div>
                                <h5 class="product-title mb-0">
                                    <a href="product-detail.html" class="product-title-link">{{$product->title}}</a>
                                </h5>

                                <p class="product-p"> {{$product->discription}}  </p>
                            </div>

                            <small class="product-price text-muted ms-auto">${{$product->price}}</small>
                        </div>
                    </div>
                </div>
            @endforeach

          
        </div>
    </div>
</section>