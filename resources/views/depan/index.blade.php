<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('depan') }}/css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

        <!-- Custom styles for this template -->
        <style>
            /* styles.css */
            /* Tetapkan warna coklat sebagai warna utama */
            .bg-primary {
                background-color: #8B4513 !important; /* Warna coklat */
            }
        
            /* Tambahkan efek hover pada tombol navigasi */
            .navbar-nav .nav-item .nav-link {
                transition: all 0.3s ease;
            }
            .navbar-nav .nav-item .nav-link:hover {
                color: #8B4513; /* Warna coklat */
            }
        
            /* Tambahkan animasi halus pada judul utama */
            .resume-section h1 {
                animation: fadeInUp 1s ease;
            }
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        
            /* Tambahkan efek parallax pada gambar latar belakang */
            .resume-section {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        
            /* Membuat navigasi menetap (sticky) */
            #sideNav {
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                z-index: 1000;
                overflow-y: auto;
                padding: 50px 0;
            }
        
            /* Gaya tambahan untuk membuat tampilan lebih menarik */
            /* Gaya untuk judul section */
            .resume-section h2 {
                color: #8B4513; /* Warna coklat */
                margin-bottom: 30px;
                font-size: 32px;
            }
        
            /* Gaya untuk subjudul */
            .resume-section .subheading {
                color: #8B4513; /* Warna coklat */
                font-size: 18px;
            }
        
            /* Gaya untuk teks konten */
            .resume-section .lead {
                font-size: 16px;
                line-height: 1.5;
            }
        
            /* Gaya untuk tombol */
            .btn-primary {
                background-color: #8B4513; /* Warna coklat */
                border-color: #8B4513; /* Warna coklat */
                transition: background-color 0.3s ease, border-color 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #654321; /* Warna coklat tua saat dihover */
                border-color: #654321; /* Warna coklat tua saat dihover */
            }
        
            /* Gaya untuk ikon sosial */
            .social-icon {
                color: #8B4513; /* Warna coklat */
                font-size: 24px;
                margin-right: 10px;
                transition: color 0.3s ease;
            }
            .social-icon:hover {
                color: #654321; /* Warna coklat tua saat dihover */
            }
        
            /* Gaya untuk batas */
            hr {
                border-top: 1px solid #8B4513; /* Garis coklat */
                margin-top: 20px;
                margin-bottom: 20px;
            }
        
            /* Gaya tambahan untuk menyesuaikan tata letak */
            /* Gaya untuk menyesuaikan ruang antar bagian */
            .resume-section {
                padding-top: 50px;
                padding-bottom: 50px;
            }
        
            /* Gaya untuk mengatur lebar maksimum konten */
            .container-fluid {
                max-width: 1200px;
                margin: 0 auto;
            }
        
            /* Gaya untuk animasi tambahan */
            @keyframes slideInFromLeft {
                0% {
                    transform: translateX(-100%);
                    opacity: 0;
                }
                100% {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        
            @keyframes slideInFromRight {
                0% {
                    transform: translateX(100%);
                    opacity: 0;
                }
                100% {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        
            /* Animasi untuk judul */
            .resume-section h1 {
                animation: slideInFromLeft 1s ease-out;
            }
        
            /* Animasi untuk konten */
            .resume-section-content {
                animation: slideInFromRight 1s ease-out;
            }
        </style>
        
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">{{ $about->judul }}</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('foto')."/".get_meta_value('_foto') }}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
        </div>
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {!!  set_about_nama($about->judul) !!}
                    </h1>
                    <div class="subheading mb-5">
                        {{ get_meta_value('_city') }} . {{ get_meta_value('_province') }} . {{ get_meta_value('_nohp') }} . <a href={{ get_meta_value('_email') }}>{{ get_meta_value('_email') }}</a>
                    </div>
                    <div class="lead mb-5">{!! $about->isi !!}</div>
                    <div class="social-icons">
                        <a class="social-icon" href="{{ get_meta_value('_linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="{{ get_meta_value('_github') }}"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="{{ get_meta_value('_instagram') }}"><i class="fab fa-instagram"></i></a>
                        <a class="social-icon" href="{{ get_meta_value('_facebook') }}"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    @foreach ($experience as $item)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $item->judul}}</h3>
                            <div class="subheading mb-3">{{ $item->info1 }}</div>
                            {!! $item->isi !!}
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span></div>
                    </div>
                    @endforeach
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    @foreach ($education as $item)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $item->judul }}</h3>
                            <div class="subheading mb-3">{{ $item->info1 }}</div>
                            <div>{{ $item->info2 }}</div>
                            <p>{{ $item->info3 }}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span></div>
                    </div>
                    @endforeach
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                    @foreach (explode(', ', get_meta_value('_language')) as $item)
                        <li class="list-inline-item"><i class="devicon-{{ strtolower($item)}}-plain"></i></li>
                    @endforeach
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    {!! set_list_workflow(get_meta_value('_workflow')) !!}
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">{!! $interest->judul !!}</h2>
                    {!! $interest->isi !!}
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{ $award->judul }}</h2>
                    {!! set_list_award($award->isi) !!}
                    
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('depan') }}/js/scripts.js"></script>
    </body>
</html>
