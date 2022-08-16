<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resto Budiman | Order Page</title>
    <link rel="stylesheet" href="/css/order/order.css">
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Pesan</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form">
                <label for="user-name-alamat" style="padding-top: 20px">&nbsp;Nama dan Alamat :</label>
                <input id="user-name-alamat" class="form-content" type="text" name="text" required />
                <div class="form-border"></div>

                <label for="user-menu" style="padding-top: 30px">&nbsp;Menu Masakan :</label>
                <input id="user-menu" class="form-content" type="text" name="text" required />
                <div class="form-border"></div>

                <button onclick="myFunction()" id="submit-btn" type="submit" name="submit"
                    value="Pesan">Pesan</button>

                <script>
                    function myFunction() {
                        alert("Pastikan Nama dan Alamat tertulis dengan benar !");
                    }
                </script>
            </form>
        </div>
</body>

</html>
