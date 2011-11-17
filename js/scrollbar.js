(function(undefined) {
$.fn.scrollbar = function( parameters ){
	
	//SCROLL TYPE
	var type = "scrollbar"; //scrollbar || mousePosition || dragAndDrop
	
	//ALL
	var height = 300;
	var scrollerEase = 7;
	var downBtnBool = false;
	var downBtn;
	var downBtnActive = true;
	
	var upBtnBool = false;
	var upBtn;
	var upBtnActive = true;
	
	var topBtnBool = false;
	var topBtn;
	var topBtnActive = true;
	
	var buttonsDisabledAlpha = 0.4;
	var buttonsScrollSpeed = 10;
	
	//EXCLUSIVE SCROLLBAR PARAMETERS
	var barWidth = 10;
	var draggerHeight = "auto";
	var roundCorners = 0;
	var distanceFromBar = 5;
	var mouseWheel = true;
	var mouseWheelSpeed = 13;
	var draggerColor = "#111111";
	var draggerOverColor = "#a1dc13";
	var barColor = "#E6E6E6";
	var barOverColor = "#CCCCCC";
	
	//EXCLUSIVE MOUSE POSITION PARAMETERS
	var lockToPosition = false;
	var lockToAlign = "middle"; //middle || top || bottom
	var topAndBottomSpace = 20;
	
	//EXCLUSIVE DRAG AND DROP PARAMETERS
	
	//PARSE PARAMETERS
	if ( parameters.type != undefined )
		type = parameters.type;
		
	if ( parameters.height != undefined )
		height = parameters.height;
	if ( parameters.scrollerEase != undefined )
		scrollerEase = parameters.scrollerEase;
	if ( parameters.downBtn != undefined){
		downBtnBool = true;
		downBtn = parameters.downBtn;	
	}
	if (parameters.upBtn != undefined){
		upBtnBool = true;
		upBtn = parameters.upBtn;
	}
	if (parameters.topBtn != undefined){
		topBtnBool = true;
		topBtn = parameters.topBtn;
	}
	if ( parameters.buttonsDisabledAlpha != undefined )
		buttonsDisabledAlpha = parameters.buttonsDisabledAlpha;
	if ( parameters.buttonsScrollSpeed != undefined )
		buttonsScrollSpeed = parameters.buttonsScrollSpeed;
	if ( parameters.barWidth != undefined )
		barWidth = parameters.barWidth;
	if ( parameters.draggerHeight != undefined )
		draggerHeight = parameters.draggerHeight;
	if ( parameters.roundCorners != undefined )
		roundCorners = parameters.roundCorners;
	if ( parameters.distanceFromBar != undefined )
		distanceFromBar = parameters.distanceFromBar;
	if ( parameters.mouseWheel != undefined )
		mouseWheel = parameters.mouseWheel;
	if ( parameters.mouseWheelSpeed != undefined )
		mouseWheelSpeed = parameters.mouseWheelSpeed;
	if ( parameters.draggerColor != undefined )
		draggerColor = parameters.draggerColor;
	if ( parameters.draggerOverColor != undefined )
		draggerOverColor = parameters.draggerOverColor;
	if ( parameters.barColor != undefined )
		barColor = parameters.barColor;
	if ( parameters.barOverColor != undefined )
		barOverColor = parameters.barOverColor;
		
	if ( parameters.lockToPosition != undefined )
		lockToPosition = parameters.lockToPosition;
	if ( parameters.lockToAlign != undefined )
		lockToAlign = parameters.lockToAlign;
	if ( parameters.topAndBottomSpace != undefined )
		topAndBottomSpace = parameters.topAndBottomSpace;
	
	
	//ROOT
	var $root = $(this);
	$root.css("height", height+'px');
	
	
	//MASK
	var $mask = $("#scrollbar", $root);
	$mask.css("width", $root.width());
	$mask.css("height", height);
	
	//CONTENT
	var $content = $(".content", $root);
	var contentPosition=0;
	var contentPositionTo=0;
	var contentHeight = $content.height();


	//OTHER
	var timer;
	var positionClicked;
	var positionIni;
	var dragging=false;
	var refreshRate = 30;
	
	//IF IS SCROLLBAR TYPE
	if(type == "scrollbar"){
		$root.append('<div class="scrollbar"><div class="back"></div><div class="dragger"></div></div>');
		$mask.css("margin-right", barWidth+'px');
		$mask.css("width", ($root.width()-barWidth-distanceFromBar)+"px");
		$content.css("width", ($root.width()-barWidth-distanceFromBar)+"px");
	
		//SCROLLER
		$(".scrollbar", $root).css("width", barWidth+"px");
		var scrollBackHeight = height;
		var scrollDraggerHeight;
		
		//SCROLLER DRAGGER
		var $dragger = $(".scrollbar .dragger", $root);
		var draggerPosition=0;
		$dragger.css("top", 0+"px");
		$dragger.css("width", barWidth+'px');
		$dragger.css("background-color", draggerColor);
		
		
		if(roundCorners>0){
			$dragger.css("-moz-border-radius", roundCorners+'px');
			$dragger.css("-webkit-border-radius", roundCorners+'px');
			$dragger.css("-khtml-border-radius", roundCorners+'px');
			$dragger.css("border-radius", roundCorners+'px');
		}
		
		
		//SCROLLER BACK
		var $back = $(".scrollbar .back", $root);
		$back.css("width", barWidth+'px');
		$back.css("height", height+'px');
		$back.css("background-color", barColor);
		if(roundCorners>0){
			$back.css("-moz-border-radius", roundCorners+'px');
			$back.css("-webkit-border-radius", roundCorners+'px');
			$back.css("-khtml-border-radius", roundCorners+'px');
			$back.css("border-radius", roundCorners+'px');
		}
		
		var updatedraggerSize = function(){
			if(contentHeight>height){
				if(draggerHeight=="auto"){
					scrollDraggerHeight=height/(contentHeight/height);
					$dragger.css("height", scrollDraggerHeight+'px');
				}
				else{
					scrollDraggerHeight=draggerHeight;
					$dragger.css("height", draggerHeight+'px');
				}
			}
		}
		updatedraggerSize();
	}
	
	
	
	$(".content", $root).resize(function() {
		$content = $(".content", $root);
		contentHeight = $content.height();
		
		if(type == "scrollbar")
			updatedraggerSize();
	});
	
	//CONTENT SCROLLING
	var updateContent = function(){
		if(topBtnBool){
			if(contentPositionTo >= 0 && topBtnActive){
				topBtnActive=false;
				topBtn.fadeTo(300, buttonsDisabledAlpha);
				topBtn.addClass('disabled');
			}
			else if(contentPositionTo<0 && !topBtnActive){
				topBtnActive=true;
				topBtn.fadeTo(300, 1);	
				topBtn.removeClass('disabled');
			}
		}
		if(upBtnBool){
			if(contentPositionTo >= 0 && upBtnActive){
				upBtnActive= false;
				upBtn.fadeTo(300, buttonsDisabledAlpha);
				upBtn.addClass('disabled');
			}
			else if(contentPositionTo<0 && !upBtnActive){
				upBtnActive=true;
				upBtn.fadeTo(300, 1);
				upBtn.removeClass('disabled');	
			}
		}
		if(downBtnBool){
			if(contentPositionTo <= (-(contentHeight-height)) && downBtnActive){
				downBtnActive= false;
				downBtn.fadeTo(300, buttonsDisabledAlpha);
				downBtn.addClass('disabled');
			}
			else if(contentPositionTo>(-(contentHeight-height)) && !downBtnActive){
				downBtnActive=true;
				downBtn.fadeTo(300, 1);	
				downBtn.removeClass('disabled');
			}
		}
		
		var mover = Math.round(((contentPositionTo-contentPosition)/scrollerEase));
		contentPosition += mover;
		$content.css('top', contentPosition+"px");
		
		timer = setTimeout(updateContent, refreshRate);
	}
	timer = setTimeout(updateContent, refreshRate);
	
	
	
	//SCROLLBAR FUNCTIONS
	if(type == "scrollbar"){
		var changeDraggerPosition = function(){
			$content = $(".content", $root);
			contentHeight = $content.height();
			
			if(draggerPosition<0)draggerPosition=0;
			if(draggerPosition>(scrollBackHeight-scrollDraggerHeight))draggerPosition=(scrollBackHeight-scrollDraggerHeight);
			
			var perc =  draggerPosition/(scrollBackHeight-scrollDraggerHeight);
			contentPositionTo = -(contentHeight-height)*perc;
			
			$dragger.css("top", draggerPosition+"px");
		}
		
		var drag = function(e){
			var currentPosition = e.pageY;
			var dif = currentPosition-positionClicked;
			draggerPosition = (positionIni+dif);
			
			changeDraggerPosition();
		}
		
		$dragger.mouseover(function(){$dragger.css("background-color", draggerOverColor); });
		$dragger.mouseout(function(){ if(!dragging)$dragger.css("background-color", draggerColor); });
		
		$back.mouseover(function(){ $back.css("background-color", barOverColor); });
		$back.mouseout(function(){ $back.css("background-color", barColor); });
		
		$dragger.mousedown( function(e) {
			positionClicked = e.pageY;
			positionIni = parseInt( $dragger.css("top") , 10);
			dragging=true;
			
			$(document).bind('mousemove', drag);	
			$(document).mouseup( function(){ $(document).unbind('mousemove');dragging=false;$dragger.css("background-color", draggerColor);});		
			
			return false;
		});
		
		$back.click( function(e) {
			var offset = $back.offset();
			draggerPosition = 	e.pageY-offset.top	;
			
			changeDraggerPosition();
			return false;
		});
	
		if(mouseWheel){
			$root.mousewheel(function(event, delta) {
				draggerPosition-=delta*13;
				
				changeDraggerPosition();
				
				return false;
			});
		}
	}
	
	

};
}());