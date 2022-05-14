<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyChat</title>

    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid mx-auto">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
                <header>
                    <h1 class="text-center">MyChat</h1>
                </header>

                <div class="form-group">
                    <input type="text" name="username" class="form-control" id="username" placeholder="enter username..."><br>
                </div>

                <div id="messages" class="p-5"></div>

                <form id="message_form">
                    <div class="form-group">
                        <input type="text" name="message" class="form-control" id="message" placeholder="enter your message..."><br>
                        <input type="submit" class="btn btn-info align-right" value="Send">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="../js/app.js"></script>
</body>

</html>
