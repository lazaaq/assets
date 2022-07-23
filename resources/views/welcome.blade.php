
@extends('layouts.dump2')

@section('content')
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white ps-lg-5 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/image/logo.jpg') }}" alt="" width="120" height="24"
                        class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#tentang">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#struktur">Struktur Organisasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#visi">Visi Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lokasi">Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galeri">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#myModal">Vote</a>

                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#myModal">
                                Vote
                            </button> -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('token.sync') }}" method="POST">
                        @csrf
                <div class="modal-body py-0">
                    <div class="modal-title fw-bold text-success text-center">
                        &mdash;&mdash;
                        VOTE
                        &mdash;&mdash;
                    </div>
                    <h3 class="text-center">Pemilihan Ketua ASSETS 2022</h3>
                    <p class="token fst-italic text-center">Masukkan token yang telah dikirimkan ke emailmu sebelum
                        memilih kandidat</p>
                </div>
                <div class="modal-footer flex-column border-top-0">
                    <div class="InputStyle">
                      
                        <input class="InputStyle" placeholder="Masukkan Token" type="text" name="token" maxlength="6">
                    </div>
                        <button type="submit" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">
                            Kirim
                        </button>
                      </form>
                </div>

            </div>
        </div>
    </div>

    <main>
        <div class="container">
            <section id="tentang">
                <div class="row featurette mt-5 mb-5">
                    <div class="col-md-7">
                        <h6 class="fw-bold text-success">
                            &mdash;&mdash;
                            TENTANG KAMI
                        </h6>

                        <h1 class="display-5 fw-bold lh-1 mb-3">Association of Software Enggineering Technology Students</h1>
                        <p class="lead fst-italic">ASSETS singkatan dari Association of Software Engineering Technology
                            yang merupakan organisasi himpunan mahasiswa Teknologi Rekayasa Perangkat Lunak Sekolah
                            Vokasi Universitas Gadjah Mada.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="tentang.html">
                                <button type="button" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Cari
                                    Tahu
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="./assets/image/gambar.jpg"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            alt="Image of about" width="auto" height="500" loading="lazy">
                    </div>
                </div>
            </section>

            <section id="struktur">
                <div class="row featurette mt-5 mb-5">
                    <div class="col-md-6 order-md-2 struktur-explain">
                        <h6 class="fw-bold text-success">
                            &mdash;&mdash;
                            STRUKTUR ORGANISASI
                        </h6>
                        <h1 class="display-5 fw-bold lh-1 mb-3">
                            Yuk kenali struktur organisasi di ASSETS
                        </h1>
                        <p class="lead fst-italic">ASSETS memiliki 5 divisi, yaitu Humas, PSDM, Kreatif, Kastrad, dan
                            Minkat</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button"
                                class="btn btn-success btn-lg px-4 me-md-2 rounded-pill mt-5 kotak">Cari
                                Tahu Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path
                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="./assets/image/gambar.jpg"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            alt="Image of about" width="auto" height="500" loading="lazy">
                    </div>
                </div>
            </section>

            <section id="visi">
                <div class="p-4 p-md-5 mb-4 text-white rounded bg-success">
                    <div class="text-center">
                        <h6 class="fw-bold text-warning">
                            &mdash;&mdash;
                            VISI & MISI
                            &mdash;&mdash;
                        </h6>
                        <h1 class="display-5 fw-bold lh-1 mb-3">
                            Apa itu visi & misi ASSET?
                        </h1>
                    </div>

                    <div>
                        <div class="container-fluid py-5">
                            <div class="text-center">
                                <button type="button" class="btn btn-visi mb-3 text-white">VISI</button>
                            </div>
                            <p>Menjadikan assets sebagai wadah atau jembatan bagi para mahasiswa TRPL untuk
                                memberikan aspirasinya dengan mengedepankan elemen kekeluargaan, keilmuan, kreatif,
                                kolaboratif, dan inovatif untuk menciptakan assets yang bergelora.</p>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="text-center">
                            <button type="button" class="btn btn-visi mb-3 text-white">MISI</button>
                        </div>
                        <ol>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                                minima
                                natus aspernatur maiores ipsam numquam quasi? Officia eveniet enim
                                magni!
                            </li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis
                                sequi,
                                nostrum cum eos saepe voluptatem.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, in.
                            </li>
                        </ol>
                    </div>
                </div>

            </section>

            <section id="lokasi">
                <div class="row featurette mt-5 mb-5">
                    <div class="col-md-7">
                        <h6 class="fw-bold text-success">
                            &mdash;&mdash;
                            LOKASI KAMI
                        </h6>
                        <h1 class="display-5 fw-bold lh-1 mb-3">Cari tahu di mana ASSET berada</h1>

                        <div class="fw-bold">Address: </div>
                        <div class="fw-lighter fst-italic">69FF+QMX, Terban, Gondokusuman, Yogyakarta City, Special
                            Region of Yogyakarta 55281</div> <br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Lihat
                                di
                                Google Maps
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path
                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- <img src="./assets/image/gambar.jpg"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            alt="Image of about" width="auto" height="500" loading="lazy"> -->

                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                            <iframe src="https://www.google.com/maps/place/Universitas+Gadjah+Mada/@-7.7713529,110.3799733,17z/data=!4m5!3m4!1s0x2e7a59b2d4729729:0xac4d7b5fcf34f8e4!8m2!3d-7.7713847!4d110.3774998"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </section>

            <section id="galeri">
                <div class="row featurette mb-3">
                    <h6 class="fw-bold text-success text-center">
                        &mdash;&mdash;
                        GALERI ASSETS
                        &mdash;&mdash;
                    </h6>
                    <h1 class="display-5 fw-bold lh-1 text-center">Foto tentang ASSET</h1>
                    <p class="lead fst-italic text-center mb-3">Foto-foto yang berhubungan dengan kegiatan ASSET</p>
                </div>

                <div class="row text-center text-lg-start">
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Lihat Semua
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </button>
                </div>
            </section>

            <!-- <section id="footer">
                <div class="row featurette mt-5 mb-5">
                    <div class="col-md-6">
                        <div>
                            <a class="navbar-brand" href="#">
                                <img src="assets/image/logo.jpg" alt="" width="120" height="24"
                                    class="d-inline-block align-text-top">
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ducimus dolore magnam!
                            </p>
                            <div class="fw-lighter">Tel: </div>
                            <div class="fw-bold">310-437-2766</div> <br>
                            <div class="fw-lighter">Mail: </div>
                            <div class="fw-bold">assets@gmail.com</div> <br>
                            <div class="fw-lighter">Address: </div>
                            <div class="fw-bold">Yogyakarta City, Special Region of Yogyakarta</div> <br>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col d-flex align-items-start">
                            <div>
                                <div class="fw-bold">Social Media</div>
                                <div class="fw-normal">Be the first one to know about discounts, offers and events</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section id="media mt-3">
                <div class="row featurette">
                    <h6 class="fw-bold text-success text-center">
                        &mdash;&mdash;
                        MEDIA PARTNER
                        &mdash;&mdash;
                    </h6>
                    <div class="row text-center text-lg-start">
                        <div class="col-lg-3 col-md-4 col-6 ">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail"
                                    src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail"
                                    src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail"
                                    src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail"
                                    src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <h4 class="text-center mb-4">Mau bergabung jadi partner ASEETS? Yuk Lihat cara selengkapnya</h4>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Klik disini ya!
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </button>
                </div>
            </section>
        </div>

        <div class="modal-footer flex-column border-top-0 mt-5 ">
            <div class="saran d-flex justify-content-between">
                Ayo berikan saran & kritikmu untuk ASSETS yang lebih baik 🙌
                <a href="vote.html">
                    <button type="submit" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">
                        Klik disini ya!
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </button>
                </a>
            </div>
            
        </div>

        <div class="container px-4 py-5">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div>
                        <a class="navbar-brand" href="#">
                            <img src="assets/image/logo.jpg" alt="" width="120" height="24"
                                class="d-inline-block align-text-top">
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ducimus dolore magnam!
                        </p>
                        <div class="fw-lighter">Tel: </div>
                        <div class="fw-bold">310-437-2766</div> <br>
                        <div class="fw-lighter">Mail: </div>
                        <div class="fw-bold">assets@gmail.com</div> <br>
                        <div>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> -->
                            <div class="fw-lighter">Address: </div>
                            <div class="fw-bold">Yogyakarta City, Special Region of Yogyakarta</div> <br>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                </div>
                <div class="col d-flex align-items-start">
                    <div class="col d-flex align-items-start">
                        <div>
                            <div class="fw-bold">Social Media</div>
                            <div class="fw-normal">Be the first one to know about discounts, offers and events</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#tentang" class="nav-link px-2 text-muted">Tentang Kami</a></li>
                <li class="nav-item"><a href="#struktur" class="nav-link px-2 text-muted">Struktur Organisasi</a></li>
                <li class="nav-item"><a href="#visi" class="nav-link px-2 text-muted">Visi Misi</a></li>
                <li class="nav-item"><a href="#lokasi" class="nav-link px-2 text-muted">Lokasi</a></li>
                <li class="nav-item"><a href="#galeri" class="nav-link px-2 text-muted">Galeri</a></li>
                <li class="nav-item"><a href="#media" class="nav-link px-2 text-muted">Media Partner</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Vote</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Hubungi Kami</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
</body>
@endsection


