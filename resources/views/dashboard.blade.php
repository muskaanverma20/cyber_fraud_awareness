@extends('layouts.app')

@section('content')

@php
$user = auth()->user();
$reports = $fraudReports;

$totalReports = $reports->count();
$resolvedReports = $reports->where('status','Resolved')->count();
$pendingReports = $reports->where('status','Pending')->count();
$rejectedReports = $reports->where('status','Rejected')->count();
@endphp

<div class="user-dashboard mt-5">

    <!-- SIDEBAR -->
    <aside class="dashboard-sidebar">

        <div>

            <!-- LOGO -->
            <div class="dashboard-logo">

                <div class="dashboard-logo-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>

                <div>
                    <h2>CYBER FRAUD</h2>
                    <p>AWARENESS</p>
                </div>

            </div>

            <!-- MENU -->
            <ul class="dashboard-menu">

                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="#myReports">
                        <i class="fas fa-file-alt"></i>
                        My Reports
                    </a>
                </li>

                <li>
                    <a href="{{ route('check-status') }}">
                        <i class="fas fa-search"></i>
                        Check Status
                    </a>
                </li>

                <li>
                    <a href="{{ route('report') }}">
                        <i class="fas fa-edit"></i>
                        Submit Report
                    </a>
                </li>

                <li>
                    <a href="#profileSection">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}">
                        <i class="fas fa-headset"></i>
                        Contact Support
                    </a>
                </li>

                @if($user->role === 'admin')
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-user-shield"></i>
                        Admin Dashboard
                    </a>
                </li>
                @endif

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="dashboard-logout-btn">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </button>
                    </form>
                </li>

            </ul>

        </div>

        <!-- SAFETY BOX -->
        <div class="dashboard-safe-box">

            <i class="fas fa-shield-virus"></i>

            <div>
                <h4>Stay Safe Online</h4>

                <p>
                    Be aware.
                    <br>
                    Be alert.
                    <br>
                    Be secure.
                </p>
            </div>

        </div>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="dashboard-main">

        <!-- TOPBAR -->
        <div class="dashboard-topbar">

            <div class="dashboard-top-left">

                <button id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>

            </div>

            <div class="dashboard-top-right">

                <!-- NOTIFICATION -->
                <div class="dashboard-bell">

                    <i class="far fa-bell"></i>

                    <span>3</span>

                </div>

                <!-- PROFILE -->
                <div class="dashboard-user">

                    @if($user->avatar)

                        <img src="{{ $user->avatar }}" alt="profile">

                    @else

                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}"
                             alt="profile">

                    @endif

                    <span>
                        {{ $user->name }}
                    </span>

                </div>

            </div>

        </div>

        <!-- WELCOME -->

            <div class="dash-board-heading">

    <h2 class="dashboard-welcome-title">
        Welcome, {{ $user->name }} 👋
    </h2>

            <p>
                Here's what's happening with your account today.
            </p>

        </div>

        <!-- STATS -->
        <div class="dashboard-stats">

            <!-- TOTAL -->
            <div class="dashboard-stat-card total-card">

                <div class="dashboard-stat-icon blue-bg">
                    <i class="fas fa-file-alt"></i>
                </div>

                <div>
                    <p>Total Reports</p>
                    <h2>{{ $totalReports }}</h2>
                </div>

            </div>

            <!-- RESOLVED -->
            <div class="dashboard-stat-card resolved-card">

                <div class="dashboard-stat-icon green-bg">
                    <i class="fas fa-check"></i>
                </div>

                <div>
                    <p>Resolved</p>
                    <h2>{{ $resolvedReports }}</h2>
                </div>

            </div>

            <!-- PENDING -->
            <div class="dashboard-stat-card pending-card">

                <div class="dashboard-stat-icon yellow-bg">
                    <i class="fas fa-clock"></i>
                </div>

                <div>
                    <p>In Progress</p>
                    <h2>{{ $pendingReports }}</h2>
                </div>

            </div>

            <!-- REJECTED -->
            <div class="dashboard-stat-card rejected-card">

                <div class="dashboard-stat-icon red-bg">
                    <i class="fas fa-times"></i>
                </div>

                <div>
                    <p>Rejected</p>
                    <h2>{{ $rejectedReports }}</h2>
                </div>

            </div>

        </div>

        <!-- CONTENT AREA -->
        <div class="dashboard-grid">

            <!-- REPORTS -->
            <section class="dashboard-box" id="myReports">

                <div class="dashboard-box-header">

                    <h2>Recent Reports</h2>

                    <a href="{{ route('check-status') }}">
                        View all
                    </a>

                </div>

                <div class="dashboard-table-wrapper">

                    <table class="dashboard-table">

                        <thead>

                            <tr>

                                <th>#</th>
                                <th>Complaint ID</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($reports->take(5) as $report)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>CF{{ $report->id }}</td>

                                <td>{{ $report->fraud_type }}</td>

                                <td>

                                    <span class="dashboard-status {{ strtolower($report->status) }}">
                                        {{ $report->status }}
                                    </span>

                                </td>

                                <td>
                                    {{ $report->created_at->format('d M Y') }}
                                </td>

                                <td>

                                    <a href="{{ route('check-status') }}"
                                       class="dashboard-view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="6">
                                    No Reports Found
                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </section>

            <!-- PROFILE -->
            <section class="dashboard-box" id="profileSection">

                <h2>My Profile</h2>

                <br>

                <div class="dashboard-profile-box">

                    @if($user->avatar)

                        <img src="{{ $user->avatar }}" alt="profile">

                    @else

                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}"
                             alt="profile">

                    @endif

                    <div>

                        <h3>{{ $user->name }}</h3>

                        <p>{{ $user->email }}</p>

                        <span>
                            Member since
                            {{ $user->created_at->format('d M Y') }}
                        </span>

                    </div>

                </div>

                <br>

                <a href="{{ route('contact') }}"
                   class="dashboard-edit-btn">

                    <i class="fas fa-user-edit"></i>

                    Edit Profile

                </a>

            </section>

            <!-- QUICK ACTION -->
            <section class="dashboard-box">

                <h2>Quick Actions</h2>

                <br>

                <div class="dashboard-quick-grid">
                
                    <a href="{{ route('report') }}"
                       class="dashboard-quick-card">

                        <i class="fas fa-file-signature purple"></i>

                        <h4>Submit Report</h4>

                        <p>Report a cyber fraud</p>

                    </a>
                    <a href="{{ route('check-status') }}"
                       class="dashboard-quick-card">

                        <i class="fas fa-search blue"></i>

                        <h4>Check Status</h4>

                        <p>Track your complaint</p>

                    </a>
                    <a href="{{ url('/tips') }}"
                       class="dashboard-quick-card ">

                        <i class="fas fa-shield-alt green"></i>

                        <h4>Safety Tips</h4>

                        <p>Stay safe online</p>

                    </a>
                    <a href="{{ route('contact') }}"
                       class="dashboard-quick-card ">

                        <i class="fas fa-headset orange"></i>

                        <h4>Contact Support</h4>

                        <p>Get help & support</p>

                    </a>

                </div>

            </section>

            <!-- SAFETY TIPS -->
            <section class="dashboard-box">

                <h2>Online Safety Tips</h2>

                <br>

                <ul class="dashboard-tips">

                    <li>
                        <i class="fas fa-check-circle"></i>
                        Never share OTP or password.
                    </li>

                    <li>
                        <i class="fas fa-check-circle"></i>
                        Verify links before clicking.
                    </li>

                    <li>
                        <i class="fas fa-check-circle"></i>
                        Report suspicious activity immediately.
                    </li>

                    <li>
                        <i class="fas fa-check-circle"></i>
                        Keep your apps updated.
                    </li>

                </ul>

                <br>

                <a href="{{ url('/tips') }}"
                   class="dashboard-learn-btn">

                    Learn More

                </a>

            </section>

        </div>

        <!-- FOOTER -->
        <div class="dashboard-footer">

            © {{ date('Y') }}
            Cyber Fraud Awareness.
            All rights reserved.

        </div>

    </main>

</div>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.user-dashboard{
    display:flex;
    min-height:100vh;
    background:#b9f2fd !important;
}

/* SIDEBAR */

.dashboard-sidebar{
    width:270px;
    background:linear-gradient(180deg,#07152d,#0f2e61) !important;
    padding:20px;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    transition:0.3s;
}

.dashboard-logo{
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:25px;
}

.dashboard-logo-icon{
    width:55px;
    height:55px;
    background:#b9f2fd !important;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
    color:#031133 !important;
}

.dashboard-logo h2{
    margin:0;
    font-size:24px;
    color:#fff !important;
}

.dashboard-logo p{
    margin:0;
    letter-spacing:4px;
    color:#bfc9ff !important;
}

.dashboard-menu{
    list-style:none;
    padding:0;
    margin:0;
}

.dashboard-menu li{
    margin-bottom:6px;
}

.dashboard-menu li a,
.dashboard-logout-btn{
    width:100%;
    border:none;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:12px;
    padding:13px 14px;
    border-radius:12px;
    color:#ffffff !important;
    background:none;
    cursor:pointer;
    font-size:15px;
    transition:.3s;
}

.dashboard-menu li a i,
.dashboard-logout-btn i{
    color:#b9f2fd !important;
    font-size:16px;
}

.dashboard-menu li.active a{
    background:#b9f2fd !important;
    color:#031133 !important;
    font-weight:600;
}

.dashboard-menu li.active a i{
    color:#031133 !important;
}

.dashboard-menu li a:hover,
.dashboard-logout-btn:hover{
    background:rgba(255,255,255,.12) !important;
}

/* SAFETY BOX */

.dashboard-safe-box{
    background:rgba(255,255,255,.08) !important;
    padding:18px;
    border-radius:18px;
    display:flex;
    align-items:center;
    gap:14px;
    margin-top:15px;
}

.dashboard-safe-box i{
    font-size:38px;
    color:#6ea8ff !important;
}

.dashboard-safe-box h4{
    margin:0 0 5px;
    color:#fff !important;
}

.dashboard-safe-box p{
    margin:0;
    color:#d7ddff !important;
    font-size:14px;
}

/* MAIN */

.dashboard-main{
    flex:1;
    padding:25px;
}

/* TOPBAR */

.dashboard-topbar{
    background:#ffffff !important;
    border-radius:18px;
    padding:18px 25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
    box-shadow:0 4px 20px rgba(0,0,0,0.05);
}

#menuToggle{
    border:none;
    background:none;
    font-size:24px;
    cursor:pointer;
    color:#111827 !important;
}

.dashboard-top-right{
    display:flex;
    align-items:center;
    gap:25px;
}

.dashboard-bell{
    position:relative;
    font-size:22px;
    color:#111827 !important;
}

.dashboard-bell span{
    position:absolute;
    top:-8px;
    right:-10px;
    width:18px;
    height:18px;
    background:red !important;
    color:white !important;
    border-radius:50%;
    font-size:11px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.dashboard-user{
    display:flex;
    align-items:center;
    gap:10px;
}

.dashboard-user span{
    color:#111827 !important;
    font-weight:600;
    font-size:15px;
}

.dashboard-user img{
    width:45px;
    height:45px;
    border-radius:50%;
    object-fit:cover;
}

/* HEADING */

.dash-board-heading{
    margin-bottom:25px;
}
.dashboard-welcome-title{
    font-size:40px ;
    margin-bottom:8px ;
    color:#031133;
    font-weight:700 ;
}


.dashboard-heading-custom p{
    color:#4b5563 !important;
    font-size:16px;
}

/* STATS */

.dashboard-stats{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:30px;
}

.dashboard-stat-card{
    border-radius:18px;
    padding:25px;
    display:flex;
    gap:18px;
    align-items:center;
    box-shadow:0 4px 15px rgba(0,0,0,0.05);
}

.total-card{
    background:#eef4fe !important;
    
}

.resolved-card{
    background:#e9fff2 !important;
}

.pending-card{
    background:#fff8df !important;
}

.rejected-card{
    background:#fff0f0 !important;
}

.dashboard-stat-card h2{
    color:#111827 !important;
}

.dashboard-stat-card p{
    color:#4b5563 !important;
}

.dashboard-stat-icon{
    width:68px;
    height:68px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white !important;
    font-size:24px;
}

.blue-bg{
    background:#2962ff !important;
}

.green-bg{
    background:#18b663 !important;
}

.yellow-bg{
    background:#f4b400 !important;
}

.red-bg{
    background:#ff4444 !important;
}

/* GRID */

.dashboard-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
}

.dashboard-box{
    background:#ffffff !important;
    border-radius:20px;
    padding:25px;
    box-shadow:0 4px 20px rgba(0,0,0,0.05);
}

/* TABLE */

.dashboard-box-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:15px;
}

.dashboard-box-header h2{
    color:#111827 !important;
}

.dashboard-box-header a{
    color:#4f5fff !important;
    text-decoration:none;
}

.dashboard-table-wrapper{
    overflow-x:auto;
}

.dashboard-table{
    width:100%;
    border-collapse:collapse;
}

.dashboard-table th,
.dashboard-table td{
    padding:15px;
    border-bottom:1px solid #eee;
    text-align:left;
}

.dashboard-table th{
    background:#f7f8fc !important;
    color:#111827 !important;
}

.dashboard-table td{
    color:#374151 !important;
}

.dashboard-status{
    padding:7px 14px;
    border-radius:20px;
    font-size:13px;
    font-weight:bold;
}

.dashboard-status.pending{
    background:#fff4d1 !important;
    color:#e59b00 !important;
}

.dashboard-status.resolved{
    background:#dcfce7 !important;
    color:#16a34a !important;
}

.dashboard-status.rejected{
    background:#ffe4e6 !important;
    color:#dc2626 !important;
}

.dashboard-view-btn{
    border:1px solid #4f5fff !important;
    color:#4f5fff !important;
    padding:8px 15px;
    border-radius:10px;
    text-decoration:none;
    display:inline-block;
}

/* PROFILE */

.dashboard-profile-box{
    display:flex;
    gap:18px;
    align-items:center;
}

.dashboard-profile-box img{
    width:90px;
    height:90px;
    border-radius:50%;
    object-fit:cover;
}

.dashboard-edit-btn{
    display:block;
    text-align:center;
    padding:14px;
    border-radius:12px;
    text-decoration:none;
    background:#eef2ff !important;
    color:#4f5fff !important;
    font-weight:bold;
}

/* QUICK */

.dashboard-quick-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
}

.dashboard-quick-card{
    border:1px solid #eee;
    border-radius:16px;
    padding:20px;
    text-decoration:none;
    color:#111 !important;
    transition:.3s;
    background:#fff !important;
}

.dashboard-quick-card:hover{
    transform:translateY(-3px);
}

.dashboard-quick-card h4{
    color:#111827 !important;
}

.dashboard-quick-card p{
    color:#6b7280 !important;
}

.dashboard-quick-card i{
    font-size:28px;
    margin-bottom:15px;
    background:none ;
}
.dashboard-quick-card i.purple{
    color:#9b5cff;

}

.dashboard-quick-card i.blue{
    color:#2962ff !important;
}

.dashboard-quick-card i.green{
    color:#18b663 !important;
}

.dashboard-quick-card i.orange{
    color:#ff8a3d !important;
}
 .purple-box1{
    background:#e8bcf0;
 }
 .blue-box1{
    background:#bbdffb;
 }
.green-box1{
    background:#abf7b1;
 }
.orange-box1{
    background:#f5c77e;
 }

/* TIPS */

.dashboard-tips{
    list-style:none;
    padding:0;
}

.dashboard-tips li{
    margin-bottom:16px;
    color:#333 ;
}

.dashboard-tips i{
    color:#18b663 ;
    margin-right:10px;
}

.dashboard-learn-btn{
    display:block;
    text-align:center;
    padding:14px;
    background:#eef2ff !important;
    color:#4f5fff !important;
    border-radius:12px;
    text-decoration:none;
    font-weight:bold;
}

/* FOOTER */

.dashboard-footer{
    margin-top:30px;
    text-align:center;
    color:#777 !important;
}

/* MOBILE */

@media(max-width:1100px){

    .dashboard-stats{
        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:900px){

    .user-dashboard{
        flex-direction:column;
    }

    .dashboard-sidebar{
        position:fixed;
        left:-100%;
        top:0;
        height:100%;
        z-index:1000;
    }

    .dashboard-sidebar.showSidebar{
        left:0;
    }

    .dashboard-main{
        width:100%;
        padding:15px;
    }

    .dashboard-grid{
        grid-template-columns:1fr;
    }

    .dashboard-stats{
        grid-template-columns:1fr;
    }

    .dashboard-quick-grid{
        grid-template-columns:1fr;
    }

}

</style>

<script>

const menuToggle = document.getElementById("menuToggle");
const sidebar = document.querySelector(".dashboard-sidebar");

menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("showSidebar");
});

</script>

@endsection