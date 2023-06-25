<script setup>

import axios from "axios"
import { ref, onMounted } from 'vue'
const customers = ref([])

const getCustomers = () => {
    axios.get('/customers')
        .then(res => customers.value = res.data)
        .catch(error = console.log(error))
}

onMounted(() => getCustomers())

</script>
<template>
    <div class="text-center justify-content-start">

        <a href="/" style="text-decoration: none; color: inherit;">
            <h2 class="mb-4">Savings management es</h2>
        </a>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="py-2">
                        <!-- <router-link to="/education-savings"> -->
                        <a href='/education-savings' class="btn btn-primary">Education
                            savings</a>
                        <!-- </router-link> -->
                    </div>

                </div>
                <div class="col">
                    <div class="py-2">
                        <!-- <button class="btn btn-primary">Personal savings</button> -->
                        <a href='/personal-savings' class="btn btn-primary">Education
                            savings</a>
                    </div>
                </div>
                <div class="col">
                    <div class="py-2">
                        <!-- <button class="btn btn-primary">Vacation savings</button> -->
                        <a href='/vacation-savings' class="btn btn-primary">Education
                            savings</a>
                    </div>
                </div>
            </div>

        </div>
        <h3 class="mt-4 mb-4">Customer list</h3>
        <div class="container">
            <div>
                <ul style="list-style: none;" class="">

                    <li v-for="customer in customers" :key="customer.id" class="text-start mb-1">
                        <div class="row">
                            <div class="col-md-2">{{ customer.name }}</div>
                            <div class="col-md-2">{{ customer.id_number }}</div>
                            <div class="col-md-3">{{ customer.phone_number }}</div>
                            <div class="col-md-3">{{ customer.email }}</div>
                            <div class="col-md-1">{{ customer.id }}</div>
                            <div class="col-md-1 m-0"> <a href="delete" class="btn btn-sm btn-primary">+<i
                                        class="bi bi-currency-dollar"></i></a></div>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

    </div>
</template>