<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>SOBHA Project Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="d-flex" style="min-height:100vh;">
    <aside class="sidebar">
      <div>
        <div class="sobha-logo">SOBHA</div>
        <div class="menu-label">MAIN MENU</div>
        <a href="/dashboard" class="menu-btn {{ request()->is('dashboard') ? 'active' : '' }}">
  Daily Target V/S Plan
</a>

<a href="/config" class="menu-btn {{ request()->is('config') ? 'active' : '' }}">
  Project Configuration
</a>
      </div>
      <div class="sidebar-user">
        <div class="avatar"></div>
        <div class="sidebar-user-info">
          <div class="emp">Mr. Ramakrishnan</div>
          <div class="role">SOU 1 - Engineer</div>
        </div>
      </div>
    </aside>
    <main class="main-content flex-grow-1">
      @yield('content')
    </main>
  </div>
</body>
</html>
