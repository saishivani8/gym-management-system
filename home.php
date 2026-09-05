<?php include 'gymheader.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
.glow-text-strong {
    color: #fff;

    text-shadow:
        0 0 5px #ff4da6,
        0 0 10px #ff4da6,
        0 0 20px #ff4da6,
        0 0 40px #ff1a75;
}
h2{
    color:#ff4da6;
    font-family: "Trirong", serif;
}
/* Background image */
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    background: url("image/gym1.jpg") no-repeat center center/cover;

    filter: brightness(40%);
    z-index: -1;
}

/* 💖 MARQUEE CONTAINER */
.marquee-container {
    width: 100%;
    background: linear-gradient(90deg, #ff4da6, #ff85c1, #ff4da6);
    padding: 8px 0;
    margin-top: 10px;
    box-shadow: 0 0 10px rgba(255, 77, 166, 0.6);
}

/* ✨ TEXT INSIDE */
.marquee-container marquee {
    color: #000;
    font-weight: bold;
    font-style: italic;
    font-size: 16px;
}
</style>

<h2 class="glow-text-strong">~Welcome to HerPower Fitness~</h2>


<!-- ✅ FIXED HERE -->
<div class="marquee-container">
    <marquee>Grace in every rep 💖</marquee>
</div>

<br><br>

<div style="text-align:center;">
    <a href="/miniproject/index.php" class="card">Join Our Sisters</a><br><br>
    <a href="display.php" class="card">Meet the Squad</a><br><br>
    <a href="aboutus.php" class="card">About Us</a><br><br>
    <a href="contactus.php" class="card">📞 Contact Us</a>
</div>

<?php include 'footer.php'; ?>