<html>
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
<table width="50%" cellspacing="40" border="0">
<tr>
    <td><a href="index.php">Home</a></td>
    <td><a href="create.php">Insert new word</a> </td>
</td>
      
  </tr>
  </table>
<p>
    </div>
        <div class="card" align="center" >
    
        <h2 class="title">
            translate
        </h2>
        

        <hr class="line">
        <div class="content">
            <form method="post">

            <!-- <label class="label_class">choose word</label>
            <select name="word">
                <option>word</option>
            </select>
            <label for=""></label> -->
            <table border="0">
                
                <tr>
                    <td>
                        <h3 class="label__class">Word: </h3>
                    </td>
                    <td>
                        <h3>
                            <select name="word" class="label__class">
                            <option value="0">Word</option>
                            <?php
                            require_once "connect.php";
                            $result=[" "];
                            $query_select_words=$connect->query("SELECT id,variable FROM language");
                            while($row_words=$query_select_words->fetch_array())
                            {
                                $var_id = $row_words['id'];
                                $var_word = $row_words['variable'];
                                ?>
                                <option value="<?=$var_id;?>"><?=$var_word;?></option>
                                
                                <?php

                            }
                            
                            ?>
                        </select></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                    <h3 class="label__class">Language: </h3>

                    </td>
                    <td>
                        <h3><select name="language" class="label__class">
                            <option value="0">Languages</option>
                            <option value="1">ikinyarwanda</option>
                            <option value="2">kiswahili</option>
                            <option value="3">francais</option>
                            <option value="4">english</option>
                        </select></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" name="translate">translate</button>
                    </td>
                </tr>
                <?php
                if(isset($_POST['translate']))
                {
                    $language=$_POST['language'];
                    $word= $_POST['word'];
                    if(($word == 0) || ($language == 0))
                    {
                        $result[0]="choose valid word and valid language";
                    }
             
                    $query= "SELECT * FROM language WHERE id= '$word'";
                    $connect_query=$connect->query($query);
                    $data = $connect_query->fetch_array();

                    if($language == 1)
                    {
                            $result[0] = $data['ikinyarwanda'];
                    }
                    elseif($language == 2)
                    {
                        $result[0]=$data['kiswahili'];
                    }
                    elseif($language == 3)
                    {
                        $result[0]=$data['francais'];
                    }
                    elseif($language == 4)
                    {
                     
                        $result[0] = $data['english'];
                    }
                    else{
                        $result[0] = "translation not found";
                    }
                }
                ?>
                <tr>



                   <td colspan="2">
                  
                       <h3 class="label__class">Translation:<?=$result[0];?></h3>
                
                   </td>
                </tr>
               
     
            </table>

            </form>
        </div>
        </div>
    </body>
</html>