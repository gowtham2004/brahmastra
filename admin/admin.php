<?php
    session_start();
    if(isset($_SESSION['admin_login'])){ 
        include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>ADMIN-Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
                <!-- header start -->
                    <?php include("header.php"); ?>
                <!-- header end -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <!-- Content Row -->
                    <div class="container">
            <div class="row">
            <!-- Container 1 -->
            <div class="col-xl-3 col-md-6 mb-4 event-container">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    B.Tech AI&DS</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $query = "SELECT COUNT(*) as total FROM event_register where event_dept = 'aids'";
                                $stmt = $dbh->query($query);
                                $stmt->execute();
                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                if($stmt->rowCount() > 0){
                                    foreach ($result as $row) {
                                        echo($row['total']." Memebers");
                                    }
                                }
                                ?>
                                </div>
                            </div>
                            <div class="col-auto dropdown-container">
                                <i class="fas fa-robot fa-2x text-gray-300"></i>
                                <div class="dropdown-content">
                                <!-- Event details will be dynamically added here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Container 2 -->
            <div class="col-xl-3 col-md-6 mb-4 event-container">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    B.E CSE</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $query = "SELECT COUNT(*) as total FROM event_register where event_dept = 'cse'";
                                $stmt = $dbh->query($query);
                                $stmt->execute();
                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                if($stmt->rowCount() > 0){
                                    foreach ($result as $row) {
                                        echo($row['total']." Memebers");
                                    }
                                }
                                ?>
                                </div>
                            </div>
                            <div class="col-auto dropdown-container">
                                <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                <div class="dropdown-content">
                                <!-- Event details will be dynamically added here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Container 3 -->
            <div class="col-xl-3 col-md-6 mb-4 event-container">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">B.E ECE
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    <?php
                                        $query = "SELECT COUNT(*) as total FROM event_register where event_dept = 'ece'";
                                        $stmt = $dbh->query($query);
                                        $stmt->execute();
                                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        if($stmt->rowCount() > 0){
                                            foreach ($result as $row) {
                                                echo($row['total']." Memebers");
                                            }
                                        }
                                    ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Additional content for container 3 -->
                                </div>
                            </div>
                        </div>
                        <div class="col-auto dropdown-container">
                            <i class="fas fa-satellite-dish fa-2x text-gray-300"></i>
                            <div class="dropdown-content">
                                <!-- Event details will be dynamically added here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Container 4 -->
        <div class="col-xl-3 col-md-6 mb-4 event-container">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                B.E EEE</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                                $query = "SELECT COUNT(*) as total FROM event_register where event_dept = 'eee'";
                                $stmt = $dbh->query($query);
                                $stmt->execute();
                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                if($stmt->rowCount() > 0){
                                    foreach ($result as $row) {
                                        echo($row['total']." Memebers");
                                    }
                                }
                            ?>
                            </div>
                        </div>
                        <div class="col-auto dropdown-container">
                            <i class="fas fa-microchip fa-2x text-gray-300"></i>
                            <div class="dropdown-content">
                                <!-- Event details will be dynamically added here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container 5 -->
        <div class="col-xl-3 col-md-6 mb-4 event-container">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                B.E MECH</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                                $query = "SELECT COUNT(*) as total FROM event_register where event_dept = 'mech'";
                                $stmt = $dbh->query($query);
                                $stmt->execute();
                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                if($stmt->rowCount() > 0){
                                    foreach ($result as $row) {
                                        echo($row['total']." Memebers");
                                    }
                                }
                            ?>
                            </div>
                        </div>
                        <div class="col-auto dropdown-container">
                            <i class="fas fa-cog fa-2x text-gray-300"></i>
                            <div class="dropdown-content">
                                <!-- Event details will be dynamically added here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Total Amount -->
        <div class="col-xl-3 col-md-6 mb-4 event-container">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bolder text-warning text-uppercase mb-1">
                                TOTAL AMOUNT RECEIVED</div>
                                <h4 id="result" style="color:black"></h4>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                                $query = "SELECT COUNT(DISTINCT reg_id) AS unique_count FROM event_register";
                                $stmt = $dbh->query($query);
                                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                                // Display the distinct data
                                $multipliedResult = $result['unique_count'] * 250;
                                    echo "<script>document.getElementById('result').textContent = '₹ " . $multipliedResult . "';</script>";
                                            
                            ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


                                
        
    </div>
</div>

<style>
    .event-container {
    position: relative;
    cursor: pointer;
    margin-bottom: 15px;
    margin-right: 20px;
}

/* Style for dropdown content */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    padding: 12px;
    z-index: 1;
}

/* Show dropdown content on hover */
.event-container:hover .dropdown-content {
    display: block;
}
</style>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    var eventDataSets = [
        [
            { eventName: "Paper Presentation", count:<?php $query = "SELECT id FROM event_register WHERE event_dept='aids' AND event_name='Paper Presentation'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Brainaza", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='aids' AND event_name='AI Quiz'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Bug Finder", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='aids' AND event_name='Bug Finder'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "E Sports", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='aids' AND event_name='Bidding War'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> }

            // Add more event data as needed for container 1
        ],
        [
            { eventName: "Paperio", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='cse' AND event_name='Paper Presentation'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Tech Crack", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='cse' AND event_name='Techcrack'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Postero", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='cse' AND event_name='Postero'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Thegidi", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='cse' AND event_name='Thegidi'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> }

            // Add more event data as needed for container 2
        ],
         [
            { eventName: "Paper Presentation", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='ece' AND event_name='Paper Presentation'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Binary Blast", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='ece' AND event_name='Electritech Expo'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Tech Kriti", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='ece' AND event_name='Miniute To Win It'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Eureka Quest", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='ece' AND event_name='Buzzy'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> }

            // Add more event data as needed for container 2
        ],
         [
            { eventName: "Current Xplore", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='eee' AND event_name='Paper Presentation'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Electritech Expo", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='eee' AND event_name='Binary Blast'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Minute To Win It", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='eee' AND event_name='Tech Kriti'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Buzzy", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='eee' AND event_name='Eureka Quest'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> }

            // Add more event data as needed for container 2
        ],
         [
            { eventName: "paper Presentation", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='mech' AND event_name='Paper Presentation'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "CAD Modeling", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='mech' AND event_name='Cad Modeling'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Water Rocketry", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='mech' AND event_name='Water Rocketry'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> },
            { eventName: "Mr. Lathe", count: <?php $query = "SELECT id FROM event_register WHERE event_dept='mech' AND event_name='Mr.Lathe'"; $bht = $dbh->prepare($query); $bht->execute(); echo($bht->rowCount()); ?> }

            // Add more event data as needed for container 2
        ],
        // ... Repeat the pattern for containers 3, 4, and 5
    ];

    $(".event-container").each(function(index) {
        var dropdownContent = $("<div>").addClass("dropdown-content");
        var eventData = eventDataSets[index];

        // Populate dropdown content with event data
        eventData.forEach(function(event) {
            var eventEntry = $("<div>").text(event.eventName + ": " + event.count);
            dropdownContent.append(eventEntry);
        });

        $(this).find(".dropdown-container").append(dropdownContent);

        $(this).hover(
            function() {
                $(this).find(".dropdown-content").css("display", "block");
            },
            function() {
                $(this).find(".dropdown-content").css("display", "none");
            }
        );
    });
});
</script>
                    <!-- Content Row -->

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Events Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                        <style>
                                            #chartdiv {
                                                width: 100%;
                                                height: 400px;
                                            }
                                        </style>
    
                                        <!-- Resources -->
                                        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                                        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                                        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    
                                        <!-- Chart code -->
                                        <script>
                                            am5.ready(function() {
    
                                                // Create root element
                                                // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                                                var root = am5.Root.new("chartdiv");
    
                                                // Set themes
                                                // https://www.amcharts.com/docs/v5/concepts/themes/
                                                root.setThemes([
                                                    am5themes_Animated.new(root)
                                                ]);
    
                                                root.dateFormatter.setAll({
                                                    dateFormat: "yyyy",
                                                    dateFields: ["valueX"]
                                                });
    
                                                var data = [
                                                <?php
                                                    $query = "SELECT COUNT(id) as total, DATE_FORMAT(insert_time, '%d-%m-%Y') as date FROM event_register GROUP BY date";
                                                    $stmt = $dbh->query($query);
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                    if($stmt->rowCount() > 0){
                                                        foreach ($result as $row) { ?>
                                                    {
                                                        "date":"<?php echo($row["date"]); ?>",
                                                        "value":<?php echo($row["total"]); ?>
                                                    },
                                                <?php } } ?>
                                                ];
    
                                                // Create chart
                                                // https://www.amcharts.com/docs/v5/charts/xy-chart/
                                                var chart = root.container.children.push(
                                                    am5xy.XYChart.new(root, {
                                                        focusable: true,
                                                        panX: true,
                                                        panY: true,
                                                        wheelX: "panX",
                                                        wheelY: "zoomX",
                                                        pinchZoomX:true
                                                    })
                                                );
    
                                                var easing = am5.ease.linear;
    
                                                // Create axes
                                                // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                                                var xAxis = chart.xAxes.push(
                                                    am5xy.DateAxis.new(root, {
                                                        maxDeviation: 0.5,
                                                        groupData: false,
                                                        baseInterval: {
                                                            timeUnit: "day",
                                                            count: 1
                                                        },
                                                        renderer: am5xy.AxisRendererX.new(root, {
                                                            pan:"zoom",
                                                            minGridDistance: 50
                                                        }),
                                                        tooltip: am5.Tooltip.new(root, {})
                                                    })
                                                );
    
                                                    var yAxis = chart.yAxes.push(
                                                        am5xy.ValueAxis.new(root, {
                                                        maxDeviation: 1,
                                                        renderer: am5xy.AxisRendererY.new(root, {pan:"zoom"})
                                                    })
                                                );
    
                                                // Add series
                                                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                                                var series = chart.series.push(
                                                    am5xy.LineSeries.new(root, {
                                                        minBulletDistance: 10,
                                                        xAxis: xAxis,
                                                        yAxis: yAxis,
                                                        valueYField: "value",
                                                        valueXField: "date",
                                                        tooltip: am5.Tooltip.new(root, {
                                                            pointerOrientation: "horizontal",
                                                            labelText: "{valueY}"
                                                        })
                                                    })
                                                );
    
                                                // Set up data processor to parse string dates
                                                // https://www.amcharts.com/docs/v5/concepts/data/#Pre_processing_data
                                                series.data.processor = am5.DataProcessor.new(root, {
                                                    dateFormat: "dd-MM-yyyy",
                                                    dateFields: ["date"]
                                                });
    
                                                series.data.setAll(data);
    
                                                series.bullets.push(function() {
                                                    var circle = am5.Circle.new(root, {
                                                    radius: 4,
                                                    fill: series.get("fill"),
                                                    stroke: root.interfaceColors.get("background"),
                                                    strokeWidth: 2
                                                });
    
                                                return am5.Bullet.new(root, {
                                                    sprite: circle
                                                });
                                            });
    
                                            // Add cursor
                                            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                                            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
                                                xAxis: xAxis
                                            }));
                                            cursor.lineY.set("visible", false);
                                            // add scrollbar
                                            chart.set("scrollbarX", am5.Scrollbar.new(root, {
                                                orientation: "horizontal"
                                            }));
                                            // Make stuff animate on load
                                            // https://www.amcharts.com/docs/v5/concepts/animations/
                                            series.appear(1000, 100);
                                            chart.appear(1000, 100);
                                        }); // end am5.ready()
                                    </script>
    
                                    <!-- HTML -->
                                    <div id="chartdiv"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                <?php
                                        $result = ['aids','cse','ece','eee','mech'];
                                        $data = [];
                                        $cnt = 0;
                                            foreach($result as $row) {
                                                $dept= $row;
                                                $query = "SELECT id FROM event_register WHERE event_dept = :dept";
                                                $bht = $dbh->prepare($query);
                                                $bht->bindParam(':dept',$dept, PDO::PARAM_STR);
                                                $bht->execute();
                                                if($bht->rowCount() > 0){
                                                    $data[$dept] = intval($bht->rowCount());
                                                }
                                                else {
                                                    $data[$dept] = 0;
                                                }
                                                $cnt = $cnt+1;
                                            }
                                        $query = "SELECT * FROM event_register";
                                        $stmt = $dbh->query($query);
                                        $stmt->execute();
                                        if($stmt->rowCount() > 0){ 
                                            $total = intval($stmt->rowCount());
                                        }
                                        $offset = 100/$total;
                                        $aids = intval($data['aids']*$offset);
                                        $cse = intval($data['cse']*$offset);
                                        $ece = intval($data['ece']*$offset);
                                        $eee = intval($data['eee']*$offset);
                                        $mech = intval($data['mech']*$offset);
                                        
                                    ?>
                                    <h4 class="small font-weight-bold">B.TECH AIDS<span
                                            class="float-right"><?php echo($aids);?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo$aids;?>%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">B.E CSE <span
                                            class="float-right"><?php echo($cse);?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo($cse);?>%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">B.E ECE <span
                                            class="float-right"><?php echo($ece);?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo($ece);?>%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">B.E EEE <span
                                            class="float-right"><?php echo($eee);?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo($eee);?>%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">B.E MECH<span
                                            class="float-right"><?php echo($mech);?>%</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo($mech);?>%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                           
                        <div class="col-lg-6 mb-4">

                            
                            <!-- Approach -->
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; CCET Brahmastra 2k23</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

<?php 
    }
    else {
        header('Location: ../index.html');
    }
?>