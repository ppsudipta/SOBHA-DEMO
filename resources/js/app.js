import { createApp } from 'vue';
import Dashboard from './components/Dashboard.vue';
import ConfigTable from './components/ConfigTable.vue';

// Mount Dashboard
const dashboardEl = document.getElementById('dashboard');
if (dashboardEl) {
    createApp(Dashboard).mount(dashboardEl);
}

// Mount Config Table
const configEl = document.getElementById('config');
if (configEl) {
    createApp(ConfigTable).mount(configEl);
}
