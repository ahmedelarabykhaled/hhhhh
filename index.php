<html>
    <head>
        <link rel="stylesheet" href="boot1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="boot1/css/fontawesome-all.min.css"/>
        <link rel="stylesheet" href="boot1/css/index_style.css" />
    </head>
    
    <body>
  
<h1 class="w-25 m-auto pt-4" >Phone Book   <button id="bt" class="btn btn-warning" onclick="h_action()">HIDE</button></h1>

<form class="w-75 m-auto pt-2" id="fff" action="index.php" method="post" >
    
    
    <label class="my-3">Name : </label>
    <input class="form-control" name="name" />
    <label class="my-3">Phone Number : </label>
    <input class="form-control" name="phone" />
    <label class="my-3">E-mail : </label>
    <input class="form-control" name="mail" />
    <label class="my-3">Location : </label>
    <input class="form-control" name="loc" />
    <button name="add_btn" class="btn btn-warning mt-3 float-right" onclick="add_click()" type="submit">ADD</button>
    <div class="clearfix"></div>
        
</form> 
<div class="w-75 m-auto pt-3">
    <table class="table table-striped t">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>mail</th>
            <th>location</th>
            <th>options</th>
        </thead>
        <tbody>

            <?php 
    include 'return data.php';
            
if(isset($_POST['add_btn'])){ //check if form was submitted
  $input_name = $_POST['name']; //get input text
  $input_phone = $_POST['phone']; //get input text
  $input_loc = $_POST['loc']; //get input text
    $input_mail = $_POST['mail'];
    
if($input_name == "" | $input_phone == "" |$input_loc =="" |$input_mail =="")
{
    $message = "please enter all data";
    echo "<script>alert('$message');</script>";
}
    else
    {
        $q = "INSERT INTO friends(name,location,phone ,mail) VALUES ('$input_name','$input_loc','$input_phone' , '$input_mail')";
        $con = mysqli_query($connect,$q);
        
        $q = "SELECT * FROM friends ORDER BY id DESC LIMIT 1";
        $rows = mysqli_query($connect,$q);
    
        if($rows->num_rows > 0)
    {
            while($result = $rows->fetch_assoc()) 
            {
            echo "<tr><td>".$count."</td><td>".$result["name"]."</td><td>".$result["phone"]."</td><td>".$result["mail"]."</td><td>".$result["location"]."</td><td><a href='delete_row.php?val=".$result["id"]."'><button id='bt-".$count."' class=' btn btn-warning'>DELETE</button></a></td></tr>";
                $count ++;
            }
    }
        
        
        
        
        
        $input_name = ""; //get input text
  $input_phone = ""; //get input text
  $input_loc = ""; //get input text
    $input_mail = "";
    }
    
}

?>
            
            
        </tbody>
    </table>
</div>

 
<div id="footer">
    <p class=" d-inline-block">Powerd By : Ahmed Khled</p>
    <p class=" float-right d-inline-block">engahmedelarabykhaled2020@gmail.com</p>
</div>


        
        
        <script src="boot1/js/jquery-3.3.1.min.js"></script>
        <script src="boot1/js/popper.min.js"></script>
        <script src="boot1/js/bootstrap.min.js"></script>
        <script src="boot1/mine.js"></script>
    </body>
</html>