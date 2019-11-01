<section class="dark-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center text-primary">Login to CentERP</h2>
                <form class="login-form" method="post" target="login.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="">
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                        <label class="custom-control-label" for="remember">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                    <br/>
                    <button type="button" class="btn btn-block btn-outline-primary">No account yet ?</button>
                </form>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img width="800" height="550" src="../public/images/login/car-1.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>It's free !</h2>
                                    <p>Enter in the company's life by logging in. It's free and you just have to ask
                                    your company admin to whitelist you, we're doing everything else !</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img width="800" height="550" src="../public/images/login/car-2.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img width="800" height="550" src="../public/images/login/car-3.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>