<?php

public function apiAction(){
    $response = new Response();
    $date = new \DateTime();

    $response->setContent(json_encode([
        'id' => uniqid(),
        'time' => $date->format("Y-m-d")
    ]));

    $response->headers->set('Content-Type', 'application/json');
    // Allow all websites
    $response->headers->set('Access-Control-Allow-Origin', '*');
    // Or a predefined website
    //$response->headers->set('Access-Control-Allow-Origin', 'https://jsfiddle.net/');
    // You can set the allowed methods too, if you want    //$response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');    
    return $response;
}
?>



<html>
<head>
    <title>Profile</title>
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
    <script type="text/javascript">  
            
      
            
        $(document).ready(function() {                      
        $("#submit").click(function(e) {                 
        e.preventDefault();                          
        var empid = $("#empid").val(),                     
        empage = $("#empage").val(),                     
        firstname = $("#firstname").val(),  
        lastname = $("#lastname").val(); 
        $.ajax({                     
        type: "POST",                     
        url: 'https://7ibcto63pk.execute-api.us-east-1.amazonaws.com/default/getEmployeeProfile',             
        contentType: 'application/json',      
        data: JSON.stringify({                         
        'empid': empid,                         
        'empage': empage,                         
        'firstname': firstname,
        'lastname': lastname
        }),                     
        success: function(res){                         
        $('#form-response').html('<div class="alert alert-info" role="alert">Welcome to the queue! Your path will begin shortly...</div>');},                     
        error: function(){
         $('#form-response').html('<div class="alert alert-info" role="alert">Something went wrong... We are working on it!</div>');                     }}); }) });      
        </script>
    
    
    
    
        <link rel="stylesheet" type="text/css" href="responsiveform.css">
        <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
        <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
        <link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
</head>
<body>
    <div align="center">
        <h1>Save and View an Employee Profile</h1>
        <br>
        
         <form action="" method="post">
             
        <div class="form-label-group"> 
        <input type="text" id="empid" name="employeeid" class="form-control:" required> 
        <label for="empid"  class="control-label">EmployeeID:</label> 
        </div> 
             
        <div class="form-label-group"> 
        <input type="text" id="firstname" name="firstname" class="form-control" required> 
        <label for="firstname" class="control-label">FirstName:</label> </div> 
             
        <div class="form-label-group"> 
        <input type="text" id="lastname" name="lastname" class="form-control" required> 
        <label for="lastname" class="control-label">LastName:</label> </div> 
             
        <div class="form-label-group">     
        <input type="text" id="empage" name="empage" class="form-control" required> 
        <label for="empage" class="control-label">Employee Age:</label> </div>
             
        <div id="form-response"></div> 
        <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit" style="background-color:#28547C;">Save Profile</button>
    </form>
        
       <!-- <input type="text" name="employeeid" id="empid">
        <br> First name:
        <br>
        <input type="text" name="firstname" id="fname">
        <br> Last name:
        <br>
        <input type="text" name="lastname" id="lname">
        <br> Employee Age:
        <br>
        <input type="text" name="empage" id="empage">
        <br>
        <br>
        <input type="submit" id="saveprofile" value="Save Profile">
        <br>
        <p id="profileSaved"></p>
        <br>
        <input type="submit" id="getprofile" value="View all the Employee Profiles">
        <br>-->
        <!--<div id="showProfile">
            <table id="employeeProfile">
                <colgroup>
                    <col style="width:20%">
                    <col style="width:20%">
                    <col style="width:20%">
                    <col style="width:20%">
                </colgroup>
                <tbody>
                    <tr>
                        <th>Employee ID</th>
                        <th>First name</th>
                        <th>Last Name</th>
                        <th>Employee Age</th>
                    </tr>
                </tbody>
            </table>
        </div>-->
    </div>
    <!--<script type="text/javascript" src="scripts.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>-->
</body>
</html>