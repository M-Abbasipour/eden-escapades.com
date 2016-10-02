@extends('templates.default')

@section('title')
    DASHBOARD
@endsection

@section('content')
<div class="row">
   
    <!-- CENTRE -->
    <div class="col-xs-12 col-md-6 col-md-push-3">
        <div class="row">
            <div class="header h60 centred col-xs-12 col-md-4 col-md-offset-4 border">
                <h3>DASHBOARD</h3>
            </div>
        </div>
        
        <div class="row">
            <!-- status -->
            <div class="centre h60 centred col-xs-12 col-md-12 border">
                <h3>STATUS</h3>
            </div>
            
            <!-- buttons -->
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 1</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 2</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 3</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 4</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 5</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 6</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 7</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 8</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 9</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 10</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 11</p>
            </div>
            <div class="centre h60 centred col-xs-3 col-md-2 border">
                <p>TEXT 12</p>
            </div>
            
            <!-- search -->
            <div class="centre h60 centred col-xs-12 col-md-12 border">
                <h3>SEARCH</h3>
            </div>
            
            <!-- who's looked at me -->
            <div class="centre h330 centred col-xs-12 col-md-6 border" id="looked-at-me">
                <h3>WHO'S LOOKED AT ME</h3>
            </div>
            
            <!-- LATEST VERIFICATIONS -->
            <div class="centre h330 centred col-xs-12 col-md-6 border" id="latest-verifications">
                <h3>LATEST VERIFICATIONS</h3>
            </div>
            
            <!-- friends' updates -->
            <div class="centre h330 centred col-xs-12 col-md-6 border" id="friends-updates">
                <h3>FRIENDS' UPDATES</h3>
            </div>
            
            <!-- friends' photos -->
            <div class="centre h330 centred col-xs-12 col-md-6 border" id="friends-photos">
                <h3>FRIENDS' PHOTOS</h3>
            </div>
            
        </div>
    </div>
    
     <!-- LEFT -->
    <div class="left col-xs-12 col-md-3 col-md-pull-6 border">
        <section class="row h240 centred border" id="refer-a-friend">
            <p>LEFT REFER A FRIEND</p>
        </section>

        <section class="row h320 centred border" id="special-offers">
            <p>LEFT SPECIAL OFFERS</p>
        </section>
  
        <section class="row h400 centred border" id="upgrade-options">
            <p>LEFT UPGRADE OPTIONS</p>
        </section>
    </div>
    
    <!-- RIGHT -->
    <div class="right col-xs-12 col-md-3 border">
        <section class="row h120 centred border" id="date-time">
            <p>RIGHT DATE/TIME</p>
        </section>
        
        <section class="row h270 centred border">
            <p>RIGHT LATEST PHOTOS</p>
        </section>
        
        <section class="row h240 centred border">
            <p>RIGHT FEATURED USERS</p>
        </section>
        
        <section class="row h330 centred border">
            <p>RIGHT HELP AND SUPPORT</p>
        </section>
    </div>
    
<!--
    <div class="col-md-2 col-xs-4 section left h240">
        <h4>REFER A FRIEND</h4>
    </div>
    <div class="col-md-2 col-md-offset-3 col-xs-4 col-xs-offset-4 section header">
        <h3>DASHBOARD</h3>
    </div>
    <div class="col-md-2 col-md-offset-3 col-xs-4 section right h120">
        <h4>DATE &amp; TIME</h4>
    </div>
-->
</div>

@endsection