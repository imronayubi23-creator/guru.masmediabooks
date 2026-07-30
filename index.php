<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MASMEDIA | Login 3D</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Background -->
    <div class="background"></div>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Scene -->
    <div class="scene">

        <!-- BOOK -->
        <div class="book" id="book">

            <!-- Back Cover -->
            <div class="back-cover"></div>

            <!-- Pages -->
            <div class="pages">

                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>

            </div>

            <!-- Inside -->
            <div class="inside">

                <!-- LEFT -->
                <div class="left-page">

                    <img src="assets/img/logo.png" class="logo">

                    <h1>MASMEDIA</h1>

                    <p>
                        Document Repository System
                    </p>

                    <span>
                        Knowledge Is Power
                    </span>

                </div>

                <!-- RIGHT -->
                <div class="right-page">

                    <form class="login-form">

                        <h2>LOGIN</h2>

                        <div class="input-group">

                            <i class="fa-solid fa-envelope"></i>

                            <input
                                type="email"
                                placeholder="Email">

                        </div>

                        <div class="input-group">

                            <i class="fa-solid fa-lock"></i>

                            <input
                                type="password"
                                placeholder="Password">

                        </div>

                        <button type="submit">

                            <i class="fa-solid fa-right-to-bracket"></i>

                            LOGIN

                        </button>

                    </form>

                </div>

            </div>

            <!-- FRONT COVER -->
            <div class="front-cover">

                <div class="shine"></div>

                <div class="cover-content">

                    <img src="assets/img/logo.png">

                    <h1>MASMEDIA</h1>

                    <h3>DOCUMENT REPOSITORY</h3>

                    <p>
                        Klik Buku Untuk Membuka
                    </p>

                </div>

            </div>

        </div>

    </div>

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

    <!-- JS -->
    <script src="assets/js/book.js"></script>

</body>

</html>