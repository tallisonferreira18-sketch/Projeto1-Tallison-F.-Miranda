<!-- Compensa o espaço do topo fixo -->
<style>
    body {
      position: relative;
      padding-top: 80px;
    }
</style>

<!-- The scrollable area -->
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<!-- The navbar - The <a> elements are used to jump to a section in the scrollable area -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#section1">Section 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section2">Section 2</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Section 1 -->
<div id="section1" class="container-fluid bg-success text-white" style="padding:100px 20px;">
  <h1>Section 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

<!-- Section 2 -->
<div id="section2" class="container-fluid bg-warning" style="padding:100px 20px;">
  <h1>Section 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

</body>