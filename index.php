<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css'
        integrity='sha512-VNBisELNHh6+nfDjsFXDA6WgXEZm8cfTEcMtfOZdx0XTRoRbr/6Eqb2BjqxF4sNFzdvGIt+WqxKgn0DSfh2kcA=='
        crossorigin='anonymous' />
</head>

<body>
    <?php
    function generatePassword($length)
    {
        $dictionary = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}[]|:;,.?/~';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $dictionary[rand(0, strlen($dictionary) - 1)];
        }
        return $password;
    }

    $password = '';
    $length = isset($_GET['length']) ? intval($_GET['length']) : 0;
    if ($length > 0) {
        $password = generatePassword($length);
    }
    ?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Strong Password Generator</h1>

        <form action="" method="GET" class="mb-4">
            <div class="mb-3">
                <label for="length" class="form-label">Lunghezza della password:</label>
                <input type="number" class="form-control" id="length" name="length" min="1" max="20">
            </div>
            <button type="submit" class="btn btn-primary">Genera Password</button>
        </form>

        <?php if ($password): ?>
            <div class="alert alert-success">
                <h2 class="mb-0">Password generata: <?php echo $password; ?></h2>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>