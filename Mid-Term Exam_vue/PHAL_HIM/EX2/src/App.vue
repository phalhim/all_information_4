<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="mb-3">
          <label for="number1" class="form-label">Number 1</label>
          <input type="number" id="number1" class="form-control" v-model="number1" />
        </div>
        <div class="mb-3">
          <label for="number2" class="form-label">Number 2</label>
          <input type="number" id="number2" class="form-control" v-model="number2" />
        </div>
        <div class="mb-3">
      <input type="radio" name="operator" id="add" class="btn btn-primary me-2" v-model="operator" value="add"> +
          <input type="radio" name="operator" id="multiply" class="btn btn-primary me-2" v-model="operator" value="multiply"> -
          <button class="btn btn-danger" @click="compute()">Clear</button>
        </div>
        <div class="mt-3">
          <h5>Result: {{ result }}</h5>
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
      number1: "",
      number2: "",
      result: 0,
      operator: ""
    };
  },
  methods: {
    compute() {
      const num1 = parseFloat(this.number1);
      const num2 = parseFloat(this.number2);
      if (this.operator === "add") {
        this.result = num1 + num2;
      } else if (this.operator === "multiply") {
        this.result = num1 - num2;
      }
    }
  }
};
</script>

<style>
body {
  margin-top: 50px;
}
</style>
