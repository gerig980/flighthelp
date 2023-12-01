<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h2 class="site-header__title" data-lead-id="site-header-title" style="font-size: 4.3rem;">Faleminderit!</h2>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Kërkesa juaj u krye me sukses! Do njoftoheni nga ne në zgjidhje te kërkesës tuaj</p>
        <p>Kjo faqe do ju rikthejë përsëri pas <span id="timer"></span>s.</p>
	</div>

	<script type="text/javascript">
        var count = 7; // The delay in seconds before redirecting.
        var redirect = window.location.href; // The redirection's landing page.
        
        function countDown() {
            if(count >= 0){
                document.getElementById("timer").innerHTML = count--;
                setTimeout("countDown()", 1000);
            }else{
				if(redirect == 'https://skyrights.al'){
                window.location.href = 'https://skyrights.al';
				}else{
					window.location.href = 'https://sky-rights.com';
				}
            }
        }
        countDown();
    </script>
</body>
</html>