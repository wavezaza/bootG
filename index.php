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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="YOU/PATH/dist/css/custom-alert-bootstrap.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body onload="Swal()">
    <!-- nav เปิด -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top mb-5 ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">ITD</a>
            <button class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarToggle">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#foorter" class="nav-link">หน้าหลัก</a>
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
    <!-- กล่อง 1 -->
    <div class="card container border-dark border-3  mb-5 py-4 bg-secondary ">
        <div class="card  border-dark border-2 bg-secondary text-white">
            <img src="https://scontent.fbkk5-8.fna.fbcdn.net/v/t39.30808-6/263616396_5341500369199776_2220877723949444637_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=e3f864&_nc_ohc=L-3wkRxjByQAX_pHHZy&_nc_ht=scontent.fbkk5-8.fna&oh=00_AT8j8qh8l4qrIg5WllH8pqTYX0klhOI-8JXfHMYet0a0QA&oe=61C0587F" alt="">
        </div>
    </div>
    <!-- กล่อง 2 -->
    <div class="card container border-dark border-3  mb-5 py-4 bg-secondary ">
        <div class="container mb-4 text-center">
            <h1 class="display-5 text-white mb-4">ตัวอย่างกิจกรรมในหลักสูตร</h1>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="carousel slide" id="slider1" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <button data-bs-target="#slider1" data-bs-slide-to="0" class="active" aria-current="true"></button>
                            <button data-bs-target="#slider1" data-bs-slide-to="1" class=""></button>
                            <button class="" data-bs-target="#slider1" data-bs-slide-to="2"></button>
                            <button data-bs-target="#slider1" data-bs-slide-to="3" class=""></button>
                        </ol>
                        <div class="carousel-inner bg-dark" style="height: 600px;">
                            <div class="carousel-item carousel-item-next carousel-item-start">
                                <img src="https://scontent.furt1-1.fna.fbcdn.net/v/t1.6435-9/166472171_4523631644319990_6058702780109680970_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeGRyo-MxQYYQnweJ0R8WUImfpw8AGV2n_d-nDwAZXaf98A5okqNOr-9gJIbW7iRjhZUsb5U-vzCUqb9dqbEuYEx&_nc_ohc=9ezGcQ4wytIAX8098Rs&tn=FOqXrvsnNh02ovcy&_nc_ht=scontent.furt1-1.fna&oh=00_AT8ebqlbb6QcTyDt4WW0ryDTQtEZXZICgS8rxXU0A4s8kw&oe=61E197E0" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>กิจกรรมภายในหลักสูตร</h3>
                                    <p>ตอบคำถามชิงรางวัล</p>
                                </div>
                            </div>
                            <div class="carousel-item bg-dark" style="height: 600px;">
                                <img src="https://scontent.furt1-1.fna.fbcdn.net/v/t1.6435-9/135857831_4276992598983897_2829967348796121835_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeENPwv7q6Fc629jvJeVCgSHEpNIOzgNUpQSk0g7OA1SlF_7dTPXmNoZe_Z7yqsrJ0hU4z_CoYx-Nvaz8spxFusH&_nc_ohc=4xxUGNFwfc0AX8xcOds&_nc_ht=scontent.furt1-1.fna&oh=00_AT9t2fdAd4vKJQfapO_QTuf2DbpDx1q2QTIdOs9Ml5ayyA&oe=61E0307F" class="d-block w-100" height="440px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>เราเรียนอะไร?</h3>
                                    <p>หลักสูตรมุ่งเน้นการแก้ปัญหาและพัตนาระบบสารสนเทศ และยังได้รู้จักเทคโนโลยีส่วนหน้าส่วนหลัง</p>
                                </div>
                            </div>
                            <div class="carousel-item bg-dark" style="height: 600px;">
                                <img src="https://scontent.fbkk5-8.fna.fbcdn.net/v/t39.30808-6/266268798_5341426419207171_4826837247509475808_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=cpBktfYOd-cAX9-_y3z&tn=LwpbIcQDorGFFlgl&_nc_ht=scontent.fbkk5-8.fna&oh=00_AT9XnFrsRskIGm1HE9Q6laK5ZxTXRPCjml2CrfjClgTPsg&oe=61C03399" class="d-block w-100" height="600px">
                            </div>
                            <div class="carousel-item active carousel-item-start bg-dark" style="height: 600px;">
                                <img  src="https://scontent.fbkk5-7.fna.fbcdn.net/v/t39.30808-6/263457131_5341526952530451_1928673339556558494_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=730e14&_nc_ohc=DPPf7W9hTuYAX9_wO4Q&_nc_ht=scontent.fbkk5-7.fna&oh=00_AT_eN0l3r2UqBvLU_Yl2L0Qz_ZL5kQkRhHM-C8QUprhtNg&oe=61BF2F0A" class="d-block w-100" height="440px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>บรรยากาศในห้องเรียน</h3>
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
    <!-- กล่อง 3 -->
    <div class="card container border-dark border-3  mb-5 py-4 bg-secondary ">
        <div class="container mb-4 text-center">
            <h1 class="display-5 text-white mb-4">หัวข้อถัดไป </h1>
        </div>
    </div>
    <!-- กล่อง 4 -->
    <div class="card container border-dark border-3  mb-5 py-4 bg-secondary ">
        <div class="container mb-4 text-center">
            <h1 class="display-5 text-white mb-4">หัวข้อถัดไป </h1>
        </div>
    </div>
    <!-- context ปิด -->
    <!-- foorter เปิด -->
    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <a name="foorter"></a>
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2021 Copyright: <a class="text-white" href="#">Gang Sor Sor</a></div>
    </footer>
    <!-- foorter ปิด -->
    <div class="container-fluid text-end  fixed-bottom">
        <button style="width: 50px; height: 50px;" class="btn-dark" onclick="jump('top')">^</button>
    </div>
</body>
<script>
    let timerInterval
    Swal.fire({
        title: 'ยินดีต้อนรับเข้าสู่เว็บไซต์',
        html: 'หน้าต่างจะปิดใน <b></b> ms.',
        backdrop: 'rgba(0, 0, 0, 0.9)',
        timer: 2000,
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
    function jump(h) {
        let url = location.href;
        location.href = "#" + h;
        history.replaceState(null, null, url);
    }
</script>
</html>
