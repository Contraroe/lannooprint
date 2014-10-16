$(document).ready(function(e) {
			var angles = [90, 45, 315, 270, 225, 135];
			var unit = 20;
			var animate = function(){
				$.each($('#nofix'), function(idx, val){
					var rad = angles[idx] * (Math.PI / 100);
					$(val).css({
						top: unit * (1 - Math.sin(rad))  + 'px'
					});
					angles[idx]--;
				});
			}
			var timer = setInterval(animate, 30);
		});