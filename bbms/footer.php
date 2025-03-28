<html>
<head>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    
    #footer {
      background-color: #f8f8f8;
      color: #333;
      padding: 30px 0;
      border-top: 1px solid #e7e7e7;
    }
    
    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    
    .footer-section {
      flex: 1;
      min-width: 200px;
      margin: 10px 20px;
    }
    
    .footer-section h3 {
      font-size: 18px;
      margin-bottom: 15px;
      color: #d32f2f; /* Blood red color */
    }
    
    .footer-section ul {
      list-style: none;
      padding: 0;
    }
    
    .footer-section ul li {
      margin-bottom: 8px;
    }
    
    .footer-section ul li a {
      color: #333;
      text-decoration: none;
    }
    
    .footer-section ul li a:hover {
      color: #d32f2f;
    }
    
    .copyright {
      text-align: center;
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid #e7e7e7;
      font-size: 14px;
    }
    
    .contact-info {
      font-weight: bold;
      color:rgb(12, 1, 1);
    }
    
    @media (max-width: 768px) {
      .footer-section {
        flex: 100%;
      }
    }
  </style>
</head>
<body>
  <div id="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>INFORMATION</h3>
        <ul>
          <li><a href="about_us.php">About us</a></li>
          <li><a href="donate_blood.php">Donate Blood</a></li>
          <li><a href="why_donate_blood.php">Get Involved</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>NAVIGATION</h3>
        <ul>
          <li><a href="#">Donation Process</a></li>
          <li><a href="#">Eligibility</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">Contacts</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>LOCATIONS</h3>
        <ul>
          <li>Hamgerbag,Chittagong</li>
          <li>Roomgata,Chittagong</li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>CONTACT</h3>
        <p class="contact-info">+8801991944833</p>
        <p class="contact-info">+8801631931072</p>
        
      </div>
    </div>
    
    <div class="copyright">
      COPYRIGHT © 2025<br>
      Matri Blood Bank<br>
      ALL RIGHTS RESERVED.
    </div>
  </div>
</body>
</html>