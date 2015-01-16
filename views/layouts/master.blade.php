<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Hawksmoor Construction Services Ltd">
	<meta name="author" content="Michael Norris">

	<!-- Application Title -->
	<title>Hawksmoor</title>

	<!-- Bootstrap CSS -->
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/vendor/font-awesome.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	@include('partials.nav.default')

	@yield('content')

	@include('partials.footer')

	<!-- Bootstrap JavaScript -->
	<script src="/js/vendor/jquery.js"></script>
	<script src="/js/vendor/bootstrap.js"></script>



	<script>
    	function setCookie(c_name,value,exdays) {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + exdays);
            var c_value=escape(value) + ((exdays==null) ? "" : ";expires="+exdate.toUTCString());
            document.cookie=c_name + "=" + c_value;
    	}
        function getCookie(c_name) {
            var c_value = document.cookie;
            var c_start = c_value.indexOf(" " + c_name + "=");
            if (c_start == -1) {
                c_start = c_value.indexOf(c_name + "=");
            }
            if (c_start == -1) {
                c_value = null;
            } else {
                c_start = c_value.indexOf("=", c_start) + 1;
                var c_end = c_value.indexOf(";", c_start);
                if (c_end == -1) {
                    c_end = c_value.length;
                }
            c_value = unescape(c_value.substring(c_start,c_end));
            }
            return c_value;
        }
        function delCookie(name) {
            document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }

        $(document).ready(function(){
            //Checks if the cookie already exists
            if (!getCookie('firsttime')){
                //Runs the code because the cookie doesn't exist and it's the user's first time
                $('nav').addClass('animated fadeInDown');
                //Set's the cookie to true so there is a value and the code shouldn't run again.
                setCookie('firsttime');
            }
        });



    	</script>
</body>
</html>
