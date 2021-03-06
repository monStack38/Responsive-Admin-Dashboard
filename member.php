<?php
include('./common/header.php');
include('./common/navbar.php');

?>
      <!-- main -->
      <div class="main">
        <div class="topbar">
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>
          <!-- search -->
          <div class="search">
            <label for="">
              <input type="text" placeholder="Search Here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>
          <!-- userImg -->
          <div class="user">
            <img src="./images/user.jpg" />
          </div>
        </div>

        <!-- cards -->
        <div class="cardBox">
          <div class="card">
            <div>
              <div class="numbers">₱ 1,000,000</div>
              <div class="cardName">Total Accumulated Bonus</div>
            </div>
            <div class="iconBox"><ion-icon name="cash-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">₱ 500,000</div>
              <div class="cardName">Available Bonus</div>
            </div>
            <div class="iconBox"><ion-icon name="wallet-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">10,000</div>
              <div class="cardName">Redeemable Lifestyle Points</div>
            </div>
            <div class="iconBox"><ion-icon name="gift-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">150,000</div>
              <div class="cardName">Total Members</div>
            </div>
            <div class="iconBox">
              <ion-icon name="people-outline"></ion-icon>
            </div>
          </div>
                    
          <div class="card">
            <div>
              <div class="numbers">₱ 50,000</div>
              <div class="cardName">Direct Referral Bonus (DRB)</div>
            </div>
            <div class="iconBox"><ion-icon name="people-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">₱ 100,000</div>
              <div class="cardName">In-Direct Referral Bonus (in-DRB)</div>
            </div>
            <div class="iconBox">
              <ion-icon name="people-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">₱ 500,000</div>
              <div class="cardName">Binary Bonus (BB)</div>
            </div>
            <div class="iconBox"><ion-icon name="people-circle-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">₱ 500,000</div>
              <div class="cardName">Unilevel Bonus (BB)</div>
            </div>
            <div class="iconBox"><ion-icon name="people-circle-outline"></ion-icon></div>
          </div>
        </div>

        <!-- Charts -->
        <div class="graphBox">          
          <div class="box">
            <h2>Income Sources</h2>
            <canvas id="myChart"></canvas>
          </div>
          <div class="box"><canvas id="earning"></canvas></div>
        </div>

        <div class="details">
          <!-- Order details List -->
          <div class="recentOrders">
            <div class="cardHeader">
              <h2>Recent Transactions</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table>
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Price</td>
                  <td>Payment</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1,200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Window Coolers</td>
                  <td>$110</td>
                  <td>Due</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>Speakers</td>
                  <td>$620</td>
                  <td>Paid</td>
                  <td><span class="status return">Return</span></td>
                </tr>
                <tr>
                  <td>HP Laptop</td>
                  <td>$110</td>
                  <td>Due</td>
                  <td><span class="status inprogress">In Progress</span></td>
                </tr>
                <tr>
                  <td>Apple Watch</td>
                  <td>$1,200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Wall Fan</td>
                  <td>$110</td>
                  <td>Paid</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>Addidas Shoes</td>
                  <td>$620</td>
                  <td>Paid</td>
                  <td><span class="status return">Return</span></td>
                </tr>
                <tr>
                  <td>Denim Shirts</td>
                  <td>$110</td>
                  <td>Due</td>
                  <td><span class="status inprogress">In Progress</span></td>
                </tr>
                <tr>
                  <td>Casual Shoes</td>
                  <td>$575</td>
                  <td>Paid</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>Wall Fan</td>
                  <td>$575</td>
                  <td>Paid</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>Denim Shirts</td>
                  <td>$110</td>
                  <td>Due</td>
                  <td><span class="status inprogress">In Progress</span></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- New Customer -->
          <div class="recentCustomers">
            <div class="cardHeader">
              <h2>Newly Registered Member</h2>
            </div>
            <table>
              <tr>
                <td width="60px">
                  <img class="imgBx" src="./images/img1.jpg" alt="" />
                </td>
                <td>
                  <h4>David<br /><span>Italy</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <img class="imgBx" src="./images/img2.jpg" alt="" />
                </td>
                <td>
                  <h4>Muhammad<br /><span>India</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <img class="imgBx" src="./images/img3.jpg" alt="" />
                </td>
                <td>
                  <h4>Amelia<br /><span>France</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <img class="imgBx" src="./images/img4.jpg" alt="" />
                </td>
                <td>
                  <h4>Olivia<br /><span>USA</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <img class="imgBx" src="./images/img5.jpg" alt="" />
                </td>
                <td>
                  <h4>Amit<br /><span>Japan</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <img class="imgBx" src="./images/img6.jpg" alt="" />
                </td>
                <td>
                  <h4>Ashraf<br /><span>India</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <img class="imgBx" src="./images/img7.jpg" alt="" />
                </td>
                <td>
                  <h4>Diana<br /><span>Malaysia</span></h4>
                </td>
              </tr>
              <tr>
                <td width="60px">
                  <img class="imgBx" src="./images/img8.jpg" alt="" />
                </td>
                <td>
                  <h4>Amit<br /><span>India</span></h4>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>


<?php
include('./common/footer.php');
?>
