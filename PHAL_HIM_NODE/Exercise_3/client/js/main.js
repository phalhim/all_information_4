const URL = '';
function getTodo(res) {
   // TODO
   let url = res.data;
   let get = "";
   for (let urls of url) {

      get += `
      <thead class="bg-primary text-white">
      <tr>
      <th>${urls.Id}</th>
      <th>${urls.Title}</th>
      <th>${urls.Description}</th>
      <th>${urls.Status}</th>
  </tr>
            </thead>
            <tbody>
                <!-- Sample code -->
                <tr>
                    <td>${urls.id}</td>
                    <td>${urls.title}</td>
                    <td>${urls.description}</td>
                    <td><span class="badge bg-success${urls.id}">DONE</span></td>
                </tr>
            </tbody>
     
      
      `
   }
}

// TODO : request axios.get(...)...
