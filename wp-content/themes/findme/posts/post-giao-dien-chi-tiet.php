<?php

/*

 Template Name: Giao diện chi tiết

*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html, body {    
        height: 100vh;
        width: 100vw;
    }
    .template-detail {
        position: relative;
        margin: 0 auto;
        width: 100%;
        height: 100%;
    }

    .template-detail iframe {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        -webkit-transition: all ease 0.3s;
        -moz-transition: all ease 0.3s;
        -o-transition: all ease 0.3s;
        transition: all ease 0.3s;
        -webkit-box-shadow: 0 -50px 0 0 #000000;
        box-shadow: 0 -50px 0 0 #000000;
        border: 0;
    }

</style>
</head>
<body>
<section class="template-detail">
    <div class='template-detail__switcher'>

    </div>
    <div class='template-detail__iframe'>

    </div>
</section>
<?php 
		$theme_url = get_template_directory_uri();  
	?>
<script>
    const iframeContainer = document.querySelector('.template-detail__iframe');
    const themeUrl = '<?=$theme_url?>';
    const index = parseInt(window.location.search.split('=').slice(-1)[0]) || 0;
    
    fetch(`${themeUrl}/data.json`)
		.then(response => response.json())
		.then(data => {
            const item = data[index];
            const iframeHTML = `<iframe src=${item.url} title=${item.name}></iframe>`;
            iframeContainer.innerHTML = iframeHTML;
		});
</script>

</body>
</html>