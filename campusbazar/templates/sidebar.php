<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 


            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);
            $uname= $_SESSION['user'];

            if($uname == 'malbok@gmail.com'){

          ?>


          <li class="nav-item">
            <a class="nav-link <?php echo ($page == '' || $page == 'vendor-index.php') ? 'active' : ''; ?>" href="vendor-index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'products.php') ? 'active' : ''; ?>" href="products.php">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'customers.php') ? 'active' : ''; ?>" href="customers.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'order.php') ? 'active' : ''; ?>" href="order.php">
              <span data-feather="users"></span>
              Orders
            </a>
          </li>
          <?php }
          else {?>
            
            <li class="nav-item">
            <a class="nav-link <?php echo ($page == '' || $page == 'vendor-index.php') ? 'active' : ''; ?>" href="vendor-index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'products.php') ? 'active' : ''; ?>" href="products.php">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'customers.php') ? 'active' : ''; ?>" href="customers.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'order.php') ? 'active' : ''; ?>" href="order.php">
              <span data-feather="users"></span>
              Orders
            </a>
          </li>
        <?php } ?>
        </ul>

       
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hello <?php echo $_SESSION['user']; ?></h1>


      </div>