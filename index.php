<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.4/dist/css/bootstrap.min.css">
</head>

<body>

    <div id="app">
        <section>
            <div class="container">
                <h1> {{ titolo }} </h1>
            </div>
            <div class="container">
                <form>
                    <input @keyup.enter="sendTask" v-model="newTask" type="text" class="form-control" name="todo" placeholder="Inserisci Task">
                </form>
                <ul>
                    <li v-for="todo in todos" :key="todo">
                        {{ todo }}
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <script src="./app.js"></script>
</body>

</html>
