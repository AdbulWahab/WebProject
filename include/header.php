<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <!-- <a class="navbar-brand" href="/">
      <img src="/image/logo-white.png" width="30" height="30" alt="">
    </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <!--span class="sr-only">(current)</span--></a>
        </li>

        <!-- <% if (locals.user && locals.user.role !== 'ADMIN') { %>
        <li class="nav-item">
          <a class="nav-link" href="/codes/paid">History</a>
        </li>
        <% } %>
        <% if (locals.user && locals.user.role !== 'ADMIN') { %>
          <li class="nav-item">
            <a class="nav-link" href="/codes/status">Status</a>
          </li>
          <% } %>
        <% if (locals.user && locals.user.role === 'ADMIN') { %>
        <li class="nav-item">
          <a class="nav-link" href="/users">Users</a>
        </li>
        <% } %> -->

      </ul>

      <ul class="navbar-nav">
          <?php
          if(logged_in() === true) 
          {
                global $user_data;
                if (is_admin($user_data['user_id']) === true )
                {
                  ?>
                  <li class="nav-item"><a class="nav-link" href="register.php">Add User</a></li>
                  <?php 
                } ?>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php 
          } 
          else { ?>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          <?php } ?>
      </ul>
    </div>
  </div>
</nav>