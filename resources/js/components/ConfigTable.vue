<template>
  <div class="config-card-outer">
    <!-- HEADER BAR -->
    <div class="config-header d-flex justify-content-between align-items-center">
      <div class="config-header-title">PROJECT CONTROL</div>
      <div>
        <button class="btn btn-dark btn-action me-2">Save</button>
        <button class="btn btn-dark btn-action me-2">Export Config</button>
        <button class="btn btn-dark btn-action"><i class="bi bi-upload me-1"></i> Bulk Upload</button>
      </div>
    </div>

    <div class="gray-content">
    <!-- FILTER ROW -->
    <div class="config-filter d-flex align-items-center flex-wrap">
      <span class="filter-label">Filter By</span>
      <select class="form-select form-select-sm config-filter-select"><option>Project</option></select>
      <select class="form-select form-select-sm config-filter-select"><option>Division</option></select>
      <select class="form-select form-select-sm config-filter-select"><option>Sub-Division</option></select>
      <select class="form-select form-select-sm config-filter-select"><option>Tower</option></select>
      <select class="form-select form-select-sm config-filter-select"><option>Level</option></select>
    </div>

    <!-- CONFIG TABLE -->
    <div class="config-table-wrap table-responsive">
      <table class="table table-borderless config-table align-middle mb-0">
        <thead>
          <tr>
            <th>S. No</th>
            <th>Sub-Activity Code</th>
            <th>Activity Name</th>
            <th>Sub-Activity Name</th>
            <th>Unit</th>
            <th>Apartment Typology</th>
            <th>Quantity</th>
            <th>UOM</th>
            <th>Priority</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(row, i) in rows" :key="i">
            <td>{{ i + 1 }}.</td>
            <td>{{ row.code }}</td>
            <td>{{ row.activity }}</td>
            <td>{{ row.subActivity }}
            </td>
            <td>{{ row.unit }}</td>
            <td>
              <select class="form-select form-select-sm config-input">
                <option v-for="type in apartmentTypes" :selected="row.apartmentTypology === type">{{ type }}</option>
              </select>
            </td>
            <td>
              <input class="form-control form-control-sm config-input text-end" v-model="row.quantity" />
            </td>
            <td>
              <select class="form-select form-select-sm config-input">
                <option v-for="uom in uoms" :selected="row.uom === uom">{{ uom }}</option>
              </select>
            </td>
            <td>
              <select class="form-select form-select-sm config-input">
                <option v-for="n in 10" :selected="row.priority == n">{{ n }}</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

</div>

  </div>
</template>

<script setup>
import { ref } from 'vue';
const apartmentTypes = ['1 BHK Type A', '2 BHK Type B', '3 BHK Type C'];
const uoms = ['Kg', 'm²', 'm³'];
const rows = ref([
  { code: 'WO-TA-L6-GC-001', activity: 'Gypsum Ceiling', subActivity: 'Shadow Angle Fixing: Dry Area', unit: 'A101', apartmentTypology: apartmentTypes[0], quantity: 400, uom: 'Kg', priority: 3 },
  { code: 'WO-TA-L6-GC-002', activity: 'Gypsum Ceiling', subActivity: 'Gypsum Ceiling Boarding: Dry Area', unit: 'A102', apartmentTypology: apartmentTypes[1], quantity: 200, uom: 'Kg', priority: 2 },
  { code: 'WO-TA-L6-GC-002', activity: 'Gypsum Ceiling', subActivity: 'Gypsum Ceiling Boarding: Dry Area', unit: 'A103', apartmentTypology: apartmentTypes[1], quantity: 50, uom: 'Kg', priority: 4 },
  { code: 'WO-TA-L6-GC-003', activity: 'Gypsum Ceiling', subActivity: 'Joint Tapino And Majim-Dry Area', unit: 'A104', apartmentTypology: apartmentTypes[1], quantity: 2000, uom: 'm²', priority: 5 },
  { code: 'WO-TA-L6-GC-004', activity: 'Gypsum Ceiling', subActivity: 'Bulk Head Boarding - Framing', unit: 'A105', apartmentTypology: apartmentTypes[2], quantity: 500, uom: 'Kg', priority: 6 },
  { code: 'WO-TA-L6-GC-002', activity: 'Gypsum Ceiling', subActivity: 'Gypsum Ceiling Boarding: Dry Area', unit: 'A106', apartmentTypology: apartmentTypes[2], quantity: 100, uom: 'Kg', priority: 7 },
  { code: 'WO-TA-L6-GC-005', activity: 'Gypsum Ceiling', subActivity: 'Gypsum Ceiling Bdlik jig', unit: 'A107', apartmentTypology: apartmentTypes[2], quantity: 300, uom: 'Kg', priority: 8 },
  { code: 'WO-TA-L6-GC-002', activity: 'Gypsum Ceiling', subActivity: 'Gypsum Ceiling Boarding: Dry Area', unit: 'A108', apartmentTypology: apartmentTypes[1], quantity: 1800, uom: 'm³', priority: 1 },
  { code: 'WO-TA-L6-GC-006', activity: 'Gypsum Ceiling', subActivity: 'Framing-Gituco Wail Area', unit: 'A109', apartmentTypology: apartmentTypes[2], quantity: 1500, uom: 'm²', priority: 10 },
  { code: 'WO-TA-L6-GC-007', activity: 'Gypsum Ceiling', subActivity: 'Shadow Flunudt Filling', unit: 'A110', apartmentTypology: apartmentTypes[2], quantity: 300, uom: 'Kg', priority: 9 },
  { code: 'WO-TA-L6-GC-001', activity: 'Gypsum Ceiling', subActivity: 'Shadow Angle Fixing: Dry Area', unit: 'A---', apartmentTypology: apartmentTypes[0], quantity: 400, uom: 'Kg', priority: 6 },
])
</script>

<style scoped>
.config-card-outer {
  padding: 42px 0 0 0;
  width: 100%;
  min-height: 100vh;
}
.config-header {
  background: linear-gradient(90deg, #2a2a2a 60%, #181818 100%);
  color: #fff;
  font-weight: 600;
  font-size: 1.42rem;
  border-radius: 16px 16px 16px 16px;
  padding: 16px 38px 16px 32px;
  margin-bottom: 20px;
}
.config-header-title {
  font-size: 1.25em;
  font-weight: 700;
  letter-spacing: .01em;
}
.btn-action {
  font-weight: 500 !important;
  font-size: 1.04rem !important;
  border-radius: 12px !important;
  padding: 8px 28px !important;
}

.config-filter {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 12px;
  padding: 17px 30px 14px 22px;

  font-size: 1.01em;
}

.config-filter-select {
  flex: 1 1 180px;
  max-width: 200px;
  font-size: 1.04em;
  border-radius: 8px !important;
  height: 38px;
  min-width: 120px;
}

/* .config-filter {
  padding: 17px 30px 14px 22px;
  background: #fff;
  border-radius: 0 0 14px 14px;
  border: 1.2px solid #ededed;
  font-size: 1.01em;
  gap: 18px !important;
} */
.filter-label {
  margin-right: 10px;
  font-weight: 500;
  font-size: 1.09em;
}
/* .config-filter-select {
  min-width: 144px;
  margin-right: 0;
  font-size: 1.04em;
  border-radius: 8px !important;
  height: 38px;
} */
.config-card {
  background: #fff;
  border-radius: 16px;
  padding: 0 18px 10px 18px;
  border: 1.4px solid #e7e7e7;
  box-shadow: 0 2px 18px #00000010;
  margin-top: 0;
  margin-bottom: 22px;
}
.config-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
}
.config-table thead th {
  background: #f7f7f7;
  /* font-weight: 700; */
  color: #242424;
  /* font-size: 1.01rem; */
  border-bottom: 1px solid #ededed;
  padding: 10.5px 10px 10.5px 10px;
  white-space: nowrap;
}
.config-table tbody td {
  background: #fff;
  border-bottom: 1px solid #ededed;
  padding: 10px 10px;
  font-size: 1.01em;
  vertical-align: middle;
  white-space: nowrap;
}
.config-table tbody tr:last-child td {
  border-bottom: none;
}
.config-input {
  min-width: 124px;
  max-width: 150px;
  border-radius: 7px !important;
  background: #fff;
  font-size: 0.99em;
  font-weight: 500;
  color: #222;
  border: 1.1px solid #e4e4e4;
  height: 34px;
  padding: 0 7px;
}
@media (max-width: 900px) {
  .config-card-outer, .config-card {
    padding: 11px;
    border-radius: 13px;
  }
  .config-header, .config-filter {
    padding-left: 11px;
    padding-right: 11px;
    border-radius: 13px;
  }
  .config-table th, .config-table td {
    font-size: 0.945em;
    padding: 8px 4px;
    white-space: normal;
  }
}
@media (max-width: 700px) {
  .config-filter {
    flex-direction: column;
    align-items: stretch;
    gap: 8px !important;
    padding: 9px 5px;
  }
  .config-filter-select {
    width: 100%;
    min-width: 0;
  }
  
  
}
/* Allow text to wrap and break lines in all columns */
.config-table th,
.config-table td {
  max-width: 150px;        /* or any limit */
  white-space: normal;     /* allows wrapping */
  word-wrap: break-word;   /* breaks long words */
  overflow-wrap: break-word;
   border: 1px solid #ddd; 
}

/* Keep the column header in a single line */
.config-table th:nth-child(4) {
  white-space: nowrap;
}

/* Allow the column content (td) to wrap */
.config-table td:nth-child(4) {
  white-space: normal;
  word-break: break-word;   /* Break long words if needed */
  max-width: 200px;         /* Optional: restrict width */
}

/* Prevent line break in Sub-Activity Code (2nd column) */
.config-table th:nth-child(2),
.config-table td:nth-child(2) {
  white-space: nowrap;
}

/* Optional: set a max-width if needed (remove if not required) */
.config-table td:nth-child(2) {
  max-width: 200px;
  overflow: hidden;
  text-overflow: ellipsis;  /* Adds "..." if text overflows */
}

.gray-content{
  background: white;
/* // padding: 15px; */
  border-radius: 24px;
}

.main-content {
  
  background: #f1f4f9;
  min-height: 100vh;

}


</style>
