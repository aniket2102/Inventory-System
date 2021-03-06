 
<?php
	require_once("lib/class/functions.php");
	$db = new functions();
	if(!isset($_SESSION['current_admin']))
	{	
		header("Location:index.php");
	}
	$flag4	=	0;
	$flag5	=	0;
	$flag6	=	0;
	$flag7	=	0;
	$common_msg	="";
	$common_msg1="";
	
	 if(isset($_GET['printingstationary-id']))
	 {
		$printingstationary_id = $_GET['printingstationary-id'];		
		$_SESSION['printingstationary_id'] = $printingstationary_id;
	 }
	 else if(isset($_SESSION['printingstationary_id']))
	 {
		 $printingstationary_id = $_SESSION['printingstationary_id'];
	 }
 
	$selected_name_error	=	"";	
	$image_error			=	"";
	$flag					=	0;
	$flag1					=	0;
	$flag2					=	0;
	$flag3					=	0;
	
	 
	$printingstationary_data		=	array();
	$printingstationary_data		=	$db->fetch_printingstationary_full_details_by_id($printingstationary_id);
			
	
	$result_id					=	"";
	$result_g_no				=	"";
	$result_challan 			=	"";
	$result_bill         		=	"";
	$result_supplier			=	"";
	$result_description			=	"";
	$result_unit				=	"";
	$result_received 			=	"";
	$result_rejected	    	=	"";
	$result_accepted			=	"";
	$result_amount				=	"";
	$result_total	 			=	"";
	$result_date				=	"";
	$result_time				=	"";

	
	if(!empty($printingstationary_data))
	{	
		 
	$result_id					=	$printingstationary_data[0];
	$result_g_no				=	$printingstationary_data[1];
	$result_challan 			=	$printingstationary_data[2];
	$result_bill         		=	$printingstationary_data[3];
	$result_supplier			=	$printingstationary_data[4];
	$result_description			=	$printingstationary_data[5];
	$result_unit				=	$printingstationary_data[6];
	$result_received 			=	$printingstationary_data[7];
	$result_rejected	    	=	$printingstationary_data[8];
	$result_accepted			=	$printingstationary_data[9];
	$result_amount				=	$printingstationary_data[10];
	$result_total	 			=	$printingstationary_data[11];
	$result_date				=	$printingstationary_data[12];
	$result_time				=	$printingstationary_data[13];
			
	}
	if(isset($_POST['edit']))
	{
		$g_no			=	$_POST['g_no'];  
		$challan		=	$_POST['challan'];  
		$bill			=	$_POST['bill']; 
		$supplier		=	$_POST['supplier']; 
		$description	=	$_POST['description'];
		$unit			=	$_POST['unit'];		
		$received		=	$_POST['received'];
		$rejected		=	$_POST['rejected'];
		$accepted		=	$_POST['accepted'];
		$amount 		=	$_POST['amount'];
		$total			=	$_POST['total'];
			 
			if($db->update_printingstationary_full_details_by_id($g_no,$challan,$bill,$supplier,$description,$unit,$received,$rejected,$accepted,$amount,$total,$printingstationary_id))
			{
					  $common_msg	=	"Printing Stationary Records Updated Successfully.";
			}
			else
			{
					$common_msg1	= "Failed";
					 
			}
		
	}   
	
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <title> Admin | Edit Printing Stationary Details </title>

 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#" />
    <meta name="keywords" content="#" />
    <meta name="author" content="#" />

    <link rel="icon" href="http://html.codedthemes.com/gradient-able/files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="files/assets/pages/j-pro/css/demo.css">
    <link rel="stylesheet" type="text/css" href="files/assets/pages/j-pro/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/pages/j-pro/css/j-pro-modern.css">

    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">
	<!--Ck Editor -->
	<script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>    
	
</head>

<body>

    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
				<?php require_once('include/navigation.php'); ?>	
					
				<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
					<?php require_once('include/dashboard-left-part.php'); ?>
				
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Add Printing Stationary Details</h5>
                                            <p class="text-muted m-b-10">You can edit your Printing Stationary Details..</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="dashboard.php"> <i class="fa fa-home"></i> </a>
                                                </li> 
                                                <li class="breadcrumb-item"><a href="printingstationary-reports.php">Printing Stationary Reports</a>
                                                </li>
												<li class="breadcrumb-item"><a href="edit-printingstationary-details.php">Edit Printing Stationary</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Edit Printing Stationary</h5>
                                                        <span>Please fill the Printing Stationary details..</span>
                                                    </div>
													<div class="form-group row">
														<div class="col-md-12"> 
															<div class="common_msg" style="color:green;font-size:17px;margin-left: 340px;">
																<?php
																	echo $common_msg;
																?>
															</div>
														</div>
													</div> 
													<div class="form-group row">
														<div class="col-md-12"> 
															<div class="common_msg" style="color:red;font-size:17px;margin-left: 340px;">
																<?php
																	echo $common_msg1;
																?>
															</div>
														</div>
													</div> 
                                                      <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" >

                                                                <div class="j-content">

                                                                    <div class="j-row">
																		
																		<div class="j-unit">
																			<div class="j-input"> 
																				<input type="text" name="g_no" placeholder="Enter G.R.R No." required  value="<?php echo $result_g_no;?>"> 
																			</div>
																		</div>
																	
																		<div class="j-unit">
																			<div class="j-input">
																				<input type="text" name="challan" placeholder="Enter Challan No./Date" required  value="<?php echo $result_challan;?>">
																			</div>
																		</div>
																		 
																		
																		<div class="j-unit">
																			<div class="j-input">
																				<input type="text" name="bill" placeholder="Enter Bill No./Date" required  value="<?php echo $result_bill;?>">
																			</div>
																		</div>
																		
																		  
                                                                    </div>

																	<div class="j-row">
																		
																		 <div class="j-unit">
																			<div class="j-input">
																				<textarea spellcheck="false" name="supplier"  placeholder="Enter Name Of Supplier & Address" required ><?php echo $result_supplier;?></textarea>
																				<span class="j-tooltip j-tooltip-right-top">Enter Name Of Supplier & Address</span>
																			</div>
																		</div>
																		
																		 <div class="j-unit">
																			<div class="j-input">
																				<textarea name="description"  placeholder="Enter Description Of Material" required id="description"><?php echo $result_description;?></textarea>
																				<span class="j-tooltip j-tooltip-right-top">Enter Description Of Material</span>
																			</div>
																		</div>
																	  
																		<div class="j-span6 j-unit">
                                                                            <div class="j-input">
                                                                             
                                                                                <input type="text" name="unit" placeholder="Enter Unit" required  value="<?php echo $result_unit;?>">
																				<span class="j-tooltip j-tooltip-right-top">Enter Unit</span>
																			</div>
                                                                        </div>
                                                                        <div class="j-span6 j-unit">
                                                                            <div class="j-input">
                                                                                
                                                                                <input type="text" name="received" placeholder="Enter Quantity Received" required  value="<?php echo $result_received;?>">
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Quantity Received</span>
                                                                            </div>
                                                                        </div>
																	  
                                                                    </div>
																	  
																	<div class="j-row"> 													  
																		
																		<div class="j-span6 j-unit">
                                                                            <div class="j-input">
                                                                                 
                                                                                <input type="text" name="rejected" placeholder="Enter Quantity Rejected" required  value="<?php echo $result_rejected;?>">
																				<span class="j-tooltip j-tooltip-right-top">Enter Quantity Rejected</span>
																			</div>
                                                                        </div>
                                                                        <div class="j-span6 j-unit">
                                                                            <div class="j-input">
                                                                                 
                                                                                <input type="text" name="accepted" placeholder="Enter Quantity Accepted" required  value="<?php echo $result_accepted;?>">
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Quantity Received</span>
                                                                            </div>
                                                                        </div>
																		 
                                                                    </div>
																	
																	<div class="j-row"> 													  
																		
																		<div class="j-span6 j-unit">
                                                                            <div class="j-input">
                                                                                 
                                                                                <input type="text" name="amount" placeholder="Enter amount" required  value="<?php echo $result_amount;?>">
																				<span class="j-tooltip j-tooltip-right-top">Enter Amount</span>
																			</div>
                                                                        </div>
                                                                        <div class="j-span6 j-unit">
                                                                            <div class="j-input">
                                                                                 
                                                                                <input type="text" name="total" placeholder="Enter Total" required  value="<?php echo $result_total;?>">
                                                                                <span class="j-tooltip j-tooltip-right-top">Enter Total</span>
                                                                            </div>
                                                                        </div>
																		 
                                                                    </div>
													
																	<div class="j-response"></div>

                                                                </div>

                                                                <div class="j-footer"> 
																	<input type="submit" value="Update" name="edit" class="btn btn-primary" />		
																	<a href="printingstationary-reports.php" class="btn btn-primary">Back</a>
                                                                </div>

                                                            </form>
                                                        </div> 
                                                    </div> 
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
			</div>
            </div>
        </div>
    </div>
  
    <script src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script src="files/assets/pages/j-pro/js/jquery.ui.min.js"></script>
    <script src="files/assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
    <script src="files/assets/pages/j-pro/js/jquery.j-pro.js"></script>

    <script src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script src="files/bower_components/modernizr/js/modernizr.js"></script>
    <script src="files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!--<script src="files/assets/pages/j-pro/js/custom/form-job.js"></script> -->
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/navbar-image/vertical-layout.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="files/assets/js/script.js"></script>
	
	<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'decription' ); 
	</script> 
	
</body>
</html>