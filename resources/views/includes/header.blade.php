<header>
    <nav class="navbar navbar-dark bg-dark fixed-top py-3">
        <div class="container">
            <a class="navbar-brand text-warning fw-bolder" href="{{ route('home') }}">BlogHub.</a>
            <button class="navbar-toggler border-warning border-2 d-flex align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-light">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BlogHub.</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-dark">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link fw-bolder text-warning" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder text-warning" href="{{ route('add') }}">Add Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder text-warning" href="{{ route('manage') }}">Manage Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
