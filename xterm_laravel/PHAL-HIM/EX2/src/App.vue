<template>
  <div class="container">
    <!-- Add User Form -->
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form @submit.prevent="addUser" class="mb-3">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Name" v-model="newUser.name" />
            <input type="email" class="form-control" placeholder="Email" v-model="newUser.email" />
            <button type="submit" class="btn btn-primary">Add User</button>
          </div>
        </form>
      </div>
    </div>

    <!-- User List -->
    <div class="row">
      <div class="col-md-6 mx-auto">
        <ul class="list-group">
          <li v-for="user in users" :key="user">
            <div class="p-3">
              <span>{{ user.name }}</span> -
              <span>{{ user.email }}</span>
              <button class="btn btn-danger btn-sm float-end" @click="removeUser()">Remove</button>
              <button class="btn btn-primary btn-sm float-end me-2" @click="saveUserEdit()">Edit</button>
            </div>
          </li>
          <div>
            <div class="input-group">
              <input type="text" class="form-control" v />
              <input type="email" class="form-control" />
              <button class="btn btn-success btn-sm">Save</button>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      searchQuery: "",
      users: [
        { name: "Alice", email: "alice@example.com", editMode: false },
        { name: "Bob", email: "bob@example.com", editMode: false },
        { name: "Charlie", email: "charlie@example.com", editMode: false }
      ],
      newUser: { name: "", email: "" }
    };
  },
  methods: {
    addUser() {
      this.users.push(this.newUser);
      this.newUser = { name: "", email: "" };
    },
    removeUser() {
      this.users.splice(this.users.indexOf(this.user), 1);
    },
    toggleEditMode() {
      this.showForm = !this.showForm;
    },
    saveUserEdit() {
      this.newUser.naem = this.users.name;
      this.newUser.email = this.users.email;
      this.showForm = true;

    }
  }
};
</script>

<style>
</style>
