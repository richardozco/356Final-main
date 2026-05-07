<?php
// generic header for all pages
// has logout or login button depending on the string passed in

function makeHeader($type) {
    if ($type == "loggedIn") {
$header = '
<header class="site-header">
    <div class="logo-area">
        <a href="../index.php" class="logo-link">
            <img src="../Assets/calendar-blank.svg" alt ="" class="logo-icon" width="48" height="48">
            <h1 class="site-logo">Burvents</h1>
        </a>
    </div>
    <nav class="account-actions" id="nav-header">
        <li> <a href="../pages/welcome.php" class="account-btn"> Account </a> </li>
        <li> <a href="../helpers/logout.php" class="logout-btn"> Logout </a> </li>
    </nav>
</header>
';
}
else if ($type == "loggedOut") {
    $header = '
    <header class="site-header">
    <div class="logo-area">
        <a href="../index.php" class="logo-link">
            <img src="../Assets/calendar-blank.svg" alt ="" class="logo-icon" width="32" height="32">
            <h1 class="site-logo">Burvents</h1>
        </a>
    </div>
    <nav class="account-actions" id="nav-header">
        <li> <a href="../pages/welcome.php" class="account-btn"> Account </a> </li>
        <li> <a href="../pages/login.php" class="login-btn"> Log In </a> </li>
    </nav>
</header>
';
}
return $header;
}
?>