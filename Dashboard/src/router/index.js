import { createRouter,createWebHistory} from "vue-router";


import dashboard from '../Dashboard/Master/Dashboard.vue'

import  users from '../Dashboard/Users/users.vue'
import  users_Create from '../Dashboard/Users/create-users.vue'
import  users_activites from '../Dashboard/Users/users-activites.vue'
import hospitaux from "../Dashboard/Hopitaux/Hopitaux.vue"

// import parteners from "../Dashboard/Parteners/parteners.vue"
// import evenements from "../Dashboard/Evenements/evenements.vue"
// import bilan from "../Dashboard/Bilan/bilan.vue"
// import alertes from "../Dashboard/Alertes/Alertes.vue"
// import don from "../Dashboard/Don/don.vue"
const routes = [
    {
        name:'Dashboard',
        path:'/',
        component: dashboard,
      children:[
      
        {
            name:'usersList',
            path:'/users',
            component: users
    
        },   
 
        {
            name:'users-create',
            path:'/users_create',
            component: users_Create
    
        },  
        {
            name:'users-activites',
            path:'/users/activites',
            component:users_activites
    
        }, 
        
        {
            name:'hospitaux',
            path:'/hospitaux',
            component: hospitaux
    
        },
        {
            name:'hospitaux-activites',
            path:'/hospitaux',
            component: hospitaux
    
        },
    //       {
    //         name:'bilan',
    //         path:'/bilan',
    //         component: bilan
    
    //     },
    //     ,   {
    //         name:'alertes',
    //         path:'/alertes',
    //         component: alertes
    
    //     },
    //        {
    //         name:'don',
    //         path:'/don',
    //         component: don
    
    //     }
       
    //  
 ]

    // 
}
 
    
];

const router = Router();

export default router;
function Router() {
    const router = new createRouter({
        history: createWebHistory(),
        routes,
    });
    return router;
}