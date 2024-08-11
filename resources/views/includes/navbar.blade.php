
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{route('public.index')}}">
            <strong><span>Little</span> Fashion</strong>
        </a>

        <div class="d-lg-none">
            <a href="{{route('login')}}" class="bi-person custom-icon me-3"></a>

            {{-- <a href="{{route('public.productDetail',$product)}}" class="bi-bag custom-icon"></a> --}}
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('public.index')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('public.about')}}">Story</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('public.products')}}">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('public.faq')}}">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('public.contact')}}">Contact</a>
                </li>
            </ul>

            <div class="d-none d-lg-block">
                <a href="{{route('login')}}" class="bi-person custom-icon me-3"></a>

                {{-- <a href="{{route('public.productDetail',$product)}}" class="bi-bag custom-icon"></a> --}}
            </div>
        </div>
    </div>
</nav>