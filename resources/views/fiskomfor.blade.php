
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="SMILE Puslabfor POLRI"/>
    <meta name="author" content="SMILE Puslabfor POLRI"/>
    <title>SMILE - Puslabfor</title>
    <link rel="icon" type="image/png" href="assets/img/puslabfor-icon.png">
    <meta name="theme-color" content="#222222"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/app.css" rel="stylesheet"/>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: whitesmoke;
            color: #151515;
        }

        main {
            flex: 1;
        }

        #main-nav .nav-link {
            color: white;
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.25s ease;
        }

        #main-nav .nav-link:hover {
            color: #fed136;
            transition: all 0.25s ease;
        }

        .page-heading {
            font-size: 1.4rem;
            color: #222222;
            margin-bottom: 0;
        }

        .page-subheading {
            font-size: 0.9rem;
            font-style: italic;
            font-weight: lighter;
            color: #222222;
            margin-bottom: 1.5rem;
        }

        .figure {
            position: relative;
        }

        .figure-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
            z-index: 1;
        }

        .figure-img {
            width: 100%;
            height: 200px;
            margin-bottom: 0;
            object-fit: cover;
            object-position: center;
            filter: grayscale(0.9) blur(1px);
        }

        .figure-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            background: #ff9b00;
            background-image: linear-gradient(to right bottom, #fed136, #ffc428, #ffb71b, #ffa90d, #ff9b00);
            color: #222222;
            letter-spacing: 1px;
            font-size: 1rem;
            padding: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .figure-logo {
            display: none;
        }

        @media only screen and (min-width: 48em) {
            .page-heading {
                font-size: 2rem;
                opacity: 0;
                animation: slideInLeft 1 1s forwards ease-in-out;
            }

            .page-subheading {
                opacity: 0;
                animation: slideInRight 1 1s 0.5s forwards ease-in-out;
            }

            .figure-img {
                height: 250px;
            }

            .figure-caption {
                font-size: 1.5rem;
                animation: slideInLeft 1s ease-in-out;
            }

            .figure-logo {
                opacity: 0;
                display: inline-block;
                z-index: 3;
                width: 60px;
                height: 60px;
                margin: 1em;
                background: orange;
                position: absolute;
                top: 0;
                right: 0;
                border-radius: 50%;
                animation: slideInRight 1 1s 1s forwards ease-in-out;
            }

            .figure-logo svg path {
                fill: #222222;
            }

        }

    </style>
</head>
<body id="page-top">

<!-- Navigation-->
<nav id="main-nav" class="navbar navbar-expand navbar-dark mb-1" style="background: #222222">
    <div class="nav navbar-nav">
        <a class="navbar-brand" href="#">
            <span class="d-none">SMILE Brand</span>
            <img class="d-none d-md-inline-block mr-1" src="assets/img/puslabfor-icon.png" alt="puslabfor logo">
            <img style="height: 80%" src="assets/img/smile-logo.svg" alt="smile logo"/>
        </a>
    </div>
    <div class="nav navbar-nav ml-auto">
        <a class="nav-item nav-link" href="/">Beranda</a>
    </div>
</nav>

<!--main-->
<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h2 class="page-heading text-uppercase">
                        Bidang Fisika dan Komputer
                    </h2>
                    <h3 class="page-subheading d-none d-md-block">
                        Penjelasan singkat mengenai Bidang Fisika dan Komputer
                    </h3>
                </div>
                <div class="figure-container">
                    <figure class="figure w-100 mt-3 md-mt-0 rounded overflow-hidden">
                        <div class="figure-overlay"></div>
                        <img src="assets/img/fiskomfor.jpg" class="figure-img rounded" alt="page image">
                        <figcaption class="figure-caption">FISKOMFOR</figcaption>
                        <div class="figure-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" class="services-logo" viewBox="0 0 512 512">
                                <path d="M39.822 59.733v295.822h432.355V59.733H39.822zm392.533 238.933H79.644V99.555h352.711v199.111zM312.889 384v28.444H199.111V384H0v11.378c0 31.289 25.6 56.889 56.889 56.889h398.222c31.289 0 56.889-25.6 56.889-56.889V384H312.889z"/>
                            </svg>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p>
                    Bertugas menyelenggarakan pelayanan pemeriksaan teknis kriminalistik TKP dan pemeriksaan laboratoris
                    kriminalistik barang bukti uji kebohongan (lie detector), jejak, radioaktif, konstruksi bangunan,
                    peralatan teknik, kebakaran/pembakaran, dan komputer (suara dan gambar (audio/video), komputer &
                    telepon genggam (computer & mobile phones), dan kejahatan jaringan internet/intranet (cyber
                    network)) serta memberikan pelayanan umum forensik kriminalistik.
                </p>

                <ul>
                    <li>
                        Bidang Fisika Umum Forensik meliputi Pemeriksaan sabotasi, berkas kejahatan dan sebagainya.
                    </li>
                    <li>
                        Bidang Komputer Forensik meliputi pemeriksaan suara dan gambar (audio/video), computer dan
                        telepon
                        genggam (computer dan mobile phones), dan kejahatan jaringan internet/intranet (cyber network)
                        dan
                        sebagainya.
                    </li>
                    <li>
                        Bidang Fisika khusus meliputi pemeriksaan bekas alat/jejak alat (tool mark), pemeriksaan/analisa
                        kebohongan melalui Leidetection dan voice detection.
                    </li>
                    <li>
                        Bidang instrument Forensik meliputi pemeriksaan barang bukti dengan dukungan instrument
                        analisis.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>

<!-- Footer-->
<footer class="footer py-4 bg-dark position-relative pattern-overlay">
    <div class="container">
        <div class="row align-items-lg-start justify-content-between">
            <div class="col-lg-4 text-lg-left">
                <p id="copyright" class="mb-2 text-white"></p>
                <p class="mb-0" style="color: #d7d7d7">
                    <span class="font-weight-light">Cipambuan - Babakan Madang</span><br>
                    <span class="font-weight-light">Bogor, Jawa Barat 16810</span>
                </p>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<script>
    // tanggal
    const copyright = document.querySelector("#copyright");
    const tanggal = new Date();
    copyright.innerText = `Copyright © LIMS PUSLABFOR POLRI ${tanggal.getFullYear()}`;
</script>
</body>
</html>
