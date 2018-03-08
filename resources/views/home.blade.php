@extends('master') @section('title', 'Fornite Tracker') @section('content')

<?php if (!empty($fortniteResponse)) {
    dump($fortniteResponse);
} ?>


<form class="" action="get_player" method="post">
    @csrf
    <input id="playerName" type="text" name="playerName">
    <button id="button" type="submit" name="button">Show Stats</button>
    <button id="button2" type="submit" name="button">Show Stats</button>
    <input id="player2Name" type="text" name="playerName">
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
    <div id="bigColumn" class="row">
        <div class="col">

            <!-- Column 1 --------------------------------------->

            <div class="row">
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
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainTwo" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Kills</br> per</br> Min.</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainThree" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height:100px;background:#2f1c5c">Total</br> Wins</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainFour" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Win </br>%</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainFive" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Games</br> Played</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainSix" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Avg.</br> Survival</br> Time</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainSeven" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Time</br> Played</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
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
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainTen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 25</br> Solo</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainEleven" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 5</br> Duo</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainTwelve" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 12</br> Duo</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="mainThirteen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Squad</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="mainFourteen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 6</br> Squad</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Column 2  ------------------------------------->
                <div class="col-6" style="border-right: 1px solid white;">
                    <div id="gamer" class="row">
                        <ul class="list-group list-group-flush">
                            <p id="TAG">Sidekickkills</p>
                        </ul>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="One" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height:100px;background:#2f1c5c;">K/D</br>Ratio</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Two" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Kills</br> per</br> Min.</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Three" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height:100px;background:#2f1c5c">Total</br> Wins</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Four" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Win </br>%</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Five" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Games</br> Played</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Six" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Avg.</br> Survival</br> Time</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Seven" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Total</br> Time</br> Played</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Eight" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Hello</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Nine" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Solo</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Ten" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 25</br> Solo</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Eleven" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 5</br> Duo</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Twelve" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 12</br> Duo</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row STATS">
                        <div class="col-6">
                            <div id="Thirteen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 3</br> Squad</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="Fourteen" class="card" style="width: 110px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="height: 100px;background:#2f1c5c">Top</br> 6</br> Squad</li>
                                    <li class="list-group-item" style="background:#2f1c5c"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
