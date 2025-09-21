<?php
// Determine the correct path based on current location
$current_path = $_SERVER['REQUEST_URI'];
$is_module = strpos($current_path, '/modules/') !== false;
$base_path = $is_module ? '../../' : '';
$css_path = $is_module ? '../../assets/css/style.css' : 'assets/css/style.css';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEL Air Conditioning Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $css_path; ?>" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $base_path; ?>index.php">JEL Air Conditioning</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_path; ?>index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_path; ?>modules/bookings/">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_path; ?>modules/customers/">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_path; ?>modules/technicians/">Technicians</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_path; ?>modules/services/">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_path; ?>modules/payments/">Payments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_path; ?>modules/reports/">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_path; ?>customer_portal/login.php">Customer Portal</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user me-1"></i> <?php echo $_SESSION['full_name']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo $base_path; ?>logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    