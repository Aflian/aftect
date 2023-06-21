<nav class="navbar navbar-expand-sm justify-content-center navbar-dark bg-primary">
    <div class="container-fluid mx">
      <a class="navbar-brand fw-bolder fs-6"  href="/">AFTECT | {{ $title }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link {{ ($title === "dashboard") ? 'active' : '' }}" aria-current="page" href="dashboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "jokian" ? 'active' : '') }}" href="jokian">JOKI</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>