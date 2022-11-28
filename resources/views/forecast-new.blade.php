<?php
$current_hour = (int) date('H');

$current_weather_code = ucwords($weather['weatherToday']['hourly']['weathercodeName'][$current_hour]['category']) . ' - ' . ucwords($weather['weatherToday']['hourly']['weathercodeName'][$current_hour]['description']);

$current_icon = $weather['weatherToday']['hourly']['weathercodeName'][$current_hour]['icon'];
$current_bg_img = $weather['weatherToday']['hourly']['weathercodeName'][$current_hour]['bg_img'];

?>

<div class="container">

    <div class="main-div my-3 p-3">

        <div class="row first-div">
            <div class="col-md-6 col-xs-12 first-child">
                <div class="city-heading">
                    <h2 class="city-name">
                        {{ $weather['city_info']['city_ascii'] }}
                        <span>{{ ',' . $weather['city_info']['admin_name'] }}</span>
                    </h2>
                    <h4>{{ date('l d F') }}</h4>
                </div>
                <div class="d-flex align-items-center m-3 p-3">
                    <div>
                        <img src="{{ asset('images/icons/' . $current_icon) }}" width="160px">
                    </div>
                    <div>
                        <h2 style="font-size: 4rem">
                            <strong>{{ $weather['weatherToday']['hourly']['temperature_2m'][$current_hour] . ' °C' }}</strong>
                        </h2>
                        <p class="text-muted mb-0">{{ $current_weather_code }} </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div>
                            <h2><strong>{{ $weather['weatherToday']['hourly']['apparent_temperature'][$current_hour] . ' °C' }}</strong>
                            </h2>
                            <p class="text-muted mb-0">Feels Like</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h2><strong>{{ $weather['weatherToday']['hourly']['windspeed_10m'][$current_hour] . ' km/h' }}</strong>
                            </h2>
                            <p class="text-muted mb-0">Wind</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h2><strong>{{ date('h:i A', strtotime($weather['weatherDaily']['daily']['sunrise'][0])) }}</strong>
                            </h2>
                            <p class="text-muted mb-0">Sunrise</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div>
                            <h2><strong>{{ $weather['weatherToday']['hourly']['dewpoint_2m'][$current_hour] . ' °C' }}</strong>
                            </h2>
                            <p class="text-muted mb-0">Dew Point</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h2><strong>{{ $weather['weatherToday']['hourly']['relativehumidity_2m'][$current_hour] . ' %' }}</strong>
                            </h2>
                            <p class="text-muted mb-0">Humidity</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h2><strong>{{ date('h:i A', strtotime($weather['weatherDaily']['daily']['sunset'][0])) }}</strong>
                            </h2>
                            <p class="text-muted mb-0">Sunset</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row second-div">
            <div class="col-md-12 col-xs-12">
                <div class="city-heading">
                    <h3 class="city-name">Hourly</h3>
                </div>
                <div class="row">
                    @for ($i = 0; $i < count($weather['weatherToday']['hourly']['time']); $i += 3)
                        <?php
                        $icon = $weather['weatherToday']['hourly']['weathercodeName'][$i]['icon'];
                        $bg_img = $weather['weatherToday']['hourly']['weathercodeName'][$i]['bg_img'];
                        ?>

                        <div class="hourly-div">
                            <h5>{{ date('h a', strtotime($weather['weatherToday']['hourly']['time'][$i])) }}</h5>
                            <img src="{{ asset('images/icons/' . $icon) }}" width="50px">
                            <h5>{{ $weather['weatherToday']['hourly']['temperature_2m'][$i] . ' °C' }}</h5>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <div class="row third-div">
            <div class="col-md-12">
                <div class="city-heading">
                    <h3 class="city-name">Next 7 Days</h3>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table daily-div">
                            @for ($j = 0; $j < count($weather['weatherDaily']['daily']['time']); $j++)
                                <?php
                                $icon = $weather['weatherDaily']['daily']['weathercodeName'][$j]['icon'];
                                $bg_img = $weather['weatherDaily']['daily']['weathercodeName'][$j]['bg_img'];
                                ?>
                                <tr>
                                    <th>
                                        <h5>{{ date('D', strtotime($weather['weatherDaily']['daily']['time'][$j])) }}
                                        </h5>
                                        <h5>{{ date('d/m', strtotime($weather['weatherDaily']['daily']['time'][$j])) }}
                                        </h5>
                                    </th>
                                    <th>
                                        <img src="{{ asset('images/icons/' . $icon) }}" width="50px">
                                    </th>
                                    <th>
                                        <h5>{{ $weather['weatherDaily']['daily']['temperature_2m_min'][$j] . ' °C' }}
                                        </h5>
                                        <h5>Low</h5>
                                    </th>
                                    <th>
                                        <h5>{{ $weather['weatherDaily']['daily']['temperature_2m_max'][$j] . ' °C' }}
                                        </h5>
                                        <h5>High</h5>
                                    </th>
                                    <th>
                                        <h5>{{ $weather['weatherDaily']['daily']['windspeed_10m_max'][$j] . ' km/h' }}
                                        </h5>
                                        <h5>Wind</h5>
                                    </th>
                                    <th>
                                        <h5>{{ ucwords($weather['weatherDaily']['daily']['weathercodeName'][$j]['description']) }}
                                        </h5>
                                        <h5>{{ ucwords($weather['weatherDaily']['daily']['weathercodeName'][$j]['category']) }}
                                        </h5>
                                    </th>
                                </tr>
                            @endfor
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('body').css('background', 'url({{ asset('images/bg/' . $current_bg_img) }}) no-repeat center center fixed');
</script>
