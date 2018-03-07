@extends('master')
@section('title', 'Fornite Tracker')
@section('content')

<?php if (!empty($fortniteResponse)) {
    dump($fortniteResponse);
} ?>

<!-- SOLO -->
<h1 id="stats1">SOLO STATS</h1>
<div id="solo1" class="row">
    <div class="col">
        <div id="miniRow1" class="row">
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="http://www.playnation.de/uploads/news/newspic-73456.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Sidekickkills</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://cdn.images.express.co.uk/img/dynamic/143/590x/Fortnite-Update-916069.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Titanis25</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://cdn.gamerant.com/wp-content/uploads/fortnite-season-3-battle-pass-skin.jpg.optimal.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Allen414</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://cdn.wccftech.com/wp-content/uploads/2017/11/WCCFfortnite4-740x429.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 id="deathHawk" class="card-title">DeathHawk_35</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://static.gamespot.com/uploads/screen_kubrick/1577/15776161/3348399-fortnite.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Theeman69</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- SOLO 2 -->
        <div id="miniRow2" class="row">
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://i.gyazo.com/78d0889ff813d2353ac81b4b446f1606.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Qsk_Adapt</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="http://cdn3-www.gamerevolution.com/assets/uploads/2018/02/Fortnite-Alpine-Ace-Skin-Missing.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://progameguides.com/wp-content/uploads/2017/12/fortnite-outfit-skull-trooper.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://progameguides.com/wp-content/uploads/2017/12/fortnite-outfit-codename-elf.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://progameguides.com/wp-content/uploads/2017/12/fortnite-outfit-alpine-ace-gbr.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form class="" action="get_player" method="post">
    @csrf
    <input id="playerName" type="text" name="playerName">
    <button id="button" type="submit" name="button">Show Stats</button>
</form>

<!-- <table id="graph" class="table">
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
</table> -->
@if (!empty($fortniteResponse))
<div id="card" class="card">
    <h5 id="header" class="card-header">{{ $fortniteResponse['epicUserHandle']}}</h5>
    <div id="mini-body" class="card-body">
        <h5 id="studies" class="card-title"></h5>
        <p class="card-text"></p>
        <div id="cardRowOne" class="row">
            <!-- main stats -->
            <!-- imgOne -->
            <!-- <div id="tinyOne" class="col-1">
                <div class="card" style="width: 120px;">
                    <img src="" />
                </div>
            </div> -->
            <!-- mainOne -->
            <div class="col">
                <div id="mainOne" class="card" style="width: 110px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="height:100px;background:#2f1c5c;">K/D</br>Ratio</li>
                        <li class="list-group-item" style="background:#2f1c5c">{{ $fortniteResponse['lifeTimeStats'][11]['value'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- mainTwo -->
            <div class="col">
                <div id="mainTwo" class="card" style="width: 110px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="height: 100px;background:#2f1c5c">Kills</br> per</br> Min.</li>
                        <li class="list-group-item" style="background:#2f1c5c">{{ $fortniteResponse['lifeTimeStats'][10]['value'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- mainThree -->
            <div class="col">
                <div id="mainThree" class="card" style="width: 110px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="height:100px;background:#2f1c5c">Total</br> Wins</li>
                        <li class="list-group-item"style="background:#2f1c5c">{{ $fortniteResponse['lifeTimeStats'][8]['value'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- mainFour -->
            <div class="col">
                <div id="mainFour" class="card" style="width: 110px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="height: 100px;background:#2f1c5c">Win </br>%</li>
                        <li class="list-group-item"style="background:#2f1c5c">{{ $fortniteResponse['lifeTimeStats'][9]['value'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- mainFive -->
            <div class="col">
                <div id="mainFive" class="card" style="width: 110px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"style="height: 100px;background:#2f1c5c">Total</br> Games</br> Played</li>
                        <li class="list-group-item"style="background:#2f1c5c">{{ $fortniteResponse['lifeTimeStats'][7]['value'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- mainSix -->
            <div class="col">
                <div id="mainSix" class="card" style="width: 110px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"style="height: 100px;background:#2f1c5c">Avg.</br> Survival</br> Time</li>
                        <li class="list-group-item"style="background:#2f1c5c">{{ $fortniteResponse['lifeTimeStats'][14]['value'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- mainSeven -->
            <div class="col">
                <div id="mainSeven" class="card" style="width: 110px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"style="height: 100px;background:#2f1c5c">Total</br> Time</br> Played</li>
                        <li class="list-group-item"style="background:#2f1c5c">{{ $fortniteResponse['lifeTimeStats'][13]['value'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- imgTwo -->
            <!-- <div id="tinyTwo" class="col-1">
                <div class="card" style="width: 120px;">
                    <img src="" />
                </div>
            </div> -->
        </div>
        <div class="row">
            <!-- card 1 -->
            <div class="col-4">

                <div id="oneVSone" class="card" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">SOLO</h5>
                        <img src="http://feed4gamers.com/files/category/2017/12/7/0/full/49066/2.jpg" /></br>
                        <a href="#" class="car-link">hey</a>
                        <a href="#" class="car-link">hey</a>
                    </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="col-4">

                <div id="twoVStwo" class="card" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">DUO</h5>
                        <img src="https://i.ytimg.com/vi/_HfsMoM0Mv4/maxresdefault.jpg" /></br>
                        <a href="#" class="card-link">hello</a>
                        <a href="#" class="card-link">hello</a>
                    </div>
                </div>
            </div>
            <!-- card 3 -->
            <div class="col-4">

                <div id="squadVSsquad" class="card" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">SQUAD</h5>
                        <img src="https://i.ytimg.com/vi/jr5RQfoittc/hqdefault.jpg" /></br>
                        <a href="#" class="card-link">hi</a>
                        <a href="#" class="card-link">hi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
</div>
@endsection
