<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div v-for="postcard in postcards" :key="postcard.id" class="card my-3">
                    <div class="card-header">
                        <h3>Da: {{postcard.sender}}</h3>
                        <h5>A: {{postcard.address}}</h5>
                    </div>

                    <div class="card-body">
                        {{postcard.text}}
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
                postcards: []
            }
        },
        mounted() {
            axios
            .get('/postcards/list')
            .then(result => {
                this.postcards = result.data;
            })
            .catch(errorMessage => {
                console.log('Errore:', errorMessage);
            });
        }
    }
</script>