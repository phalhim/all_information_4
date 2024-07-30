<template>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ name}}</td>
        <td>{{ email }}</td>
        <td>{{ phone }}</td>
        <td>
          <button class="btn btn-info btn-sm" @click="showDetails()">Details</button>
        </td>
      </tr>
    </tbody>
  </table>
</template>
  
  <script>
export default {
  name: "EmployeeTable",
  props: {
    "name": String,
    "email": String,
    "phone": String,
    "image": String
  },
  methods: {
    showDetails() {
      // show the information on card EmployeeCard
      alert(`Name: ${this.name} \nEmail: ${this.email} \nPhone: ${this.phone}`);
    }
  }
};
</script>
  
  <style>
.table {
  width: 100%;
  margin-top: 20px;
}
</style>
  