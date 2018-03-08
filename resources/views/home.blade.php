@extends('master') @section('title', 'Fornite Tracker') @section('content')


<form class="" action="get_player" method="post">
    @csrf
    <button id="button" type="submit" name="button">Show Stats</button>
    <input id="playerName" type="text" name="leftPlayer" placeholder="Player1">
    <input id="player2Name" type="text" name="rightPlayer" placeholder="Player2">
</form>

<div class="container">
    <div id="bigColumn" class="row">
        <div class="col">


            <div class="row">
                @if (!empty($leftPlayer))


                <!-- Column 1 --------------------------------------->
                <div class="col-6" style="border-right: 1px solid white;">
                    <div id="gamerTag" class="row">
                        <ul class="list-group list-group-flush">
                            <p id="GamerTAG">{{$leftPlayer['epicUserHandle']}}</p>
                        </ul>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainOne" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li id="pic" class="list-group-item" ></li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainTwo" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">K/D</br>Ratio</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][11]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainThree" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height:100px;background:#2f1c5c">Kills</br> per</br> Min.</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][12]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainFour" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Wins</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][8]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainFive" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Win </br>%</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][9]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainSix" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Games</br> Played</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][7]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainSeven" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Avg.</br> Survival</br> Time</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][14]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainEight" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Time</br> Played</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][13]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainNine" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Solo</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][0]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainTen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 25</br> Solo</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][5]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainEleven" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 5</br> Duo</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][1]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainTwelve" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 12</br> Duo</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][4]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainThirteen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Squad</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][2]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainFourteen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 6</br> Squad</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$leftPlayer['lifeTimeStats'][3]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                @endif
                @if(!empty($rightPlayer))
                <!-- Column 2  ------------------------------------->
                <div class="col-6" style="border-right: 1px solid white;">
                    <div id="gamer" class="row">
                        <ul class="list-group list-group-flush">
                            <p id="TAG">{{$rightPlayer['epicUserHandle']}}</p>
                        </ul>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="One" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li id="picture2" class="list-group-item"></li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Two" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">K/D</br>Ratio</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][11]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Three" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height:100px;background:#2f1c5c">Kills</br> per</br> Min.</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][12]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Four" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Wins</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][8]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Five" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Win </br>%</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][9]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Six" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Games</br> Played</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][7]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Seven" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Avg.</br> Survival</br> Time</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][14]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Eight" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Time</br> Played</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][13]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Nine" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Solo</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][0]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Ten" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 25</br> Solo</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][5]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Eleven" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 5</br> Duo</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][1]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Twelve" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 12</br> Duo</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][4]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Thirteen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Squad</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][2]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Fourteen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 6</br> Squad</li>
                                    <li class="list-group-item" style="background:#2f1c5c">{{$rightPlayer['lifeTimeStats'][3]['value']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
