<template>
  <div class="article-list">
    <div class>
      <div class="intro">
        <h2 class="text-center">Latest Articles</h2>
        <p
          class="text-center"
        >Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
      </div>
      <div class="row articles">
        <div v-for="article in articles" :key="article.id" class="col-sm-6 col-md-4 item">
          <a :href="'/blogdetails/'+article.id">
          <div id="img-set" :style="'background-image:url(/storage/app_images/'+article.cover_pic+')'">
          </div>
            
          </a>
          <h3 class="name">{{article.name}}</h3>
          <p v-html="article.body.substring(0,300)" class="description art-body"></p>
          <p>
            <span class="small">
              <i class="icon-user2"></i> by: Admin
            </span>
       
          </p>
          <a :href="'/blogdetails/'+article.id">
            <i class="fa fa-arrow-circle-right"></i> More
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      articles: []
    };
  },
  created() {
    this.fetcharticles();
  },
  methods: {
    fetcharticles() {
      axios.get("/api/articles").then(response => {
        this.articles = response.data;
      });
    }
  }
};
</script>

<style scoped>
#img-set{
  width: 100%;
  height:400px;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat
}
.art-body {
  height: 150px;
}
.article-list {
  color: #313437;
  background-color: #fff;
}

.article-list p {
  color: #7d8285;
}

.article-list h2 {
  font-weight: bold;
  margin-bottom: 40px;
  padding-top: 40px;
  color: inherit;
}

@media (max-width: 767px) {
  .article-list h2 {
    margin-bottom: 25px;
    padding-top: 25px;
    font-size: 24px;
  }
}

.article-list .intro {
  font-size: 16px;
  max-width: 500px;
  margin: 0 auto;
}

.article-list .intro p {
  margin-bottom: 0;
}

.article-list .articles {
  padding-bottom: 40px;
}

.article-list .item {
  padding-top: 50px;
  min-height: 425px;
  text-align: center;
}

.article-list .item .name {
  font-weight: bold;
  font-size: 16px;
  margin-top: 20px;
  color: inherit;
}

.article-list .item .description {
  font-size: 14px;
  margin-top: 15px;
  margin-bottom: 0;
}

.article-list .item .action {
  font-size: 24px;
  width: 24px;
  margin: 22px auto 0;
  line-height: 1;
  display: block;
  color: #4f86c3;
  opacity: 0.85;
  transition: opacity 0.2s;
  text-decoration: none;
}

.article-list .item .action:hover {
  opacity: 1;
}
</style>
