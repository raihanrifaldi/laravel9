@if ($user->level == 1)
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index">
      <img src="{{ asset('/') }}images/darillspetox.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">SPERCO</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">Speech to Text</li>

     {{-- <li>
       <a href="{{ url('layout/home') }}">
         <i class="zmdi zmdi-view-dashboard text-primary"></i> <span>Dashboard</span>
       </a>
     </li> --}}

     <li class="{{ request()->is('stt/app') ? 'active' : ''}}">
      <a href="{{ url('stt/app') }}" class="{{ request()->is('stt/app')? 'active' : '' }}">
        <i class="zmdi zmdi-audio text-success"></i> <span>Speech to Text App</span>
      </a>
    </li>

    {{-- <li>
      <a href="{{ url('stt/insert') }}">
        <i class="zmdi zmdi-format-list-bulleted text-warning"></i> <span>Input Data</span>
      </a>
    </li> --}}

     <li class="{{ request()->is('stt/index') ? 'active' : '' }}">
        <a href="{{ url('stt/index') }}" class="{{ request()->is('stt/index') ? 'active' : '' }}">
          <i class="zmdi zmdi-grid" style="color:orange"></i> <span>Speech Table</span>
        </a>
      </li>

      <li class="sidebar-header">Speaker Diarization</li>

      <li class="{{ request()->is('sd/speakerdiarization') ? 'active' : '' }}">
        <a href="{{ url('sd/speakerdiarization') }}" class="{{ request()->is('sd/speakerdiarization') ? 'active' : '' }}">
          <i class="zmdi zmdi-audio text-primary"></i> <span>Speaker Diarization App</span>
        </a>
      </li>

      <li class="{{ request()->is('sd/index') ? 'active' : '' }}">
        <a href="{{ url('sd/index') }}" class="{{ request()->is('sd/index') ? 'active' : '' }}">
          <i class="zmdi zmdi-grid" style="color:magenta"></i> <span>Speaker Diarization Table</span>
        </a>
      </li>

      <li class="sidebar-header">Account</li>

      <li class="{{ request()->is('akun/index') ? 'active' : '' }}">
        <a href="{{ url('akun/index') }}" class="{{ request()->is('akun/index') ? 'active' : '' }}">
          <i class="icon-user text-info"></i> <span>Account Table</span>
        </a>
      </li>

      <li class="sidebar-footer" style="position:">
        <a href="{{ url('/logout') }}">
          <i class="icon-power text-danger"></i> <span>Logout</span>
        </a>
      </li>

   </ul>
   <div class="overlay toggle-menu"></div>
  </div>

@elseif ($user->level == 2)
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="{{ asset('/') }}images/darillspetox.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">SPERCO</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">Speech To Text</li>

     {{-- <li>
       <a href="{{ url('layout/home') }}">
         <i class="zmdi zmdi-view-dashboard text-primary"></i> <span>Dashboard</span>
       </a>
     </li> --}}

    <li class="{{ request()->is('stt/app') ? 'active' : '' }}">
      <a href="{{ url('stt/app') }}" class="{{ request()->is('stt/app') ? 'active' : '' }}">
        <i class="zmdi zmdi-audio text-success"></i> <span>Speech To Text App</span>
      </a>
    </li>

    <li class="{{ request()->is('stt/indexforuser') ? 'active' : '' }}">
      <a href="{{ url('stt/indexforuser') }}" class="{{ request()->is('stt/indexforuserstt/app') ? 'active' : '' }}">
        <i class="zmdi zmdi-grid" style="color:orange"></i> <span>Speech Table</span>
      </a>
    </li>

    <li class="sidebar-header">Speaker Diarization</li>

    <li class="{{ request()->is('sd/speakerdiarization') ? 'active' : '' }}">
      <a href="{{ url('sd/speakerdiarization') }}" class="{{ request()->is('sd/speakerdiarization') ? 'active' : '' }}">
        <i class="zmdi zmdi-audio text-primary"></i> <span>Speaker Diarization App</span>
      </a>
    </li>

    <li class="{{ request()->is('sd/indexforuser') ? 'active' : '' }}">
      <a href="{{ url('sd/indexforuser') }}" class="{{ request()->is('sd/indexforuser') ? 'active' : '' }}">
        <i class="zmdi zmdi-grid" style="color:magenta"></i> <span>Speaker Diarization Table</span>
      </a>
    </li>

    {{-- <li>
      <a href="{{ url('stt/insert') }}">
        <i class="zmdi zmdi-format-list-bulleted text-warning"></i> <span>Input Data</span>
      </a>
    </li> --}}

    <li class="sidebar-header">Account</li>

      <li>
        <a href="{{ url('/logout') }}">
          <i class="icon-power text-danger"></i> <span>Logout</span>
        </a>
      </li>

   </ul>
   <div class="overlay toggle-menu"></div>
  </div>
@endif

  