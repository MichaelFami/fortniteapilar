@extends('master') @section('title', 'Fornite Tracker') @section('content')



<form id="check" class="" action="get_player" method="post">
    @csrf
    <input id="playerName" type="text" name="playerName" placeholder="Player1">
    <button id="button" class="btn btn-outline-light" type="submit" name="button">Compare</button>
    <input id="player2Name" type="text" name="playerName" placeholder="Player2">
</form>

@if (!empty($leftPlayer) && !empty($rightPlayer))
<div class="container">
    <div id="bigColumn"class="row">
        @if (!empty($leftPlayer))
        <!--
        COLUMN 1
        ------------------------>
        <div class="col-6" style="border-right: 1px solid white;">
            <div id="gamerTag" class="row">
                <ul class="list-group list-group-flush">
                    <p id="GamerTAG">{{$leftPlayer['epicUserHandle']}}</p>
                </ul>
            </div>
            <div id="mainOne" class="row">
                <div class="col">
                    <p>
                        Skill
                    </p>
                </div>
                <div class="col">
                    Numbers
                </div>
            </div>
            <div id="mainTwo" class="row">
                <div class="col">K/D RATIO</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][11]['value']}}</div>
            </div>
            <div id="mainThree" class="row">
                <div class="col">KILLS PER MIN.</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][12]['value']}}</div>
            </div>
            <div id="mainFour" class="row">
                <div class="col">TOTAL WINS</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][8]['value']}}</div>
            </div>
            <div id="mainFive" class="row">
                <div class="col">WIN %</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][9]['value']}}</div>
            </div>
            <div id="mainSix" class="row">
                <div class="col">TOTAL GAMES PLAYED</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][7]['value']}}</div>
            </div>
            <div id="mainSeven" class="row">
                <div class="col">AVG SURVIVAL TIME</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][14]['value']}}</div>
            </div>
            <div id="mainEight" class="row">
                <div class="col">TOTAL TIME PLAYED</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][13]['value']}}</div>
            </div>
            <div id="mainNine" class="row">
                <div class="col">TOP 3 SOLO</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][0]['value']}}</div>
            </div>
            <div id="mainTen" class="row">
                <div class="col">TOP 25 SOLO</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][5]['value']}}</div>
            </div>
            <div id="mainEleven" class="row">
                <div class="col">TOP 5 DUO</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][1]['value']}}</div>
            </div>
            <div id="mainTwelve" class="row">
                <div class="col">TOP 12 DUO</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][4]['value']}}</div>
            </div>
            <div id="mainThirteen" class="row">
                <div class="col">TOP 3 SQUAD</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][2]['value']}}</div>
            </div>
            <div id="mainFourteen" class="row">
                <div class="col">TOP 6 SQUAD</div>
                <div class="col">{{$leftPlayer['lifeTimeStats'][3]['value']}}</div>
            </div>
        </div>
        @endif
        @if(!empty($rightPlayer))
        <!--
        COLUMN 2
        ------------------------>
        <div class="col-6" style="border-right: 1px solid white;">
            <div id="gamer" class="row">
                <ul class="list-group list-group-flush">
                    <p id="TAG">{{$rightPlayer['epicUserHandle']}}</p>
                </ul>
            </div>
            <div id="One" class="row">
                <div class="col-6">
                    <p>
                        Skill
                    </p>
                </div>
                <div class="col-6">
                    Numbers
                </div>
            </div>
            <div id="Two" class="row">
                <div class="col-6">K/D RATIO</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][11]['value']}}</div>
            </div>
            <div id="Three" class="row">
                <div class="col-6">KILLS PER MIN.</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][12]['value']}}</div>
            </div>
            <div id="Four" class="row">
                <div class="col-6">TOTAL WINS</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][8]['value']}}</div>
            </div>
            <div id="Five" class="row">
                <div class="col-6">WIN %</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][9]['value']}}</div>
            </div>
            <div id="Six" class="row">
                <div class="col-6">TOTAL GAMES PLAYED</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][7]['value']}}</div>
            </div>
            <div id="Seven" class="row">
                <div class="col-6">AVG SURVIVAL TIME</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][14]['value']}}</div>
            </div>
            <div id="Eight" class="row">
                <div class="col-6">TOTAL TIME PLAYED</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][13]['value']}}</div>
            </div>
            <div id="Nine" class="row">
                <div class="col-6">TOP 3 SOLO</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][0]['value']}}</div>
            </div>
            <div id="Ten" class="row">
                <div class="col-6">TOP 25 SOLO</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][5]['value']}}</div>
            </div>
            <div id="Eleven" class="row">
                <div class="col-6">TOP 5 DUO</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][1]['value']}}</div>
            </div>
            <div id="Twelve" class="row">
                <div class="col-6">TOP 12 DUO</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][4]['value']}}</div>
            </div>
            <div id="Thirteen" class="row">
                <div class="col-6">TOP 3 SQUAD</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][2]['value']}}</div>
            </div>
            <div id="Fourteen" class="row">
                <div class="col-6">TOP 6 SQUAD</div>
                <div class="col-6">{{$rightPlayer['lifeTimeStats'][3]['value']}}</div>
            </div>
        </div>
        @endif
    </div>
</div>
@endif
@endsection
