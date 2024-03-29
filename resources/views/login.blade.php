<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="css/style.css" rel="stylesheet" />

</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-5 p-4 mb-0">
                            <div class="card-body">
                                <h1>Login</h1>
                                <p class="text-medium-emphasis">Masukan username dan password</p>

                                <form action="{{ route('aksiLogin') }}" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                            </svg></span>
                                        <input class="form-control" type="text" placeholder="masukan username"
                                            name="username" />
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked">
                                                </use>
                                            </svg></span>
                                        <input class="form-control" type="password" placeholder="********"
                                            name="password" />
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">
                                                Masuk
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
