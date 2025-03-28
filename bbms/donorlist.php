<?php
// Database connection
include 'conn.php';

// Set page title
$pageTitle = "Blood Donor List";

// Start output buffering
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px 0;
            margin-bottom: 30px;
        }
        .page-title {
            color: #dc3545;
            font-weight: 700;
        }
        .donor-table {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .table thead th {
            background-color: #dc3545;
            color: white;
            font-weight: 600;
            border: none;
            padding: 15px;
        }
        .table tbody tr {
            transition: all 0.3s;
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        .table td, .table th {
            padding: 12px 15px;
            vertical-align: middle;
            border-top: 1px solid #eee;
        }
        .blood-badge {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.85em;
        }
        .action-btn {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.85em;
        }
        .no-donors {
            padding: 50px;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="page-title mb-0"><i class="fas fa-tint me-2"></i>Blood Donor List</h1>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="index.php" class="btn btn-outline-secondary"><i class="fas fa-home me-1"></i> Home</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="donor-table">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Donor Name</th>
                            <th>Blood Group</th>
                            <th>Contact</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM donor_details JOIN blood ON donor_details.donor_blood=blood.blood_id ORDER BY donor_name ASC";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) {
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><strong><?php echo htmlspecialchars($row['donor_name']); ?></strong></td>
                            <td><span class="blood-badge"><?php echo htmlspecialchars($row['blood_group']); ?></span></td>
                            <td><?php echo htmlspecialchars($row['donor_number']); ?></td>
                            <td><?php echo htmlspecialchars($row['donor_gender']); ?></td>
                            <td><?php echo htmlspecialchars($row['donor_age']); ?></td>
                            <td><?php echo htmlspecialchars($row['donor_address']); ?></td>
                            <td>
                                <a href="tel:<?php echo htmlspecialchars($row['donor_number']); ?>" class="btn btn-sm btn-success action-btn">
                                    <i class="fas fa-phone"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                        ?>
                        <tr>
                            <td colspan="8" class="no-donors">
                                <i class="fas fa-exclamation-circle fa-2x mb-3"></i>
                                <h4>No Donors Found</h4>
                                <p>Currently there are no registered blood donors.</p>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5 py-4 bg-light">
        <div class="container text-center">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> Blood Donation System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
// Close database connection
mysqli_close($conn);

// Flush the output buffer
ob_end_flush();
?>