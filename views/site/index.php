<?php

    /* @var $this yii\web\View */

    $this->title = 'TroTimes';
?>


<div class="site-index">

    <div class="jumbotron">
        <p><a class="btn btn-lg btn-success" href="#" id="start_stop">Zeiterfassung starten</a></p>
    </div>

    <div class="body-content">
        <div class="col-md-4">
            <h2 class="pie-headline">Aktueller Tag</h2>
            <div id="hours-worked-daily">&nbsp;</div>
        </div>
        <div class="col-md-4">
            <h2 class="pie-headline">Aktuelle Woche</h2>
            <div id="hours-worked-weekly">&nbsp;</div>
        </div>
        <div class="col-md-4">
            <h2 class="start-headline-overview">Übersicht</h2>
            <div class="start-overview">
                <div class="panel panel-default">
                    <div class="panel-heading">Übersicht</div>
                    <div class="panel-body">
                        <div class="col-md-8">Montag, 03.10.2016</div>
                        <div class="col-md-4">8:12</div>
                        <div class="col-md-8">Dienstag, 04.10.2016</div>
                        <div class="col-md-4">8:06</div>
                        <div class="col-md-8">Mittwoch, 05.10.2016</div>
                        <div class="col-md-4">7:55</div>
                        <div class="col-md-8">Donnerstag, 06.10.2016</div>
                        <div class="col-md-4">7:48</div>
                        <div class="col-md-8">Freitag, 07.10.2016</div>
                        <div class="col-md-4">8:01</div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-8"><span class="hours-positive">Gesamt</span></div>
                        <div class="col-md-4"><span class="hours-positive">8:01 (+1)</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
