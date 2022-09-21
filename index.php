<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="URL Shortener">
		<meta name="author" content="Cameron Morrow">

		<title>URL Shortener</title>

		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.css" integrity="sha256-5a0xpHkTzfwkcKzU4wSYL64rzPYgmIVf7PO4TB5/6jQ=" crossorigin="anonymous">

		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/js/fontawesome.min.js" integrity="sha256-xLAK3iA6CJoaC89O/DhonpICvf5QmdWhcPJyJDOywJM=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
        <script>
            function Shorten(){
                $.post( "shorten.php",{url: $("#url").val()} ,function( data ) {
                    $("#shortURL").html( data );
                });
            }
        </script>
        <style>
            html, body {
              height: 100%;
            }
            
            body {
              display: flex;
              align-items: center;
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: #f5f5f5;
            }
        </style>
    </head>
    <body class="text-center vsc-initialized">
        <main class="mx-auto px-auto">
            <h1 class="h3 mb-3">Please enter the URL to shorten:</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="url" placeholder="URL to shorten">
                <label for="floatingPassword">URL to shorten</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary my-3" onclick="Shorten()">Shorten</button>
            <div id="shortURL"></div>
        </main>
    </body>
</html>