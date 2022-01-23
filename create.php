<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>register words</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
a{
    text-decoration: none;
    color: black;
    font-size: 30px;
    }
</style>

<body bgcolor="powderblue">
    <center>
    <table width="10%" cellspacing="20" border="2"  bg color ="powderblue">
<tr>
    <td><a href="index.php">Home</a></td><td></td>
      
  </tr>
  </table>
        <h1>inserting  new words in Database</h1>
        <?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{       
    $variable = $_POST['variable'];
    $kinyarwanda= $_POST['ikinyarwanda'];
        $english = $_POST['kiswahili'];
        $french= $_POST['frencais'];
        $swahili = $_POST['english'];
        

    $insert = mysqli_query($connect,"INSERT INTO `language`(`variable`,`ikinyarwanda`,`kiswahili`,`francais`,`english`) 
    VALUES ('$variable','$kinyarwanda','$english','$french','$swahili')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($connect); // Close connection
?>
  
        <form  method="post">
              
              
<table bgcolor="powderblue" width="50%" cellspacing="20" border="0">
               <tr> <td><label for="variable">Variable</label></td>
                <td><input type="text" name="variable" id="var"></td>
            </tr>
  
             <tr>
               <td> <label for="ikinyarwanda">iKinyarwanda</label></td>
                <td><input type="text" name="ikinyarwanda" id="kinya"></td>
            </tr>
  
  <tr>
               <td> <label for="francais">english</label></td>
               <td> <input type="text" name="english" id="eng"></td>
            </tr>
  
  <tr>              
                 <td><label for="english">french</label></td>
               <td> <input type="text" name="french" id="fre"></td>
                  </tr>
               <tr>
                 <td><label for="swahili">Swahili</label></td>
             <td>   <input type="text" name="swahili" id="swah"></td>
            </tr>
   
           <tr>              
        <td></td><td><input type="submit" name="submit" value="Submit"> </td></tr>
            </table>
        </form>
    </center>
</body>
  
</html>