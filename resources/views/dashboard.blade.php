
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tani Kita</title>
    <link rel="icon" type="image/png" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
    @livewireStyles



</head>

<body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <a href="#">
                <img src="img/logo.png" class="logo">
            </a>
            <h2 class="brand text-nowrap">TANI KITA</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Hubungi</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.html">
                            <i class="fas fa-shopping-bag   "></i>
                        </a>
                        <a href="login.html">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{$slot}}
    <!--Footer-->
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img src="img/logo.png" class="logo">
                <p class="pt-3">Kami menyediakan produk terbaik dengan harga paling terjangkau</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Kategori</h5>
                <ul class="text-uppercase">
                    <li><a href="#">Bibit & Benih</a></li>
                    <li><a href="#">Pupuk & Pestisida</a></li>
                    <li><a href="#">Peralatan Pertanian</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Hubungi Kami</h5>
                <div>
                    <h6 class="text-uppercase">Alamat</h6>
                    <p>Surabaya</p>
                </div>
                <div>
                    <h6 class="text-uppercase">HP</h6>
                    <p>0822 **** ****</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>a@gmail.com</p>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img src="" class="img-fluid w-5 h-100 m-2">
                    <img src="" class="img-fluid w-5 h-100 m-2">
                    <img src="" class="img-fluid w-5 h-100 m-2">
                    <img src="" class="img-fluid w-5 h-100 m-2">
                    <img src="" class="img-fluid w-5 h-100 m-2">
                </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="img/payment.png">
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                    <p><span>TANI KITA</span></p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    @livewireScripts
</body>

</html>