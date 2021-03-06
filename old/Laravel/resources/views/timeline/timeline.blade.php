<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title></title>
    <link rel="stylesheet" type="text/css" media="screen" href="timelineTT/css/css.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="timelineTT/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="timelineTT/css/vis.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="timelineTT/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="timelineTT/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="timelineTT/css/jquery.dynatable.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="timelineTT/css/chosen.min.css" />
    <script type="text/javascript" src="timelineTT/js/jquery.js"></script>
    <script type="text/javascript" src="timelineTT/js/jquery-ui.js"></script>
    <script type="text/javascript" src="timelineTT/js/moment.js"></script>
    <script type="text/javascript" src="timelineTT/js/vis.js"></script>
    <script type="text/javascript" src="timelineTT/js/bootstrap.js"></script>
    <script type="text/javascript" src="timelineTT/js/inflection.js"></script>
    <script type="text/javascript" src="timelineTT/js/deepcopy.js"></script>
    <script type="text/javascript" src="timelineTT/js/dataTables.js"></script>
    <script type="text/javascript" src="timelineTT/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="timelineTT/js/jquery.dynatable.js"></script>
    <script type="text/javascript" src="timelineTT/js/ebot.js"></script>
    <script type="text/javascript" src="timelineTT/js/chosen.jquery.js"></script>
    <script type="text/javascript" src="timelineTT/js/js.js"></script>

</head>
<body>

<div class="wrapper">

<div id="notifications"></div>

    <div id="event-create-div-wrapper">
        <div id="event-create-div" class="">
            <button id="event-create-button" class="btn btn-lg event-create-button">Create New Event</button>
        </div>
    </div>
    
    <div id="actions-wrapper" class="">
        <div id="actions" class="actions-single-event">
            <button id="read" class="btn btn-lg">Details</button>
            <button id="update" class="btn btn-lg">Update</button>
            <button id="delete" class="btn btn-lg">Delete</button>
        </div>
    </div>
    
    <div id="timeline"><img src='timelineTT/images/loading.gif' style='width:100px; height:100px;'></div>
    
    <div id="timeline-controls">
    
        <div class="timeline-control-wrapper center-vertical">
            <button id="stack-option" class="timeline-control"><i class="btn btn-sm">Stack</i></button>
        </div>
            
         <div class="timeline-control-wrapper">
             <label>Start Date</label> <br />
             <input id="range-start" type="date" class="form-control timeline-control" />
         </div>

         <div class="timeline-control-wrapper">
            <label>End Date</label> <br />
            <input id="range-end" type="date" class="form-control timeline-control" />
         </div>

         <div class="timeline-control-wrapper">
            <label>Timeline Height</label> <br />
            <input id="height" type="number" class="form-control timeline-control" step="50" />
         </div>

         <div class="timeline-control-wrapper center-vertical">
            <select id="timeline-filter-select" data-placeholder="Select event type..." class="timeline-control"></select>
         </div>

    </div>
    
    <div class="clear-float"></div>
    
</div>
 
 

   <div id="modal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div id="modal-header" class="modal-header"></div>
        <div id="modal-body" class="modal-body">
        
          <div id="error-message-div" class="hide"> 
              <div class="alert alert-danger" role="alert"> 
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> 
                  <span id="error-message"></span><br /> 
                  <span id="error-message-status"></span>: 
                  <span id="error-message-status-text"></span> 
              </div> 
          </div>
          
          <div id="form-target"></div>
          
        </div>
        <div id="modal-footer" class="modal-footer"></div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 
 
</body>
</html>