<template>
    <div class="pagetitle">
        <h1>Simple utilisateurs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accuiel</a></li>
                <li class="breadcrumb-item">Utilisateurs</li>
                <li class="breadcrumb-item active">listes des utlisateurs</li>
            </ol>
        </nav>
    </div>
    <div class="card-header">
        <h4><i class="fa-solid fa-users"></i> Utilisateurs

            <RouterLink to="/users/activites" class="btn  float-end m-2" style="background-color: #00002E;color: #fff;">
                voir les activites
            </RouterLink>

        </h4>
     

        <div class="card-body">
            <div class="dataTable-search m-2"><input class="dataTable-input" placeholder="Search..." type="text"></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom d'utilisateur</th>
                        <th scope="col">email</th>
                        <th scope="col">groupe sanguin</th>
                        <th scope="col">localisation</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody v-if="this.simpleUsers.length > 0">
                    <tr v-for="(item, index) in this.simpleUsers" :key="index">
                        <th scope="row">{{ item.id }}</th>
                        <td>{{ item.name }}</td>
                        <td>{{ item.email }}</td>
                        <td>{{ item.usersable
.bloodGroup }}</td>
                        <td>{{ item.location }}</td>

                        <td>
                            <button class=" btn btn-danger m-1"><i class="bi bi-exclamation-octagon"></i></button>

                            <button class=" btn btn-warning m-1" style="color: #fff;"><i
                                    class="bi bi-info-circle"></i></button>
                        </td>
                    </tr>

                </tbody>
                <tbody v-else>
                    <tr>

                        <td colspan="7"><button class="btn btn" type="button" disabled="" style="background-color: #00002E; color: #fff;"  > <span 
                                    class="spinner-border spinner-border-sm " role="status" aria-hidden="true"></span>
                                Loading... </button></td>



                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: 'usersList',
    data() {
        return {
            simpleUsers: []
        }
    },
    mounted() {
        this.getUsers();

    },
    methods: {

        getUsers() {

            axios.get('http://127.0.0.1:8000/api/index-simpleUsers').then(res => {
console.log(res);
                this.simpleUsers = res.data.simpleUsers
                console.log(this.simpleUsers)
            });
        }
    },

}

</script>
<style>
.link {
    display: flex;
    text-align: center;
    align-items: center;
}
.dataTable-search{
    width: 100.5%;
 
    display: flex;
    justify-content: end;
}

.link span {
    font-weight: 650;
    font-size: 20px;

}</style>