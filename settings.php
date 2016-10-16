<?php
    session_start();
    if($_SESSION['logged_in']==false){
        header("Location: login.php");
        die();
    }
?>

<html>

	<head>

		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">

    	<title>Webcademy - Settings</title>

    	<link href="css/sweetalert.css" rel="stylesheet">
        <script src="js/sweetalert.min.js"></script>

    	<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.css" rel="stylesheet">

	</head>

	<body>

		<div class="container">
 
				<div class="row head1">
					<h3><b><u>Modify your details</u></b></h3>
				</div>

				<div class="row head1">
					<h5><i>In order to modify your details, insert new values in the desired textboxes and press 'Change'. Leave the textboxes empty for the properties you do not want to change.</i></h5>
				</div>
				<br>
        		<div class="row">
            		<div class="form-group">
                		<label for="code">First Name</label>
                		<input id="fname" type="text" class="form-control input-lg">
            		</div>
        		</div>
        		<br>
        		<div class="row">
            		<div class="form-group">
                		<label for="code">Last Name</label>
                		<input id="lname" type="text" class="form-control input-lg">
            		</div>
        		</div>
        		<br>
        		<div class="row">
            		<div class="form-group">
                		<label for="code">Password</label>
                		<input id="password" type="text" class="form-control input-lg">
            		</div>
        		</div>
        		<br><br>
        		<div class="row row1">
            		<button onclick="modify(document.getElementById('fname').value, document.getElementById('lname').value, document.getElementById('password').value)" class="btn btn-default"><b>Change</b></button>
        		</div>

        		<style rel="stylesheet" type="text/css">
        			.btn{
        				background-color: #fed136;
        				border-color: #fed136;
        				margin: auto;
        				width: 18%;
        				height: 8%;
        				font-size: medium;
        				border-radius: 6px;
        			}
        			.btn:hover{
        				-webkit-box-shadow: 1px 1px 1px 0px rgba(0,0,0,1);
						-moz-box-shadow: 1px 1px 1px 0px rgba(0,0,0,1);
						box-shadow: 1px 1px 1px 0px rgba(0,0,0,1);
        				background-color: #fed136;
        				border-color: #fed136;
        			}
        			.row1{
        				text-align: center;
        			} 
        			.head1{
        				text-align: center;
        			}
        		</style>

        		<script src="course-assets/js/jquery.js"></script>

        		<script type="text/javascript">
        			function modify(fname, lname, password){
        				 $.ajax({
               				type: 'POST',
                			url: 'php/change.php',
                			data: {fname:fname, lname:lname, password:password},
                			success: function(data){
                    		if(data!="OK")
                    		{
                        		swal({   
                            		title: "Error!",   
                            		text: data,
                            		type: "error",   
                            		confirmButtonText: "Ok" 
                        		});
                    		}
                    		else
                    		{     
                        		swal({   
                            		title: "Success!",   
                            		text: "Your details have been saved successfully!",
                            		type: "success",   
                            		confirmButtonText: "Ok" 
                        		});

                        		document.getElementById("fname").value="";
                        		document.getElementById("lname").value="";
                        		document.getElementById("password").value="";
                    		}
               			}
            		});
        		}
        		</script>

		</div>

	</body>

</html>