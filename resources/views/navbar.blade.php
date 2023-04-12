
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jobetween</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/profile.css" rel="stylesheet" />
        <link href="css/admin.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                @guest
                <a class="navbar-brand fw-bold" href="{{ url('/') }}">JoBetween<p class="h6 fw-light">guest</p></a>
                @else
                <a class="navbar-brand fw-bold" href="{{ url('/') }}">JoBetween
                    @if(auth()->user()->role == 1)
                        <p class="h6 fw-light">client</p>
                    @elseif(auth()->user()->role == 2)
                        <p class="h6 fw-light">repairman</p>
                    @endif
                </a>
                @endguest
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('hire') }}">Hiring</a></li>
                    </ul>
                    @guest
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 mx-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-box-arrow-in-right me-2"></i>
                            <span class="small">Login</span>
                        </span>
                    </button>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#registerModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-person-plus-fill me-2"></i>
                            <span class="small">signup</span>
                        </span>
                    </button>
                    @else
                    <!-- Right elements -->
                    <div class="d-flex align-items-center">
                        
                        <!-- Avatar -->
                        <div class="dropdown">
                        <a
                            class="dropdown-toggle d-flex align-items-center hidden-arrow"
                            id="navbarDropdownMenuAvatar"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-circle"
                            height="35"
                            alt="Black and White Portrait of a Man"
                            loading="lazy"
                            />
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdownMenuAvatar"
                        >
                            <li>
                            @if( auth()->user()->role == 1 )
                            <a class="dropdown-item" href="{{ url('profileC') }}">My profile</a>
                            @else
                            <a class="dropdown-item" href="{{ url('profileR') }}">My profile</a>
                            @endif
                            </li>
                            <li>
                            <a class="dropdown-item" href="{{ url('signout') }}">Logout</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    @endguest
                    <!-- Right elements -->
                </div>
            </div>
        </nav>

        <!-- login  Modal-->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Login</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                       
                        <form method="POST" action="{{ url('login') }}" >
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" name="email"/>
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" name="password"/>
                                <label for="email">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary rounded-pill btn-lg" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- register Modal-->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Register</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                       
                        <form method="POST" action="{{ url('register') }}" >
                            @csrf 
                            <div class="d-flex justify-content-around mb-3"> 
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="usertype" value="client" id="Client" checked/>
                                    <label class="form-check-label" for="Client">Client</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="usertype" value="repairman" id="Repairman" />
                                    <label class="form-check-label" for="Repairman">Repairman</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="fullname" type="text"/>
                                <label>Full name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="phone_number" type="number"/>
                                <label >Phone number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" type="email"/>
                                <label>Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" type="password"/>
                                <label>Password</label>
                            </div>
                            <div class="mb-3">
                            <select name="city" class="form-select">
                                <option value="" selected>Select a city</option>
                                <option value="">Select a city</option>
                                <option value="rabat">rabat</option>
                                <option value="fes">fes</option>
                                <option value="agadir">agadir</option>
                                <option value="laayoune">laayoune</option>
                                <option value="marrakesh">marrakesh</option>
                                <option value="casablanca">casablanca</option>
                                <option value="tanger">tanger</option>
                                <option value="safi">safi</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <select name="speciality" class="form-control">
                                <option value="">chooose...</option>
                                <option value="Plumbing">Plumbing</option>
                                <option value="Electricity">Electricity</option>
                                <option value="Sanitary">Sanitary</option>
                                <option value="Heating">Heating</option>
                                <option value="Sewerage">Sewerage</option>
                                <option value="Painting">Painting</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary rounded-pill btn-lg" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @yield('content')

        <!-- Footer-->
        <footer class="bg-black text-center py-5">
                    <div class="container px-5">
                        <div class="text-white-50 small">
                            <div class="mb-2">&copy; Jobetween 2022. All Rights Reserved.</div>
                            <a href="#!">Privacy</a>
                            <span class="mx-1">&middot;</span>
                            <a href="#!">Terms</a>
                            <span class="mx-1">&middot;</span>
                            <a href="#!">FAQ</a>
                        </div>
                    </div>
                </footer>
                <script src="js/script.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
            </body>
        </html>