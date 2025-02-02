<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    .sidebar-custom {
        background-color: #0d6efd;
        background-image: linear-gradient(to bottom, #0d6efd, #0a58ca);
        min-height: 100vh;
        width: 250px;
        position: fixed;
        left: 0;
        top: 0;
        padding-top: 20px;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        z-index: 1000;
    }
    .sidebar-custom .brand {
        color: #ffffff;
        font-weight: bold;
        font-size: 1.5rem;
        padding: 15px 20px;
        margin-bottom: 30px;
        text-align: center;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .sidebar-custom .nav-link {
        color: #ffffff;
        padding: 12px 20px;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        border-radius: 5px;
        margin: 5px 10px;
    }
    .sidebar-custom .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
    }
    .sidebar-custom .nav-link.active {
        color: #0d6efd;
        font-weight: bold;
        background-color: #ffffff;
    }
    .sidebar-custom .nav-link i {
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }
    .sidebar-custom .logout-btn {
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
        padding: 10px;
        text-align: center;
        background-color: #dc3545;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        transition: all 0.3s;
    }
    .sidebar-custom .logout-btn:hover {
        background-color: #c82333;
    }
    .content-wrapper {
        margin-left: 250px;
        padding: 20px;
    }
    @media (max-width: 768px) {
        .sidebar-custom {
            width: 60px;
        }
        .sidebar-custom .brand, .sidebar-custom .nav-link span {
            display: none;
        }
        .sidebar-custom .nav-link {
            justify-content: center;
            padding: 15px 0;
        }
        .sidebar-custom .nav-link i {
            margin-right: 0;
        }
        .sidebar-custom .logout-btn {
            left: 10px;
            right: 10px;
            padding: 10px 0;
        }
        .sidebar-custom .logout-btn span {
            display: none;
        }
        .content-wrapper {
            margin-left: 60px;
        }
    }
</style>

<div class="sidebar-custom">
    <div class="brand">
        <i class="fas fa-coins me-2"></i>Petty Cash
    </div>
    <nav class="nav flex-column">
        <a class="nav-link {{ Request::is('homes') ? 'active' : '' }}" href="/homes">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a class="nav-link {{ Request::is('uangkas') || Request::is('uangkas/create') || Request::is('uangkas/*/edit') || Request::is('uangkas/*/detail') ? 'active' : '' }}" href="{{ route('uangkas.index') }}">
            <i class="fas fa-list-alt"></i>
            <span>Daftar Transaksi</span>
        </a>
        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">
            <i class="fas fa-info-circle"></i>
            <span>About</span>
        </a>
    </nav>
    <a href="/" class="btn logout-btn">
        <i class="fas fa-sign-out-alt me-2"></i>
        <span>Logout</span>
    </a>
</div>

