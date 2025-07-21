<template>
  <div>
    <!-- HEADER TOP -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <span class="page-header">PROJECT CONTROL</span>
      <div>
        <button class="btn-rounded">Save Plan</button>
        <button class="btn-rounded">Submit Plan</button>
      </div>
    </div>


    <div class="gray-main">

    <!-- FILTER BAR -->
    <div class="filter-bar">
      <label>Filter By</label>
      <select class="form-select form-select-sm w-auto"><option>Project</option></select>
      <select class="form-select form-select-sm w-auto"><option>Division</option></select>
      <select class="form-select form-select-sm w-auto"><option>Sub-Division</option></select>
      <select class="form-select form-select-sm w-auto"><option>Tower</option></select>
      <input type="date" class="form-control form-control-sm w-auto" />
      <button class="btn-search">
        <svg width="20" height="20" fill="none" stroke="currentColor">
          <circle cx="9" cy="9" r="7" stroke-width="2"/>
          <line x1="15" y1="15" x2="19" y2="19" stroke-width="2"/>
        </svg>
      </button>
      <button class="btn-expand">Expand All</button>
    </div>

    <!-- TOP ACTIVITY CARD -->
    <div class="activity-card">
      <!-- Header row: Title | Totals | Dates (all in one line) -->
      <div class="activity-header-row">

       
      <div>
        <div>Activity Name</div>
        <span class="fw-bold activity-title">Floor Tiling -</span> WO1-TA-L6-TL<br>
        <span class="activity-info">
          Total Quantity: 1000 m²&nbsp;&nbsp;Man Days: 250 Days
        </span>

        </div>
        <span>
          <span class="date-green">Start Date:</span> 18 - April - 2025
          <span class="date-red ms-3">Finish Date:</span>
         20 - April - 2025</span>
      </div>
      <div class="section-divider"></div>

      <!-- SUB ACTIVITY 1 -->
      <div>
       
<div class="d-flex justify-content-between align-items-start flex-wrap">

    <!-- LEFT SECTION -->
    <div class="left-info" style="flex: 1; min-width: 250px; margin-right: 20px;">
        <div class="text-muted small mb-1">Sub-Activity Name</div>
        <div class="fw-semibold mb-1 subactivity-title">Wall Tiling - <span class="fw-normal">WO1-TA-L6-TL-001</span></div>
        <div class="productivity-info mb-1">
            ASTP Productivity: <b>4</b>&nbsp;&nbsp; Planned Manpower: <b>29</b>
        </div>
        <div class="productivity-info mb-1">
            <span class="fw-semibold">Start Date:</span> 18 - April - 2025 &nbsp;&nbsp;
            <span class="fw-semibold">Finish Date:</span> 20 - April - 2025
        </div>
    </div>

    <!-- RIGHT SECTION -->
    <div class="d-flex align-items-end flex-wrap gap-3">
        <div class="text-center">
            <div class="metric-label">Target Qty.</div>
            <div class="metric-desc">for the day</div>
            <div class="metric-value-box">125 m²</div>
        </div>

        <div class="text-center">
            <div class="metric-label">Planned Qty.</div>
            <div class="metric-desc">for the day</div>
            <div class="metric-value-box">115 m²</div>
        </div>

        <div class="text-center">
            <div class="metric-label">Short Fall</div>
            <div class="metric-desc">Target VS Plan</div>
            <div class="metric-value-box">-10 m²</div>
        </div>

        <div class="text-center">
            <div class="metric-label">Backlog</div>
            <div class="metric-desc">Cumulative</div>
            <div class="metric-value-box">-10 m²</div>
        </div>

        <div class="status-circle">13%</div>
    </div>

</div>


<div class="section-divider"></div>


        <!-- Apartments Table -->
        <div class="table-responsive">
          <table class="table table-sobha">
            <thead>
              <tr>
                <th style="width:24px;"></th>
                <th>Apartment</th>
                <th>Priority</th>
                <th>Required Quantity</th>
                <th>Planned Quantity</th>
                <th>Completion Till Date</th>
                <th>Planned Manpower</th>
                <th>Reason for Gap</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="apt in apartments" :key="apt.apartment">
                <td class="apartment-handle">&#9776;</td>
                <td>{{ apt.apartment }}</td>
                <td>{{ apt.priority }}</td>
                <td>{{ apt.requiredQty }}</td>
                <td><input class="input-sm text-center" v-model="apt.plannedQty" /></td>
                <td>0 m²</td>
                <td><input class="input-sm text-center" v-model="apt.plannedManpower" /></td>
                <td>{{ apt.reason }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- SUB ACTIVITY 2 -->
      <div class="mt-3">


<div class="d-flex justify-content-between align-items-start flex-wrap">

    <!-- LEFT SECTION -->
    <div class="left-info" style="flex: 1; min-width: 250px; margin-right: 20px;">
        <div class="text-muted small mb-1">Sub-Activity Name</div>
        <div class="fw-semibold mb-1 subactivity-title">Door Side Tiling - <span class="fw-normal">WO1-TA-L6-TL-002</span></div>
        <div class="productivity-info mb-1">
            ASTP Productivity: <b>4</b>&nbsp;&nbsp;Planned Manpower: <b>40</b>
        </div>
        <div class="productivity-info mb-1">
            <span class="fw-semibold">Start Date:</span> 16 - April - 2025 &nbsp;&nbsp;
            <span class="fw-semibold">Finish Date:</span> 19 - April - 2025
        </div>
    </div>

    <!-- RIGHT SECTION -->
    <div class="d-flex align-items-end flex-wrap gap-3">
        <div class="text-center">
            <div class="metric-label">Target Qty.</div>
            <div class="metric-desc">for the day</div>
            <div class="metric-value-box">140 m²</div>
        </div>

        <div class="text-center">
            <div class="metric-label">Planned Qty.</div>
            <div class="metric-desc">for the day</div>
            <div class="metric-value-box">100 m²</div>
        </div>

        <div class="text-center">
            <div class="metric-label">Short Fall</div>
            <div class="metric-desc">Target VS Plan</div>
            <div class="metric-value-box">-40 m²</div>
        </div>

        <div class="text-center">
            <div class="metric-label">Backlog</div>
            <div class="metric-desc">Cumulative</div>
            <div class="metric-value-box">-60 m²</div>
        </div>

        <div class="status-circle">14%</div>
    </div>

</div>



        
      
      </div>
    </div>


    

    <!-- OTHER ACTIVITIES -->
<div class="activity-card">

 <div class="activity-header-row">


        <div>
          <div>Activity Name</div>
          <span class="fw-bold activity-title">Floor Tiling -</span> WO1-TA-L6-TL<br>
          <span class="activity-info">
            Total Quantity: 1000 m²&nbsp;&nbsp;Man Days: 250 Days
          </span>

        </div>
        <span>
          <span class="date-green">Start Date:</span> 18 - April - 2025
          <span class="date-red ms-3">Finish Date:</span>
          20 - April - 2025</span>
      </div>

      </div>



      <div class="activity-card">

 <div class="activity-header-row">


        <div>
          <div>Activity Name</div>
          <span class="fw-bold activity-title">Floor Tiling -</span> WO1-TA-L6-TL<br>
          <span class="activity-info">
            Total Quantity: 1000 m²&nbsp;&nbsp;Man Days: 250 Days
          </span>

        </div>
        <span>
          <span class="date-green">Start Date:</span> 18 - April - 2025
          <span class="date-red ms-3">Finish Date:</span>
          20 - April - 2025</span>
      </div>

      </div>



</div>



  </div>
</template>

<script setup>
import { ref } from 'vue';
const apartments = ref([
  { apartment: 'A601', priority: 1, requiredQty: 50, plannedQty: 30, plannedManpower: 8, reason: 'Material Not available' },
  { apartment: 'A602', priority: 2, requiredQty: 50, plannedQty: 25, plannedManpower: 6, reason: 'Due to Rain' },
  { apartment: 'A603', priority: 3, requiredQty: 50, plannedQty: 20, plannedManpower: 5, reason: 'Unskilled Mason' },
  { apartment: 'A604', priority: 4, requiredQty: 100, plannedQty: 40, plannedManpower: 10, reason: 'Equipment Repairs/Breakdown' },
]);
</script>
