<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="YOU/PATH/dist/css/custom-alert-bootstrap.css"> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body onload="Swal()">
    <!-- nav เปิด -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top mb-5">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">ITD</a>
            <button class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarToggle" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Product</a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="container my-2 d-flex container-fluid">
                    <form class=" d-flex ">
                        <input type="submit" value="ค้นหา" class="btn btn-outline-primary me-1">
                        <input type="text" class="form-control me-2" placeholder="ป้อนข้อมูล">  
                    </form>
                    <button class="btn btn-outline-danger ms-3" data-bs-target="#showForm" data-bs-toggle="modal">ลงทะเบียน</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="showForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">แบบฟอร์มลงทะเบียน</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>ชื่อ</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-success">บันทึกข้อมูล</button>
                </div>
            </div>
        </div>
    </div>
    <!-- nav ปิด -->

    <!-- context เปิด -->
    <div class="card container border-dark border-3  mb-5 py-4 bg-secondary " >
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="carousel slide" id="slider1" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <button data-bs-target="#slider1" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                <button data-bs-target="#slider1" data-bs-slide-to="1" class=""></button>
                                <button class="" data-bs-target="#slider1" data-bs-slide-to="2"></button>
                                <button data-bs-target="#slider1" data-bs-slide-to="3" class=""></button>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item carousel-item-next carousel-item-start">
                                    <img src="https://cdn.pixabay.com/photo/2021/02/08/15/02/mountains-5995081__340.jpg" class="d-block w-100">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>ภูเขา</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, nobis.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn.pixabay.com/photo/2020/06/15/01/06/sunset-5299957__340.jpg" class="d-block w-100">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>ทะเล</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, nobis.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn.pixabay.com/photo/2021/01/18/17/46/sunset-5928907__340.jpg" class="d-block w-100">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>พระอาทิตย์ตกดิน</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, nobis.</p>
                                    </div>
                                </div>
                                <div class="carousel-item active carousel-item-start">
                                    <img src="https://cdn.pixabay.com/photo/2021/01/21/14/10/egret-5937499__340.jpg" class="d-block w-100">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>หมอก</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, nobis.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider1">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider1">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card  border-dark border-2 bg-secondary text-white">
            <div class="card-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto necessitatibus libero veniam doloremque soluta. Commodi, similique, nesciunt corporis laboriosam fuga sapiente non blanditiis inventore quasi labore tempora enim dicta a!</p>
            </div>
        </div>
    </div>
    <!-- context ปิด -->

    <!-- foorter เปิด -->
    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="#">Gang Sor Sor</a>
        </div>
    </footer>
    <!-- foorter ปิด -->
</body>
<script>
    let timerInterval
    Swal.fire({
        title: 'ยินดีต้อนรับเข้าสู่เว็บไซต์',
        html: 'หน้าต่างจะปิดใน <b></b> ms.',
        backdrop: 'rgba(0, 0, 0, 0.9)',
        timer: 2700,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
        }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
        }
    })
    
</script>
</html>
