<style>
    .navb {
        width: 215px;
        display: flex;
        height: 500vh;
        align-items: flex-start;
        padding: 0;
    }

    .navboffcanvas{
        width: 215px;
        background-color: #3a3f51 !important; 
        display: flex; 
        flex-direction: column; 
        flex-wrap: nowrap; 
        height: 500vh; 
        z-index: 20;
        position: initial;
    }

    .offcanvas {
        translate: -15vw -7vh;
    }

    .actived {
        translate: 0vw -7vh;
    }

    .desactived {
        translate: -15vw -7vh;
    }

    #button-actived {
        transition: 1s;
    }

    .button-actived {
        translate: 15vw 0px;
    }
    .button-desactived {
        translate: 0px 0px;
    }

</style>

<nav class="navbar fixed-top navb">
    <button id="button-active" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" style="border-bottom-width: 15px;">
      <span class="navbar-toggler-icon"></span>
    </button>
      
        <div class="myNavbar offcanvas offcanvas-collapse navboffcanvas" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">

            <div class="nav-top" style="margin-bottom: 0;">
                <a class="nav-icon" href="inicio.php">
                    <img src="../public/img/logo.png" class="logo" alt="100%SanAgustin" style="width: 70px; height: 70px;"></img>
                </a>
            </div>

            <div style="background-color: #3a3f51 !important; height: 200vh; padding-top: 25px;">

                <div class="nav-links">
                    <ul>
                        
                        <li>
                            <div class="links-title">
                                <img src="../public/img/dashboard.svg" alt="dashboard">
                                <span>Menu de Inicio</span>
                            </div>
            
                            <div class="links-list links-list-desactive">
                                <a href="inicio.php">
                                    <img src="../public/img/resume.svg" alt="resumen">
                                    <span>Inicio</span>
                                </a>
                                <a href='statistic.php'>
                                    <img src="../public/img/statistics.svg" alt="history">
                                    <span>Estadísticas</span>
                                </a>
                            </div>
                        </li>
            
                        <li>
                            <div class="links-title">
                            <img src="../public/img/register.svg" alt="register">
                            <span>Registros</span>
                            </div>
            
                            <div class="links-list">
                            <a href="student.php">
                                <img src="../public/img/student.svg" alt="student">
                                <span>Estudiantes</span>
                            </a>
            
                            <a href="control-pago.php">
                                <img src="../public/img/wallet.png" alt="student">
                                <span>Control de Pagos</span>
                            </a>
            
                            <a href='teacher.php'>
                                <img src="../public/img/teacher.svg" alt="teachers">
                                <span>Profesores</span>
                            </a>
            
                            <a href='course.php'>
                                <img src="../public/img/course.svg" alt="course">
                                <span>Talleres</span>
                            </a>

                            <a href='repre.php'>
                                <img src="../public/img/repre.svg" alt="repre">
                                <span>Representantes</span>
                            </a>

            
                            </div>
                        </li>
            
                    </ul>
                </div>
            </div>
        </div>
</nav>


    <script>
        const $buttonActive = document.querySelector("#button-active");
        const $myNavbar = document.querySelector(".myNavbar")
        console.log($myNavbar)

        $buttonActive.addEventListener("click", () => {
            if ($myNavbar.classList.contains("actived")) {
                $myNavbar.classList.remove("actived");
                $myNavbar.classList.add("desactived");
                $buttonActive.classList.remove("button-desactived");
                $buttonActive.classList.add("button-desactived");
                
            } else {
                $myNavbar.classList.remove("desactived");
                $myNavbar.classList.add("actived");
                $buttonActive.classList.remove("button-desactived");
                $buttonActive.classList.add("button-actived");
            }
        })

    </script>
