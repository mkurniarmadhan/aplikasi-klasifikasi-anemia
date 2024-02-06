<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Tambah data pasien</title>

    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed hide" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="#"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="#"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="/">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="#"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="/">Dashboard</a></li>

                </ul>
                <ul class="header-nav ms-auto">

                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img"
                                    src="https://w7.pngwing.com/pngs/177/551/png-transparent-user-interface-design-computer-icons-default-stephen-salazar-graphy-user-interface-design-computer-wallpaper-sphere-thumbnail.png"
                                    alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">

                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg> Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <!-- if breadcrumb is single--><span><a href="/">Home</a></span>
                        </li>
                        <li class="breadcrumb-item active"><span>Tambah Data</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">



                <!-- /.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title mb-0">Tambah Data Pasien</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        pastikan data yang di input sudah sesuai
                                    </div>
                                @endif


                                <form class="row g-3" id="formxadd" action="{{ route('simpan-data') }}" method="POST">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="nama_pasien" class="form-label">Nama Pasien</label>
                                        <input type="text" class="form-control" id="nama_pasien"
                                            name="nama_pasien" placeholder="masukan nama pasien">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="jeniskelamin" class="form-label">jenis kelamin</label>
                                        <select id="jeniskelamin" class="form-select" name="jenis_kelamin">
                                            <option value="">pilih...</option>
                                            <option value="l">Laki-laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="hb" class="form-label">Hemoglobin</label>
                                        <input type="text" class="form-control" id="hb" name="hb"
                                            placeholder="masukan nilai hemoglobin">
                                    </div>
                                    <div class="col-3">
                                        <label for="mch" class="form-label">MCH</label>
                                        <input type="text" class="form-control" id="mch" name="mch"
                                            placeholder="masukan nilai mch">
                                    </div>
                                    <div class="col-3">
                                        <label for="mchc" class="form-label">MCHC</label>
                                        <input type="text" class="form-control" id="mchc" name="mchc"
                                            placeholder="masukan nilai mchc">
                                    </div>
                                    <div class="col-3">
                                        <label for="mcv" class="form-label">MCV</label>
                                        <input type="text" class="form-control" id="mcv" name="mcv"
                                            placeholder="masukan nilai mcv">
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Data sudah benar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Simpan data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <h3 id="resultP">STATUS</h3> --}}
                    <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>

    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        // Contoh penggunaan
        let hb;
        let gender;
        let mcv;
        let mch;
        let mchc;

        $("#hb").on('keyup', (e) => {
            hb = $("#hb").val()
        })
        $("#mch").on('keyup', (e) => {
            mch = $("#mch").val()

        })
        $("#mchc").on('keyup', (e) => {
            mchc = $("#mchc").val()

        })
        $("#mcv").on('keyup', (e) => {
            mcv = $("#mcv").val()
        })
        $("#jeniskelamin").on('change', (e) => {
            gender = $("#jeniskelamin").val()
        })

        $("#formadd").on('submit', (e) => {
            e.preventDefault()
            const isAnemiaResult = isAnemia(hb, gender);
            // console.log(isAnemiaResult);
            const anemiaClassification = getAnemiaClassification(hb, mcv, mch, mchc);
            $("#resultP").text(`${isAnemiaResult} : ${anemiaClassification}`)
            // console.log(anemiaClassification);
        })

        function isAnemia(hb, gender) {
            // Nilai batas bawah Hb untuk pria
            const lowerHbMale = 13;
            // Nilai batas bawah Hb untuk wanita
            const lowerHbFemale = 12;

            // Mengecek jenis kelamin dan nilai Hb
            if (gender === "l") {
                // Pria
                if (hb < lowerHbMale) {
                    return "Anemia";
                } else {
                    return "Tidak anemia";
                }
            } else if (gender === "p") {
                // Wanita
                if (hb < lowerHbFemale) {
                    return "Anemia";
                } else {
                    return "Tidak anemia";
                }
            } else {
                // Jenis kelamin tidak valid
                return "Jenis kelamin tidak valid";
            }
        }

        function getAnemiaClassification(hb, mcv, mch, mchc) {
            // Klasifikasi berdasarkan MCV
            if (mcv < 80) {
                return "Anemia mikrositik";
            } else if (mcv > 100) {
                return "Anemia makrositik";
            } else {
                return "Anemia normositik";
            }
            // Klasifikasi berdasarkan Indeks Hematologi
            if (mch < 27 && mchc < 32) {
                return "Anemia hipokromik";
            } else if (mch > 31 && mchc > 36) {
                return "Anemia hiperkromik";
            } else {
                return "Anemia normokromik";
            }
        }
    </script>

</body>,

</html>
