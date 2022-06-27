<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9b4cb69171.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <h5 style="font-size: 30px; color: rgb(22 163 74 / var(--tw-text-opacity))">RV</h5>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        From:
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $data['name'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        Email:
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $data['email'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        Phone:
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $data['phone'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        Company:
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $data['company'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        Subject:
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $data['subject'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        Message:
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $data['message'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <p>©2022 - <a href="https://cytorick.nl" style="color: rgb(22 163 74 / var(--tw-text-opacity))">cytorick.nl</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
