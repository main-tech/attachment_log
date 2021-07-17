@extends('layouts.app')
@section('content')
<!--dashboard
<br>
<form action="{{route('logout')}}" method="post">
@csrf
<button type="submit">Logout</button>
</form>
	<br>
	Student Name: {{$student['first_name']}} {{$student['last_name']}}
	<br>
	School: {{$student['school']}}
	<br>
	Course: {{$student['course']}}
	<br>
	-->
	<input type="checkbox" id="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h1><span><img src="img/jkuat-logo.png" width="50px" height="50px" alt=""></span><span>Internship</span></h1>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li><a href="" class="active"><span class="las la-igloo"></span>
          <span>Dashboard</span></a>
        </li>
		<form type="POST">
		@csrf
        <li><a href="daily-entry"><span class="las la-pen-nib"></span>
          <span>New Daily Entry</span></a>
        </li>
		</form>
        <li><a href=""><span class="las la-list"></span>
          <span>View Daily Entries</span></a>
        </li>
        <li><a href="weekly-report"><span class="lar la-edit"></span>
          <span>Write Weekly Report</span></a>
        </li>
        <li><a href=""><span class="las la-clipboard-list"></span>
          <span>View Weekly Reports</span></a>
        </li>
      </ul>
    </div>
  </div>


  <div class="main-content">

    <header>
      <h2>
        <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
        Dashboard
      </h2>
      <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here">
      </div>
      <div class="user-wrapper">
        <img src="img/img.png" width="40px" height="40px" alt="">
        <div>
          <h4>{{$student['first_name']}} {{$student['last_name']}}</h4>
          <small>Student Account</small>
		  
        </div>
		<form action="{{route('logout')}}" method="post">
@csrf
<button type="submit">Logout</button>
</form>
      </div>
    </header>


    <main>

      <div class="cards">
        <div class="card-single">
          <div>
            <h1>21</h1>
            <span>Daily Entries</span>
          </div>
          <div>
            <span class="las la-tasks"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>2</h1>
            <span>Projects</span>
          </div>
          <div>
            <span class="las la-project-diagram"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>3</h1>
            <span>Weekly Reports</span>
          </div>
          <div>
            <span class="las la-calendar-check"></span>
          </div>
        </div>

        <div class="card-single">
          <div>
            <h1>2</h1>
            <span>Supervisors</span>
          </div>
          <div>
            <span class="las la-user-check"></span>
          </div>
        </div>
      </div>

      <div class="recent-grid">

        <div class="projects">

          <div class="card">

            <div class="card-header">
              <h2>Recent Projects</h2>
              <button>See all<span class="las la-arrow-right"></span></button>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table width="100%">
                  <thead>
                    <tr>
                      <td>Project Title</td>
                      <td>Department</td>
                      <td>Status</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>UI/UX Design</td>
                      <td>UI Team</td>
                      <td><span class="status purple"></span>
                        review
                      </td>
                    </tr>

                    <tr>
                      <td>Web Development</td>
                      <td>FrontEnd</td>
                      <td><span class="status pink"></span>
                        in progress
                      </td>
                    </tr>

                    <tr>
                      <td>Ushop App</td>
                      <td>Mobile Team</td>
                      <td><span class="status orange"></span>
                        pending
                      </td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
          </div>

        </div>


        <div class="customers">

          <div class="card">

            <div class="card-header">
              <h2>Supervisors</h2>
              <button>See all<span class="las la-arrow-right"></span></button>
            </div>

            <div class="card-body">
              <div class="customer">
                <div class="info">
                  <img src="img/img2.png" width="40px" height="40px" alt="">
                  <div>
                    <h4>Jane Doe</h4>
                    <small>Chair Dpt</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div class="info">
                <img src="img/img2.png" width="40px" height="40px" alt="">
                  <div>
                    <h4>Jane Doe</h4>
                    <small>Manager</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </main>
  </div>

	
@endsection 
