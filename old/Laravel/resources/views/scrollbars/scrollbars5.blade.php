<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title></title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbars/css.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/scrollbars/Velocity.js"></script>
    <script type="text/javascript" src="js/scrollbars/ebot.js"></script>
    <script type="text/javascript" src="js/scrollbars/js.js"></script>
</head>
<body>

    <div id="controls" class="">

        <br />
        <label>Number of bars: </label>
        <input id="number-of-bars" type="number" value="400" step="2"/> 
        <br />
        
        <label>Speed of bars(in milliseconds): </label>
        <input id="speed" type="number" value="800" step="100"/> 
        <br />
    
        <label>Width of bars: </label>
        <input id="width" type="number" value="30" step="5"/> 
        <br />
        
        <label>Height of bars: </label>
        <input id="height" type="number" value="1150" step="50" /> 
        <br />

        <label>Color of bar 1: </label>
        <input id="bar-1-color" type="text" value="black" /> 
        <br />

        <label>Color of bar 2: </label>
        <input id="bar-2-color" type="text" value="white" /> 
        <br />
        
        <a href="http://www.w3schools.com/cssref/css_colornames.asp" target="_blank">More colors</a>
        <br />
        <br />
        <br />
        
        <div id="wrapper-radio" class="wrapper">
            <div class="btn-group" role="group">
                <button id="left-button" type="button" class="btn btn-default direction-button">Left</button>
                <button id="right-button" type="button" class="btn btn-default direction-button">Right</button>
                <button id="up-button" type="button" class="btn btn-default direction-button">Up</button>
                <button id="down-button" type="button" class="btn btn-default direction-button">Down</button>
            </div>
            <input id="left-radio" name="environment" class="hidden" type="radio" />
            <input id="right-radio" name="environment" class="hidden" type="radio" />
            <input id="up-radio" name="environment" class="hidden" type="radio" />
            <input id="down-radio" name="environment" class="hidden" type="radio" />
        </div>
        <br />
        <br />
        
        <label>Revert time (in seconds, default=5 mins): </label>
        <input id="revert-time" type="number" value="300" step="60"/> 
        <br />
        <br />


    
        <button id="start" class="btn btn-lg"><i class="glyphicon glyphicon-star">Start</i></button>
        <br />
        <br />
        <br />
        
        <button id="vertical-pre-set" class="btn btn-lg">Vertical Pre-set</button>
        
        
    </div>
    
    <div id="target" class=""></div>

 
</body>
</html>

<!-- 
to do: 
Customizable height
Metronome
Timer for end
Color picker
 -->
