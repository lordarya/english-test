<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dist/css/style_login.css') }}">
    <title>Document</title>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('dist/img/img.jpg') }}" alt="Login image" class="w-100 vh-100"
                        style="object-fit: cover; object-position: left;">
                </div>
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4 text-center" style="margin-top: 10px;">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                            style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Uji Kompetensi Bahasa Inggris</h4>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4">

                        <form style="width: 23rem; margin: 0 auto;" method="POST" action="{{ route('login') }}">
                            @csrf

                            <p class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px; font-size: 10pt;">
                                Please login to your account</p>

                            <div class="form-outline mb-4" style="border-radius: 25px;">
                                <label class="form-label" for="form2Example18">Email address</label>
                                <input class="form-control  @error('email') is-invalid @enderror" placeholder="Email"
                                    id="email" type="email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example28">Password</label>
                                <input class="form-control  @error('password') is-invalid @enderror"
                                    placeholder="Password" id="password" type="password" name="password" required
                                    autocomplete="current-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="pt-1 mb-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>

                        </form>

                    </div>

                    <div class="px-5 ms-xl-4 text-center" style="margin-top: 50px;">
                        <p style="margin-bottom: 2px !important;">~The limits of my language mean the limits of my
                            world~</p>
                        <p style="margin-bottom: 0px !important;"><b>Ludwig Wittgenstein</b></p>
                    </div>

                </div>

            </div>
        </div>
    </section>
</body>

</html>
