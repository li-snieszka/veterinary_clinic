
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <div class="nav-con">
    <?= $this->Html->image('/img/logo.png', array('height' => '60', 'width' => '60','url' => array(
    'action' => '/'
    ))); ?>
    </div>
    <!--- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav-bar collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active underline-item" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link underline-item" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle underline-item" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Options
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Add visit</a></li>
            <li><a class="dropdown-item" href="#">Manage Visits</a></li>
            <li><a class="dropdown-item" href="#">Manage Doctors</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link underline-item" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>