$().ready(function() {
    
  sb.initialize();
  
  // ebot.updateDocumentation(sb);
  
  //http://stackoverflow.com/questions/18038244/javascript-hide-direction-change
  
});


/**
 * initialize()
 * values
 * slideSet1()
 * slideSet2()
 * addBar()
 * addBars()
 * assignHandlerStartButton()
 * getUserData()
 * revert()
 * assignHandlersDirectionButtons()
 * updateButtonAppearance()
 * flagSwitchDivs
 */
var sb = {
  
  initialize: function() {
    
    sb.assignHandlerStartButton();
    sb.assignHandlersDirectionButtons();
    sb.assignHandlerVerticalPreSet();
    
    $("#left-button").click();
    
  },
  
  assignHandlerStartButton: function() {
    
    $("#start").click(function() {

      sb.getUserData();

      //defaults
      if(isNaN(sb.values.numberOfBars)) { sb.values.numberOfBars = 50;}
      if(isNaN(sb.values.speed)) { sb.values.speed = 1500; }
      if(isNaN(sb.values.width)) { sb.values.width = 30; }
      
      if(sb.values.direction === "left" || sb.values.direction === "right") {
        sb.addBars(sb.values.numberOfBars, sb.values.width);
        sb.slideSet1();
      } else {
        sb.addBarsVertical(sb.values.numberOfBars, sb.values.height);
        sb.slideSet1Vertical();
      }

      $("#controls").hide();
      
      setInterval(sb.revert, sb.values.revertTime*1000);
      
    });
    
  },
 
  addBars: function(numberOfBars, width) {
    
    for(var i=0; i < numberOfBars; i++) {
      sb.addBar(width);
    }
    
  },
  
  addBar: function(width) {
    
    var html;
    
    if(sb.flagSwitchDivs === 0) {
    htmlString = 
      "<div id='' class='one' style='width:" + sb.values.width + "px;height:" + sb.values.height + "px;background-color:" + sb.values.bar1Color + ";position:absolute;" + sb.values.direction + ":" + sb.values.distanceLeft + "px;z-index:5;'></div>" +
      "<div id='' class='two' style='width:" + sb.values.width + "px;height:" + sb.values.height + "px;background-color:" + sb.values.bar2Color + ";position:absolute;" + sb.values.direction + ":" + sb.values.distanceLeft + "px;z-index:-5;'></div>";
    } else {
    htmlString = 
      "<div id='' class='three' style='width:" + sb.values.width + "px;height:" + sb.values.height + "px;background-color:" + sb.values.bar1Color + ";position:absolute;" + sb.values.direction + ":" + sb.values.distanceLeft + "px;z-index:-5;'></div>" +
      "<div id='' class='four' style='width:" + sb.values.width + "px;height:" + sb.values.height + "px;background-color:" + sb.values.bar2Color + ";position:absolute;" + sb.values.direction + ":" + sb.values.distanceLeft + "px;z-index:5;'></div>";
    }
    
    $("#target").append(htmlString);
    
    sb.values.distanceLeft += sb.values.width;
    
    sb.flagSwitchDivs === 0 ? sb.flagSwitchDivs = 1 : sb.flagSwitchDivs = 0;
    
  },
  
  addBarsVertical: function(numberOfBars, height) {
    
    for(var i=0; i < numberOfBars; i++) {
      sb.addBarVertical(height);
    }
    
  },

  addBarVertical: function(height) {

    var html, position;
    
    if(sb.values.direction === "up") {
      position = "top";
    } else {
      position = "bottom";
    }
    
    if(sb.flagSwitchDivs === 0) {
    htmlString = 
      "<div id='' class='one' style='width:" + sb.values.width + "px;height:" + sb.values.height + "px;background-color:" + sb.values.bar1Color + ";position:absolute; " + position + ":" + sb.values.distanceTop + "px;z-index:5;'></div>" +
      "<div id='' class='two' style='width:" + sb.values.width + "px;height:" + sb.values.height + "px;background-color:" + sb.values.bar2Color + ";position:absolute; " + position + ":" + sb.values.distanceTop + "px;z-index:-5;'></div>";
    } else {
    htmlString = 
      "<div id='' class='three' style='width:" + sb.values.width + "px;height:" + sb.values.height + "px;background-color:" + sb.values.bar1Color + ";position:absolute; " + position + ":" + sb.values.distanceTop + "px;z-index:-5;'></div>" +
      "<div id='' class='four' style='width:" + sb.values.width + "px;height:" + sb.values.height + "px;background-color:" + sb.values.bar2Color + ";position:absolute; " + position + ":" + sb.values.distanceTop + "px;z-index:5;'></div>";
    }
    
    $("#target").append(htmlString);
    
    sb.values.distanceTop += sb.values.height;
    
    sb.flagSwitchDivs === 0 ? sb.flagSwitchDivs = 1 : sb.flagSwitchDivs = 0;
    
  },
  
  slideSet1: function() {
    
    $(".one").css("z-index", "5");
    $(".two").css("z-index", "-5");
    $(".two").css("width", sb.values.width + "px");

    $(".four").css("z-index", "5");
    $(".three").css("z-index", "-5");
    $(".three").css("width", sb.values.width + "px");

    $(".one").velocity({ 
      properties: { 
        width: "0px",
      },
      options: { 
        duration: sb.values.speed, 
        easing: "linear"
      }
    });
    
    $(".four").velocity({ 
      properties: { 
        width: "0px",
      },
      options: { 
        duration: sb.values.speed, 
        easing: "linear", 
        complete: function(){sb.slideSet2();}      
      }
    });
    
  },
  
  slideSet2: function() {
    
    $(".one").css("z-index", "-5");
    $(".two").css("z-index", "5");
    $(".one").css("width", sb.values.width + "px");

    $(".four").css("z-index", "-5");
    $(".three").css("z-index", "5");
    $(".four").css("width", sb.values.width + "px");

    $(".two").velocity({ 
      properties: { 
        width: "0px"
      },
      options: { 
        duration: sb.values.speed, 
        easing: "linear"
      }
    });

    $(".three").velocity({ 
      properties: { 
        width: "0px"
      },
      options: { 
        duration: sb.values.speed, 
        easing: "linear", 
        complete: function(){sb.slideSet1();}
      }
    });
    
  },
  
  slideSet1Vertical: function() {
    
    $(".one").css("z-index", "5");
    $(".two").css("z-index", "-5");
    $(".two").css("height", sb.values.height + "px");

    $(".four").css("z-index", "5");
    $(".three").css("z-index", "-5");
    $(".three").css("height", sb.values.height + "px");

    $(".one").velocity({ 
      properties: { 
        height: "0px",
      },
      options: { 
        duration: sb.values.speed, 
        easing: "linear"
      }
    });
    
    $(".four").velocity({ 
      properties: { 
        height: "0px",
      },
      options: { 
        duration: sb.values.speed, 
        easing: "linear", 
        complete: function(){sb.slideSet2Vertical();}      
      }
    });
    
  },
  
  slideSet2Vertical: function() {
    
    $(".one").css("z-index", "-5");
    $(".two").css("z-index", "5");
    $(".one").css("height", sb.values.height + "px");

    $(".four").css("z-index", "-5");
    $(".three").css("z-index", "5");
    $(".four").css("height", sb.values.height + "px");

    $(".two").velocity({ 
      properties: { 
        height: "0px"
      },
      options: { 
        duration: sb.values.speed, 
        easing: "linear"
      }
    });

    $(".three").velocity({ 
      properties: { 
        height: "0px"
      },
      options: { 
        duration: sb.values.speed, 
        easing: "linear", 
        complete: function(){sb.slideSet1Vertical();}
      }
    });
    
  },

  getUserData: function() {
    
    sb.values.numberOfBars = parseInt($("#number-of-bars").val());
    sb.values.speed = parseInt($("#speed").val());
    sb.values.revertTime = parseInt($("#revert-time").val());
    sb.values.width = parseInt($("#width").val());
    sb.values.height = parseInt($("#height").val());
    sb.values.bar1Color = $("#bar-1-color").val();
    sb.values.bar2Color = $("#bar-2-color").val();

    sb.values.direction = sb.directionSelected;

  },
  
  revert: function() {
    
    $("#target").html("<h4>All Done! :)</h4>");
    
  },
  
  assignHandlersDirectionButtons: function() {
    
    buttons = ["left", "right", "up", "down"];
    
    buttons.forEach(function(button) {
      $("#" + button + "-button").click(function() {
        $("#" + button + "-radio").click();
        sb.updateButtonAppearance(button);
        sb.directionSelected = button;
      });
    });
    
  },
  
  updateButtonAppearance: function(button) {
    
    $(".direction-button").removeClass("btn-success");
    
    $("#" + button + "-button").addClass("btn-success");
    
  },
  
  assignHandlerVerticalPreSet: function() {
    
    $("#vertical-pre-set").click(function() {
      
      $("#number-of-bars").val(80);
      $("#width").val(1500);
      $("#height").val(20);
      
      $("#up-button").click();
      
    });

  },
  
  flagSwitchDivs: 0,
  
  values: {
    speed: 2000, 
    numberOfBars: 400,
    width: 30,
    height: 1000,
    bar1Color: "blue",
    bar2Color: "purple", 
    distanceLeft: 0,
    distanceTop: 0,
    revertTime: 300,
    direction: "left",
  },
  
  directionSelected: "",
  
};




























