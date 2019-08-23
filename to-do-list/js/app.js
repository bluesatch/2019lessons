

var todos = [];

const addTodo =()=> {
    event.preventDefault();
    // stop form from reloading the page
    let todo = document.getElementById('todo');
    var todoList = document.getElementById('todoList');
    var found = false;
    todos.forEach(function(todoItem){
        if (todoItem === todo.value) {
            found = true;
        }
    })

    if (!found) {
        todoList.innerHTML += `<li>${todo.value}</li>`
        todos.push(todo.value);
        // console.log(todos);
        // grab todo input and get its value;  then add to todoList

    }
    // concatenate todoList with todo.value
    // console.log(todo.value);
    todo.value = '';
    var todoListItems = document.getElementsByTagName('li');
    for (let i = 0; i < todoListItems.length; i++) {
        todoListItems[i].addEventListener('click', function(e){
            e.target.className = 'done';
        });
        
    }
}

const hideDone = ()=> {
    var todoList = document.getElementById('todoList');
    if (todoList.className === 'mask') {
        todoList.className = '';
    } else {
        todoList.className = 'mask';
    }
}