<?php 
	sleep( 3 ); 
	header("Content-Type: application/javascript");
?>
loadjs=function(){function n(n,r){n=n.push?n:[n];var e,o,t,i,u=[],a=n.length,l=a;for(e=function(n,e){e.length&&u.push(n),l-=1,0===l&&r(u)};a--;)o=n[a],t=f[o],t?e(o,t):(i=c[o]=c[o]||[],i.push(e))}function r(n,r){if(n){var e=c[n];if(f[n]=r,e)for(;e.length;)e[0](n,r),e.splice(0,1)}}function e(n,r){var e=document,o=e.createElement("script");o.src=n,o.onload=o.onerror=function(e){var t=o.parentNode;t&&t.removeChild(o),o=null,r(n,e.type)},e.head.appendChild(o)}function o(n,r){n=n.push?n:[n];var o,t=n.length,i=t,u=[];for(o=function(n,e){"error"===e&&u.push(n),i-=1,0===i&&r(u)};t--;)e(n[t],o)}function t(n,e,t,f){var c,a,l;if(e&&!e.call&&(c=e),a=c?t:e,l=c?f:t,c){if(c in u)throw new Error("LoadJS: Bundle already defined");u[c]=!0}o(n,function(n){n.length?(l||i)(n):(a||i)(),r(c,n)})}var i=function(){},u={},f={},c={};return t.ready=function(r,e,o){return n(r,function(n){n.length?(o||i)(n):(e||i)()}),t},t.done=function(n){r(n,[])},t}();


(function( win ) {
	console.log( "Ad Script Loaded" );

	win.loadjs( "thirdparty/deps/ad-dep.php" );
	win.loadjs( "thirdparty/deps/ad-dep2.php" );
	win.loadjs( "thirdparty/deps/ad-dep3.php" );

	win.document.onreadystatechange = function() {
		if ( document.readyState === 'complete' ) {
			console.log( "Document Ready");
		}
	};
}( this ));
