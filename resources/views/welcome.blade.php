<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="lab la-accusoft"></span></h1>
        </div>

        <div class="sidebar-menu"
            <ul>
                <li>
                    <a href="" class="active"><img src="home.png"/>
                    <span>Home</span></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/material/24/000000/stocks-growth.png"/>
                    <span>Markets</span></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/material/24/000000/refund-2.png"/>
                    <span>Transaction</span></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/material/24/000000/appointment-reminders--v1.png"/>
                    <span>Notification</span></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/material/24/000000/variable.png"/>
                    <span>Variables</span></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/material/24/000000/shop--v1.png"/>
                    <span>Store</span></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/material/24/000000/user--v1.png"/>
                    <span>Profile</span></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/material/24/000000/new-message.png"/>
                    <span>Messages</span></a>
                </li>
                <div class="logout">
                <li>
                    <a href=""><img src="https://img.icons8.com/material-outlined/24/000000/exit.png"/>
                    <span>Log Out</span></a>
                </li>
                </div>
            </ul>
    </div>
 </div>

 <div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>

            Dashboard
        </h2>

        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search here" />
        </div>

        <div class="notification">
        <img src="https://img.icons8.com/material-two-tone/24/000000/appointment-reminders.png"width="30px" height="30px"/>
        </div>

        <div class="user-wrapper">
        <img src="https://img.icons8.com/color/48/000000/user.png" width="30px" height="30px" alt="">
            <div>
                <h4>Ada James</h4>
            </div>
        </div>
    </header>
    <main>

    <div class="greetings">
        <p>Good morning Ada!</p>
        <h4>Dashboard</h4>
        <p>Quick Overview Of Amana Market.</p>
        </div>


    <div class="cards">
    <div class="card-single">
            <div>
                <h1>18</h1>
                <span>Active Markets</span>
            </div>
            <div>
            <img src="https://img.icons8.com/fluency/48/000000/online-shop.png"/><br>
            </div>
            </div>

            <div class="card-single">
            <div>
                <h1>₦22,333</h1>
                <span>Transaction</span>
            </div>
            <div>
            <img src="https://img.icons8.com/color/48/000000/refund-2--v1.png"/>
            </div>
            </div>

            <div class="card-single">
            <div>
                <h1>345</h1>
                <span>Active Agents</span>
            </div>
            <div>
            <img src="https://img.icons8.com/color/48/000000/active-directory.png"/>
            </div>
            </div>

            <div class="card-single">
            <div>
                <h1>03</h1>
                <span>Pending Payments</span>
            </div>
            <div>
            <img src="https://img.icons8.com/parakeet/48/000000/experimental-error-parakeet.png"/>
            </div>
            </div>
    </div>

    <!-- <div class="recent-grid">

    <div class="customers">
            <div class="cards">
                <div class="card-single">
                    <h3>New Customers</h3>

                    <button>See all <span class="las la-arrow-right">

                    </span></button>
                </div>

                 </div>

        </div>
        </div> -->
        <div class="cart">
            <div class="cart-single">
                 <div class="text">
                <h3>45</h3>
                <p>Active Agents</p>
            </div>
            <div class="text">
                <h3>200</h3>
                <p>Identified Markets</p>
            </div>
        </div>
        <div class="cart-single">
                 <div class="text">
                <h3>9,222</h3>
                <p>Numbers of Famers</p>
            </div>
            <div class="text">
                <h3>2,655</h3>
                <p>Numbers of Buyers</p>
            </div>
</div>
<div class="cart-single">
                 <div class="text">
                <h3>70,856</h3>
                <p>Transactions</p>
            </div>
            <div class="text">
                <h3>5,288</h3>
                <p>Farmers</p>
            </div>
</div>
<div class="cart-single">
                 <div class="text">
                <h3>18</h3>
                <p>Communities</p>
            </div>
            <div class="text">
                <h3>2,655</h3>
                <p>Number of Buyers</p>
            </div>
    </div>
    </main>
 </div>
</body>
</html>
