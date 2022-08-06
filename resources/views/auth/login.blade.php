<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8049cde48d.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mx-auto" style="margin-top: 220px">

                <div class="card ">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <h3 class="text-center fw-bold">Login</h3>
                            @if (session()->has('danger'))
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Username</label>
                                        <input type="text" name="username"
                                            class="form-control  @error('username') is-invalid @enderror">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-2">
                                        <label for="" class="form-label">password</label>
                                        <input type="password" name="password"
                                            class="form-control  @error('password') is-invalid @enderror">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <a href="{{ url('register') }}" class="text-decoration-none float-end">register
                                            now</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-2 d-grid">
                                        <button class="btn btn-secondary float-end">Login</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
