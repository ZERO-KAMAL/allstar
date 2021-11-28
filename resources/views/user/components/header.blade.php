<header class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ url('/') }}"><img
                                src="https://bariton-react.envytheme.com/images/black-logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active " aria-current="page" href="#">Home<i
                                            class="fas fa-chevron-down ms-1"></i></a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        About Us<i class="fas fa-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('ourcompany') }}">Our Company</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('ourteam') }}">Our Team</a></li>
                                        <li><a class="dropdown-item" href="{{ route('portfolio') }}">Our
                                                Protfolio</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ourservices') }}">Services <i
                                            class="fas fa-chevron-down ms-1"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blog') }}">Blog <i
                                            class="fas fa-chevron-down ms-1"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact <i
                                            class="fas fa-chevron-down ms-1"></i></a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="btn btn-primary nav-link" href="/about">Schedule a Demo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

@push('js')
    <script>
        $(window).scroll(function() {

            if ($(this).scrollTop() > 100) {
                $('#header').addClass("fixed-top")


            } else {
                $('#header').removeClass("fixed-top")


            }
        })
    </script>

@endpush
