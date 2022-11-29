<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php -->
<!-- Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->



<!doctype html>
<html lang="en">

<head>
    <title>password generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./style.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body style="background-color: #001632;">
    <header>
        <h1 class="text-center">Strong Password Generator</h1>
        <h3 class="text-center">Genera una password sicura</h3>
    </header>
    <main>
        <div class="p-5">
            <div class="container">
                <form action="index.php" method="get">
                    <div class=" p-5 d-flex justify-content-around">
                        <label>Lunghezza password: </label>
                        <input type="number" name="pass" id="pass">
                    </div>
                    <button class="btn btn-primary ms-5 mb-5" type="submit">invia</button>
                    <button class="btn btn-secondary mb-5" type="reset">annulla</button>
                    <p class="text-center p-5">
                        <?php
                        include __DIR__ . '../partials/functions.php'
                        ?>
                    </p>
            </div>

            </form>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>