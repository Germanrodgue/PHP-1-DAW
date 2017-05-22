<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<link rel="stylesheet" href="style.css" type="text/css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
  <script type="text/javascript" src="includes/users.js"></script>
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
  </head>
<body>