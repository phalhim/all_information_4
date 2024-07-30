const container = document.querySelector('#container');
function getUsers(res) {
   // TODO
   let users = res.data.data;
   let html = '';
   for (let user of users) {
      html += `
      <div class="card mb-2">
      <div class="card-body d-flex justify-content-between">
          <h5 class="card-title">${user.name}</h5>
          <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">View</button>
      </div>
  </div> 
  <div class="modal fade" id="myModal">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
              <li>Name: ${user.name}</li>
              <li>email: ${user.email}</li>
              <li>university: ${user.education}</li>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

          </div>
      </div>
      </div> 
      `;
   }
   container.innerHTML = html;

}

// TODO with axios.get() ...

axios
.get('/api/users')
.then(getUsers)
.catch((error) => {console.log(error);})
