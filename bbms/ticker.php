<html>
<head>
<style>
@media screen and (max-width: 80px) {
  .news {
    position:relative;
    margin: 20px auto;
  }
  .text1 {
    box-shadow:none !important;
    position:relative;
    margin-left:auto;
    margin-right:auto;
  }
}

.blue {
    background: #f8f8f8; /* Changed to light background */
}

.news {
    box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Simpler shadow like search bar */
    width: 60%; /* Narrower width like search bar */
    height: 40px; /* Smaller height */
    margin: 20px auto; /* Centered with margin */
    overflow: hidden;
    border-radius: 20px; /* Rounded ends like search bar */
    padding: 0;
    -webkit-user-select: none;
    border: 1px solid #ddd; /* Added border like search bar */
    display: flex; /* Using flex for better alignment */
    align-items: center;
}

.news span {
    color: #333; /* Darker text color */
    padding: 8px 15px;
    position: relative;
    box-shadow: none; /* Removed inset shadow */
    font: 14px 'Raleway', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -webkit-user-select: none;
}

.news span:first-child {
    background-color: #F60F0F;
    color: white;
    height: 100%;
    display: flex;
    align-items: center;
    border-radius: 20px 0 0 20px; /* Rounded left side */
    width: 125px;
}

.text1 {
    box-shadow: none !important;
    width: calc(100% - 125px); /* Adjusted width */
    white-space: nowrap;
    overflow: hidden;
}

marquee {
    line-height: 40px; /* Center text vertically */
    color: #555; /* Dark gray text */
}
</style>
</head>
<body>
<div class="news blue">
<span>Latest Updates</span><span class="text1"><marquee>First blood donation camp to be organised in Hisar By Dhruba Chodhury in collabration with Matri Blood Bank <b>01/09/2025 at East Delta University.</b> Come and Be a Part of this Noble Cause :)</marquee></span>
</div>
</body>
</html>