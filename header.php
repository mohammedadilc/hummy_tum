<!-- off canvas toggle -->

    <header class="pt-2">
        <div class="d-flex justify-content-between align-items-center">
            <img class="img-fluid logo" src="icon/logo.svg" alt="logo">
            <div class="d-none d-lg-block">
            <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
                <div class="d-flex align-items-center">
                    <a class="px-3 text-decoration-none nave-menu <?php echo ($activePage == "index" ? "active" : "") ?>" href="index.php">Home</a>    
                    <a class="px-3 text-decoration-none nave-menu <?php echo ($activePage == "about" ? "active" : "") ?>" href="about.php">Who we are?</a>
                    <a class="px-3 text-decoration-none nave-menu <?php echo ($activePage == "menu" ? "active" : "") ?>" href="menu.php">Menu</a>
                    <a class="px-3 text-decoration-none nave-menu <?php echo ($activePage == "contact" ? "active" : "") ?>" href="contact.php">Contact</a>
                </div>
            </div>
            <div class="menu d-md-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><svg width="50" height="50" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28 10.5C28 6.9 25.1 4 21.5 4C21.3 4 21.1 4 20.9 4C19.5 1.6 16.9 0 14 0C11 0 8.4 1.6 7.1 4C6.9 4 6.7 4 6.5 4C2.9 4 0 6.9 0 10.5C0 13.7 2.4 16.4 5.4 16.9L5 24.9C5 25.2 5.1 25.4 5.3 25.6C5.5 25.9 5.7 26 6 26H22C22.3 26 22.5 25.9 22.7 25.7C22.9 25.5 23 25.2 23 25L22.6 17C25.6 16.4 28 13.7 28 10.5ZM11 20.9C10.9 21.4 10.5 21.7 10 21.7C9.9 21.7 9.9 21.7 9.8 21.7C9.3 21.6 8.9 21.1 9 20.5L9.5 17.8C9.6 17.3 10.1 16.9 10.7 17C11.2 17.1 11.6 17.6 11.5 18.2L11 20.9ZM15 21C15 21.6 14.6 22 14 22C13.4 22 13 21.6 13 21V18C13 17.4 13.4 17 14 17C14.6 17 15 17.4 15 18V21ZM18.1 21.7C18 21.7 18 21.7 17.9 21.7C17.4 21.7 17 21.4 16.9 20.9L16.4 18.2C16.3 17.7 16.7 17.1 17.2 17C17.7 16.9 18.3 17.3 18.4 17.8L18.9 20.5C19 21.1 18.7 21.6 18.1 21.7Z" fill="#FF9827"/></svg></div>
            <div class="d-none d-lg-block">
                <a href="#" class="btn btn-primary whats-app-btn d-flex align-items-center py-2"><span class="me-2"><img src="icon/whatsapp.svg" alt="whatsapp-logo"></span> Place Your Order</a>
            </div>
        </div>    
    </header>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Main Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mb-4">
                <a class="text-decoration-none nave-menu-2 p-0 <?php echo ($activePage == "index" ? "active" : "") ?>" href="index.php">Home</a>   
            </div>
            <div class="mb-4">
                <a class=" text-decoration-none nave-menu-2 p-0 <?php echo ($activePage == "about" ? "active" : "") ?>" href="about.php">Who we are?</a>
            </div>
            <div class="mb-4">
                <a class=" text-decoration-none nave-menu-2 p-0 <?php echo ($activePage == "menu" ? "active" : "") ?>" href="menu.php">Menu</a>
            </div>
            <div class="mb-4">
                <a class=" text-decoration-none nave-menu-2 p-0 <?php echo ($activePage == "contact" ? "active" : "") ?>" href="contact.php">Contact</a>
            </div>
        </div>
    </div>   
    


    
   
    
<!-- off canvas toggle end -->