<h2 class="h5 no-margin-bottom">Dashboard</h2>
</div>
</div>
<section class="no-padding-top no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <!-- Total Clients Box -->
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="icon-user-1"></i></div>
              <strong>Total Clients</strong>
            </div>
            <div class="number dashtext-1">{{$user}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
          </div>
        </div>
      </div>

      <!-- Total Products Box -->
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="icon-contract"></i></div>
              <strong>Total Products</strong>
            </div>
            <div class="number dashtext-2">{{$product}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
          </div>
        </div>
      </div>

      <!-- Total Orders Box -->
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="icon-paper-and-pencil"></i></div>
              <strong>Total Orders</strong>
            </div>
            <div class="number dashtext-3">{{$order}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
          </div>
        </div>
      </div>

      <!-- Total Delivered Box -->
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="icon-writing-whiteboard"></i></div>
              <strong>Total Delivered</strong>
            </div>
            <div class="number dashtext-4">{{$delivered}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pie Charts Section -->
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="chart-block block">
          <h4 class="chart-title">Clients Breakdown</h4>
          <canvas id="clientsPieChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="chart-block block">
          <h4 class="chart-title">Products Breakdown</h4>
          <canvas id="productsPieChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="chart-block block mt-4">
          <h4 class="chart-title">Orders Breakdown</h4>
          <canvas id="ordersPieChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="chart-block block mt-4">
          <h4 class="chart-title">Delivery Breakdown</h4>
          <canvas id="deliveredPieChart"></canvas>
        </div>
      </div>
    </div>
  </div>
</section>



<style>
/* General Styling for Statistic Boxes */
.statistic-block {
  padding: 40px;
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease-in-out;
}

.statistic-block:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.statistic-block .title {
  font-size: 1.3rem;
  font-weight: bold;
  color: #495057;
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.statistic-block .number {
  font-size: 3rem;
  font-weight: bold;
  color: #007bff;
}

.chart-block {
  padding: 30px;
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
  text-align: center;
}

.chart-title {
  font-size: 1.5rem;
  font-weight: bold;
  color: #6c757d;
  margin-bottom: 20px;
}

canvas {
  margin: auto;
  display: block;
  width: 100%;
  max-width: 300px;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const clientsPieChart = document.getElementById("clientsPieChart").getContext("2d");
  new Chart(clientsPieChart, {
    type: "doughnut",
    data: {
      labels: ["Active", "Inactive"],
      datasets: [
        { data: [70, 30], backgroundColor: ["#007bff", "#f1f1f1"] },
      ],
    },
  });

  const productsPieChart = document.getElementById("productsPieChart").getContext("2d");
  new Chart(productsPieChart, {
    type: "doughnut",
    data: {
      labels: ["In Stock", "Out of Stock"],
      datasets: [
        { data: [80, 20], backgroundColor: ["#28a745", "#f1f1f1"] },
      ],
    },
  });

  const ordersPieChart = document.getElementById("ordersPieChart").getContext("2d");
  new Chart(ordersPieChart, {
    type: "doughnut",
    data: {
      labels: ["Completed", "Pending"],
      datasets: [
        { data: [60, 40], backgroundColor: ["#ffc107", "#f1f1f1"] },
      ],
    },
  });

  const deliveredPieChart = document.getElementById("deliveredPieChart").getContext("2d");
  new Chart(deliveredPieChart, {
    type: "doughnut",
    data: {
      labels: ["Delivered", "Undelivered"],
      datasets: [
        { data: [50, 50], backgroundColor: ["#dc3545", "#f1f1f1"] },
      ],
    },
  });
</script>
