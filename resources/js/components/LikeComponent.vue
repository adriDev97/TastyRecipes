<script>
import Dolike from "./Dolike.vue";
export default {
    components: { Dolike },
    props : ['user', 'recipe', 'like'],
    data() {return {
        localLike : false,
        totalLikes : [],
        countLikes : null,
    }},
    mounted () { 
        this.getLikes();
        this.localLike = this.like;
        console.log(this.localLike)
    },
    methods : {
        getLikes() {
            axios.get('/api/likes').then((response) => {
                this.totalLikes = response.data.filter(totalRecipeLike => totalRecipeLike.recipe_id == this.recipe);
                this.countLikes = this.totalLikes.length;
            })
        },
        disLike() {
            axios.delete('/api/likes/' + this.localLike).then((response) => {
                this.totalLikes = this.totalLikes.filter((o) => o.id !== this.localLike);
                this.localLike = false;
                this.countLikes--;
            }).catch((error) => {
          console.log(error.response);
        });
        },
        likee(like_id) {
            this.totalLikes.push(like_id);
            this.localLike = like_id;
            this.countLikes++;
        }
    }
}
</script>
<template>
    <div v-if="localLike">
        <form @submit.prevent="disLike">
            <button type="submit" class="border-0 bg-white text-danger"><i class="fa-solid fa-heart color-red"></i></button>{{ countLikes }}
        </form>
    </div>
    <div v-else>
        <dolike :user="this.user" :recipe="this.recipe" @do-like="likee"></dolike>{{ countLikes }}
    </div> 
</template>