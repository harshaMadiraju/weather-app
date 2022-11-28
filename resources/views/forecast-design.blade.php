<?php
$current_hour = date('H');
$current_icon = 'partial-cloud.png';
$current_bg_img = 'sunny.jpg';

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("{{ asset('images/rain.jpg') }}");
            background-size: cover;
        }

        .city-name span {
            font-size: 22px;
        }

        .daily-div {
            border-top: 1px solid #555;
        }

        .daily-div tr th {
            border-top: 1px solid #555;
        }

        .hourly-div {
            border: 1px solid black;
            border-radius: 8px;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            width: 10.5% !important;
            margin-left: 1.5%;
            align-content: center;
        }

        @media only screen and (max-width: 768px) {
            .hourly-div {
                width: 25% !important;
            }
        }

        .first-div {
            margin-top: 2.5%;
            background-color: rgba(255, 255, 255, 0.80);
            padding: 1%;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-div my-3 p-3">
            <div class="row first-div">
                <div class="col-md-6" style="border-right:1px solid #000">
                    <div class="city-heading">
                        <h2 class="city-name">Vijayawada,<span>Andhra Pradesh</span></h2>
                        <h4>Friday 25th November</h4>
                    </div>
                    <div class="d-flex align-items-center m-3 p-3">
                        <div>
                            <img src="{{ asset('images/' . $current_icon) }}" width="160px">
                        </div>
                        <div>
                            <h2 style="font-size: 4rem">
                                <strong>28 °C</strong>
                            </h2>
                            <p class="text-muted mb-0">
                                Sky - Overcast
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="p-4">
                                <h2><strong>28 °C</strong></h2>
                                <p class="text-muted mb-0"> Sky - Overcast</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4">
                                <h2><strong>28 °C</strong></h2>
                                <p class="text-muted mb-0"> Sky - Overcast</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4">
                                <h2><strong>28 °C</strong></h2>
                                <p class="text-muted mb-0"> Sky - Overcast</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="p-4">
                                <h2><strong>28 °C</strong></h2>
                                <p class="text-muted mb-0"> Sky - Overcast</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4">
                                <h2><strong>28 °C</strong></h2>
                                <p class="text-muted mb-0"> Sky - Overcast</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4">
                                <h2><strong>28 °C</strong></h2>
                                <p class="text-muted mb-0"> Sky - Overcast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row first-div">
                <div class="col-md-12">
                    <div class="city-heading">
                        <h3 class="city-name">Hourly</h3>
                    </div>
                    <div class="row">
                        <div class="hourly-div">
                            <h5>3am</h5>
                            <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                            <h5>28 °C</h5>
                        </div>
                        <div class="hourly-div">
                            <h5>3am</h5>
                            <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                            <h5>28 °C</h5>
                        </div>
                        <div class="hourly-div">
                            <h5>3am</h5>
                            <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                            <h5>28 °C</h5>
                        </div>
                        <div class="hourly-div">
                            <h5>3am</h5>
                            <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                            <h5>28 °C</h5>
                        </div>
                        <div class="hourly-div">
                            <h5>3am</h5>
                            <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                            <h5>28 °C</h5>
                        </div>
                        <div class="hourly-div">
                            <h5>3am</h5>
                            <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                            <h5>28 °C</h5>
                        </div>
                        <div class="hourly-div">
                            <h5>3am</h5>
                            <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                            <h5>28 °C</h5>
                        </div>
                        <div class="hourly-div">
                            <h5>3am</h5>
                            <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                            <h5>28 °C</h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row first-div">
                <div class="col-md-12">
                    <div class="city-heading">
                        <h3 class="city-name">Next 7 Days</h3>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table daily-div">
                                <tr>
                                    <th>
                                        <h5>Tue</h5>
                                        <h5>30/7</h5>
                                    </th>
                                    <th>
                                        <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                                    </th>
                                    <th>
                                        <h5>28 °C</h5>
                                        <h5>Low</h5>
                                    </th>
                                    <th>
                                        <h5>28 °C</h5>
                                        <h5>High</h5>
                                    </th>
                                    <th>
                                        <h5>12mpH</h5>
                                        <h5>Wind</h5>
                                    </th>
                                    <th>
                                        <h5>0%</h5>
                                        <h5>Rain</h5>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <h5>Tue</h5>
                                        <h5>30/7</h5>
                                    </th>
                                    <th>
                                        <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                                    </th>
                                    <th>
                                        <h5>28 °C</h5>
                                        <h5>Low</h5>
                                    </th>
                                    <th>
                                        <h5>28 °C</h5>
                                        <h5>High</h5>
                                    </th>
                                    <th>
                                        <h5>12mpH</h5>
                                        <h5>Wind</h5>
                                    </th>
                                    <th>
                                        <h5>0%</h5>
                                        <h5>Rain</h5>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <h5>Tue</h5>
                                        <h5>30/7</h5>
                                    </th>
                                    <th>
                                        <img src="{{ asset('images/' . $current_icon) }}" width="50px">
                                    </th>
                                    <th>
                                        <h5>28 °C</h5>
                                        <h5>Low</h5>
                                    </th>
                                    <th>
                                        <h5>28 °C</h5>
                                        <h5>High</h5>
                                    </th>
                                    <th>
                                        <h5>12mpH</h5>
                                        <h5>Wind</h5>
                                    </th>
                                    <th>
                                        <h5>0%</h5>
                                        <h5>Rain</h5>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
