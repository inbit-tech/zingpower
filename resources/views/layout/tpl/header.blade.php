<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108537002-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-108537002-1');
	</script>

	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
    <meta name="author" content="">

	@yield ('page-title')

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<!-- Google Fonts -->
	<link href="https://fonts.cat.net/css?family=Open+Sans" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('/css/master.css') }}" rel="stylesheet" />

	<!-- Custom CSS for individual page -->
	@yield ('custom-css')

	<!-- Start of Async Drift Code -->
	<script>
	!function() {
	  var t;
	  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
	  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
	  t.factory = function(e) {
	    return function() {
	      var n;
	      return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
	    };
	  }, t.methods.forEach(function(e) {
	    t[e] = t.factory(e);
	  }), t.load = function(t) {
	    var e, n, o, i;
	    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
	    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
	    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
	  });
	}();
	drift.SNIPPET_VERSION = '0.3.1';
	drift.load('xawpeg2wf5cm');
	</script>
	<!-- End of Async Drift Code -->
</head>
<body>