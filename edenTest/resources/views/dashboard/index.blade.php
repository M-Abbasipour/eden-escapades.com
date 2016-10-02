@extends('templates.default')

@section('title')
    {DASHBOARD}
@endsection

@section('content')
<div class="row main-content">
    
    <div class="row page-title text-uppercase">    
        <div class="panel panel-default">
            <div class="page-title panel-heading">
                <h4 class="panel-title">
                    <a href="{{ route('dashboard.index') }}">
                        <h2 class="outline">DASHBOARD</h2>
                    </a>
                </h4>
            </div>
        </div>
    </div>
    
    <div class="row-margin"></div>
    
    <!-- --- date/time --- -->
    <div class="row">
        <div class="panel panel-default">
            <div class="right-section-title panel-heading">
                <h4 class="panel-title">
                    <h3 class="outline text-uppercase" id="date">date/time</h3>
                </h4>
            </div>
        </div>
    </div>
    
    <div class="row-margin"></div>
    
    <div class="row status text-uppercase"><h3>status</h3></div>
    
    <div class="row-margin"></div>
    
    <span id="centre-btns">
    <div class="row">
        <div class="col-xs-6 left text-uppercase"><h4>messages</h4></div>
        <div class="col-xs-6 right text-uppercase"><h4>friends</h4></div>
    </div>
    
    <div class="row-margin"></div>
    
    <div class="row">
        <div class="col-xs-6 left text-uppercase"><h4>matches</h4></div>
        <div class="col-xs-6 right text-uppercase"><h4>adverts</h4></div>
    </div>
    
    <div class="row-margin"></div>
    
    <div class="row">
        <div class="col-xs-6 left text-uppercase"><h4>groups</h4></div>
        <div class="col-xs-6 right text-uppercase"><h4>timelines</h4></div>
    </div>
    
    <div class="row-margin"></div>
    
    <div class="row">
        <div class="col-xs-6 left text-uppercase"><h4>profile</h4></div>
        <div class="col-xs-6 right text-uppercase"><h4>gallery</h4></div>
    </div>
    
    <div class="row-margin"></div>
    
    <div class="row">
        <div class="col-xs-6 left text-uppercase"><h4>account</h4></div>
        <div class="col-xs-6 right text-uppercase"><h4>verifications</h4></div>
    </div>
    
    <div class="row-margin"></div>
    
    <div class="row">
        <div class="col-xs-6 left text-uppercase"><h4>notes</h4></div>
        <div class="col-xs-6 right text-uppercase"><h4>meet today</h4></div>
    </div>
    </span>
    <div class="row-margin"></div>
    
    <div class="row search text-uppercase"><h3>search</h3></div>
    
     <div class="row-margin"></div>
    
    <!-- *** ACCORDION *** -->
    <div class="panel-group row text-uppercase" id="accordion">
        
    <!-- --- who's looked at me --- -->
    <div class="panel panel-default">
        <div class="centre-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    <h3 class="outline">who's looked at me</h3>
                </a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body centre-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div>                  
    </div>
    
    <div class="row-margin"></div>
    
    <!-- --- who's looked at me --- -->
    <div class="panel panel-default">
        <div class="centre-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    <h3 class="outline">latest verifications</h3>
                </a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body centre-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>
    
    <div class="row-margin"></div>
    
    <!-- --- friends updates --- -->
    <div class="panel panel-default">
        <div class="centre-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    <h3 class="outline">friends updates</h3>
                </a>
            </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body centre-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>

    <div class="row-margin"></div>
    
    <!-- --- friends photos --- -->
    <div class="panel panel-default">
        <div class="centre-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                    <h3 class="outline">friends photos</h3>
                </a>
            </h4>
        </div>
   <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body centre-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>
        
    <div class="row-margin"></div>
    
    <!-- --- latest photos --- -->
    <div class="panel panel-default">
        <div class="right-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                    <h3 class="outline">latest photos</h3>
                </a>
            </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body right-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>

    <div class="row-margin"></div>
    
    <!-- --- featured users --- -->
    <div class="panel panel-default">
        <div class="right-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                    <h3 class="outline">featured users</h3>
                </a>
            </h4>
        </div>
        <div id="collapse7" class="panel-collapse collapse">
            <div class="panel-body right-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>
                
    <div class="row-margin"></div>
    
    <!-- --- help and support --- -->
    <div class="panel panel-default">
        <div class="right-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                    <h3 class="outline">help and support</h3>
                </a>
            </h4>
        </div>
       <div id="collapse8" class="panel-collapse collapse">
            <div class="panel-body right-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>

    <div class="row-margin"></div>
    
    <!-- --- refer a friend --- -->
    <div class="panel panel-default">
        <div class="left-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                    <h3 class="outline">refer a friend</h3>
                </a>
            </h4>
        </div>
        <div id="collapse9" class="panel-collapse collapse">
            <div class="panel-body left-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>

                
    <div class="row-margin"></div>
    
    <!-- --- special offers --- -->
    <div class="panel panel-default">
        <div class="left-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                    <h3 class="outline">special offers</h3>
                </a>
            </h4>
        </div>
        <div id="collapse10" class="panel-collapse collapse">
            <div class="panel-body left-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>
  
                
    <div class="row-margin"></div>
    
    <!-- --- upgrade options --- -->
    <div class="panel panel-default">
        <div class="left-section-title panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                    <h3 class="outline">upgrade options</h3>
                </a>
            </h4>
        </div>
        <div id="collapse11" class="panel-collapse collapse">
            <div class="panel-body left-content">
                <h3>content goes here</h3>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
                <p>this is more content.</p>
            </div>
        </div> 
    </div>
 
        
    </div><!-- end of accordion -->
   
</div>
@endsection