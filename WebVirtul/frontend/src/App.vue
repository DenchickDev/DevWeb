<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <router-link to="/">
          <a class="navbar-brand" style="color: white">ViRTul</a>
        </router-link>
      </nav>
    </header>
    <main>
      <router-view/>
    </main>
    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2019 ViRTul Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </div>

</template>