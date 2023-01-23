<?php
include_once './includes/header.php';
?>

<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <form method="post" class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Log in</h3>

                        <div class="form-outline mb-4">
                            <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="username" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="password"  />
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" name="login" type="submit">Login</button>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-block btn-primary" name="signin" style="background-color: #dd4b39;"
                                type="submit"> Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include_once './includes/footer.php';
?>