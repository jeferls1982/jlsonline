
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <meta name="theme-color" content=" #0C1F50">


        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbar-fixed/">

        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">
        <?php echo $__env->make('scripts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Custom styles for this template -->

    </head>
    <body>
        <div id="app" class=" flex-center position-ref full-height">       
            <header>
                <nav class="navbar lead navbar-expand-md navbar-dark fixed-top azulPetroleo navHome">
                    <a class="navbar-brand" href="/">JLSonline</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <!--                            <li class="nav-item">
                                                            <a class="nav-link" href="#">Link</a>
                                                        </li>-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sites
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Financeiro</a>
                                    <a class="dropdown-item" href="#">Loterias</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/cardapio">Cardápio</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </nav>
            </header>
            <!--            src="<?php echo e(url("/storage/home/comidas.jpg")); ?>"-->
            <main>
                <div class="container">                    
                    <?php echo $__env->make('home.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="container" >
                    <?php echo $__env->make('home.carrocel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                



                <!--                <div class="d-lg-none">hide on lg and wider screens</div>
                                <div class="d-none d-lg-block">hide on screens smaller than lg</div>-->




            </main>

            <footer class="footer fixed-bottom  mt-auto py-0.5 cinza">
                <div class="container text-justify-center">
                    <span class="text-white">®jlsonline</span>
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>

</body>
</html><?php /**PATH /var/www/html/jlsonline/resources/views/welcome.blade.php ENDPATH**/ ?>