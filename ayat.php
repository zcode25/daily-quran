<?php

require 'functions.php';

if (isset($_POST['submit'])) {
    $surah = $_POST['surah'];
    $ayat = $_POST['ayat'];
    setcookie('surah', $surah, time() + (86400 * 30), "/");
    setcookie('ayat', $ayat, time() + (86400 * 30), "/");
  
    echo "
        <script>
            alert('Surah dan ayat telah disimpan');
            window.location.href = 'index.php';
        </script>
    ";
}

$surah_id = $_GET["surah_id"];
$surah = get_ayat($surah_id);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/quran.png">

    <title>Daily Quran</title>
</head>

<body>

    <section class="hero" id="hero">
        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col">
                    <div class="card hero">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-5 col-md-3 col-xl-2 text-end">
                                    <img src="img/quran.png" class="img-fluid" alt="Quran" width="150px" style="cursor: pointer;" onclick="document.location.href = 'index.php';">
                                </div>
                                <div class="col-7 col-md-5 col-xl-3 align-self-center">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h1 class="card-text fw-bold" style="cursor: pointer;" onclick="document.location.href = 'index.php';">Daily Quran</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-start icon">
                                                <a href="https://www.instagram.com/zcode25/" target="_blank" class="btn btn-light btn-sm me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0DC4FE" class="bi bi-instagram" viewBox="0 0 16 16">
                                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                                    </svg>
                                                </a>
                                                <a href="https://github.com/zcode25/daily-quran" target="_blank" class="btn btn-light btn-sm me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0DC4FE" class="bi bi-github" viewBox="0 0 16 16">
                                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                                    </svg>
                                                </a>
                                                <a href="https://saweria.co/azein25" target="_blank" class="btn btn-light btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0DC4FE" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="surah-info" id="surah-info">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <div class="card hero2">
                        <div class="card-body">
                            <div class="row mb-1">
                                <div class="col align-self-center">
                                    <h6 class="card-text fw-bold"><?= $surah["no_surah"]; ?>. <?= $surah["nama_surah"]; ?></h6>
                                </div>
                                <div class="col text-end">
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Tafsir
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="card-text mb-1"><?= $surah["arti_surah"]; ?></p>
                                    <p class="card-text text-secondary info"><?= $surah["turun_surah"]; ?> | <?= $surah["ayat_surah"]; ?> Ayat</p>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <p class="card-text fw-bold mt-3 mb-1">Tafsir Surah</p>
                                <p class="card-text"><?= $surah["tafsir_surah"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ayat" id="ayat">
        <div class="container">
            <div class="row" style="<?= ($surah["bismillah"] == null) ? 'display: none;' : 'display: block;'; ?>">
                <div class="col-12">
                    <div class="card hero2 mb-3 p-4">
                        <div class="row mb-3 d-flex justify-content-end">
                            <div class="col-6 col-md-4 col-xl-3 align-self-center">
                                <audio id="audio" controls="controls">
                                    <source src="<?= $surah["audio_bismillah"]; ?>">
                                    </source>
                                </audio>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="card-title text-ayat lh-lg mb-3"><?= $surah["text_bismillah"]; ?></h1>
                            <p class="card-text"><?= $surah["arti_bismillah"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($surah["ayat"] as $surah) : ?>
                    <div class="col-12">
                        <div class="card hero2 mb-3 p-4" id="<?= $surah["no_ayat"]; ?>">
                            <div class="row mb-3">
                                <div class="col-6 col-md-8 col-xl-9 align-self-center">
                                    <div class="d-flex flex-row bd-highlight align-items-center">
                                    <div class="bd-highlight">
                                        <form method="POST">
                                            <input type="hidden" name="surah" value="<?= $surah_id ?>">
                                            <input type="hidden" name="ayat" value="<?= $surah["no_ayat"]; ?>">
                                            <?php if(isset($_COOKIE['surah']) && isset($_COOKIE['ayat']) && $_COOKIE['surah'] == $surah_id && $_COOKIE['ayat'] == $surah["no_ayat"]) : ?>
                                                <button type="submit" class="btn btn-primary btn-sm" name="submit"><i class="bi bi-bookmark-fill"></i></button>
                                            <?php else : ?>
                                                <button type="submit" class="btn btn-light btn-sm" name="submit"><i class="bi bi-bookmark"></i></button>
                                            <?php endif; ?>
                                        </form>
                                    </div>
                                    <div class="bd-highlight">
                                        <p class="card-text fw-bold ms-2">Ayat <?= $surah["no_ayat"]; ?></p>
                                    </div>
                                    </div>
                                    
                                </div>
                                <div class="col-6 col-md-4 col-xl-3 align-self-center">
                                    <audio id="audio" controls="controls">
                                        <source src="<?= $surah["audio_ayat"]; ?>">
                                        </source>
                                    </audio>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="card-title text-end text-ayat lh-lg mb-3"><?= $surah["text_ayat"]; ?></h1>
                                    <p class="card-text"><?= $surah["arti_ayat"]; ?></p>
                                    <div class="text-end">
                                        <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $surah["no_ayat"]; ?>" aria-expanded="false" aria-controls="collapseExample<?= $surah["no_ayat"]; ?>">
                                            Tafsir Ayat
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseExample<?= $surah["no_ayat"]; ?>">
                                        <p class="card-text fw-bold mt-3 mb-1">Tafsir Ayat</p>
                                        <p class="card-text"><?= $surah["tafsir_ayat"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>