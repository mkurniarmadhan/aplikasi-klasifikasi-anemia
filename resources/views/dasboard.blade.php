<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Anemia Cek</title>

    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed hide" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
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
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
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

                            <form action="{{ route('keluar') }}" method="post">
                                @csrf

                                <button class="btn btn"> <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                    </svg> Keluar</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <!-- if breadcrumb is single--><span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span>Dashboard</span></li>
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
                                        <h4 class="card-title mb-0">DATA PASIEN</h4>

                                    </div>
                                    <a href="{{ route('tambah-pasien') }}" class="btn btn-primary" type="button">
                                        Tambah Data Pasien
                                        <svg class="icon">
                                        </svg>
                                    </a>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="border-start border-start-4 border-start-info px-3 mb-3">
                                                    <small class="text-medium-emphasis">Total Pasien </small>
                                                    <div class="fs-5 fw-semibold">{{ $totalPasien }}</div>
                                                </div>
                                            </div>
                                            <!-- /.col-->
                                            <div class="col-6">
                                                <div class="border-start border-start-4 border-start-danger px-3 mb-3">
                                                    <small class="text-medium-emphasis">Pasien Anemia </small>
                                                    <div class="fs-5 fw-semibold">{{ $totalPasien2 }}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.col-->
                                        </div>
                                        <!-- /.row-->
                                        <hr class="mt-0">

                                    </div>
                                    <!-- /.col-->
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div
                                                    class="border-start border-start-4 border-start-warning px-3 mb-3">
                                                    <small class="text-medium-emphasis">Pasien Non Anemia</small>
                                                    <div class="fs-5 fw-semibold">
                                                        {{ $totalPasien3 }}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.col-->

                                            <!-- /.col-->
                                        </div>
                                        <!-- /.row-->
                                        <hr class="mt-0">

                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row--><br>
                                <div class="table-responsive">
                                    <table class="table border mb-0" id="example">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">

                                                <th>Nama Pasien</th>
                                                <th class="text-center">Jenis Kelamin</th>

                                                <th class="text-center">Hemoglobin </th>
                                                <th class="text-center">MCH </th>
                                                <th class="text-center">MCHC </th>
                                                <th class="text-center">MCV </th>
                                                <th class="text-center">Status </th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($pasiens as $pasien)
                                                <tr class="align-middle">

                                                    <td>
                                                        <div>{{ $pasien->nama_pasien }}</div>
                                                        <div class="small text-medium-emphasis"><span></span> |
                                                            ditambahkan: {{ $pasien->created_at }}</div>
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $pasien->jenis_kelamin }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $pasien->hb }}
                                                    </td>
                                                    <td class="text-center">

                                                        {{ $pasien->mch }} </td>
                                                    <td class="text-center">
                                                        {{ $pasien->mchc }}</td>
                                                    <td class="text-center">

                                                        {{ $pasien->mcv }}</td>
                                                    <td class="text-center">

                                                        {{ $pasien->status }} </td>


                                                </tr>
                                            @empty
                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>

    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>


    <script src="js/main.js"></script>
    {{-- jquety --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#example').DataTable();
    </script>
</body>

</html>
