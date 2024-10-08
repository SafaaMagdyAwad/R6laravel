<section class="product-detail section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="product-thumb">
                    <img src="{{asset('assets/images/product/'.$product->image)}}" class="img-fluid product-image" alt="{{$product->title}}">
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="product-info d-flex">
                    <div>
                        <h2 class="product-title mb-0">{{$product->title}}</h2>

                        <p class="product-p">{{$product->like}} Likes</p>
                    </div>

                    <small class="product-price text-muted ms-auto mt-auto mb-5">${{$product->price}}</small>
                </div>

                <div class="product-description">

                    <strong class="d-block mt-4 mb-2">Description</strong>

                    <p class="lead mb-5">{{$product->discription}}</p>
                </div>

                <div class="product-cart-thumb row">
                    <div class="col-lg-6 col-12">
                        
                        <select class="form-select cart-form-select" id="inputGroupSelect01">
                            <option selected>Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <button type="submit" class="btn custom-btn cart-btn" data-bs-toggle="modal" data-bs-target="#cart-modal">Add to Cart</button>
                    </div>

                    <p>
                        <a href="#" class="product-additional-link">Details</a>

                        <a href="#" class="product-additional-link">Delivery and Payment</a>
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>