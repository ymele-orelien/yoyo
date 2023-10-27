<template>
    <div class="comtainer mt-2">
        <div class="card">
            <div class="card-header">
                <h4>enregistrements d'un utilisateurs</h4>

            </div>
            <div class="card-body">
                <ul class="alert alert-warning" v-if="Object.keys(this.errorList).length > 0">
                    <li class="mb-0 ms-3" v-for="(error,index) in this.errorList" :key="index">{{error[0]}}</li>
                </ul>
                <div class="mb-3">
                    <label for="">Nom D'utilisateur</label>
                    <input type="text" v-model="model.simpleUser.name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for=""> email</label>
                    <input type="email" v-model="model.simpleUser.emails" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for=""> genre</label>
                    <input type="text" v-model="model.simpleUser.gender" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for=""> status</label>
                    <input type="text" v-model="model.simpleUser.status" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for=""> localisation</label>
                    <input type="text" v-model="model.simpleUser.location" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for=""> pictures</label>
                    <input type="text" v-model="model.simpleUser.pictures" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for=""> descriptions</label>
                    <input type="text" v-model="model.simpleUser.descriptions" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">groupe sanguin</label>
                    <input type="text" v-model="model.simpleUser.bloodGroup" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">dateBirth</label>
                    <input type="text" v-model="model.simpleUser.dateBirth" class="form-control" />
                </div>


                <div class="mb-3">

                    <button type="submit" @click="saveUser" class="btn btn-primary">Enregistrer</button>
                </div>


            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: 'users-create',
    data() {
        return {
            errorList: "",
            model: {
                simpleUser: {
                    name: "",
                    email: "",
                    status: "",
                    location: "",
                    pictures: "",
                    descriptions: "",
                    gender: "",
                    bloodGroup: "",
                    dateBirth: ""

                }
            }
        }
    },
    methods: {
        saveUser() {
            var mythis = this;
            axios.post("http://localhost/:8000/api/create-simpleUsers", this.model.simpleUser)
                .then(res => {

                    console.log(res.data)
                    alert(res.data.message);
                    this.model.simpleUser = {
                        name: "",
                        email: "",
                        status: "",
                        location: "",
                        pictures: "",
                        descriptions: "",
                        gender: "",
                        bloodGroup: "",
                        dateBirth: ""
                    }
                })
                .catch(function (error) {
                    if (error.response) {
                        if (console.log(error.response.status) == 422) {
                            mythis.errorList = error.response.data.errors
                        }
                        // console.log(error.response.data);
                        // console.log(error.response.status);
                        // console.log(error.response.headers);
                    }
                    else if (error.request) {
                        console.log(error.request);

                    }
                    else {
                        console.log('Error', error.message);
                    }
                })
        }
    },
}


</script>
<style></style>