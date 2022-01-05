<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Remember to include jQuery :) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <div class="sidebar">
    <div class="logo-details">
      <img src="logo.png" alt="college logo">

    </div>
    <ul class="nav-links">
      <li>
        <a href="student_link" class="active">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <span class="links_name">Students</span>
        </a>
      </li>
      <li>
        <a href="teacher-link">
          <i class="fa fa-users" aria-hidden="true"></i>
          <span class="links_name">Teachers<span>
        </a>
      </li>
      <li>
        <a href="notice-link">
          <i class='bx bxs-notification'></i>
          <span class="links_name">Notice</span>
        </a>
      </li>
      <li>
        <a href="attendance-link">
          <i class='bx bxs-report'></i>
          <span class="links_name">Attendance Reports</span>
        </a>
      </li>
      <li>
        <a href="fee-link">
          <i class="fa fa-money" aria-hidden="true"></i>
          <span class="links_name">Fees Report</span>
        </a>
      </li>
      <li>
        <a href="exam-link">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span class="links_name">Exam</span>
        </a>
      </li>

      <li>
        <a href="admin-link">
          <i class='bx bx-add-to-queue'></i>
          <span class="links_name">Add Admins</span>
        </a>
      </li>
      <li>
        <a href="setting-link">
          <i class="fa fa-cog"></i>
          <span class="links_name">Accounts/Settings</span>
        </a>
      </li>
      <li>
        <a href="media-link">
          <i class="fa fa-file-image-o" aria-hidden="true"></i>
          <span class="links_name">Media</span>
        </a>
      </li>
      <li>
        <a href="calender-link">
          <i class="fa fa-calendar" aria-hidden="true"></i>
          <span class="links_name">Calender</span>
        </a>
      </li>
      <li>
        <a href="logout-link">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          <span class="links_name">Logout</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">GNC Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search'></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">{{ session('username')}}</span>
        <i class='bx bx-chevron-down'></i>
        <i style='font-size:24px' class='fa fa-user'></i>



      </div>
    </nav>




    <div class="home-content">
        @yield('content')

    </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    </script>

</body>

</html>