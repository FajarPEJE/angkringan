<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./assets/js/tailwindcss.js"></script>
        <link rel="stylesheet" href="./assets/css/flowbite.min.css">
        <!-- Alertify JS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
            integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Angkringan</title>
    </head>
</head>

<body>

    <div class="bg-gray-50 dark:bg-gray-900 min-h-screen p-8 ">
        <div class="flex flex-col items-center justify-center mx-auto pt:mt-0">
            <a href="" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10
            dark:text-white">
                <span>Angkringan</span>
            </a>
            <!-- Card -->
            <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Sign in to platform
                </h2>
                <form class="mt-8 space-y-6" action="functions/authCode.php" method="post">
                    <div>
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" id="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan username anda" required>
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                                class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
                        </div>
                        <a href="#" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">Lost
                            Password?</a>
                    </div>
                    <button type="submit" name="login_btn"
                        class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login
                        to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Not registered? <a href="register.php"
                            class="text-primary-700 hover:underline dark:text-primary-500">Create
                            account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./assets/js/flowbite.min.js"></script>
    <script src="./assets/js/custom.js"></script>
    <!-- Alertify js -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        <?php if (isset($_SESSION['message'])): ?>
            alertify.success('<?= $_SESSION['message'] ?>');

            <?php unset($_SESSION['message']);
        endif ?>
    </script>

</body>

</html>