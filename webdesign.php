"<html>
    <head >
    <link rel="icon" href="images/happy.jpg">
        <div class ="head">
    </title ><center><marquee><centers> TRANSIRATION LANGUAGES</center></marquee></title>
</div>
      <style ="text/css">
          . head{
        width: 50%;
        height :90%;
        text-align:center;
        margin:0;
        font-size:5%;
        font-weight:bold;
        border-radius:20PX


    } 
    .body{
        width:40%;
        height :60%;
        left :40%;
        top:20%;
        position: absolute;
        border-radius:20px
    }
    .post{
    /* background-color:rgb(141, 176, 223); */
    width:40%;
        height :60%;
        left :40%;
        top:20%;
        position: absolute;
        /* border-radius:20px */
    
}
.image{
    margin-top:2%;
    width:100%;
    height:100%;
}
       </style>
    </head>
    <body bgcolor ="powderblue" >
    <div> 
    <card.grid="2"><img src="images/happy.jpg" class="image"></card>
</div >
<div class="menus"><ul>
        <a href="webdesign.php" style="position: absolute;left: 10px;top: 8%;text-decoration: none;color: black;">HOME</a>
    </ul><ul><a href="webdesign.php" style="position: absolute;left: 600px;top: 8%;text-decoration: none; color: black;"> ABOUT US</a>
    </ul><ul><a href="webdesign.php"style="position: absolute;left: 1200px;top: 8%;text-decoration: none;color:black">CONTACT</a></ul>
        </div>
        <center>
        <form method="POST" class="post">

        <table border="2" bgcolor="powderblue">
            <tr bgcolor="lightgray"width="100" height="100" ><td>
                <input type="submit" name="ikinyarw"  value="kinyarwanda">
                <input type="submit" name="kiswhl"  value="kiswahili">
                <input type="submit" name="french"  value="francais">
                <input type="submit" name="anglais"  value="English"></td>
                </tr>
                <tr>
                    <td>
                        kugenda
                       <center><h1> <?php
                        include("connection.php");
                        if (isset($_POST['ikinyarw'])) {
                            $query = 'SELECT ikinyarwanda FROM db_table';
                            $data = mysqli_query($conn, $query) ;
            
                            if (!$data) {
                                echo("Error description:" . mysqli_error($mysqli));
                            } else {
            
                                while ($row = mysqli_fetch_array($data)) {
                                    echo  $row['ikinyarwanda'];
                                 }
                             }
                            }
                             elseif (isset($_POST['kiswhl'])) {
                                $query = 'SELECT kiswahili FROM db_table';
                                $data = mysqli_query($conn, $query) ;
                
                                if (!$data) {
                                    echo("Error description:" . mysqli_error($mysqli));
                                } else {
                
                                    while ($row = mysqli_fetch_array($data)) {
                                        echo  $row['kiswahili'];
                                     }
                                 }
                                }
                                if (isset($_POST['french'])) {
                                    $query = 'SELECT francais FROM db_table';
                                    $data = mysqli_query($conn, $query) ;
                    
                                    if (!$data) {
                                        echo("Error description:" . mysqli_error($mysqli));
                                    } else {
                    
                                        while ($row = mysqli_fetch_array($data)) {
                                            echo  $row['francais'];
                                         }
                                     }
                                    }
                                    if (isset($_POST['anglais'])) {
                                        $query = 'SELECT english FROM db_table';
                                        $data = mysqli_query($conn, $query) ;
                        
                                        if (!$data) {
                                            echo("Error description:" . mysqli_error($mysqli));
                                        } else {
                        
                                            while ($row = mysqli_fetch_array($data)) {
                                                echo  $row['english'];
                                             }
                                         }
                                        }
                        
                        ?></h1></center>

                    </td>
                </tr>
                </table>
                                </form></center>
                                    </div>
                                    <nav>
            <div class="contact"><section>
                <h1>  <Location> NYARUGENGE/KIGALI/RWANDA</h1>
            <footer style="background-color:powderblued ; height:80%;width:100%;">
                <br><img src="images/phone.png" >phone number : 0789331230/ 0729787034</br>
                <br><img src="images/whatsap.png" >whatapp : 0789331230</br>
                <br><img src="images/email.png" >e-mail: yvonnemahoro2018@gmail.com</br>

                </div>
                </footer>
            </section>

s
    </body>
</html>
