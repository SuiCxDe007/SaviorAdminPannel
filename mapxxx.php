<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
      if(isset($_POST['title'])){
$path = "C:/xampp/htdocs/firebase/notifications/notification.php";
        require_once "$path";
        $notification = new Notification();

        $title = $_POST['title'];
        $message = isset($_POST['message'])?$_POST['message']:'';
        $imageUrl = isset($_POST['image_url'])?$_POST['image_url']:'';
        $action = isset($_POST['action'])?$_POST['action']:'';
        
        $actionDestination = isset($_POST['action_destination'])?$_POST['action_destination']:'';

        if($actionDestination ==''){
          $action = '';
        }
        $notification->setTitle($title);
        $notification->setMessage($message);
        $notification->setImage($imageUrl);
        $notification->setAction($action);
        $notification->setActionDestination($actionDestination);
        
        $firebase_token = $_POST['firebase_token'];
        $firebase_api = $_POST['firebase_api'];
        
        $topic = $_POST['topic'];
        
        $requestData = $notification->getNotificatin();
        
        if($_POST['send_to']=='topic'){
          $fields = array(
            'to' => '/topics/' . $topic,
            'data' => $requestData,
          );
          
        }else{
          
          $fields = array(
            'to' => $firebase_token,
            'data' => $requestData,
          );
        }


        // Set POST variables
        $url = 'https://fcm.googleapis.com/fcm/send';

        $headers = array(
          'Authorization: key=' . $firebase_api,
          'Content-Type: application/json'
        );
        
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Disabling SSL Certificate support temporarily
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);
        if($result === FALSE){
          die('Curl failed: ' . curl_error($ch));
        }

        // Close connection
        curl_close($ch);

      }
      ?>





    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Savior Admin Dashboard</title>
  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>Admin</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                
                  
               
                                 
                <li><a href="javascript:void(0)" onclick="location.href='Dashboard.html';"><i class="fa fa-home" ></i> Dashboard <span class="label label-success pull-right"></span></a></li>
                  <li><a href="javascript:void(0)" onclick="location.href='maps.html';"><i class="fa fa-map-marker"></i> Mapping Panel <span class="label label-success pull-right"></span></a></li>
                  <li><a href="javascript:void(0)"onclick="location.href='mapxxx.php';"><i class="fa  fa-envelope"></i> Broadcast Messege </a></li>
                  <li><a href="javascript:void(0)"onclick="location.href='ZoneInfo.html';"><i class="fa fa-bar-chart"></i> Zone Info<span class="label label-success pull-right">Realtime</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
        
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

            
             

          
                 
               
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
             
              </div>

         
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Braodcast Notification</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     



                         
           
                        
                  
                        
                      
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-6">
                             
                                <hr />
                                <form action="" method="post">
                                  <div class="form-group">
                                    <label for="send_to">Send To:</label>
                                    <select name="send_to" id="send_to" class="form-control">
                                      <option value="sngle">Single Device</option>
                                      <option value="topic">Topic</option>
                                    </select>
                                  </div>
                      
                                  <div class="form-group">
                                    <label for="firebase_api">Firebase Server API Key:</label>
                                    <input type="text" required="" class="form-control" id="firebase_api" placeholder="Enter Firebase Server API Key" name="firebase_api" value="AAAA_PUXucs:APA91bERuGkNlpRS7ZTKekOuiBDvlR7k7vNG7vaQPTeN0U56GZtXOyhGS9h3Rj_y7toi8q7JaxDTpsWOKmigSM1DTE5MNlCbNtRsjMa52UtWHgRrzpHgsy4ITo1XMNJEjPfpReTy4Oft">
                                  </div>
                                  <div class="form-group" id="firebase_token_group">
                                    <label for="firebase_token">Firebase Token:</label>
                                    <input type="text" required="" class="form-control" id="firebase_token" placeholder="Enter Firebase Token" name="firebase_token" value="global">
                                  </div>
                                  <div class="form-group" style="display: none" id="topic_group">
                                    <label for="topic">Topic Name:</label>
                                    <input type="text" class="form-control" id="topic" placeholder="Enter Topic Name" name="topic" value="global">
                                  </div>
                                  <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" required="" class="form-control" id="title" placeholder="Enter Notification Title" name="title">
                                  </div>
                                  <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea required="" class="form-control" rows="5" id="message" placeholder="Enter Notification Message" name="message"></textarea>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox"id="include_image" name="include_image">Include Image</label>
                                  </div>
                                  <div class="form-group" style="display: none" id="image_url_group">
                                    <label for="image_url">Image URL:</label>
                                    <input type="url" class="form-control" id="image_url" placeholder="Enter Image URL" name="image_url">
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" id="include_action" name="include_action">Include Action</label>
                                  </div>
                                  <div class="form-group" style="display: none" id="action_group">
                                    <label for="action">Action:</label>
                                    <select name="action" id="action" class="form-control">
                                      <option value="url">Open URL</option>
                                      <option value="activity">Open Activity</option>
                                    </select>
                                  </div>
                                  <div class="form-group" style="display: none" id="action_destination_group">
                                    <label for="action_destination">Destination:</label>
                                    <input type="text" class="form-control" id="action_destination" placeholder="Enter Destination URL or Activity name" name="action_destination">
                                  </div>
                      
                                  <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                              
                              </div>
                              <div class="col-lg-6">
                             
                        
                              </div>
                            </div>
                          </div>
                          
                          <script>
                            $('#include_image').change(function(e){
                                if($(this).prop("checked")==true){
                                  $('#image_url_group').show();
                                  $("#image_url").prop('required',true);
                                }else{
                                  $('#image_url_group').hide();
                                  $("#image_url").prop('required',false);
                                
                                
                                }
                              });
                            $('#include_action').change(function(e){
                                if($(this).prop("checked")==true){
                                  $('#action_group').show();
                                  $('#action_destination_group').show();
                                  $("#action_destination").prop('required',true);
                                }else{
                                  $('#action_group').hide();
                                  $('#action_destination_group').hide();
                                  $("#action_destination").prop('required',false);
                                
                                
                                }
                              });
                              
                            $('#send_to').change(function(e){
                                var selectedVal = $("#send_to option:selected").val();
                                if(selectedVal=='topic'){
                                  $('#topic_group').show();
                                  $("#topic").prop('required',true);
                                  $('#firebase_token_group').hide();
                                  $("#firebase_token").prop('required',false);
                                }else{
                                  $('#topic_group').hide();
                                  $("#topic").prop('required',false);
                                  $('#firebase_token_group').show();
                                  $("#firebase_token").prop('required',true);
                                }
                              });
                          </script>
                   








                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

  
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
