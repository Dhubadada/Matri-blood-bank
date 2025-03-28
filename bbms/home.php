<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BloodBank & Donor Management System - Connecting donors with recipients">
    <meta name="author" content="BloodBank Team">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .hero-carousel img {
            height: 500px;
            object-fit: cover;
        }
        
        .info-card {
            transition: transform 0.3s;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
        }
        
        .donor-card img {
            height: 200px;
            object-fit: cover;
        }
        
        .testimonial-card {
            border-left: 4px solid #dc3545;
        }
    </style>
</head>

<body>
    <div class="header">
        <?php
        $active = "home";
        include('head.php'); ?>
    </div>
    <?php include 'ticker.php'; ?>

    <div class="container-fluid p-0">
        <div id="mainCarousel" class="carousel slide hero-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image\_107317099_blooddonor976.jpg" class="d-block w-100" alt="Blood donation awareness">
                </div>
                <div class="carousel-item">
                    <img src="image\Blood-facts_10-illustration-graphics__canteen.png" class="d-block w-100" alt="Blood facts">
                </div>
            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container py-5">
        <h1 class="text-center display-4 mb-5">Welcome to BloodBank & Donor Management System</h1>

        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="card info-card h-100">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">The need for blood</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?php
                            include 'conn.php';
                            $sql = "select * from pages where page_type='needforblood'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['page_data'];
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card info-card h-100">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Blood Tips</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?php
                            include 'conn.php';
                            $sql = "select * from pages where page_type='bloodtips'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['page_data'];
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card info-card h-100">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Who you could Help</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?php
                            include 'conn.php';
                            $sql = "select * from pages where page_type='whoyouhelp'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['page_data'];
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mb-4">Our Blood Donors</h2>
        <div class="row">
            <?php
            include 'conn.php';
            $sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card donor-card h-100">
                            <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Donor">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                                <p class="card-text">
                                    <strong>Blood Group:</strong> <span class="text-danger"><?php echo $row['blood_group']; ?></span><br>
                                    <strong>Mobile No.:</strong> <?php echo $row['donor_number']; ?><br>
                                    <strong>Gender:</strong> <?php echo $row['donor_gender']; ?><br>
                                    <strong>Age:</strong> <?php echo $row['donor_age']; ?><br>
                                    <strong>Address:</strong> <?php echo $row['donor_address']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>

        <section class="my-5 py-4 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">What People Say</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 testimonial-card">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>"I've been donating blood for 5 years now. The team makes the process so easy and rewarding. Knowing I'm helping save lives keeps me coming back."</p>
                                    <footer class="blockquote-footer">Michael T., <cite>Regular Donor</cite></footer>
                                </blockquote>
                                <div class="mt-3 text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 testimonial-card">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>"When my daughter needed emergency surgery, BloodBank had the rare blood type she required. We're forever grateful to the anonymous donor who saved her life."</p>
                                    <footer class="blockquote-footer">Sarah K., <cite>Recipient's Mother</cite></footer>
                                </blockquote>
                                <div class="mt-3 text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 testimonial-card">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>"As a hospital administrator, I rely on BloodBank for our blood supply needs. Their service is reliable and their donors are screened to the highest standards."</p>
                                    <footer class="blockquote-footer">Dr. James L., <cite>Hospital Partner</cite></footer>
                                </blockquote>
                                <div class="mt-3 text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row my-5">
            <div class="col-lg-6">
                <h2 class="mb-4">BLOOD GROUPS</h2>
                <p class="lead">
                    <?php
                    include 'conn.php';
                    $sql = "select * from pages where page_type='bloodgroups'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['page_data'];
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow" src="image\blood_donationcover.jpeg" alt="Blood donation">
            </div>
        </div>

        <div class="row my-5 py-4 bg-light rounded">
            <div class="col-md-8">
                <h4 class="mb-3">UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
                    <?php
                    include 'conn.php';
                    $sql = "select * from pages where page_type='universal'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['page_data'];
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <a href="donate_blood.php" class="btn btn-lg btn-danger btn-block py-3">Become a Donor</a>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>

</html>