<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://st4.depositphotos.com/13194036/22902/i/450/depositphotos_229023724-stock-photo-female-teacher-pointing-finger-mathematical.jpg" class="card-img-top" alt="teacher Image" />
          <div class="card-body">
            <h5 class="card-title" v-for="name in teachers" :key="name">{{ name.name }}</h5>
            <p class="card-text" v-for="ids in teachers" :key="ids">ID: {{ ids.id }}</p>
            <p
              class="card-text"
              v-for="subject in teachers"
              :key="subject"
            >Subject: {{ subject.subject }}</p>
            <p class="text-danger" v-for="score in teachers" :key="score">Score: {{ score.score }}</p>
            <p class="text-danger" :style="getcolor() ">{{ getScore() }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      //I have array object teachers
      teachers: [
        {
          id: 1,
          name: "Charlie Brown",
          image:
            "https://st4.depositphotos.com/13194036/22902/i/450/depositphotos_229023724-stock-photo-female-teacher-pointing-finger-mathematical.jpg",
          subject: "History",
          score: 30
        },
        
      ]
    };
  },
  methods: {
    getScore() {
      let score = this.score;
      if (score > 45) {
          return "Pass";
      } else {
        return "Fail";
      }
    },
    getcolor() {
      return {
        color: this.score < 45 ? "red" : "blue"
      };
    }
  }
};
</script>

<style>
</style>
