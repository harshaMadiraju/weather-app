<?php
$current_hour = date('H');

$current_weather_code = ucwords($weather['weatherToday']['hourly']['weathercodeName'][$current_hour]['category']) . ' - ' . ucwords($weather['weatherToday']['hourly']['weathercodeName'][$current_hour]['description']);

$current_icon = $weather['weatherToday']['hourly']['weathercodeName'][$current_hour]['icon'];
$current_bg_img = $weather['weatherToday']['hourly']['weathercodeName'][$current_hour]['bg_img'];

?>
<div class="container py-5 h-100" id="bg-able">
    <div class="row  justify-content-center align-items-center">
        <div class="card col-md-4 mb-4" style="border-radius: 25px;">
            <div class="card-body p-4">
                <div id="demo1" class="">
                    <h4 class="text-left">
                        <strong>{{ $weather['city_info']['city_ascii'] . ',' . $weather['city_info']['admin_name'] }}</strong>
                    </h4>
                    <div class="d-flex justify-content-between mt-4 pb-2">
                        <div>
                            <img src="{{ asset('images/' . $current_icon) }}" width="100px">
                        </div>
                        <div>
                            <h2 class="text-left" style="font-size: 3rem">
                                <strong>{{ $weather['weatherToday']['hourly']['temperature_2m'][$current_hour] . ' °C' }}</strong>
                            </h2>
                            <p class="text-muted mb-0">
                                {{ $current_weather_code }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hourly DIV -->
    <div class="row mt-5 h-100" style="color: #282828;">
        <?php

        //wish to do 4 parts

        $tot = count($weather['weatherToday']['hourly']['temperature_2m']);
        $count = 0;
        while ($tot > 0) {
            $tot -= 8;
            $count++;
        }

        // dd($count);

        ?>
        <div class="card col-md-12 mb-4" style="border-radius: 25px;">
            <div class="card-body p-4">
                <div id="carousel-temperature" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#carousel-temperature" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-temperature" data-slide-to="1"></li>
                        <li data-target="#carousel-temperature" data-slide-to="2"></li>
                    </ul>
                    <!-- Carousel inner -->
                    <div class="carousel-inner">
                        <h4>Hourly</h4>
                        @for ($j = 0; $j < $count; $j++)
                            <div class="carousel-item {{ $j == 0 ? 'active' : '' }}">
                                <div class="d-flex justify-content-around text-center mb-4 pb-3 pt-2">
                                    @for ($i = $j * 8; $i < $j * 8 + 8; $i++)
                                        <div class="flex-column border-top border-bottom p-2">
                                            <p style="font-size: 25px">
                                                <strong>{{ $weather['weatherToday']['hourly']['temperature_2m'][$i] }}
                                                    °C</strong>
                                            </p>
                                            <small class="mb-0">
                                                <strong>{{ date('h:i', strtotime($weather['weatherToday']['hourly']['time'][$i])) }}</strong>
                                            </small>
                                            <p class="mb-0 text-muted" style="font-size: .65rem;">
                                                {{ date('A', strtotime($weather['weatherToday']['hourly']['time'][$i])) }}
                                            </p>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
            <div class="card-body p-4">
                <div id="carousel-wind" class="carousel slide" data-ride="carousel">

                    <!-- Carousel inner -->
                    <div class="carousel-inner">
                        <h4>Predection</h4>
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-around text-center mb-4 pb-3 pt-2">

                                @for ($k = 0; $k < count($weather['weatherDaily']['daily']['time']); $k++)
                                    <div class="flex-column border-top border-bottom p-2">
                                        <p style="font-size: 25px">
                                            <strong>{{ $weather['weatherDaily']['daily']['temperature_2m_max'][$k] }}
                                                °C</strong>
                                        </p>
                                        <p class="small">
                                            <strong>{{ date('D d', strtotime($weather['weatherDaily']['daily']['time'][$k])) }}</strong>
                                        </p>
                                    </div>
                                @endfor
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('body').css('background', 'url({{ asset('images/' . $current_bg_img) }}) no-repeat center center fixed');
</script>
