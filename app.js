const { createApp } = Vue

createApp({
  data() {
    return {
      titolo: 'Todo List',
      todos: [],
      newTask: '',
    }
  },
  methods: {
    fetchTodoList() {
      axios
      .get('./server.php')
      .then((res) =>{
        console.log(res.data)
        this.todos = res.data
      })
      .catch((error) => {
        createApp.log(error)
        this.todos = []
      })
    },
    sendTask() {
      console.log('save task', this.newTask)
      $data = {
        todo: this.newTask
      }
      axios.post('./server.php',$data,{
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      })
    }
  },
  mounted() {
    this.fetchTodoList()
  },
}).mount('#app')