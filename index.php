<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>ToDo List!</title>
</head>

<body>
    <div id=app>
        <section>
            <div class="container">
                <h2>Your ToDo List!</h2>
                <input type="text">
                <input type="submit" value="Inserisci task">
            </div>
        </section>

        <section>
            <div class="container">
                <ul class="todo-list">
                    <li v-for="todo in todos">{{ todo.text }}</li>
                </ul>
            </div>
        </section>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>