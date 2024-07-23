<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./reserve.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="main">
        <nav>
            <div class="logo">
            <a href="./index.php"><img src="./images/logo.png" alt=""></a>
            </div>
            <div class="nav-inner">
                <div class="box-2">
                    <ul>
                    <li><a href="./food.php">Food</a></li>
                    <li><a href="./drinks.php">Drink</a></li>
                    <li><a href="./privatedn.php">Private Dining</a></li>
                    <li><a href="./giftcard.php">Gift Cards</a></li>
                    <li><a href="./event.php">Up Coming Events</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- form section  -->
    <section class="form my-2 bg-dark w-50 text-light text-center "> 
        <form action="database.php" method="post" >
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mobile.No</label>
            <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <!-- <select class="form-select" aria-label="Default select example">
          <option selected>Select Your Option</option>
          <option value="1">Rent our Property</option>
          <option value="2">Buy Property</option>
          <option value="3">Sell Property</option>
        </select> -->

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Number of People's</label>
            <input type="select-options" name="count" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input type="select-options" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Time</label>
            <input type="select-options" name="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <button type="submit" class="btn btn-success" style="margin-top: 20px;" >Submit</button>
            </form>
          </section>
    <!-- form section  -->

    <!-- pre-footer section  -->
    <section class="pre-footer">
        <div class="last">
            <div class="season">
                <h3>SEASON HOURS BEGINNING <br> OCTOBER 1ST</h3>
                <p><span>Wednesday & Thursday</span> Dinner 5:30p-9p</p>
                <p><span>Friday</span> Dinner 5:30p-11p</p>
                <p><span>Saturday</span> Brunch 11a-2p, Dinner 5:30p-11p </p>
                <p><span>Sunday</span> Brunch 10:30a-2p, Dinner 5:30p-9p</p>
                <p><span>Monday</span> Dinner 5:30p-9p</p>
    
                <em>Closed Tuesdays for Adventures!</em>
            </div>
            <div class="add">
                <h3>ADDRESS</h3>
    
                <p>308 N. Rampart St. <br>
                New Orleans, LA 70112</p>
            </div>
            <div class="con">
                <h3>CONTACT</h3>
    
                <p>(504) 814-6200
                    <br>
                    <br>
                    info@palmandpinenola.com</p>
            </div>
        </div>
    
        <div class="end">
            <div class="right">
                <p>***At Palm&Pine We add 20% Gratuity to all Checks for our <br>  Servers, Hosts, & Bartenders***</p>
            </div>
            <div class="left">
                <h3>Gift Cards</h3>
                <p>₹1000</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Gift Card Amount</option>
                    <option value="1">₹1000</option>
                    <option value="2">₹3000</option>
                    <option value="3">₹5000</option>
                  </select>
            </div>
        </div>
    </section>
</body>
</html>