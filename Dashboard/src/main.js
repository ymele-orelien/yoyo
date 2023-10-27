import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'


//jimporte le js


//jimporte les routes

import router from "./router"
const app= createApp(App)
app.use(router)
app.mount('#app')

