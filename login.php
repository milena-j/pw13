<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.122.0" />
    <title>PW13</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <meta name="theme-color" content="#712cf9" />

    <link rel="stylesheet" href="css/style.css" />
    <link href="https://getbootstrap.com/docs/5.3/examples/sign-in/sign-in.css" rel="stylesheet" />
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        <form action="controller.php" method="post">
            <h1 class="h3 fw-normal text-center">LOGIN</h1>

            <div class="my-4">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                        name="email" value="" />
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name="password" value="" />
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">
                    Accedi
                </button>
            </div>
            <?php
            if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger my-3" role="alert">' . $_SESSION['error'] . '</div>';
            }
            ?>
            <p class="m-0 text-center text-body-secondary">&copy; 2024</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>