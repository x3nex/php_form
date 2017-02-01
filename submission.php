  
<html>
<head>
  <meta charset="UTF-8">
  <title>Form submit</title>

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css">

</head>
<body>


<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th><abbr title="name">Name</abbr></th>      
        <th><abbr title="userName">User Name</abbr></th>
        <th><abbr title="eMail">E-Mail</abbr></th>
        <th><abbr title="country">Country</abbr></th>
        <th><abbr title="gender">Gender</abbr></th>
        <th><abbr title="terms">Terms</abbr></th>
        
      </tr>
      <tr>
         <td><?= $_POST['name'] ?></td>
         <td><?= $_POST['userName'] ?></td>
         <td><?= $_POST['eMail'] ?></td>
         <td><?= $_POST['country'] ?></td>
         <td><?= $_POST['gender'] ?></td>
         <td><?= $_POST['terms'] ?></td>
      </tr>
    </thead>
  </div>


</body>
</html>