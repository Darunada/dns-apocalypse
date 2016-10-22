<?php
/**
 * Created by PhpStorm.
 * User: Lea
 * Date: 10/21/2016
 * Time: 2:57 PM
 */
?>


@extends('layouts.home')

@section('title', 'Home')

@section('extra-meta')
    @parent
    <script type="text/javascript">
        window.startDollars = {{ $dollarsStart }};
        window.increment = {{ $dollarsPerSecond }};
    </script>
@endsection

@section('header-overlay')
    <div class="header-overlay">
        <div class="text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1>DNS Apocalypse '16</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="lead">Gee golly, this downtime sure is expensive!</h2>
                    <div id="odometer" class="odometer">{{ round($dollarsStart) }}</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                        <h3>Dollars lost since 10/21/2016</h3>
                        <h5>$100,000.00 lost per company, per hour.</h5>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('body')
    <div class="section2">
        <h2>But don't fear! Dyn's crack engineers are on the job:</h2>
        <div class="videoWrapper">
            <iframe width="1140" height="768" src="https://www.youtube.com/embed/0R66Fvhx0vQ" frameborder="0"
                allowfullscreen></iframe>
        </div>
    </div>
@endsection
