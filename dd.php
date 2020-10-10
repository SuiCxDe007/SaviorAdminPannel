<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
  
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <!-- jquery Alertbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
   

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block"  >
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li >
                            <a href="index.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     
                        </li>
                        <li>
                            <a href="maps.html">
                                <i class="fas fa-map"></i>Mapping Pannel</a>
                        </li>
                        <li class="active has-sub">
                            <a href="#">
                                <i class="fas fa-bullhorn"></i>Broadcast</a>
                        </li>
               
                 
                        
                        <li >
                            <a href="safezoneinfo.html">
                                <i class="fas fa-area-chart"></i>Zone Information</a>
                        </li>
                        
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">

                                    </div>
                                    <div class="noti__item js-item-menu">                                           
                                    </div>
                                    <div class="noti__item js-item-menu">
                                       
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#" id="email"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                           
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="#" onclick="logout();">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                      <div class="col-md-14">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Safe Zone Overview
                                    <small>
                                        <span class="badge badge-success float-right mt-1">Realtime</span>
                                    </small>
                                </strong>
                            </div>
                            <div class="card-body"></div>
                          
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2>Broadcast Emergency Notification </h2>
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
                                                <input type="text" class="form-control" id="topic" placeholder="Enter Topic Name" name="topic">
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
                                        <?php
                                        if(isset($_POST['title'])){
                            $path = "D:/xampp/htdocs/firebase/notifications/notification.php";
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
                                            
                                            echo '<h2>Result</h2><hr/><h3>Request </h3><p><pre>';
                                            echo json_encode($fields,JSON_PRETTY_PRINT);
                                            echo '</pre></p><h3>Response </h3><p><pre>';
                                            echo $result;
                                            echo '</pre></p>';
                                        }
                                        ?>
                        
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
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script>
        function logout(){

firebase.auth().signOut().then(function() {
console.log('Signed Out');
}, function(error) {
console.error('Sign Out Error', error);
});
window.location.replace("login.html");

}
        // Your web app's Firebase configuration
        var config = {
      apiKey: "AIzaSyB2AnFBo6Noz4_pR5GzT9J5r6k3Ym5_xc0",
      authDomain: "thesavior-c6347.firebaseapp.com",
      databaseURL: "https://thesavior-c6347.firebaseio.com",
      projectId: "thesavior-c6347",
      storageBucket: "thesavior-c6347.appspot.com",
      messagingSenderId: "1086443731403",
      appId: "1:1086443731403:web:918b92cee530c906"
    };
    firebase.initializeApp(config);
    const db = firebase.firestore();
    db.settings({ timestampsInSnapshots: true });






var datax = [];
var namex = [];
var leftx = [];

    function dead() {


      db.collection('Safe Zones').onSnapshot(snapshot => {
        yourCountera = 0;
        let changesx = snapshot.docChanges();
        var content = '';
        changesx.forEach(changex => {

          yourCountera++;
          content += '<tr>';
          var datex = changex.doc.data().timestamp.toDate().toString();
          var xx = datex.substring(0, datex.indexOf("G"));
          content += '<td>' + yourCountera + '</td>';
          content += '<td>' + changex.doc.data().name + '</td>';
          content += '<td>' + changex.doc.data().safestatus + '</td>';
          content += '<td>' + changex.doc.data().totalnumber + '</td>';
          content += '<td>' + changex.doc.data().left + '</td>';
          content += '<td>' + xx + '</td>';
          content += '</tr>';
          var x = parseInt(changex.doc.data().totalnumber);
          datax.push(x);
          namex.push(changex.doc.data().name);
          leftx.push(changex.doc.data().left);
        });
        console.log(datax);
        $('#jhin').append(content);
        chartx();

      });





    }

    dead();
   
   // console.log(datax);

   function chartx(){

var ctx = document.getElementById("myChartx").getContext("2d");

var data = {
labels:namex,
datasets: [
    {
        label: "Total #",
        backgroundColor: [
        'rgba(153, 102, 255, 0.2)', 
        'rgba(153, 102, 255, 0.2)', 
        'rgba(153, 102, 255, 0.2)', 
        'rgba(153, 102, 255, 0.2)', 
        'rgba(153, 102, 255, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(153, 102, 255, 0.2)', 
        'rgba(153, 102, 255, 0.2)', 
        'rgba(153, 102, 255, 0.2)', 
        'rgba(153, 102, 255, 0.2)', 
        'rgba(153, 102, 255, 0.2)',
        'rgba(153, 102, 255, 0.2)'
        ],
     
      
        data: datax,
        borderWidth: 3
    },
    {
        label: "# Left",
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(75, 192, 192, 0.2)'

         
         
          
         
         
        ],
        data: leftx,
        borderWidth: 3
    }
  
]
};

var myBarChart = new Chart(ctx, {
type: 'bar',
data: data,
options: {
  responsive: false,
    maintainAspectRatio: false,
 
  title: {
						display: true,
						text: 'Total Number / Amount Left'
					},
    barValueSpacing: 10,
    scales: {
        yAxes: [{
            ticks: {
                min: 0,
            }
        }]
    }
}
});



}



male = [];
female= [];
names=[];
infants=[];

    function deadx() {


db.collection('Safe Zones').onSnapshot(snapshot => {
 
  let changesx = snapshot.docChanges();
 
  changesx.forEach(changex => {


    male.push(changex.doc.data().male);
    female.push(changex.doc.data().female);
    names.push(changex.doc.data().name);
    infants.push(changex.doc.data().pregorinf);
  });


 // yyy();
charty();
});





}



    deadx();



function charty(){

    var ctx = document.getElementById("myCharty").getContext("2d");

var data = {
    labels:names,
    datasets: [
        {
            label: "Male",
            backgroundColor: [
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(54, 162, 235, 0.2)'
            ],
         
          
            data: male,
            borderWidth: 3
        },
        {
            label: "Female",
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',             
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',             
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.2)'
            ],
            data: female,
            borderWidth: 3
        },  {
            label: "Infants",
            backgroundColor: [
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            ],
         
          
            data: infants,
            borderWidth: 3
        }
      
    ]
};

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {  responsive: false,
    maintainAspectRatio: false,
      title: {
						display: true,
						text: 'Male / Female / Infants'
					},
        barValueSpacing: 10,
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }]
        }
    }
});


}


    firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    var email = user.email;
    document.getElementById("email").innerHTML = email;
    // ...
  } else {
   console.log("no yuser");
   window.location.replace("login.html");
  }
});


function getTotalRegugees() {

  var totalRef = 0;
db.collection("Safe Zones").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
  

        totalRef += parseInt(doc.data().totalnumber);
    });
    document.getElementById("reg").innerHTML =totalRef;
});

  }

  
  function getTotalOnCall() {

var totalOnCall = 0;
db.collection("Safe Zones").get().then(function(querySnapshot) {
  querySnapshot.forEach(function(doc) {

var oncallstatus= doc.data().safestatus;
if(oncallstatus=="On Call"){
 totalOnCall = totalOnCall+1;

}
    
});

document.getElementById("oncall").innerHTML =totalOnCall;
});


}

  
function getTotalFull() {

var totalOnCall = 0;
db.collection("Safe Zones").get().then(function(querySnapshot) {
  querySnapshot.forEach(function(doc) {

var oncallstatus= doc.data().safestatus;
if(oncallstatus=="Full"){
 totalOnCall = totalOnCall+1;

}
    
});

document.getElementById("fullx").innerHTML =totalOnCall;
});


}

function getTotalOvercrowded() {

var totalOnCall = 0;
db.collection("Safe Zones").get().then(function(querySnapshot) {
  querySnapshot.forEach(function(doc) {

var oncallstatus= doc.data().safestatus;
if(oncallstatus=="Overcrowded"){
 totalOnCall = totalOnCall+1;
}
});

document.getElementById("overcrowded").innerHTML =totalOnCall;
});


}
    getTotalOvercrowded();
    getTotalFull();
    getTotalRegugees();
    getTotalOnCall();


  </script>




</body>

</html>
<!-- end document-->

<!--
.collection("Safe Zones")
.where("safestatus", "==", "On Call")

-->