<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style media="screen">
      .flight{
        border: solid 1px black;
        height: 100px;
        width: 40%;
        margin: 200px 400px;
      }
      .place{
        margin: 20px 150px 5px 150px;
      }
      .time{
        margin: 20px 150px 5px 150px;
      }
      img{
        height: 30px;
      }
    </style>
  </head>

  <body>
    <?php
    if(isset($_POST['submit']))
    {
      $source=$_POST['src'];
      $dest=$_POST['dest'];
      $std=$_POST['std'];
      $sta=$_POST['sta'];

    }
     ?>
    <div class="flight">
     <div class="place">
       <table>
         <tr>
           <td><?php echo $source."----------------"?></td>
           <td><img src="https://image.shutterstock.com/image-vector/plane-icon-vector-flight-symbol-600w-761453431.jpg" alt=""><?php echo "------------"; ?></td>
           <td><?php echo $dest; ?></td>
         </tr>
         <tr>
           <td><?php echo $std; ?></td>
           <td><?php echo date("h:i"); ?></td>
           <td><?php echo $sta; ?></td>
         </tr>
       </table>

     </div>
     <div class="time">


     </div>
    </div>
  </body>
</html>
