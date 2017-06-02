<!DOCTYPE HTML>
<!--
  Arcana by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
  <!-- Logo -->
  
    <title>Alta de fotografias</title>
    <link rel="stylesheet" href="view/css/style.css" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="view/template/js/jquery.min.js"></script>
    <script src="view/template/js/jquery.dropotron.min.js"></script>
    <script src="view/template/js/skel.min.js"></script>
    <script src="view/template/js/skel-layers.min.js"></script>
    <script src="view/template/js/init.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
  <script type="text/javascript" src="module/photos/model/users.js"></script>
    <script type="text/javascript">

  $(function() {
    $('#demo1').datepicker({
      minDate: new Date(1900,1-1,1), maxDate: '-18Y',
      dateFormat: 'dd/mm/yy',
      defaultDate: new Date(1970,1-1,1),
      changeMonth: true,
      changeYear: true,
      yearRange: '-90:-18'
      
    });
    
  });
  </script>

      <link rel="stylesheet" href="view/template/css/skel.css" />
      <link rel="stylesheet" href="view/template/css/style.css" />
      <link rel="stylesheet" href="view/template/css/style-wide.css" />
    
       <script type="text/javascript">

        $('#upload').on('click', function() {
            var file_data = $('#sortpicture').prop('files')[0];   
            var form_data = new FormData();                  
            form_data.append('file', file_data);
            alert(form_data);                             
            $.ajax({
                        url: 'module/view/include/upload.php', // point to server-side PHP script 
                        dataType: 'text',  // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,                         
                        type: 'post',
                        success: function(php_script_response){
                            alert(php_script_response); // display response from the PHP script, if any
                        }
             });
        });
   </script>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>
  <body>