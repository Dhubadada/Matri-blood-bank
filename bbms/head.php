<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #d10000;
            --primary-dark: #a00000;
            --text-dark: #333;
            --text-light: #777;
            --bg-white: #fff;
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 80px; /* Space for fixed navbar */
        }
        
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--bg-white);
            color: var(--text-dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: var(--transition);
        }
        
        /* Scrolled state */
        .header.scrolled {
            padding: 10px 5%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Logo style */
        .header a.logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: var(--transition);
        }
        
        .header a.logo:hover {
            color: var(--primary-dark);
        }
        
        .logo-icon {
            margin-right: 8px;
            font-size: 26px;
        }
        
        /* Navigation links */
        .header-nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .header-nav a {
            color: var(--text-dark);
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 4px;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .header-nav a:hover {
            color: var(--primary-color);
            background-color: rgba(209, 0, 0, 0.05);
        }
        
        .header-nav a i {
            font-size: 14px;
        }
        
        /* Active link style */
        .header-nav a.active {
            color: var(--primary-color);
            font-weight: 600;
        }
        
        /* Donate button */
        .donate-btn {
            background-color: var(--primary-color);
            color: white !important;
            border-radius: 30px;
            padding: 10px 20px !important;
            margin-left: 10px;
            font-weight: 600 !important;
            transition: var(--transition);
        }
        
        .donate-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(209, 0, 0, 0.2);
        }
        
        /* Responsive styles */
        @media screen and (max-width: 992px) {
            .header {
                padding: 15px 3%;
            }
            
            .header-nav {
                gap: 10px;
            }
        }
        
        @media screen and (max-width: 768px) {
            .header {
                flex-direction: column;
                padding: 15px;
            }
            
            .header.scrolled {
                padding: 10px;
            }
            
            .header-nav {
                margin-top: 15px;
                flex-wrap: wrap;
                justify-content: center;
                gap: 8px;
            }
            
            .header a.logo {
                font-size: 22px;
            }
            
            .header-nav a {
                font-size: 14px;
                padding: 6px 10px;
            }
            
            .donate-btn {
                margin-left: 0;
                padding: 8px 16px !important;
            }
        }
    </style>
</head>

<body>
    <div class="header" id="navbar">
        <a href="home.php" class="logo">
            <i class="fas fa-tint logo-icon"></i>
            Matri Blood Bank
        </a>
        <div class="header-nav">
            <a href="about_us.php" class="with-icon">
                <i class="fas fa-info-circle"></i> About
            </a>
            <a href="donor_list.php" class="with-icon">
                <i class="fas fa-users"></i> Donors
            </a>
            <a href="login.php" class="with-icon">
                <i class="fas fa-user-shield"></i> Admin
            </a>
            <a href="contact_us.php" class="with-icon">
                <i class="fas fa-envelope"></i> Contact
            </a>
            <a href="donate_blood.php" class="donate-btn with-icon">
                <i class="fas fa-heart"></i> Donate
            </a>
        </div>
    </div>

 
</body>
</html>