const express = require('express');
// const { v4: uuidv4 } = require('uuid');
const taskModel = require('./database/posts.json');
const e = require('express');
const app = express();
const port = 3000;
app.use(express.json());
app.listen(port, () => {
    console.log('Example app listening at:' + port);
});
app.get('/', (req, res) => {
   // TODO
  const data ={
    "status": 200,
    "message": "Api is working...",
    "endpoint": "/api/posts"
  }
  res.json(data);
   
})
/**
 * Description: CRUD posts
 * Endpoint: /api/posts
 */

// Get posts
app.get('/api/posts', (req, res) => {
   // TODO
    const task = taskModel;
    if(!task){
       res.status(404).json({"message": "No post found" ,posts: false});
    }
    res.status(200).json({"massgae":"Get all posts" , posts: task});
    
});

// Get post
app.get('/api/posts/:id', (req, res) => {
    // TODO
    const tasks = taskModel;
   console.log(tasks.id);
  
  
});

// Create a new post
app.post('/api/posts', (req, res) => {
    // TODO
    const tasks = taskModel;
    const post = tasks.push(req.body)
    res.json(post);
});

// Delete post
app.delete('/api/posts/:id', (req, res) => {
    // TODO
    const tasks = taskModel;
    if(!tasks){
        res.status(404).json({"message": "No post found",posts: false});
    }else{
        res.status(200).json({"success":true,posts: tasks})
    }
    res.json(tasks.splice(req.params.id, 1));
})

// Update a post
app.put('/api/posts/:id', (req, res) => {
    // TODO
    const tasks = taskModel;
    res.json(tasks.splice(req.params.id, 1, req.body));
});