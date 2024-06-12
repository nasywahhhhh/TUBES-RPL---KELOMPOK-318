<nav class="navbar navbar-expand-lg @if(Nav::isRoute('konsultasi') || Nav::isRoute('order')) navbar-light @else navbar-dark @endif fixed-top px-10" data-navbar-on-scroll="data-navbar-on-scroll" style="background-color: #262D3F;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <h1 class="m-0" style="color: #fea116; font-weight: bold;"><i class="fa fa-utensils me-3" style="color: #fea116;"></i>Feater Catering</h1>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{route('home')}}" class="nav-item nav-link {{Nav::isRoute('home')}}">Home</a>
                <a href="{{route('menu.index')}}" class="nav-item {{Nav::isRoute('menu.index')}} nav-link">Menu</a>
                <a href="{{route('ourproduct')}}" class="nav-item {{Nav::isRoute('ourproduct')}} nav-link">Our Product</a>
                <a href="{{route('price')}}" class="nav-item {{Nav::isRoute('price')}} nav-link">Price List</a>
                <a href="{{route('about')}}" class="nav-item {{Nav::isRoute('about')}} nav-link">About</a>
                <a href="{{route('faq')}}" class="nav-item {{Nav::isRoute('faq')}} nav-link">FAQ</a>
                <a href="{{route('artikel.index')}}" class="nav-item {{Nav::isRoute('artikel.index')}} nav-link">Article</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Testimoni</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('testiinfluencer')}}" class="dropdown-item">Influencer</a>
                        <a href="{{route('testicustomer')}}" class="dropdown-item">Customer</a>
                    </div>
                </div>
            </div>
            @if (Auth::user() != null)
                @if(Auth::user()->role === 'admin')
                    <a href="{{route('dashboard')}}" class="btn @if(Nav::isRoute('konsultasi') || Nav::isRoute('order')) btn-primary @else btn-secondary @endif  me-3">Welcome, {{ Auth::user()->name }}</a>
                @else
                    <a href="{{route('profile')}}" class="btn @if(Nav::isRoute('konsultasi') || Nav::isRoute('order')) btn-primary @else btn-secondary @endif  me-3">Welcome, {{ Auth::user()->name }}</a>
                @endif
            @else
                <a href="{{route('login')}}" class="btn @if(Nav::isRoute('konsultasi') || Nav::isRoute('order')) btn-primary @else btn-secondary @endif me-3" style="background-color: transparent; border-color: transparent;">LOGIN</a>
            @endif
            <button type="button" class="btn btn-primary me-5" data-bs-toggle="modal" data-bs-target="#exampleModalOrderNow" style="background-color: #FEA116; border-color: #FEA116;">ORDER</button>
            <style>
                .transparent-btn:hover {
                    background-color: #262D3F;
                    border-color: #262D3F;
                }
            </style>
        </div>
    </div>
</nav>

