<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> {{ $title }} </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=" {{asset('backend/assets/img/favicon.png')}} " rel="icon">
    <link href=" {{asset('backend/assets/img/apple-touch-icon.png')}} " rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}} " rel="stylesheet">
    <link href=" {{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}} " rel="stylesheet">
    <link href=" {{asset('backend/assets/vendor/quill/quill.snow.css')}} " rel="stylesheet">
    <link href=" {{asset('backend/assets/vendor/quill/quill.bubble.css')}} " rel="stylesheet">
    <link href=" {{asset('backend/assets/vendor/remixicon/remixicon.css')}} " rel="stylesheet">
    <link href=" {{asset('backend/assets/vendor/simple-datatables/style.css')}} " rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <!-- Template Main CSS File -->
    <link href=" {{asset('backend/assets/css/style.css')}} " rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.0/classic/ckeditor.js"></script>
    <style>
        #editor {
            height: 300px;
            border: 1px solid #ccc;
        }
        #second {
            height: 300px;
            border: 1px solid #ccc;
        }
    </style>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src=" {{asset('backend/assets/img/logo.png')}} " alt="">
                <span class="d-none d-lg-block">My Protfolio</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                      <i class="bi bi-chat-left-text"></i>
                      <span class="badge bg-success badge-number">{{App\Models\Message::where('status',0)->count()}}</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                      <li class="dropdown-header">
                        You have 3 new messages
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li class="message-item">
                        <a href="#">
                          <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                          <div>
                            <h4>Maria Hudson</h4>
                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                            <p>4 hrs. ago</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li class="message-item">
                        <a href="#">
                          <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                          <div>
                            <h4>Anna Nelson</h4>
                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                            <p>6 hrs. ago</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li class="message-item">
                        <a href="#">
                          <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                          <div>
                            <h4>David Muldon</h4>
                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                            <p>8 hrs. ago</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                      </li>

                    </ul><!-- End Messages Dropdown Items -->

                  </li><!-- End Messages Nav -->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src=" {{asset('backend/assets/img/profile-img.jpg')}} " alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href=" {{ route('profilepage') }} ">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('information.create')}}">
                    <i class="bi bi-plus-circle"></i>
                    <span>Add Information</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('skills.index')}}">
                    <i class="bi bi-star"></i>
                    <span>Show Skill</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('education.index')}}">
                    <i class="bi bi-book"></i>
                    <span>Show Education</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('experience.index')}}">
                    <i class="bi bi-briefcase"></i>
                    <span>Show Experience</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('category.index')}}">
                    <i class="bi bi-tags"></i>
                    <span>Show Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('services.index')}}">
                    <i class="bi bi-tags"></i>
                    <span>Show Services</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('section.index')}}">
                    <i class="bi bi-tags"></i>
                    <span>Show Sections</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('testimonial.index')}}">
                    <i class="bi bi-tags"></i>
                    <span>Show Testimonials</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('message.index')}}">
                    <i class="bi bi-envelope"></i>
                    <span>Show Messages</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>
            <!-- End Contact Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        {{ $slot }}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src=" {{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}} "></script>
    <script src=" {{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    <script src=" {{asset('backend/assets/vendor/chart.js/chart.umd.js')}} "></script>
    <script src=" {{asset('backend/assets/vendor/echarts/echarts.min.js')}} "></script>
    <script src=" {{asset('backend/assets/vendor/quill/quill.js')}} "></script>
    <script src=" {{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}} "></script>
    <script src=" {{asset('backend/assets/vendor/tinymce/tinymce.min.js')}} "></script>
    <script src=" {{asset('backend/assets/vendor/php-email-form/validate.js')}} "></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



    <!-- Template Main JS File -->
    <script src=" {{asset('backend/assets/js/main.js')}} "></script>


    <script>
        $(document).ready(function() {
            $(".select-tagable").select2({
                tags: true,
                width:'resolve',
                tokenSeparators: [',', ' ']
            });
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'underline', '|',
                    'bulletedList', 'numberedList', '|', // List options
                    'link', 'imageUpload', '|',
                    'undo', 'redo'
                ],
                ckfinder: {
                    uploadUrl: '/your-upload-endpoint' // Replace with your upload handler
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#second'), {
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'underline', '|',
                    'bulletedList', 'numberedList', '|', // List options
                    'link', 'imageUpload', '|',
                    'undo', 'redo'
                ],
                ckfinder: {
                    uploadUrl: '/your-upload-endpoint' // Replace with your upload handler
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        function updateMessageCount() {
            $.ajax({
                url: '/ajax/message-count',
                method: 'GET',
                success: function(data) {
                    // Update the badge with the new count
                    $('.badge-number').text(data.count);
                }
            });
        }

        // Call updateMessageCount every 5 seconds (5000 milliseconds)
        setInterval(updateMessageCount, 5000);
    </script>




</body>

</html>
