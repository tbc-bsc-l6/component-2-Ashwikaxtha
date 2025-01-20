<header class="header">
  <nav class="navbar navbar-expand-lg">
    <div class="search-panel">
      <div class="search-inner d-flex align-items-center justify-content-center">
        <div class="close-btn">Close <i class="fa fa-close"></i></div>
        <form id="searchForm" action="#">
          <div class="form-group">
            <input type="search" name="search" placeholder="What are you searching for...">
            <button type="submit" class="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="navbar-header">
        <!-- Navbar Header -->
        <a href="index.html" class="navbar-brand">
          <div class="brand-text brand-big visible text-uppercase">
            <strong class="text-primary">Admin</strong>&nbsp;&nbsp;<strong>Dashboard</strong>
          </div>
          <div class="brand-text brand-sm">
            <strong class="text-primary">D</strong><strong>A</strong>
          </div>
        </a>
      </div>

      <!-- Log out -->
      <div class="list-inline-item logout">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <input type="submit" value="Logout">
        </form>
      </div>
    </div>
  </nav>
</header>

<style>
/* Navbar Background Color */
.header {
  background-color: #ffffff; /* Set background color to white */
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow for separation */
  padding: 15px 0;
}

/* Navbar Text Styling */
.navbar-brand {
  text-decoration: none;
  color: #343a40; /* Dark text for better contrast */
  font-size: 1.2rem;
}

.navbar-brand .brand-big strong.text-primary {
  color: #007bff; /* Highlight primary text in blue */
}

.navbar-brand .brand-sm strong {
  color: #007bff; /* Highlight primary text in blue */
}

/* Logout Button Styling */
.list-inline-item.logout form input[type="submit"] {
  background-color: #ff6666; /* Set the button background color to pinkish red */
  color: #ffffff; /* Set the text color to white */
  border: none; /* Remove borders */
  border-radius: 25px; /* Make the button rounded */
  padding: 10px 20px; /* Add padding for better appearance */
  font-size: 14px; /* Set font size */
  font-weight: bold; /* Make the text bold */
  cursor: pointer; /* Add pointer cursor on hover */
  transition: background-color 0.3s ease; /* Add smooth hover transition */
}

.list-inline-item.logout form input[type="submit"]:hover {
  background-color: #e63946; /* Darker red on hover */
}

/* Search Panel */
.search-panel {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  z-index: 1000;
  display: none;
}

.search-inner {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.search-inner .close-btn {
  position: absolute;
  top: 20px;
  right: 20px;
  color: white;
  cursor: pointer;
}

.search-inner .form-group {
  display: flex;
  align-items: center;
}

.search-inner input[type="search"] {
  width: 300px;
  padding: 10px;
  border: none;
  border-radius: 25px 0 0 25px;
  outline: none;
  font-size: 16px;
}

.search-inner button.submit {
  padding: 10px 20px;
  border: none;
  background-color: #007bff;
  color: white;
  font-size: 16px;
  border-radius: 0 25px 25px 0;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.search-inner button.submit:hover {
  background-color: #0056b3;
}
</style>
