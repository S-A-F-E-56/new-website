<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Presensi Kehadiran Mahasiswa</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('front') }}/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Start Bootstrap</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
            <li class="sidebar-nav-item"><a href="#about">About</a></li>
            <li class="sidebar-nav-item"><a href="#services">Services</a></li>
            <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
            <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">{{ $about1->judul }}</h1>
            <h3 class="mb-5"><em>Silahkan Tap Kartu Anda di sebelah sini!</em></h3>
            <a id="find-out-more-btn" class="btn btn-primary btn-xl" href="#about">Tap Your Card Here!</a>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <div id="message">
                        @if (isset($sensorData) && $sensorData->status == 'Sukses')
                            <h2>Selamat Datang, {{ $about->judul }}</h2>
                            <p class="lead mb-5">
                                Silakan {{ $about->judul }} melakukan pengecekan terlebih dahulu sebelum masuk ke dalam kelas!
                            </p>
                        @else
                            <h2>Tap Kartu Gagal</h2>
                            <p class="lead mb-5">
                                Maaf, {{ $about->judul }}. Anda tidak diperbolehkan masuk. Silakan coba lagi.
                            </p>
                        @endif
                    </div>
                    <div id="sensor-data">
                        <!-- Data sensor akan ditampilkan di sini -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <!-- Konten lainnya -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('front') }}/js/scripts.js"></script>
    <script>
        // Fungsi untuk mendapatkan data sensor terbaru
        async function getLatestSensorData() {
            try {
                const response = await fetch('/get-latest-sensor-data');
                const data = await response.json();
                if (data) {
                    // Tampilkan data sensor di halaman
                    const sensorDataDiv = document.getElementById('sensor-data');
                    sensorDataDiv.innerHTML = `
                        <p>Status: ${data.status}</p>
                        <p>Value: ${data.value}</p>
                        <p>Received At: ${data.received_at}</p>
                    `;
                    const messageDiv = document.getElementById('message');
                    if (data.status === 'Sukses') {
                        messageDiv.innerHTML = `
                            <h2>Selamat Datang, {{ $about->judul }}</h2>
                            <p class="lead mb-5">
                                Silakan {{ $about->judul }} melakukan pengecekan terlebih dahulu sebelum masuk ke dalam kelas!
                            </p>
                        `;
                    } else {
                        messageDiv.innerHTML = `
                            <h2>Tap Kartu Gagal</h2>
                            <p class="lead mb-5">
                                Maaf, {{ $about->judul }}. Anda tidak diperbolehkan masuk. Silakan coba lagi.
                            </p>
                        `;
                    }
                }
            } catch (error) {
                console.error('Error fetching sensor data:', error);
            }
        }

        // Panggil fungsi untuk mendapatkan data sensor terbaru setelah 3 detik
        setTimeout(getLatestSensorData, 3000);
    </script>
</body>
</html>
