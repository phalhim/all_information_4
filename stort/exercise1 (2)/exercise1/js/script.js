// This is our data structure of TASKS
let tasks = [
  { description: "Do homework", priority: 1 },
  { description: "Wash clothes", priority: 0 },
  { description: "Dream about Javascript", priority: 1 },
];

function displayArray(array) {

  // 1 - From the parent body : create a new div  (class : container)
  const div = document.createElement('div');
  div.className = 'container'

  // 2 - For all tasks,  create a new div (class : item), (textContent : task.description)
  for (const task of tasks) {
    const item = document.createElement('div');
    item.className = 'item'
    item.textContent = task.description

    // 4 - append it the container
    div.appendChild(item)

    // 3 - The priority defines the color of your task (1 (HIGH) = red, 0 (LOW) = gray)
    if (task.priority === 1) {
      item.style.backgroundColor = 'red'
    } else {
      item.style.backgroundColor = 'gray'
    }
  }

  // 5 - append div class container to body
  const body = document.querySelector('body');
  body.appendChild(div)
}

displayArray(tasks);
