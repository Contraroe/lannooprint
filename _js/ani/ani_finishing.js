//   $(document).ready(function(e) {
// 	var angles = [90, 45, 315, 270, 225, 135];
// 	var unit = 40;
// 	var animate = function(){
// 		$.each($('#nofix'), function(idx, val){
// 			var rad = angles[idx] * (Math.PI / 180);
// 			$(val).css({
// 				right: 0 + Math.cos(rad) * unit + 'px',
// 				top: unit * (1 - Math.sin(rad))  + 'px'
// 			});
// 			angles[idx]--;
// 		});
// 	}
// 	var timer = setInterval(animate, 30);
// });