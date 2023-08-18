<template>
    <div class="container">
        <button @click="searchAgain()" class="btn btn-primary">Search</button>
        <div class="row justify-content-center">
            <div v-for="property in properties" :key="property.index" class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        {{property.title}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
        return {
            properties: [],
        }
    },
        methods: {
            getProperties(){
                axios({
                    url: 'http://localhost:8000/api/search',
                    method: 'get',

                }).then((response) => {
                    console.log(response);
                    this.properties = response.data.houses
                })
            },
            searchNow(){
                axios({
                    url: "http://localhost:8000/api/search?key=red",
                    method: 'get',
                    // params: { key: 'red'}

                }).then((response) => {
                    console.log(response);
                    this.properties = response.data.houses
                })
            },
            searchAgain(){
                axios({
                    url: "http://localhost:8000/api/search?key=green",
                    method: 'get',
                    // params: { key: 'red'}

                }).then((response) => {
                    console.log(response);
                    this.properties = response.data.types
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getProperties()
        }
    }
</script>
