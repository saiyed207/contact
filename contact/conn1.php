<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        .modal {
            display: none;
            position: fixed;
            top: 40%;
            left: 35%;
            width: 30%;
            height: 250px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 5%;
        }

        .tick {
            width: 35%;
            margin-top: -10%;
        }

        @media (max-width: 600px) {
            .modal {
                width: 60%;
                height: 150px;
                left: 20%;
            }

            .tick {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <div id="myModal" class="modal">
        <div style="text-align: center">
            <img class="tick" src="tick.png" alt="Success Tick" />
        </div>
        <h4 style="text-align: center;">Successfully Submitted</h4>
        <h6 style="text-align: center;">You will be notified by email</h6>
    </div>

    <script>
        function showModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = 'block';

            setTimeout(function () {
                window.location.href = 'vacancy.php';
            }, 3000);
        }

        window.onload = showModal;
    </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
