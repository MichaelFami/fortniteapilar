@extends('master')
@section('title', 'Fornite Tracker')
@section('content')

<?php if (!empty($fortniteResponse)) {
    dump($fortniteResponse);
} ?>


<form class="" action="get_player" method="post">
    @csrf
    <input id="playerName" type="text" name="playerName">
    <button id="button" type="submit" name="button">Show Stats</button>
</form>

<table id="graph" class="table">
    <thead>
        <tr>
            <th> Name </th>
            <th> K/D </th>
            <th> Kills per Minute </th>
            <th> Total Number of Wins </th>
            <th> Win % </th>
            <th> Number of Games Played </th>
            <th> Top 3 Solo </th>
            <th> Top 25 Solo </th>
            <th> Top 5 Duo </th>
            <th> Top 12 Duo </th>
            <th> Top 3 Squad </th>
            <th> Top 6 Squad </th>
            <th> Avg Survival Time </th>
            <th> Total Time Played </th>

        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<div class="container">
    @if (!empty($fortniteResponse))


    <div id="bigColumn" class="row">
        <!-- Column 1 --------------------------------------->
        <div class="col-6" style="border-right: 1px solid white;">
            <div id="gamerTag" class="row">
                <ul class="list-group list-group-flush">
                    <p id="GamerTAG">Theeman69</p>
                </ul>
            </div>
            <div class="row STATS">
                <div class="col-6">
                    <div id="mainOne" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height:100px;background:#2f1c5c;">K/D</br>Ratio</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][11]['value']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div id="mainTwo" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Kills</br> per</br> Min.</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][12]['value']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row STATS">
                <div class="col-6">
                    <div id="mainThree" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height:100px;background:#2f1c5c">Total</br> Wins</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][8]['value']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div id="mainFour" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Win </br>%</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][9]['value']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row STATS">
                <div class="col-6">
                    <div id="mainFive" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Games</br> Played</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][7]['value']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div id="mainSix" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Avg.</br> Survival</br> Time</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][14]['value']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row STATS">
                <div class="col-6">
                    <div id="mainSeven" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Time</br> Played</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][13]['value']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div id="mainEight" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Hello</li>
                            <li class="list-group-item" style="background:#2f1c5c"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row STATS">
                <div class="col-6">
                    <div id="mainNine" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Solo</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][0]['value']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div id="mainTen" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 25</br> Solo</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][5]['value']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row STATS">
                <div class="col-6">
                    <div id="mainEleven" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 5</br> Duo</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][1]['value']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div id="mainTwelve" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 12</br> Duo</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][4]['value']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row STATS">
                <div class="col-6">
                    <div id="mainThirteen" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Squad</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][2]['value']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div id="mainFourteen" class="card" style="width: 110px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 6</br> Squad</li>
                            <li class="list-group-item" style="background:#2f1c5c">{{$fortniteResponse['lifeTimeStats'][3]['value']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column 2  ------------------------------------->
        <div class="col">
            <div class="row">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>

        </div>
    </div>
    @endif
</div>

@endsection
