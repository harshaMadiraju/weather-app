<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
            background-size: cover;
            color: white;
        }

        .city-name span {
            font-size: 22px;
        }

        .daily-div {
            border-top: 1px solid white;
        }

        .first-div .first-child {
            border-right: 1px solid whitesmoke;
        }

        .hourly-div {
            border: 1px solid white;
            border-radius: 8px;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            width: 10.5% !important;
            margin-left: 1.5%;
            align-content: center;
        }

        .text-muted,
        table tr th {
            color: white !important;
        }

        @media only screen and (max-width: 768px) {
            .hourly-div {
                width: 25% !important;
            }
        }

        .first-div,
        .second-div,
        .third-div {
            margin-top: 2.5%;
            /* background-color: rgba(255, 255, 255, 0.80); */
            padding: 1%;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark p-1">
        <p class="navbar-brand">Forecast</p>
        <div class="p-3 col-md-3">
            <select class="js-example-placeholder-single js-states form-control" name="city" id="city">
                <option value="1356807575">Vijayawada</option>
            </select>
        </div>
    </nav>
    <section id="main-content">
        @yield('forecast')
    </section>
</body>
<script>
    $('#city').select2({
        placeholder: "Start typing",
        allowClear: true,
        minimumInputLength: 4,
        ajax: {
            url: '<?php echo url('/getCitiesJson'); ?>',
            dataType: 'json',
            data: function(params) {
                var query = {
                    search: params.term
                }
                return query;
            },
            processResults: function(data) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                return {
                    results: data.items
                };
            }
        }
    });

    $('#city').on('select2:select', function(e) {
        reloadData();
    });

    function reloadData() {
        $.ajax({
            type: 'GET',
            url: '/getWeatherData',
            data: 'city=' + $('#city').val(),
            success: function(data) {

                $("#main-content").html(data);
            }
        });
    }

    reloadData();
</script>

</html>
