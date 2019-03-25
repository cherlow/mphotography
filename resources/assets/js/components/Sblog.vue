<template>
    <div>
        <div v-for="blog in blogs" :key="blog.id" class="f-blog">
							<a :href="'blogdetails/'+blog.id" class="blog-img" :style="'background-image: url(/storage/app_images/'+blog.cover_pic+')'">
							</a>
							<div class="desc">
								<h2><a :href="'blogdetails/'+blog.id">{{blog.name}}</a></h2>
								<p class="admin"><span>{{blog.created_at |mydate}}</span></p>
							</div>
						</div>
    </div>
				
</template>

<script>
export default {
    data(){
        return {
            blogs:[],
        }
    },
    created(){
        this.fetchblogs();
    },
    methods:{
        fetchblogs(){
            axios.get('/api/bilogs').then(response=>{
                this.blogs=response.data;
            })
        }
    }

}
</script>

<style>

</style>
