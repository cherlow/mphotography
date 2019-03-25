<template>
    <div class="instagram-entry animate-box">
					<a v-for="image in images" :key="image.id" href="#" class="instagram text-center" :style="'background-image: url(/storage/event_images/'+image.name+')'">
					</a>
					
                   
					
				</div>
</template>

<script>
export default {
    data(){
        return {
            images:[]
        }
    },
    created(){
        this.fetchinstagram();
    },
    methods:{
        fetchinstagram(){
            axios.get('/api/instagram').then(response=>{
                this.images=response.data;
            })
        }
    }

}
</script>

<style>

</style>
