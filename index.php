<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FishLens App</title>
    <link rel="canonical" href="https://fishlens.maulidinalif.id"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icons and Colors -->
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./manifest.json">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="./favicon.ico">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="./mstile-144x144.png">
    <meta name="msapplication-config" content="./browserconfig.xml">
    <meta name="theme-color" content="#000000">

    <!-- SEO and Social Sharing and SEO -->
    <meta name="description" content="FishLens App"/>
    <meta name="robots" content="noodp"/>
    <meta name="author" content="Bangkit Capstone 2023">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="FishLens App"/>
    <meta property="og:description" content="FishLens App"/>
    <meta property="og:url" content="https://fishlens.maulidinalif.id"/>
    <meta property="og:site_name" content="FishLens App"/>
    <meta property="og:image" content="https://fishlens.maulidinalif.id/share.jpg"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="FishLens App"/>
    <meta name="twitter:description" content="FishLens App"/>
    <meta name="twitter:image" content="https://fishlens.maulidinalif.id/share.jpg"/>
    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Javscript -->
    <script>
        if ("serviceWorker" in navigator) {
            window.addEventListener("load", () => {
                navigator.serviceWorker && navigator.serviceWorker.register("./sw.js");
            });
        }
    </script>
    <script defer src="./main.js"></script>
</head>

<body>
<section class="h-100 w-100" style="
				box-sizing: border-box;
				position: relative;
				background-color: #FAFCFF;
			">
    <div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#">
                <img style="margin-right: 0.75rem"
                     src="logofishlens.png"
                     alt=""/>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                    data-bs-target="#targetModal-item">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                 aria-labelledby="targetModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content bg-white border-0">
                        <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                            <a class="modal-title" id="targetModalLabel">
                                <img style="margin-top: 0.5rem"
                                     src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-6.png"
                                     alt=""/>
                            </a>
                            <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                            <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                <li class="nav-item active position-relative">
                                    <a class="nav-link main" style="color: #243142;" href="#">Home</a>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">Feature</a>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button"
                                       aria-expanded="false"
                                       aria-controls="collapse">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                                                  fill="#8B9CAF"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                                                  fill="#8B9CAF"/>
                                        </svg>
                                    </a>
                                    <form method class="collapse position-absolute form center-search border-0"
                                          id="collapse">
                                        <div class="d-flex">
                                            <input type="text" class="rounded-full border-0 focus:outline-none"
                                                   placeholder="Search"/>
                                            <button class="btn" type="button">
                                                <svg style="width: 20px; height: 20px" data-bs-toggle="collapse"
                                                     href="#collapse"
                                                     role="button" aria-expanded="false" aria-controls="collapse"
                                                     fill="none" stroke="#273B56"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer border-0" style="padding: 2rem; padding-top: 0.75rem">
                            <button id="installApp" class="btn btn-default btn-no-fill">Install</button>
                            <button class="btn btn-fill text-white">Start Scanning</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active position-relative">
                        <a class="nav-link main=" style="color: #243142;" href="#">Home</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#">Feature</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button"
                           aria-expanded="false"
                           aria-controls="collapse">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                                      fill="#8B9CAF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                                      fill="#8B9CAF"/>
                            </svg>
                        </a>
                        <form class="collapse position-absolute form center-search border-0" id="collapse">
                            <div class="d-flex">
                                <input type="text" class="rounded-full border-0 focus:outline-none"
                                       placeholder="Search"/>
                                <button class="btn" type="button">
                                    <svg style="width: 20px; height: 20px" data-bs-toggle="collapse" href="#collapse"
                                         role="button"
                                         aria-expanded="false" aria-controls="collapse" fill="none" stroke="#273B56"
                                         viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </li>
                </ul>
                <button class="btn btn-default btn-no-fill">Install</button>
                <button class="btn btn-fill text-white">Start Scanning</button>
            </div>
        </nav>
        <div class="hr">
            <hr style="
							border-color: #F4F4F4;
							background-color: #F4F4F4;
							opacity: 1;
							margin: 0 !important;
						"/>
        </div>

        <div>
            <div class="mx-auto d-flex flex-lg-row flex-column hero">
                <!-- Left Column -->
                <div
                        class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
                    <h1 class="title-text-big">
                        New Era of Fish-selling |<br class="d-lg-block d-none"/>
                        <span style="color: #4E91F9">FishLens</span><br class="d-lg-block d-none"/>
                        Scan Your Fish
                    </h1>
                    <p class="text-caption">
                        Get your fish selling price by automatically determining Its Value and Freshness
                    </p>
                    <div class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                        <button class="btn btn-get text-white d-inline-flex">
                            Start Scanning
                        </button>
                        <button class="btn btn-outline">
                            <div class="d-flex align-items-center">
                                <svg class="me-2" width="26" height="26" viewBox="0 0 26 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M15.9295 13L11.6668 10.158V15.842L15.9295 13ZM17.9175 13.2773L10.8515 17.988C10.8013 18.0214 10.743 18.0406 10.6828 18.0434C10.6225 18.0463 10.5627 18.0328 10.5095 18.0044C10.4563 17.9759 10.4119 17.9336 10.3809 17.8818C10.3499 17.8301 10.3335 17.771 10.3335 17.7107V8.28933C10.3335 8.22904 10.3499 8.16988 10.3809 8.11816C10.4119 8.06644 10.4563 8.0241 10.5095 7.99564C10.5627 7.96718 10.6225 7.95367 10.6828 7.95655C10.743 7.95943 10.8013 7.9786 10.8515 8.012L17.9175 12.7227C17.9631 12.7531 18.0006 12.7943 18.0265 12.8427C18.0524 12.8911 18.0659 12.9451 18.0659 13C18.0659 13.0549 18.0524 13.1089 18.0265 13.1573C18.0006 13.2057 17.9631 13.2469 17.9175 13.2773Z"
                                            fill="#A6B1BE"/>
                                    <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A6B1BE"/>
                                </svg>
                                Watch the video
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column d-flex justify-content-center justify-content-lg-start text-center pe-0">
                    <img class="position-absolute d-lg-block d-none hero-right"
                         src="fishside.png"
                         alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="adventages">
    <div class="container">
        <div class="row mx-0 text-center d-block">
            <div class="headline">
                What can you do <br>
                <span class="cl-light-blue font-red-hat-display">with FishLens</span>
            </div>
        </div>
        <div class="value row mx-0 d-flex justify-content-center justify-content-md-between">
            <div class="card">
                <div class="card-body p-0">
                    <img src="search.png"
                         alt="search" class="img-fluid">
                    <div class="card-desc">
                        <h4 class="card-title">Auto Identify the Fish</h4>
                        <p class="card-text">Upload or take a picture of your fish.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <img src="process.png"
                         alt="process" class="img-fluid">
                    <div class="card-desc">
                        <h4 class="card-title">Auto Determine its Freshness</h4>
                        <p class="card-text">Let us determine what that fish is, and determine how fresh that fish.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <img src="harga.png"
                         alt="harga" class="img-fluid">
                    <div class="card-desc">
                        <h4 class="card-title">Auto Determine its Price</h4>
                        <p class="card-text">Get the market value of your fish based on its freshness.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-100 w-100" style="
				box-sizing: border-box;
				position: relative;
				background-color: #FAFCFF;
			">
    <div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
        <div>
            <div class="mx-auto d-flex flex-lg-row flex-column hero">
                <!-- Left Column -->
                <div
                        class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
                    <h1 class="title-text-big">
                        Upload Your Image
                    </h1>
                    <div class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                        <?php if (isset($_GET['error'])): ?>
                            <p><?php echo $_GET['error']; ?></p>
                        <?php endif ?>
                        <form action="upload.php"
                              method="post"
                              enctype="multipart/form-data">

                            <input type="file"
                                   name="my_image">

                            <input type="submit"
                                   name="submit"
                                   value="Upload">

                        </form>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column justify-content-center justify-content-lg-start text-center pe-0">
                    <h1 class="title-text-big">
                        Start Scanning
                    </h1>
                    <div class="flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                        <div class="panel">
                            <button id="switchFrontBtn">Front Camera</button>
                            <button id="switchBackBtn">Back Camera</button>
                            <button id="snapBtn">Snap</button>
                        </div>
                        <div style="width:100%">
                            <!-- add autoplay muted playsinline for iOS -->
                            <video id="cam" autoplay muted playsinline>Not available</video>
                            <canvas id="canvas" style="display:none"></canvas>
                            <img id="photo" alt="The screen capture will appear in this box.">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script>
    /*
Please try with devices with camera!
*/

    /*
    Reference:
    https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia
    https://developers.google.com/web/updates/2015/07/mediastream-deprecations?hl=en#stop-ended-and-active
    https://developer.mozilla.org/en-US/docs/Web/API/WebRTC_API/Taking_still_photos
    */

    // reference to the current media stream
    var mediaStream = null;

    // Prefer camera resolution nearest to 1280x720.
    var constraints = {
        audio: false,
        video: {
            width: {ideal: 640},
            height: {ideal: 480},
            facingMode: "environment"
        }
    };

    async function getMediaStream(constraints) {
        try {
            mediaStream = await navigator.mediaDevices.getUserMedia(constraints);
            let video = document.getElementById('cam');
            video.srcObject = mediaStream;
            video.onloadedmetadata = (event) => {
                video.play();
            };
        } catch (err) {
            console.error(err.message);
        }
    };

    async function switchCamera(cameraMode) {
        try {
            // stop the current video stream
            if (mediaStream != null && mediaStream.active) {
                var tracks = mediaStream.getVideoTracks();
                tracks.forEach(track => {
                    track.stop();
                })
            }

            // set the video source to null
            document.getElementById('cam').srcObject = null;

            // change "facingMode"
            constraints.video.facingMode = cameraMode;

            // get new media stream
            await getMediaStream(constraints);
        } catch (err) {
            console.error(err.message);
            alert(err.message);
        }
    }

    function takePicture() {
        let canvas = document.getElementById('canvas');
        let video = document.getElementById('cam');
        let photo = document.getElementById('photo');
        let context = canvas.getContext('2d');

        const height = video.videoHeight;
        const width = video.videoWidth;

        if (width && height) {
            canvas.width = width;
            canvas.height = height;
            context.drawImage(video, 0, 0, width, height);
            var data = canvas.toDataURL('image/png');
            photo.setAttribute('src', data);
        } else {
            clearphoto();
        }
    }

    function clearPhoto() {
        let canvas = document.getElementById('canvas');
        let photo = document.getElementById('photo');
        let context = canvas.getContext('2d');

        context.fillStyle = "#AAA";
        context.fillRect(0, 0, canvas.width, canvas.height);
        var data = canvas.toDataURL('image/png');
        photo.setAttribute('src', data);
    }

    document.getElementById('switchFrontBtn').onclick = (event) => {
        switchCamera("user");
    }

    document.getElementById('switchBackBtn').onclick = (event) => {
        switchCamera("environment");
    }

    document.getElementById('snapBtn').onclick = (event) => {
        takePicture();
        event.preventDefault();
    }

    clearPhoto();
</script>
<script>
    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
        deferredPrompt = e;
    });

    const installApp = document.getElementById('installApp');
    installApp.addEventListener('click', async () => {
        if (deferredPrompt !== null) {
            deferredPrompt.prompt();
            const { outcome } = await deferredPrompt.userChoice;
            if (outcome === 'accepted') {
                deferredPrompt = null;
            }
        }
    });
</script>
</body>

<footer class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
        <div class="border-color info-footer">
            <div class="">
                <hr class="hr"/>
            </div>
            <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
                <div class="d-flex title-font font-medium align-items-center gap-4">
                    <a href="">
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#C7C7C7"/>
                            <g clip-path="url(#clip0)">
                                <path
                                        d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z"
                                        fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="">
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#C7C7C7"/>
                            <g clip-path="url(#clip0)">
                                <path
                                        d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z"
                                        fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="">
                        <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                                    fill="#C7C7C7"/>
                            <path
                                    d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                                    fill="#C7C7C7"/>
                            <path
                                    d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z"
                                    fill="#C7C7C7"/>
                        </svg>
                    </a>
                    <a href="">
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#C7C7C7"/>
                            <g clip-path="url(#clip0)">
                                <path
                                        d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727V20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147V21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194V15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133V9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533V9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733V14.5733Z"
                                        fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
                    <a href="" class="footer-link" style="text-decoration: none">Our Features</a>
                    <span>|</span>
                    <a href="" class="footer-link" style="text-decoration: none">Terms of Service</a>
                        <span>|</span>
                        <a href="" class="footer-link" style="text-decoration: none">Privacy Policy</a>
                </nav>
                <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                    <p style="margin: 0">Copyright © 2023 FishLens</p>
                </nav>
            </div>
        </div>
    </div>
</section>

</html>
